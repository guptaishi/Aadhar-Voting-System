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
                                      Forgot Password
                                      <span>please enter your 12 digit aadhaar no</span>

                                    </h2>
                                </div>
                  								<form role="form" action="src/php/otpdata.php" method="post" onsubmit=" return validation()">
                                    <div class="modal-body">
                            					<div class="timer-box">
                            						<div class="form-group">
                            							<input type="text"  name="aadhaar" class="form-control input-radial" id="numberaadhaar" placeholder="Enter 12 digit aadhaar no" ondrop="return false;"size="12" maxlength="12" onpaste="return false;" autocomplete="off">
                                              <span id="aadhaarno" class="text-danger font-weight-bold"> </span>
                            						</div>
                                        <div class="link-button">
                            							<button type="submit" class="btn-buy-token btn-round btn-gradient" >submit</button>



                            						</div>
                            					</div>
                            				</div>
                  								</form>

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



<script type="text/javascript">
function validation(){

  var aadhaarnumber = document.getElementById('numberaadhaar').value;


          if( aadhaarno == "" ){
            document.getElementById('aadhaarno').innerHTML = "Please Enter your Addhaar number ";
            return false;
          }

          if(aadhaarnumber.length!=10){
            document.getElementById('aadhaarno').innerHTML = " Addhaar number should be 12 digits ";
            return false;
          }
          if(isNaN(aadhaarnumber)){
            document.getElementById('aadhaarno').innerHTML = " Addhaar number should conatins only digits ";
            return false;
          }

</body>


</html>
