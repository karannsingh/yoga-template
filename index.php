<?php

require("header.inc");

if(isset($_POST['submit'])){

	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$subject=$_POST['subject'];
	$comment=$_POST['comment'];

	$html="<table><tr><td>Name</td><td>:$name</td></tr><tr><td>Email</td><td>:$email</td></tr><tr><td>Mobile</td><td>:$mobile</td></tr><tr><td>Comment</td><td>:$comment</td></tr></table>";	

	include('smtp/PHPMailerAutoload.php');
	$mail = new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="karannsingh2311@gmail.com";
	$mail->Password="uirakxeepjsobihp";
	$mail->SetFrom("karannsingh2311@gmail.com");
	$mail->addAddress("karannsingh0@gmail.com");
	$mail->addAddress($email);
	$mail->IsHTML(true);
	$mail->Subject=$subject;
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		echo "<script>alert('Mail Send Successfully!')</script>";
	}else{
		echo "<script>alert('Error Occur While Sending Email!')</script>";
	}
}

?>
<body>

	<!-- Navigation Bar Menu -->	
	<nav class="navbar navbar-expand-lg navbar-light bg-white pl-5 pr-5">
		<a class="navbar-brand" href="#">
			<img src="assets/img/logo.png" class="img-responsive"/>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item px-4">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item px-4">
					<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item px-4">
					<a class="nav-link" href="#">Blog</a>
				</li>
				<li class="nav-item px-4">
					<a class="nav-link" href="#">Training</a>
				</li>
				<li class="nav-item px-4">
					<a class="nav-link" href="#">Event</a>
				</li>
				<li class="nav-item px-4">
					<a class="nav-link" href="#">Shop</a>
				</li>
				<li class="nav-item px-4">
					<a class="nav-link" href="#">Contact</a>
				</li>
			</ul>
		</div>
	</nav>	

	<!-- Yoga Program -->
	<section id="yoga-banner">
		<div class="container-fluid">
			<div class="row">				
				<div class="col-lg-6 col-md-6 col-sm-12">					
					<img src="assets/img/main-1.png" class="img-responsive img-fluid"/>
					<img src="assets/img/19.png" class="img-responsive img-fluid yoga-img img-1"/>					
					<img src="assets/img/4.png" class="img-responsive yoga-img img-fluid img-2"/>
					<img src="assets/img/5.png" class="img-responsive yoga-img img-fluid img-3"/>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<h2>Balance Your Body and Mind</h2>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit
						esse cillum dolore eu fugiat nulla pariatur, Excepteur
						sint accaecat cupidatal.
					</p>
					<button type="button" class="btn" data-toggle="modal" data-target="#FormModal">Send Email</button>
					<img src="assets/img/16.png" class="img-responsive yoga-img img-4"/>
					<img src="assets/img/9.png" class="img-responsive yoga-img img-5"/>
					<img src="assets/img/10.png" class="img-responsive yoga-img img-6"/>
				</div>						
			</div>
		</div>
	</section>

	<!-- Email Form Modal -->

	<form method="post" id="frmContactus">
		<div class="modal fade" id="FormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Email Form</h5>
						<button type="button" class="close" id="close_btn" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">					
						<div class="contact-form">
							<div class="form-group">
								<label class="control-label col-sm-2" for="name">Name:</label>
								<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Email:</label>
								<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="mobile">Mobile:</label>
								<input type="text" class="form-control" id="mobile" placeholder="Enter Mobile" name="mobile" required>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="subject">Subject:</label>
								<input type="text" class="form-control" id="subject" placeholder="Enter Subject" name="subject" required>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="comment">Comment:</label>
								<textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
							</div>
						</div>					
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</form>

	<!-- Pregnant Women Program -->
	<section id="pregnant-program">
		<img src="assets/img/main-2.png" class="img-responsive img-fluid" />
		<div class="container">
			<div class="row">												
				<div class="col-lg-6 col-md-6 col-sm-12">					
					<h2>Pregnant Women Program</h2>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit
						esse cillum dolore eu fugiat nulla pariatur, Excepteur
						sint accaecat cupidatal.
					</p>
					<button type="button" class="btn">Join us now</button>					
				</div>
			</div>
		</div>
	</section>

	<!-- Multiple Program -->
	<section id="multiple-program">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="card text-center">
						<div class="card-img">
							<img src="assets/img/Icon-1.png" class="img-8" alt="yoga boy">
						</div>					  
						<div class="card-body">
							<h3>Program 1</h3>
							<p class="card-text">sint occaecat cupidatat non</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="card text-center">
						<div class="card-img">
							<img src="assets/img/Icon-2.png" alt="yoga boy">
						</div>
						<div class="card-body">
							<h3>Program 2</h3>
							<p class="card-text">sint occaecat cupidatat non</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="card text-center">
						<div class="card-img">
							<img src="assets/img/Icon-3.png" alt="yoga boy">
						</div>
						<div class="card-body">
							<h3>Program 3</h3>
							<p class="card-text">sint occaecat cupidatat non</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Breathing Yoga -->	

	<section id="breathing-yoga">
		<div class="container">
			<div class="row">				
				<div class="col-lg-6 col-md-6 col-sm-12">
					<h2>Yoga Breathing or Pranayama</h2>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit
						esse cillum dolore eu fugiat nulla pariatur, Excepteur
						sint accaecat cupidatal.
					</p>
					<button type="button" class="btn">Learn More</button>					
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="assets/img/9.png" class="img-responsive yoga-img img-fluid img-10"/>
					<img src="assets/img/2.png" class="img-responsive yoga-img img-fluid img-10"/>
					<img src="assets/img/10.png" class="img-responsive yoga-img img-fluid img-11"/>
					<img src="assets/img/main-3.jpg" class="img-responsive breath-img img-fluid"/>					
					<img src="assets/img/4.png" class="img-responsive yoga-img img-fluid img-7"/>
					<img src="assets/img/5.png" class="img-responsive yoga-img img-fluid img-9"/>
					<img src="assets/img/11.png" class="img-responsive img-fluid yoga-img img-9"/>
				</div>						
			</div>
		</div>
		<img src="assets/img/7.png" class="img-responsive yoga-img img-fluid img-12"/>
		<img src="assets/img/14.png" class="img-responsive yoga-img img-fluid img-13"/>
	</section>

	<!-- Join Now -->

	<section id="join-now">		
		<div class="container-fluid" style="background-color: #f1efeb;">
			<div class="row">
				<img src="assets/img/main-4.png" class="img-fluid yoga-img">
				<div class="col-lg-6 offset-lg-6 col-md-6 offset-md-6 col-sm-12 pl-5">
					<img src="assets/img/9.png" class="img-responsive img-fluid yoga-img img-14"/>					
					<h2>Join Now and Get 50% Off</h2>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit
						esse cillum dolore eu fugiat nulla pariatur, Excepteur
						sint accaecat cupidatal.
					</p>
					<button type="button" class="btn">Join us now</button>
				</div>
			</div>
		</div>
	</section>

	<!-- Gallery -->

	<section id="gallery">
		<div class="container">
			<div class="row">
				<img src="assets/img/12.png" class="img-responsive yoga-img img-fluid img-10"/>
				<img src="assets/img/2.png" class="img-responsive yoga-img img-fluid img-10"/>
				<img src="assets/img/16.png" class="img-responsive yoga-img img-fluid img-14"/>
				<img src="assets/img/9.png" class="img-responsive yoga-img img-fluid img-15"/>
				<img src="assets/img/27.png" class="img-responsive yoga-img img-fluid img-15"/>
				<img src="assets/img/29.png" class="img-responsive yoga-img img-fluid img-16"/>
				<img src="assets/img/28.png" class="img-responsive yoga-img img-fluid img-17"/>
				<div class="col-lg-12 col-md-12 col-sm-12 text-center">					
					<h5>Gallery</h5>
					<p>
						Duis aute irure dolor in reprehenderit in voluptate velit
						esse cillum dolore eu fugiat nulla pariatur, Excepteur
						sint accaecat cupidatal.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="card text-center">
						<div class="card-img">
							<img src="assets/img/main-5.jpg" class="img-8" alt="yoga boy">
						</div>					  
						<div class="card-body">
							<h3>Facilis Gravida</h3>
							<p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit
						esse cillum dolore eu fugiat nulla pariatur</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="card text-center">
						<div class="card-img">
							<img src="assets/img/main-6.jpg" alt="yoga boy">
						</div>
						<div class="card-body">
							<h3>Facilis Gravida</h3>
							<p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit
						esse cillum dolore eu fugiat nulla pariatur</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="card text-center">
						<div class="card-img">
							<img src="assets/img/main-7.jpg" alt="yoga boy">
						</div>
						<div class="card-body">
							<h3>Facilis Gravida</h3>
							<p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit
						esse cillum dolore eu fugiat nulla pariatur</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Video -->

	<section id="video-yoga">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">					
					<img src="assets/img/main-8.jpg" class="img-responsive img-fluid img-9">				
  					<i class="fa-solid fa-play play-btn"></i> 					
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<h2>Yoga Training Video Showreel</h2>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit
						esse cillum dolore eu fugiat nulla pariatur, Excepteur
						sint accaecat cupidatal.
					</p>
					<ul>
						<li><i class="fa-brands fa-square-facebook"></i></li>
						<li><i class="fa-brands fa-square-instagram"></i></li>
						<li><i class="fa-brands fa-square-twitter"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Get In Touch -->

	<section id="contact">
		<div class="container">
			<div class="row">
				<img src="assets/img/12.png" class="img-responsive yoga-img img-fluid img-10"/>
				<img src="assets/img/2.png" class="img-responsive yoga-img img-fluid img-10"/>
				<img src="assets/img/16.png" class="img-responsive yoga-img img-fluid img-14"/>
				<img src="assets/img/9.png" class="img-responsive yoga-img img-fluid img-15"/>
				<img src="assets/img/27.png" class="img-responsive yoga-img img-fluid img-15"/>
				<img src="assets/img/29.png" class="img-responsive yoga-img img-fluid img-16"/>
				<img src="assets/img/28.png" class="img-responsive yoga-img img-fluid img-17"/>
				<div class="col-lg-12 col-md-12 col-sm-12 text-center">					
					<h5>Get in Touch</h5>
					<p>
						Duis aute irure dolor in reprehenderit in voluptate velit
						esse cillum dolore eu fugiat nulla pariatur, Excepteur
						sint accaecat cupidatal.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 text-center">
					<div class="form-group">
						<input type="email" class="form-control" id="name" placeholder="Your Name">
						<input type="email" class="form-control" id="gender" placeholder="Gender">
						<textarea class="form-control" id="message" placeholder="Messages" rows="3"></textarea>
						<button type="button" class="btn">Send Message</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	require("footer.inc");
	?>

	<script>
		$(document).ready(function(){			
			setTimeout(function(){
				$('#FormModal').modal('show');
			},10000);
		});		
	</script>
</body>
</html>