@extends('layout.main')
@section('content')
<div class="content">
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Edit sales</h5>
            </div>
            <div class="card-body">
              @foreach($editSales as $es)
      <form action="{{route('sales.update',['id'=>$es->id])}}" method="get">
    <div class="row">
    <div class="form-group col-sm-4">
      <label for="name" class="col-sm">Number</label>
      <input type="text" class="form-control"  placeholder="Enter Number" name="number" value="{{$es->refrences_no}}">
    </div>
    <div class="form-group col-sm-4">
      <label for="name" class="col-sm">Product</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Product" name="product" value="{{$es->product}}">
    </div>
    </div>
    <div class="row">
    <div class="form-group col-sm-4">
      <label for="name" class="col-sm">Tax</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Tax" name="tax" value="{{$es->tax}}">
    </div>
    <div class="form-group col-sm-4">
      <label for="name" class="col-sm">Discount</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Discount" name="discount" value="{{$es->discount}}">
    </div>
    </div>
    <div class="row">
    <div class="form-group col-sm-4">
      <label for="name" class="col-sm">Total</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Total" name="total" value="{{$es->total}}">
    </div>
    <div class="form-group col-sm-4">
      <label for="name" class="col-sm">Note</label>
      <textarea type="text" class="form-control" id="name" placeholder="Enter Note" name="note" value="{{$es->note}}"></textarea>
    </div>
    </div>
    <div class="form-group col-sm-4">
        <br>
        <button type="submit" class="btn btn-primary btn-md">Submit</button>
    </div>
  </form>
  @endforeach
            </div>
         </div>
    </div>
</div>
@endsection
