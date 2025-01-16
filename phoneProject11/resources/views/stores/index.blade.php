@extends('layouts.app')

@section('title', 'Store List')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Stores</h1>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($stores as $store)
        <tr>
            <td>{{ $store->id }}</td>
            <td>{{ $store->name }}</td>
            <td>{{ $store->address }}</td>
            <td>{{ $store->phone }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
