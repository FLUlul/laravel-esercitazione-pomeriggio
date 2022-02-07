<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posts</title>
</head>
<body>
    <h1>posts</h1>

    @foreach ($posts as $post)
        <h2>{{$post -> titolo}} - {{ $post->category->name }}</h2>
    @endforeach
</body>
</html>