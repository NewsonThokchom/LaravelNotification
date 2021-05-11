@extends('layout.header')
@section('content')
    <div class="container my-5 border p-5 rounded ">
        <div class="mb-3">
            <h3>Products Form</h3>
        </div>

        @forelse ($user->notifications as $notification)
            <div class="alert alert-success" role="alert">
                <h6 class="text-green">{{ $notification->data['name'] }}</h6>
            </div>

        @empty
            <h6 class="text-muted">No record found</h6>
        @endforelse

        <form action="{{ route('addProduct') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="product_name">Product Name: </label>
                <input type="text" class="form-control" name="name" id="product_name" aria-describedby="emailHelp"
                    placeholder="Product name">
            </div>

            <div class="form-group mb-3">
                <label for="description">Description: </label>
                <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>

    </div>
@stop
