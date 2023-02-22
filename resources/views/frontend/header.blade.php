<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from iamubaidah.com/html/peredion/demo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jun 2022 07:50:34 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PerediOn - eSports Prediction HTML Template</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.html" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- fontawesome icon  -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

<!-- preloader begin -->
<div class="preloader">
    <img src="assets/img/preloader.gif" alt="">
    <span>PEREDION LOADING</span>
</div>
<!-- preloader end -->

<!-- bet modal begin -->
<div class="bet-modal-bg">
    <div class="bet-modal">
        <div class="bet-header">
            <span class="title">Predict a game</span>
            <button class="cls-btn"><i class="fas fa-times"></i></button>
        </div>
        <div class="bet-body">
            <div class="place-of-bet">
                <span class="place-of-bet-title">real madrid</span>
                <input class="place-of-bet-number" type="number" value="1" readonly>
            </div>
            <div class="bet-descr">
                <span class="team-name team-name-1st">america</span>
                <span class="img-ic"><img src="assets/img/vs-icon.png" alt=""></span>
                <span class="team-name team-name-2nd">iran</span>
                <div class="team-score">[<span class="team-first-score">1</span>:<span class="team-second-score">1</span>] 1X2 Live Prediction</div>
            </div>
            <div class="ctrl-buttons">
                <div class="butto-shadow">
                    <button class="ctrl-button-for-number minus-number">-</button>
                    <input type="number" value="1" max="99" min="1" class="number-of-stake" placeholder="stake">
                    <button class="ctrl-button-for-number plus-number">+</button>
                </div>
            </div>
            <div class="bet-total">
                <ul>
                    <li>
                        <span class="number-of-stake-title">stake :</span>
                        <input class="number-of-stake-count" type="number" value="1" readonly>
                    </li>
                    <li>
                        <span class="number-of-bet">Total Est. Returns :</span>
                        <span class="number-of-bet-count">82</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bet-footer">
            <button>Predict Now</button>
        </div>
    </div>
</div>
<!-- bet modal end -->

<!-- header begin -->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-6">
                    <div class="left-area">
                        <ul>
                            <li>
                                        <span class="icon">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                <span class="text">
                                            <span id="date"></span>
                                            <span id="month"></span>
                                            <span id="year"></span>
                                        </span>
                            </li>
                            <li>
                                        <span class="icon">
                                            <i class="far fa-clock"></i>
                                        </span>
                                <span class="text clocks">
                                            <span id="hours"></span>:<span id="minutes"></span>:<span id="seconds"></span>
                                        </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-6">
                    <div class="right-area">
                        <ul>
                            <li>
                                <select>
                                    <option>EN</option>
                                    <option>FR</option>
                                    <option>ES</option>
                                </select>
                            </li>
                            <li>
                                <a class="link" href="bet-slip.html">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="dolly" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-dolly fa-w-18 fa-fw fa-2x"><path fill="currentColor" d="M575.6 309.8l-5.1-15.2c-1.4-4.2-5.9-6.5-10.1-5.1L526 301.1 451.5 77.9c-2.7-8.1-8.4-14.7-16-18.5-7.7-3.8-16.3-4.4-24.4-1.7L176.3 136l-18-50.7C146.9 53.3 116.7 32 82.8 32H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h74.8c20.3 0 38.4 12.8 45.2 31.9l96.7 271.9c-23.3 17.2-37.2 46.5-31.4 78.9 5.6 31.3 30.4 57 61.5 63.5 51.7 10.7 97.2-28.4 97.2-78.2 0-13.1-3.4-25.2-9-36.1l227.5-76c4.2-1.4 6.5-5.9 5.1-10.1zM187 166.1l106.4-35.5 25 74.9c1.4 4.2 5.9 6.5 10.1 5.1l15.2-5.1c4.2-1.4 6.5-5.9 5.1-10.1l-25-74.9L421.2 88l74.5 223.3-174.4 58.1C307.6 358.7 290.7 352 272 352c-6.3 0-12.3.9-18.1 2.3L187 166.1zM272 480c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48z" class=""></path></svg>
                                    Prediction Slip
                                </a>
                            </li>
                            <li>
                                <a class="link" href="#">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-user-circle fa-w-16 fa-fw fa-2x"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm128 421.6c-35.9 26.5-80.1 42.4-128 42.4s-92.1-15.9-128-42.4V416c0-35.3 28.7-64 64-64 11.1 0 27.5 11.4 64 11.4 36.6 0 52.8-11.4 64-11.4 35.3 0 64 28.7 64 64v13.6zm30.6-27.5c-6.8-46.4-46.3-82.1-94.6-82.1-20.5 0-30.4 11.4-64 11.4S204.6 320 184 320c-48.3 0-87.8 35.7-94.6 82.1C53.9 363.6 32 312.4 32 256c0-119.1 96.9-216 216-216s216 96.9 216 216c0 56.4-21.9 107.6-57.4 146.1zM248 120c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88zm0 144c-30.9 0-56-25.1-56-56s25.1-56 56-56 56 25.1 56 56-25.1 56-56 56z" class=""></path></svg>
                                    Hi, John Doe
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="navbar" class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-6 d-xl-block d-lg-block d-flex align-items-center">
                            <div class="logo">
                                <a href="{{url('/')}}">
                                    <img src="assets/img/logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-6 d-xl-none d-lg-none d-block">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <div class="mainmenu">
                        <nav class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('schedule')}}">Schedule</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('standings')}}">Standings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('blog')}}">Updates</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('result')}}">Result</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Fixture</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header end -->
