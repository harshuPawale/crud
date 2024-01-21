<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="<?php echo base_url();?>asset/style.css">
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-12">
			<div class="form_wrapper">
 
				<div class="title_container">
				<h2>Student Registration Form Edit</h2>
				</div>
				<div class="row clearfix">
				<div class="">
					<form action="<?php echo base_url();?>Crud/studDetailupdate/<?php echo $studDetails->stud_id;?>" method="post">
					<div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
						<input type="text" name="name" placeholder="Enter Full Name" value="<?php echo $studDetails->student_name;?>"/>
					</div>
					<div class="input_field"> <span><i aria-hidden="true" class="fa fa-university"></i></span>
						<input type="text" name="collage_name" placeholder="Enter Collage Name" value="<?php echo $studDetails->collage_name;?>" />
					</div>
					<div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
						<input type="email" name="email" placeholder="Enter Email"  value="<?php echo $studDetails->email;?>" />
					</div>
					<!-- <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
						<input type="password" name="password" placeholder="Enter Password"  />
					</div> -->
					<div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone"></i></span>
						<input type="text" name="phone_num" pattern="[1-9]{1}[0-9]{9}" maxlength="10" minlength="10" placeholder="Enter Phone Number" value="<?php echo $studDetails->phone_num;?>" />
					</div>
					<div class="input_field"> <span><i aria-hidden="true" class="fa fa-map-marker"></i></span>
						<input type="text" name="adress" value="<?php echo $studDetails->address;?>" placeholder="Enter Address"  />
					</div>
					
					
						<div class="input_field radio_option">
						<input class="form-check-input" value="male" type="radio" name="radiogroup1" id="rd1">
						<label for="rd1">Male</label>
						<input class="form-check-input" value="female" type="radio" name="radiogroup1" id="rd2">
						<label for="rd2">Female</label>
						
						</div>
					
						<!-- <div class="input_field checkbox_option">
							<input type="checkbox" id="cb1">
							<label for="cb1">I agree with terms and conditions</label>
						</div> -->
						
					<input class="button" type="submit" name="submit" value="Update" />
					</form>
				</div>
				</div>
			</div>
			</div>
		</div>
	</div>
<!-- give error msg validaton-->
<?php if($this->session->flashdata('error')): ?>

<div class="bg-denger">
	<?php echo $this->session->flashdata('error');?>
</div>

<?php endif; ?>

<!-- insert data successfully -->
<?php if($this->session->flashdata('inserted')): ?>

<div class="bg-denger">
	
	<?php echo $this->session->flashdata('inserted');?>
	
</div>

<?php endif; ?>


<!-- update data successfully -->
<?php if($this->session->flashdata('updated')): ?>

<div class="bg-denger">
	
	<?php echo $this->session->flashdata('updated');?>

</div>

<?php endif; ?>

<!-- delet data successfully -->
<?php if($this->session->flashdata('deleted')): ?>

<div class="bg-denger">
	
	<?php echo $this->session->flashdata('deleted');?>
	
</div>

<?php endif; ?>

<!-- <?php

 print_r($studDetails);

?> -->


