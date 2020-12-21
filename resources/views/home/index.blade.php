@extends('home.layout.app')
@section('body')
  

    <!-- ==============================================
    ** Header **
    =================================================== -->
    <header>
        @include('home.layout.headermenu')
        @include('home.layout.navigation')
      
       @include('home.layout.headermiddle')

        <!-- Start Navigation -->
      
        <!-- End Navigation -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- References: https://github.com/fancyapps/fancyBox -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">


    </header>

    <!-- ==============================================
    ** Banner Carousel **
    =================================================== -->
    <div class="container">
          <div class="row">
        <div class="col-md-8 com-sm-12" style="height: 200%;">

             <div class="banner-outer">
        <div class="banner-slider" data-aos="zoom-in">
            @foreach($sliders as $slider)
            <div class="slide1" style="background: url({{$slider->image_path}});
             background-repeat: no-repeat;
            background-size: contain, cover;
            ">
                <div class="container">
                   <!--  <div class="content animated fadeInRight">
                        <div class="fl-right">
                            <h1 class="animated fadeInRight">Explore the World of <span class="animated fadeInRight">Our Graduates</span> </h1>
                            <p class="animated fadeInRight">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="about.html" class="btn animated fadeInRight">Know More <span class="icon-more-icon"></span></a>
                        </div>
                    </div> -->
                </div>
            </div>

            @endforeach
            

          
           
        </div>
    </div>
            
        </div>

<div class="col-md-4 col-sm-12">


<!--  -->

<div class="panel panel-success" data-aos="zoom-in-up">
                        <div class="panel-heading notification-home">
                            <span class="panel-title" style="font-family: inherit; font-weight: 500; line-height: 1.1;">Notifications & Update</span>
                        </div>

                         <div class="scroll-wrapper list-group scrollbar-outer" style="position: relative; overflow: auto;">

                               <ul class="list-group  scrollbar-macosx scroll-content scroll-scrolly_visible" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 260px;">

                                @foreach($notifications as $notification)

                                 <li class="list-group-item">
                                <img src="{{url('images/bullet_arrow_r.png')}}" alt="" title="" style="border: 0px;"><a href="
                                  @if($notification->file_path)
                                     {{$notification->file_path}}
                                    @else
                                {{$notification->notification_link}}
                                @endif
                                " style="color: brown;" class="link" target="_blank">
                                    <b>{{$notification->notification_title}} <img src="{{url('new_icon_blink.gif')}}" style="width:22px; height: 9px;"></b><br>
                                  
                                      {{$notification->notification_body}}
                                  
                                   

                                   </a>
                            </li>

                                @endforeach
                           

                        </ul>

                         </div>
                      
                    </div>

