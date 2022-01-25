<?php
namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\Models\Categoy;
class HeaderComposer{
    public function compose(View $view){
    $matches=['is_online'=>1,'parent_id'=>null];
    $view->with('categor', Categoy::where($matches)->get());
    }
}
