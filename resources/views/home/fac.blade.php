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
    margin-top: -20px;"></h1>
                        
                    </div>
                </div>
               
        </div>
    </div>

   
    



  


  
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


   


   
 

  
  

   

    <!-- ==============================================
    ** Footer **
    =================================================== -->
    @include('home.layout.footer')
    <!-- Scroll to top -->
    <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

      @include('home.layout.scripts')


      @endsection