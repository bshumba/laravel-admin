@extends('layouts.app')
@section('title', 'Create User')
@section('content-header', 'Create User')
@section('content-action')
    <a href="{{ route('users.create') }}" class="btn btn-info">Add New</a>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <p class="login-box-msg">@include('message.flash-message')</p>
            <div class="table-responsive-lg">
                <form method="POST" action="{{ route('users.store') }}" class="row g-3" novalidate>
                    @csrf
                    <div class="col-md-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                               placeholder="Input Name" required>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                               placeholder="Input Email" required>
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Input Password" required>
                        @error('password')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="confirm-password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password" name="password_confirmation" placeholder="Input Password" required>
                        @error('password')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                    <div class="text-right col-12">
                        <button type="submit" class="btn btn-primary" name="submit">
                            <i class="fa fa-plus"></i>save
                        </button>

                        <a href="{{ route('users.index') }}" class="btn btn-danger m-l-5">
                            <i class="fa fa-close"></i>Close
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
