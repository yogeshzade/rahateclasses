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
                    

                         <li> <a href="{{route('student.register')}}">Apply Online</a></li>
                    
                      
                        <li> <a href="{{route('home.course.index')}}">Courses</a></li>
                        <li class="dropdown"> <a data-toggle="dropdown" href="{{route('student.fees')}}">Pay Fees <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                               
                                <li><a href="{{route('student.fees')}}">Pay Fees Online</a></li>
                                
                                
                            </ul>
                        </li>
                         
                        
                       
                        

                         <li class="dropdown"> <a data-toggle="dropdown" href="">Help <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('howtoapply.index')}}">How To Apply</a></li>
                                  <li><a href=""></a></li>
                            </ul>
                        </li>

                        <li class="dropdown"> <a data-toggle="dropdown" href="">Pre Foundation Course <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('howtoapply.index')}}">#</a></li>
                                  <li><a href=""></a></li>
                            </ul>
                        </li>

                         <li class="dropdown"> <a data-toggle="dropdown" href="">IIT<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Quick Revision</a></li>
                                  <li><a href="">IIT JEE Videos Lectures</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"> <a data-toggle="dropdown" href="">Solutions<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="">H.C Verma</a></li>
                                  <li><a href="">I.E Irodov</a></li>
                                  <li><a href="">S.S Krotov</a></li>
                            </ul>
                        </li>

                         <!-- <li> <a href="#">Notes</a></li> -->
                        <li> <a href="/career">Career</a></li>
                           <li> <a href="{{route('home.faculties')}}#ulfaculties">Faculties</a></li>
                            <li> <a href="/contact">Contact Us</a></li>

                         
                    </ul>
                </div>
            </div>
        </nav>