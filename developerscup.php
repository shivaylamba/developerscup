<?php include("header.php");?>
    <main>

        <!-- ./Page header -->
        <header class="header section parallax image-background overlay gradient gradient-53 alpha-8 color-1" style="background-image: url('img/bg/grid.jpg')">
            <div class="container overflow-hidden">
                <div class="row">
                    <div class="col-md-8">
                        <p class="lead bold">Welcome Students!</p>
                        <h1 class="display-4 color-1 light">Welcome to the biggest coding competition in India : Developers Cup!</h1>
                        <nav class="nav mt-5"><a href="developers.html#" class="nav-link btn btn btn-rounded btn-1 btn-lg px-5 bold">Register for Developers Cup</a></nav>
                    </div>
                </div>
            </div>
        </header><!-- ./ New Integration API -->
        <section class="section bg-5">
            <div class="container text-center pt-4 pb-7">
                <p class="color-1">We're proud to announce the DevelopHowTo Student Internship Program. <a href="https://5studios.net/themes/dashcore/blog-post.html" class="bold d-inline-flex align-items-center color-1 ml-3">Learn more <i class="pe pe-7s-angle-right"></i></a></p>
            </div>
        </section><!-- ./Integration API -->
        <section class="section mt-6n">
            <center>
            <div class="container pt-0">
                <div class="shadow bg-1 p-4 rounded">
                    <div class="row gap-y text-center text-md-left">
                        <div class="col-md-4 py-4 px-5 d-flex flex-column b-md-r"><a href="javascript:void(0)" class="color-5">
                                <h4 class="bold mr-3">What is Developers Cup?</h4>
                            </a>
                            <p class="mt-4">Developers Cup is one of the largest coding competition in India. Targetting the college students, it provides students chance to test their coding skills.</p>
                        </div>
                        <div class="col-md-4 py-4 px-5 d-flex flex-column b-md-r"><a href="javascript:void(0)" class="color-5">
                                <h4 class="bold mr-3">Why Developers Cup?</h4>
                            </a>
                            <p class="mt-4">Get to solve the types of questions asked in interviews in all the biggest tech giants of the world. Also gain chances of securing internship with DevelopHowTo!</p>
                        </div>
                         <div class="col-md-4 py-4 px-5 d-flex flex-column b-md-r"><a href="javascript:void(0)" class="color-5">
                                <h4 class="bold mr-3">How to register for Developers Cup?</h4>
                            </a>
                            <p class="mt-4">If you are a representative of your college programming club, and interested to increase coding culture in your college, then come register and work with us!</p>
                        </div>
                      
                    </div>
                </div>
            </div>
            </center>
        </section><!-- ./Counters -->
        
        
        <section class="singl-testimonial shadow">
            <div class="container-fluid py-0">
                <div class="row align-items-center gradient gradient-54 color-1">
                    <div class="col-md-3 mx-auto py-4 py-md-0">
                        <p class="text-uppercase mb-0 badge badge-1">Register Now</p>
                        <p class="font-md bold mt-1 color-1" style="font-family: 'Satisfy', cursive; font-size:20%;">Developers Cup</p>
                        <p class="font-md bold mt-1 color-1" style="font-family: 'Vidaloka', serif;">DevelopHowto is hosting its first Developers Cup in India for College Students.</p>
                        <a href="cs.html" style="font-color:#fff;">Learn More</a>
                        <hr class="my-4">
                        <div class="small color-1"><span class="bold d-block">DevelopHowto.inc Team,</span>© 2018</div>
                    </div>
                    <div class="col-12 col-md-7 image-background cover" style="background-image: url(img/testimonials/3.jpg);"></div>
                </div>
            </div>
        </section><!-- ./Features - hover animated -->
        <section class="section b-b b-t bg-6">
            <div class="container">
                <div class="section-heading text-center"><i class="pe pe-7s-box2 accent pe-3x"></i>
                    <h2>Online Code Compiler</h2>
                    <p class="lead color-2">DevelopHowTo Devtools provides an immersive experience with a built in compiler for all the popular languages which are used in competitive programming to help you while you write solutions to the questions asked!</p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-3 ml-lg-auto order-md-2">
                        <nav id="sw-nav-developers" class="nav flex-md-column justify-content-between justify-content-md-start nav-pills nav-pills-light nav-fill"><a class="nav-item nav-link bold text-md-left active" href="developers.html#" data-step="1"><i class="icon fas fa-code"></i> HTML Structure</a> <a class="nav-item nav-link bold text-md-left" href="developers.html#" data-step="2"><i class="icon fab fa-sass"></i> SASS compiler</a> <a class="nav-item nav-link bold text-md-left" href="developers.html#" data-step="3"><i class="icon fas fa-retweet fa-rotate-90"></i> Ajax enabled</a> <a class="nav-item nav-link bold text-md-left" href="developers.html#" data-step="4"><i class="icon fas fa-exclamation-triangle"></i> Form validation</a></nav>
                        <hr class="mt-5"><a href="javascript:;" class="nav-link accent">Checkout the  online IDE <i class="icon fas fa-long-arrow-alt-right"></i></a>
                    </div>
                    <div class="col-md-8">
                        <div class="swiper-container mt-4 mt-md-0" data-sw-navigation="#sw-nav-developers">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <pre class="prettyprint lang-html linenums=10">
