
<?php include('common/userdashboard.php');?><br><br><br><br>

    <div class="container">
<h1 style="color:#2196F3;font-size:45px;text-decoration:underline"><b>Available Trains</b> <?php echo anchor("user/booknow",'Back',['class'=>'btn btn-primary','style'=>'font-family:san-serif;margin-left:750px;' ]);?></h1><br>

<br>
<table class="table table-dark  " style="text-align:center;font-family:monotype corsiva;font-size:23px;margin-bottom:130px">
  <thead>
    <tr>
      <th scope="col">Train ID</th>
      <th scope="col">Origin</th>
      <th scope="col">Destination</th>
      <th scope="col">Date</th>
      <th scope="col">Departure Time</th>
      <th scope="col">Arrival Time</th>
      <th scope="col">Class</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php if(count($showtrain)):?>
    <?php foreach($showtrain as $st): ?>
    <tr class="table-active">
      <td><?php echo $st->train_id; ?></td>
      <td><?php echo $st->origin; ?></td>
      <td><?php echo $st->destination; ?></td>
      <td><?php echo $st->date; ?></td>
      <td><?php echo $st->departuretime; ?></td>
      <td><?php echo $st->arrivaltime; ?></td>
      <td><?php echo $st->class; ?></td>
      <td><?php echo $st->price; ?></td>
      <td>
          <?php echo anchor("user/reserve_train/{$st->train_id}",'Book',['class'=>'btn btn-secondary','style'=>'font-size:15px;height:20px;padding-top :0px;font-family:Monotype Corsiva']); ?>
      </td>

    </tr>
    </tbody>
    <?php endforeach;?>
    <?php else:?>
      <tr>
      <td></td>
      <td></td>
      <td></td>
      <td><h4>No Train available on this particular date </h4></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
     <?php endif;?>

</table>
   </div>