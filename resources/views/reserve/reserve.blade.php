@extends('layouts.reserveapp')

@section('title','Index')

@section('music')
@parent
レッスン一覧
@endsection

@section('content')
<p>{{$msg}}</p>
@if (count($errors) > 0)
<p>入力エラー</p>
@endif
<form action="/reserve" method="post">
    <table>
    @csrf
    @error('name')
    <tr><th>ERROR</th>
    <td>{{$message}}</td></tr>
    @enderror
    <tr><th>お名前：</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
    @error('mail')
    <tr><th>ERROR</th>
    <td>{{$message}}</td></tr>
    @enderror
    <tr><th>メールアドレス：</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
    <tr><th></th><td><input type="submit" value="送信"></td></tr>
    </table>
    </form>
    </body>
    </html>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection