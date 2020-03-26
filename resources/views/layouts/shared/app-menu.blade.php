<ul class="metismenu" id="menu-bar">
    <li class="menu-title">Navigation</li>

    <li>
        <a href="/">
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
            <span>Admission </span>
            <span class="menu-arrow"></span>
        </a>

        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('admission.index')}}">Add New Admission</a>
            </li>
            <li>
                <a href="{{route('admission.manage')}}">Manage Admissions</a>
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
                <a href="/apps/project/list">List</a>
            </li>
            <li>
                <a href="/apps/project/detail">Detail</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript: void(0);">
            <i data-feather="bookmark"></i>
            <span> Tasks </span>
            <span class="menu-arrow"></span>
        </a>
    
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="/apps/task/list">List</a>
            </li>
            <li>
                <a href="/apps/task/board">Kanban Board</a>
            </li>
        </ul>
    </li>
    <li class="menu-title">Teachers</li>
    <li>
        <a href="javascript: void(0);">
            <i data-feather="file-text"></i>
            <span>Teachers </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="/pages/starter">Manage Teacher</a>
            </li>
            <li>
                <a href="/pages/profile">Calculate Salary</a>
            </li>
           
            <li>
                <a href="/errors/500">Error 500</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="javascript: void(0);">
            <i data-feather="layout"></i>
            <span> Layouts </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="/layout-example/horizontal">Horizontal Nav</a>
            </li>
            <li>
                <a href="/layout-example/rtl">RTL</a>
            </li>
            <li>
                <a href="/layout-example//dark">Dark</a>
            </li>
            <li>
                <a href="/layout-example/scrollable">Scrollable</a>
            </li>
            <li>
                <a href="/layout-example/boxed">Boxed</a>
            </li>
            <li>
                <a href="/layout-example/loader">With Pre-loader</a>
            </li>
            <li>
                <a href="/layout-example/dark-sidebar">Dark Side Nav</a>
            </li>
            <li>
                <a href="/layout-example/condensed-sidebar">Condensed Nav</a>
            </li>
        </ul>
    </li>

    <li class="menu-title">Components</li>

    <li>
        <a href="javascript: void(0);">
            <i data-feather="package"></i>
            <span> UI Elements </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="/ui/bootstrap">Bootstrap UI</a>
            </li>
            <li>
                <a href="javascript: void(0);" aria-expanded="false">Icons
                    <span class="menu-arrow"></span>
                </a>
                <ul class="nav-third-level" aria-expanded="false">
                    <li>
                        <a href="/ui/icons-feather">Feather Icons</a>
                    </li>
                    <li>
                        <a href="/ui/icons-unicons">Unicons Icons</a>
                    </li>
                </ul>
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
