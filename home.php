<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Task Landing Page  </title>
    <meta name="description" content="Free Bootstrap 4 Template by uicookies.com">
    <meta name="keywords" content="Free website templates, Free bootstrap themes, Free template, Free bootstrap, Free website template">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/law-icons/font/flaticon.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">


    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/landing-2.css">
</head>

<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Landing</a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
            <div class="collapse navbar-collapse" id="probootstrap-navbar">
                <ul class="navbar-nav ml-auto">
                  <?php if(isset($_SESSION["sess_user"])): ?>
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="tasks.php">ADD Task</a></li>
                    <li class="nav-item"><a class="nav-link" href="alltasks.php">All Task</a></li>
                    <li class="nav-item"><a class="nav-link" href="important.php">Important Task</a></li>

                    <li class="nav-item"><a class="nav-link" href="completed.php">Completed Task</a></li>
                    
                    <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href="logout.php"><span class="pb_rounded-4 px-4">Logout</span></a></li>

                    <?php endif; ?>
                    <?php if(!isset($_SESSION["sess_user"])): ?>
                    <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href="login.html"><span class="pb_rounded-4 px-4">Login</span></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->




    <section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6">
                    <h2 class="heading mb-3">Task scheduling makes you work & plan faster</h2>
                    <div class="sub-heading">
                        <p class="mb-4">A company or an organization runs on schedules and a predetermined vision. Scheduling tasks ensure the productivity and optimum management. Hierarchy in workflow. Accessibility and communication. Error Prevention. Data Tracking. </p>
                        <p class="mb-5"><a class="btn btn-success btn-lg pb_btn-pill smoothscroll" href="#section-pricing"><span class="pb_font-14 text-uppercase pb_letter-spacing-1">Get started</span></a></p>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-5 relative align-self-center">

                    <form action="#" class="bg-white rounded pb_form_v1">
                        <h2 class="mb-4 mt-0 text-center">Sign Up</h2>
                        <div class="form-group">
                            <input type="text" class="form-control pb_height-50 reverse" placeholder="Full name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control pb_height-50 reverse" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control pb_height-50 reverse" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <div class="pb_select-wrap">
                                <select class="form-control pb_height-50 reverse">
                    <option value="" selected>Type</option>
                    <option value="">Basic</option>
                    <option value="">Business</option>
                    <option value="">Free</option>
                  </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="Register">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- END section -->


    <!-- loader -->
    <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#1d82ff"/></svg></div>



    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>

    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>