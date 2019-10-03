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
    <link href='src/css/jquery-ui.css' rel='stylesheet' type='text/css' />
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
                                       Register

                                    </h2>
                                </div>
								<form role="form" action="src/php/regcheck.php" method="post" onsubmit="return validation()">
								    <div class="form-group col-md-12">
										<input type="text" name="name"  ondrop="return false;" onpaste="return false;" autocomplete="off"
										class="form-control input-radial" id="username" placeholder="Enter Your Name">
										<span id="usernameid" class="text-danger font-weight-bold"> </span>
									</div>
									<div class="form-group col-md-12">
										<input type="email" name="email" ondrop="return false;" onpaste="return false;" autocomplete="off"
										class="form-control input-radial" id="emailid" placeholder="Enter Your Email">
										<span id="emailids" class="text-danger font-weight-bold"> </span>
									</div>
									<div class="form-group col-md-6">
										<input type="text" name="phn" ondrop="return false;"size="10" maxlength="10" onpaste="return false;"
										autocomplete="off" class="form-control input-radial" id="numbermobile" placeholder="Enter Your Mobile no.">
										<span id="mobilenumber" class="text-danger font-weight-bold"> </span>
									</div>
									<div class="form-group col-md-6">
										<input type="text" name="aadhaar" ondrop="return false;"size="12" maxlength="12" onpaste="return false;"
										autocomplete="off" class="form-control input-radial" id="numberaadhaar" placeholder="Enter Your Aadhaar no.">
                    <span id="aadhaarno" class="text-danger font-weight-bold"> </span>
									</div>

									<div class="form-group col-md-6">
										<input type="text" name="dob" class="form-control input-radial" size="8" maxlength="8"  id="datepicker" placeholder="Date of Birth" >
									</div>
									<div class="form-group col-md-6">
										<select class="form-control input-radial">
											<option>Male</option>
											<option>Female</option>
										</select>

									</div>

									<div class="form-group col-md-12">
										<input type="password" name="pass" ondrop="return false;" onpaste="return false;" autocomplete="off"
										class="form-control input-radial" id="password" placeholder="Enter Your password">
										<span id="passwords" class="text-danger font-weight-bold"></span>
									</div>

									<div class="form-group col-md-12">
										<input type="password" name="conpass" ondrop="return false;" onpaste="return false;" autocomplete="off"
										class="form-control input-radial" id="passwordconfirm" placeholder="Confirm password">
										<span id="confirmpassword" class="text-danger font-weight-bold">  </span>
									</div>


                                <div class="link-button col-md-12">
                                    <button type="submit" class="btn-buy-token btn-round btn-gradient btn-block" name="btn-save" onclick="formValidation()">Register</button>
                                </div>
								</form>
								<br>
								<div class="form-group">
                                    <a href="login.php">if you have already registered</a>
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

	  <script type="text/javascript" src="src/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="src/js/app.js"></script>
    <script type="text/javascript" src="src/js/wow.min.js"></script>
    <script type="text/javascript" src="src/js/SmoothScroll.js"></script>
    <!-- <script type="text/javascript" src="src/js/jquery-ui.js"></script> -->
    <script type="text/javascript" src="src/js/jquery.min.js"></script>
    <script type="text/javascript" src="src/js/jquery-ui.min.js"></script>


<script type="text/javascript">

          $(function(){
            $("#datepicker").datepicker({changeMonth: true, maxDate: '0',changeYear: true, yearRange: '1900:2018', dateFormat: 'dd-mm-yy',
          onClose: function()
          {

           var today = new Date(),

            birthday = $('#datepicker').datepicker("getDate"),

            age = (
              (today.getMonth() > birthday.getMonth())
              ||
              (today.getMonth() == birthday.getMonth() && today.getDate() >= birthday.getDate())
            ) ? today.getFullYear() - birthday.getFullYear() : today.getFullYear() - birthday.getFullYear();

            if (age > 100) {
                    alert("Age cannot be more than 100 Years.Please enter correct age")
                    return false;
                }


                if ((age == 18 ) || age < 18) {
                    alert("Age should be more than 18 years.Please enter a valid Date of Birth");
                    return false;
                }
            // alert("Age: " + age)
            ;}
          });
          });

          </script>

          <script type="text/javascript">

            function validation(){

              var user = document.getElementById('username').value;
              var email = document.getElementById('emailid').value;
              var mobileno = document.getElementById('numbermobile').value;
              var password = document.getElementById('password').value;
              var confirmpassword = document.getElementById('passwordconfirm').value;
              var aadhaarnumber = document.getElementById('numberaadhaar').value;




              if( user == "" ){
                document.getElementById('usernameid').innerHTML = "Please Enter Your Name ";
                // alert("Please Enter Your Name");
                return false;
              }
              if(( user.length < 3) || (user.length > 20)){
                document.getElementById('usernameid').innerHTML = "Please fill the Name between 3 and 20";
                return false;
              }

              if(!isNaN(user)){
                document.getElementById('usernameid').innerHTML = "Please Enter characters";
                return false;
              }


              if( email == "" ){
                document.getElementById('emailids').innerHTML = "Please Enter a Valid Email id ";
                return false;
              }


              if(email.indexOf('@') <= 0){
                document.getElementById('emailids').innerHTML = "please fill the email id in proper format @ ";
                return false;
              }



              if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){

                document.getElementById('emailid').innerHTML = "Please fill the email id in proper format . ";
                return false;
              }

              if( aadhaarno == "" ){
                document.getElementById('aadhaarno').innerHTML = "Please Enter your Addhaar number ";
                return false;
              }

              if(aadhaarnumber.length!=12){
                document.getElementById('aadhaarno').innerHTML = "Addhaar number should be 12 digits ";
                return false;
              }
              if(isNaN(aadhaarnumber)){
                document.getElementById('aadhaarno').innerHTML = "Addhaar number should conatins only digits ";
                return false;
              }



              if( mobileno == "" ){
                document.getElementById('mobilenumber').innerHTML = "Please Enter your mobile number ";
                return false;
              }

              if(mobileno.length!=10){
                document.getElementById('mobilenumber').innerHTML = "Number should be 10 digits ";
                return false;
              }
              if(isNaN(mobileno)){
                document.getElementById('mobilenumber').innerHTML = "Number should conatins only digits ";
                return false;
              }


              if( password == "" ){
                document.getElementById('passwords').innerHTML = "Please fill the password";
                return false;
              }

              if((password.length < 8) || (password.length > 20)){
                document.getElementById('passwords').innerHTML = "Please fill the password between 8 and 20";
                return false;
              }

              if( password!=confirmpassword){
                document.getElementById('confirmpassword').innerHTML = "Password are not matching";
                return false;
              }



              if( confirmpassword == "" ){
                document.getElementById('confirmpassword').innerHTML = "Please fill the confrm paasword ";
                return false;
              }

                }



          </script>

</body>

</html>
