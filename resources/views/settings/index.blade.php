@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Settings</h5>
            </div>
            <div class="card-body">
@foreach ($collection as $item)
<form action="{{route('settings.update',['id'=> $item->id])}}" method="get">
    @csrf
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="name" class="col-sm">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name"  value="{{$item->name}}">
          </div>
    <div class="form-group col-sm-4">
      <label for="name" class="col-sm">Tax</label>
        <select name="tax" class="form-control" >
            <option value="1">YES</option>
            <option value="0">NO</option>

        </select>
    </div>
    </div>
    <div class="row">
    <div class="form-group col-sm-4">
      <label for="name" class="col-sm">Tax_id</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Tax_id" name="tax_id"  value="{{$item->tax_id}}">
    </div>
    <div class="form-group col-sm-4">
        <label for="name" class="col-sm">Discount</label>
          <select name="discount" class="form-control" >
              <option value="1">YES</option>
              <option value="0">NO</option>
          </select>
      </div>
    </div>
    <div class="row">
    <div class="form-group col-sm-4">
      <label for="name" class="col-sm">Phone</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Phone" name="phone" value="{{$item->phone}}">
    </div>
    <div class="form-group col-sm-4">
      <label for="name" class="col-sm">Email</label>
      <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email"value="{{$item->email}}" >
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
@stop

