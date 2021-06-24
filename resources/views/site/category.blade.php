<!DOCTYPE HTML>
<html lang="ja">
<head>
    <title>カテゴリー一覧</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="{{ asset('css/category.css') }}" rel="stylesheet">
</head>
<body>
<div class="center">  
<h2 class="page-title">{{ $area->name }}の一覧</h2>
<ul>
    @foreach ($categories as $category)
    <li>{{ $category->name }}</li>
    @endforeach
</ul>
</div>
</body
</html>