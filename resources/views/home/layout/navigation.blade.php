 <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <form class="navbar-form navbar-right">
                        {{-- <input type="text" placeholder="Search Now" class="form-control">
                        <button class="search-btn"><span class="icon-search-icon"></span></button> --}}
                    </form>
                    <ul class="nav navbar-nav">

                    <li> <a href="{{route('home.index')}}">Home</a></li>
                     <li> <a href="{{route('home.contact')}}">About Us</a></li>

                          <li class="dropdown"> <a data-toggle="dropdown" href="{{route('home.course.index')}}">Courses <i class="fa fa-angle-down" aria-hidden="true"></i></a>

                            <ul class="dropdown-menu"> 
                              <!-- Dropdown Start -->
                               <li class="dropdown-submenu">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Pre Foundation </span><span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">7th Std</a></li>
                                    <li><a href="#">8th Std</a></li>
                                    <li><a href="#">9th Std</a></li>
                                    <li><a href="#">10th Std</a></li>
                                </ul>
                               </li>

                                <li class="dropdown-submenu">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Pre Foundation </span><span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">7th Std</a></li>
                                    <li><a href="#">8th Std</a></li>
                                    <li><a href="#">9th Std</a></li>
                                    <li><a href="#">10th Std</a></li>
                                </ul>
                               </li>


                              <!-- Dropdown End -->
                             </ul> 
                        </li>

                         <li class="dropdown"> <a data-toggle="dropdown" href="#">Resources <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Engineering Exams</a></li>
                                <li><a href="#">Medical Exams</a></li>
                                <li><a href="#">Other Exams</a></li>
                            </ul>
                        </li>

                         <li class="dropdown"> <a data-toggle="dropdown" href="#">Admission <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('howtoapply.index')}}">How To Apply</a></li>
                                <li><a href="{{route('student.register')}}">Apply Online</a></li>
                                <li><a href="{{route('home.contact')}}">Inquiry</a></li>
                                 <li><a href="{{route('student.fees')}}">Pay Fees Online</a></li>
                            </ul>
                        </li>

                         
                    </ul>
                </div>
            </div>
        </nav>