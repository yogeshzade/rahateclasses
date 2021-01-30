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
                             <a href="{{route('feesStruct.index')}}" style="color: #fff;" >
                        Fees Structure
                    </a>
                    </h3>
                       
                        <a href="{{route('feesStruct.index')}}" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
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
                <li class="col-sm-3 equal-hight" style="height: 254px;"
                data-aos="zoom-in"
                >
                    <div class="inner"> 
                        <a href="http://rahateclasses.mstitute.com/test/build" target="_blank">
                        <img src="{{ asset('homeassets\images\elearning.png')}}" alt="Malleable Study Time">
                        <h3>Online <span>Lectures.</span> </h3>
                        
                       </a>
                    </div>
                </li>
                <li class="col-sm-3 equal-hight" style="height: 254px;" data-aos="zoom-in">
                    <div class="inner">
                         <a href="#ulfaculties">
                     <img src="{{ asset('homeassets\images\people.png')}}" alt="Placement Assistance">
                       
                        <h3>Skilled Faculties</h3>
                      
                    </a>
                    </div>
                </li>
                <li class="col-sm-3 equal-hight" style="height: 254px;" data-aos="zoom-in">
                  
                    <div class="inner"> 
                        <a href="#ourtoppers">
                        <img src="{{ asset('homeassets\images\management.png')}}" alt="Placement Assistance">
                        <h3>100% Score in Exams</h3>
                    </a>
                    </div>
                </li>

                  <li class="col-sm-3 equal-hight" style="height: 278px;" data-aos="zoom-in">
                    <div class="inner"> <img src="{{ asset('homeassets\images\school.png')}}" alt="Study on the Go">
                        <a href="{{url('labbooks.pdf')}}" target="_blank">
                        <h3>Library facility.</h3>
                       
                    </a>
                        
                    </div>
                </li>
              
               
            </ul>

                <ul class="row">
                    

                 <li class="col-sm-3 equal-hight" style="height: 278px;" data-aos="zoom-in">
                    <div class="inner"> 
                          <a href="http://rahateclasses.mstitute.com/test/build" target="_blank">
                        <img src="{{ asset('homeassets\images\exam.png')}}" alt="Study on the Go">
                        
                        <h3>Online Exam.</h3>
                       
                    </a>
                        
                    </div>
                </li>

                   <li class="col-sm-3 equal-hight" style="height: 254px;" data-aos="zoom-in">
                      <a href="#" 
target="popup" 
onclick="window.open('/show-notes','popup','width=1200,height=1080'); return false;">
                    <div class="inner"> <img src="{{ asset('homeassets\images\sheet.png')}}" alt="Placement Assistance">
                        <h3>Printed Notes</h3>
                        
                    </a>
                    </div>
                </li>

                 <li class="col-sm-3 equal-hight" style="height: 254px;" data-aos="zoom-in">
                    <div class="inner"> <img src="{{ asset('homeassets\images\technology.png')}}" alt="Malleable Study Time">
                      <a href="#gotocctv">  <h3>CCTV <span>Surveillance</span> </h3>
                       
                       </a>
                    </div>
                </li>

                 <li class="col-sm-3 equal-hight" style="height: 278px;" data-aos="zoom-in">
                    <a href="{{route('syncprogram.index')}}">
                    <div class="inner"> <img src="{{ asset('homeassets\images\file.png')}}" alt="Study on the Go">
                        <h3>A synchronised program.</h3>   
                    </div>
                </a>

                </li>

               

                </ul>

          
        </div>
    </section>


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
                        <h3>RAMANUJAN - JEE-2021</span></h3>
                        <p>Rahate’s IIT & Medical Home offers RAMANUJAN JEE Coaching Classes IIT/NIT Prepration The faculty at Rahate’s IIT & Medical Home is highly qualified and vastly experienced.</p>
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
                        <h3>DR ANANDI - NEET-2021</span></h3>
                        <p>Expert Coaching Classes For Pre Medical NEET, Preparation in Nagpur. The Only Institute Which Truly Prepares You For NEET.</p>
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
                        <h3>ARJUN - JEE-2022</span></h3>
                        <p>Rahate’s IIT & Medical Home offers RAMANUJAN JEE Coaching Classes IIT/NIT Prepration The faculty at Rahate’s IIT & Medical Home is highly qualified and vastly experienced.</p>
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
                        <h3>SUSHRUTA - NEET-2022</span></h3>
                        <p>Expert Coaching Classes For Pre Medical NEET, Preparation in Nagpur. The Only Institute Which Truly Prepares You For NEET.</p>
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
                        <h3>MH-CET 2021</span></h3>
                        <p>Expert Coaching Classes For MH-CET 21 Preparation in Nagpur. The Only Institute Which Truly Prepares With Expert Faculties.</p>
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
                        <h3>NATA 2021</span></h3>
                                                <p>Rahate’s IIT & Medical Home is Best coaching institute to provides Entrance Exam coaching for prominent Architecture Entrance Exam like NATA etc.</p>
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


               
            </ul>

        </div>
    </section>

<!-- TOPPER HERE -->
  <section class="browse-teacher padding-md" id="ourtoppers" style="background-color:#f4f4f4; ">
    <div class="container">
        <div class="row">
            <h2>OUR TOPPERS</h2>
        </div>
            <div class="row">
        <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
               
               @foreach($testimonials as $testimonial)



                   <div class="item">
                    <div class="pad15">
                    <div class="thumbnail"
                     style="
                        width: 300px;
    height: 300px;
    background-image: url({{url($testimonial->image_path)}});
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
                     ">
                 </div>
                    </div>
                </div>

                @endforeach
              
               
            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
    </div>
  </div>

</section>

<!-- TOPPER END HERE -->

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

  
        <!-- Teachers -->
<a name="ulfaculties"></a>
    <section class="browse-teacher padding-lg" id="">
        <div class="container">
            <h2>OUR EXPERT FACULTIES</h2>
            <ul class="row browse-teachers-list clearfix" >
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

  <section class="why-choose padding-lg">
        <div class="container">
            <h2><span>The Numbers Say it All</span>Why Choose Us</h2>
            <ul class="our-strength">
                <li>
                    <div class="icon"><span class="icon-certification-icon"> </span></div>
                    <span >10</span><span>+</span>
                    <div class="title">Courses</div>
                </li>
                <li>
                    <div class="icon"><span class="icon-student-icon"></span></div>
                    <span>350</span><span>+</span>
                    <div class="title">Students Registered</div>
                </li>
                <li>
                    <div class="icon"><span class="icon-book-icon"></span></div>
                    <div class="couter-outer"></span><span>1</span></div>
                    <div class="title">No. 1 Coaching In Nagpur</div>
                </li>
                <li>
                    <div class="icon"><span class="icon-parents-icon"></span></div>
                    <div class="couter-outer"><span>100</span><span>%</span></div>
                    <div class="title">Exellent Faculties</div>
                </li>
            </ul>
        </div>
    </section>

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
   
   $(document).ready(function() {
  $('#media').carousel({
      interval: 10000,
    cycle: true
  });
});


   $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
  


      </script>


      @endsection