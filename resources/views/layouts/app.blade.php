
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Job Hunt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="CreativeLayers">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css" />
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/chosen.css" />
    <link rel="stylesheet" type="text/css" href="css/colors/colors.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

</head>
<body>

<div class="page-loading">
    <img src="images/loader.gif" alt="" />
    <span>Cargando, espere por favor...</span>
</div>


<div class="theme-layout" id="scrollup">

    @include('layouts.partials.navigations.' . \App\User::navegacion())



    @yield('content')
    <footer>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 column">
                        <div class="widget">
                            <div class="about_widget">
                                <div class="logo">
                                    <a href="index.html" title=""><img src="images/resource/logo.png" alt="" /></a>
                                </div>
                                <span>Collin Street West, Victor 8007, Australia.</span>
                                <span>+1 246-345-0695</span>
                                <span><a href="../../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="dbb2b5bdb49bb1b4b9b3aeb5aff5b8b4b6">[email&#160;protected]</a></span>
                                <div class="social">
                                    <a href="login.html#" title=""><i class="fa fa-facebook"></i></a>
                                    <a href="login.html#" title=""><i class="fa fa-twitter"></i></a>
                                    <a href="login.html#" title=""><i class="fa fa-linkedin"></i></a>
                                    <a href="login.html#" title=""><i class="fa fa-pinterest"></i></a>
                                    <a href="login.html#" title=""><i class="fa fa-behance"></i></a>
                                </div>
                            </div><!-- About Widget -->
                        </div>
                    </div>
                    <div class="col-lg-4 column">
                        <div class="widget">
                            <h3 class="footer-title">Frequently Asked Questions</h3>
                            <div class="link_widgets">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="login.html#" title="">Privacy & Seurty </a>
                                        <a href="login.html#" title="">Terms of Serice</a>
                                        <a href="login.html#" title="">Communications </a>
                                        <a href="login.html#" title="">Referral Terms </a>
                                        <a href="login.html#" title="">Lending Licnses </a>
                                        <a href="login.html#" title="">Disclaimers </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="login.html#" title="">Support </a>
                                        <a href="login.html#" title="">How It Works </a>
                                        <a href="login.html#" title="">For Employers </a>
                                        <a href="login.html#" title="">Underwriting </a>
                                        <a href="login.html#" title="">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 column">
                        <div class="widget">
                            <h3 class="footer-title">Find Jobs</h3>
                            <div class="link_widgets">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <a href="login.html#" title="">US Jobs</a>
                                        <a href="login.html#" title="">Canada Jobs</a>
                                        <a href="login.html#" title="">UK Jobs</a>
                                        <a href="login.html#" title="">Emplois en Fnce</a>
                                        <a href="login.html#" title="">Jobs in Deuts</a>
                                        <a href="login.html#" title="">Vacatures China</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 column">
                        <div class="widget">
                            <div class="download_widget">
                                <a href="login.html#" title=""><img src="images/resource/dw1.png" alt="" /></a>
                                <a href="login.html#" title=""><img src="images/resource/dw2.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-line">
            <span>© 2018 Jobhunt All rights reserved. Design by Creative Layers</span>
            <a href="login.html#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
        </div>
    </footer>

</div>



<div class="account-popup-area signup-popup-box" >
    <div class="account-popup">
        <span class="close-popup"><i class="la la-close"></i></span>
        <h3>Sign Up</h3>
        <div class="select-user">
            <span>Candidate</span>
            <span>Employer</span>
        </div>
        <form>
            <div class="cfield">
                <input type="text" placeholder="Username" />
                <i class="la la-user"></i>
            </div>
            <div class="cfield">
                <input type="password" placeholder="********" />
                <i class="la la-key"></i>
            </div>
            <div class="cfield">
                <input type="text" placeholder="Email" />
                <i class="la la-envelope-o"></i>
            </div>
            <div class="dropdown-field">
                <select data-placeholder="Please Select Specialism" class="chosen">
                    <option>Web Development</option>
                    <option>Web Designing</option>
                    <option>Art & Culture</option>
                    <option>Reading & Writing</option>
                </select>
            </div>
            <div class="cfield">
                <input type="text" placeholder="Phone Number" />
                <i class="la la-phone"></i>
            </div>
            <button type="submit">Signup</button>
        </form>
        <div class="extra-login">
            <span>Or</span>
            <div class="login-social">
                <a class="fb-login" href="login.html#" title=""><i class="fa fa-facebook"></i></a>
                <a class="tw-login" href="login.html#" title=""><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div><!-- SIGNUP POPUP -->


<div class="account-popup-area registro-popup-box" >
    <div class="account-popup">
        <span class="close-popup"><i class="la la-close"></i></span>
        <h3>Registro para Empresas</h3>
        <form>
            <div class="cfield">
                <input type="text" placeholder="Email" />
                <i class="la la-envelope-o"></i>
            </div>
            <div class="cfield">
                <input type="password" placeholder="********" />
                <i class="la la-key"></i>
            </div>
            <div class="cfield">
                <input type="password" placeholder="********" />
                <i class="la la-key"></i>
            </div>
            <div class="cfield">
                <input type="text" placeholder="Email" />
                <i class="la la-envelope-o"></i>
            </div>
            <div class="dropdown-field">
                <select data-placeholder="Please Select Specialism" class="chosen">
                    <option>_SELECCIONAR</option>
                    <option>RUC</option>
                    <option>DNI</option>
                </select>
            </div>
            <div class="cfield">
                <input type="text" placeholder="Phone Number" />
                <i class="la la-phone"></i>
            </div>
            <button type="submit">Signup</button>
        </form>
        <div class="extra-login">
            <span>Or</span>
            <div class="login-social">
                <a class="fb-login" href="login.html#" title=""><i class="fa fa-facebook"></i></a>
                <a class="tw-login" href="login.html#" title=""><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div><!-- Registro -->

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/modernizr.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/wow.min.js" type="text/javascript"></script>
<script src="js/slick.min.js" type="text/javascript"></script>
<script src="js/parallax.js" type="text/javascript"></script>
<script src="js/select-chosen.js" type="text/javascript"></script>
<script src="js/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCYc537bQom7ajFpWE5sQaVyz1SQa9_tuY&sensor=true&libraries=places"></script>
<script src="js/maps2.js" type="text/javascript"></script>

<!-- candidates_my_resume_add_new.html -->
<script src="js/circle-progress.min.js" type="text/javascript"></script>

</body>
</html>

