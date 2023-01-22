<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listes des articles</h1>
    <ul>
        @forelse ($posts as $post )
            <li>{{ $post }}</li>
        @empty
        <h3>Pas de data</h3>
        @endforelse
    </ul>
</body>
</html>
