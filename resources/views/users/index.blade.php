@extends('layouts.app')
@section('title', 'User List')
@section('content-header', 'user list')
@section('content-action')
    <a href="{{ route('users.create') }}" class="btn btn-info">Add New</a>
@endsection
@section('content')
    <div class="card" style="width:18rem;">
        <div class="card-body">
            <div class="table-responsive-lg">
                <div>Hello Users List</div>
            </div>
        </div>
    </div>
@endsection
