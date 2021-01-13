@extends('home.layout.app')
@section('body')
  

    <!-- ==============================================
    ** Header **
    =================================================== -->
    <header>
       
       @include('home.layout.headermenu')
       @include('home.layout.headermiddle') 
        <!-- Start Navigation -->
       @include('home.layout.navigation')
        <!-- End Navigation -->
    </header>

 	<div class="inner-banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-lg-9">
                    <div class="content">
                        <h1 style="margin-bottom: 5px;
    margin-top: -20px;">Our Courses</h1>
                        
                    </div>
                </div>
               
        </div>
    </div>

   
    



  


  
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


   


   
 

  
  

   

    <!-- ==============================================
    ** Footer **
    =================================================== -->
    @include('home.layout.footer')
    <!-- Scroll to top -->
    <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

      @include('home.layout.scripts')


      @endsection