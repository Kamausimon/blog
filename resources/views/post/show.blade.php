<!DOCTYPE html>
<html>
@include('partials._head')

<body class="bg-gray-400 flex items-center justify-center h-screen">

    <div class="flex flex-wrap justify-between w-full max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-6 max-h-max">
        <div>
            <div class="flex justify-between">
                <h1 class="text-2xl font-bold mb-2">{{$post->title}}</h1>

                <div class="flex space-x-6">
                    <div>
                        <a href="{{route('post.edit', ['id'=> $post->id])}}">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2 ml-2 mr-2">
                                Edit
                            </button>
                        </a>
                    </div>

                    <div>
                        <a href="/dashboard">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2 ml-2">
                                Cancel
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <p class="text-gray-700 ">{{$post->context}}</p>
        </div>

        <div>
            @if(auth()->id() !== $post->user_id)
            <h2 class="text-xl font-bold mb-2">Add a comment</h2>
            <form method="POST" action="{{ route('comments.store') }}" class="mb-4">
                @csrf
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <textarea name="comment" required class="w-full p-2 mb-2 border rounded"></textarea>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            </form>
            @endif
        </div>

        <div>
            <h2 class="text-xl font-bold mb-2">Comments</h2>
            @foreach($post->comments as $comment)
            <div class="mb-4 border-b pb-2">
                <p class="mb-1">{{$comment->comment}}</p>
                <p class="text-sm text-gray-600">Posted by: {{$comment->user->name}}</p>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>