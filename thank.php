<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['aadhaar']))
{
  header('location:login.php?msg=please_login');
}
unset($_SESSION['aadhaar']);
unset($_SESSION['name']);
unset($_SESSION['phn']);
unset($_SESSION['email']);
// destroy the session
session_destroy();
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


</head>

<body style="padding-top:0px;">
   <section class="section-8">
        <div class="wrapper">
            <div class="container">
                <div class="blocks">
                    <div class="block block-1 banner">
                        <div class="stories">
                            <div class="row">
                               <div class="col-md-6 col-md-offset-3 col-xs-12 wow fadeIn" data-wow-delay="0.2s">
                                <div class="timer-box">
              								<div class="text-center">
                                <a href="index.php"> <img src="src/images/logo.png" alt="aadhar" width="100px"/> </a>
              								</div>
								                        <div class="clearfix"></div>
                                <div class="timer-title">
                                    <h2>
                                      Thank you
<span>your voting is colpleted successfully</span>
                                    </h2>
                                </div>

                                    <div class="modal-body">
                            					<div class="timer-box">
                            						<div class="form-group">

                                        <div class="link-button">
                            							<a class="btn-buy-token btn-round btn-gradient" href="index.php">home page</a>



                            						</div>
                            					</div>
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


    <!--END-POP-->
    <script type="text/javascript" src="src/js/jquery.min.js"></script>
	<script type="text/javascript" src="src/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="src/js/app.js"></script>
    <script type="text/javascript" src="src/js/wow.min.js"></script>
    <script type="text/javascript" src="src/js/SmoothScroll.js"></script>

</body>


</html>
