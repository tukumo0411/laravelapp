@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
担当者一覧(1対多)画面
@endsection

@section('content')
<table>
    <tr><th>Person</th><th>Subject</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
            <td>
            @if ($item->subjects != null)
                <table width="100%">
                @foreach (___(13)___ as ___(14)___)
                    <tr><td>{{$obj->___(15)___}}</td></tr>
                @endforeach
                </table>
            @endif
            </td>
        </tr>
    @endforeach
</table>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
