@extends('layouts.app')
@section('title', 'User List')
@section('content-header', 'user list')
@section('content-action')
    <a href="{{ route('users.create') }}" class="btn btn-info">Add New</a>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive-lg">
                <p class="login-box-msg">@include('message.flash-message')</p>
                {!! $dataTable->table(['class' => 'table table-bordered'],true)!!}
            </div>
        </div>
    </div>
    {!! $dataTable->scripts()!!}
@endsection
