<?php include('common/header.php');?><br><br><br><br>

    <div class="container">
<h1 style="color:#2196F3;font-size:45px;text-decoration:underline;font-family:monotype corsiva;"><b>Your Bookings</b> <?php echo anchor("home/booking_status",'<i class="fas fa-backward"></i> Return',['class'=>'btn btn-primary','style'=>'font-family:san-serif;margin-left:750px;' ]);?></h1><br>

<br>
<table class="table table-dark  " style="text-align:center;font-family:monotype corsiva;font-size:23px;margin-bottom:156px;">
  <thead>
    <tr>
      <th scope="col">Booking ID</th>
      <th scope="col">Train ID</th>
      <th scope="col">Origin</th>
      <th scope="col">Destination</th>
      <th scope="col">Date</th>
      <th scope="col">Departure Time</th>
      <th scope="col">Arrival Time</th>
      <th scope="col">Class</th>
      <th scope="col">Passengers</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
  <?php if(count($display)):?>
    <?php foreach($display as $dbooks): ?>
    <tr class="table-active">
      <td><?php echo $dbooks->booking_id; ?></td>
      <td><?php echo $dbooks->train_id; ?></td>
      <td><?php echo $dbooks->origin; ?></td>
      <td><?php echo $dbooks->destination; ?></td>
      <td><?php echo $dbooks->date; ?></td>
      <td><?php echo $dbooks->departuretime; ?></td>
      <td><?php echo $dbooks->arrivaltime; ?></td>
      <td><?php echo $dbooks->class; ?></td>
      <td><?php echo ucfirst($dbooks->pname); ?></td>
      <td><?php echo $dbooks->tamount; ?></td>
    </tr>
    </tbody>
    <?php endforeach;?>
    <?php else:?>
        <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><h2>No Bookings from this ID </h2></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
     <?php endif;?>

</table>
   </div >
<?php include('common/footer.php')?>