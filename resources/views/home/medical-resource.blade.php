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
    p{ color: #010101;
          }
          span{
            color:#010101;
            line-height: 1.6;
          }
        </style>
    </header>

  

  <!-- ==============================================
    ** Inner Banner **
    =================================================== -->
   
   <br/>
       

       <section class="browse-teacher padding-md" id="ourtoppers" style="background-color:#fff; ">

        <div class="container">
          
            <div class="row">
                
                 <div class="col-md-3">
                    
                    <div class="panel panel-default">
  <div class="panel-heading" style="color:#010101;">2014 Final</div>
  <div class="panel-body">
      <a href="">
          <button class="btn btn-md btn-success">
              Download
          </button>
      </a>
      </div>
</div>
                    
                </div>
                
                 <div class="col-md-3">
                    
                    <div class="panel panel-default">
  <div class="panel-heading" style="color:#010101;">2016 MCQ Paper</div>
  <div class="panel-body">
      <a href="">
          <button class="btn btn-md btn-success">
              Download
          </button>
      </a>
      </div>
</div>
                    
                </div>
                
                 <div class="col-md-3">
                    
                    <div class="panel panel-default">
  <div class="panel-heading" style="color:#010101;">2020 G1</div>
  <div class="panel-body">
      <a href="">
          <button class="btn btn-md btn-success">
              Download
          </button>
      </a>
      </div>
</div>
                    
                </div>
                
                 <div class="col-md-3">
                    
                    <div class="panel panel-default">
  <div class="panel-heading" style="color:#010101;">
          <b>Resources</b>
      </div>
  <div class="panel-body">
      <a href="https://drive.google.com/file/d/1TKNTSl_vf2EubrljdNJJcbTZbqkczNxA/view?usp=sharing" target="_blank">
         <center></center> <button class="btn btn-md btn-success">
              Open
          </button>
          </center>
      </a>
      </div>
</div>
                    
                </div>

            </div>

        </div>
      

      </section>
 @include('home.layout.footer')

      @endsection
