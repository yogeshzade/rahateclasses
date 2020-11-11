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
                        <h1>Our Courses</h1>
                        
                    </div>
                </div>
               
        </div>
    </div>

   
    



  


  
    <section class="our-cources sub padding-lg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h2> <span>Unique Features of our programs</span> What do you want to study?</h2>
                </div>
                <div class="col-sm-4">
                   
                </div>
            </div>
            <ul class="row course-list inner">

                @foreach ($courses as $course)
                <li class="col-xs-6 col-sm-4 col-md-3">
                    <div class="inner">
                        <figure><img src="images/course-img1.jpg" alt=""></figure>
                        <h3>{{$course->course_name}}</h3>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                            <h4>Class: {{$course->class}}</h4>
                            <span> Courses : {{$course->board}}</span>
                            </div>
                            <a href="#" style="color:#fff;">MORE</a>
                        </div>
                    </div>
                </li>
                @endforeach

              
          
            </ul>
            {{-- <div class="row">
                <div class="col-sm-12">
                    <nav aria-label="Page navigation" class="text-center">
                        <ul class="pagination">
                            <li> <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</span> </a> </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li> <a href="#" aria-label="Next"> <span aria-hidden="true">Next <i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> </li>
                        </ul>
                    </nav>
                </div>
            </div> --}}
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