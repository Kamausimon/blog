<!DOCTYPE html>
<html>
@include('partials._head')

@include('partials._nav')

<body class="bg-gray-100">

    <div class="flex justify-center items-center h-screen ">
        <form action="{{route('post.update',['id'=>$post->id]) }}" method="POST" class="bg-white p-6 rounded shadow-md mt-4">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                <input type="text" id="title" name="title" value="{{$post->title}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="context" class="block text-gray-700 text-sm font-bold mb-2">Post:</label>
                <textarea name="context" id="context" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$post->context}}</textarea>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 mr-2 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Save changes
                </button>
                <a href="/dashboard">
                    <button type="button" class="bg-blue-500 hover:bg-blue-700 ml-3 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Cancel changes
                    </button>
                </a>

        </form>
    </div>
</body>

</html>