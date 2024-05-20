<!DOCTYPE html>
<html>
@include('partials._head')

<body class="flex">

    <!--sidebar-->
    <div class="lg:fixed w-64 bg-white p-4 shadow-lg h-screen">
        <img class="block " src="/images/the-crying-wall-high-resolution-logo-black-transparent.png" alt="logo">
        <h2 class="text-2xl font-bold mb-4 flex items-center mt-24"> <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                <path fill="currentColor" d="M416 174.74V48h-80v58.45L256 32L0 272h64v208h144V320h96v160h144V272h64z" />
            </svg>DashBoard</h2>
        <div class="space-y-9 h-5/6 flex flex-col mt-16 ml-3 ">
            <button class="w-full flex items-center space-x-2 text-gray-600 hover:bg-gray-100 p-2 rounded">
                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20">
                    <g fill="currentColor">
                        <path fill-rule="evenodd" d="M11.5 4.5A1.5 1.5 0 0 0 10 6v3.5H6.5a1.5 1.5 0 0 0 0 3H10V16a1.5 1.5 0 0 0 3 0v-3.5h3.5a1.5 1.5 0 0 0 0-3H13V6a1.5 1.5 0 0 0-1.5-1.5" clip-rule="evenodd" opacity="0.2" />
                        <path d="M5 10.5a.5.5 0 0 1 0-1h10a.5.5 0 0 1 0 1z" />
                        <path d="M9.5 5a.5.5 0 0 1 1 0v10a.5.5 0 0 1-1 0z" />
                    </g>
                </svg> new Post
            </button>

            <button class="w-full flex items-center space-x-2 text-gray-600 hover:bg-gray-100 p-2 rounded">
                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h6v6H4zm10 0h6v6h-6zM4 14h6v6H4zm10 3h6m-3-3v6" />
                </svg> category
            </button>

            <button class="w-full flex items-center space-x-2 text-gray-600 hover:bg-gray-100 p-2 rounded">
                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M12.75 2a.75.75 0 0 0-1.5 0v1.5H6.704c-.658 0-.986 0-1.288.098a2 2 0 0 0-.383.17c-.274.16-.494.404-.933.894c-.85.947-1.276 1.42-1.379 1.974a2 2 0 0 0 0 .728c.103.553.528 1.027 1.379 1.974c.44.49.659.734.933.893c.122.07.25.127.383.17c.302.099.63.099 1.288.099h4.546v2H6.5c-1.404 0-2.107 0-2.611.337a2 2 0 0 0-.552.552C3 13.893 3 14.596 3 16c0 1.404 0 2.107.337 2.611a2 2 0 0 0 .552.552c.504.337 1.207.337 2.611.337h4.75v1.75H10a.75.75 0 0 0 0 1.5h4a.75.75 0 0 0 0-1.5h-1.25V19.5h4.546c.658 0 .986 0 1.288-.098c.133-.044.261-.1.383-.17c.274-.16.494-.404.933-.894c.85-.947 1.276-1.42 1.379-1.974a2 2 0 0 0 0-.728c-.103-.553-.528-1.027-1.379-1.974c-.44-.49-.659-.734-.933-.893a1.996 1.996 0 0 0-.383-.17c-.302-.099-.63-.099-1.288-.099H12.75v-2h4.75c1.404 0 2.107 0 2.611-.337a2 2 0 0 0 .552-.552C21 9.107 21 8.404 21 7c0-1.404 0-2.107-.337-2.611a2 2 0 0 0-.552-.552C19.607 3.5 18.904 3.5 17.5 3.5h-4.75zM9 6.25a.75.75 0 0 0 0 1.5h6a.75.75 0 0 0 0-1.5zM8.25 16a.75.75 0 0 1 .75-.75h6a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75" clip-rule="evenodd" />
                </svg> My Posts
            </button>

            <button class="w-full flex items-center space-x-2 text-gray-600 hover:bg-gray-100 p-2 rounded">
                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M3 22V8h4v14zm7 0V2h4v20zm7 0v-8h4v8z" />
                </svg> Analytics
            </button>

            <button class="w-full flex items-center space-x-2 text-gray-600 hover:bg-gray-100 p-2 rounded">
                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="currentColor">
                        <path d="M20.943 16.835a15.76 15.76 0 0 0-4.476-8.616c-.517-.503-.775-.754-1.346-.986C14.55 7 14.059 7 13.078 7h-2.156c-.981 0-1.472 0-2.043.233c-.57.232-.83.483-1.346.986a15.76 15.76 0 0 0-4.476 8.616C2.57 19.773 5.28 22 8.308 22h7.384c3.029 0 5.74-2.227 5.25-5.165" />
                        <path d="M7.257 4.443c-.207-.3-.506-.708.112-.8c.635-.096 1.294.338 1.94.33c.583-.009.88-.268 1.2-.638C10.845 2.946 11.365 2 12 2s1.155.946 1.491 1.335c.32.37.617.63 1.2.637c.646.01 1.305-.425 1.94-.33c.618.093.319.5.112.8l-.932 1.359c-.4.58-.599.87-1.017 1.035S13.837 7 12.758 7h-1.516c-1.08 0-1.619 0-2.036-.164S8.589 6.38 8.189 5.8zm6.37 8.476c-.216-.799-1.317-1.519-2.638-.98s-1.53 2.272.467 2.457c.904.083 1.492-.097 2.031.412c.54.508.64 1.923-.739 2.304c-1.377.381-2.742-.214-2.89-1.06m1.984-5.06v.761m0 5.476v.764" />
                    </g>
                </svg> Earnings
            </button>
        </div>

    </div>
    <!--end of sidebar-->

    <!--main body-->
    <div class=" ml-64 w-full bg-slate-200">
        <!--nav 2-->
        <div class="p-6 bg-slate-200">
            <div>
                <form action="">

                    <input type="search" name="q" placeholder="search here" class="bg-slate-400 h-8 mr-0 rounded-md text-slate-600">
                    <button class="px-2 py-1 bg-slate-400 h-8">Search</button>
                </form>
            </div>


        </div>

        <!--end of nav2-->

    </div>
    <!--end of main-->



    @include('partials._footer')
</body>

</html>