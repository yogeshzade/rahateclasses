<!DOCTYPE HTML>
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

   
    <link href="{{ asset('homeassets\assets\bootstrap\css\bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('homeassets\assets\select2\css\select2.min.css')}}" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="{{ asset('homeassets\assets\font-awesome\css\font-awesome.min.css')}}" rel="stylesheet">
     <link href="{{ url('assets\notes.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

</head>

<body>

     <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
            <a href="{{route('home.index')}}">
                <img src="http://rahateiithome.in/homeassets\images\rahatelogo.png" style="width: 280px;height: 100px;" class="navbar-brand">
              </a>
           
          </div>
             <div class="pull-right m-4" style="margin-top: 20px;">
               <ul class="nav nav-pills">
                <li class="active"><a href="{{route('home.index')}}">Home</a></li>
  <li class="active"><a href="javascript:closeWindow();">Close</a></li>
</ul>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
           
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

    <div class="container">
    <div class="row" id="subjects">


        <div class="">
            
                <div class="tab-content" style="display:block;">


                        <!-- Section End -->

                           <div class="container-fluid">
                             <div class="row">
                              <div class="col-md-4">
                              <b> Class Name : </b> 
                              <b class="label label-default">{{$note->class_name}}</b>
                              </div>
                                <div class="col-md-4">
                                   <b> Subject Name : </b>
                                     <b class="label label-success">
                                    {{$note->subject_name}}
                                  </b>
                                </div>
                                  <div class="col-md-4">
                                     <b> Topic Name : </b>
                                      <b class="label label-danger">
                                   {{$note->topic_name}}
                                  </b>
                                    
                                  </div>
                             </div>

                           </div>

                           <hr/>

                        <div class="container-fluid">
                             <div class="row">
                                    <div class="col-md-12">
                   <iframe src="{{$note->file_link}}" height="650px" width="100%"> </iframe>

                 </div>
               </div>
             </div>

                    
                    <div style="clear:both;"></div>
                </div>
            
        </div>
    </div>
</div>
<script>
    function closeWindow() {
        window.open('','_parent','');
        window.close();
    }
</script> 
</body>

</html>