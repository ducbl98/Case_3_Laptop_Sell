@extends('layouts.master')
@section('content')
    <div class="title m-b-md" style="margin-top: 200px !important;">
        Laptop List
    </div>

    <div class="row">
        <a href="{{route('laptop.create')}}" class="btn btn-primary">Add New</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Order</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Brand</th>
                <th scope="col">Function</th>
            </tr>
            </thead>
            <tbody>
            @forelse($laptops as $key => $laptop)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$laptop->name}}</td>
                <td>{{$laptop->price}}</td>
                <td>{{$laptop->brand}}</td>
                <td><a href="{{ route('laptop.show', $laptop->id) }}" class="btn btn-primary">Detail</a></td>
                <td><a href="#" class="btn btn-primary">Edit</a></td>
                <td><a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            @empty
                <p class="text-danger">No Product</p>
            @endforelse
            </tbody>
        </table>
{{--        @forelse($laptops as $key => $laptop)--}}
{{--            <div class="col-4">--}}
{{--                <div class="card text-left" style="width: 18rem;">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">{{ $laptop->name }}</h5>--}}
{{--                        <p class="card-text">{{ $laptop->description }}</p>--}}
{{--                        <p class="card-text text-dark">${{ $laptop->price }}</p>--}}
{{--                        <p class="card-text text-danger">Views : {{ $product->view_count }}</p>--}}

{{--                        <a href="{{ route('laptop.show', $laptop->id) }}" class="btn btn-primary">Detail</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @empty--}}
{{--            <p class="text-danger">No Product</p>--}}
{{--        @endforelse--}}
    </div>
@endsection
