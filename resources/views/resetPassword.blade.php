<!DOCTYPE html>
<html>

@include('partials/_head')

<body class="bg-gray-400">

    <!--start of reset password div-->
    <div class="w-full max-w-xs mx-auto mt-60">
        <form action="" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4 p-6">
                <h2 class="block text-gray-700 text-xl font-bold mb-3 p-3">Reset Password</h2>
                <label class="block text-gray-700 text-sm font-bold mb-2 p-2" for="password">
                    New Password:
                </label>
                <input class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" id="password" placeholder="password..">

                <label class="block text-gray-700 text-sm font-bold mb-2 p-2" for="confirmPassword">
                    Confirm Password:
                </label>
                <input class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" name="confirmPassword" id="confirmPassword" placeholder="confirm password..">
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