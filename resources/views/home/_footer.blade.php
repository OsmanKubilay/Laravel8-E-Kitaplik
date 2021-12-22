<!-- ======= Footer ======= -->
@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>{{$setting->company}}</h3>
                        <p>
                            {{$setting->adress}} <br>
                            <strong>Phone:</strong> {{$setting->phone}}<br>
                            <strong>Email:</strong> {{$setting->email}}<br>
                        </p>
                        <div class="social-links mt-3">
                            @if($setting->twitter!=null)<a href="{{$setting->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>@endif
                            @if($setting->facebook!=null)<a href="{{$setting->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>@endif
                            @if($setting->instagram!=null)<a href="{{$setting->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>@endif
                            @if($setting->youtube!=null)<a href="{{$setting->youtube}}" class="youtube"><i class="bx bxl-youtube"></i></a>@endif
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright . All Rights Reserved | {{$setting->company}}
        </div>

    </div>
</footer><!-- End Footer -->
