@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/rest" method="post">
@csrf
<table>
    <tr><th>message: </th><td><input type="text" name="message" value="{{old('message')}}"></td></tr>
    <tr><th>url: </th><td><input type="text" name="url" value="{{old('url')}}"></td></tr>
    <tr><th></th><td><input type="submit" value="send"></td></tr>
</table>
</form>

@endsection

@section('footer')
copyright 2021 tuyano.
@endsection