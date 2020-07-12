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

  

  <!-- ==============================================
    ** Inner Banner **
    =================================================== -->
    <div class="inner-banner contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-lg-9">
                    <div class="content">
                        <h1>Contact Us</h1>
                       <p>If you have any query then feel free to contact us</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3"> <a href="{{route('student.admission.index')}}" class="apply-online clearfix">
                       
                        <div class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    </a></div>
            </div>
        </div>
    </div>

    <!-- ==============================================
    ** Contact Us **
    =================================================== -->
    <section class="form-wrapper padding-lg">
        <div class="container">
            <form name="contact-form" id="ContactForm" method="post" action="{{route('home.contact.send')}}">
                @csrf
                <div class="row input-row">
                    <div class="col-sm-6">
                        <input name="first_name" type="text" placeholder="First Name">
                    </div>
                    <div class="col-sm-6">
                        <input name="last_name" type="text" placeholder="Last Name">
                    </div>
                </div>
                <div class="row input-row">
                    <div class="col-sm-6">
                        <input name="email" type="text" placeholder=" Email">
                    </div>
                    <div class="col-sm-6">
                        <input name="phone_number" type="text" placeholder="Phone Number">
                    </div>
                </div>
                <div class="row input-row">
                   
                    <div class="col-sm-6">
                        <input name="message" type="text" placeholder="Message">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn">Send Now <span class="icon-more-icon"></span></button>
                        <div class="msg"></div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- ==============================================
    ** Google Map **
    =================================================== -->
   
   <section class="google-map">
        <div id="map"><iframe src="https://snazzymaps.com/embed/238948" style="border:none;"></iframe></div>
        <div class="container">
            <div class="contact-detail">
                <div class="address">
                    <div class="inner">
                        <h3>Rahate Coaching Classes</h3>
                        <p>L39, Old Subhedar Lay Out N/o,
Ayodhya Nagar,Nagpur-24</p>
                    </div>
                    <div class="inner">
                        <h3>+91-9545578282</h3>
                    </div>
                    <div class="inner"> <a href="mailto:krantirahate12@gmail.com">krantirahate12@gmail.com</a> </div>
                </div>
                
            </div>
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