&lt;header class="main-header"&gt;
    ...
&lt;/header&gt;

&lt;div class="main-body"&gt;
    &lt;nav class="side-nav"&gt;
        ...
    &lt;/div&gt;

    &lt;main&gt;
        ...
    &lt;/main&gt;

    &lt;aside class="quick-view"&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;

&lt;footer class="main-footer"&gt;
    ...
&lt;/footer&gt;
                </pre>
                                </div>
                                <div class="swiper-slide">
                                    <pre class="prettyprint lang-js linenums">
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function () {
    return gulp
        .src('../sass/*.scss')
        .pipe(sass({
            includePaths: ['./bower_components']
        }))
        .pipe(autoprefixer({
            browsers: ['last 2 version', '> 5%']
        }))
        .pipe(gulp.dest('./css'));
});

gulp.task('default', ['scss']);
            </pre>
                                </div>
                                <div class="swiper-slide">
                                    <pre class="prettyprint lang-js linenums">
var apiUrl = 'https://api.5studios.net/';

this.getLoggedUser = function() {
    return $.ajax({
        url: apiUrl + 'user/login?inc=name,location,email,picture',
        dataType: 'json'
    });
};

this.getPendingTasks = function () {
    return $.getJSON(apiUrl + 'data/tasks/pending', function() {
        console.log("Tasks loaded");
    });
};
                            </pre>
                                </div>
                                <div class="swiper-slide">
                                    <pre class="prettyprint lang-js linenums">
