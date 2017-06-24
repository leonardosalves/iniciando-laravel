@extends('user.base')

@section('title', 'Bar Page')

@section('container')
    <h2>User</h2>

    @foreach ($users as $item)
        <ul>
            <li>{{ $item }}</li>
        </ul>
    @endforeach
@endsection