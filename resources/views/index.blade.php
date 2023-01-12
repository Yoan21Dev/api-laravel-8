<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <body class="bg-gray-100 text-gray-700">

        <div class="container mx-auto px-4">
            <div class="grid grid-cols-3 my-10">
                @foreach ($posts as $post)
                <div class="bg-white hover:bg-blue-100 border border-gray-200 p-5 py-5 px-5">
                    <h2 class="font-semibold text-lg">{{$post->title}}</h2>
                    <p class="text-xs">{{ $post->excerpt }}</p>
                    <p class="text-xs text-right">{{$post->published_at}} </p>

                </div>
            @endforeach
            </div>
           <div class="mb-10">
            {{$posts->links()}}
           </div>
        </div>


    </body>
    <script src="https://cdn.tailwindcss.com"></script>
</html>
