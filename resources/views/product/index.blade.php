@extends('layout.main')
@section('content')

<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Prodcut</h4>
                <a href="/productadd" class="btn col-1" style="background-color: #22446b;">ADD</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>#</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th class="text-right">Options</th>
                    </thead>
                    <tbody>
                        @foreach($product as $products)
                        <tr>
                            <td>{{$products->id}}</td>
                            <td>{{$products->name}}</td>
                            <td>{{$products->price}}</td>
                            <td class="text-right">
                                <a href="/editProduct{{$products->id}}" class="btn btn-success">Edit</a>
                                <a href="/deleteProduct{{$products->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"></h4>
                <p class="category"></p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
