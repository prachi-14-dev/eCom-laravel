@extends('master')
@section('content')
<div class="container custom-cartlist">
    <div class="col-sm-10">
    <table class="table">
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Amount of all Items added in cart</td>
      <td>Rs.{{$totalAmount}}</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tax</td>
      <td>Rs. 0</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Delivery Charges</td>
      <td>Rs. 50</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Total Amount</td>
      <td>Rs.{{$totalAmount + 50}}</td>
    </tr>
  </tbody>
</table>
    </div>
    <div>
    <form action="/place_order" method="POST">
        @csrf
  <div class="mb-3">
    <textarea name="address" class="form-control" placeholder="Enter your address"></textarea>
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Payment Method</label><br><br>
    <input type="radio" value="cash" name="payment"><span>Online Payment</span><br><br>
    <input type="radio" value="cash" name="payment"><span>EMI</span><br><br>
    <input type="radio" value="cash" name="payment"><span>Cash on Delivery</span>
  </div>
  
  <button type="submit" class="btn btn-primary bg-success">Pay Now</button>
</form>
    </div>
</div>
@endsection