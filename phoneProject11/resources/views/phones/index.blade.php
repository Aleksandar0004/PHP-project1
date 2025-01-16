@extends('layouts.app')

@section('title', 'Phone List')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Phones</h1>
    <a href="{{ route('phones.create') }}" class="btn btn-primary">Add New Phone</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Price</th>
            <th>Color</th>
            <th>In Stock</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($phones as $phone)
        <tr>
            <td>{{ $phone->id }}</td>
            <td>{{ $phone->brand }}</td>
            <td>{{ $phone->model }}</td>
            <td>${{ number_format($phone->price, 2) }}</td>
            <td>{{ $phone->color }}</td>
            <td>{{ $phone->in_stock ? 'Yes' : 'No' }}</td>
            <td>
                <a href="{{ route('phones.edit', $phone->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('phones.destroy', $phone->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
