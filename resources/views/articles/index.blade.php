<html>
    <body>
        @foreach ($articles as $article)
            <li>{{ $article->title }}</li>
        @endforeach
</html>
