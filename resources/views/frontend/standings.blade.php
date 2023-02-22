@include('frontend.header')
<!-- standing begin -->
<div class="standing">
    <div class="container">
        <div class="filter-menu">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="form-group">
                        <select class="form-control">
                            <option>Last 7 days</option>
                            <option>Last 24 hours</option>
                            <option>Last 12 hours</option>
                            <option>Last 6 hours</option>
                            <option>Last 1 hours</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="form-group">
                        <select class="form-control">
                            <option>All Sports</option>
                            <option>Football</option>
                            <option>Ice Hocky</option>
                            <option>Badminton</option>
                            <option>Baseball</option>
                            <option>Basketball</option>
                            <option>Tennis</option>
                            <option>Cycling</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="form-group">
                        <select class="form-control">
                            <option>Bangla Cricket League</option>
                            <option>Indian Football Federation</option>
                            <option>English premier league</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="standing-list-cover">
            <div class="standing-team-list">
                <h4 class="result-title">Standing</h4>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Pos</th>
                        <th scope="col">Team</th>
                        <th scope="col">w</th>
                        <th scope="col">l</th>
                        <th scope="col">t</th>
                        <th scope="col">pts</th>
                        <th scope="col">diff</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                                        <span class="single-team">
                                            <span class="logo">
                                                <img src="assets/img/team-1.png" alt="">
                                            </span>
                                            <span class="text">
                                                Khulna Tigers
                                            </span>
                                        </span>
                        </td>
                        <td>103</td>
                        <td>52</td>
                        <td>1</td>
                        <td>425</td>
                        <td><span class="diff">+28</span></td>
                        <td>
                            <button>
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>
                                        <span class="single-team">
                                            <span class="logo">
                                                <img src="assets/img/team-2.png" alt="">
                                            </span>
                                            <span class="text">
                                                Dhaka Platoon
                                            </span>
                                        </span>
                        </td>
                        <td>103</td>
                        <td>52</td>
                        <td>1</td>
                        <td>425</td>
                        <td><span class="diff">+28</span></td>
                        <td>
                            <button>
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>
                                        <span class="single-team">
                                            <span class="logo">
                                                <img src="assets/img/team-3.png" alt="">
                                            </span>
                                            <span class="text">
                                                Sylhet thunder
                                            </span>
                                        </span>
                        </td>
                        <td>103</td>
                        <td>52</td>
                        <td>1</td>
                        <td>425</td>
                        <td><span class="diff">+28</span></td>
                        <td>
                            <button>
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>
                                        <span class="single-team">
                                            <span class="logo">
                                                <img src="assets/img/team-4.png" alt="">
                                            </span>
                                            <span class="text">
                                                Rajshahi Royals
                                            </span>
                                        </span>
                        </td>
                        <td>103</td>
                        <td>52</td>
                        <td>1</td>
                        <td>425</td>
                        <td><span class="diff">+28</span></td>
                        <td>
                            <button>
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>
                                        <span class="single-team">
                                            <span class="logo">
                                                <img src="assets/img/team-5.png" alt="">
                                            </span>
                                            <span class="text">
                                                Rangpur SIxers
                                            </span>
                                        </span>
                        </td>
                        <td>103</td>
                        <td>52</td>
                        <td>1</td>
                        <td>425</td>
                        <td><span class="diff">+28</span></td>
                        <td>
                            <button>
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <span class="text-special">
                    <b>Glossary Terms:</b>  <b class="color-sec">W</b> = Wins, <b class="color-sec">T</b> = Ties, <b class="color-sec">Diff</b> = Point differental, <b class="color-sec">L</b> = Loses, <b class="color-sec">PTS</b> = Winning Percentage
                </span>
    </div>
</div>
<!-- standing end -->

