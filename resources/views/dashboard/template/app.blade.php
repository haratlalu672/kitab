<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $judul ?? config('app.name') }}</title>
    <x-dashboard.css />
</head>

<body>
    <div class="container-scroller">
        <x-dashboard.navbar />
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <x-dashboard.sidebar />
            <!-- partial -->
            <div class="main-panel">
                @yield('main')
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            {{ date('Y') }}</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Ardi Ramadani
                            Zarqoni</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <x-dashboard.js />
    @stack('scripts')
</body>

</html>