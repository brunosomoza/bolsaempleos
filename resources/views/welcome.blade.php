<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Entrevista Virtual - Welcome</title>
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

    <div class="responsive-header">
        <div class="responsive-menubar">
            <div class="res-logo"><a href="" title=""><img src="images/resource/logo.png" alt="" /></a></div>
            <div class="menu-resaction">
                <div class="res-openmenu">
                    <img src="images/icon.png" alt="" /> Menu
                </div>
                <div class="res-closemenu">
                    <img src="images/icon2.png" alt="" /> Cerrar
                </div>
            </div>
        </div>
        <div class="responsive-opensec">
            <div class="btn-extars">
                <ul class="account-btns">
                    <li class="signup-popup"><a title=""><i class="la la-user"></i> Registro</a></li>
                    <li class="signin-popup"><a title=""><i class="la la-key"></i> Entrar</a></li>
                </ul>
                <a href="{{ url('/login')  }}" title="" class="post-job-btn">SOY EMPRESA</a>
            </div><!-- Btn Extras -->
            <form class="res-search">
                <input type="text" placeholder="Job title, keywords or company name" />
                <button type="submit"><i class="la la-search"></i></button>
            </form>
{{--            <div class="responsivemenu">--}}
{{--                <ul>--}}
{{--                    <li class="menu-item-has-children">--}}
{{--                        <a href="#" title="">Employers</a>--}}
{{--                        <ul>--}}
{{--                            <li><a href="employer_list1.html" title=""> Employer List 1</a></li>--}}
{{--                            <li><a href="employer_list2.html" title="">Employer List 2</a></li>--}}
{{--                            <li><a href="employer_list3.html" title="">Employer List 3</a></li>--}}
{{--                            <li><a href="employer_list4.html" title="">Employer List 4</a></li>--}}
{{--                            <li><a href="employer_single1.html" title="">Employer Single 1</a></li>--}}
{{--                            <li><a href="employer_single2.html" title="">Employer Single 2</a></li>--}}
{{--                            <li class="menu-item-has-children">--}}
{{--                                <a href="#" title="">Employer Dashboard</a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="employer_manage_jobs.html" title="">Employer Job Manager</a></li>--}}
{{--                                    <li><a href="employer_packages.html" title="">Employer Packages</a></li>--}}
{{--                                    <li><a href="employer_post_new.html" title="">Employer Post New</a></li>--}}
{{--                                    <li><a href="employer_profile.html" title="">Employer Profile</a></li>--}}
{{--                                    <li><a href="employer_resume.html" title="">Employer Resume</a></li>--}}
{{--                                    <li><a href="employer_transactions.html" title="">Employer Transaction</a></li>--}}
{{--                                    <li><a href="employer_job_alert.html" title="">Employer Job Alert</a></li>--}}
{{--                                    <li><a href="employer_change_password.html" title="">Employer Change Password</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item-has-children">--}}
{{--                        <a href="#" title="">Candidates</a>--}}
{{--                        <ul>--}}
{{--                            <li><a href="candidates_list.html" title="">Candidates List 1</a></li>--}}
{{--                            <li><a href="candidates_list2.html" title="">Candidates List 2</a></li>--}}
{{--                            <li><a href="candidates_list3.html" title="">Candidates List 3</a></li>--}}
{{--                            <li><a href="candidates_single.html" title="">Candidates Single 1</a></li>--}}
{{--                            <li><a href="candidates_single2.html" title="">Candidates Single 2</a></li>--}}
{{--                            <li class="menu-item-has-children">--}}
{{--                                <a href="#" title="">Candidates Dashboard</a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="candidates_my_resume.html" title="">Candidates Resume</a></li>--}}
{{--                                    <li><a href="candidates_my_resume_add_new.html" title="">Candidates Resume new</a></li>--}}
{{--                                    <li><a href="candidates_profile.html" title="">Candidates Profile</a></li>--}}
{{--                                    <li><a href="candidates_shortlist.html" title="">Candidates Shortlist</a></li>--}}
{{--                                    <li><a href="candidates_job_alert.html" title="">Candidates Job Alert</a></li>--}}
{{--                                    <li><a href="candidates_dashboard.html" title="">Candidates Dashboard</a></li>--}}
{{--                                    <li><a href="candidates_cv_cover_letter.html" title="">CV Cover Letter</a></li>--}}
{{--                                    <li><a href="candidates_change_password.html" title="">Change Password</a></li>--}}
{{--                                    <li><a href="candidates_applied_jobs.html" title="">Candidates Applied Jobs</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item-has-children">--}}
{{--                        <a href="#" title="">Job</a>--}}
{{--                        <ul>--}}
{{--                            <li><a href="job_list_classic.html">Job List Classic</a></li>--}}
{{--                            <li><a href="job_list_grid.html">Job List Grid</a></li>--}}
{{--                            <li><a href="job_list_modern.html">Job List Modern</a></li>--}}
{{--                            <li><a href="job_single1.html">Job Single 1</a></li>--}}
{{--                            <li><a href="job_single2.html">Job Single 2</a></li>--}}
{{--                            <li><a href="job-single3.html">Job Single 3</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item-has-children">--}}
{{--                        <a href="#" title="">Pages</a>--}}
{{--                        <ul>--}}
{{--                            <li><a href="about.html" title="">About Us</a></li>--}}
{{--                            <li><a href="404.html" title="">404 Error</a></li>--}}
{{--                            <li><a href="contact.html" title="">Contact Us 1</a></li>--}}
{{--                            <li><a href="contact2.html" title="">Contact Us 2</a></li>--}}
{{--                            <li><a href="faq.html" title="">FAQ's</a></li>--}}
{{--                            <li><a href="how_it_works.html" title="">How it works</a></li>--}}
{{--                            <li><a href="login.html" title="">Login</a></li>--}}
{{--                            <li><a href="pricing.html" title="">Pricing Plans</a></li>--}}
{{--                            <li><a href="register.html" title="">Register</a></li>--}}
{{--                            <li><a href="terms_and_condition.html" title="">Terms & Condition</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </div>

    <header class="stick-top forsticky">
        <div class="menu-sec">
            <div class="container">
                <div class="logo">
                    <a href="" title=""><img class="hidesticky" src="images/resource/logo.png" alt="" /><img class="showsticky" src="images/resource/logo10.png" alt="" /></a>
                </div><!-- Logo -->
                @include('layouts.partials.btn_extras')
                <nav>
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="#" title="">BUSCO TRABAJO</a>
                            <ul>
                                <li><a href="employer_list1.html" title="">Full Time</a></li>
                                <li><a href="employer_list2.html" title="">Part Time</a></li>
                                <li><a href="employer_list3.html" title="">Virtual Remoto</a></li>
                            </ul>
                        </li>
{{--                        <li class="menu-item-has-children">--}}
{{--                            <a href="#" title="">Candidates</a>--}}
{{--                            <ul>--}}
{{--                                <li><a href="candidates_list.html" title="">Candidates List 1</a></li>--}}
{{--                                <li><a href="candidates_list2.html" title="">Candidates List 2</a></li>--}}
{{--                                <li><a href="candidates_list3.html" title="">Candidates List 3</a></li>--}}
{{--                                <li><a href="candidates_single.html" title="">Candidates Single 1</a></li>--}}
{{--                                <li><a href="candidates_single2.html" title="">Candidates Single 2</a></li>--}}
{{--                                <li class="menu-item-has-children">--}}
{{--                                    <a href="#" title="">Candidates Dashboard</a>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="candidates_my_resume.html" title="">Candidates Resume</a></li>--}}
{{--                                        <li><a href="candidates_my_resume_add_new.html" title="">Candidates Resume new</a></li>--}}
{{--                                        <li><a href="candidates_profile.html" title="">Candidates Profile</a></li>--}}
{{--                                        <li><a href="candidates_shortlist.html" title="">Candidates Shortlist</a></li>--}}
{{--                                        <li><a href="candidates_job_alert.html" title="">Candidates Job Alert</a></li>--}}
{{--                                        <li><a href="candidates_dashboard.html" title="">Candidates Dashboard</a></li>--}}
{{--                                        <li><a href="candidates_cv_cover_letter.html" title="">CV Cover Letter</a></li>--}}
{{--                                        <li><a href="candidates_change_password.html" title="">Change Password</a></li>--}}
{{--                                        <li><a href="candidates_applied_jobs.html" title="">Candidates Applied Jobs</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="menu-item-has-children">--}}
{{--                            <a href="#" title="">Job</a>--}}
{{--                            <ul>--}}
{{--                                <li><a href="job_list_classic.html">Job List Classic</a></li>--}}
{{--                                <li><a href="job_list_grid.html">Job List Grid</a></li>--}}
{{--                                <li><a href="job_list_modern.html">Job List Modern</a></li>--}}
{{--                                <li><a href="job_single1.html">Job Single 1</a></li>--}}
{{--                                <li><a href="job_single2.html">Job Single 2</a></li>--}}
{{--                                <li><a href="job-single3.html">Job Single 3</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="menu-item-has-children">--}}
{{--                            <a href="#" title="">Pages</a>--}}
{{--                            <ul>--}}
{{--                                <li><a href="about.html" title="">About Us</a></li>--}}
{{--                                <li><a href="404.html" title="">404 Error</a></li>--}}
{{--                                <li><a href="contact.html" title="">Contact Us 1</a></li>--}}
{{--                                <li><a href="contact2.html" title="">Contact Us 2</a></li>--}}
{{--                                <li><a href="faq.html" title="">FAQ's</a></li>--}}
{{--                                <li><a href="how_it_works.html" title="">How it works</a></li>--}}
{{--                                <li><a href="login.html" title="">Login</a></li>--}}
{{--                                <li><a href="pricing.html" title="">Pricing Plans</a></li>--}}
{{--                                <li><a href="register.html" title="">Register</a></li>--}}
{{--                                <li><a href="terms_and_condition.html" title="">Terms & Condition</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                    </ul>
                </nav><!-- Menus -->
            </div>
        </div>
    </header>

    <section>
        <div class="block no-padding">
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-featured-sec">
                            <ul class="main-slider-sec text-arrows">
                                <li class="slideHome"><img src="images/resource/mslider3.jpg" alt="" /></li>
                                <li class="slideHome"><img src="images/resource/mslider2.jpg" alt="" /></li>
                                <li class="slideHome"><img src="images/resource/mslider1.jpg" alt="" /></li>
                            </ul>
                            <div class="job-search-sec">
                                <div class="job-search">
                                    <h3>La forma más fácil de conseguir trabajo</h3>
                                    <span>Trabajar desde tu casa, ya es una realidad</span>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12">
                                                <div class="job-field">
                                                    <input type="text" placeholder="Escribe cargo o área profesional" />
                                                    <i class="la la-keyboard-o"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                                <div class="job-field">
                                                    <select data-placeholder="Departamento ó ciudad" class="chosen-city">
                                                        <option value="150000">Lima</option>
                                                        <option value="010000">Amazonas</option>
                                                        <option value="020000">Ancash</option>
                                                        <option value="030000">Apurimac</option>
                                                        <option value="040000">Arequipa</option>
                                                        <option value="050000">Ayacucho</option>
                                                        <option value="060000">Cajamarca</option>
                                                        <option value="070000">Cuzco</option>
                                                        <option value="080000">Gobierno Regional del Callao</option>
                                                        <option value="090000">Huancavelica</option>
                                                        <option value="100000">Huánuco</option>
                                                        <option value="110000">Ica</option>
                                                        <option value="120000">Junin</option>
                                                        <option value="130000">La Libertad</option>
                                                        <option value="140000">Lambayeque</option>
                                                        <option value="160000">Loreto</option>
                                                        <option value="170000">Madre de Dios</option>
                                                        <option value="180000">Moquegua</option>
                                                        <option value="190000">Pasco</option>
                                                        <option value="200000">Piura</option>
                                                        <option value="210000">Puno</option>
                                                        <option value="220000">San Martín</option>
                                                        <option value="230000">Tacna</option>
                                                        <option value="240000">Tumbes</option>
                                                        <option value="250000">Ucayali</option>
                                                    </select>
                                                    <i class="la la-map-marker"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
                                                <button type="submit"><i class="la la-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="or-browser">
                                        <span>Buscar ofertas de trabajo por</span>
                                        <a href="#" title="">Categoría</a>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-to">
                                <a href="#scroll-here" title=""><i class="la la-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="scroll-here">
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Categorías Populares</h2>
                            <span>37 jobs live - 0 added today.</span>
                        </div><!-- Heading -->
                        <div class="cat-sec">
                            <div class="row no-gape">
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-bullhorn"></i>
                                            <span>Design, Art & Multimedia</span>
                                            <p>(22 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-graduation-cap"></i>
                                            <span>Education Training</span>
                                            <p>(6 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-line-chart "></i>
                                            <span>Accounting / Finance</span>
                                            <p>(3 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-users"></i>
                                            <span>Human Resource</span>
                                            <p>(3 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cat-sec">
                            <div class="row no-gape">
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-phone"></i>
                                            <span>Telecommunications</span>
                                            <p>(22 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-cutlery"></i>
                                            <span>Restaurant / Food Service</span>
                                            <p>(6 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-building"></i>
                                            <span>Construction / Facilities</span>
                                            <p>(3 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-user-md"></i>
                                            <span>Health</span>
                                            <p>(3 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="browse-all-cat">
                            <a href="#" title="">Browse All Categories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block double-gap-top double-gap-bottom">
            <div data-velocity="-.1" style="background: url('images/resource/parallax1.jpg') repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="simple-text-block">
                            <h3>Make a Difference with Your Online Resume!</h3>
                            <span>Your resume in minutes with JobHunt resume assistant is ready!</span>
                            <a href="#" title="">Create an Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Featured Jobs</h2>
                            <span>Leading Employers already using job and talent.</span>
                        </div><!-- Heading -->
                        <div class="job-listings-sec">
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/resource/l1.png" alt="" /> </div>
                                    <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                    <span>Massimo Artemisis</span>
                                </div>
                                <span class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</span>
                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                <span class="job-is ft">FULL TIME</span>
                            </div><!-- Job -->
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/resource/l2.png" alt="" /> </div>
                                    <h3><a href="#" title="">Marketing Director</a></h3>
                                    <span>Tix Dog</span>
                                </div>
                                <span class="job-lctn"><i class="la la-map-marker"></i>Rennes, France</span>
                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                <span class="job-is pt">PART TIME</span>
                            </div><!-- Job -->
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/resource/l3.png" alt="" /> </div>
                                    <h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
                                    <span>StarHealth</span>
                                </div>
                                <span class="job-lctn"><i class="la la-map-marker"></i>London, United Kingdom</span>
                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                <span class="job-is ft">FULL TIME</span>
                            </div><!-- Job -->
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/resource/l4.png" alt="" /> </div>
                                    <h3><a href="#" title="">Application Developer For Android</a></h3>
                                    <span>Altes Bank</span>
                                </div>
                                <span class="job-lctn"><i class="la la-map-marker"></i>Istanbul, Turkey</span>
                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                <span class="job-is fl">FREELANCE</span>
                            </div><!-- Job -->
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/resource/l5.png" alt="" /> </div>
                                    <h3><a href="#" title="">Regional Sales Manager South east Asia</a></h3>
                                    <span>Vincent</span>
                                </div>
                                <span class="job-lctn"><i class="la la-map-marker"></i>Ajax, Ontario</span>
                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                <span class="job-is tp">TEMPORARY</span>
                            </div><!-- Job -->
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/resource/l6.png" alt="" /> </div>
                                    <h3><a href="#" title="">Social Media and Public Relation Executive </a></h3>
                                    <span>MediaLab</span>
                                </div>
                                <span class="job-lctn"><i class="la la-map-marker"></i>Ankara / Turkey</span>
                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                <span class="job-is ft">FULL TIME</span>
                            </div><!-- Job -->
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="browse-all-cat">
                            <a href="#" title="">Load more listings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div data-velocity="-.1" style="background: url('images/resource/parallax2.jpg') repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color light"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading light">
                            <h2>Kind Words From Happy Candidates</h2>
                            <span>What other people thought about the service provided by JobHunt</span>
                        </div><!-- Heading -->
                        <div class="reviews-sec" id="reviews-carousel">
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="images/resource/r1.jpg" alt="" />
                                    <h3>Augusta Silva <span>Web designer</span></h3>
                                    <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                </div><!-- Reviews -->
                            </div>
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="images/resource/r2.jpg" alt="" />
                                    <h3>Ali Tufan <span>Web designer</span></h3>
                                    <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                </div><!-- Reviews -->
                            </div>
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="images/resource/r1.jpg" alt="" />
                                    <h3>Augusta Silva <span>Web designer</span></h3>
                                    <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                </div><!-- Reviews -->
                            </div>
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="images/resource/r2.jpg" alt="" />
                                    <h3>Ali Tufan <span>Web designer</span></h3>
                                    <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                </div><!-- Reviews -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Companies We've Helped</h2>
                            <span>Some of the companies we've helped recruit excellent applicants over the years.</span>
                        </div><!-- Heading -->
                        <div class="comp-sec">
                            <div class="company-img">
                                <a href="#" title=""><img src="images/resource/cc1.jpg" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="images/resource/cc2.jpg" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="images/resource/cc3.jpg" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="images/resource/cc4.jpg" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="images/resource/cc5.jpg" alt="" /></a>
                            </div><!-- Client  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div data-velocity="-.1" style="background: url('images/resource/parallax3.jpg') repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Quick Career Tips</h2>
                            <span>Found by employers communicate directly with hiring managers and recruiters.</span>
                        </div><!-- Heading -->
                        <div class="blog-sec">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="#" title=""><img src="images/resource/b1.jpg" alt="" /></a>
                                            <div class="blog-metas">
                                                <a href="#" title="">March 29, 2017</a>
                                                <a href="#" title="">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="#" title="">Attract More Attention Sales And Profits</a></h3>
                                            <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                            <a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="#" title=""><img src="images/resource/b2.jpg" alt="" /></a>
                                            <div class="blog-metas">
                                                <a href="#" title="">March 29, 2017</a>
                                                <a href="#" title="">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="#" title="">11 Tips to Help You Get New Clients</a></h3>
                                            <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                            <a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="#" title=""><img src="images/resource/b3.jpg" alt="" /></a>
                                            <div class="blog-metas">
                                                <a href="#" title="">March 29, 2017</a>
                                                <a href="#" title="">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="#" title="">An Overworked Newspaper Editor</a></h3>
                                            <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                            <a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block no-padding">
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="simple-text">
                            <h3>Gat a question?</h3>
                            <span>We're here to help. Check out our FAQs, send us an email or call us at 1 (800) 555-5555</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 column">
                        <div class="widget">
                            <div class="about_widget">
                                <div class="logo">
                                    <a href="" title=""><img src="images/resource/logo.png" alt="" /></a>
                                </div>
                                <span>Collin Street West, Victor 8007, Australia.</span>
                                <span>+1 246-345-0695</span>
                                <span><a href="../../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="1970777f765973767b716c776d377a7674">[email&#160;protected]</a></span>
                                <div class="social">
                                    <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                    <a href="#" title=""><i class="fa fa-twitter"></i></a>
                                    <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                                    <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                    <a href="#" title=""><i class="fa fa-behance"></i></a>
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
                                        <a href="#" title="">Privacy & Seurty </a>
                                        <a href="#" title="">Terms of Serice</a>
                                        <a href="#" title="">Communications </a>
                                        <a href="#" title="">Referral Terms </a>
                                        <a href="#" title="">Lending Licnses </a>
                                        <a href="#" title="">Disclaimers </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="#" title="">Support </a>
                                        <a href="#" title="">How It Works </a>
                                        <a href="#" title="">For Employers </a>
                                        <a href="#" title="">Underwriting </a>
                                        <a href="#" title="">Contact Us</a>
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
                                        <a href="#" title="">US Jobs</a>
                                        <a href="#" title="">Canada Jobs</a>
                                        <a href="#" title="">UK Jobs</a>
                                        <a href="#" title="">Emplois en Fnce</a>
                                        <a href="#" title="">Jobs in Deuts</a>
                                        <a href="#" title="">Vacatures China</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 column">
                        <div class="widget">
                            <div class="download_widget">
                                <a href="#" title=""><img src="images/resource/dw1.png" alt="" /></a>
                                <a href="#" title=""><img src="images/resource/dw2.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-line">
            <span>© 2018 Jobhunt All rights reserved. Design by Creative Layers</span>
            <a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
        </div>
    </footer>

</div>

<div class="account-popup-area signin-popup-box">
    <div class="account-popup">
        <span class="close-popup"><i class="la la-close"></i></span>
        <h3>Login de Usuario</h3>
        <form form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="cfield">
                <input name="email" type="text" placeholder="Email" autofocus/>
                <i class="la la-envelope-o"></i>
            </div>
            <div class="cfield">
                <input name="password" type="password" placeholder="Contraseña" />
                <i class="la la-key"></i>
            </div>
            <p class="remember-label">
                <input type="checkbox" name="cb" id="cb1"><label for="cb1">Remember me</label>
            </p>
            <a href="#" title="">Forgot Password?</a>
            <button type="submit">Entrar</button>
        </form>
        <div class="extra-login">
            <span>Entrar con redes sociales</span>
            <div class="login-social">
                <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div><!-- LOGIN POPUP -->

<div class="account-popup-area signup-popup-box">
    <div class="account-popup">
        <span class="close-popup"><i class="la la-close"></i></span>
        <h3>Registro de Usuario</h3>
        <form method="POST" action= "{{ route('register') }}" >
            @csrf
            <div class="cfield">
                <input value="{{ old('name') }}" class="{{ $errors->has('name') ? 'text-danger' : '' }}" id="name" name="name" type="text" placeholder="Su nombre :)" required autofocus/>
                <i class="la la-user"></i>
            </div>
            <div class="cfield">
                <input value="{{ old('email') }}" class="{{ $errors->has('email') ? 'text-danger' : '' }}" id="email" name="email" type="email" placeholder="Ingrese su correo" required />
                <i class="la la-envelope-o"></i>
            </div>
            <div class="cfield">
                <input class="{{ $errors->has('password') ? 'text-danger' : '' }}" id="password" name="password" type="password" placeholder="Clave 8 digitos minimo"  required />
                <i class="la la-key"></i>
            </div>
            <div class="cfield">
                <input class="{{ $errors->has('password') ? 'text-danger' : '' }}" id="password-confirm" name="password_confirmation" type="password" placeholder="Clave 8 digitos minimo" required />
                <i class="la la-key"></i>
            </div>
            <div class="dropdown-field">
                <select name="op_login" id="opcionlogin" data-placeholder="Please Select Specialism" class="chosen" required />
                <option value="SELECCIONAR">_SELECCIONAR</option>
                <option value="BUSCOTRABAJO">BUSCO TRABAJO</option>
                <option value="SOYEMPRESA">SOY EMPRESA</option>
                </select>
            </div>
            <button type="submit">Registrar</button>
        </form>
        <div class="extra-login">
            <span>Registro con redes sociales</span>
            <div class="login-social">
                <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div><!-- SIGNUP POPUP -->

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/modernizr.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/wow.min.js" type="text/javascript"></script>
<script src="js/slick.min.js" type="text/javascript"></script>
<script src="js/parallax.js" type="text/javascript"></script>
<script src="js/select-chosen.js" type="text/javascript"></script>

</body>
</html>

