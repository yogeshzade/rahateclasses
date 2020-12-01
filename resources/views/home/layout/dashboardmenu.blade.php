
  <div class="col-md-3 col-sm-12 sidebar">

    <div class="inner dashboard-menu">


   <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                   
                       
                        @php
                              $profilestatus = 0;
 $profilestatus = App\StudentProfile::where('user_id',Auth::user()->id)->first();
                              @endphp
                              @if($profilestatus)
                          
                             <img id="image_preview_container" src="{{ url($profilestatus->student_photo) }}"
                        alt="preview image">
                       
                        @else
                         <img alt="" src="{{url('user.png')}}">

                              @endif

                  
                    
                  
                   
                </div>
                <div class="info">
                    <div class="title">
                        {{Auth::user()->name}}
                    </div>
                    <div class="desc">Registraion ID: <b>RHT-{{Auth::user()->id}}</b></div>
               
                </div>
                <div class="bottom">
                
                </div>
            </div>
    <div class="mini-submenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>
    <div class="list-group">
        <span href="#" class="list-group-item active">
           Dashboard
            
        </span>
                @php
        $applied = \App\StudentProfile::where('user_id',Auth::user()->id)->count();
        @endphp

        <a href="{{route('student.admission.submit')}}" class="list-group-item">
            <i class="fa fa-refresh"></i> Apply Admission
            
                  @if($applied)
                   <span class="badge badge-warning">
                    Applied
                     </span>
                     @else
                      <span class="badge badge-danger">
                    Pending
                     </span>

                  @endif
            
        </a>

       
      
        <a href="{{route('student.fees')}}" class="list-group-item">
            <i class="fa fa-inr"></i> Pay Fees
        </a>
          <a href="{{route('students.checkfees')}}" class="list-group-item">
            <i class="fa fa-search"></i> Check Fees / Payment History
        </a>
         <a href="http://rahateclasses.mstitute.com/test/build" class="list-group-item" target="_blank">
            <b><i class="fa fa-pencil-square-o" aria-hidden="true"></i></b>
 mStitute Student Login
        </a>
         <a href="#" class="list-group-item">
            <i class="fa fa-bell"></i> Notifications/Calender and Notes
        </a>
          <a href="#" class="list-group-item">
            <i class="fa fa-file-pdf-o"></i> Download Notes
        </a>
         
        <a href="{{route('home.student.logout')}}" class="list-group-item">
            <i class="fa fa-sign-out"></i> Log Out
        </a>
    </div>        



    </div>
    

  </div>