<?php
session_start();
if (isset($_POST['submit'])) {

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbname = "hakethon";

    $connection = new mysqli($serverName, $userName,  $password, $dbname);

    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];
    $query = "INSERT INTO user (fullname,email,password,role) VALUES ('$username','$email','$pass','$role')";
    //  echo $query;
    $query_run = mysqli_query($connection, $query);
    $_SESSION["email"] = $email;
    //  if($query_run)
    //  {
    //      echo "Data inserted into Database";
    //  }
    //  else{
    //      echo "Data is not inserted";
    //  }
    if ($role == 'investor') {
        header('location: investor2.php');
    } else {
        header('location: entrepreneur2.php');
    }
}
if (isset($_POST['sub_inv'])) {
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbname = "hakethon";

    $connection = new mysqli($serverName, $userName,  $password, $dbname);

    $dob = $_POST['dob'];
    $companyname = $_POST['companyname'];
    $position = $_POST['position'];
    $amount = $_POST['amount'];
    $phone = $_POST['phone'];
    $startup = $_POST['startup'];
    $query = "INSERT INTO investor (dob,companyname,position,amount,contact,invest) VALUES ('$dob','$companyname','$position','$amount','$phone','$startup')";
    //  echo $query;
    $query_run = mysqli_query($connection, $query);
    //  if($query_run)
    //  {
    //      echo "Data inserted into Database";
    //  }
    //  else{
    //      echo "Data is not inserted";
    //  }
}
if (isset($_POST['save'])) {
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbname = "hakethon";

    $connection = new mysqli($serverName, $userName,  $password, $dbname);

    $dob = $_POST['dob'];
    $email = $_SESSION["email"];
    $companyname = $_POST['companyname'];
    $verified = $_POST['verified'];
    $productname = $_POST['productname'];
    $bio = $_POST['bio'];
    $phone = $_POST['phone'];
    $query = "INSERT INTO entrepreneur (dob,email,companyname,verified,productname,description,phone) VALUES ('$dob','$email','$companyname','$verified','$productname','$bio','$phone')";
    //  echo $query;
    $query_run = mysqli_query($connection, $query);
    //  if($query_run)
    //  {
    //      echo "Data inserted into Database";
    //  }
    //  else{
    //      echo "Data is not inserted";
    //  }
}
// echo strlen($_SESSION['email']);
if (strlen($_SESSION['email']) == 0) {
    header('location:homepage.html');
}
?>
<!DOCTYPE html>

<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <title>Upper Deck</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="FlameOnePage freebie theme for web startups by FairTech SEO." name="description" />
    <meta content="FairTech" name="author" />
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet">
    <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css" />
    <link href="css/layout.min.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" />
    <script>
        function test() {
            window.location.href = 'logOut.php'
            $.ajax({
                url: "logOut.php",
            })
        }
    </script>
</head>


