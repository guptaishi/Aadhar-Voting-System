<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="src/images/favicon.png" />
    <title>Aadhaar</title>




    <link href="src/css/bootstrap.min.css" rel="stylesheet" />
    <link href='src/css/stylef500.css?v=13' rel='stylesheet' type='text/css' />
    <link href='src/css/responsivee5bf.css?v=12' rel='stylesheet' type='text/css' />
    <link href='src/css/animate.css' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="src/font-awesome-4/css/font-awesome.min.css">


</head>

<body>
    <div id="apploader">
        <div class="loader-three-bounce">
            <div class="loader-child loader-bounce1"></div>
            <div class="loader-child loader-bounce2"></div>
            <div class="loader-child loader-bounce3"></div>
        </div>
    </div>
    <header class="header">
        <div class="logo-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-default">

                            <div class="head-navbar-toggle toggle-act visible-sm visible-xs">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                            <div class="navbar-brand">
                                <a href="index.php">
                                    <img src="src/images/logo.png" alt="aadhar" />
                                </a>
                            </div>
                            <div class="menu-nav display-block hidden-xs hidden-sm">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="javascript:void(0)" class="scroll" data-target="#scroll-section2">About</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="scroll" data-target="#scroll-section3">Team</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="scroll" data-target="#scroll-section8">Contact</a>
                                    </li>

                                </ul>
                                <div class="sing-up-button pull-right">
                                    <a href="login.php"  class="btn-round btn-border btn-gradient">Login</a>
                                    <a href="register.php" class="btn-round btn-border btn-gradient">Register</a>
                                </div>
                            </div>

                            <div class="navbar-mobile">
                                <div class="side-menu">
                                    <div class="navbar">
                                        <div class="toggle-act">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </div>
                                        <ul class="navbar-link list-unstyled">
                                            <li>
                                        <a href="javascript:void(0)" class="scroll" data-target="#scroll-section2">About</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="scroll" data-target="#scroll-section3">Team</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="scroll" data-target="#scroll-section4">Contact</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="scroll" data-target="#scroll-section6-2">Help</a>
                                    </li>
                                        </ul>
                                        <ul class="navbar-link list-unstyled">
                                            <li>
                                                 <a href="login.php" target="_blank" class="btn-round btn-border btn-gradient">Login</a>

                                            </li>
                                            <li>
                                                 <a href="register.php" target="_blank" class="btn-round btn-border btn-gradient">Register</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-overlay"></div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="banner">
        <div class="banner-wrapper">
            <div class="container">
                <div class="banner-content">

                    <div class="row">

                        <div class="col-md-8 col-xs-12 wow fadeIn" data-wow-delay="0.1s">
                            <h1>
                                Join
                                <span>Aadhaar Voting</span>
                            </h1>

                            <div class="media-link clearfix">
                                <div class="display-inline-block  media-button clearfix">
                                    <a href="login.php" class="btn-round btn-border btn-gradient">Login</a>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="banner_video" style="background:url(src/images/banner_bg.jpg) no-repeat center center ;">
              
            </div>

        </div>
    </div>



    <section class="section-2">
        <div class="wrapper">
            <div class="container">
                <div class="row">
 <div class="col-md-6 col-xs-12 wow bounceInLeft" data-wow-delay="0.25s">
                        <div class="icon">
                            <img src="src/images/icon-section2.png" alt="" class="img-responsive display-inline-block" />
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-12 wow zoomIn" data-wow-delay="0.5s" id="scroll-section2">
                        <h2> About Project</h2>
				<p>Our project is about, online Aadhaar Voting System.To describe the project,or to explain the key motto of making this system,we should enlighten all,about the disadvantages of Existing Voting System.Voting,is a important part in any republic country,so choosing our Leaders who would run our country or state according to the Laws.Now,let's take a look,at the disadvantages existing Normal Voting,first of all,as technology is affecting human life to great extent,and it's increasing day by day,people are becoming dependent on it,they would prefer Voting through their smart-phones,or computers or any other gadgets that can be used to access the website,rather than standing in long queues.Secondly,political parties often take the help of local goons,to disturb people,and doesn't allow people to cast their vote,in choice of them,and forcefully cast the votes,in favor of the parties,who have hired them,Adhaar Voting,will provide people enough security,to cast their votes in favor of their choices.People,will no longer feel unsafe,while casting their votes,because their accounts will be connected through their,Adhaar Cards,and each have a authenticating number in their cards,each people can cast their vote,in their way.There is one more advantage in our project,it will verify accounts with OTP,once you login to your account,or you have done casting your votes,it will automatically send you a OTP,in your mobile number.As,in this website,account has to be created,it also requires password authentication,so,it's secure,simple and also saves your valuable time.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-3" id="scroll-section3">
        <div class="wrapper">
            <div class="container">
                <h2>
                    OUR TEAM
                </h2>

                <div class="blocks">
                    <div class="row">
                        <div class="col-md-6 col-xs-12   wow bounceInDown" data-wow-delay="0.2s">
                            <div class="block">
                                <div class="row">
                                    <div class="col-md-12 col-xs-3 text-center">
                                        <div class="icon">
                                            <img src="src/images/ishita.jpg" class="img-responsive img-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-9">
                                        <div class="title">Ishita Gupta</div>
                                        <a  href="https://github.com/guptaishi"><i class="fa fa-github-square" style="font-size:30px;color:white"></i></a>
                                        <a  href="https://www.facebook.com/profile.php?id=100012686461361"> <i class="fa fa-facebook-square" aria-hidden="true" style="font-size:30px;color:white"></i></a>
                                        <a  href="https://www.instagram.com/ishita_gupta19/"> <i class="fa fa-instagram" aria-hidden="true" style="font-size:30px;color:white"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xs-12  wow bounceInDown" data-wow-delay="0.6s">
                            <div class="block">
                                <div class="row">
                                     <div class="col-md-12 col-xs-3 text-center">
                                        <div class="icon">
                                            <img src="src/images/samar.jpg" class="img-responsive img-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-9">
                                        <div class="title">Satyendra kumar</div>
                                        <a  href="https://www.github.com/satye1809"><i class="fa fa-github-square" style="font-size:30px;color:white"></i></a>
                                        <a  href="https://www.facebook.com/profile.php?id=100011397343297"> <i class="fa fa-facebook-square" aria-hidden="true" style="font-size:30px;color:white"></i></a>
                                        <a  href="https://www.instagram.com/my.life.between22yards/"> <i class="fa fa-instagram" aria-hidden="true" style="font-size:30px;color:white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </section>












    <section class="section-8" id="scroll-section8">
        <div class="wrapper">
            <div class="container">
                <div class="blocks">
                    <div class="block block-1">
                        <h2>Contact Us</h2>
                        <div class="stories">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="contact-address">
										<p>Email : satyendray384@gmail.com</p>
										<p>PH : +917678560301</p>
									</div>
                                </div>
								<div class="col-md-6 col-xs-12">
                                   <form>
								    <div class="form-group">
										<input type="text" class="form-control input-radial" id="" placeholder="Enter Your Name">
									</div>
									<div class="form-group">
										<input type="email" class="form-control input-radial" id="" placeholder="Enter Your Email">
									</div>

									<div class="form-group">
										<textarea rows="8" class="form-control textarea-radial" placeholder="Message"></textarea>
									</div>
									<div class="link-button">
										<a class="btn-buy-token btn-round btn-gradient btn-block" href="#">Send</a>
									</div>
								</form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>




    <!--END-POP-->
    <script type="text/javascript" src="src/js/jquery.min.js"></script>

	<script type="text/javascript" src="src/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="src/js/app.js"></script>
    <script type="text/javascript" src="src/js/wow.min.js"></script>
    <script type="text/javascript" src="src/js/SmoothScroll.js"></script>


</body>


</html>
