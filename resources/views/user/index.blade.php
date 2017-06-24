@extends('user.base')

@section('title', 'Users Page')

@section('container')
    <h2>Users</h2>

    @foreach ($users as $item)
        <ul>
            <li>{{ $item }}</li>
        </ul>
    @endforeach
@endsection