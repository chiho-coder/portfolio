<!DOCTYPE HTML>
<html lang="ja">
<head>
    <title>カテゴリー一覧</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <div class="home-content wrapper">
<ul>
    @foreach ($categories as $category)
    <li>{{ $category->name }}</li>
    @endforeach
</ul>
</div>
</body
</html>