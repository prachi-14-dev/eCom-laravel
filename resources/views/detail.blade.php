@extends('master')
@section('content')
<div class="container custom-product">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$productDetail['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
        <a href="/">Go to home page</a>
            <h2>Name: {{$productDetail['name']}}</h2>
            <h3>Price: {{$productDetail['price']}}</h3>
            <h4>Category: {{$productDetail['category']}}</h4>
            <h4>Description: {{$productDetail['description']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                <input type="hidden" name="product_id" value="{{$productDetail['id']}}">
                @csrf
                <button class="btn btn-success">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-primary">Buy Now</button>
        </div>
    </div>
</div>
@endsection