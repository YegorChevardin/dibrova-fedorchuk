<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Dibrova-Fedorchuk</h3>
                    <p>
                        Yaltenskaya 5<br>
                        Hikopol, Dnipropetrovska oblyast<br>
                        Ukraine <br><br>
                        <strong>Phone:</strong> +380999425174<br>
                    </p>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join our next party</h4>
                    <p>Type your email and send a request. We will answer on your feedback!</p>
                    <form action="{{ route('subscribe') }}" method="post">
                        @csrf
                        <input type="email" name="email"><input type="submit" name="Submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-md-flex py-4">
        <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
                &copy; Copyright <span id="copyright_year"></span> <strong><span>Dibrova-Fedorchuk</span></strong>. All Rights Reserved
            </div>
        </div>
    </div>
</footer><!-- End Footer -->
