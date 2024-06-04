<!DOCTYPE html>
<html>
@include('partials._head')

<body class="flex">

    <!--sidebar-->
    @include('partials._sidebar')
    <!--end of sidebar-->

    <!--main body-->
    <div class=" ml-64 w-full bg-slate-200">
        <!--nav 2-->
        @include('partials._dashNav')
        <!--end of nav2-->

        <!-- render the data div -->

        <div class="bg-gray-200 font-sans h-screen">
            @include('partials._cardComponent')
        </div>

        <!-- end of data rendering div -->

    </div>
    <!--end of main-->



    @include('partials._footer')
</body>

</html>