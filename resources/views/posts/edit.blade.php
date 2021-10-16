<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <div style="width: 900px" class="containner max-w-full mx-auto pt-4">

        <a href="/posts" class="bg-green-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
        rounded hover:shadow">Back</a>


    <form action="/posts/{{ $post->id }}" method="POST">
       @method('PUT')

       @csrf

     <div class="mb-4">
     <label class="font-bold text-gray-800" for="title">Title: </label>
     <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full
     text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title"
     value="{{ $post->title }}">
     </div>

     <div class="mb-4">
        <label class="font-bold text-gray-800" for="content">Content: </label>
        <input class="h-18 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full
        text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title"
        name="title" value="{{ $post->content }}">
        </div>

        <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
        rounded hover:shadow">Update</button>
    </form>
 </div>
</body>

</html>
