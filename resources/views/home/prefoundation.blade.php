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
                <h3> Std 7th to 10th</h3>
                <br/>
                <p style="color:#010101;font-size: 16px;">
                  Today every parent wants their child to be a topper and do good in his/her career right? We Rahate's IIT and Medical Home focus on giving quality education to every student. In fact, understanding concepts are not useful for scoring good marks in exam but in higher studies also, it's very important. 
You can understand, how much bonding between students and teachers is important? 
We are the best IIT and Medical coaching classes in Nagpur for 15 years so, starting from std 7th to 10th we can get to know the strength and weaknesses of your child and with that our experts work on it. 
<br/>
Why should your child join us?




<ul>
  <li>Full-time Faculty Assistance.</li>
  <li>SMS Results to Parents on Regular Basis.</li>
  <li>Regular Parent teachers meeting for the betterment of the students.</li>
  <li>Detailed weekly evaluation report of each & every student so as timely evaluation.</li>
  <li>Positive Mental attitudes are taught.</li>
  <li>Short and Fast study techniques are taught.</li>
</ul>

<br/>
Are you ready to give your child a better start with Best IIT and Medical Coaching Classes in Nagpur?
                </p>
            </div>
            <br/>

        </div>

    </div>
  

</section>
 @include('home.layout.footer')

      @endsection