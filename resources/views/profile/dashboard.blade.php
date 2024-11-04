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
        <div class="bg-slate-200 sticky top-0 z-20">
            <!--mobile nav-->
            <div>
                <button class="lg:hidden p-4" id="sidebarToggle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32">
                        <path fill="none"
                            stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M5 8h22M5 16h22M5 24h22" />
                    </svg>
                </button>
            </div>
            @include('partials._dashNav')
        </div>

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
