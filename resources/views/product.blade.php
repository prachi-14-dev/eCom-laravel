@extends('master')
@section('content')
<div class="container custom-product">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        @foreach($products as $item)
        <div class="carousel-item {{$item['id']==1?'active':''}}">
       <a href="/detail/{{$item['id']}}">
       <img src="{{$item['gallery']}}" class="d-block w-100" alt="...">
        <div class="carousel-caption">
            <h5>{{$item['name']}}</h5>
            <p>{{$item['description']}}</p>
        </div>
       </a>
        </div>
       @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    <div class="trending-products">
        <h1>Trending products</h1>
        <div class="">
        @foreach($products as $item)
        <div class="trending-item">
        <a href="/detail/{{$item['id']}}">
            <img src="{{$item['gallery']}}" class="trending-img">
            <div class="">
                <h5>{{$item['name']}}</h5>
            </div>
        </a>
        </div>
       @endforeach
    </div>
    </div>
</div>
@endsection