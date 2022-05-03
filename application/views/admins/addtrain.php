
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
   
    <link rel="stylesheet" href="<?php echo base_url('smsbook/css/bootstrap.css')?>">
    <style>
    .border-class
{
  width:40%;
}
    .nav-link {
        font-size: 25px; 
        margin-left:20px; }  
    a{
        font-size: 23px;
        font-family:Monotype Corsiva; }
    h1{
        font-size: 40px;
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
                <a class="nav-link active"  data-toggle="tab" href="<?= base_url('admin/addtrain') ?>" >Add Train</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="<?= base_url('admin/userdetails') ?>"> User Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="<?= base_url('admin/reserved') ?>"> Booked</a>
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

<div class="d-flex justify-content-center ">
<h2 style="font-family:cooper">
<?php if( $error = $this->session->flashdata('message')): ?>
              <div class="col-lg">
                <div class="alert alert-dismissible alert-success">
                  <?= $error ?>
                </div>
              </div>
              <?php endif; ?>
</h2>
</div>

<div class="d-flex justify-content-center ">

  <div class="border-class">
    <div class="container">
      <div class="shadow-lg p-4 mb-4 bg-white">
      <?php echo form_open('admin/addtrain');?>
        <form method="post" name="addtrain" action="<?php echo base_url('admin/adtrain');?>">
          <fieldset>
         
         
          <h1 style="color:#2196F3;text-decoration:underline">Add New Train </h1><br>
              
              <div class="col-lg-11"><b>
              <div class="form-group" >
                <label for="origin">Origin</label>
                <select class="form-control" id="exampleSelect" name="origin"> 
                  <?php if(count($odetails)):?>
                  <?php foreach($odetails as $odetail):?>
                  <option value=<?php echo $odetail->origin?>><?php echo $odetail->origin?> </option>
                  <?php endforeach;?>
                  <?php endif;?>
                </select><?php echo form_error('origin'); ?>
              </div>
              <div class="form-group" >
                <label for="Destination">Destination</label>
                <select class="form-control" id="exampleSelect" name="destination" > 
                <?php if(count($ddetails)):?>
                <?php foreach($ddetails as $ddetail):?>
                <option value=<?php echo $ddetail->destination?>><?php echo $ddetail->destination?> </option>
                <?php endforeach;?>
                <?php endif;?>
                </select>
              </div>
              <div class="form-group">
                <label for="Date">Date</label>
                <?php echo form_input(['type'=>'date','name'=>'date','class'=>'form-control','value'=>set_value('date')]); ?>
                <?php echo form_error('date'); ?>
              </div>
              <div class="form-group"><b>
                <label for="Departure Time">Departure Time</label>
                <?php echo form_input(['type'=>'time','name'=>'departuretime','class'=>'form-control','placeholder'=>'Username','value'=>set_value('departuretime')]); ?>
	              <?php echo form_error('departuretime'); ?>
              </div>
              <div class="form-group">
                <label for="Arrival Time">Arrival Time</label>
                <?php echo form_input(['type'=>'time','name'=>'arrivaltime','class'=>'form-control','placeholder'=>'Password','value'=>set_value('arrivaltime')]); ?>
	              <?php echo form_error('arrivaltime'); ?>
              </div>
              <div class="form-group">
                <label for="exampleSelect1">Class</label>
                <select class="form-control" id="exampleSelect1" name="class">
                <option>General</option>
                <option>Sleeper</option>
                <option>AC</option>
                </select>
              </div>
              <div class="form-group">
                <label >Price</label>
                <?php echo form_input(['type'=>'number','name'=>'price','class'=>'form-control','placeholder'=>'Price']); ?>
                <?php echo form_error('price'); ?>
              </div>
              <button type="submit" class="btn btn-primary" value="login">Add Train</button>
              <?php echo anchor("admin/dashboard",'<i class="fas fa-backward"></i> Return',['class'=>'btn btn-primary','style'=>'font-family:san-serif;' ]);?>
             
            </div>
        </fieldset>
        </form>
      </div>
    </div>
  </div>
</div><br><br>