<!--  -->
</div>

    </div>


    </div>
  
   

   
    <!-- background: url(../images/rahateclassescourse.jpg) no-repeat center top / cover; -->

    <!-- ==============================================
    ** About **
    =================================================== -->
    <section class="about">
        <div class="container">
            <ul class="row our-links">
                <li class="col-sm-4 apply-online clearfix equal-hight">
                    <div class="icon"><img src="{{ asset('homeassets\images\apply-online-ico.png')}}" class="img-responsive" alt=""></div>
                    <div class="detail">
                        <h3><a href="{{route('student.admission.index')}}" style="color:#fff;">Apply Online</a></h3>
                       
                        <a href="{{route('student.admission.index')}}" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="col-sm-4 prospects clearfix equal-hight">
                    <div class="icon"><img src="{{ asset('homeassets\images\prospects-ico.png')}}" class="img-responsive" alt=""></div>
                    <div class="detail">
                        <h3> <a href="{{url('broucher.pdf')}}" style="color:#fff;"><span>Download</span>Broucher</a></h3>
                    
                        <a href="{{url('broucher.pdf')}}" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="col-sm-4 certification clearfix equal-hight">
                    <div class="icon"><img src="{{ asset('homeassets\images\certification-ico.png')}}" class="img-responsive" alt=""></div>
                    <div class="detail">
                        <h3>
                             <a href="{{route('home.course.index')}}" style="color: #fff;" >
                        Fees Structure
                    </a>
                    </h3>
                       
                        <a href="{{route('home.course.index')}}" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-sm-push-5 left-block" data-aos="zoom-in-left"> <span class="sm-head">Welcome To</span>
                    <h2>Rahate IIT & Medical Home</h2>
                    <p style="text-align: justify;">Rahate Classes in Nagpur has stepped into education industry for redefining the perception of competitive exams coaching. Here we are guiding and teaching our students for <b>IIT-JEE, NEET ,NATA, NDA, SEEE, </b>and <b>CBSE</b> by offering a highly encouraging learning atmosphere and with the good institutional setting. All of the tutors at Rahate Classes Nagpur are setting up confidence in the initial stage and then guide the aspirants all through the process thoroughly. Our aim is not only to show our experience and best teaching ability but also to improve the achievement of our aspirants in Rahate IIT And Medical Home.</p>
                    <!-- <div class="know-more-wrapper"> <a href="about.html" class="know-more">Know More <span class="icon-more-icon"></span></a> </div> -->
                </div>
                <div class="col-sm-5 col-sm-pull-7" data-aos="zoom-in-right">
                    <div class="video-block">
                        <div id="thumbnail_container"> <img src="{{ asset('homeassets\images\rahate-campus-campus.jpg')}}" id="thumbnail" class="img-responsive" alt=""> </div>
                       <!--  <a href="https://www.youtube.com/watch?v=i11RXCJVEnw" class="start-video video"><img src="images\play-btn.png" alt=""></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="our-impotance padding-md">
        

        <div class="container">
            <center> <h2>Why Choose US</h2></center>
            <ul class="row">
                <li class="col-sm-4 equal-hight" style="height: 254px;"
                data-aos="zoom-in"
                >
                    <div class="inner"> <img src="{{ asset('homeassets\images\elearning.png')}}" alt="Malleable Study Time">
                        <a href="http://rahateclasses.mstitute.com/test/build" target="_blank"><h3>Online <span>Lectures.</span> </h3>
                        <p>
                            Online Lectures For Students
                        </p>
                       </a>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight" style="height: 254px;" data-aos="zoom-in">
                    <div class="inner"> <img src="{{ asset('homeassets\images\people.png')}}" alt="Placement Assistance">
                        <a href="#ulfaculties">
                        <h3>Skilled Faculties</h3>
                        <p>Our Faculties one of best and Higly Experianced faculties.</p>
                    </a>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight" style="height: 254px;" data-aos="zoom-in">
                    <div class="inner"> <img src="{{ asset('homeassets\images\management.png')}}" alt="Placement Assistance"> 
                        <h3>100% Score in Exams</h3>
                    <p>Our students score best result in exams.</p>
                    </div>
                </li>
              
               
            </ul>

                <ul class="row">
                      <li class="col-sm-4 equal-hight" style="height: 278px;" data-aos="zoom-in">
                    <div class="inner"> <img src="{{ asset('homeassets\images\school.png')}}" alt="Study on the Go">
                        <a href="{{url('labbooks.pdf')}}" target="_blank">
                        <h3>Library facility.</h3>
                        <p>We have library for IIT-JEE, AIPMT, MHT-CET exams.</p>
                    </a>
                        
                    </div>
                </li>

                 <li class="col-sm-4 equal-hight" style="height: 278px;" data-aos="zoom-in">
                    <div class="inner"> <img src="{{ asset('homeassets\images\exam.png')}}" alt="Study on the Go">
                          <a href="http://rahateclasses.mstitute.com/test/build" target="_blank">
                        <h3>Online Exam.</h3>
                        <p>We Conduct Online Exam for Analys Student Performance</p>
                    </a>
                        
                    </div>
                </li>

                  <li class="col-sm-4 equal-hight" style="height: 278px;" data-aos="zoom-in">
                    <div class="inner"> <img src="{{ asset('homeassets\images\file.png')}}" alt="Study on the Go">
                        <h3>A synchronised program.</h3>
                        <p>that is school, college coaching all under one roof, so that students get plenty of time to study. (i.e. self preparation). </p>
                        
                    </div>
                </li>

                </ul>

             <ul class="row">
                <li class="col-sm-4 equal-hight" style="height: 254px;" data-aos="zoom-in">
                    <div class="inner"> <img src="{{ asset('homeassets\images\technology.png')}}" alt="Malleable Study Time">
                      <a href="#gotocctv">  <h3>CCTV <span>Surveillance</span> </h3>
                        <p>
                            24x7 CCTV,Guard & Warden 
                        </p>
                       </a>
                    </div>
                </li>
              <li class="col-sm-4 equal-hight" style="height: 254px;" data-aos="zoom-in">
                    <div class="inner"> <img src="{{ asset('homeassets\images\sheet.png')}}" alt="Placement Assistance">
                        <h3>Printed Notes</h3>
                        <p>We Provide Printed Notes for our students.</p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight" style="height: 254px;" data-aos="zoom-in">
                    <div class="inner"> <img src="{{ asset('homeassets\images\call.png')}}" alt="Placement Assistance"> 
                        <a href="#gotocctv">
                        <h3>Students counselling cell. </h3>
                    <p>Our Students counselling cell & grievances cell.</p>
                </a>
                    </div>
                </li>
               
               
            </ul>
        </div>
    </section>


    <!-- IMAGES -->

        <section class="campus-tour padding-md">
        <div class="container-fluid">
            <h2>Our Gallery</h2>

            <div class="container">
    <div class="row">
        <div class='list-group gallery'>
            <div class='col-sm-12 col-xs-12 col-md-4 col-lg-4'  data-aos="zoom-in">
                <a class="thumbnail fancybox" rel="ligthbox" href="{{url('homeclass.png')}}">
                    <img class="img-responsive" alt="" src="{{url('homeclass.png')}}" />
                   

                </a>
                   <figcaption class="figure-caption" style="font-weight: 600; margin-top: 5px;  text-align: center; font-size: 22px;" >Our Class Room</figcaption>
            </div> <!-- col-6 / end -->
            <div class='col-sm-12 col-xs-12 col-md-4 col-lg-4'  data-aos="zoom-in">
                <a class="thumbnail fancybox" rel="ligthbox" href="{{url('classes22.png')}}">
                    <img class="img-responsive" alt="" src="{{url('classes22.png')}}" style="height: 191px;" />
                     

                </a>
                 <figcaption class="figure-caption" style="font-weight: 600; margin-top: 5px;  text-align: center; font-size: 22px;">Faculties Lecture</figcaption>
            </div> <!-- col-6 / end -->
              <div class='col-sm-12 col-xs-12 col-md-4 col-lg-4'  data-aos="zoom-in" id="gotolib">
                <a class="thumbnail fancybox" rel="ligthbox" href="{{url('lib.png')}}">
                    <img class="img-responsive" alt="" src="{{url('lib.png')}}" />
                    

                </a>
                  <figcaption class="figure-caption" style="font-weight: 600; margin-top: 5px;  text-align: center; font-size: 22px;">Our Library</figcaption>
            </div> <!-- col-6 / end -->

              <div class='col-sm-12 col-xs-12 col-md-4 col-lg-4'  data-aos="zoom-in">
                <a class="thumbnail fancybox" rel="ligthbox" href="{{url('housekeeping.png')}}">
                    <img class="img-responsive" alt="" src="{{url('housekeeping.png')}}" />

                </a>
                   <figcaption class="figure-caption" style="font-weight: 600; margin-top: 5px;  text-align: center; font-size: 22px;">House Keeping</figcaption>
            </div> <!-- col-6 / end -->

              <div class='col-sm-12 col-xs-12 col-md-4 col-lg-4' id="gotocctv"  data-aos="zoom-in">
                <a class="thumbnail fancybox" rel="ligthbox" href="{{url('security.jpg')}}">
                    <img class="img-responsive" alt="" src="{{url('security.jpg')}}" />
                </a>
                 <figcaption class="figure-caption" style="font-weight: 600; margin-top: 5px;  text-align: center; font-size: 22px;">Security Guard & CCTV Surveillance</figcaption>
            </div> <!-- col-6 / end -->

              <div class='col-sm-12 col-xs-12 col-md-4 col-lg-4'  data-aos="zoom-in">
                <a class="thumbnail fancybox" rel="ligthbox" href="{{url('operators.jpg')}}">
                    <img class="img-responsive" alt="" src="{{url('operators.jpg')}}" />
                   

                </a>
                 <figcaption class="figure-caption" style="font-weight: 600; margin-top: 5px;  text-align: center;font-size: 22px;">Our Operator Team</figcaption>
            </div> <!-- col-6 / end -->
        
        </div> <!-- list-group / end -->
    </div> <!-- row / end -->
