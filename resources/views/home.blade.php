@extends('layouts.main')

@section('container')

    <h1>Halaman Home</h1>
    Hello, {{auth()->user()->name}}

@endsection
