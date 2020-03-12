<?php
error_reporting(0);
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio-php-master/src/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;


 $err=false;


if(isset($_POST["submit"])){
 $name=$_POST["name"];
 $email = $_POST["email"];
$service=$_POST["service"];
$contact =$_POST["contact"];
$contact_mode=$_POST["contact_mode"];

$servername = "domain";
$username = "name";
$password = "password";
$dbname = "dbname";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	$err=true;

}

$sql = "INSERT INTO users (data)
VALUES ('$name**$email**$service**$contact**$contact_mode')";

if (mysqli_query($conn, $sql)) {


// Your Account SID and Auth Token from twilio.com/console
$sid = 'sid';
$token = 'token';
$client = new Client($sid, $token);

try{
// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+number',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+number',
        // the body of the text message you'd like to send
        'body' => "A new user named ".$name." have filled the form"
    )
);

}catch(Exception $e){

	// echo $e;
	// die();
}

} else {

$err=true;

}

mysqli_close($conn);





}






?>





<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
    <link rel="icon" href="img/favicon.png">

	<!-- Author Meta -->
	<meta name="author" content="Ninjos">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Ninjos</title>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Roboto:400,400i,500" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<style type="text/css">
		
		.home-banner-area,.container{
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.container{
			padding-top: 1vh;
		}
		#request,h4{
			font-family: "Source Sans Pro",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
		}
.abs,.dark{
	display: none;
}
.home-banner-left h1{
	 text-transform: capitalize; 
	 text-align: center;
	  font-size: 38px;
	  font-family: sans-serif;
}
.swal2-title{
	font-family: sans-serif;
}
.swal2-content{
	line-height: 1.8;
}
b{
	color: #fb4141;
}

		@media screen and (orientation: portrait){
		.home-banner-area,.container{
			height: 105vh;
			padding-top: 0;
			display: flex;
			width: 100vw;
			align-items: center;
			justify-content: center;
			margin-top: -5vh;
			overflow-x: hidden;

		}	
		.abs{
			display: block;
	position: absolute;
	width: 105vw;
	z-index:1;
}
.dark{
	display: block;
	position: fixed;
	background-color: rgba(0,0,0,0.43);
	width: 150vw;
	margin-left: -5%;
	height: 110vh;
	z-index: 2;
}
.text{
	position:relative;
	z-index: 3;
}

.mb-40{
	color:white;
}
.home-banner-left h1{
	color: white;
	  font-size: 29px;

}
.home-banner-left h1 span{
	color: cyan;
}
.primary-btn{
	color:white;
	border-color: cyan;
}
br{
	display: block;
}
		}
	</style>




<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', 'data');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=data&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->



</head>

<body>

	
	
	<!--================ start banner Area =================-->
	<section class="home-banner-area">
		<div class="container">
			<div class="row justify-content-end ">
				<div class="col-lg-6 col-md-12 home-banner-left d-flex  align-items-center">
					<img class="img-fluid abs" alt="" id="mobile">
<div class="abs dark"></div>
					<div class="text">
						<h1 class="colored">
							Do you <span>need</span> an <br>
							App Developer, Web Designer, Graphic Designer or An Article Writer? <br>
							<span class="bringApply">Contact Us</span> Today.
						</h1>
						<p class="mx-auto mb-40" style="text-align: center;">
						We have a wide range of professional workers dedicated to fulfilling customer's expectations. contact us and we'll find the best solution for you or your business.
						</p>
<div style="width: 100%;display: flex;justify-content: center;align-items: center; padding-bottom: 5%;">
						<a href="javascript:void(0)" class="primary-btn bringApply" id="bringApply">Contact Us</a>
</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 no-padding home-banner-right d-flex align-items-end">
					<img class="img-fluid" alt="" id="desktop">
				</div>
			</div>
		</div>
	</section>
	<!--================ End banner Area =================-->

	



<div class="modal fade show" id="request" style="display: none;" aria-modal="true">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Fill The Form To Request A Service</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" onclick=" $('#request').modal('hide');">×</span>
              </button>
            </div>
            <div class="modal-body">
