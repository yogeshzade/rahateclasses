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
   
     <link href="{{ url('socialicious/css/socialicious.css')}}" rel="stylesheet">
        
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{ asset('homeassets\css\floating-wpp.css')}}"/>  
       <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/brands.min.css" integrity="sha512-dBL5cY4qTt42J1cfabCHTYR7KMztyd+n4t2GhD6EH/MKWJIIHuEYckJ1nHEpTwIaiDkrjzbc6WyiSkdLP+3INQ==" crossorigin="anonymous" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-192723507-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-192723507-1');
</script>
  

        @yield('othercss')
      

</head>