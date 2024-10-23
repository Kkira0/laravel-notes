<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All notes</h1>
    <a href="/notes/create">Create post!</a>

    <ul>
        @foreach($allNotes as $note)
        <li>
            <h2>{{$note->title}}</h2>
            <p>{{$note->content}}</p>
            <a href="/notes/{{ $note->id }}">Show</a>
        </li>
        @endforeach
    </ul>
</body>
</html>