@extends('foo.base')

@section('title', 'Bar Page')

@section('container')
    <h2>Bar</h2>

    @foreach (['foo' ,'bar', 'baz'] as $item)
        <ul>
            <li>{{ $item }}</li>
        </ul>
    @endforeach
@endsection