</div> <!-- container / end -->

</div>



    </section>


    <!-- IMAGES END -->

       <!-- ==============================================
    ** Campus Tour **
    =================================================== -->
    <section class="campus-tour padding-md">
        <div class="container-fluid">
            <div class="row">
              
            <h2>OUR TOPPERS</h2>
        </div>
          <div class="col-md-8 col-sm-12 col-lg-8">
        <ul class="gallery clearfix">
            <li>
                <div class="overlay">
                    <h3>Tanmay Giri</h3>
                    <p>JEE Topper</p>
                    <a class="galleryItem" href="{{asset('homeassets\images\rahate_topper_1.jpg')}}"><span class="icon-enlarge-icon"></span></a>
                    
                </div>
                <figure><img src="{{asset('homeassets\images\0d965cee-0e18-488f-8cba-b1cfb8589c1e(1).jpg')}}" class="img-responsive" alt="" style="height: 320px; width: 100%"></figure>
            </li>

     <!--        <li>
                <div class="overlay">
                    <h3>Tanmay Giri</h3>
                    <p>JEE Topper</p>
                    <a class="galleryItem" href="images\1dff820e-55b4-4e7f-acd0-1bea08f75fa8.jpg"><span class="icon-enlarge-icon"></span></a>
                    
                </div>
                <figure><img src="images\1dff820e-55b4-4e7f-acd0-1bea08f75fa8.jpg" class="img-responsive" alt="" style="height: 320px; width: 100%"></figure>
            </li> -->

            <li>
                <div class="overlay">
                    <h3>PRAFULLA GOTEMARE</h3>
                    <p>JEE Topper</p>
                    <a class="galleryItem" href="{{asset('homeassets\images\9c2cd031-32ce-498d-ae11-8d7376788256.jpg')}}"><span class="icon-enlarge-icon"></span></a>
                    
                </div>
                <figure><img src="{{asset('homeassets\images\9c2cd031-32ce-498d-ae11-8d7376788256.jpg')}}" class="img-responsive" alt="" style="height: 320px; width: 100%"></figure>
            </li>

            <li>
                <div class="overlay">
                    <h3>Himakshi Kapte</h3>
                    <p>JEE Topper</p>
                    <a class="galleryItem" href="{{asset('homeassets\images\ff2bd4ad-08e4-48bc-a24b-825e0740d88a.jpg')}}"><span class="icon-enlarge-icon"></span></a>
                    
                </div>
                <figure><img src="{{asset('homeassets\images\ff2bd4ad-08e4-48bc-a24b-825e0740d88a.jpg')}}" class="img-responsive" alt="" style="height: 320px; width: 100%"></figure>
            </li>

                <li>
                <div class="overlay">
                    <h3>Apporva Sonkusre</h3>
                    <p>JEE Topper</p>
                    <a class="galleryItem" href="{{asset('homeassets\images\ff2bd4ad-08e4-48bc-a24b-825e0740d88a.jpg')}}"><span class="icon-enlarge-icon"></span></a>
                    
                </div>
                <figure><img src="{{asset('homeassets\images\381dd297-dd62-4a68-b5bb-8192becda14e.jpg')}}" class="img-responsive" alt="" style="height: 320px; width: 100%"></figure>
            </li>

            
          
        </ul>
        </div>

   <div class="col-md-4 col-sm-12 col-lg-4" id="enquirynow">
     <h2 style="color:#010101;">OUR TOPPERS</h2>
     <form action="{{route('inquiry.store')}}" method="POST" id="inquiryform">
     @csrf
    <div class="enquire-now" data-aos="zoom-in-up">
    
   
                        <div class="inner">
                          
                            <div class="row1">
                                <input name="name" placeholder="Name" type="text" required>
                            </div>
                            <div class="row2 clearfix">
                                <input name="email" placeholder="Email" type="email" required>
                                <input name="phone" placeholder="Phone" type="text" required maxlength="10">
                            </div>
                            <div class="row2 clearfix">
                                <input name="place" placeholder="Place" type="text" required >
                                <input name="message" placeholder="Message" type="text" required>
                            </div>
                        </div>
                        <button class="enquire-btn" type="submit" id="sendinquiry">Send now <span class="icon-more-icon"></span></button>
                    </div>
                    </form>
   </div>


    </div>
    </section>

    <!-- End Our Topper -->

      <section class="logos">
        <div class="container">
           
        </div>
    </section>





     <section class="why-choose padding-lg">
        <div class="container">
            <h2><span>The Numbers Say it All</span>Why Choose Us</h2>
            <ul class="our-strength">
                <li>
                    <div class="icon"><span class="icon-certification-icon"> </span></div>
                    <span >10</span><span>+</span>
                    <div class="title">Cources Classes</div>
                </li>
                <li>
                    <div class="icon"><span class="icon-student-icon"></span></div>
                    <span>100</span><span>+</span>
                    <div class="title">Students Registered</div>
                </li>
                <li>
                    <div class="icon"><span class="icon-book-icon"></span></div>
                    <div class="couter-outer"></span><span class="counter">1</span></div>
                    <div class="title">No. 1 Coaching In Nagpur</div>
                </li>
                <li>
                    <div class="icon"><span class="icon-parents-icon"></span></div>
                    <div class="couter-outer"><span class="counter">100</span><span>%</span></div>
                    <div class="title">Exellent Faculties</div>
                </li>
            </ul>
        </div>
    </section>


        <!-- Teachers -->
