<!-- Start Header Middle -->
        <div class="container header-middle">
            <div class="row"> <span class="col-xs-6 col-sm-3"><a href="{{route('home.index')}}"><img src="{{asset('homeassets\images\rahatelogo.png')}}" class="img-responsive" alt="" style="width:120px;height:90px;"></a></span>
                <div class="col-xs-6 col-sm-3"></div>
                <div class="col-xs-6 col-sm-9">
                    <div class="contact clearfix">
                        <ul class="hidden-xs">
                            <li> <span>Email</span> <a href="mailto:krantirahate12@gmail.com">krantirahate12@gmail.com</a> </li>
                            <li> <span>Contact Us</span>+91-9545578282</li>
                        </ul>
                        @guest
                        <a href="{{route('home.student.login.post')}}" class="login">Login / Register <span class=""></span><i class="fa fa-lock"></i></a>
                        @else
                            @if(Auth::user()->is_admin)
                            <a href="/admin" class="login">{{Auth::user()->name}} <span class=""><i class="fa fa-user"></i></span></a>
                            @endif

                            @if(!Auth::user()->is_admin)
                            <a href="{{route('student.dashboard')}}" class="login">{{Auth::user()->name}} <span class=""><i class="fa fa-user"></i></span></a>

                            @endif
                            @if(Auth::check())
                            <a href="{{route('home.student.logout')}}" class="login">Logout<span class=""><i class="fa fa-sign-out"></i></span></a>
                            @endif


                        @endguest
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->