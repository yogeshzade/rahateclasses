<!-- Start Header Middle -->
        <div class="container header-middle">
            <div class="row"> <span class="col-xs-6 col-sm-3"><a href="index.html"><img src="{{asset('homeassets\images\rahatelogo.png')}}" class="img-responsive" alt=""></a></span>
                <div class="col-xs-6 col-sm-3"></div>
                <div class="col-xs-6 col-sm-9">
                    <div class="contact clearfix">
                        <ul class="hidden-xs">
                            <li> <span>Email</span> <a href="mailto:info@rahateclasses.in">info@rahateclasses.in</a> </li>
                            <li> <span>Contact Us</span>+91-9130622590</li>
                        </ul>
                        @guest
                        <a href="{{route('home.student.login.post')}}" class="login">Student Login <span class=""></span><i class="fa fa-lock"></i></a>
                        @else
                         <a href="" class="login">{{Auth::user()->name}} <span class=""><i class="fa fa-user"></i></span></a>


                        @endguest
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->