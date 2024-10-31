<!DOCTYPE html>
<html>
@include('partials._head');

<body class="flex flex-col lg:flex-row">
    @include('partials._sidebar')

    <div class=" flex-1 bg-slate-200 min-h-screen">
        @include('partials._dashNav')

        <div class="p-4">
            @include('partials._cardComponent')
        </div>

    </div>




    @include('partials._footer')
</body>

</html>
