<!DOCTYPE html>
<html>


@include('partials._head')


<body class="bg-gray-200 font-sans">

    <div class="container mx-auto px-4">
        @if ($posts->count())
        @foreach($posts as $post)
        <div class="bg-white shadow overflow-hidden sm:rounded-lg my-4 p-4">
            <h2 class="text-2xl text-gray-700">{{$post->title}}</h2>
            <p class="mt-2 text-gray-600">{{$post->context}}</p>
        </div>
        @endforeach
        @else
        <p class="text-red-500">
            There are no records
        </p>
        @endif
    </div>

</body>

</html>