<body id="body" data-spy="scroll" data-target=".header">

    <header class="header navbar-fixed-top">
        <nav class="navbar" role="navigation">
            <div class="container">
                <div class="menu-container js_nav-item">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon"></span>
                    </button>

                    <div class="logo">
                        <a class="logo-wrap" href="#body">
                            <img class="logo-img logo-img-main" src="img/logo.png" alt="Upper Deck Logo">
                            <img class="logo-img logo-img-active" src="img/logo-dark.png" alt="Upper Deck Dark Logo">
                        </a>
                    </div>
                </div>

                <div class="collapse navbar-collapse nav-collapse">
                    <div class="menu-container">
                        <ul class="nav navbar-nav navbar-nav-right">
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">Home</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#startups">Our Startups</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#services">Services</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#innovations">Innovations</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#investors">Investors</a></li>
                            <li class="js_nav-item nav-item" class="nav-item-child nav-item-hover" onclick="test()">logout</li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="container">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>
        </div>

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive" src="img/1920x1080/03.jpg" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h1 class="carousel-title" style="color: black;">Creative Innovations!</h1>
                            <p style="color: black;"><b>A place where you can come with your ideas and innovations for your
                                    startups that will kick start your creativity into reality.</b><br /> </p>
                        </div>
                        <a href="#products" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Have A Look!</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="img/1920x1080/04.jpg" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h2 class="carousel-title" style="color: black;">Great Investors!</h2>
                            <p style="color: black;"><b>Investors with great ability in a given activity: Adept, Expert,
                                    Hotshots, Wizards. </b><br /></p>
                        </div>
                        <a href="#about" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Have A Look!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========== SLIDER ==========-->

    <!--========== PAGE LAYOUT ==========-->
    <!-- Startups -->
    <div id="startups">
        <div class="content-lg container">
            <!-- Masonry Grid -->
            <div class="masonry-grid row">
                <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 sm-margin-b-30">
                    <div class="margin-b-60">
                        <h2>Scrub Daddy</h2>
                        <p>A reusable super sponge in the shape of a smiley face that gets firm in water and has also
                            been lab-tested to rinse clear of debris and resist odors for up to two weeks—the ergonomic
                            shape is designed to clean both sides of kitchen utensils at once.</p>
                    </div>
                    <img class="full-width img-responsive wow fadeInUp" src="img/500x500/01.jpg" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".2s">
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                    <div class="margin-b-60">
                        <h2>Bombas</h2>
                        <p>Comfort socks and more recently T-shirts too—for every item purchased, the company donates an
                            item to organizations that help homeless people—it has donated more than 50 million items to
                            more than 3,500 community organizations to date.</p>
                    </div>
                    <img class="full-width img-responsive wow fadeInUp" src="img/500x500/02.jpg" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".3s">
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                    <div class="margin-t-60 margin-b-60">
                        <h2>Bala Bangles</h2>
                        <p>It is a wearable weights company based in Los Angeles. Their wearable weights were designed
                            to add resistance to your workout in their first collection. They could either be worn on
                            ankles or wrists during an exercise or recreational activity.</p>
                    </div>
                    <img class="full-width img-responsive wow fadeInUp" src="img/500x500/03.jpg" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".4s">
                </div>
            </div>
            <!-- End Masonry Grid -->
        </div>

        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 md-margin-b-60">
                        <div class="margin-t-50 margin-b-30">
                            <h2>Why Us?</h2>
                            <p>We take time to figure out potential investors and what they are looking for. Our sites
                                are built to get leads. We are always learning and we follow the latest conversion
                                research to built a platform where innovations turn into reality. Our professional team
                                of designers and developers know the industry and are highly skilled - not just in
                                website design, but also in current trends, user experience and acccessibility. Our
                                proven approach is flexible, affordable and backed by the service and support you need
                                to be successful in today's dynamic marketplace.</p>
                        </div>
                        <a href="#services" class="btn-theme btn-theme-sm btn-white-bg text-uppercase">More...</a>
                    </div>
                    <div class="col-md-5 col-sm-7 col-md-offset-2">
                        <!-- Accordion -->
                        <div class="accordion">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a class="panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Expert Research
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            Experts having a close look and analysing the products that are relevant and
                                            provides ideas that a investor is looking for.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Kickstart Your Innovations
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            There is a growing emphasis on independence, creativity and free thought,
                                            meaning that Entrepreneurs are realizing that they have something worthwhile
                                            to contribute that could provide a meaningful perspective.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Outstanding Results
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            We view ourselves as a vital part of each of our client’s teams and know our
                                            success hinges on them being successful. We have worked with many of our
                                            clients for years and attribute our high client retention rate to our
                                            responsiveness to their marketing needs and consistent dedication to their
                                            ongoing success.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Accodrion -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Innovations -->
    <div id="innovations">
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>Recent Innovations</h2>
                    <p>Have a look upon the recent innovations and ideas that are trending in the market right now!</p>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <!-- <img class="img-responsive" src="img/970x647/01.jpg" alt="Latest Products Image"> -->
                    </div>
                    <h4><a href="#">Ring Video Doorbell</a> <span class="text-uppercase margin-l-20">Accessories</span>
                    </h4>
                    <img class="full-width img-responsive wow fadeInUp" src="img/500x500/04.jpeg" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".2s">
                    <br><br>
                    <p>Capture clear picture with 1080p HD video with Night Vision and talk to visitors at your door
                        with Two-Way Talk and Quick Replies. Customize your motion settings and get real-time
                        notifications on your phone and tablet, no matter where you are.</p>
                    <a class="link" href="#">Connect</a>
                </div>
                <!-- End Latest Products -->

                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <!-- <img class="img-responsive" src="img/970x647/02.jpg" alt="Latest Products Image"> -->
                    </div>
                    <h4><a href="#">Simply Fit Board</a> <span class="text-uppercase margin-l-20">Fitness</span></h4>
                    <img class="full-width img-responsive wow fadeInUp" src="img/500x500/05.jpeg" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".2s">
                    <br><br>
                    <p>Simply Fit Board is a plastic balance board intended to help tone muscles and burn calories while
                        improving your balance. The primary exercise consists of standing on the board and twisting your upper body and lower body in opposite directions.</p>
                    <a class="link" href="#">Connect</a>
                </div>
                <!-- End Latest Products -->

                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <!-- <img class="img-responsive" src="img/970x647/03.jpg" alt="Latest Products Image"> -->
                    </div>
                    <h4><a href="#">Safe Grabs</a> <span class="text-uppercase margin-l-20">Cooking</span></h4>
                    <img class="full-width img-responsive wow fadeInUp" src="img/500x500/06.jpeg" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".2s">
                    <br><br>
                    <p>Safe Grabs is the original heat-resistant multi-purpose silicone microwave mat. Safe & Easy, Made
                        from food grade silicone, BPA free, dishwasher safe, heat resistant to 475°F, non-slip and
                        naturally non-stick. Buy today and say no more burns.</p>
                    <a class="link" href="#">Connect</a>
                </div>
                <!-- End Latest Products -->
            </div>
            <!--// end row -->
            <br><br><br><br><br>
            <a href="more/search.html" class="btn-theme btn-theme-sm btn-white-bg text-uppercase">More...</a>
        </div>
    </div>
    <!-- End Latest Products -->



    <!-- Investors -->
    <div id="investors">
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>Investors</h2>
                    <p>Have a look upon the Bulls who have invested through Upper Deck!</p>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <!-- <img class="img-responsive" src="img/970x647/01.jpg" alt="Latest Products Image"> -->
                    </div>
                    <h4><a href="#">Elon Musk</a> <span class="text-uppercase margin-l-20">Tesla Motors</span>
                    </h4>
                    <img class="full-width img-responsive wow fadeInUp" src="img/500x500/07.jpg" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".2s">
                    <br><br>
                    <p>Elon Reeve Musk FRS is a Business Magnate and Investor. He is the Founder, CEO, and Chief Engineer at SpaceX; Angel Investor, CEO, and Product Architect of Tesla, Inc.; Founder of The Boring Company; and Co-Founder of Neuralink and OpenAI.</p>
                    <a class="link" href="#">Connect</a>
                </div>
                <!-- End Latest Products -->

                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <!-- <img class="img-responsive" src="img/970x647/03.jpg" alt="Latest Products Image"> -->
                    </div>
                    <h4><a href="#">Gautam Adani</a> <span class="text-uppercase margin-l-20">Adani Group</span></h4>
                    <img class="full-width img-responsive wow fadeInUp" src="img/500x500/08.jpg" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".2s">
                    <br><br>
                    <p>Gautam Shantilal Adani is an Indian billionaire industrialist. He is the chairman and founder of the Adani Group, an Ahmedabad-based multinational conglomerate involved in port development and operations in India.</p>
                    <a class="link" href="#">Connect</a>
                </div>
                <!-- End Latest Products -->

                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <!-- <img class="img-responsive" src="img/970x647/02.jpg" alt="Latest Products Image"> -->
                    </div>
                    <h4><a href="#">Mukesh Ambani</a> <span class="text-uppercase margin-l-20">Indian Industrialist</span></h4>
                    <img class="full-width img-responsive wow fadeInUp" src="img/500x500/09.jpg" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".2s">
                    <br><br>
                    <p>Mukesh Dhirubhai Ambani is an Indian billionaire industrialist. He is the chairman and managing director of Reliance Industries Ltd., a Fortune Global 500 company and India's most valuable company by market value.</p>
                    <a class="link" href="#">Connect</a>
                </div>
                <!-- End Latest Products -->


            </div>
            <!--// end row -->
            <br><br><br><br><br>
            <a href="more/search2.html" class="btn-theme btn-theme-sm btn-white-bg text-uppercase">More...</a>
        </div>
    </div>
    <!-- End Investors -->

    <!-- Pricing -->

    <!-- End Pricing -->





    <!-- Services -->
    <div id="services">
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Services</h2>
                        <p>Here are some services that we provide to our clients!</p>
                    </div>
                </div>
                <!--// end row -->

                <div class="row row-space-1 margin-b-2">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-chemistry"></i>
                            </div>
                            <div class="service-info">
                                <h3>Company Formation</h3>
                                <p class="margin-b-5">Connect with potential investors to kickstart and grow your
                                    innovations and ideas.</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="service bg-color-base" data-height="height">
                            <div class="service-element">
                                <i class="service-icon color-white icon-screen-tablet"></i>
                            </div>
                            <div class="service-info">
                                <h3 class="color-white">Ecommerce</h3>
                                <p class="color-white margin-b-5">We create ecommerce solutions for B2C, B2B and
                                    marketplace business models. We can smoothly integrate an ecommerce component.</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-badge"></i>
                            </div>
                            <div class="service-info">
                                <h3>Help Desk</h3>
                                <p class="margin-b-5">Providing L1, L2 and L3 support services, we deliver hot-fixes
                                    within 24 hours to prevent or resolve any issues in usage, technology and code that
                                    may arise.</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <!--// end row -->
                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End Service -->

    <!-- Contact -->
    <div id="contact">
        <!-- Contact List -->
        <div class="section-seperator">
            <div class="content-lg container">
                <div class="row">
                    <!-- Contact List -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <h3>Dev Ghetia <span class="text-uppercase margin-l-20"> CEO</span></h3>
                        <p></p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> +91 75749 XXXXX</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> devxx@gmail.com</li>

                        </ul>
                    </div>


                    <!-- End Contact List -->

                    <!-- Contact List -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <h3>Mustafa Bharmal <span class="text-uppercase margin-l-20">Managing Director</span></h3>
                        <p></p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> +91 63523 XXXXX</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> mustafaxx@gmail.com</li>
                        </ul>
                    </div>
                    <!-- End Contact List -->

                    <!-- Contact List -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <h3>Birva Dave <span class="text-uppercase margin-l-20">Developer</span>
                        </h3>
                        <p></p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> +91 98240 XXXXX</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> birvaxx@gmail.com</li>
                        </ul>
                    </div>

                    <!-- End Contact List -->

                    <!-- Contact List -->

                    <div class="col-sm-4 sm-margin-b-50">
                        <h3><br><br>Monisha Samanta <span class="text-uppercase margin-l-20">DB Manager</span></h3>
                        <p></p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> +91 98792 XXXXX</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> monishaxx@gmail.com</li>
                        </ul>
                    </div>
                    <!-- End Contact List -->

                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Contact List -->

    </div>
    <!-- End Contact -->
    <!--========== END PAGE LAYOUT ==========-->

    <!--========== FOOTER ==========-->
    <footer class="footer">
        <!-- Links -->
        <div class="section-seperator">
            <div class="content-md container">
                <div class="row">
                    <div class="col-sm-2 sm-margin-b-30">
                        <!-- List -->
                        <ul class="list-unstyled footer-list">
                            <li class="footer-list-item"><a href="#body">Home</a></li>
                            <li class="footer-list-item"><a href="#about">Our Startups</a></li>
                            <li class="footer-list-item"><a href="#services">Services</a></li>
                            <li class="footer-list-item"><a href="#contact">Contact Us</a></li>
                        </ul>
                        <!-- End List -->
                    </div>
                    <div class="col-sm-2 sm-margin-b-30">
                        <!-- List -->
                        <ul class="list-unstyled footer-list">
                            <li class="footer-list-item">Twitter</li>
                            <li class="footer-list-item">Facebook</li>
                            <li class="footer-list-item">Instagram</li>
                            <li class="footer-list-item">YouTube</li>
                        </ul>
                        <!-- End List -->
                    </div>
                    <div class="col-sm-3">
                        <!-- List -->
                        <ul class="list-unstyled footer-list">
                            <li class="footer-list-item">Subscribe to Our Newsletter</li>
                            <li class="footer-list-item">Privacy Policy</li>
                            <li class="footer-list-item">Terms &amp; Conditions</li>
                        </ul>
                        <!-- End List -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Links -->

        <!-- Copyright -->
        <div class="content container">
            <div class="row">
                <div class="col-xs-6">
                    <!-- <img class="footer-logo" src="img/logo-dark.png" alt="flameonepage Logo"> -->
                </div>
                <div class="col-xs-6 text-right">
                    <!-- <p class="margin-b-0"><a class="fweight-700" href="#">FlameOnePage</a> Theme Powered by: <a class="fweight-700" href="http://ft-seo.ch/">FairTech Studio</a></p> -->
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End Copyright -->
    </footer>
    <!--========== END FOOTER ==========-->

    <!-- Back To Top -->
    <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- CORE PLUGINS -->
    <script src="vendor/jquery.min.js" type="text/javascript"></script>
    <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS -->
    <script src="vendor/jquery.easing.js" type="text/javascript"></script>
    <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
    <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
    <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
    <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
    <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="js/layout.min.js" type="text/javascript"></script>
    <script src="js/components/wow.min.js" type="text/javascript"></script>
    <script src="js/components/swiper.min.js" type="text/javascript"></script>
    <script src="js/components/masonry.min.js" type="text/javascript"></script>

</body>
<!-- END BODY -->

</html>