<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>

<body>
    <h1>Posts</h1>
    @if($posts->isEmpty())
    <p>No Posts found</p>
    @else
        @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <span>{{ $post->location }}</span>
        </div>
        @endforeach
    @endif
</body>

</html>
