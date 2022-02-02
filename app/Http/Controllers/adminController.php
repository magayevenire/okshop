<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class adminController extends Controller
{
    public function __construct(){
            $this->middleware('auth');
        }

    public function board(){
        if (! Gate::allows('access-admin')) {
            abort(403);
        }
        return view('Admin.board');
    }

    public function updateprod(){
        return view('Admin.updateprod');
    }

    public function addprod(){
        return view('Admin.addprod');
        if (! Gate::allows('access-admin')) {
            abort(403);
        }
    }

    public function client(){
        return view('Admin.client');
        if (! Gate::allows('access-admin')) {
            abort(403);
        }
    }

    public function clientlist(){
        return view('Admin.clientlist');
        if (! Gate::allows('access-admin')) {
            abort(403);
        }
    }

    public function commandes(){
        return view('Admin.commandes');
        if (! Gate::allows('access-admin')) {
            abort(403);
        }
    }

    public function valcom(){
        return view('Admin.valcom');
        if (! Gate::allows('access-admin')) {
            abort(403);
        }
    }


}
