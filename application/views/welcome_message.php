
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<div class="form_wrapper">
 
				<div class="title_container">
				<h2>Student Registration Form</h2>
				</div>
				<div class="row clearfix">
				<div class="">
					<form action="<?php echo base_url();?>Crud/studentDetail" method="post">
					<div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
						<input type="text" name="name" placeholder="Enter Full Name" required/>
					</div>
					<div class="input_field"> <span><i aria-hidden="true" class="fa fa-university"></i></span>
						<input type="text" name="collage_name" placeholder="Enter Collage Name"  required/>
					</div>
					<div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
						<input type="email" name="email" placeholder="Enter Email"  required/>
					</div>
					<div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
						<input type="password" name="password" placeholder="Enter Password"  required/>
					</div>
					<div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone"></i></span>
						<input type="text" name="phone_num" pattern="[1-9]{1}[0-9]{9}" maxlength="10" minlength="10" placeholder="Enter Phone Number"  required/>
					</div>
					<div class="input_field"> <span><i aria-hidden="true" class="fa fa-map-marker"></i></span>
						<input type="text" name="adress" placeholder="Enter Address"  required/>
					</div>
					
					
						<div class="input_field radio_option">
						<input class="form-check-input" value="male" type="radio" name="radiogroup1" id="rd1">
						<label for="rd1">Male</label>
						<input class="form-check-input" value="female" type="radio" name="radiogroup1" id="rd2">
						<label for="rd2">Female</label>
						</div>
					
						<div class="input_field checkbox_option">
							<input type="checkbox" id="cb1" required>
							<label for="cb1">I agree with terms and conditions</label>
						</div>
						
					<input class="button" type="submit" name="submit" value="Register" />
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

<!-- // print the data  -->
<?php

//  print_r($student_detils);

?>


