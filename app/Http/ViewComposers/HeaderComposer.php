<?php
namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\Models\Categoy;
class HeaderComposer{
    public function compose(View $view){
    $view->with('categor', Categoy::where('is_online',1)->get());
    }
}