<!-- footer begin -->
<div class="footer" id="contact">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-4 col-lg-5 col-md-10">
                <div class="about-widget">
                    <a class="logo" href="index.html">
                        <img src="assets/img/logo.png" alt="">
                    </a>
                    <p>PerediOn offers you all the best online prediction from every corner of the planet with thousands of online prediction markets.</p>
                    <div class="social">
                        <ul>
                            <li>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="support">
                        <ul>
                            <li>
                                        <span class="icon">
                                            <img src="assets/img/svg/email.svg" alt="">
                                        </span>
                                <span class="text">
                                            <span class="title">Mail Us</span>
                                            <span class="descr">don't@reply.com</span>
                                        </span>
                            </li>
                            <li>
                                        <span class="icon">
                                            <img src="assets/img/svg/phone-call.svg" alt="">
                                        </span>
                                <span class="text">
                                            <span class="title">Get In Touch</span>
                                            <span class="descr">+88 015 00 00 00</span>
                                        </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3">
                <div class="useful-links">
                    <h3>Useful links</h3>
                    <ul>
                        <li>
                            <a href="#">IN-PLAY</a>
                        </li>
                        <li>
                            <a href="#">PROMOTIONS</a>
                        </li>
                        <li>
                            <a href="#">STATICS</a>
                        </li>
                        <li>
                            <a href="#">RESULTS</a>
                        </li>
                        <li>
                            <a href="#">Predict now</a>
                        </li>
                        <li>
                            <a href="#">GAME RESULTS</a>
                        </li>
                        <li>
                            <a href="#">STANDINGS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3">
                <div class="useful-links">
                    <h3>Connect With Us</h3>
                    <ul>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Blog Details</a>
                        </li>
                        <li>
                            <a href="#">Service</a>
                        </li>
                        <li>
                            <a href="#">Contact us</a>
                        </li>
                        <li>
                            <a href="#">TEAM OVERVIEW</a>
                        </li>
                        <li>
                            <a href="#">SCHEDULE</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3">
                <div class="useful-links">
                    <h3>All Sports</h3>
                    <ul>
                        <li>
                            <a href="#">FOOTBALL</a>
                        </li>
                        <li>
                            <a href="#">TENNIS</a>
                        </li>
                        <li>
                            <a href="#">BASKETBALL</a>
                        </li>
                        <li>
                            <a href="#">ICE HOCKEY</a>
                        </li>
                        <li>
                            <a href="#">VOLLEYBALL</a>
                        </li>
                        <li>
                            <a href="#">BADMINTON</a>
                        </li>
                        <li>
                            <a href="#">BASEBALL</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="payment-method">
                            <h6 class="payment-method-title">
                                Payment methods are We accept
                            </h6>
                            <div class="all-method">
                                <div class="single-method">
                                    <img src="assets/img/brand-1.png" alt="">
                                </div>
                                <div class="single-method">
                                    <img src="assets/img/brand-2.png" alt="">
                                </div>
                                <div class="single-method">
                                    <img src="assets/img/brand-3.png" alt="">
                                </div>
                                <div class="single-method">
                                    <img src="assets/img/brand-4.png" alt="">
                                </div>
                                <div class="single-method">
                                    <img src="assets/img/brand-5.png" alt="">
                                </div>

                                <div class="single-method">
                                    <img src="assets/img/brand-5.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer end -->

<!-- notes begin -->
<div class="notes">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-10">
                PerediOn is a sports prediction html template, published by autworks throgh envato marketplace. You can use this template on any kind of sports prediction in the world. as like football, baseball, soccer, cricket etc. all rights reserved by autworks © 2020.
            </div>
        </div>
    </div>
</div>
<!-- notes end -->

<!-- copyright footer begin -->
<div class="copyright-footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-5 col-md-6 col-lg-6 d-lg-flex d-lg-flex d-block align-items-center">
                <p class="copyright-text">
                    <a href="#">PerediOn</a> © 2020. PRIVACY POLICY
                </p>
            </div>
            <div class="text-right col-md-6 col-xl-4 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
                <p class="copyright-text">
                    Powerd By <a href="https://themeforest.net/user/autworks/portfolio">Autworks ( Envato Author )</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- copyright footer end -->

<!-- jquery -->
<!-- <script src="assets/js/jquery.js"></script> -->
<script src="assets/js/jquery-3.4.1.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- owl carousel -->
<script src="assets/js/owl.carousel.js"></script>
<!-- magnific popup -->
<script src="assets/js/jquery.magnific-popup.js"></script>
<!-- filterizr js -->
<script src="assets/js/jquery.filterizr.min.js"></script>
<!-- wow js-->
<script src="assets/js/wow.min.js"></script>
<!-- clock js -->
<script src="assets/js/clock.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<!-- main -->
<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from iamubaidah.com/html/peredion/demo/standing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jun 2022 07:51:44 GMT -->
</html>
