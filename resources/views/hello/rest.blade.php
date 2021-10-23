@extends('layouts.helloapp')

@section('title','hello/Rest')

@section('content')
    <h1>Rest</h1>

    @include('rest.create')

@endsection

@section('footer')
copyright 2020 tuyano.
@endsection