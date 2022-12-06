<?php

namespace App\View\Components;

use App\Models\Customer;
use Illuminate\View\Component;
use App\Models\User;

class AdminDashbord extends Component
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
       
        $cus=Customer::all();
        $dat=user::where('statue', '=', 1)->get();
   
        return view('components.admin-dashbord', ['data'=>$dat,
        'custtomers'=>$cus
    ]);
    }
}
