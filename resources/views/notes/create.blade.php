<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Create notes</h1>
    <form action="/notes" method="post">
        @csrf 
        <label for="title">Title: </label>
        <input type="text" id="title" name ="title">

        <br>

        <label for="content">content: </label>
        <textarea name="content" id="content" ></textarea>

        <input type="submit" value="Create">

    </form> 
    

    
</body>
</html>