<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache" />

    <title>HOME - thefogandwave.com - G.W. Latimer</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="./dist/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./dist/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./dist/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./dist/img/ico/apple-touch-icon-57-precomposed.png">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href="/dist/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/lib/bootstrap-4.3.min.css">
    <link href="/lib/flexSlider/flexslider.css" rel="stylesheet">
    <link href="/dist/css/gwlatimer.min.css" rel="stylesheet">
    <link href="/dist/css/gwlatimer-components.min.css" rel="stylesheet">

</head>

<body id="top" data-spy="scroll" data-target="#materialize-menu" data-offset="100">
    <div class="topwrap">
        <header id="header" class="tt-nav">
            <?php include '../sitewide/top-nav.php'; ?>
        </header>
        <hr />

        <section id="home" class="padding-top-100 padding-bottom-50 banner-5">
            Hero

        </section>
        <hr class="ftr" />
        <section id="testimonials" class="padding-top-110 section-padding wow fadeInUp"
            data-stellar-background-ratio="0.5">
            <?php include 'inc/reviews.php'; ?>
        </section>
        <hr />
        <section id="perfection-slider" class="padding-top-100 padding-bottom-50 banner-5">
            <div class="container">
                <div class="flexslider wow fadeInDown">
                    <ul class="slides">
                        <li class="back-slider1"><br />&nbsp;<br />
                            <span class="slider1">"All of life's perfections...</span>
                        </li>
                        <li class="back-slider3"><br />&nbsp;<br />
                            <span class="slider2">distilled to its finest hour...</span>
                        </li>
                        <li class="back-slider4"><br />&nbsp;<br />
                            <span class="slider3">...is now"</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <hr />
        <section id="about" class="section-padding banner-6 parallax-bg bg-fixed overlay">
            <?php include './inc/about.php'; ?>
        </section>
        <hr />
        <section id="writer-teacher" class="section-padding">
            <?php include './inc/writer.php'; ?>
        </section>
        <hr />
        <section id="blog" class="section-padding banner-10 parallax-bg bg-fixed overlay"
            data-stellar-background-ratio="0.5">
            blog
        </section>
        <hr />

        <section id="contact" class="section-padding contact-form-wrapper">
            Reach Out
        </section>
        <hr />

        <section class="footer">
            <?php include '../sitewide/footer.php'; ?>

        </section>

        <div class="secondary-footer">
            <div class="container">
                <span class="copy-text">Copyright &copy; 2020 <a href="#">gwlatimer.com</a> &nbsp; | &nbsp; All
                    Rights Reserved &nbsp; | &nbsp; Built From Scratch By <a href="#">UI Design
                        Engineering</a></span>

            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
    <script src="/lib/bootstrap-4.3.min.js"></script>
    <script src="/lib/popper.min.js"></script>
    <script src="/lib/menuzord.js"></script>
    <script src="/lib/smooth-menu.min.js"></script>
    <script src="/lib/bootstrap-tabcollapse.min.js"></script>
    <script src="/lib/jquery.easing.min.js"></script>
    <script src="/lib/wow.min.js"></script>
    <script src="/lib/flexSlider/jquery.flexslider-min.js"></script>

    <script src="/dist/js/gwlatimer.min.js"></script>
    <script>
    new WOW({
        mobile: false
    }).init();
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: false
        });
    });
    </script>

</body>

</html>