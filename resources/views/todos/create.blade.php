<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Todos</title>
</head>
<body>
    <div class="text-center pt-10">
        <h1 class="text-2x1">What next you need To-DO</h1>
        <form action="/todos/create" method="post" class="py-5">
            @csrf 
            <input type="text" name="title" class="py-2 px-2 border rounded"/>
            <input type="submit" value="Create" class="p-2 border rounded">
        </form>
    </div>
</body>
</html>