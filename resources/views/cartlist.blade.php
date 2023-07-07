@extends('master')
@section('content')
<div class="container custom-cartlist">
    <div class="col-sm-10">
        <div class="trending-products">
            <h1>List of products added in cart</h1>
                <div class="">
                    @foreach($cartList as $item)
                        <div class="row searched-item cart-list-divider">
                            <div class="col-sm-3">
                                <a href="/detail/{{$item->id}}">
                                    <img src="{{$item->gallery}}" class="trending-img">
                                </a>
                            </div>
                            <div class="col-sm-5">
                                    <div class="">
                                        <h2>{{$item->name}}</h2>
                                        <h5>{{$item->description}}</h5>
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                <a href="/remove_cart_item/{{$item->cart_id}}" class="btn btn-warning">Remove item from cart</a>
                            </div>
                        </div>
                    @endforeach
                </div>    
        </div> 
    </div>
</div>
@endsection