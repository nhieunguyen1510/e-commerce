<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin Dashboard | </title>
        @include('partials.css-assets')

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                    @include('partials.left-section')
                    </div>
                </div>
                <!-- Begin top navigation -->
                @include('partials.top-navigation')
                <!-- End top navigation -->

                <!-- Begin page content -->
                <div class="right_col" role="main">
                <!-- Begin top titles -->
                @yield('content')
                <!-- End top titles -->
                <br />
                </div>
                <!-- End page content -->
                <!-- Begin footer content -->
                @include('partials.footer-admin')
                <!-- End footer content -->
            </div>
        </div>
    </body>

</html>