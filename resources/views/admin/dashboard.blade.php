

@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">

            <div class="card-header">Admin Panel</div>

            <div class="card-body">
                <h5>Users List</h5>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email adddress</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    @foreach ($userlist as $user)
                    <tbody>
                      <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{{$user->name}}}</td>
                        <td>{{$user->email}}</td>
                        <td class="text-center d-flex">
                            
                            <a href="#/{{$user->id}}" type="button" class="btn btn-warning" style="margin-right: 16px">Edit</a>
                            <a href="#/{{$user->id}}" type="button" class="btn btn-danger" style="margin-right: 16px">delete</a>
                            
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
            </div>
        </div>
        
    </div>
</div>

<div class="row justify-content-center mt-3">
    <div class="col-md-8">
        <div class="card">

            <div class="card-header">Product List</div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price </th>
                        <th scope="col">Details</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    @foreach ($productlist as $pro)
                    <tbody>
                      <tr>
                        <th scope="row">{{$pro->id}}</th>
                        <td>{{{$pro->name}}}</td>
                        <td>{{$pro->price}}</td>
                        <td>{{$pro->details}}</td>
                        <td class="text-center d-flex">
                            
                            <a href="#/{{$pro->id}}" type="button" class="btn btn-warning" style="margin-right: 16px">Edit</a>
                            <a href="#/{{$pro->id}}" type="button" class="btn btn-danger" style="margin-right: 16px">delete</a>
                            
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
            </div>
        </div>
        <div class="col-md-6">
        </div>
    </div>
</div>
@endsection