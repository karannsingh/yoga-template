<?php

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

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Email Form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
	
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#FormModal">
		Send Email
	</button>

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

	<script>
		$(document).ready(function(){			
			setTimeout(function(){
				$('#FormModal').modal('show');
			},10000);
		});		
	</script>	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>