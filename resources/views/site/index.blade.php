<!DOCTYPE HTML>
<html lang="ja">
<head>
    <title>エリア一覧</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/top.css') }}" rel="stylesheet">
</head>
<body>
 <div class="home-content wrapper">
 <h2 class="page-title">サイトのタイトル</h2>
<ul>
    @foreach ($areas as $area)
    <li>
      <a href="{{action('CategoryController@index')}}">{{ $area->name }}</a>
    </li>
    @endforeach
</ul>
</div>
</body
</html>