
@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">

            <div class="card-header">Add  Product</div>

            <div class="card-body">

                <form method="POST"  action="/addproduct">
                    @csrf

                    <div class="row mb-3">       
                        <div class="form-group">
                            <label class="col-md-4 col-form-label">{{ __('Product Name') }}</label>
                            <input type="text" class="form-control"name="name"  required autocomplete="name" autofocus>
                            @error('name')
                            <p class="alert alert-danger mt-1">
                                {{$message}}
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                    <div class="form-group">
                        <label class="col-form-label col-lg-3">{{ __('Product Price') }}</label>
                        <input type="text" class="form-control"name="price"  required autocomplete="price" autofocus>
                        @error('price')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{ __('Product details') }}</label>
                            <textarea class="form-control" name="details"  id="exampleFormControlTextarea1" rows="3"></textarea>
                            @error('details')
                            <p class="alert alert-danger mt-1">
                                {{$message}}
                            </p>
                            @enderror
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection