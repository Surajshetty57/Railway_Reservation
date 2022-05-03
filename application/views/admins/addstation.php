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
        text-align:center;
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
              <li class="nav-item active">
                <a class="nav-link" data-toggle="tab" href="<?= base_url('admin/addstation') ?>"> Add Station</a>
              </li>
              <li class="nav-item" > 
                <a class="nav-link"  data-toggle="tab" href="<?= base_url('admin/addtrain') ?>" >Add Train</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="<?= base_url('admin/userdetails') ?>"> User Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="<?= base_url('admin/reserved') ?>"> Booked</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" data-toggle="tab" href="<?= base_url('admin/feedback') ?>"> Feedback</a>
              </li>
     
          
         </li>
      </ul>
    </div></b>
  </div>
  <a  href="<?= base_url('home/logout')?>" class="nav navba" style="color:white">Logout</a>
</div>
</nav><br><br>

<div class="container">

<h1 style="color:#2196F3;text-decoration:underline">ADD Origin/Destination<?php echo anchor("admin/dashboard",'<i class="fas fa-backward"></i> Return',['class'=>'btn btn-primary','style'=>'font-family:san-serif;margin-left:600px' ]);?></h1>
</div><br>
<div class="d-flex justify-content-center ">
<h2 style="font-family:cooper">
<?php if( $error = $this->session->flashdata('message')): ?>
          <div class="col-lg-15">
          <div class="alert alert-dismissible alert-success">
            <?= $error ?>
          </div>
        </div>
        <?php endif; ?>
</div>
<br>
<table class=" table table-light" >
<thead>
<tr>      
    <th scope="col" width="50%" >
       
<div class="d-flex justify-content-center " >
  <div class="border-class" style="width:70%" >
    <div class="container">
      <div class="shadow-lg p-4 mb-4 bg-white">
        <?php echo form_open('admin/addorigin');?>
        <form method="post" name="adminlogin" action="<?php echo base_url('admin/addorigin');?>" >
        <fieldset>
        <h2 style="font-family:Monotype Corsiva;font-size:50px;color:#2196F3;">Add Origin</h2><br>
          
        
       
        <div class="col-lg-9 ">
            <div class="form-group"><b>
              <label for="origin">Origin</label>
              <?php echo form_input(['type'=>'username','name'=>'origin','class'=>'form-control','placeholder'=>'Origin']); ?>
	            <?php echo form_error('origin'); ?>
            </div>
            <button type="submit" class="btn btn-primary" value="add">Add</button></b>
    
            
        </div>
        </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
    </th>
    <th scope="col" width="50%" >
    
<div class="d-flex justify-content-center " >
  <div class="border-class" style="width:70%">
    <div class="container">
      <div class="shadow-lg p-4 mb-4 bg-white">
      <?php echo form_open('admin/adddestination');?>
        <form method="post" name="adminlogin" action="<?php echo base_url('admin/adddestination');?>" >
        <fieldset>
        <h2 style="font-family:Monotype Corsiva;color:#2196F3;font-size:50px">Add Destination</h2><br>
          
       
       
        <div class="col-lg-9 ">
            <div class="form-group"><b>
              <label for="username">Destination</label>
              <?php echo form_input(['type'=>'username','name'=>'destination','class'=>'form-control','placeholder'=>'Destination']); ?>
	            <?php echo form_error('destination'); ?>
            </div>
            <button type="submit" class="btn btn-primary" value="login">Add</button></b>
            
        </div>
        </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
    </th>
</tr>
</table><br><br>