<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Show list post</title>
</head>

<body>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @isset($posts)
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="">{{ $post->title }}</a><br>
                    {{-- <img src="{{ url($post->thumbnail) }}" alt=""> --}}
                    <p>{!! $post->content !!}</p>
                </li>
            @endforeach
        </ul>
    @endisset

    {{ $posts->appends(['sort' => 'votes'])->links() }}
</body>

</html>
