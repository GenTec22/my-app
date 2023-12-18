@extends('layouts.app')

@section('title', 'Edit Customer')

@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('customer.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{ $customer->name }}">

            </div>
            <div class="col mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="{{ $customer->phone }}">

            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Your Email" value="{{ $customer->email }}" >

            </div>
            <div class="col mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Your Address" value="{{ $customer->address }}">

            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="city" class="form-control" placeholder="City" value="{{ $customer->city }}">
            </div>
            <div class="col">
                <input type="text" name="country" class="form-control" placeholder="Country" value="{{ $customer->country }}">
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
