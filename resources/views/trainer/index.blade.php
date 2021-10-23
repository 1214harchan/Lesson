@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
    @parent
    トレーナー一覧
@endsection

@section('content')
    <table>
        <tr><th>名前</th><th>性別</th><th>年齢</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->sex}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table>
@endsection
<a href="/person/add">トレーナー追加</a>

@section('footer')
copyright 2021 tuyano.
@endsection