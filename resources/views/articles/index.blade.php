<html>
    <head>
        <script>
window.Laravel = {};
window.Laravel.csrfToken = "{{ csrfToken() }}";
        </script>
    </head>
    <body>
        <example></example>
        @foreach ($articles as $article)
            <li>{{ $article->title }}</li>
        @endforeach
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
</html>
