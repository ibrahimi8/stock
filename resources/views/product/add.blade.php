@extends('layout.main')
@section('content')

<div class="content">
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Add Prodcut</h5>
            </div>
            <div class="card-body">
                <form action="{{route('product.add')}}" method="get">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                            <label style="color: #2600ff;">Prodcut Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                            <label style="color: #2600ff;">Prodcut Price</label>
                            <input type="text" name="price" class="form-control" placeholder="Enter Price">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"  style="background-color: #22446b;">ADD</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
