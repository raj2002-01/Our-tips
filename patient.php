<?php
include "header.php"

?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<h1><center><b>ADD PATIENT DETAILS</b></center></h1>
		<div class="pd-ltr-20 xs-pd-20-10">


		<!-- 	<div class="min-height-200px">
				
				</div> -->
				<!-- Default Basic Forms Start -->
				<div class="pd-10 card-box mb-30">
					
					

<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
	
<div class="container mt-0">

<div class="card">

<div class="card-header text-center">
</div>
<div class="card-body">
<form  method="POST" action="pdata.php">
<div class="form-group">
<label for="exampleInputEmail1"><b>PATIENT NAME</b></label>
<input type="varchar" name="first_name"  id="first_name" class="form-control"  required="">
</div>
<div class="form-group">
<label for="exampleInputEmail1"><b>PATIENT AGE</b></label>
<input type="varchar" name="age"  id="age" class="form-control"  required="">
</div>
<div class="form-group">
<label for="exampleInputEmail1"><b>DOCTOR NAME</b></label>
<input type="varchar" name="last_name" id="last_name" class="form-control"  required="">
</div> 
<div class="form-group">

				<div class="wrap-input100 input100-select bg1" style="width: 100%;">
<span class="label-input100 "><B>OUR SERVICES</B></span>
					<div>
		<select class="js-select2 form-control" name="sym">
				<option>DIAGNOSTIC IMAGING</option>
			<option>ABDOMINAL ULTRASOUND</option>
<option>UPPER OR LOWER EXTREMITY ARTERIAL ULTRASOUND</option>
			<option>BREAST ULTRASOUND</option>
			<option>CAROTID ULTRASOUND</option>
<option>ECHOCARDIOGRAM ULTRASOUND</option>
						</select>
						
					</div>




</div>
</div>                                  
<div class="form-group">
<label for="exampleInputEmail1"><b>AMOUNT/PAYMENT</b></label>
<input type="varchar" name="email" id="email" class="form-control"  aria-describedby="emailHelp" required="">

</div>
<div class="form-group">
<label for="exampleInputEmail1"><b>DATE</b></label>
<input type="Date" name="dis" id="dis" class="form-control"  aria-describedby="emailHelp" required="">

</div>
 <div class="form-group">
<label for="exampleInputEmail1"><b>PARTICULAR DISEASE</b></label>
<input type="varchar" name="amt" id="amt" class="form-control"  aria-describedby="emailHelp" required="">

</div>



  
<!-- <div class="g-recaptcha" data-sitekey="Your Site Key"></div> -->
<CENTER><input type="submit" name="submit" class="btn btn-primary" style="width: 80%"></CENTER>
</form>

</div>
</div>
</div>
</body>
</html>

			<div class="footer-wrap pd-20 mb-20 card-box">
				 <a href="#" target="_blank">DESIGN BY SPRINGS</a>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>
