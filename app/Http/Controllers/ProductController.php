<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    function index(){
        $productData = Product::all();
        return view('product',['products'=>$productData]);
    }

    function detail($id){
        $productDetail = Product::find($id);
        return view('detail',['productDetail'=>$productDetail]);
    }

    function search(Request $request){
        $searchData=Product::where('name','like', '%'.$request->input('query').'%')->get();
        return view('search',['products'=>$searchData]);
    }

    function addToCart(Request $request){
        if($request->session()->has('user')){
            $cart=new Cart;
            $cart->user_id=$request->session()->get('user')['id'];
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect("/login");
        }
    }

    static function cartItem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartList(){
        $userId = Session::get('user')['id'];
        $cartList = DB::table('cart')->join('products','cart.product_id','=','products.id')->where('cart.user_id',$userId)->get();
        return view('cartlist',['cartList'=>$cartList]);
    }
}
