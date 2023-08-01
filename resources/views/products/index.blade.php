<!-- resources/views/products/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product List</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
        @if ($products->count() > 0)
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <a href="{{ route('products.show', $product) }}" class="btn btn-info">View</a>
                                <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No products found.</p>
        @endif
    </div>
@endsection
