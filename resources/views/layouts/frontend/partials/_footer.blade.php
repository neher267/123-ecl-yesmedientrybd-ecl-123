<!-- Footer Widget Area Start -->
<div class="footer-widget-area">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-4">
                <div class="single-footer-widget">
                    <div class="footer-logo" style="margin-bottom: 0px;">
                        <a href="{{ url('/') }}"><img style="height: 75px; position: relative; top: -15px;" src="{{ asset('public/frontend/img/logo/footer.png') }}" alt=""></a>
                    </div>
                    <p style="position: relative; top: -5px;">
                        <span class="bold">Medientry (Bangladesh)</span> assist students in getting admission at the Bangladeshi medical colleges of their choice. We processes applications for maximum medical colleges in Bangladesh as a One Stop Service and to guarantee that only those colleges are applied to that are in the best interest of the student. 
                    </p>
                    <div class="social-icons">
                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                        <!-- <a href="#"><i class="zmdi zmdi-rss"></i></a>
                        <a href="#"><i class="zmdi zmdi-instagram"></i></a> -->
                    </div>
                </div>
            </div>

            <div class="col-md-3 hidden-sm">
                <div class="single-footer-widget" style="padding-left: 25px;">
                    <h3>Useful Links</h3>
                    <ul class="footer-list">
                        <li><a href="{{ url('about') }}">About Us</a></li>                      
                        <li><a href="{{ url('courses') }}">Colleges We Represent</a></li>
                        <li><a href="{{ url('mbbs-in-bd') }}">MBBS in Bangladesh</a></li>
                        <li><a href="{{ url('what-we-do') }}">What We Do</a></li>
                        <li><a href="{{ url('why-choose-us') }}">Why Choose Us</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-md-3 col-sm-4">
                <div class="single-footer-widget">
                    <h3 class="text-center">QR Code</h3>

                    <div class="footer-logo">
                        <img src="{{ asset('public/frontend/img/qrcode.png') }}">
                    </div>  
                </div>
            </div>

            <div class="col-md-3 col-sm-4">
                <div class="single-footer-widget">
                    <h3 class="text-center" style="padding-right: 44px;">Contact</h3>
                    <span style="margin-top: -7px;">
                        <i class="fa fa-map-marker"></i>
                        <span>House-278(2nd Floor), Road-19</span><br/>
                        <span style="margin-left: 35px">New DOHS Mohakhali,</span><br/>
                        <span style="margin-left: 35px">Dhaka-1212, Bangladesh.</span>
                    </span>

                    <span style="margin-top: -7px;"><i class="fa fa-whatsapp"></i>                        
                        <a 
                            href="whatsapp://send?text=Hello Medientry!&phone=+8801713456910" 
                            style="color: #fff">
                            {{ config('plc.w-app') }}
                        </a>
                    </span>

                    <span style="margin-top: -7px;"><i class="fa fa-phone"></i>
                        {{ config('plc.mobile') }}
                    </span>

                    <span style="margin-top: -7px;"><i class="fa fa-skype"></i>                        
                        <a 
                            href="skype:-medientry-?chat" 
                            style="color: #fff">
                            {{ config('plc.skype') }}
                        </a>
                    </span>

                    <span style="margin-top: -7px;"><i class="zmdi zmdi-email"></i>
                        
                        <a 
                            href="mailto:{{config('plc.email')}}" 
                            style="color: #fff">
                            {{ config('plc.email') }}
                        </a>
                    </span>
                                      
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Footer Widget Area-->
<!--Footer Area Start-->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7">
                <span>Copyright &copy; {{ config('app.name') }} {{ date('Y') }}. All right reserved. Created by <a href="http://eclsystem.com/">ECL Systems Ltd</a></span>
            </div>
            <div class="col-md-6 col-sm-5">
                <div class="column-right">
                    <span><a href="{{url('privacy-policy')}}">Privacy Policy</a></span>
                    <span style="font-weight: bold;"><a href="https://sg3plcpnl0074.prod.sin3.secureserver.net:2096/" target="_blank">| Web Mail</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End of Footer Area