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
        <h1 class="text-2x1">All Your Todos</h1>
        <ul>
        @foreach($todos as $todo)
            <li>{{$todo->title}}</li>
        @endforeach
        </ul>

    </div>
</body>
</html>

