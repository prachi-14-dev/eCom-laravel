<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
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
        $cartList = DB::table('cart')->
        join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')->get();
        return view('cartlist',['cartList'=>$cartList]);
    }

    function removeCartItem($id){
        Cart::destroy($id);
        return redirect('cart_list');
    }

    function orderNow(){

        // $userId = Session::get('user')['id'];
        $totalAmount = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        // ->where('cart.user_id','$userId')
        ->sum('products.price');
       
        return view('ordernow',['totalAmount'=>$totalAmount]);

    }

    function placeOrder(Request $request){
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart){
            $order = new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$request->payment;
            $order->payment_status="pending";
            $order->address=$request->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        return redirect('/');
    }

    function myOrders(){
        $userId = Session::get('user')['id'];
        $orderList = DB::table('orders')->
        join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)->get();

        return view('orderlist',['orderList'=>$orderList]);
    }
}
