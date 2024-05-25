<!DOCTYPE html>
<html>
@include('partials._head')

<body>
    <div>
        @if ($posts->count())
        @foreach($posts as $post)


        <h2>{{$post->title}}</h2>

        <p>{{$post->context}}</p>


        @endforeach
        @else

        <p>
            There are no records
        </p>

        @endif
    </div>
</body>

</html>