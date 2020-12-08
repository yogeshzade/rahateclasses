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
                            <li><a href="#">Download Broucher</a></li>
                            <li><a href="{{route('home.course.index')}}">All Courses</a></li>
                              <li><a href="{{route('home.index')}}#faculties">Our Faculties</a></li>
                           
                        </ul>
                    </div>
                    <div class="foot-nav">
                        <h3>Contact Us</h3>
                        <ul>
                           
                            <li><a href="#">+91-9130622590</a></li>
                            <li><a href="#">+91-9561302469</a></li>
                            <li><a href="#">+91-954557828</a></li>
                            <li><a href="#">39, Old Subhedar Lay Out N/o,</a></li>
                            <li><a href="#">Ayodhya Nagar,Nagpur-24</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-logo hidden-xs"><a href="{{route('home.index')}}"><img src="{{ asset('images\rahatelogo.png')}}" class="img-responsive" alt=""></a></div>
                    <p>2020 <span>Rahate Classes</span>. Deveopled By <a href="http://github.com/heyshantu13">Shantanu K.</a> </p>
                   
                </div>
            </div>
        </div>
        <!-- End Footer Top -->

        @include('home.whatsapp');
        
    </footer>
