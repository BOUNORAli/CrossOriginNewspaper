<!DOCTYPE html>
<html>
<head>
    <title>Articles</title>
</head>
<body>
    <h1>Liste des Articles</h1>
    <ul>
        @foreach($articles as $article)
            <li>{{ $article->title }} - {{ $article->author }} - {{ $article->publication_date }}</li>
        @endforeach
    </ul>
</body>
</html>
