<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\User;
use App\View\Components\AdminDashbord;
use Illuminate\Console\View\Components\Component;

class CreateController extends Controller
{
    //
    public function Create($f)
    {
        return view('dashboard', ['addemp'=>$f]);
    }

    public function noacc($f)
    {
 
        return view('dashboard',['acc'=>$f]);
    }
  

    public function store()
    {
        user::create([
           'name' => request('name'),
           'email'=>  request('email'),
           'password'=>     request('password'),
           'statue'=> 1
        ]);
        return redirect('/dashboard');
    }
    public function index()
    {
        return view('dashboard');
    }

    public function storee()
    {
        Customer::create([
            'name' => request('name'),
            'email'=>  request('email'),
            'password'=>     request('password'),
            'statues'=> request('statues'),
            'EmpId'=>request('empres')
         ]);
         return redirect('/dashboard');
    }

    public function delete($id){
        Customer::where('id', '=', $id)->delete();
        return redirect('/dashboard');
    }
}