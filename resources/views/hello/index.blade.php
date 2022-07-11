<html>
<head>
   <title>Hello/Index</title>
   <style>
   body {font-size:16pt; color:#999; }
   h1 { font-size:50pt; text-align:right; color:#999;
       margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
   </style>
</head>
<body>
    @extends('layouts.helloapp')
    <style>
       .pagination { font-size:10pt; }
       .pagination li { display:inline-block }
       tr th a:link { color: white; }
       tr th a:visited { color: white; }
       tr th a:hover { color: white; }
       tr th a:active { color: white; }
    </style>
    @section('title', 'Index')
    
    @section('menubar')
       @parent
       インデックスページ
    @endsection
    
    @section('content')
       <table>
       <tr>
           <th><a href="/hello?sort=name">name</a></th>
           <th><a href="/hello?sort=mail">mail</a></th>
           <th><a href="/hello?sort=age">age</a></th>
       </tr>
       @foreach ($items as $item)
           <tr>
               <td>{{$item->name}}</td>
               <td>{{$item->mail}}</td>
               <td>{{$item->age}}</td>
           </tr>
       @endforeach
       </table>
       {{ $items->appends(['sort' => $sort])->links() }}
    @endsection
    
    @section('footer')
    copyright 2020 tuyano.
    @endsection
    </ol>
 </body>
</html>