@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>{{$msg}}</p>
    @if (count($errors) > 0)
    <p>入力に問題があります。再入力してください。</p>
    @endif
    <form action="/hallo" method="post">
        <table>
            @csrf
            @error('name')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
            @enderror

@sectiion('footer')
    copyright 2020 tuyano.
@endsection