<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
   
    <link rel="stylesheet" href="<?php echo base_url('smsbook/css/bootstrap.css')?>">
    <style>
    .nav-link {
        font-size: 25px; 
        margin-left:20px; }  
    a{
        font-size: 23px;
        font-family:Monotype Corsiva; }
    h1{
        font-size: 45px;
        font-family:Monotype Corsiva; }
    </style>
 </head>
 
<link rel="stylesheet" href="<?= base_url('smsbook\icons\fontawesome-free-5.13.0-web\fontawesome-free-5.13.0-web\css\all.css'); ?>">
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<b>
<a class="navbar-brand" href="#"><h1><b>Welcome Admin</b></h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="col-sm" style="margin-left:150px;" >
  <div class="collapse navbar-collapse" id="navbarColor01"  >
    <ul class="navbar-nav mr-auto" > 
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="<?= base_url('admin/addstation') ?>"> Add Station</a>
              </li>     
              <li class="nav-item" >
               <a class="nav-link"  data-toggle="tab" href="<?= base_url('admin/addtrain') ?>" >Add Train</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?= base_url('admin/userdetails') ?>"> User Details</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('admin/reserved') ?>"> Booked</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="<?= base_url('admin/feedback') ?>"> Feedback</a>
              </li>
              
         </li>
      </ul>
    </div></b>
  </div>
  <a  href="<?= base_url('home/logout')?>" class="nav navba" style="color:white">Logout</a>
</div>
</nav><br><br>
</body>
</html>
<div class="container">
<h1 style="color:#2196F3;text-decoration:underline">Details of User<?php echo anchor("admin/dashboard",'<i class="fas fa-backward"></i> Return',['class'=>'btn btn-primary','style'=>'font-family:san-serif;margin-left:760px' ]);?></h1><br>
<div class="d-flex justify-content-center ">
<h2 style="font-family:cooper">
<?php if( $error = $this->session->flashdata('message')): ?>
              <div class="col-lg">
                <div class="alert alert-dismissible alert-danger">
                  <?= $error ?>
                </div>
              </div>
              <?php endif; ?>
</h2>
</div><br>
<table class="table table-type  " style="text-align:center;">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Userame</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">City</th>
      <th scope="col">E-mail</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?php if(count($allusers)):?>
    <?php foreach($allusers as $alluser): ?>
    <tr class="table-type">
      <td><?php echo $alluser->passenger_id; ?></td>
      <td><?php echo $alluser->fname; ?></td>
      <td><?php echo $alluser->uname; ?></td>
      <td><?php echo $alluser->dob; ?></td>
      <td><?php echo $alluser->gender; ?></td>
      <td><?php echo $alluser->mobile; ?></td>
      <td><?php echo $alluser->city; ?></td>
      <td><?php echo $alluser->email; ?></td>
      
      
      <td> <?php echo anchor("admin/deleteuser/{$alluser->passenger_id}",'Delete',['class'=>'btn btn-outline-danger','style'=>'font-size:15px;height:20px;padding-top :0px;']); ?></td>
        
    </tr>
    <?php endforeach;?>
  <?php else:?>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td><h4>No One Registered Yet</h4></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  <?php endif;?>
  </tbody>
</table>
</div><br>