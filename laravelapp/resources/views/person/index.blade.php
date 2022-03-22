@extends('layouts.helloapp')

@section('title', 'Person.Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr><th>Person</th><th>Board</th></tr>
        @foreach ($items as $item)
        <tr>
            <table width="100%">
                @foreach ($item->boards as $obj)
                    <tr><td>{{$obj->getData()}}</td></tr>
                @endforeach
            </table>
            </td>
        </tr>
        @endforeach
    </table>
    <div style="margin:10px;"></div>
    <table>
    <tr><th>Person</th></tr>
    @foreach ($noItems as $item)
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
    @endforeach
    </table>
@endsection

@sectiion('footer')
    copyright 2020 tuyano.
@endsection