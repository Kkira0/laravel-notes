<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Single post view</h1>
    <p>Title: {{ $note->title }}</p>
    <p>Content: {{ $note->content }}</p>

    <a href="/notes">Back To All Posts</a>
</body>
</html>