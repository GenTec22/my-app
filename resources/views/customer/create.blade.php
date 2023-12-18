@extends('layouts.app')

@section('title', '')

@section('contents')

<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Add Customer</h1>
    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
</div>

    <hr />
    <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Full Name">
            </div>
            <div class="col">
                <input type="text" name="phone" class="form-control" placeholder="Phone Number">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="email" name="email" class="form-control" placeholder="Your Email">
            </div>
            <div class="col">
                <input type="text" name="address" class="form-control" placeholder="Your Address">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="city" class="form-control" placeholder="City">
            </div>
            <div class="col">
                <input type="text" name="country" class="form-control" placeholder="Country">
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
