<!DOCTYPE html>
<html>
@include('partials._head')

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-1/3">
        <h1 class="text-2xl mb-4">Are you sure you want to delete this post?</h1>

        <form action="{{ route('post.destroy', $post->id) }}" method="POST" class="mb-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white rounded px-4 py-2">Yes, delete it</button>
        </form>

        <a href="{{route('profile.dashboard')}}" class="text-blue-500">No, take me back</a>
    </div>
</body>

</html>