<form action="index.php" method="post">

  <div class="row form-group">
                
                <div class="col-md-12">
                	<label>Enter Your Name</label>
                  <input type="text" id="email" name="name" class="form-control rounded-0" placeholder="e.g Samson" required="true">
                </div>

              </div>





            <div class="row form-group">
                
                <div class="col-md-12">
                	<label>Enter Your Email Address</label>
                  <input type="email" id="email" name="email" class="form-control rounded-0" placeholder="e.g example@gmail.com" required="true">
                </div>

              </div>


 <div class="row form-group">
                
                <div class="col-md-12">
                	<label>What Kind of Service do you Want?</label>
                  <select id="service" name="service" class="form-control rounded-0">

							<option value="Web_Design">Web Design/App Development</option>
							<option value="Graphic_Design">Graphic/Logo Design</option>
							<option value="Article_Writeup">Article Writeup</option>



                  </select>
                </div>

              </div>

<p id="PriceText" style="color: #1875d8; text-transform: capitalize;"></p>


<br>
<div class="row form-group" style="margin-top: -3%;">
                
                <div class="col-md-12">
                	<label>How Can We Contact You?</label>
                	
                  <select type="text" name="contact" class="form-control rounded-0" id="contact">
                  	<option value="whatsapp">WhatsApp</option>

                  	<option value="telegram">Telegram</option>

				</select>
              </div>




            </div>



<div class="row form-group">
                
                <div class="col-md-12">
                	<label id="contact_mode">Enter Your Whatsapp Details</label>
                	
                  <input type="text" name="contact_mode" class="form-control rounded-0" placeholder="e.g 08100334599" required="true" />
              </div>




            </div>






            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" onclick=" $('#request').modal('hide');">Close</button>
              <button type="submit" name="submit" class="btn btn-primary submit_form">Request</button>
            </div>


        </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>












	<script src="js/jquery-3.2.1.min.js"></script>
	
	<script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/sweetalert.js"></script>

	<script type="text/javascript">


$(".submit_form").click(function(){



});


	$(".bringApply").click(function(){
//fbq('track', 'CompleteRegistration');
		
		 $('#request').modal({
		 	backdrop:'static',
		 	keyboard:false
		 });

});



$("#contact").change(function(){

if($(this).val()=="whatsapp"){
$("#contact_mode").text("Enter Your Whatsapp Details");
}
else{

$("#contact_mode").text("Enter Your Telegram Details");

}

});


if($("#contact").val()=="whatsapp"){
$("#contact_mode").text("Enter Your Whatsapp Details");
}else{

$("#contact_mode").text("Enter Your Telegram Details");

}

if($(window).width() >= 1080){
$("#desktop").attr("src","img/guy.png");
$("#mobile").remove();
}
else if($(window).width() < 1080){
$("#mobile").attr("src","img/guy1.png");
$("#desktop").remove();

}


$("#service").change(function(){
//Web_Design Graphic_Design Article_Writeup
//PriceText
price_text($(this));

});

price_text($("#service"));

function price_text(a){
	if(a.val()=="Web_Design"){
$("#PriceText").html("Our web design and App development prices start from <b>&#8358;35,000</b> *");

}
else if(a.val()=="Graphic_Design"){
$("#PriceText").html("Our graphic design prices start from <b>&#8358;5,000</b> *");


}
else if(a.val()=="Article_Writeup"){
$("#PriceText").html("our article writeup prices start from <b>&#8358;5,000</b> per article *");


}
}


 
<?php

 if(isset($_POST["submit"])){



$person_name=$name;
$contact_mode_write=ucwords("hi $person_name, We really appreciate you contacting us, we will get in touch with you within 24 hours");
if($err==true){
echo "setTimeout(function(){
 	 	Swal.fire({
title:'Error',
text:'We\\'re Sorry ".ucfirst($name).", An Error Has Occured. Please Try Again',
icon: 'error',
confirmButtonText:'OK',
allowOutsideClick:false
      });
  },100);";

}else{
echo "fbq('track', 'CompleteRegistration');";
	
	
	
 	 echo "setTimeout(function(){
 	 	Swal.fire({
title:'Thank You',
text:'$contact_mode_write',
icon: 'success',
confirmButtonText:'OK',
allowOutsideClick:false
      });
  },100);";
 }


}
?>


  

     

	</script>
	
	
	
	
</body>

</html>