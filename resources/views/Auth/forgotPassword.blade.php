<!DOCTYPE html>
<html>

@include('partials/_head')

<body class="bg-slate-700">
    @include('partials._nav')

    <!--div housing the forgot password-->
    <div class="w-full max-w-xs mx-auto mt-24">
        <form action="" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <h2 class="block text-gray-700 text-xl font-bold mb-2">Forgot Password</h2>
                <p class="mb-4">Remember password? <a href="/login" class="text-blue-500 hover:text-blue-800"> login here</a></p>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="email" id="email" placeholder="email..">
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Reset Password
                </button>
            </div>
        </form>
    </div>
    <!--end of div-->


    <!--footer-->
    @include('partials._footer')
    <!--end of footer-->
</body>

</html>