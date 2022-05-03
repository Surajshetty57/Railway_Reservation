
<style>
    .border-class
{
  width:60%;
}
h2{
  color:#2196F3;
  text-decoration:underline;
  margin-left:120px;
  font-family:Monotype Corsiva;
  
}

</style>
<?php include('common/userdashboard.php');?><br><br>
<div class="container">
<h2 style="font-size:50px">My Details<?php echo anchor("user/dashboard",'<i class="fas fa-backward"></i> Return ',['class'=>'btn btn-primary','style'=>'font-family:san-serif;margin-left:580px' ]);?></h2><br>
</div>


<div class="d-flex justify-content-center ">
  <div class="border-class">
    <div class="container">
      <div class="shadow-lg p-4 mb-4 bg-white">
      <?php echo form_open("user/mydetails");?>
<table class="table table-primary" style="font-family:Monotype Corsiva;font-size:25px;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="row"><?php echo ucfirst($data['fname'])?></th>
    </tr>
    <tr>
      <th scope="col">User Name</th>
      <th scope="row"><?php echo ucfirst($data['uname'])?></th>
    </tr>
    <tr>
      <th scope="col">Date of Birth</th>
      <th scope="row"><?php echo $data['dob']?></th>
    </tr>
    <tr>
      <th scope="col">Gender</th>
      <th scope="row"><?php echo ucfirst($data['gender'])?></th>
    </tr>
    <tr>
      <th scope="col">Mobile</th>
      <th scope="row"><?php echo ucfirst($data['mobile'])?></th>
    </tr>
    <tr>
      <th scope="col">City</th>
      <th scope="row"><?php echo ucfirst($data['city'])?></th>
    </tr>
    <tr>
      <th scope="col">E-mail</th>
      <th scope="row"><?php echo ucfirst($data['email'])?></th>
    </tr>
  </thead>
</table>
</div>
</div>
</div>
</div>
</div><br><br>


