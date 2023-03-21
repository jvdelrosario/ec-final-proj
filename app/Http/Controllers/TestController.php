<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\categories;
use App\Models\products;
use Illuminate\View\View;

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
    public function viewProducts(){
        $categories = categories::all();
        $products = products::all();
        return view('shop',['categories'=>$categories,
                            'products'=>$products]);
    }
    // public function getProducts(string $prodid): View{
    //     return view ('cart',['id'=> products::findOrFail($prodid)]);
    // }
    public function getProduct(String $prodid):View{
      
        $products = DB::table('products')->where('id', $prodid)->get();
        return view('cart',['products'=>$products]);
       
        // foreach($products as $prod){
        //     echo $prod;
        // };
      
    }
}
