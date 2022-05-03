<style>
    .border-class
{
  width:70%;
  
}
@media print {
    #with_print {
        display: none;
    }
}
</style>
<?php include('common/userdashboard.php');?><br><br>
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
  <div class="border-class" >
    <div class="container" >
<div class="shadow-lg p-4 mb-4 bg-white">
<?php echo form_open("user/ticket/ ");?>
<h1 style="text-align:center;font-size:60px;"> Payment Information </h1><br>

  <div class="card-header bg-primary">
  <h3 style="text-align:center;font-size:30px;color:white;font-family:cooper" > Ticket Details</h3></div>
  
  <div class="card-body "  style="background-color:#E6E6FA">
   
    <h2 style="font-size:30px;"><?php echo $ticket['origin'];?> - <?php echo $ticket['destination'];?></h2><br>
    <div class="">
     <table class="table table-hover">
  <thead>
    <tr>
    <th scope="col"><h4>Booking ID : <?php echo $ticket['booking_id'];?></h4><br>
    <h4>Train No : <?php echo $ticket['train_id'];?></h4><br>
    <h4>Class : <?php echo $ticket['class'];?></h4><br> 
    <h4>Date of Journey : <?php echo $ticket['date'];?></h4>
      <th scope="col"> <h4>Scheduled Departure : <i class="fa fa-at" ></i> <?php echo $ticket['departuretime'];?></h4><br>
      <h4>Scheduled Arrival : Next day <i class="fa fa-at" ></i> <?php echo $ticket['arrivaltime'];?></h4><br>
      <h4>No.of Tickets : <?php echo $ticket['pass_no'];?></h4><br>
      <h4>Total Fare : <?php echo $ticket['tamount'];?></h4></th>
    </tr>
  </thead>
  </table>
  </div>
  </div>
  
  <div class="card-header bg-primary">
  <h3 style="text-align:center;font-size:30px;color:white;font-family:cooper" > Passenger Details</h3></div>
  
  <div class="card-body "  style="background-color:#E6E6FA"><br>
  <div class="container">
  <h4>Booked By : <?php echo ucfirst($ticket['booked_by']);?></h4><br>
    <h4>Passenger ID : <?php echo $ticket['passenger_id'];?></h4><br>
    <h4>Passengers : <?php echo ucfirst($ticket['pname']);?> .</h4><br>
    <h4>Payment Mode : <?php echo ucfirst($ticket['cardtype']);?> Card</h4><br>
</div>

  </div><br>
  
<button onclick="window.print()" class="btn btn-primary" style='font-family:san-serif'>Print <i class="fas fa-print"></i></button>
<?php echo anchor("user/dashboard",'<i class="fas fa-backward"></i> Return Home ',['class'=>'btn btn-primary','style'=>'font-family:san-serif;margin-left:px' ]);?>

</div>
<br><br