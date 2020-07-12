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
                <div class="col-sm-4 col-lg-3"> <a href="apply-online.html" class="apply-online clearfix">
                        <div class="left clearfix"> <span class="icon"><img src="images\apply-online-sm-ico.png" class="img-responsive" alt=""></span> <span class="txt">Apply Online</span> </div>
                        <div class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    </a> <a href="/raharepros.pdf" class="download-prospects"><span class="icon-brochure-icon"></span> Download Prospects</a> </div>
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
           
            <div class="row">
              
            </div>
        </div>
    </section>

      <section class="logos">
        <div class="container">
           
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