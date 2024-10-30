<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Notes</title>
</head>
<body>
    <h1>Edit notes with id: {{ $note->id }}</h1>
    <form action="/notes/{{$note->id}}/update" method="post">
        @csrf
        @method('PUT') 
        <label for="title">Title: </label>
        <input type="text" id="title" name ="title" value="{{$note->title}}">

        <br>

        <label for="content">Content: </label>
        <textarea name="content" id="content" name="content" value="{{$note->content}}"></textarea>

        <input type="submit" value="Update">
        <br>
        <a href="/books">Back to Books</a>

    </form> 
</body>
</html>