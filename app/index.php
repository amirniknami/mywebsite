

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- google fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <!-- font-awesome  -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
    <!-- load stylesheets  -->
    <link rel="stylesheet" href="css/app.css">
    <title>Welcome to Amir Niknami's Website</title>
</head>

<body>

    <header>
        <nav class="mobile-nav js--mobile-nav">
            <ul>
                <li class="nav-bar-item"><a><span class="fa fa-home"></span>Home</a>
                    <p>click to go to the home page of the site</p>
                </li>
                <li class="nav-bar-item"><a class="js--scroll-to-about"><span class="fa fa-user-circle"></span>About</a>
                    <p>click to go to about section</p>
                </li>
                <li class="nav-bar-item"><a class="js--scroll-to-resume"><span class="fa fa-info-circle"></span>Resume</a>
                    <p>click to go to resume section</p>
                </li>
                <li class="nav-bar-item"><a class="js--scroll-to-portfolio"><span class="fa fa-folder"></span>Portfolio</a>
                    <p>click to go to portfolio section</p>
                </li>
                <li class="nav-bar-item">
                    <a style="text-decoration:none;" href="http://blog.amirniknami.info"> <span class="fa fa-edit"></span>Blog</a>
                    <p>click to read my blog posts</p>
                </li>
                <li class="nav-bar-item">
                    <a class="js--scroll-to-contact"> <span class="fa fa-envelope"></span>contact</a>
                    <p>click to go to contact section</p>
                </li>
            </ul>
        </nav>
        <!-- end-mobile-nav  -->
        <div class="top-header js--header">
            <img src="img/logo.png" alt="logo">
            <nav class="top-nav ">
                <ul class="nav-bar">
                    <li class="nav-bar-item"><a><span class="fa fa-home"></span>Home</a></li>
                    <li class="nav-bar-item"><a class="js--scroll-to-about"><span class="fa fa-user-circle"></span>About</a></li>
                    <li class="nav-bar-item"><a class="js--scroll-to-resume"><span class="fa fa-info-circle"></span>Resume</a></li>
                    <li class="nav-bar-item"><a class="js--scroll-to-portfolio"><span class="fa fa-folder"></span>Portfolio</a></li>
                    <li class="nav-bar-item">
                        <a style="text-decoration:none;" href="http://blog.amirniknami.info"> <span class="fa fa-edit"></span>Blog</a>
                    </li>
                    <li id="js--header-contact-btn" class="nav-bar-item">
                        <a class="js--scroll-to-contact"> <span class="fa fa-envelope"></span>contact</a>
                    </li>
                </ul>
            </nav>
        <p class="mobile-menu"><a class=" js--mobile-menu" href="#"><i class="fa fa-bars"></i></a></p>
        </div>
        <!-- end top-header -->
        <div class="header-content">
            <p>I am interested in Web Development and playing Guitar</p>
            <div class="header-btn">
                <a id="about-btn" class="js--scroll-to-about" href="#"> <span class="fa fa-user-circle"></span>About Me</a>
                <a id="contact-btn" class="js--scroll-to-contact" href="#"> <span class="fa fa-envelope"></span>Contact</a>
            </div>
        </div>
        <!-- end header-content  -->
    </header>

    <section id="about" class="section js--section-about">

        <h2 class="section-title">Brief Introduction About Me</h2>

        <div class="description">
            <img class="js--about-img" src="img/me.jpg" alt="Amir Niknami">
            <p>My name is Amir Niknami . I am a computer expert actually I am expert at Web Development – Also I am interested
                in Guitar and my hobbies is watching movies and listening to music and doing exercise.
                 i am front-end and backend developement in briefe i am full stack web developer. lately I got into
                the writing and maybe someday I'll be a great writer.who knows!
            </p>
        </div>
        <!-- end description  -->
    </section>
    <!-- end-section about  -->

    <section id="resume" class="section js--section-resume">

        <h2>My Resume</h2>

        <div class="flex-container">

            <div class="card-resume js--card-resume">
                <div class="card-header">
                    <p>Front-end</p>
                    <h3>Html5 & Css3</h3>
                    <div class="rating">
                        <span class="star">☆</span ><span  class="star" >☆</span><span class="star">☆</span><span class="star">☆</span><span>☆</span></div>
                </div>
                <p>Html5 and Css3 are the fundemental of web you could not be a web Developer without knowing them</p>
            </div>
            <!-- end card-resume  -->
            <div class="card-resume js--card-resume">
                <div class="card-header">
                    <p>Front-end</p>
                    <h3>Javascript & JQuery</h3>
                    <div class="rating">
                        <span class="star">☆</span ><span  class="star" >☆</span><span class="star">☆</span><span class="star">☆</span><span>☆</span></div>
                </div>
                <p>Javascript is the program that add interactivity to the websites. as a web Developer i could not ignore it
                    at all</p>
            </div>
            <!-- end card-resume  -->
            <div class="card-resume js--card-resume">
                <div class="card-header">
                    <p>Front-end</p>
                    <h3>wordpress theme</h3>
                    <div class="rating">
                        <span class="star">☆</span ><span  class="star" >☆</span><span class="star">☆</span><span>☆</span><span>☆</span></div>
                </div>
                <p>wordpress is the best cms available . it's totally important to know how to make and develope a wordpress
                    theme from srach
                </p>
            </div>
            <!-- end card-resume  -->
            <div class="card-resume js--card-resume">
                <div class="card-header">
                    <p>Front-end</p>
                    <h3>Responsive Design</h3>
                    <div class="rating">
                        <span class="star">☆</span ><span  class="star" >☆</span><span class="star">☆</span><span class="star">☆</span><span>☆</span></div>
                </div>
                <p>today most of the incomer to your site are comming from mobile device . so having a site that look good on
                    any device is vital</p>
            </div>
            <!-- end card-resume  -->
            <div class="card-resume js--card-resume">
                <div class="card-header">
                    <p>Front-end</p>
                    <h3>vue js & React js </h3>
                    <div class="rating">
                        <span class="star">☆</span ><span  class="star" >☆</span><span class="star">☆</span><span>☆</span><span>☆</span></div>
                </div>
                <p>Single page web application are the essential part of web . because nowadays people are doing their most
                    job with Web Application</p>
            </div>
            <!-- end card-resume  -->
            <div class="card-resume js--card-resume">
                <div class="card-header">
                    <p>Front-end</p>
                    <h3>Sass and Webpack</h3>
                    <div class="rating">
                        <span class="star">☆</span ><span  class="star" >☆</span><span class="star">☆</span><span>☆</span><span>☆</span></div>
                </div>
                <p>managing asset and clear code are the most basic of any programming.workig with these two are making your
                    coding fast
                </p>
            </div>
            <!-- end card-resume  -->
            <div class="card-resume js--card-resume">
                <div class="card-header">
                    <p>Back-end</p>
                    <h3>PHP & Laravel</h3>
                    <div class="rating">
                        <span class="star">☆</span ><span  class="star" >☆</span><span class="star">☆</span><span class="star">☆</span><span>☆</span></div>
                </div>
                <p>I started my career as a web developer with php and its famous framework. I love laravel it's so simple and
                    powerful</p>
            </div>
            <!-- end card-resume  -->
            <div class="card-resume js--card-resume">
                <div class="card-header">
                    <p>Back-end</p>
                    <h3>node js & express</h3>
                    <div class="rating">
                        <span class="star">☆</span ><span  class="star" >☆</span><span class="star">☆</span><span>☆</span><span>☆</span></div>
                </div>
                <p>node js is the trending technology today . it is so powerful for building restful Web Services and Web applications</p>
            </div>
            <!-- end card-resume  -->
            <div class="card-resume js--card-resume">
                <div class="card-header">
                    <p>Back-end</p>
                    <h3>SQL & NOSQL</h3>
                    <div class="rating">
                        <span class="star">☆</span ><span  class="star" >☆</span><span class="star">☆</span><span>☆</span><span>☆</span></div>
                </div>
                <p>these are the databases of the web . both have benefit and drawback . i use sql for php and nosql for nodejs
                    web application
                </p>
            </div>
            <!-- end card-resume  -->
        </div>
        <!-- end flex-container  -->
    </section>
    <!-- end section resume  -->
    <section id="portfolio" class="section js--section-portfolio">
        <h2 class="js--portfolio-title">portfolio</h2>

        <div class="flex-container">

            <div class="card-portfolio">
                <img data-src="img/ibevents.png" alt="ibevents">
                <noscript>
                    <img src="img/ibevents.png" />
                </noscript>
                <h3><a href="http://ibevents.co.uk">ibevents</a></h3>
                <p>Ibevents was the first site that i created . i actually created it with the help of template . but it is
                    fully responsive and beautiful</p>
                <a class="card-link" href="http://ibevents.co.uk">visit <span class="fa fa-arrow-right"></span> </a>
            </div>
            <!-- end card-portfolio  -->
            <div class="card-portfolio">
                <img data-src="img/moshavers.png" alt="ibevents">
                <noscript>
                    <img src="img/moshavers.png" />
                </noscript>
                <h3><a href="http://moshavers.com">moshavers</a></h3>
                <p>moshavers was the second part of my job . it is well designed and designed with reposivity in mind and it
                    was developed from scratch</p>
                <a class="card-link" href="http://moshavers.com">visit <span class="fa fa-arrow-right"></span> </a>
            </div>
            <!-- end card-portfolio  -->
            <div class="card-portfolio">
                <img data-src="img/autobar.png" alt="ibevents">
                <noscript>
                    <img src="img/autobar.png" />
                </noscript>
                <h3><a href="#">autobardolat</a></h3>
                <p>autobar dolat was the third project that fully developed by me .it was actually a web application.unfortunately
                    it is down ow</p>
                <a class="card-link" href="#">visit <span class="fa fa-arrow-right"></span></a>
            </div>
            <!-- end card-portfolio  -->
        </div>
        <!-- end flex-container  -->
    </section>
    <!-- end section portfolio  -->
    <section id="contact" class="section js--section-contact">

        <h2>Contact</h2>

        <div class="flex-container">

            <form method="post" action="mail.php">

                <div class="form-group">
                    <label for="name"><span class="fa fa-user"></span> Name</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <!-- end form-group  -->
                <div class="form-group">
                    <label for="name"> <span class="fa fa-envelope"></span> Email</label>
                    <input name="email" type="text" class="form-control">
                </div>
                <!-- end form-group  -->
                <div class="form-group">
                    <label for="name"> <span class="fa fa-newspaper-o"></span>Newsletter</label>
                    <div class="checkboxThree">
                        <input checked type="checkbox" value="1" id="checkboxThreeInput" name="" />
                        <label for="checkboxThreeInput"></label>
                    </div>
                </div>
                <!-- end form-group  -->
                <div class="form-group">
                    <label for="name"> <span class="fa fa-pencil-square-o"></span> Message</label>
                    <textarea rows="5" name="message" type="text" class="form-control"></textarea>
                </div>
                <!-- end form-group  -->
                <div class="form-group">
                    <label for=""></label>
                    <button class="btn-form">Send</button>
                </div>
                <!-- end form-group  -->
            </form>

        </div>
        <!-- end flex-container  -->
    </section>
    <!-- end section contact  -->
    <footer>

        <div class="footer-container">

            <div class="newsletter">
                <input class="newsletter-input" type="text" name="newsletter"><button class="btn-footer">Subscribe</button>
            </div>
            <!-- end footer-nav  -->
            <ul class="social-links">
                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-github"></span></a></li>
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                <li><a href="#"><span class="fa fa-telegram"></span></a></li>
            </ul>
            <!-- end social links  -->
        </div>
        <!-- end footer-container  -->
        <p class="copyright">All right Reserved For Nweb Company &copy; 2017</p>

    </footer>
    <!-- Scripts  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.waypoints.js"></script>
    <script src="js/unveil.js"></script>
    <script src="js/app.js"></script>
     <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-100872336-1', 'auto');
          ga('send', 'pageview');
</script>
</body>

</html>
