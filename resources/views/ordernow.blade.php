@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <table class="table">
         
            <tbody>
              <tr>
                <td>@lang('lang.amount')</td>
              <td>{{$total}} T</td>
              </tr>
              <tr>
                <td>@lang('lang.tax')</td>
                <td>0 T</td>
              </tr>
              <tr>
                <td>@lang('lang.delivery') </td>
                <td>1000 T</td>
              </tr>
              <tr>
                <td>@lang('lang.total_amount')</td>
              <td> {{$total+1000}} T</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="@lang('lang.enter_email')" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">@lang('lang.method')</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>@lang('lang.online_payment')</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>@lang('lang.emi')</span> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>@lang('lang.del')</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-default">@lang('lang.order_now')</button>
              </form>
          </div>
     </div>
</div>
@endsection 