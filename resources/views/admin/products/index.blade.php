@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Products page</h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Selling Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->selling_price }}</td>
                    <td>
                        <img src="{{ asset('/assets/uploads/products/'.$item->image)}}" alt="Image here">
                    </td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-primary">Delete</button>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>


@endsection
