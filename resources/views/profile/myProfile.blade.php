<!DOCTYPE html>
<html>
@include('partials._head')

<body class="bg-gray-100">
    <div class="container mx-auto px-4">


        <h1 class="text-2xl font-bold text-center my-5">About Me</h1>
        <form action="" method="" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <a href="{{route('profile.dashboard')}}"> <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48">
                    <title>Dashboard</title>
                    <path fill="none" stroke="grey" stroke-linejoin="round" stroke-width="4" d="M44 40.836c-4.893-5.973-9.238-9.362-13.036-10.168c-3.797-.805-7.412-.927-10.846-.365V41L4 23.545L20.118 7v10.167c6.349.05 11.746 2.328 16.192 6.833c4.445 4.505 7.009 10.117 7.69 16.836Z" clip-rule="evenodd" />
                </svg></a>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" value="{{$user->name}}">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" value="{{$user->email}}">
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Update my details
                </button>
            </div>
        </form>
    </div>

    @include('partials._footer')
</body>

</html>