
<style>
    .border-class
{
  width:100%;
}
h2{
  color:#2196F3;
  text-decoration:underline;
  margin-left:10px;
  font-family:Monotype Corsiva;
  
}a{
        font-size: 23px;
        font-family:Monotype Corsiva; }

</style>
<?php include('common/userdashboard.php');?><br><br>
<div class="container">
<h2 style="font-size:50px">My Bookings<?php echo anchor("user/dashboard",'<i class="fas fa-backward"></i> Return',['class'=>'btn btn-primary','style'=>'font-family:san-serif;margin-left:760px' ]);?></h2><br>
</div>
<div class="d-flex justify-content-center ">
<h1 style="font-family:cooper">
<?php if( $error = $this->session->flashdata('bookmessage')): ?>
              <div class="col-lg">
                <div class="alert alert-dismissible alert-danger">
                  <?= $error ?>
                </div>
              </div>
              <?php endif; ?>
</h1>
</div>


<div class="d-flex justify-content-center ">
  <div class="border-class">
    <div class="container">
      <div class="shadow-lg p-4 mb-4 bg-white">
      <?php echo form_open("user/mybookings");?>

      <table class="table table-default  " style="text-align:center">
  <thead>
    <tr>
      <th scope="col">Booking ID</th>
      <th scope="col">Train ID</th>
      <th scope="col">Origin</th>
      <th scope="col">Destination </th>
      <th scope="col">Passengers</th>
      <th scope="col">Date</th>
      <th scope="col">Departure Time</th>
      <th scope="col">Arrival Time</th>
      <th scope="col">Class </th>
      <th scope="col">Amount Paid</th>
      <th scope="col">Action</th>
      <tr>
      
    </tr>
    </tr>
  </thead>
  <tbody>
  <?php if(count($result)):?>
    <?php foreach($result as $res): ?>
    <tr class="table-type">
    <td scope="row"><?php echo ucfirst($res['booking_id'])?></td>
    <td scope="row"><?php echo ucfirst($res['train_id'])?></td>
    <td scope="row"><?php echo ucfirst($res['origin'])?></td>
      <td scope="row"><?php echo ucfirst($res['destination'])?></td>
      <td scope="row"><?php echo ucfirst($res['pname'])?></td>
      <td scope="row"><?php echo ucfirst($res['date'])?></td>
      <td scope="row"><?php echo ucfirst($res['departuretime'])?></td>
      <td scope="row"><?php echo ucfirst($res['arrivaltime'])?></td>
      <td scope="row"><?php echo ucfirst($res['class'])?></td> 
      <td scope="row"><?php echo ucfirst($res['tamount'])?></td>
      <td>
            <?php echo anchor("user/cancel_ticket/$res[booking_id]",'Cancel',['class'=>'btn btn-outline-danger','style'=>'font-size:15px;height:20px;width:100%;padding-top :0px;text-align:center']); ?>
      </td>
    </tr>
    </tr>
    <?php endforeach;?>
  <?php else:?>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h4>You haven't booked any train</h4></td>
      <td></td>
      <td></td>
      <td></td>
    <tr>
  <?php endif;?>
  </tbody>
</table>
</div>
</div>
</div>
</div><br><br><br>


