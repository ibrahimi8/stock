@extends('layout.main')
@section('content')
<div class="content">
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Add Sales</h5>
            </div>
            <div class="card-body">
  <form action="{{route('sales.add')}}" method="get">
    @csrf
    <div class="row">
    <div class="form-group col-sm-4">
      <label for="name" class="col-sm" style="color: #2600ff;">Number</label>
      <input type="text" class="form-control"  placeholder="Enter Number" name="number">
    </div>
    <div class="form-group col-sm-4">
      <label for="name" class="col-sm" style="color: #2600ff;">Product</label>
        <select name="product" class="form-control">
        @foreach($showProduct as $ps)
            <option value="{{$ps->name}}">{{$ps->name}}</option>
                @endforeach
        </select>
        </div>
    </div>
    <div class="row">
    <div class="form-group col-sm-4">
      <label for="name" class="col-sm" style="color: #2600ff;">Tax</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Tax" name="tax">
    </div>
    <div class="form-group col-sm-4">
      <label for="name" class="col-sm" style="color: #2600ff;">Discount</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Discount" name="discount">
    </div>
    </div>
    <div class="row">
    <div class="form-group col-sm-4">
      <label for="name" class="col-sm"  style="color: #2600ff;">Total</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Total" name="total">
    </div>
    <div class="form-group col-sm-4">
      <label for="name" class="col-sm" style="color: #2600ff;">Note</label>
      <textarea type="text" class="form-control" id="name" placeholder="Enter Note" name="note"></textarea>
    </div>
    </div>
    <div class="form-group col-sm-4">
        <br>
        <button type="submit" class="btn btn-primary btn-m" style="background-color: #22446b;">Submit</button>
    </div>
  </form>
            </div>
         </div>
    </div>
</div>
@endsection
