@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST" >
                <div class="form-group">
                    @csrf
                <label for="exampleInputEmail1">@lang('lang.address')</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="@lang('lang.email')">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">@lang('lang.password')</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="@lang('lang.password')">
                </div>
                <button type="submit" class="btn btn-default">@lang('lang.login')</button>
            </form>
        </div>
    </div>
</div>
@endsection