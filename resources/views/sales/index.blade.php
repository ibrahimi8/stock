@extends('layout.main')
@section('content')

<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Sales</h4>
                <a href="/salesadd" class="btn col-1" style="background-color: #22446b;">ADD</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>#</th>
                      <th>Product</th>
                      <th>Tax</th>
                      <th>Total</th>
                      <th>Discount</th>
                      <th>Note</th>
                      <th class="text-right">Options</th>
                    </thead>
                    <tbody>
                    @foreach($sales as $saless)
                        <tr>
                            <td>{{$saless->refrences_no}}</td>
                            <td>{{$saless->product}}</td>
                            <td>{{$saless->tax}}</td>
                            <td>{{$saless->total}}</td>
                            <td>{{$saless->discount}}</td>
                            <td>{{$saless->note}}</td>
                            <td class="text-right">
                                <a href="/editSales{{$saless->id}}" class="btn btn-success">Edit</a>
                                <a href="/exportPdf{{$saless->id}}" class="btn btn-pdf">PDF</a>
                                <a href="/deleteSales{{$saless->id}}" class="btn btn-danger">Delete</a>
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
