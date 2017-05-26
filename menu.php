<?php include_once "dbconf.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    #progressBar {
      width: 100%;
      margin: 0px auto;
      height: 22px;
      background-color: #e2e2e2;
      border-radius: 5px;
    }

    #progressBar div {
      height: 100%;
      text-align: middle;
      padding: 0px;
      line-height: 22px; /* same as #progressBar height if we want text middle aligned */
      width: 0;
      background-color: #CBEA00;
      border-radius: 5px;
    }
    </style>

</head>

<body class="index" id="page-top">

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="mainNav">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            Menu <i class="fa fa-bars"></i>
        </button>
        <div class="container">
            <a class="navbar-brand" href="#page-top">NETWARS</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-address-book-o"></i> Dr.Fu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-dollar"></i> 1000</a>
                    </li><li class="nav-item">
                        <a class="nav-link" href="#"><div class="portfolio-link" href="#helpModal" data-toggle="modal">Help</div></a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container" style="padding-top: 40px" >
            <h2 class="text-center">MAIN MENU</h2>
            <hr class="star-primary">
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <div class="portfolio-link" href="#processModal" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-clock-o fa-3x"></i>
                                <div>Watch Progress</div> 
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/process.png" alt="">
                    </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <div class="portfolio-link" href="#bankModal" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-bank fa-3x"></i>
                                <div>Visit Bank</div> 
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/bank.png" alt="">
                    </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <div class="portfolio-link" href="#scanModal" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                <div>Search IP</div> 
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/scan.png" alt="">
                    </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <div class="portfolio-link" href="#storeModal" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-credit-card fa-3x"></i>
                                <div>Buy Something</div> 
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/payment.png" alt="">
                    </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <div class="portfolio-link" href="#appModal" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-terminal fa-3x"></i>
                                <div>Run Application</div> 
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/apps.png" alt="">
                    </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <div class="portfolio-link" href="#myDeviceModal" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-mobile-phone fa-3x"></i>
                                <div>Device Configuration</div> 
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/mydevice.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; TC's Network Laboratory 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top hidden-lg-up">
        <a class="btn btn-primary page-scroll" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Modals -->
    <div class="portfolio-modal modal fade" id="processModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>Process</h2>
                                <hr class="star-primary">
                                <!-- Content -->
                                <div class="media">
                                  <div class="media-left media-middle">
                                    <a href="#">
                                      <img class="media-object" src="img/portfolio/firewall.png" alt="..." style="width: 100px; padding-right: 10px" >
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <h5 class="media-heading" align="left">Upgrade Firewall Lv.2</h5>
                                    <div id="progressBar">
                                      <div class="progress-bar progress-bar-btn-lg" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="background-color: rgb(19, 108, 249); height: 100%;">
                                      </div>
                                    </div>
                                    <div align="left">
                                        Time Remaining : 6.66
                                    </div>
                                  </div>
                                </div>
                                <!-- Content -->
                                
                                <button class="btn btn-success" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="bankModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>Bank</h2>
                                <hr class="star-primary">
                                <ul class="list-inline item-details">
                                    <li>
                                        <div class="form-group">
                                            <label for="bank"><h5>Bank Account ID :</h5></label>
                                            <input type="text" class="form-control" id="bank">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="pwd"><h5>Bank Account PIN :</h5></label>
                                            <input type="password" class="form-control" id="pwd">
                                        </div>
                                    </li>
                                    <li>
                                         <button type="submit" class="btn btn-primary">ENTER</button>
                                    </li>
                                </ul>
                                <button class="btn btn-success" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="scanModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>SCAN IP</h2>
                                <hr class="star-primary">
                                <ul class="list-inline item-details">
                                    <li><h5>Scan for IP :</h5>

                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search IP">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                                </span>
                                                <span style="padding-left: 20px;">
                                                    <button class="btn btn-success" type="button">SCAN</button>
                                                </span>
                                                </span>
                                            </div>

                                    </li>
                                </ul>
                                <button class="btn btn-success" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="storeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>STORE</h2>
                                <hr class="star-primary">
                                <!-- Content -->
                                <div class="media">
                                  <div class="media-left media-middle">
                                    <a href="#">
                                      <img class="media-object" src="img/portfolio/firewall.png" alt="..." style="width: 120px; padding-right: 10px" >
                                    </a>
                                    </div>
                                    <div class="media-body" style="padding-top: 20px;">
                                        <h5 class="media-heading" align="left">Firewall</h5> 
                                        <div style="text-align: left;">
                                            <span><strong>Firewall level : 01 </strong></span>
                                            <span style="padding-left: 100px;"><strong>cost : 1000</strong></span> 
                                        </div>
                                        <div align="right">
                                            <button class="btn btn-success" type="button">buy</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content -->
                                <!-- Content -->
                                <div class="media">
                                  <div class="media-left media-middle">
                                    <a href="#">
                                      <img class="media-object" src="img/portfolio/bypasser.png" alt="..." style="width: 120px; padding-right: 10px" >
                                    </a>
                                    </div>
                                    <div class="media-body" style="padding-top: 20px;">
                                        <h5 class="media-heading" align="left">Bypasser</h5> 
                                        <div style="text-align: left;">
                                            <span><strong>Bypasser level : 01 </strong></span>
                                            <span style="padding-left: 100px;"><strong>cost : 2000</strong></span> 
                                        </div>
                                        <div align="right">
                                            <button class="btn btn-success" type="button">buy</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content -->
                                <!-- Content -->
                                <div class="media">
                                  <div class="media-left media-middle">
                                    <a href="#">
                                      <img class="media-object" src="img/portfolio/encrypter.png" alt="..." style="width: 120px; padding-right: 10px" >
                                    </a>
                                    </div>
                                    <div class="media-body" style="padding-top: 20px;">
                                        <h5 class="media-heading" align="left">encrypter</h5> 
                                        <div style="text-align: left;">
                                            <span><strong>Encrypter level : 01 </strong></span>
                                            <span style="padding-left: 100px;"><strong>cost : 500</strong></span> 
                                        </div>
                                        <div align="right">
                                            <button class="btn btn-success" type="button">buy</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content -->
                                <!-- Content -->
                                <div class="media">
                                  <div class="media-left media-middle">
                                    <a href="#">
                                      <img class="media-object" src="img/portfolio/decrypter.png" alt="..." style="width: 120px; padding-right: 10px" >
                                    </a>
                                    </div>
                                    <div class="media-body" style="padding-top: 20px;">
                                        <h5 class="media-heading" align="left">Decrypter</h5> 
                                        <div style="text-align: left;">
                                            <span><strong>Decrypter level : 01 </strong></span>
                                            <span style="padding-left: 100px;"><strong>cost : 1000</strong></span> 
                                        </div>
                                        <div align="right">
                                            <button class="btn btn-success" type="button">buy</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content -->


                                
                                <button class="btn btn-success" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="appModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>Project Title</h2>
                                <hr class="star-primary">
                                <img class="img-fluid img-centered" src="img/portfolio/safe.png" alt="">
                                <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                    </li>
                                    <li>Date:
                                        <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                    </li>
                                    <li>Service:
                                        <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-success" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="myDeviceModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>Project Title</h2>
                                <hr class="star-primary">
                                <img class="img-fluid img-centered" src="img/portfolio/submarine.png" alt="">
                                <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                    </li>
                                    <li>Date:
                                        <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                    </li>
                                    <li>Service:
                                        <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-success" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HELP MODAL -->
    <div class="portfolio-modal modal fade" id="helpModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                     <!-- About Section -->
                    <section class="success" id="about">
                        <div class="container">
                            <h2 class="text-center">About</h2>
                            <hr class="star-light">
                            <div class="row">
                                <div class="col-lg-4 offset-lg-2">
                                    <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                                </div>
                                <div class="col-lg-4">
                                    <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                                </div>
                                <div class="col-lg-8 offset-lg-2 text-center">
                                    <a href="#" class="btn btn-lg btn-outline">
                                        <i class="fa fa-download"></i> Download Theme
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.js"></script>

    <script>
    
    <?php $data = mysqli_query($con, "SELECT * FROM activity WHERE ip_attacker = '192.249.160.53'"); 
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
    ?>
    var start = <?php echo $data->start; ?>
    // console.log(start);
    var end = <?php echo $data->end; ?>

    function progress(timeleft, timetotal, $element) {
        
        var progressBarWidth = timeleft * $element.width() / timetotal;
        $element.find('div').animate({ width: (progressBarWidth) }, 500).html(100-(timeleft / timetotal)*100 + "%");
        if(timeleft > 0) {
            setTimeout(function() { progress(timeleft - 1, timetotal, $element);},1000);
        }
    };
    progress(15, 15, $('#progressBar'));

    </script>

</body>

</html>