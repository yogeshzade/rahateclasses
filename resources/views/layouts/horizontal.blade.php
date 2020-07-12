<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <title>Rahate Classes:Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="Shantanu K" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    @include('layouts.shared.head')

</head>

<body data-layout="topnav">

    <div id="wrapper">
        @include('layouts.shared.navbar')

        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
                    @yield('breadcrumb')
                    @yield('content')
                </div>
            </div>

            @include('layouts.shared.footer')
        </div>
    </div>

    @include('layouts.shared.rightbar')

    @include('layouts.shared.footer-script')
</body>

</html>