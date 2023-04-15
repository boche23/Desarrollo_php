<!DOCTYPE html>
<html lang="en">

<!-- include de header -->
@include('layouts.sb-admin.header')
<!--Fin  include de header -->

<body id="page-top">

    <!-- Pagina actual-->
    <div id="wrapper">

        <!-- include de sidebar -->
        @include('layouts.sb-admin.sidebar')
        <!-- Fin include de sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.sb-admin.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('contenido')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('layouts.sb-admin.footer')

</body>

</html>
