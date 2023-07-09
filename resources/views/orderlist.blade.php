@extends('master')
@section('content')
<div class="container custom-cartlist">
    <div class="col-sm-10">
        <div class="trending-products">
            <h1>List of Orders</h1>
                <div class="">
                    @foreach($orderList as $item)
                        <div class="row searched-item cart-list-divider">
                            <div class="col-sm-3">
                                <a href="/detail/{{$item->id}}">
                                    <img src="{{$item->gallery}}" class="trending-img">
                                </a>
                            </div>
                            <div class="col-sm-5">
                                    <div class="">
                                        <h3>Name : {{$item->name}}</h3>
                                        <h5>Delivery Status : {{$item->status}}</h5>
                                        <h5>Payment Method : {{$item->payment_method}}</h5>
                                        <h5>Payment Status : {{$item->payment_status}}</h5>
                                        <h5>Address : {{$item->address}}</h5>
                                    </div>
                            </div>
                        </div>
                    @endforeach
                </div>    
        </div> 
    </div>
</div>
@endsection