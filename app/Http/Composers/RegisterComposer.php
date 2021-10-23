<?php
namespace App\Http\Composers;

use Illuminate\View\View;

class RegisterComposer
{
    public function compose(View $view)
    {
        $view->with('view_message','this view is "' . $view->getName() . '"!!');
    }
}