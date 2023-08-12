<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="auth">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $WebSiteSetting->title }}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="{{ $WebSiteSetting->meta_description }}">
    <meta name="keywords" content="{!! $WebSiteSetting->meta_keywords !!}">
    <meta name="author" content="{{ $WebSiteSetting->mete_author }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ $WebSiteSetting->logo }}">
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/feature.css') }}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C6WVN69WCX"></script>

    {!! $WebSiteSetting->google_analysis !!}
</head>

<body class="template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">

    <!-- Start Header -->
    <header class="rn-header haeder-default black-logo-version header--fixed header--sticky">
        <div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
            <!-- Start Header Left -->
            <div class="col-lg-2 col-6">
                <div class="header-left">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset($WebSiteSetting->logo) }}" alt="{{ $WebSiteSetting->alt_logo }}">
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Header Left -->
            <!-- Start Header Center -->
            <div class="col-lg-10 col-6">
                <div class="header-center">
                    <nav id="sideNav" class="mainmenu-nav navbar-example2 d-none d-xl-block onepagenav">
                        <!-- Start Mainmanu Nav -->
                        <ul class="primary-menu nav nav-pills">
                            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                            <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link" href="#resume">Resume</a></li>
                            <li class="nav-item current"><a class="nav-link"
                                    href="http://localhost:3000/#clients">Clients</a></li>
                            <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                            <li class="nav-item"><a class="nav-link" href="#blog">blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contacts">Contact</a></li>
                        </ul>
                        <!-- End Mainmanu Nav -->
                    </nav>
                    <!-- Start Header Right  -->
                    <div class="header-right">
                        {{-- <a class="rn-btn"
                            href=""><span></span></a> --}}
                        <div class="hamberger-menu d-block d-xl-none">
                            <i id="menuBtn" class="feather-menu humberger-menu"></i>
                        </div>
                        <div class="close-menu d-block">
                            <span class="closeTrigger">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <!-- End Header Right  -->

                </div>
            </div>
            <!-- End Header Center -->
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Popup Mobile Menu  -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="menu-top">
                <div class="menu-header">
                    <a class="logo" href="{{ url('/') }}">
                        <img src="{{ asset($WebSiteSetting->logo) }}" alt="{{ $WebSiteSetting->alt_logo }}">
                    </a>
                    <div class="close-button">
                        <button class="close-menu-activation close"><i data-feather="x"></i></button>
                    </div>
                </div>
                <p class="discription">Inbio is a personal portfolio template. You can customize all.</p>
            </div>
            <div class="content">
                <ul class="primary-menu nav nav-pills onepagenav">
                    <li class="nav-item current"><a class="nav-link smoth-animation active" href="#home">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#clients">Clients</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#blog">blog</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">Contact</a></li>
                </ul>
                <!-- social sharea area -->
                <div class="social-share-style-1 mt--40">
                    <span class="title">find with me</span>
                    <ul class="social-share d-flex liststyle">
                        <li class="facebook"><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg></a>
                        </li>
                        <li class="instagram"><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-instagram">
                                    <rect x="2" y="2" width="20" height="20"
                                        rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg></a>
                        </li>
                        <li class="linkedin"><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-linkedin">
                                    <path
                                        d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                    </path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg></a>
                        </li>
                    </ul>
                </div>
                <!-- end -->
            </div>
        </div>
    </div>
    <!-- End Popup Mobile Menu  -->




    <main class="main-page-wrapper">

        <!-- Start Slider Area -->
        <div id="home" class="rn-slider-area">
            <div class="slide slider-style-1">
                <div class="container">
                    <div class="row row--30 align-items-center">
                        <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                            <div class="content">
                                <div class="inner">
                                    <span class="subtitle">{{ $banner->welcome_title }}</span>
                                    <h1 class="title">Hi, I’m <span>{{ $banner->name }}</span><br>
                                        <span class="header-caption" id="page-top">
                                            <!-- type headline start-->
                                            <span class="cd-headline clip is-full-width">
                                                <span>a </span>
                                                <!-- ROTATING TEXT -->
                                                <span class="cd-words-wrapper">


                                                    <b class="is-visible">Web Developer.</b>
                                                    <b class="is-hidden">Professional Coder.</b>
                                                    <b class="is-hidden">Lecturer Web Developer</b>


                                                </span>
                                            </span>
                                            <!-- type headline end -->
                                        </span>
                                    </h1>

                                    <div>
                                        <p class="description">{{ $banner->short_description }}.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12">
                                        <div class="social-share-inner-left">
                                            <span class="title">find with me</span>
                                            <ul class="social-share d-flex liststyle">
                                                @if ($social_icon != null)
                                                    @foreach ($social_icon as $item)
                                                        <li class="facebook"><a target="_blank"
                                                                href="{{ $item->link }}"><img
                                                                    src="{{ asset($item->image) }}"
                                                                    alt="{{ $item->alt_image }}"></a>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                        <div class="skill-share-inner">
                                            <span class="title">best skill on</span>
                                            <ul class="skill-share d-flex liststyle">
                                                @if ($BannerSkillsIcon != null)
                                                    @foreach ($BannerSkillsIcon as $item)
                                                        <li><img src="{{ asset($item->image) }}"
                                                                alt="{{ $item->alt_image }}"></li>
                                                    @endforeach
                                                @endif

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-1 order-lg-2 col-lg-5">
                            <div class="thumbnail">
                                <div class="inner">
                                    <img src="{{ asset($banner->image) }}" alt="Personal Portfolio Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->

        <!-- Start Service Area -->
        <div class="rn-service-area rn-section-gap section-separator" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-left" data-aos="fade-up" data-aos-duration="500"
                            data-aos-delay="100" data-aos-once="true">
                            <span class="subtitle">Features</span>
                            <h2 class="title">What I Do</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt_md--10 mt_sm--10">
                    @if ($FeaturesCard != null)
                        @foreach ($FeaturesCard as $item)
                            <!-- Start Single Service -->
                            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100"
                                data-aos-once="true"
                                class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                                <div class="rn-service">
                                    <div class="inner">
                                        <div class="icon">
                                            <i data-feather="{{ $item->image }}"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="#">{{ $item->title }}</a></h4>
                                            <p class="description">{{ $item->short_desctiption }}</p>
                                            <a class="read-more-button" href="#"><i
                                                    class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <a class="over-link" href="#"></a>
                                </div>
                            </div>
                            <!-- End SIngle Service -->
                        @endforeach
                    @endif
                    <!-- Start Portfolio Area -->
                    <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title text-center">
                                        <span class="subtitle">Visit my portfolio and keep your feedback</span>
                                        <h2 class="title">My Portfolio</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
                                <!-- Start Single Portfolio -->
                                @if ($MyPortfolio != null)
                                    @foreach ($MyPortfolio as $item)
                                        <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true"
                                            class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                                            <div class="rn-portfolio" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalCenter{{ $item->id }}">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="javascript:void(0)">
                                                            <img src="{{ asset($item->view_image) }}"
                                                                alt="{{ $item->view_alt_image }}">
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <div class="category-info">
                                                            <div class="category-list">
                                                                <a
                                                                    href="javascript:void(0)">{{ $item->view_title }}</a>
                                                            </div>
                                                            <div class="meta">
                                                                <span><a href="javascript:void(0)"><i
                                                                            class="feather-heart"></i></a>
                                                                    {{ $item->visibility }}</span>
                                                            </div>
                                                        </div>
                                                        <h4 class="title"><a
                                                                href="javascript:void(0)">{{ $item->short_description }}
                                                                <i class="feather-arrow-up-right"></i></a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Portfolio -->
                                    @endforeach

                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- End portfolio Area -->
                    <!-- Start Resume Area -->
                    <div class="rn-resume-area rn-section-gap section-separator" id="resume">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title text-center">
                                        <span class="subtitle">7+ Years of Experience</span>
                                        <h2 class="title">My Resume</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt--45">
                                <div class="col-lg-12">
                                    <ul class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="education-tab" data-bs-toggle="tab"
                                                href="#education" role="tab" aria-controls="education"
                                                aria-selected="true">education</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="professional-tab" data-bs-toggle="tab"
                                                href="#professional" role="tab" aria-controls="professional"
                                                aria-selected="false">professional
                                                Skills</a>
                                        </li>
                                        <li class="nav-item">
                                            {{-- <a class="nav-link" id="experience-tab" data-bs-toggle="tab"
                                                href="#experience" role="tab" aria-controls="experience"
                                                aria-selected="false">experience</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="interview-tab" data-bs-toggle="tab"
                                                href="#interview" role="tab" aria-controls="interview"
                                                aria-selected="false">interview</a>
                                        </li> --}}
                                    </ul>

                                    <!-- Start Tab Content Wrapper  -->
                                    <div class="rn-nav-content tab-content" id="myTabContents">
                                        <!-- Start Single Tab  -->
                                        <div class="tab-pane show active fade single-tab-area" id="education"
                                            role="tabpanel" aria-labelledby="education-tab">
                                            <div class="personal-experience-inner mt--40">
                                                <div class="row">
                                                    <!-- Start Skill List Area  -->
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <div class="content">
                                                            <span class="subtitle">2010 - present</span>
                                                            <h4 class="maintitle">Education Quality</h4>
                                                            <div class="experience-list">

                                                                @if ($MyResumeEducationJob != null)
                                                                    @foreach ($MyResumeEducationJob as $item)
                                                                        <!-- Start Single List  -->
                                                                        <div class="resume-single-list">
                                                                            <div class="inner">
                                                                                <div class="heading">
                                                                                    <div class="title">
                                                                                        <h4>{{ $item->title }}</h4>
                                                                                        <span>{{ $item->subtitle }}</span>
                                                                                    </div>
                                                                                    <div class="date-of-time">
                                                                                        <span>{{ $item->degree }}</span>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="description">
                                                                                    {{ $item->short_description }}</p>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Single List  -->
                                                                    @endforeach
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Skill List Area  -->

                                                    <!-- Start Skill List Area 2nd  -->
                                                    <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                                        <div class="content">
                                                            <span class="subtitle">2010 - present</span>
                                                            <h4 class="maintitle">Job Experience</h4>
                                                            <div class="experience-list">
                                                                @if ($MyResumeEducationJob != null)


                                                                    @foreach ($MyResumeEducationJob as $item)
                                                                        <!-- Start Single List  -->
                                                                        <div class="resume-single-list">
                                                                            <div class="inner">
                                                                                <div class="heading">
                                                                                    <div class="title">
                                                                                        <h4>{{ $item->title }}</h4>
                                                                                        <span>{{ $item->subtitle }}</span>
                                                                                    </div>
                                                                                    <div class="date-of-time">
                                                                                        <span>{{ $item->degree }}</span>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="description">
                                                                                    {{ $item->short_description }}</p>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Single List  -->
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Skill List Area  -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Tab  -->

                                        <!-- Start Single Tab  -->
                                        <div class="tab-pane fade " id="professional" role="tabpanel"
                                            aria-labelledby="professional-tab">
                                            <div class="personal-experience-inner mt--40">
                                                <div class="row row--40">

                                                    <!-- Start Single Progressbar  -->
                                                    <div class="col-lg-6 col-md-6 col-12">
                                                        <div class="progress-wrapper">
                                                            <div class="content">
                                                                <span class="subtitle">Features</span>
                                                                <h4 class="maintitle">Design Skill</h4>

                                                                @foreach ($MyResumeprofessionalSkillsDesignSkill as $item)
                                                                    <!-- Start Single Progress Charts -->
                                                                    <div class="progress-charts">
                                                                        <h6 class="heading heading-h6">
                                                                            {{ $item->title }}</h6>
                                                                        <div class="progress">
                                                                            <div class="progress-bar wow fadeInLeft"
                                                                                data-wow-duration="0.5s"
                                                                                data-wow-delay=".3s"
                                                                                role="progressbar"
                                                                                style="width: {{ $item->degree }}%"
                                                                                aria-valuenow="85" aria-valuemin="0"
                                                                                aria-valuemax="100">
                                                                                <span
                                                                                    class="percent-label">{{ $item->degree }}%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End Single Progress Charts -->
                                                                @endforeach

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progressbar  -->

                                                    <!-- Start Single Progressbar  -->
                                                    <div class="col-lg-6 col-md-6 col-12 mt_sm--60">
                                                        <div class="progress-wrapper">
                                                            <div class="content">
                                                                <span class="subtitle">Features</span>
                                                                <h4 class="maintitle">Development Skill</h4>
                                                                <!-- Start Single Progress Charts -->
                                                                @foreach ($MyResumeprofessionalSkillsDevelopmentSkill as $item)
                                                                    <!-- Start Single Progress Charts -->
                                                                    <div class="progress-charts">
                                                                        <h6 class="heading heading-h6">
                                                                            {{ $item->title }}</h6>
                                                                        <div class="progress">
                                                                            <div class="progress-bar wow fadeInLeft"
                                                                                data-wow-duration="0.5s"
                                                                                data-wow-delay=".3s"
                                                                                role="progressbar"
                                                                                style="width: {{ $item->degree }}%"
                                                                                aria-valuenow="85" aria-valuemin="0"
                                                                                aria-valuemax="100">
                                                                                <span
                                                                                    class="percent-label">{{ $item->degree }}%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End Single Progress Charts -->
                                                                @endforeach
                                                                <!-- End Single Progress Charts -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progressbar  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Tab  -->

                                        <!-- Start Single Tab  -->
                                        <div class="tab-pane fade" id="experience" role="tabpanel"
                                            aria-labelledby="experience-tab">
                                            <div class="personal-experience-inner mt--40">
                                                <div class="row">
                                                    <!-- Start Skill List Area  -->
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <div class="content">
                                                            <span class="subtitle">2007 - 2010</span>
                                                            <h4 class="maintitle">Education Quality</h4>
                                                            <div class="experience-list">

                                                                <!-- Start Single List  -->
                                                                <div class="resume-single-list">
                                                                    <div class="inner">
                                                                        <div class="heading">
                                                                            <div class="title">
                                                                                <h4>Personal Portfolio April Fools</h4>
                                                                                <span>University of DVI (1997 -
                                                                                    2001)</span>
                                                                            </div>
                                                                            <div class="date-of-time">
                                                                                <span>4.30/5</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="description">The education should be
                                                                            very
                                                                            interactual. Ut tincidunt est ac dolor
                                                                            aliquam sodales.
                                                                            Phasellus sed mauris hendrerit, laoreet sem
                                                                            in, lobortis
                                                                            mauris hendrerit ante.</p>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single List  -->

                                                                <!-- Start Single List  -->
                                                                <div class="resume-single-list">
                                                                    <div class="inner">
                                                                        <div class="heading">
                                                                            <div class="title">
                                                                                <h4> Examples Of Personal Portfolio</h4>
                                                                                <span>College of Studies (2000 -
                                                                                    2002)</span>
                                                                            </div>
                                                                            <div class="date-of-time">
                                                                                <span>4.50/5</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="description">Maecenas finibus nec sem
                                                                            ut
                                                                            imperdiet. Ut tincidunt est ac dolor aliquam
                                                                            sodales.
                                                                            Phasellus sed mauris hendrerit, laoreet sem
                                                                            in, lobortis
                                                                            mauris hendrerit ante.</p>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single List  -->

                                                                <!-- Start Single List  -->
                                                                <div class="resume-single-list">
                                                                    <div class="inner">
                                                                        <div class="heading">
                                                                            <div class="title">
                                                                                <h4>Tips For Personal Portfolio</h4>
                                                                                <span>University of Studies (1997 -
                                                                                    2001)</span>
                                                                            </div>
                                                                            <div class="date-of-time">
                                                                                <span>4.80/5</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="description"> If you are going to use
                                                                            a passage.
                                                                            Ut tincidunt est ac dolor aliquam sodales.
                                                                            Phasellus sed mauris hendrerit, laoreet sem
                                                                            in, lobortis
                                                                            mauris hendrerit ante.</p>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single List  -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Skill List Area  -->

                                                    <!-- Start Skill List Area 2nd  -->
                                                    <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                                        <div class="content">
                                                            <span class="subtitle">2007 - 2010</span>
                                                            <h4 class="maintitle">Job Experience</h4>
                                                            <div class="experience-list">

                                                                <!-- Start Single List  -->
                                                                <div class="resume-single-list">
                                                                    <div class="inner">
                                                                        <div class="heading">
                                                                            <div class="title">
                                                                                <h4>Diploma in Web Development</h4>
                                                                                <span>BSE In CSE (2004 - 2008)</span>
                                                                            </div>
                                                                            <div class="date-of-time">
                                                                                <span>4.70/5</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="description">Contrary to popular
                                                                            belief. Ut
                                                                            tincidunt est ac dolor aliquam sodales.
                                                                            Phasellus sed mauris hendrerit, laoreet sem
                                                                            in, lobortis
                                                                            mauris hendrerit ante.</p>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single List  -->

                                                                <!-- Start Single List  -->
                                                                <div class="resume-single-list">
                                                                    <div class="inner">
                                                                        <div class="heading">
                                                                            <div class="title">
                                                                                <h4>The Personal Portfolio Mystery</h4>
                                                                                <span>Job at Rainbow-Themes (2008 -
                                                                                    2016)</span>
                                                                            </div>
                                                                            <div class="date-of-time">
                                                                                <span>4.95/5</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="description">Generate Lorem Ipsum
                                                                            which looks. Ut
                                                                            tincidunt est ac dolor aliquam sodales.
                                                                            Phasellus sed mauris hendrerit, laoreet sem
                                                                            in, lobortis
                                                                            mauris hendrerit ante.</p>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single List  -->

                                                                <!-- Start Single List  -->
                                                                <div class="resume-single-list">
                                                                    <div class="inner">
                                                                        <div class="heading">
                                                                            <div class="title">
                                                                                <h4>Diploma in Computer Science</h4>
                                                                                <span>Works at Plugin Development (2016
                                                                                    -
                                                                                    2020)</span>
                                                                            </div>
                                                                            <div class="date-of-time">
                                                                                <span>5.00/5</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="description">Maecenas finibus nec sem
                                                                            ut
                                                                            imperdiet. Ut tincidunt est ac dolor aliquam
                                                                            sodales.
                                                                            Phasellus sed mauris hendrerit, laoreet sem
                                                                            in, lobortis
                                                                            mauris hendrerit ante.</p>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single List  -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Skill List Area  -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Tab  -->

                                        <!-- Start Single Tab  -->
                                        <div class="tab-pane fade" id="interview" role="tabpanel"
                                            aria-labelledby="interview-tab">
                                            <div class="personal-experience-inner mt--40">
                                                <div class="row">
                                                    <!-- Start Skill List Area  -->
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <div class="content">
                                                            <span class="subtitle">2007 - 2010</span>
                                                            <h4 class="maintitle">Company Experience</h4>
                                                            <div class="experience-list">

                                                                <!-- Start Single List  -->
                                                                <div data-aos="fade-up" data-aos-duration="500"
                                                                    data-aos-delay="300" data-aos-once="true"
                                                                    class="resume-single-list">
                                                                    <div class="inner">
                                                                        <div class="heading">
                                                                            <div class="title">
                                                                                <h4>Personal Portfolio April Fools</h4>
                                                                                <span>University of DVI (1997 -
                                                                                    2001)</span>
                                                                            </div>
                                                                            <div class="date-of-time">
                                                                                <span>4.30/5</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="description">The education should be
                                                                            very
                                                                            interactual. Ut tincidunt est ac dolor
                                                                            aliquam sodales.
                                                                            Phasellus sed mauris hendrerit, laoreet sem
                                                                            in, lobortis
                                                                            mauris hendrerit ante.</p>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single List  -->

                                                                <!-- Start Single List  -->
                                                                <div data-aos="fade-up" data-aos-duration="500"
                                                                    data-aos-delay="500" data-aos-once="true"
                                                                    class="resume-single-list">
                                                                    <div class="inner">
                                                                        <div class="heading">
                                                                            <div class="title">
                                                                                <h4> Examples Of Personal Portfolio</h4>
                                                                                <span>College of Studies (2000 -
                                                                                    2002)</span>
                                                                            </div>
                                                                            <div class="date-of-time">
                                                                                <span>4.50/5</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="description">Maecenas finibus nec sem
                                                                            ut
                                                                            imperdiet. Ut tincidunt est ac dolor aliquam
                                                                            sodales.
                                                                            Phasellus sed mauris hendrerit, laoreet sem
                                                                            in, lobortis
                                                                            mauris hendrerit ante.</p>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single List  -->

                                                                <!-- Start Single List  -->
                                                                <div data-aos="fade-up" data-aos-duration="500"
                                                                    data-aos-delay="700" data-aos-once="true"
                                                                    class="resume-single-list">
                                                                    <div class="inner">
                                                                        <div class="heading">
                                                                            <div class="title">
                                                                                <h4>Tips For Personal Portfolio</h4>
                                                                                <span>University of Studies (1997 -
                                                                                    2001)</span>
                                                                            </div>
                                                                            <div class="date-of-time">
                                                                                <span>4.80/5</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="description"> If you are going to use
                                                                            a passage.
                                                                            Ut tincidunt est ac dolor aliquam sodales.
                                                                            Phasellus sed mauris hendrerit, laoreet sem
                                                                            in, lobortis
                                                                            mauris hendrerit ante.</p>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single List  -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Skill List Area  -->

                                                    <!-- Start Skill List Area 2nd  -->
                                                    <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                                        <div class="content">
                                                            <span class="subtitle">2007 - 2010</span>
                                                            <h4 class="maintitle">Job Experience</h4>
                                                            <div class="experience-list">

                                                                <!-- Start Single List  -->
                                                                <div data-aos="fade-up" data-aos-duration="500"
                                                                    data-aos-delay="500" data-aos-once="true"
                                                                    class="resume-single-list">
                                                                    <div class="inner">
                                                                        <div class="heading">
                                                                            <div class="title">
                                                                                <h4>Diploma in Web Development</h4>
                                                                                <span>BSE In CSE (2004 - 2008)</span>
                                                                            </div>
                                                                            <div class="date-of-time">
                                                                                <span>4.70/5</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="description">Contrary to popular
                                                                            belief. Ut
                                                                            tincidunt est ac dolor aliquam sodales.
                                                                            Phasellus sed mauris hendrerit, laoreet sem
                                                                            in, lobortis
                                                                            mauris hendrerit ante.</p>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single List  -->

                                                                <!-- Start Single List  -->
                                                                <div data-aos="fade-up" data-aos-duration="500"
                                                                    data-aos-delay="700" data-aos-once="true"
                                                                    class="resume-single-list">
                                                                    <div class="inner">
                                                                        <div class="heading">
                                                                            <div class="title">
                                                                                <h4>The Personal Portfolio Mystery</h4>
                                                                                <span>Job at Rainbow-Themes (2008 -
                                                                                    2016)</span>
                                                                            </div>
                                                                            <div class="date-of-time">
                                                                                <span>4.95/5</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="description">Generate Lorem Ipsum
                                                                            which looks. Ut
                                                                            tincidunt est ac dolor aliquam sodales.
                                                                            Phasellus sed mauris hendrerit, laoreet sem
                                                                            in, lobortis
                                                                            mauris hendrerit ante.</p>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single List  -->

                                                                <!-- Start Single List  -->
                                                                <div data-aos="fade-up" data-aos-duration="500"
                                                                    data-aos-delay="900" data-aos-once="true"
                                                                    class="resume-single-list">
                                                                    <div class="inner">
                                                                        <div class="heading">
                                                                            <div class="title">
                                                                                <h4>Diploma in Computer Science</h4>
                                                                                <span>Works at Plugin Development (2016
                                                                                    -
                                                                                    2020)</span>
                                                                            </div>
                                                                            <div class="date-of-time">
                                                                                <span>5.00/5</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="description">Maecenas finibus nec sem
                                                                            ut
                                                                            imperdiet. Ut tincidunt est ac dolor aliquam
                                                                            sodales.
                                                                            Phasellus sed mauris hendrerit, laoreet sem
                                                                            in, lobortis
                                                                            mauris hendrerit ante.</p>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single List  -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Skill List Area  -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Tab  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Resume Area -->

                    <!-- Start Testimonia Area  -->
                    <div class="rn-testimonial-area rn-section-gap section-separator" id="testimonial">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title text-center">
                                        <span class="subtitle">What Clients Say</span>
                                        <h2 class="title">Testimonial</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="testimonial-activation testimonial-pb mb--30">

                                        @if ($Testimonial != null)
                                            @foreach ($Testimonial as $item)
                                                <!-- Start Single testiminail -->
                                                <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                                                    <div class="inner">
                                                        <div class="card-info">
                                                            <div class="card-thumbnail">
                                                                <img src="{{ asset($item->testimonial_image) }}"
                                                                    alt="{{ $item->alt_image }}">
                                                            </div>
                                                            <div class="card-content">
                                                                <span
                                                                    class="subtitle mt--10">{{ $item->testimonial_name }}</span>
                                                                <h3 class="title">{{ $item->testimonial_company }}
                                                                </h3>
                                                                <span
                                                                    class="designation">{{ $item->testimonial_position }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-description">
                                                            <div class="title-area">
                                                                <div class="title-info">
                                                                    <h3 class="title">{{ $item->title }}</h3>
                                                                    <span class="date">via Upwork -
                                                                        {{ $item->from_date_to_date }}
                                                                    </span>
                                                                </div>
                                                                <div class="rating">
                                                                    <img src="{{ asset('frontend/assets/images/icons/rating.png') }}"
                                                                        alt="rating-image">
                                                                    <img src="{{ asset('frontend/assets/images/icons/rating.png') }}"
                                                                        alt="rating-image">
                                                                    <img src="{{ asset('frontend/assets/images/icons/rating.png') }}"
                                                                        alt="rating-image">
                                                                    <img src="{{ asset('frontend/assets/images/icons/rating.png') }}"
                                                                        alt="rating-image">
                                                                    <img src="{{ asset('frontend/assets/images/icons/rating.png') }}"
                                                                        alt="rating-image">
                                                                </div>
                                                            </div>
                                                            <div class="seperator"></div>
                                                            <p class="discription">
                                                                {{ $item->short_description }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Single testiminail -->
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Testimonia Area  -->
                    <!-- Start Client Area -->
                    {{-- ///////////////////////////////////////////////////////////// --}}
                    <!-- End client section -->
                    <!-- Pricing Area -->
                    <div class="rn-pricing-area rn-section-gap section-separator" id="pricing">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-xl-5 mb_md--40 mb_sm--40 small-margin-pricing">
                                    <div
                                        class="d-block d-lg-flex text-center d-lg-left section-flex flex-wrap align-content-start h-100">
                                        <div class="position-sticky sticky-top rbt-sticky-top-adjust">
                                            <div class="section-title text-left">
                                                <span class="subtitle text-center text-lg-left">Pricing</span>
                                                <h2 class="title text-center text-lg-left">My Pricing</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-8 col-xl-7">
                                    <!-- Pricing Area -->
                                    <div class="navigation-wrapper">


                                        <ul class="nav " id="myTab" role="tablist">

                                            @foreach ($PricingPackage as $item)
                                                <li class="nav-item ">
                                                    <a class="nav-style" id="test-tab" data-bs-toggle="tab"
                                                        href="#test{{ $item->id }}" role="tab"
                                                        aria-controls="test"
                                                        aria-selected="false">{{ $item->package_title }}</a>
                                                </li>
                                            @endforeach

                                        </ul>

                                        <div class="tab-content" id="myTabContent">
                                            @foreach ($PricingPackage as $item)
                                                @php
                                                    $package_details = App\Models\PricingPackageDetails::where('package_id', $item->id)->get();
                                                    $chunked_packages = $package_details->chunk(10);

                                                    $array1 = [];
                                                    $array2 = [];

                                                    if ($chunked_packages->count() >= 1) {
                                                        $array1 = $chunked_packages[0]->toArray();
                                                    }

                                                    if ($chunked_packages->count() >= 2) {
                                                        $array2 = $chunked_packages[1]->toArray();
                                                    }
                                                @endphp

                                                <div class="tab-pane fade " id="test{{ $item->id }}"
                                                    role="tabpanel" aria-labelledby="test-tab">
                                                    <!-- Pricing Start -->
                                                    <div class="rn-pricing">
                                                        <div class="pricing-header">
                                                            <div class="header-left">
                                                                <h2 class="title">{{ $item->package_header }}</h2>
                                                                <span>{{ $item->package_title }}</span>
                                                            </div>
                                                            <div class="header-right">
                                                                <span>${{ $item->package_price }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="pricing-body">
                                                            <p class="description">

                                                                {{ $item->package_short_description }}

                                                            </p>
                                                            <div class="check-wrapper">
                                                                <div class="left-area">
                                                                    @if (!empty($array1))
                                                                        @foreach ($array1 as $details_1)
                                                                            <div class="check d-flex">
                                                                                <i data-feather="check"></i>
                                                                                <p>
                                                                                    {{ $details_1['package_feature'] }}
                                                                                </p>
                                                                            </div>
                                                                        @endforeach
                                                                    @endif
                                                                </div>

                                                                <div class="right-area">
                                                                    @if (!empty($array2))
                                                                        @foreach ($array2 as $details_2)
                                                                            <div class="check d-flex">
                                                                                <i data-feather="check"></i>
                                                                                <p>{{ $details_2['package_feature'] }}
                                                                                </p>
                                                                            </div>
                                                                        @endforeach
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="pricing-footer">
                                                            <a href="#" class="rn-btn d-block">
                                                                <span>ORDER NOW</span>
                                                                <i data-feather="arrow-right"></i>
                                                            </a>
                                                            <div class="time-line">
                                                                <div class="single-cmt d-flex">
                                                                    <i data-feather="clock"></i>
                                                                    <span>{{ $item->days_delivery }} Days
                                                                        Delivery</span>
                                                                </div>
                                                                <div class="single-cmt d-flex">
                                                                    <i data-feather="activity"></i>
                                                                    <span>Unlimited Revission</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End -->
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- pricing area -->
                    <!-- Start News Area -->
                    <div class="rn-blog-area rn-section-gap section-separator" id="blog">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100"
                                        data-aos-once="true" class="section-title text-center">
                                        <span class="subtitle">Visit my blog and keep your feedback</span>
                                        <h2 class="title">My Blog</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row row--25 mt--30 mt_md--10 mt_sm--10">
                                @foreach ($blog as $item)
                                    <!-- Start Single blog -->
                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100"
                                        data-aos-once="true"
                                        class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                                        <div class="rn-blog" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenters{{ $item->id }}">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="javascript:void(0)">
                                                        <img src="{{ asset($item->image) }}"
                                                            alt="{{ $item->alt_image }}">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div class="category-info">
                                                        <div class="category-list">
                                                            <a href="javascript:void(0)">{{ $item->small_title }}</a>
                                                        </div>
                                                        <div class="meta">
                                                            <span><i class="feather-clock"></i> 2 min read</span>
                                                        </div>
                                                    </div>
                                                    <h4 class="title"><a
                                                            href="javascript:void(0)">{{ $item->title }}
                                                            <i class="feather-arrow-up-right"></i></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single blog -->
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <!-- ENd Mews Area -->

                    <!-- Start Contact section -->
                    <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title text-center">
                                        <span class="subtitle">Contact</span>
                                        <h2 class="title">Contact With Me</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                                <div class="col-lg-5">
                                    <div class="contact-about-area">
                                        <div class="thumbnail">
                                            <img src="{{ asset($ContactWithMe->image) }}"
                                                alt="{{ $ContactWithMe->alt_image }}">
                                        </div>
                                        <div class="title-area">
                                            <h4 class="title">{{ $ContactWithMe->name }}</h4>
                                            <span>{{ $ContactWithMe->position_job }}</span>
                                        </div>
                                        <div class="description">
                                            <p>{{ $ContactWithMe->short_description }}
                                            </p>

                                            <span class="phone">Phone: <a
                                                    href="tel:{{ $ContactWithMe->first_Phone }}">{{ $ContactWithMe->first_Phone }}</a></span>

                                            @if ($ContactWithMe->second_Phone != null)
                                                <span class="phone">Phone: <a
                                                        href="tel:{{ $ContactWithMe->second_Phone }}">{{ $ContactWithMe->second_Phone }}</a></span>
                                            @endif
                                            <span class="mail">Email: <a
                                                    href="mailto:{{ $ContactWithMe->first_email }}">{{ $ContactWithMe->first_email }}</a></span>
                                            @if ($ContactWithMe->second_email != null)
                                                <span class="mail">Email: <a
                                                        href="mailto:{{ $ContactWithMe->second_email }}">{{ $ContactWithMe->second_email }}</a></span>
                                            @endif



                                        </div>
                                        <div class="social-area">
                                            <div class="name">FIND WITH ME</div>
                                            <div class="social-icone">
                                                @foreach ($SocialMediaFooter as $item)
                                                    <a href="{{ $item->link}}" target="_blank"><i data-feather="{{$item->icon}}"></i></a>

                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-aos-delay="600" class="col-lg-7 contact-input">
                                    <div class="contact-form-wrapper">
                                        <div class="introduce">

                                            <form id="contactForm" class="row" method="POST"
                                                action="{{ route('contact_with_me_form') }}">
                                                @csrf
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="contact-name">Your Name</label>
                                                        <input class="form-control form-control-lg" name="name"
                                                            id="contact-name" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="contact-phone">Phone Number</label>
                                                        <input class="form-control" name="phone" id="contact-phone"
                                                            type="text">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="contact-email">Email</label>
                                                        <input class="form-control form-control-sm" id="contact-email"
                                                            name="email" type="email">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="subject">subject</label>
                                                        <input class="form-control form-control-sm" id="subject"
                                                            name="subject" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="contact-message">Your Message</label>
                                                        <textarea name="message" id="contact-message" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <button name="submit" type="submit" class="rn-btn">
                                                        <span>SEND MESSAGE</span>
                                                        <i data-feather="arrow-right"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Contuct section -->
                    <!-- Modal Portfolio Body area Start -->
                    @if ($MyPortfolio != null)
                        @foreach ($MyPortfolio as $item)
                            <div class="modal fade" id="exampleModalCenter{{ $item->id }}" tabindex="-1"
                                role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i data-feather="x"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row align-items-center">

                                                <div class="col-lg-6">
                                                    <div class="portfolio-popup-thumbnail">
                                                        <div class="image">
                                                            <img class="w-100"
                                                                src="{{ asset($item->inside_image) }}"
                                                                alt="{{ $item->inside_alt_image }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="text-content">
                                                        <h3>
                                                            <span>Featured - Design</span> {{ $item->inside_title }}
                                                        </h3>
                                                        <div class="mb--30" contenteditable="false">
                                                            {!! $item->long_description !!}
                                                        </div>
                                                        <div class="button-group mt--20">
                                                            <a href="{{ url('/') }}" class="rn-btn thumbs-icon">
                                                                <span>LIKE THIS</span>
                                                                <i data-feather="thumbs-up"></i>
                                                            </a>
                                                            <a target="_blank" href=" {{ $item->link }}"
                                                                class="rn-btn">
                                                                <span>VIEW PROJECT</span>
                                                                <i data-feather="chevron-right"></i>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <!-- End of .text-content -->
                                                </div>
                                            </div>
                                            <!-- End of .row Body-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    @endif
                    <!-- End Modal Portfolio area -->
                    @foreach ($blog as $item)
                        <!-- Modal Blog Body area Start -->
                        <div class="modal fade" id="exampleModalCenters{{ $item->id }}" tabindex="-1"
                            role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-news" role="document">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true"><i data-feather="x"></i></span>
                                        </button>
                                    </div>

                                    <!-- End of .modal-header -->

                                    <div class="modal-body">
                                        <img src="{{ asset($item->image) }}" alt="{{ $item->alt_image }}"
                                            class="img-fluid modal-feat-img">
                                        <div class="news-details">
                                            <span class="date">{{ $item->created_date }}</span>
                                            {!! $item->long_description !!}
                                        </div>

                                        <!-- Comment Section Area Start -->
                                        <div class="comment-inner">
                                            <h3 class="title mb--40 mt--50">Leave a Reply</h3>
                                            <form action="{{ route('contact_with_me_form') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <div class="rnform-group"><input name="name" type="text"
                                                                placeholder="Name">
                                                        </div>
                                                        <div class="rnform-group"><input type="email" name="email"
                                                                placeholder="Email">
                                                        </div>
                                                        <div class="rnform-group"><input type="text"
                                                            name="subject"   placeholder="Website">
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <div class="rnform-group">
                                                            <textarea name="message" placeholder="Comment"></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-12">
                                                        <button type="submit" class="rn-btn ">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Comment Section End -->
                                    </div>
                                    <!-- End of .modal-body -->
                                </div>
                            </div>
                        </div>
                        <!-- End Modal Blog area -->
                    @endforeach
                    <!-- Back to  top Start -->
                    <div class="backto-top">
                        <div>
                            <i data-feather="arrow-up"></i>
                        </div>
                    </div>
                    <!-- Back to top end -->
                    <!-- Start Right Demo  -->

                    <!-- End Right Demo  -->

                    <!-- Start Modal Area  -->
                    <div class="demo-modal-area">
                        <div class="wrapper">
                            <div class="close-icon">
                                <button class="demo-close-btn"><span class="feather-x"></span></button>
                            </div>
                            <div class="rn-modal-inner">
                                <div class="demo-top text-center">
                                    <h4 class="title">InBio</h4>
                                    <p class="subtitle">Its a personal portfolio template. You can built any personal
                                        website
                                        easily.</p>
                                </div>
                                <ul class="popuptab-area nav nav-tabs" id="popuptab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active demo-dark" id="demodark-tab" data-bs-toggle="tab"
                                            href="#demodark" role="tab" aria-controls="demodark"
                                            aria-selected="true">Dark Demo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link demo-light" id="demolight-tab" data-bs-toggle="tab"
                                            href="#demolight" role="tab" aria-controls="demolight"
                                            aria-selected="false">Light Demo</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="popuptabContent">
                                    <div class="tab-pane show active" id="demodark" role="tabpanel"
                                        aria-labelledby="demodark-tab">
                                        <div class="content">
                                            <div class="row">

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="index.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/main-demo.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a href="index.html">Main
                                                                        Demo</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner badge-2">
                                                            <div class="thumbnail">
                                                                <a href="index-technician.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/index-technician.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="index-technician.html">Technician</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner badge-2">
                                                            <div class="thumbnail">
                                                                <a href="index-model.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/home-model-v2.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="index-model.html">Model</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner badge-1">
                                                            <div class="thumbnail">
                                                                <a href="home-consulting.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/home-consulting.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="home-consulting.html">Consulting</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner badge-1">
                                                            <div class="thumbnail">
                                                                <a href="fashion-designer.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/fashion-designer.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="fashion-designer.html">Fashion
                                                                        Designer</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="index-developer.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/developer.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="index-developer.html">Developer</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="instructor-fitness.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/instructor-fitness.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="instructor-fitness.html">Fitness
                                                                        Instructor</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->
                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner badge-1">
                                                            <div class="thumbnail">
                                                                <a href="home-web-Developer.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/home-model.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="home-web-Developer.html">Web
                                                                        Developer</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="home-designer.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/home-video.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="home-designer.html">Designer</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="home-content-writer.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/text-rotet.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="home-content-writer.html">Content
                                                                        Writter</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="home-instructor.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/index-boxed.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="home-instructor.html">Instructor</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="home-freelancer.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/home-sticky.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="home-freelancer.html">Freelancer</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="home-photographer.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/index-bg-image.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="home-photographer.html">Photographer</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="index-politician.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/front-end.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="index-politician.html">Politician</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo coming-soon">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="#">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/coming-soon.png') }}"
                                                                        alt="Personal Portfolio">
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a href="#">Accountant</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane" id="demolight" role="tabpanel"
                                        aria-labelledby="demolight-tab">
                                        <div class="content">
                                            <div class="row">

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="index-white-version.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/main-demo-white-version.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="index-white-version.html">Main
                                                                        Demo</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner badge-2">
                                                            <div class="thumbnail">
                                                                <a href="index-technician-white-version.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/index-technician-white-version.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="index-technician-white-version.html">Technician</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner badge-2">
                                                            <div class="thumbnail">
                                                                <a href="index-model-white-version.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/home-model-v2-white.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="index-model-white-version.html">Model</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner badge-1">
                                                            <div class="thumbnail">
                                                                <a href="home-consulting-white-version.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/home-consulting-white-version.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="home-consulting-white-version.html">Consulting</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner badge-1">
                                                            <div class="thumbnail">
                                                                <a href="fashion-designer-white-version.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/fashion-designer-white-version.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="fashion-designer-white-version.html">Fashion
                                                                        Designer</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="index-developer-white-version.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/developer-white-version.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="index-developer-white-version.html">Developer</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->
                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="instructor-fitness-white-version.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/instructor-fitness-white-version.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="instructor-fitness-white-version.html">Fitness
                                                                        Instructor</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->
                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner badge-1">
                                                            <div class="thumbnail">
                                                                <a href="home-web-developer-white-version.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/home-model-white-version.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="home-web-developer-white-version.html">Web
                                                                        Developer</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="home-designer-white-version.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/home-video-white-version.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="home-designer-white-version.html">Designer</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="home-content-writer-white-version.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/text-rotet-white-version.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="home-content-writer-white-version.html">Content
                                                                        Writter</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="home-instructor-white-version.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/index-boxed-white-version.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="home-instructor-white-version.html">Instructor</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="home-freelancer-white-version.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/home-sticky-white-version.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="home-freelancer-white-version.html">Freelancer</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="home-photographer-white-version.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/index-bg-image-white-version.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="home-photographer-white-version.html">Photographer</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="index-politician-white-version.html">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/front-end-white-version.png') }}"
                                                                        alt="Personal Portfolio">
                                                                    <span class="overlay-content">
                                                                        <span class="overlay-text">View Demo <i
                                                                                class="feather-external-link"></i></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a
                                                                        href="index-politician-white-version.html">Politician</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                                <!-- Start Single Content  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="single-demo coming-soon">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="#">
                                                                    <img class="w-100"
                                                                        src="{{ asset('frontend/assets/images/demo/coming-soon.png') }}"
                                                                        alt="Personal Portfolio">
                                                                </a>
                                                            </div>
                                                            <div class="inner">
                                                                <h3 class="title"><a href="#">Accountant</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Content  -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal Area  -->

    </main>
    <!-- Start Footer Area -->
    <div class="rn-footer-area rn-section-gap section-separator">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-area text-center">

                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ asset($WebSiteSetting->logo) }}"
                                    alt="{{ $WebSiteSetting->alt_logo }}">
                            </a>
                        </div>

                        <p class="description mt--30">© @php

                            echo date('Y');
                        @endphp.
                            All rights reserved by <a
                                href="{{ url('/') }}">{{ $WebSiteSetting->copy_right }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Footer Area -->
    <!-- JS ============================================ -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/modernizer.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/feather.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/text-type.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/particles.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-one-page-nav.js') }}"></script>
    <!-- main JS -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>


    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            var message = document.getElementsByName('message')[0].value;
            if (containsJavaScriptCode(message)) {
                alert('The message should not contain JavaScript code.');
                event.preventDefault(); // Prevent form submission
            }
        });

        function containsJavaScriptCode(text) {
            // Custom validation to check for JavaScript code
            var scriptPattern = /<\s*script.*?>.*?<\s*\/\s*script\s*>/i;
            return scriptPattern.test(text);
        }
    </script>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;


                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;


                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;


                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>


</body>

</html>
