@extends('layouts.helloapp')

@section('title','Person.Delete')

@section('menubar')
    @parent
    削除ページ
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

<form action="/person/del" method="post">
@csrf
<table>
    <input type="hidden" name="id" value="{{$form->id}}"></td></tr>
    <tr><th>name: </th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
    <tr><th>mail: </th><td><input type="text" name="mail" value="{{$form->mail}}"></td></tr>
    <tr><th>age: </th><td><input type="number" name="age" value="{{$form->age}}"></td></tr>
    <tr><th></th><td><input type="submit" value="send"></td></tr>
</table>
</form>

@endsection

@section('footer')
copyright 2021 tuyano.
@endsection