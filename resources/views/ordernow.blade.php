@extends('master')
@section('content')
<div class="customer-product">
    <div class="col-sm-10">
    <table class="table">
   
    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$ {{$total+10}}</td>
      </tr>
    </tbody>
  </table>
    </div>
    <form action="/orderplace" method="POST">
        @csrf
  <div class="form-group">
  <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="payment">Payment Method</label><br>
    <br>
    <input type="radio" value="cash" name="payment"><span>Online payment</span><br><br>
    <input type="radio" value="cash" name="payment"><span>EMI payment</span><br><br>
    <input type="radio" value="cash" name="payment"><span>Payment on Delivery</span><br><br>
  </div>
 
  <button type="submit" class="btn btn-default">Order Now</button>
</form>
</div>
@endsection