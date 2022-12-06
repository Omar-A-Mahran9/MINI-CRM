<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;
class Addcust extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $dat=user::where('statue', '=', 1)->get();

        return view('components.addcust', ['data'=>$dat]);
    }
}
