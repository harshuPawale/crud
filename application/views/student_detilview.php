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
        <table class="table">
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
                <td><button class="btn btn-success"><a href="<?php echo base_url();?>crud/editstudDetail/<?php echo $student->stud_id; ?>" class="btn_std">Edit</a></button></td>
                <td><button class="btn btn-danger"><a href="<?php echo base_url();?>crud/deletstudDetail/<?php echo $student->stud_id; ?>" class="btn_std">Delete</a></button></td>
                </tr>
            
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </div>
</div>



</body>
</html>