<ul class="metismenu" id="menu-bar">
    <li class="menu-title">Navigation</li>

    <li>
        <a href="{{route('home')}}">
            <i data-feather="home"></i>
        <!--     <span class="badge badge-success float-right">1</span> -->
            <span> Dashboard </span>
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
            <i data-feather="users"></i>
            <span>Students </span>
            <span class="menu-arrow"></span>
        </a>

        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('admission.index')}}">Add New Admission</a>
            </li>
            <li>
                <a href="{{route('admission.manage')}}">Manage Students</a>
            </li>
           
        </ul>
    </li>
    <li>
        <a href="javascript: void(0);">
            <i data-feather="briefcase"></i>
            <span> Payments </span>
            <span class="menu-arrow"></span>
        </a>
    
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="/apps/project/list">Check Student Fees</a>
            </li>
            <li>
                <a href="/apps/project/detail">Pay Student Fees</a>
            </li>
              <li>
                <a href="/apps/project/list">Show Payements</a>
            </li>
              <!-- <li>
                <a href="/apps/project/list">Print Receipt</a>
            </li> -->
        </ul>
    </li>
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
        </ul>
    </li>
    <li class="menu-title">Employees</li>
    <li>
        <a href="javascript: void(0);">
            <i data-feather="file-text"></i>
            <span>Employees </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('employee.add')}}">Add Employee</a>
            </li>
            <li>
                <a href="{{route('employee.index')}}">Manage Employee</a>
            </li>
           
            <li>
                <a href="{{route('employee.index')}}">Make Salary</a>
            </li>
        </ul>
    </li>


    <li class="menu-title">Website</li>

    <li>
        <a href="javascript: void(0);">
            <i data-feather="package"></i>
            <span>Website Configration</span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="/ui/bootstrap">Manage Slider</a>
            </li>
           
        </ul>
    </li>

  

</ul>
