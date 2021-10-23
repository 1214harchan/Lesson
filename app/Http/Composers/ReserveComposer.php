<?php
namespace App\Http\Composers;

use Illuminate\View\View;

class ReserveComposer{
    public function compose(View $view){
        $view->with('view_message','Hi'. $view->getName());
    }
}