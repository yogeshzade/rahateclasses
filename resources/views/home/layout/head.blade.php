<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="shortcut icon" type="image/x-icon" href="images\favicon.ico">
    <title>Rahate IIT Home | IIT-NEET Prepration Coaching In Nagpur | @yield('title','Home')</title>

     <!-- CSRF Token -->

    <!-- CSS -->

    <link href="{{asset('homeassets\css\reset.css')}}" rel="stylesheet">
    <link href="{{asset('homeassets\css\fonts.css')}}" rel="stylesheet">
    <link href="{{ asset('homeassets\assets\bootstrap\css\bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('homeassets\assets\select2\css\select2.min.css')}}" rel="stylesheet">
    <link href="{{ asset('homeassets\assets\font-awesome\css\font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('homeassets\assets\magnific-popup\css\magnific-popup.css')}}" rel="stylesheet">
    <link href="{{ asset('homeassets\assets\iconmoon\css\iconmoon.css')}}" rel="stylesheet">
    <link href="{{ asset('homeassets\assets\owl-carousel\css\owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('homeassets\css\animate.css')}}" rel="stylesheet">
    <link href="{{ asset('homeassets\css\custom.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

        @yield('othercss')
      

</head>