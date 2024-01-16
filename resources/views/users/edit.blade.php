@extends('layouts.app')
@section('title', 'Update User')
@section('content-header', 'Edit User')
@section('content-action')
    <a href="{{ route('users.create') }}" class="btn btn-info">Add New</a>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <p class="login-box-msg">@include('message.flash-message')</p>
            <div class="table-responsive-lg">
                <form method="POST" action="{{ route('users.update', $users->id) }}" class="row g-3" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="col-md-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $users->name) }}" placeholder="Input Name" required>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $users->email) }}" placeholder="Input Email" required>
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="text-right col-12">
                        <button type="submit" class="btn btn-primary" name="submit">
                            <i class="fa fa-plus"></i>Update
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

