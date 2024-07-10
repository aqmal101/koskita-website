<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $kostan->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold">{{ $kostan->title }}</h1>
        <figure class="my-4" style="border: 2px solid #000;">
            <img src="{{ $kostan->image }}" alt="{{ $kostan->title }}" style="width: 100%; height: auto;">
        </figure>
        <p class="mt-4">{{ $kostan->description }}</p>
        <!-- Add more details as needed -->
    </div>

</body>

</html>