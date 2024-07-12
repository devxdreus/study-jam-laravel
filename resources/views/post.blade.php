<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>

    @vite('resources/css/app.css')
</head>

<body>
    <div class="max-w-screen-md mx-auto pt-8">
        <div class="mb-8">
            <a href="/post" class="text-3xl font-bold">{{ $title }}</a>
            <p>{{ $body }}</p>
        </div>

        <a href="/" class="text-blue-300 text-xl underline">Go Back</a>
    </div>
</body>

</html>
