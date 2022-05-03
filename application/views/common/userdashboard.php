<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <title>SMS TravelBook</title>
  <style>
    .nav-link {
        font-size: 23px;
        font-family:Monotype Corsiva;  
        margin-left:20px;}
    h1{
        font-size: 40px;
        font-family:Monotype Corsiva; }
}     
</style>
</head>
  
<link rel="stylesheet" href="<?= base_url('smsbook\icons\fontawesome-free-5.13.0-web\fontawesome-free-5.13.0-web\css\all.css'); ?>">
<link rel="stylesheet" href="<?= base_url('smsbook\css\bootstrap.css'); ?>">
 
<body>
  
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<b>  
  <a class="navbar-brand" href="">
    <img src="<?= base_url('smsbook\img\logo.jpg'); ?>"  style="width:200px;height: 63px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 

    <div class="col-sm" style="margin-left:150px;">
  <div class="collapse navbar-collapse" id="navbarColor01" >
    <ul class="navbar-nav mr-auto">      
    <li class="nav-item" >
              
              <a class="nav-link"  href="<?= base_url("user/mydetails") ?>" >My Details</a>
              </li>
            <li class="nav-item">
              <a class="nav-link "  href="<?= base_url('user/mybookings') ?>">My Bookings</a>
             </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('user/changepassword') ?>"> Change Password</a>
            </li>
       </li>
    </ul>
  </div></b>
  </div>
<a  href="<?= base_url('home/ulogout')?>" class="nav navba" style="color:white;font-size: 23px;font-family:Monotype Corsiva;">Logout</a>

</div>
</nav>
</body>
</html>

