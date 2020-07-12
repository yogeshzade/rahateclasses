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
                        <h1>Skilled Courses</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3"> <a href="apply-online.html" class="apply-online clearfix">
                        <div class="left clearfix"> <span class="icon"><img src="images\apply-online-sm-ico.png" class="img-responsive" alt=""></span> <span class="txt">Apply Online</span> </div>
                        <div class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    </a> <a href="#" class="download-prospects"><span class="icon-brochure-icon"></span> Download Prospects</a> </div>
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
                <li class="col-xs-6 col-sm-4 col-md-3">
                    <div class="inner">
                        <figure><img src="images\course-img1.jpg" alt=""></figure>
                        <h3>Online <span>MBA General</span></h3>
                        <p>A comprehensive study of modern business...</p>
                        <div class="fess-box"> Fees :<span>$230</span> </div>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>2 Year</h4>
                                <span> Courses</span>
                            </div>
                            <a href="#"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3">
                    <div class="inner">
                        <figure><img src="images\course-img2.jpg" alt=""></figure>
                        <h3>Online MBA <span>Operations</span></h3>
                        <p>A comprehensive study of modern business...</p>
                        <div class="fess-box"> Fees :<span>$230</span> </div>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>1 Year</h4>
                                <span> Courses</span>
                            </div>
                            <a href="#"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3">
                    <div class="inner">
                        <figure><img src="images\course-img3.jpg" alt=""></figure>
                        <h3>Online MBA <span>Marketing</span></h3>
                        <p>A comprehensive study of modern business...</p>
                        <div class="fess-box"> Fees :<span>$230</span> </div>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>3 Year</h4>
                                <span> Courses</span>
                            </div>
                            <a href="#"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3">
                    <div class="inner">
                        <figure><img src="images\course-img4.jpg" alt=""></figure>
                        <h3>Online MBA <span>Human</span><span>Resource</span></h3>
                        <p>A comprehensive study of modern business...</p>
                        <div class="fess-box"> Fees :<span>$230</span> </div>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>2 Year</h4>
                                <span> Courses</span>
                            </div>
                            <a href="#"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3">
                    <div class="inner">
                        <figure><img src="images\course-img1.jpg" alt=""></figure>
                        <h3>Online <span>MBA General</span></h3>
                        <p>A comprehensive study of modern business...</p>
                        <div class="fess-box"> Fees :<span>$230</span> </div>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>2 Year</h4>
                                <span> Courses</span>
                            </div>
                            <a href="#"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3">
                    <div class="inner">
                        <figure><img src="images\course-img2.jpg" alt=""></figure>
                        <h3>Online MBA <span>Operations</span></h3>
                        <p>A comprehensive study of modern business...</p>
                        <div class="fess-box"> Fees :<span>$230</span> </div>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>1 Year</h4>
                                <span> Courses</span>
                            </div>
                            <a href="#"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3">
                    <div class="inner">
                        <figure><img src="images\course-img3.jpg" alt=""></figure>
                        <h3>Online MBA <span>Marketing</span></h3>
                        <p>A comprehensive study of modern business...</p>
                        <div class="fess-box"> Fees :<span>$230</span> </div>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>3 Year</h4>
                                <span> Courses</span>
                            </div>
                            <a href="#"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3">
                    <div class="inner">
                        <figure><img src="images\course-img4.jpg" alt=""></figure>
                        <h3>Online MBA <span>Human</span><span>Resource</span></h3>
                        <p>A comprehensive study of modern business...</p>
                        <div class="fess-box"> Fees :<span>$230</span> </div>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>2 Year</h4>
                                <span> Courses</span>
                            </div>
                            <a href="#"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3">
                    <div class="inner">
                        <figure><img src="images\course-img1.jpg" alt=""></figure>
                        <h3>Online <span>MBA General</span></h3>
                        <p>A comprehensive study of modern business...</p>
                        <div class="fess-box"> Fees :<span>$230</span> </div>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>2 Year</h4>
                                <span> Courses</span>
                            </div>
                            <a href="#"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3">
                    <div class="inner">
                        <figure><img src="images\course-img2.jpg" alt=""></figure>
                        <h3>Online MBA <span>Operations</span></h3>
                        <p>A comprehensive study of modern business...</p>
                        <div class="fess-box"> Fees :<span>$230</span> </div>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>1 Year</h4>
                                <span> Courses</span>
                            </div>
                            <a href="#"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3">
                    <div class="inner">
                        <figure><img src="images\course-img3.jpg" alt=""></figure>
                        <h3>Online MBA <span>Marketing</span></h3>
                        <p>A comprehensive study of modern business...</p>
                        <div class="fess-box"> Fees :<span>$230</span> </div>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>3 Year</h4>
                                <span> Courses</span>
                            </div>
                            <a href="#"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3">
                    <div class="inner">
                        <figure><img src="images\course-img4.jpg" alt=""></figure>
                        <h3>Online MBA <span>Human</span><span>Resource</span></h3>
                        <p>A comprehensive study of modern business...</p>
                        <div class="fess-box"> Fees :<span>$230</span> </div>
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>2 Year</h4>
                                <span> Courses</span>
                            </div>
                            <a href="#"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="row">
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