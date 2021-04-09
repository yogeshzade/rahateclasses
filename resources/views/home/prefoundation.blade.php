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
   
   </br>
       

       <section class="browse-teacher padding-md" id="ourtoppers" style="background-color:#fff; ">

    <div class="container">
      
        <div class="row">
           <div class="col-lg-12">
                <img src="/prefoundation.jpeg" class="img-responsive center-block d-block mx-auto" alt="Sample Image">
                
            </div>

            <div class="col-md-12">
                <h3> Std 7th to 10th</h3>
                <br/>
                <p style="margin: 0cm; line-height: 1.5; font-size: 15px; font-family: Arial, sans-serif;"><span style="font-size: 17px;">Today every parent wants their child to be a topper and do good in his/her career right? We Rahate&apos;s IIT and Medical Home focus on giving quality education to every student. In fact, understanding concepts are not useful for scoring good marks in exam but in higher studies also, it&apos;s very important.&nbsp;</span></p>
<p style="margin: 0cm; line-height: 1.5; font-size: 15px; font-family: Arial, sans-serif;"><span style="font-size: 17px;">You can understand, how much bonding between students and teachers is important?&nbsp;</span></p>
<p style="margin: 0cm; line-height: 1.5; font-size: 15px; font-family: Arial, sans-serif;"><span style="font-size: 17px;">We are the best IIT and Medical coaching classes in Nagpur for 15 years so, starting from std 7th to 10th we can get to know the strength and weaknesses of your child and with that our experts work on it. </span></p>
<p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'>&nbsp;</p>
<p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><strong>Why should your child join us?</strong></p>
<p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><br></p>
<ul>
    <li style="line-height: 1.5;"><span style="font-size: 17px;">* Full-time Faculty Assistance.</span></li>
    <li style="line-height: 1.5;"><span style="font-size: 17px;">* SMS Results to Parents on Regular Basis.</span></li>
    <li style="line-height: 1.5;"><span style="font-size: 17px;">* Regular Parent teachers meeting for the betterment of the students.</span></li>
    <li style="line-height: 1.5;"><span style="font-size: 17px;">* Detailed weekly evaluation report of each &amp; every student so as timely evaluation.</span></li>
    <li style="line-height: 1.5;"><span style="font-size: 17px;">* Positive Mental attitudes are taught.</span></li>
    <li style="line-height: 1.5;"><span style="font-size: 17px;">* Short and Fast study techniques are taught.</span> </li>
</ul>
<p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'>&nbsp;</p>
<p style='margin:0cm;line-height:115%;font-size:15px;font-family:"Arial",sans-serif;'><strong>Are you ready to give your child a better start with Best IIT and Medical Coaching Classes in Nagpur?</strong></p>
            </div>

       </div>
  </div>
  

</section>
 @include('home.layout.footer')

      @endsection