<div id="faculties"></div>
    <section class="browse-teacher padding-lg" id="">
        <div class="container">
            <h2>OUR EXPERTE FACULTIES</h2>
            <ul class="row browse-teachers-list clearfix" id="ulfaculties">
                @foreach($faculties as $facultie)
                <li class="col-xs-6 col-sm-4" data-aos="zoom-in">
                    <figure> <img src="{{url($facultie->photo_url)}}" width="124" height="124" alt=""  style="    font-size: 14px;
"> </figure>
                    <h3>{{$facultie->fullname}}</h3>
                    <span class="designation" style="font-weight: 600">{{$facultie->designation}}</span>
                    <p class="equal-hight" style="height: 114px; font-weight: 500;">{!! $facultie->details !!}</p>
                   
                </li>
               @endforeach
            </ul>
        </div>
    </section>


    <!-- End teachers -->






    <!-- ==============================================
    ** Our Cources **
    =================================================== -->
    <section class="our-cources padding-lg">
        <div class="container">
            <h2> <span>Unique Features of our programs</span> What do you want to study?</h2>
            <ul class="course-list owl-carousel">
                <li>
                    <div class="inner">
                        <figure><img src="" alt=""></figure>
                        <h3>NEET</span></h3>
                        <p>Expert Coaching Classes For Pre Medical NEET, JEE Advanced (IIT), JEE Main Preparation in Nagpur. The Only Institute Which Truly Prepares You For NEET, JEE Main & JEE Advanced With XI-XII Board too.</p>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                               <h4>Apply Online</h4>
                                <span>To Take Admission</span>
                            </div>
                            <a href="{{route('student.admission.index')}}"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                   <li>
                    <div class="inner">
                        <figure><img src="" alt=""></figure>
                        <h3>CBSE</span></h3>
                        <p>Rahate’s IIT & Medical Home 8 to 10 is 3 Years educational Program design by the educationalist for preparing the student to compete in a diverse world market.</p>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                               <h4>Apply Online</h4>
                                <span>To Take Admission</span>
                            </div>
                            <a href="{{route('student.admission.index')}}"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>

                 <li>
                    <div class="inner">
                        <figure><img src="" alt=""></figure>
                        <h3>State Board</span></h3>
                        <p>Rahate’s IIT & Medical Home 8 to 10 is 3 Years educational Program design by the educationalist for preparing the student to compete in a diverse world market.</p>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                               <h4>Apply Online</h4>
                                <span>To Take Admission</span>
                            </div>
                            <a href="{{route('student.admission.index')}}"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="inner">
                        <figure><img src="" alt=""></figure>
                        <h3>SEED</span></h3>
                        <p>Studying at Rahate’s IIT & Medical Home prepares you for Success like no one else can. This coaching centre provides coaching to students from 8 to 10 as well as SEEE.</p>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                               <h4>Apply Online</h4>
                                <span>To Take Admission</span>
                            </div>
                            <a href="{{route('student.admission.index')}}"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner">
                        <figure><img src="" alt=""></figure>
                        <h3>NDA</span></h3>
                        <p>Rahate’s IIT & Medical Home offers NDA Coaching Classes For UPSC NDA/NA written examinations. The faculty at Rahate’s IIT & Medical Home is highly qualified and vastly experienced.</p>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>Apply Online</h4>
                                <span>To Take Admission</span>
                            </div>
                            <a href="{{route('student.admission.index')}}"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner">
                        <figure><img src="" alt=""></figure>
                        <h3>NATA (ARCH.)</h3>
                        <p>Rahate’s IIT & Medical Home is Best coaching institute to provides Entrance Exam coaching for prominent Architecture Entrance Exam like NATA , JEE Mains (B.Arch), etc.</p>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                 <h4>Apply Online</h4>
                                <span>To Take Admission</span>
                            </div>
                            <a href="{{route('student.admission.index')}}"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner">
                        <figure><img src="" alt=""></figure>
                        <h3>IIT-JEE<span>Coaching</span></h3>
                        <p>IIT JEE coaching is getting popular among the engineering aspirants. Our team is efficient in making you be a master of your IIT JEE course.</p>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>Apply Online</h4>
                                <span>To Take Admission</span>
                                
                            </div>
                            <a href="{{route('student.admission.index')}}"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

  
   
    <!-- ==============================================
    ** How Study **
    =================================================== -->
  

    <!-- ==============================================
    ** Why Choose **
    =================================================== -->
   
  <?php
    if($testimonials->count() > 0)
    {

      ?>

         <!-- ==============================================
    ** Testimonials **
    =================================================== -->
    <section class="testimonial padding-lg">

        
              <center> <h2>Alumini Testimonials</h2> </center> 
            
            <div class="strip"><img src="https://d16swpibua0gnc.cloudfront.net/Aakash-Anthe/s3fs-public/inline-images/strip.png"></div>

        <div class="container">



        <div class="carousel slide" data-ride="carousel" id="myCarousel" style="z-index: 99999;"><!-- Carousel indicators -->

<!-- Wrapper for carousel items -->

<div class="carousel-inner" style="border: 1px solid #f0832126;">

    @foreach($testimonials as $testimonial)
    @if($testimonial->id == 1)
<div class="item carousel-item active">
    @else
    <div class="item carousel-item">
    @endif

<div class="img-box">
<div class="avatar">
                   
                       
                             

    <img alt="" src="{{url($testimonial->image_path)}}" style="width:140px;height: 140px;" id="image_preview_container"></div>
</div>

<p class=""><img src="https://d16swpibua0gnc.cloudfront.net/Aakash-Anthe/s3fs-public/inline-images/testimonialsicon-top.png"><br>
<br>
{{$testimonial->description}}
</p>

<p class="overview"><b>{{$testimonial->name}}</b> JEE (Advanced) 2020 Topper<br>
<b>4 Year Classroom Student | Class IX-XII</b></p>
</div>
@endforeach

<!-- Carousel controls -->
</div>
</div>

    </section>


    <?php  
        
    }
        
  ?>

   

    @if($popup->status)
    <!-- mPopup box -->
