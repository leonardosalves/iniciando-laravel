@extends('user.base')

@section('title', 'Users Page')

@section('container')
    <h2>User {{ $id }}</h2>

    <span class="label label-primary">User id:</span><span class="label label-success">{{ $id }}</span>
@endsection