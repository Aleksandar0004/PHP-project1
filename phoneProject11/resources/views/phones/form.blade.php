@extends('layouts.app')

@section('title', isset($phone) ? 'Edit Phone' : 'Add Phone')

@section('content')
<h1>{{ isset($phone) ? 'Edit Phone' : 'Add Phone' }}</h1>

<form action="{{ isset($phone) ? route('phones.update', $phone->id) : route('phones.store') }}" method="POST">
    @csrf
    @if(isset($phone))
        @method('PUT')
    @endif

    <div class="mb-3">
        <label for="brand" class="form-label">Brand</label>
        <input type="text" name="brand" id="brand" class="form-control" value="{{ old('brand', $phone->brand ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="model" class="form-label">Model</label>
        <input type="text" name="model" id="model" class="form-control" value="{{ old('model', $phone->model ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ old('price', $phone->price ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="color" class="form-label">Color</label>
        <input type="text" name="color" id="color" class="form-control" value="{{ old('color', $phone->color ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="in_stock" class="form-label">In Stock</label>
        <select name="in_stock" id="in_stock" class="form-select" required>
            <option value="1" {{ (isset($phone) && $phone->in_stock) ? 'selected' : '' }}>Yes</option>
            <option value="0" {{ (isset($phone) && !$phone->in_stock) ? 'selected' : '' }}>No</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">{{ isset($phone) ? 'Update' : 'Add' }}</button>
</form>
@endsection
