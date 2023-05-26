@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">

            <div class="card-header">List Products</div>

            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Details</th>
                  </tr>
                </thead>
                @foreach ($productlist as $pro)
                <tbody>
                  <tr>
                    <th scope="row">{{$pro->id}}</th>
                    <td>{{{$pro->name}}}</td>
                    <td>{{$pro->price}}</td>
                    <td>{{$pro->details}}</td>
                  </tr>
                </tbody>
                @endforeach
              </table>
        </div>
    </div>
            
@endsection