@extends('master')
@section('content')
<div class="container custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-products">
            <h1>Searched products</h1>
                <div class="">
                    @foreach($products as $item)
                        <div class="searched-item">
                            <a href="/detail/{{$item['id']}}">
                                <img src="{{$item['gallery']}}" class="trending-img">
                                <div class="">
                                    <h5>{{$item['name']}}</h5>
                                    <h5>{{$item['description']}}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>    
        </div> 
    </div>
</div>
@endsection