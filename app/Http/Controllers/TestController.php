<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    public function index(){
        // Session::put('name', ['John Doe']);
        // Session::push('age', [0,1,2,3,4]);
        // To delete the values wihtin the sessions-------------->
        // Session::flush();
        // We can use this to check if there is an active user 
        // currently login within the platform.----------------->
        // if(Session::has('age')){
        //     dd('Name Does Exist');
        // }else{
        //     dd('Name Does not Exist');
        // }
        // Dump and die to call session values------------------>
        // dd(
        //     Session::get('name')
        //     );
        //This is to output all the sessions-------------------->
        // dd(
        //     Session::all()
        // );
        return view('homepage');
    }
}
