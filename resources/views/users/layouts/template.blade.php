<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>SIARKAN (Sitem Informasi Pemetaan Daerah Rawan Kecelakaan)</title>
    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ url('assets/users/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ url('assets/users/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/users/css/colors/sky.css') }}">
    <link rel="preload" href="{{ url('assets/users/css/fonts/urbanist.css') }}" as="style"
        onload="this.rel='stylesheet'">




    <!-- Datatables css -->
    <link href="{{ url('assets/dashboard/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/dashboard/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ url('assets/dashboard/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/dashboard/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/dashboard/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/dashboard/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="content-wrapper">
        <!-- header -->
        @include('users/layouts.navbar')

    </div>
    <!-- /.content-wrapper -->
    <!-- footer -->
    @yield('content')

    @include('users.layouts.footer')

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ url('assets/users/js/plugins.js') }}"></script>
    <script src="{{ url('assets/users/js/theme.js') }}"></script>




    <!-- Datatables js -->
    <script src="{{ url('assets/dashboard/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}">
    </script>
    <script src="{{ url('assets/dashboard/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js') }}">
    </script>
    <script src="{{ url('assets/dashboard/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}">
    </script>
    <script src="{{ url('assets/dashboard/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>


</body>

</html>
