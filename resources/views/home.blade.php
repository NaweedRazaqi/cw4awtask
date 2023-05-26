@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}
                
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                      <div class="col-md-6 mt-5">
                        <a href="/addproduct" type="buttton" class="btn btn-primary" style="margin-right: 16px"> Add Product</a>
                        <a href="/dashboard" type="buttton" class="btn btn-success" style="margin-right: 16px"> Dashboard </a>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