<div id="mpopupBox" class="mpopup">
    <!-- mPopup content -->
    <div class="mpopup-content">
        <div class="mpopup-head">
        <div class="modal-header">
       <span class="close">&times;</span>
        <h4 class="modal-title" style="margin:auto;color:#fff;">Notification</h4>
      </div>
        </div>
        <div class="mpopup-main">
        <div class="modal-body">
      

          
                        <div id="popupimg"> 
                        <img src= "{{$popup->img_path}}" class="img-responsive" alt=""> 
                        </div>
                       <!--  <a href="https://www.youtube.com/watch?v=i11RXCJVEnw" class="start-video video"><img src="images\play-btn.png" alt=""></a> -->
      
      </div>
        </div>
        <div class="mpopup-foot">
      
           
        </div>
    </div>
</div>

@endif

    <!-- ==============================================
    ** News & Events **
    =================================================== -->
 

   

    <!-- ==============================================
    ** Brands **
    =================================================== -->
  

    <!-- ==============================================
    ** Testimonials **
    =================================================== -->
  <!--   <section class="testimonial padding-lg">
        <div class="container">
            <div class="wrapper">
                <h2>Alumini Testimonials</h2>
                <ul class="testimonial-slide">
                    <li>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley...<a href="#">Read more</a></p>
                        <span>Thomas, <span>London</span></span>
                    </li>
                    <li>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley...<a href="#">Read more</a></p>
                        <span>Thomas, <span>London</span></span>
                    </li>
                    <li>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley...<a href="#">Read more</a></p>
                        <span>Thomas, <span>London</span></span>
                    </li>
                </ul>
                <div id="bx-pager">
                    <a data-slide-index="0" href=""><img src="images\testimonial-thumb1.jpg" class="img-circle" alt=""></a>
                    <a data-slide-index="1" href=""><img src="images\testimonial-thumb2.jpg" class="img-circle" alt=""></a>
                    <a data-slide-index="2" href=""><img src="images\testimonial-thumb3.jpg" class="img-circle" alt=""></a>
                </div>
            </div>
        </div>
    </section> -->

    <!-- ==============================================
    ** Footer **
    =================================================== -->
    @include('home.layout.footer')
    <!-- Scroll to top -->
    <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

      @include('home.layout.scripts')
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

      

      <script>

          AOS.init();

              $('#myCarousel').carousel({
        interval:   4000
    });
    
    var clickEvent = false;
    $('#myCarousel').on('click', '.nav a', function() {
            clickEvent = true;
            $('.nav li').removeClass('active');
            $(this).parent().addClass('active');        
    }).on('slid.bs.carousel', function(e) {
        if(!clickEvent) {
            var count = $('.nav').children().length -1;
            var current = $('.nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if(count == id) {
                $('.nav li').first().addClass('active');    
            }
        }
        clickEvent = false;
    });


function subscriptionPopup(){
    // get the mPopup
    var mpopup = $('#mpopupBox');
    
    // open the mPopup
    mpopup.show();
    
    // close the mPopup once close element is clicked
    $(".close").on('click',function(){
        mpopup.hide();
    });
    
    // close the mPopup when user clicks outside of the box
    $(window).on('click', function(e) {
        if(e.target == mpopup[0]){
            mpopup.hide();
        }
    });
}



$( document ).ready(function() {
      // $('.scrollbar-inner').scrollbar();

    console.log( "ready!" );
    @if ($message = Session::get('success'))
      //  alert("Message Sent");
        Command: toastr["success"]("Message Sent Succesfully.", "Success")

toastr.options = {
  "closeButton": true,
  "debug": true,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-bottom-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "show",
  "hideMethod": "hide"
}

@endif

var popDisplayed = $.cookie('popDisplayed');
   
        setTimeout( function() {
            subscriptionPopup();
        },4000);
      //  $.cookie('popDisplayed', '1', { expires: 1 });
   

});




    
$(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
   
  

      </script>


      @endsection