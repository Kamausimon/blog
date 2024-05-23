<!DOCTYPE html>
<html>
@include('partials._head')

<body class="bg-gray-400 flex items-center justify-center h-screen">
    <div class="flex justify-between w-full max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-6 h-auto">
        <div>
            <h1 class="text-2xl font-bold mb-2">{{$post->title}}</h1>
            <p class="text-gray-700 ">{{$post->context}}</p>
        </div>

        <div class="flex space-x-6 ml-6">
            <div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2 ml-2 mr-2">
                    Edit
                </button>
            </div>

            <div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2 ml-2">
                    Cancel
                </button>
            </div>

        </div>
    </div>


</body>

</html>