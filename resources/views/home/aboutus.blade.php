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
        <style type="text/css">
          .first-box{padding:30px;background:#9C0; color: #fff;margin: 5px;}
.second-box{padding:30px; background:#39F; color: #fff;margin: 5px;}
.third-box{padding:30px;background:#F66; color: #fff;margin: 5px;}
.fourth-box{padding:30px;background:#6CC; color: #fff;margin: 5px;}
        </style>
    </header>

  

  <!-- ==============================================
    ** Inner Banner **
    =================================================== -->
   
   </br>
       

       <section class="browse-teacher padding-md" id="ourtoppers" style="background-color:#fff; ">

    <div class="container">
      
        <div class="row">

            <div class="col-md-12">
                <h3> About Us</h3>
                <br/>
                <p style="color:#010101;font-size: 16px;">Rahate’s IIT  & Medical Home Formed with a vision of providing the best educational solutions to science aspirants, imbibes a unique teaching methodology with their experienced faculties methodology with their experienced faculties beholding three decades of teaching expertise. 
Visionary Directors of Rahate’s IIT & Medical Home have designed the teaching system in the best tailored manner for the board examination as well as the entrance exams to pass with flying colors, 
We understand all the difficulties of aspiring students and we offer the ever best guidance along with all possible solution to students under one roof. 
Our exceptional teaching has brought in a different to way students think and solve the problems. Our students not only learn but are also trained with skills to excel  in various entrance exams.   
In our endeavor, we focus upon reserving our good will with parents, potential students and commitments of our faculties and staff of the academy.   </p>
            </div>
            <br/>
            <div class="col-md-6">
                <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3>Vision</h3>
                    </div>
                  <div class="panel-body">
                    <p style="color:#010101;font-size: 16px;">
                      To be a destination choice for quality education focused on enabling the students reach their goal by harnessing their potential. 
                  </p>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="panel panel-default">
                      <div class="panel-heading">
                           <h3>Mission</h3>
                      </div>
                  <div class="panel-body">
                    <p style="color:#010101;font-size: 16px;">
                      To provide high quality, systematic and effective teaching to enable our students emerge at winner in the toughest of competitions. 
                  </p>
                  </div>
                </div>
            </div>


        </div>

    </div>
  

</section>

      @endsection