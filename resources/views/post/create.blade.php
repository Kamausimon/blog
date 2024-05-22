<!DOCTYPE html>
<html>
@include('partials._head');

<Body class="bg-sky-500">
    <!-- START of the post ui -->
    <div class="container mx-auto px-4 py-5">
        <div class="flex items-center justify-between mb-0 bg-white p-2 rounded">
            <a href="/dashboard" class="text-black">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15">
                    <path fill="black" fill-rule="evenodd" d="m2.707 8l3.147 3.146l-.708.707L.793 7.5l4.353-4.354l.708.708L2.707 7H14v1z" clip-rule="evenodd" />
                </svg>
            </a>
            <h2 class="text-black text-2xl text-center flex-grow">Create Post</h2>
        </div>
        <div class="bg-white p-10 rounded shadow">

            <form action="">
                <label for="title" class="block mb-2 font-bold text-gray-700">Title:</label>
                <input type="text" name="title" id="title" class="w-full p-2 border rounded shadow-inner">
                <label for="context" class="block mb-2 font-bold text-gray-700">Content:</label>
                <textarea name="context" id="context" rows="6" cols="50" class="w-full p-2 border rounded shadow-inner"></textarea>
                <br>
                <input type="submit" value="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
            </form>

        </div>
    </div>
    <!-- end of blog ui -->
</Body>

</html>