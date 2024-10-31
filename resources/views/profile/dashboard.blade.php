<!DOCTYPE html>
<html>
@include('partials._head')

<body class="flex flex-col lg:flex-row">

    <!--sidebar-->
    @include('partials._sidebar')
    <!--end of sidebar-->

    <!--main body-->
    <div class=" flex-1 bg-slate-200 min-h-screen">
        <!--nav 2-->
        @include('partials._dashNav')
        <!--end of nav2-->

        <!-- render the data div -->

        <div class="p-4">
            @include('partials._cardComponent')
        </div>

        <!-- end of data rendering div -->

    </div>
    <!--end of main-->



    @include('partials._footer')
    <!-- JavaScript -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleButton = document.getElementById('sidebarToggle');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
        });
    </script>
</body>

</html>
