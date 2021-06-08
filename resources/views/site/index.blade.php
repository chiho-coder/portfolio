<!doctype html>
<html lang="ja">
<head>
    <title>エリア一覧</title>
    <meta charset="utf-8">
</head>
<body>
 <div class="content-txt">
  <p class="txt-center">
      サイトのタイトル
　 </p>
<div class="ul-align-center">
<ul>
    @foreach ($areas as $area)
    <li>{{ $area->name }}</li>
    @endforeach
</ul>
</div>
</body>