<ul class="metismenu" id="menu-bar">
    <li class="menu-title">Navigation</li>

    <li>
        <a href="{{route('home')}}">
            <i data-feather="home"></i>
        <!--     <span class="badge badge-success float-right">1</span> -->
            <span> Dashboard </span>
        </a>
         <a href="{{route('home.student.logout')}}">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out icon-dual icon-xs mr-2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
        <!--     <span class="badge badge-success float-right">1</span> -->
            <span> Logout </span>
        </a>
    </li>
    <li class="menu-title">Students</li>
  <!--   <li>
        <a href="/apps/calendar">
            <i data-feather="calendar"></i>
            <span> </span>
        </a>
    </li> -->
      <li>
        <a href="javascript: void(0);">
            <i data-feather="bookmark"></i>
            <span> Courses </span>
            <span class="menu-arrow"></span>
        </a>
    
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('course.index')}}">All Courses</a>
            </li>
            <li>
                <a href="{{route('course.create')}}">Add New Course</a>
            </li>
             <li>
                <a href="{{route('installment.index')}}">Manage Installment</a>
            </li>
        </ul>
    </li>


      <li>
        <a href="javascript: void(0);">
            <i data-feather="briefcase"></i>
            <span>Manage Payments </span>
            <span class="menu-arrow"></span>
        </a>
    
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('pending.payments')}}">Pending Offline Payments</a>
            </li>
            <li>
                <a href="/">Check Student Fees</a>
            </li>
            <li>
                <a href="/">Pay Student Fees</a>
            </li>
            
              <!-- <li>
                <a href="/apps/project/list">Print Receipt</a>
            </li> -->
        </ul>
    </li>


    <li>
        <a href="javascript: void(0);">
            <i data-feather="users"></i>
            <span>Students </span>
            <span class="menu-arrow"></span>
        </a>

        

        <ul class="nav-second-level" aria-expanded="false">
            
            <li>
                <a href="{{route('admission.index')}}">Manage Students</a>
            </li>
            <li>
                <a href="{{route('calender.index')}}">Exam Updates</a>
            </li>
             <li>
                <a href="{{route('file.index')}}">Upload Notes</a>
            </li>
           
        </ul>
    </li>
  
  
    


    <li class="menu-title">Website</li>

    <li>
        <a href="javascript: void(0);">
            <i data-feather="package"></i>
            <span>Configration</span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('slider.index')}}">Sliders <span class="badge badge-success">@php echo \App\Slider::where('status',1)->count();@endphp</span> </a>
            </li>

            <li>
                <a href="{{route('popup.create')}}">Popups <span class="badge badge-success">@php echo \App\Popup::where('status',1)->count();@endphp</span></a>
            </li>
             <li>
                <a href="{{route('testimonials.index')}}">Toppers <span class="badge badge-success"></span></a>
            </li>
            <li>
            <a href="{{route('inquiry.index')}}">Inquiry Box <span class="badge badge-danger">@php echo \App\Inquiry::where('status',1)->count();@endphp</span></a>
            </li>

            <li>
            <a href="{{route('career.index.admin')}}">Jobs</a>
            </li>

              <li>
            <a href="{{route('applied.index')}}">Vacancy Applied List</a>
            </li>

            <li>
                <a href="{{route('updates.index')}}">Website Notifications</a>
            </li>
           
        </ul>
    </li>

    

  

  

</ul>