$("#register-form").validate({
  rules: {
    username: {
      required: true,
      minLength: 2,
      remote: "register.php"
    }
  },
  messages: {
    username: {
      required: "Enter your username",
      minLength: "At least 2 characters are necessary",
      remote: String.format("The name {0} is already in use")
    }
  }
});
                            </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- ./Integration tools -->
        <section class="section">
            <div class="shape-wrapper"><img src="img/shps/shape-2.svg" class="shape-right" alt="..."></div>
            <div class="container bring-to-front">
                <div class="row gap-y align-items-center">
                    <div class="col-12 col-md-5 col-lg-5 mr-md-auto text-center text-lg-left"><i class="pe pe-7s-plugin accent pe-3x"></i>
                        <p class="small accent bold">Types of questions asked!</p>
                        <h2 class="bold">Get to know what can you expect inside the Developers Cup</h2>
                        <p class="color-2">Learn how to tackle problems asked in major enterprises/companies. </p>
                    </div>
                    <div class="col-12 col-md-7 col-lg-6">
                        <div class="row gap-y">
                            <div class="col-6 col-sm-5 col-md-6 col-lg-5 mt-6 ml-lg-auto">
                                <div class="bg-3-gradient rounded color-1 p-2 p-sm-4 shadow text-center" data-aos="fade-up"><img src="img/logos/5.svg" class="img-responsive op-5 px-0 px-sm-4" alt="...">
                                    <p class="bold mt-5">Competitive Questions</p>
                                    <p class="op-5 small">Coding questions asked in major companies.</p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-5 col-md-6 col-lg-5 mr-lg-auto">
                                <div class="bg-4-gradient rounded color-1 p-2 p-sm-4 shadow text-center" data-aos="fade-up"><img src="img/logos/software.svg" class="img-responsive op-5 px-0 px-sm-4" alt="...">
                                    <p class="bold mt-5">Theory CS questions</p>
                                    <p class="op-5 small">Various theory questions from OS, Networking, DBMS asked in all major companies.</p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-5 col-md-6 col-lg-5 ml-lg-auto">
                                <div class="bg-danger rounded color-1 p-2 p-sm-4 shadow text-center" data-aos="fade-up"><img src="img/logos/educational-video.svg" class="img-responsive op-5 px-0 px-sm-4" alt="...">
                                    <p class="bold mt-5">Tutorials</p>
                                    <p class="op-5 small">Tutorials on various DS/Algo, before attempting the tests!</p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-5 col-md-6 col-lg-5 mt-6n mr-lg-auto">
                                <div class="bg-info rounded color-1 p-2 p-sm-4 shadow text-center" data-aos="fade-up"><img src="img/logos/hired.svg" class="img-responsive op-5 px-0 px-sm-4" alt="...">
                                    <p class="bold mt-5">Real Time Scores</p>
                                    <p class="op-5 small">Compare your test scores with all participants from across the country, to see how you stack up against others!</p><
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- ./Brands -->
        <section class="section bg-6">
            <div class="container">
                <h4 class="bold text-center mb-5 color-2">Powered By</h4>
                <div class="row gap-y">
                    <div class="col-md-3 col-xs-4 col-6 px-md-5"><img src="img/logos/github.png" alt="Github" class="img-responsive mx-auto op-7" style="max-height: 140px; margin-top:20px;"></div>
                    <div class="col-md-3 col-xs-4 col-6 px-md-5"><img src="img/logos/aws-logo.png" alt="Amazon Web Services" class="img-responsive mx-auto op-7" style="max-height: 100px"></div>
                    <div class="col-md-3 col-xs-4 col-6 px-md-5"><img src="img/logos/Blockchain-logo.png" alt="Block Chain" class="img-responsive mx-auto op-7" style="max-height: 130px; margin-top:-10px;"></div>
                    <div class="col-md-3 col-xs-4 col-6 px-md-5"><img src="img/logos/nurel.png" alt="Neurel Network" class="img-responsive mx-auto op-7" style="max-height: 100px"></div>
                </div>
            </div>
        </section><!-- ./Join - As Developer/Designer -->
        <section class="section bg-6">
            <div class="container bring-to-front py-0">
                <div class="shadow bg-1 p-5 rounded">
                    <div class="row gap-y align-items-center text-center text-lg-left">
                        <div class="col-12 col-md-6 py-4 px-5 b-md-r"><i class="pe pe-7s-diamond pe-3x color-3"></i> <a target="_blank" href="https://acquirehowto.com" class="mt-4 color-3 d-flex align-items-center">
                                <h4 class="mr-3">Visit AcquireHowTo</h4><i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                            <p class="mt-4">AcquireHowTo is your guide on the Web. Search, Browse and Discover the best knowledge of things across the web using the largest develop yourself articles index on the web. Watch the best online instructions, tutorials for free. Have your own Article? Submit them to share with the world.</p>
                        </div>
                        <div class="col-12 col-md-6 py-4 px-5"><i class="pe pe-7s-science pe-3x color-4"></i> <a href="javascript:void(0)" class="mt-4 color-4 d-flex aslign-items-center">
                                <h4 class="mr-3">Join as Developer</h4><i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                            <p class="mt-4">Join us as one of our developer and start changing the world together.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- ./CTA - Create Account -->
        <section class="section bg-1 edge top-left b-b">
            <div class="container pt-5">
                <div class="d-flex align-items-center flex-column flex-md-row">
                    <div class="text-center text-md-left">
                        <p class="light mb-0 accent lead">Ready to get started?</p>
                        <h2 class="mt-0">Get Engage in one of the courses now</h2>
                    </div><a href="register.html" class="btn btn-accent btn-rounded mt-3 mt-md-0 ml-md-auto">Join Now</a>
                </div>
            </div>
        </section>
    </main>
<?php include("footer.php");?>