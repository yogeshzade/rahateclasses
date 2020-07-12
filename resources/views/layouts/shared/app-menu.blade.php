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
                <a href="{{route('course.manage')}}">All Courses</a>
            </li>
            <li>
                <a href="{{route('course.index')}}">Add New Course</a>
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
            <li>
                  <a href="/ui/bootstrap">Manage Slider</a>
            </li>
            <li>
                <a href="/ui/widgets">Widgets</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="javascript: void(0);" aria-expanded="false">
            <i data-feather="file-text"></i>
            <span> Forms </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="/forms/basic">Basic Elements</a>
            </li>
            <li>
                <a href="/forms/advanced">Advanced</a>
            </li>
            <li>
                <a href="/forms/validation">Validation</a>
            </li>
            <li>
                <a href="/forms/wizard">Wizard</a>
            </li>
            <li>
                <a href="/forms/editor">Editor</a>
            </li>
            <li>
                <a href="/forms/fileupload">File Uploads</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="/charts" aria-expanded="false">
            <i data-feather="pie-chart"></i>
            <span> Charts </span>
        </a>
    </li>

    <li>
        <a href="javascript: void(0);" aria-expanded="false">
            <i data-feather="grid"></i>
            <span> Tables </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="/table/basic">Basic</a>
            </li>
            <li>
                <a href="/table/datatables">Advanced</a>
            </li>
        </ul>
    </li>
</ul>
