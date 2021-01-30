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
          <div id="navbar" class="navbar-collapse collapse">
           
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

    <div class="container">
    <div class="row" id="subjects">
      <ul class="nav nav-pills">
  <li class="active"><a href="#" onclick="myWindow.close()">Home</a></li>
  @foreach($subjects as $subject)
      <li><a href="{{route('shownotes.index')}}?subject={{$subject->subject_name}}">{{ucfirst($subject->subject_name)}}</a></li>
  @endforeach
</ul>

        <div class="">
            
                <div class="tab-content" style="display:block;">

                    <!-- Section Start -->
                    @foreach($notes as $note)
                    
                        <div class="col-md-3 col-sm-3 col-xs-12" style="border:7px solid rgba(0,0,0,.06);">
                            <div class="card">
                              
                                <img class="img img-responsive" src="/{{$note->img}}" alt="" title="" style="max-width: 210px; max-height: 210px; padding: 20px; margin-left: 10px;">
                                <div class="container-fluid border-bottom border-left border-right">
                                    <h4 class="card-title">
                                     
                                    </h4>
                                    <ul class="list-group">
                                        
                                         <li class="category4-list-style slow-transition">
                                               <b>Class:</b>
                                                 <i>
                                               {{$note->class_name}}
                                              </i>
                                            </li>

                                            <li class="category4-list-style slow-transition">
                                              <b> Subject Name:</b>
                                              <i>
                                                {{$note->subject_name}}
                                              </i>
                                            </li>

                                             <li class="category4-list-style slow-transition">
                                               <b>Topic Name:</b>
                                                 <i>
                                                {{$note->topic_name}}
                                              </i>
                                            </li>
                                                <center>
                                                    <a href="{{$note->file_link}}" target="_blank">
                                               <b style="margin-right: 20px;">View Notes:</b> 
                                               <i class="fas fa-download"></i>
                                                </center>
                                            </a>

                                       
                                        
                                          
                                        
                                          
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- Section End -->

                    
                    <div style="clear:both;"></div>
                </div>
            
        </div>
    </div>
</div>
</body>

</html>