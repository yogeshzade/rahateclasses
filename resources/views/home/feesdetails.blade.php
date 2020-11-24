@extends('home.layout.app')
@section('othercss')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js" integrity="sha256-CgvH7sz3tHhkiVKh05kSUgG97YtzYNnWt6OXcmYzqHY=" crossorigin="anonymous"></script>

@endsection

@section('body')
  

    <!-- ==============================================
    ** Header **
    =================================================== -->
    <header>
       
        @include('home.layout.headermenu')
        @include('home.layout.headermiddle') 
         <!-- Start Navigation -->
      
         <!-- End Navigation -->
     </header>


    
    <!-- Container Start  -->
   
<div class="container">

<!-- Row Start -->

<div class="row">
  <!-- Side Bar -->
@include('home.layout.dashboardmenu');

  <!-- Side Bar End -->

  <!-- Containt Here -->


<!-- Col Start -->
  <div class="col-md-9 col-sm-12">

    <section class="login-wrapper register" style="background-color:#f1f6f9">
    <div class="inner">
        <div class="regiter-inner">
          
            <div class="head-block">

                <h1>Complete Payment To Appoval Amdission!</h1>
            </br>
                   @if ($message = Session::get('success'))
<div class="alert alert-success alert-block mt-2">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif


            </div>
            <div class="cnt-block">

              <div class="row">
                <div class="col-md-4">

                  <div class="pull-left">
                    <b>Course Name :- </b> <b class="text-success">
                      {{$coursedetails->course_name}}
                    </b>
                  </div>


                
                </div>

                 <div class="col-md-4">

                  <div class="pull-left">
                    <b>Class Name :- </b> <b class="text-success">
                      {{$classdetails->classname}} - {{$classdetails->type}}
                    </b>
                  </div>

                  
                
                </div>


                <div class="col-md-4">

                  <div class="pull-left">
                    <b>Total Course Fees :- </b> <b class="text-success">
                     Rs. {{IND_money_format($coursedetails->total_fees)}}
                    </b>
                  </div>

                  
                
                </div>




              </div>
              <br/>

              <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Installment No</th>
      <th scope="col">Installment Name</th>
      <th scope="col">Installment Amout</th>
      <th scope="col">Installment Description</th>
    </tr>
  </thead>
  <tbody>
    @foreach($installments as $installment)
    <tr>
      <th scope="row">{{$installment->installment_no}}</th>
      <td>{{$installment->installments_name}}</td>
      <td><b>Rs. {{IND_money_format($installment->amount)}}</b></td>
      <td>
@if($installment->days_after_admission == 0)
<b class="text-success">This is Admission Fees<b>
@else
<b class="text-warning">This Is Next Installment to Pay after {{$installment->days_after_admission}} Days
</b>
@endif
        </td>
    </tr>
    @endforeach
   
  </tbody>
</table>


              
<div id="accordion" class="second-accordion">
                                   <div class="card">
                              <div class="card-header" id="headingSix">
                      <div class="panel-title">
                          <label for="r16">
                            <input type="radio" id="r16" name="occupation" value="Working" required="">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix"></a>
                          <b>Online Payment With Debit Card/Gpay/Phonepay </b>
                          </label>
                          
                      </div>
                  </div>
                  <div id="collapseSix" class="panel-collapse collapse in">
                      <div class="card-body">
                                  <div class="payment-proceed-btn">
                                    <form action="http://rjarts.in/dopayment" method="POST">
                                    @csrf                                      
                                    <input type="hidden" name="amount" value="">
                                    

                              <input type="submit" value="Pay Now" class="btn btn-success">
                                    </form>
                                  </div>
                      </div>
                  </div>
              </div>
                                          
                            
                        </div>



            </div>
        </div>
    </div>
</section>

               

  </div>

  <!-- Col ENd -->


  <!-- Content End Here -->
</div>

<!-- Row ENd -->




 </div> 

 <!-- Container End -->




    <!-- Optional JavaScript -->



     @include('home.layout.scripts')


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

@include('home.layout.dashboardscripts');


     <script type="text/javascript">



      $(document).ready(function (e) {

      });

    

</script>


      @endsection

      @php

function IND_money_format($money){
    $len = strlen($money);
    $m = '';
    $money = strrev($money);
    for($i=0;$i<$len;$i++){
        if(( $i==3 || ($i>3 && ($i-1)%2==0) )&& $i!=$len){
            $m .=',';
        }
        $m .=$money[$i];
    }
    return strrev($m);
}
      @endphp