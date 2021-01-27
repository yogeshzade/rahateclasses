  <footer class="footer">
        <!-- Start Footer Top -->
        <div class="container">
            <div class="row row1">
                <div class="col-sm-9 clearfix">
                    <div class="foot-nav" style="margin-right: 5px;">
                        <h3>About US</h3>
                        <ul>
                            <li style="color: #fff;">Rahate Coaching Classes is a premier Coaching institution for students and best coaching in nagpur for IIT's and Medical Prepration with Highest success result.</li>
                           
                        </ul>
                    </div>
                  
                    <div class="foot-nav">
                        <h3>Useful Links</h3>
                        <ul>
                            <li><a href="{{route('career.index')}}">Career</a></li>
                            <li><a href="{{url('broucher.pdf')}}">Download Broucher</a></li>
                            <li><a href="{{route('home.course.index')}}">All Courses</a></li>
                              <li><a href="{{route('home.faculties')}}">Our Faculties</a></li>
                           
                        </ul>
                    </div>
                    <div class="foot-nav">
                        <h3>Contact Us</h3>
                        <ul>
                           
                            <li><a href="#">+91-9130622590</a></li>
                            <li><a href="#">+91-9561302469</a></li>
                            <li><a href="#">+91-954557828</a></li>
                            <li><a href="https://www.google.com/maps?ll=21.111054,79.10189&z=15&t=m&hl=en-US&gl=US&mapclient=embed&q=Rahate+Classes">39, Old Subhedar Lay Out N/o,</a></li>
                            <li><a href="https://www.google.com/maps?ll=21.111054,79.10189&z=15&t=m&hl=en-US&gl=US&mapclient=embed&q=Rahate+Classes">Ayodhya Nagar,Nagpur-24</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-logo hidden-xs"><a href="{{route('home.index')}}"><img src="{{ asset('images\rahatelogo.png')}}" class="img-responsive" alt=""></a></div>
                    <p><b>2020-2021</b> <span>Rahate Classes</span>. Deveopled By <a href="http://github.com/heyshantu13" style="color:#fff">Shantanu Kulkarni</a>
                    V 1.5.0
                    </p>
                   
                </div>
            </div>
        </div>
        <!-- End Footer Top -->

        @include('home.whatsapp');
        
    </footer>
