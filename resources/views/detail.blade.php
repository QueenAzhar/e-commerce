@extends('master')
@section("content")
<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="{{$product['gallery']}}" alt="">
       </div>
       <div class="col-sm-6">
           <a href="/">@lang('lang.go_back')</a>
       <h2>{{$product['name']}}</h2>
       <h3>@lang('lang.price') {{$product['price']}}</h3>
       <h4>@lang('lang.details') {{$product['description']}}</h4>
       <h4>@lang('lang.category') {{$product['category']}}</h4>
       <br><br>
       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value={{$product['id']}}>
       <button class="btn btn-primary">@lang('lang.add_cart')</button>
       </form>
       <br><br>
       <button class="btn btn-success">@lang('lang.buy_now')</button>
       <br><br>
    </div>
   </div>
</div>
@endsection