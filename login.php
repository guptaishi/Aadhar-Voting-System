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
                                       Login

                                    </h2>
                                </div>
								<form role="form" action="src/php/passcheck.php" method="post" onsubmit=" return validation()">
								    <div class="form-group">
										<input type="text" name="name" ondrop="return false;" onpaste="return false;" autocomplete="off"
										class="form-control input-radial" id="username" placeholder="Enter Your Name">
										<span id="usernameid" class="text-danger font-weight-bold"> </span>
									</div>
									<div class="form-group">
										<input type="text"  name="aadhaar" ondrop="return false;"size="12" maxlength="12" onpaste="return false;" autocomplete="off"
										class="form-control input-radial"
id="numberaadhaar" placeholder="Enter Your Aadhaar no.">
                      <span id="aadhaarno" class="text-danger font-weight-bold"> </span>
									</div>
									<div class="form-group">
										<input type="password" name="pass" ondrop="return false;" onpaste="return false;" autocomplete="off" class="form-control input-radial"
										id="password" placeholder="Enter Your password">
										<span id="passwords" class="text-danger font-weight-bold"> </span>
									</div>




                              <button type="submit"  class="btn-buy-token btn-round btn-gradient btn-block">
                                <div class="link-button">
                               Login
                                </div>
                              </button>
								</form>
								<div class="form-group">
                                    <a class="pull-left" href="register.php">If you are not register</a>
                                    <a class="pull-right" href="aadhaar.php">Forgot password</a>
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



<script type="text/javascript">

		function validation(){

			var user = document.getElementById('username').value;
			var password = document.getElementById('password').value;
      var aadhaarnumber = document.getElementById('numberaadhaar').value;

			if( user == "" ){
				document.getElementById('usernameid').innerHTML = " Please fill the username ";
				return false;
			}
			if(( user.length < 3) || (user.length > 20)){
				document.getElementById('usernameid').innerHTML = "Please fill the username between 3 and 20";
				return false;
			}

			if(!isNaN(user)){
				document.getElementById('usernameid').innerHTML = "please enter character";
				return false;
			}

      if( aadhaarno == "" ){
        document.getElementById('aadhaarno').innerHTML = "Please Enter your Addhaar number ";
        return false;
      }

      if(aadhaarnumber.length!=12){
        document.getElementById('aadhaarno').innerHTML = " Addhaar number should be 12 digits ";
        return false;
      }
      if(isNaN(aadhaarnumber)){
        document.getElementById('aadhaarno').innerHTML = " Addhaar number should conatins only digits ";
        return false;
      }


			if( password == "" ){
				document.getElementById('passwords').innerHTML = " Please fill the password ";
				return false;
			}

			if((password.length < 5) || (password.length > 20)){
				document.getElementById('passwords').innerHTML = " Please fill the password between 5 and 20";
				return false;
			}


		}

	</script>
</body>


</html>
