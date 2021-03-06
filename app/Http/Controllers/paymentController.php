<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Slim\Http\Response;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Cart;
use Illuminate\Support\Arr;
use Faker\Provider\ar_SA\Payment;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;





class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Stripe::setApiKey('sk_test_51KOiy8GAymI58WNINuZUGqdyTUDkokfPBxDjZqNYDWzA99YNXnRetd7O2OSUB5mnhPrd0Ws037enVDEuvXqy0WQB00bROBjIg2');

        $intent=PaymentIntent::create([
        // Make sure the total amount fits within Afterpay transaction amount limits:
        // https://stripe.com/docs/payments/afterpay-clearpay#domestic-transactions-only
            'amount' => round(Cart::getTotal()),
            'currency' => 'eur',

            'payment_method_types'=>['afterpay_clearpay'],
            'shipping' => [
                'name' => 'Jenny Rosen',
                'address' => [
                'line1' => '1234 Main Street',
                'city' => 'San Francisco',
                'state' => 'CA',
                'country' => 'US',
                'postal_code' => '94111',
                ],
            ],
            ]);


            $payment_intent=Arr::get($intent,'id');


        return view('payment.index',compact('payment_intent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function commandMail($nom,$prenom,$tel,$cart,$total){
        $admins= \App\Models\User::where('role_id','1')->get();
        foreach($admins as $admin)
        Mail::to($admin->email)->send(new OrderMail($nom,$prenom,$tel,$cart,$total));
    }
    public function store(Request $req)
    {
        //$payment_intent =$req->id_p;
        $order = new Order;
        //$order->payment_intent_id = $payment_intent;
        $order->montant = Cart::getTotal();
        $carts= Cart::getContent();


        $prods=[];
        $i=0;
        foreach( $carts as $prod){
            $prods['prod_'.$i][]=$prod->name;
            $prods['prod_'.$i][]=$prod->price;
            $prods['prod_'.$i][]=$prod->quantity;
            $prods['prod_'.$i][]=$prod->attributes['images'];
            $prods['prod_'.$i][]=$prod->attributes['color'];
            $prods['prod_'.$i][]=$prod->attributes['size'];
            $i++;
        }
        $order->products =serialize($prods);
        if (auth()->check()) {
            $order->user_id = Auth::user()->id;
            $order->name = Auth::user()->name;
            $order->lastname = Auth::user()->lastname;
            $order->tel = Auth::user()->tel;
            $this->commandMail(Auth::user()->name,Auth::user()->lastname,Auth::user()->tel,$carts,Cart::getTotal());

        }else{
        $order->name = $req->name;
        $order->lastname = $req->prenom;
        $order->tel = $req->tel;
        $order->save();
        $this->commandMail($req->user_name,$req->prenom, $req->tel,$carts,Cart::getTotal());
        }

        session()->flash('Success', "Votre commande ?? ??t?? enregistr?? avec succ??s. Nous vous recontacterons dans les plus bref d??lais pour proc??der au paiement et ?? l'exp??dition de votre commande");

        Cart::clear();
        return view('shop.merci');
    }



    public function merci(){
        //
        return session()->has('success') ? view('shop.merci') :redirect()->route('payment.index')->with('error', "le paiment n'a pas abouti");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
