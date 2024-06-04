<!DOCTYPE html>
<html>
@include('partials._head');

<body>
    @include('partials._sidebar')

    <div class=" ml-64 w-full bg-slate-200">
        @include('partials._dashNav')

        <div class="bg-gray-200 font-sans h-screen">
            @include('partials._cardComponent')
        </div>

    </div>




    @include('partials._footer')
</body>

</html>