<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CRUD Opration</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="<?php echo base_url();?>asset/style.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-bottom">
                <div class="container-fluid">
                    <b><a class="navbar-brand" href="#">Student Registration</a></b>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <button class="btn btn-primary" style="float:left !important;"> <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>../taskphp/crud" style="color:#fff; ">Registration Form</a></button> 
                    </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class="container" style="margin-top:100px; margin-bottom:400px;">
    <div class="row">
        <div class="col-md-12">
            <h1 style="margin-bottom:50px; text-align:center; ">Student Details </h1>
        <table class="table table-striped table-primary table-hover">
            <thead>
                <tr>
                <th scope="col">Student id</th>
                <th scope="col">Name</th>
                <th scope="col">Collage Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">Gender</th>
                <th scope="col">Edit</th>
                <th scope="col">Delet</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($student_detils as $student): ?>
                <tr>
                <th scope="row"><?php echo $student->stud_id;?></th>
                <td><?php echo $student->student_name;?></td>
                <td><?php echo $student->collage_name;?></td>
                <td><?php echo $student->email;?></td>
                <td><?php echo $student->phone_num;?></td>
                <td><?php echo $student->address;?></td>
                <td><?php echo $student->gender;?></td>
                <td><button class="btn btn-success"><a href="<?php echo base_url();?>crud/editstudDetail/<?php echo $student->stud_id; ?>" class="btn_std"><i class="fa fa-edit"></i> Edit</a></button></td>
                <td><button class="btn btn-danger"><a href="<?php echo base_url();?>crud/deletstudDetail/<?php echo $student->stud_id; ?>" class="btn_std"><i class="fa fa-trash-o"></i> Delete</a></button></td>
                </tr>
            
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </div>
</div>



</body>
</html>