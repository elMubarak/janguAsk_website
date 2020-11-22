<?php require 'jangu.php';

// if (isset($_POST['subscribe-btn'])) {
//         // Fetch subscriber details
//         $subscriberName = htmlspecialchars($_POST['subscriberName']);
//         $subscriberEmail = htmlspecialchars($_POST['subscriberEmail']);
//         // Generate verification code
//         $verify_code = md5(uniqid((mt_rand())));
//         date_default_timezone_set(timezone_identifier)
//         $created = date("Y-m-d H:i:s");
//         // Check if user is already subscribed to newsletter
//         echo "name: $subscriberName email: $subscriberEmail";

//         $exists = query('SELECT * FROM newsletter WHERE email=:email',array(':email'=>$subscriberEmail), $conn);
//         if ($exists->rowCount() > 0) {
//             echo "<script>alert('Your email is already subscribed')</script>";
//         }else{
//         	echo "<script>alert('Your email is a new one')</script>";
//         }
//         query('INSERT INTO newsletter (name, email, verify_code, created) 
//                 VALUES (:name, :email, :verify_code, :created)',
//                 array(':name'=>$subscriberName,
//                       ':email'=>$subscriberEmail,
//                       ':verify_code'=>$verify_code,
//                       ':created'=>$created,
//                   ),
//                 $conn);
//     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>JanguAsk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
<!--===============================================================================================-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="assets/css/animate.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--===============================================================================================-->
</head>
<body style="">
	
	
	<div class="bg-img1  size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15">
		<span class="banner-one__shape-1"></span>
            <span class="banner-one__shape-2"></span>
            <span class="banner-one__shape-3"></span>
            <span class="banner-one__shape-4"></span>
		<div class="wsize1">
			<a href="index.php">
				<p class="txt-center p-b-23">
				 <img src="assets/images/resources/preloader.png" class="main-logo" width="70" height="70" alt="Awesome Image" />

			</p>
			<h3 class="l1-txt1 txt-center p-b-22">
				 <span style="color: grey;">Jangu</span><span style="color: orange;">Ask</span>
			</h3>
			</a>

			<p class="txt-center m2-txt1 p-b-67">
				We are launching soon, follow us for update now!
			</p>

			<div class="flex-w flex-sa-m cd100 bor1 p-t-42 p-b-22 p-l-50 p-r-50 respon1">
				<div class="flex-col-c-m wsize2 m-b-20">
					<span class="l1-txt2 p-b-4 days">35</span>
					<span class="m2-txt2">Days</span>
				</div>

				<span class="l1-txt2 p-b-22">:</span>
				
				<div class="flex-col-c-m wsize2 m-b-20">
					<span class="l1-txt2 p-b-4 hours">17</span>
					<span class="m2-txt2">Hours</span>
				</div>

				<span class="l1-txt2 p-b-22 respon2">:</span>

				<div class="flex-col-c-m wsize2 m-b-20">
					<span class="l1-txt2 p-b-4 minutes">50</span>
					<span class="m2-txt2">Minutes</span>
				</div>

				<span class="l1-txt2 p-b-22">:</span>

				<div class="flex-col-c-m wsize2 m-b-20">
					<span class="l1-txt2 p-b-4 seconds">39</span>
					<span class="m2-txt2">Seconds</span>
				</div>
			</div>

			<form class="flex-w flex-c-m contact100-form validate-form p-t-70" method="POST" action="soon.php">
				<div class="row">
					<div class="wrap-input100 validate-input where1" data-validate = "Name is required: ex@abc.xyz">
						<input class="s1-txt0 placeholder0 input100" type="text" name="subscriberName" placeholder="Fullname">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input where1" data-validate = "Email is required: ex@abc.xyz">
						<input class="s1-txt0 placeholder0 input100" type="text" name="subscriberEmail" placeholder="Email Address">
						<span class="focus-input100"></span>
					</div>
					<button class="thm-btn-soon " name="subscribe-btn" type="submit" style="text-align: center;height: 60px;">
						<span>Notify Me</span>
					</button>
				</div>
			</form>			
		</div>
	<!-- </div> -->



	

<!--===============================================================================================-->	
	 <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/css/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/countdowntime/moment.min.js"></script>
	<script src="assets/countdowntime/moment-timezone.min.js"></script>
	<script src="assets/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="assets/countdowntime/countdowntime.js"></script>
	<script>
		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: 2020,
			endtimeMonth: 06,
			endtimeDate: 05,
			endtimeHours: 12,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "" 
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
<!--===============================================================================================-->
	<script src="assets/js/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

</body>
</html>