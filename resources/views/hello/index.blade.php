<html>
<head>
   <title>Hello/Index</title>
   <style>
   body {font-size:16pt; color:#999; }
   h1 { font-size:50pt; text-align:right; color:#dcdcdc;
       margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
   </style>
</head>
<body>
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
 
    @section('footer')
    copyright 2020 tuyano.
    @endsection
    </ol>
 </body>
</html>