 <?php
    if($testimonials->count() > 0)
    {

      ?>

         <!-- ==============================================
    ** Testimonials **
    =================================================== -->
    <section class="testimonial padding-lg">

        
              <center> <h2>Alumini Testimonials</h2> </center> 
            
            <div class="strip"><img src="https://d16swpibua0gnc.cloudfront.net/Aakash-Anthe/s3fs-public/inline-images/strip.png"></div>

        <div class="container">



        <div class="carousel slide" data-ride="carousel" id="myCarousel" style="z-index: 99999;"><!-- Carousel indicators -->

<!-- Wrapper for carousel items -->

<div class="carousel-inner" style="border: 1px solid #f0832126;">

    @foreach($testimonials as $testimonial)
    @if($testimonial->id == 1)
<div class="item carousel-item active">
    @else
    <div class="item carousel-item">
    @endif

<div class="img-box">
<div class="avatar">
                   
                       
                             

    <img alt="" src="{{url($testimonial->image_path)}}" style="width:140px;height: 140px;" id="image_preview_container"></div>
</div>

<p class=""><img src="https://d16swpibua0gnc.cloudfront.net/Aakash-Anthe/s3fs-public/inline-images/testimonialsicon-top.png"><br>
<br>
{{$testimonial->description}}
</p>

<p class="overview"><b>{{$testimonial->name}}</b> JEE (Advanced) 2020 Topper<br>
<b>4 Year Classroom Student | Class IX-XII</b></p>
</div>
@endforeach

<!-- Carousel controls -->
</div>
</div>

    </section>


    <?php  
        
    }
        
  ?>

   
