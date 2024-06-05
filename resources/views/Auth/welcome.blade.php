<!doctype html>
<html>

@include('partials._head')

<body class="bg-slate-700 text-white">
    @include('partials._nav')

    <!--main section -->
    <!--main section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-3 p-11">
        @foreach($posts as $post)
        <div class="bg-white text-black p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-2 text-gray-800">{{$post->title}}</h2>
            @if(strlen($post->context)>800)
            <p class="text-gray-700 text-base mt-2">
                {{ \Illuminate\Support\Str::limit($post->context, 800, $end='...') }}
            </p>
            <a href="{{route('login')}}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors duration-200 ease-in">
                Read More
            </a>
            @else
            <p class="mt-2 text-gray-600">{{$post->context}}</p>
            @endif
        </div>
        @endforeach
    </div>
    <!--- end of main section-->
    <!--- end of main section-->

    <!--footer section-->

    @include('partials._footer')
    <!--end of footer-->
</body>

</html>