@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <ul>
        @each('components.item', $data, 'item')
    </ul>
    @endsection

    @component('components.message')
        @alot('msg_title')
        CAUTION!
        @endslot

        @slot('msg_content')
        これはメッセージの表示です。
        @endslot
    @endcomponent

@sectiion('footer')
copyright 2020 tuyano.
@endsection