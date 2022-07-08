<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- Mirrored from lmpixels.com/demo/breezycv/dark/5/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 May 2022 12:25:47 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CV Yao Kouakou Cedric Parfait</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="BreezyCV - Resume / CV / vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="css/animations.css" type="text/css">
    <link rel="stylesheet" href="css/perfect-scrollbar.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <script src="https://kit.fontawesome.com/9ca3b27b3d.js" crossorigin="anonymous"></script>

    <script src="js/modernizr.custom.js"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles
</head>

<body>
    <!-- Animated Background -->
    <div class="lm-animated-bg" style="background-image: url(img/main_bg.png);"></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="preloader-spinner">
            </div>
        </div>
    </div>
    <!-- /Loading animation -->

    <div class="page">
        <div class="page-content">
            @livewire('header')
            <!-- Mobile Navigation -->
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- End Mobile Navigation -->

            <!-- Arrows Nav -->
            <div class="lmpixels-arrows-nav">
                <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
                <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
            </div>
            <!-- End Arrows Nav -->

            <div class="content-area">
                <div class="animated-sections">
                    <!-- Dashboard Subpage -->
                    <section data-id="home" class="animated-section start-page">
                        @livewire('home')
                    </section>
                    <!-- End of Dashboard Subpage -->

                    <!-- About Me Subpage -->
                    <section data-id="about-me" class="animated-section">
                        @livewire('about')
                        <!-- End of Clients -->
                    </section>
                    <!-- End of About Me Subpage -->

                    <!-- Resume Subpage -->
                    <section data-id="resume" class="animated-section">
                        @livewire('cv')
                    </section>
                    <!-- End of Resume Subpage -->

                    <!-- Portfolio Subpage -->
                    <section data-id="portfolio" class="animated-section">
                        @livewire('realisation')
                    </section>
                    <!-- End of Portfolio Subpage -->


                    <!-- Blog Subpage -->
                    <section data-id="blog" class="animated-section">
                        <div class="page-title">
                            <h2>Distinction</h2>
                        </div>

                        <div class="section-content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="blog-masonry two-columns clearfix">

                                        <!-- Blog Post 1 -->
                                        <div class="item post-1">
                                            <div class="blog-card">
                                                <div class="media-block">
                                                    <div class="category">
                                                        <a href="#" title="View all posts in Design">Design</a>
                                                    </div>
                                                    <a href="blog-post-1.html">
                                                        <img src="img/blog/blog_post_1.jpg"
                                                            class="size-blog-masonry-image-two-c"
                                                            alt="Why I Switched to Sketch For UI Design"
                                                            title="" />
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                                <div class="post-info">
                                                    <div class="post-date">05 Mar 2020</div>
                                                    <a href="blog-post-1.html">
                                                        <h4 class="blog-item-title">Why I Switched to Sketch For UI
                                                            Design
                                                        </h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Blog Post 1 -->

                                        <!-- Blog Post 2 -->
                                        <div class="item post-2">
                                            <div class="blog-card">
                                                <div class="media-block">
                                                    <div class="category">
                                                        <a href="#" title="View all posts in UI">UI</a>
                                                    </div>
                                                    <a href="blog-post-1.html">
                                                        <img src="img/blog/blog_post_2.jpg"
                                                            class="size-blog-masonry-image-two-c"
                                                            alt="Best Practices for Animated Progress Indicators"
                                                            title="" />
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                                <div class="post-info">
                                                    <div class="post-date">23 Feb 2020</div>
                                                    <a href="blog-post-1.html">
                                                        <h4 class="blog-item-title">Best Practices for Animated
                                                            Progress
                                                            Indicators</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Blog Post 2 -->

                                        <!-- Blog Post 3 -->
                                        <div class="item post-1">
                                            <div class="blog-card">
                                                <div class="media-block">
                                                    <div class="category">
                                                        <a href="#" title="View all posts in Design">Design</a>
                                                    </div>
                                                    <a href="blog-post-1.html">
                                                        <img src="img/blog/blog_post_3.jpg"
                                                            class="size-blog-masonry-image-two-c"
                                                            alt="Designing the Perfect Feature Comparison Table"
                                                            title="" />
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                                <div class="post-info">
                                                    <div class="post-date">06 Feb 2020</div>
                                                    <a href="blog-post-1.html">
                                                        <h4 class="blog-item-title">Designing the Perfect Feature
                                                            Comparison Table</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Blog Post 3 -->

                                        <!-- Blog Post 4 -->
                                        <div class="item post-2">
                                            <div class="blog-card">
                                                <div class="media-block">
                                                    <div class="category">
                                                        <a href="#" title="View all posts in E-Commerce">UI</a>
                                                    </div>
                                                    <a href="blog-post-1.html">
                                                        <img src="img/blog/blog_post_4.jpg"
                                                            class="size-blog-masonry-image-two-c"
                                                            alt="An Overview of E-Commerce Platforms"
                                                            title="" />
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                                <div class="post-info">
                                                    <div class="post-date">07 Jan 2020</div>
                                                    <a href="blog-post-1.html">
                                                        <h4 class="blog-item-title">An Overview of E-Commerce Platforms
                                                        </h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Blog Post 4 -->
                                    </div>
                                </div>
                            </div>
                        </div>


                    </section>
                    <!-- End of Blog Subpage -->

                    <!-- Contact Subpage -->
                    @livewire('contact')
                    <!-- End of Contact Subpage -->
                </div>
            </div>

        </div>
    </div>

    @stack('modals')

    @livewireScripts

    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/animating.js"></script>

    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src='../../../../../www.google.com/recaptcha/api.js'></script>

    <script src='js/perfect-scrollbar.min.js'></script>
    <script src='js/jquery.shuffle.min.js'></script>
    <script src='js/masonry.pkgd.min.js'></script>
    <script src='js/owl.carousel.min.js'></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/validator.js"></script>
    <script src="js/main.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"70ab60fff8b43a69","version":"2021.12.0","r":1,"token":"94b99c0576dc45bf9d669fb5e9256829","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from lmpixels.com/demo/breezycv/dark/5/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 May 2022 12:26:09 GMT -->

</html>
