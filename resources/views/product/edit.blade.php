@extends('layout.main')
@section('content')

<div class="content">
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
            <h5 class="title">edit Prodcut</h5>
            </div>
            <div class="card-body">
                @foreach($editProduct as $p)
                <form action="{{route('product.update',['id'=>$p->id])}}" method="get">

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                            <label style="color: #22446b;">Prodcut Name</label>
                            <input type="text" name="name" class="form-control" value="{{$p->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                            <label style="color: #22446b;">Prodcut Price</label>
                            <input type="text" name="price" class="form-control" value="{{$p->price}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-md">Add</button>
                            </div>
                        </div>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
