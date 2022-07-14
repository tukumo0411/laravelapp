@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
担当者一覧(1対1)画面
@endsection

@section('content')
<a href="___(11)___">hasmany</a>
<table>
    <tr><th>Person</th><th>Subject</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
            <td>@if ($item->subject != null)
                    {{___(12)___}}
                @endif
            </td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
