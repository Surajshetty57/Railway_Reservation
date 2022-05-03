<style>
    .border-class
{
  width:40%;
}
h2{
  color:#2196F3;
  text-decoration:underline;
  font-family:Monotype Corsiva;
  
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
  <div class="border-class">
    <div class="container">
      <div class="shadow-lg p-4 mb-4 bg-white">
        <?php echo form_open("user/reserve_train/{$showtrain->train_id}");?>
          <form method="post" name="reservetrain" action="<?php echo base_url('bookingdetails');?>">
            <fieldset>
            <h2 style="font-size:50px">Booking Details & Payment</h2><br>
            <div class="col-lg-11">
            <div class="form-group"><b>
                <label for="Train Number">Train Number</label>
                <?php echo form_input(['name'=>'train_id','class'=>'form-control','readonly'=>"value",'value'=>set_value('train_id',$showtrain->train_id)]); ?>
            </div>
            <div class="form-group">
              <label for="Passenger ID">Passenger ID</label>
              <?php echo form_input(['name'=>'passenger_id','class'=>'form-control','readonly'=>"value",'value'=>set_value('passenger_id',$data['passenger_id'])]); ?>
            </div>
            <div class="form-group">
              <label for="Passenger ID">Booked By</label>
              <?php echo form_input(['name'=>'booked_by','class'=>'form-control','readonly'=>"value",'value'=>set_value('fname',$data['fname'])]); ?>
            </div>
            <div class="form-group" >
              <label for="origin">Origin</label>
              <select class="form-control" id="exampleSelect" name="origin" style="pointer-events: none;">  
              <option value=<?php echo $showtrain->origin;?>><?php echo $showtrain->origin;?> </option>
                <?php if(count($odetails)):?>
                <?php foreach($odetails as $odetail):?>
              <option value=<?php echo $odetail->origin?>><?php echo $odetail->origin?> </option>
                <?php endforeach;?>
                <?php endif;?>
              </select>
              <?php echo form_error('origin');?>
            </div>
            <div class="form-group" >
              <label for="Destination">Destination</label>
              <select class="form-control" id="exampleSelect" name="destination" style="pointer-events: none;">                
              <option value=<?php echo $showtrain->destination;?>><?php echo $showtrain->destination;?> </option> 
                <?php if(count($ddetails)):?>
                <?php foreach($ddetails as $ddetail):?>
              <option value=<?php echo $ddetail->destination?>><?php echo $ddetail->destination?> </option>
                <?php endforeach;?>
                <?php endif;?>
              </select>
              <?php echo form_error('destination'); ?>
            </div> 
            <div class="form-group">
              <label for="Date">Date</label>
              <?php echo form_input(['type'=>'date','name'=>'date','class'=>'form-control','readonly'=>"value",'value'=>set_value('date',$showtrain->date)]); ?>
            </div>
            <div class="form-group">
              <label for="Departure Time">Departure Time</label>    
              <?php echo form_input(['type'=>'time','name'=>'departuretime','class'=>'form-control','readonly'=>'value','value'=>set_value('departuretime',$showtrain->departuretime)]); ?> 
            </div>
            <div class="form-group">
              <label for="Arrival Time">Arrival Time</label>
              <?php echo form_input(['type'=>'time','name'=>'arrivaltime','class'=>'form-control','readonly'=>"value",'value'=>set_value('arrivaltime',$showtrain->arrivaltime)]); ?>
              </div>
            <div class="form-group">
              <label for="exampleSelect1">Class</label>
              <select class="form-control" id="exampleSelect1" name="class" style="pointer-events: none;">
              <option value=<?php echo $showtrain->class;?>><?php echo $showtrain->class;?></option> 
                <option>General</option>
                <option>Sleeper</option>
                <option>AC</option>
              </select>
            </div>
            <div class="form-group">
              <label >Price</label>
              <?php echo form_input(['type'=>'number','name'=>'price','class'=>'form-control','id'=>'price','readonly'=>"value",'value'=>set_value('price',$showtrain->price)]); ?>
            </div>
            <div class="form-group">
              <label for="No.of adults">No.of Passengers</label>
              <?php echo form_input(['type'=>'number','name'=>'pass_no','class'=>'form-control','id'=>'passenger','min'=>1,'max'=>9,'onkeyup'=>"sum();",'placeholder'=>'Enter No.of Passengers','value'=>set_value('pass_no')]); ?>
	            <?php echo form_error('pass_no'); ?>
		        </div>
            
            <label for="No.of Children">Passenger Details</label><button type="button" class="btn btn-primary btn-sm" id="add" style="margin-left:170px">Add Passenger</button>
            <table class="table table-secondary" id="a" name="a">
            <thead>
            <tr class="passenger_detail">
            <th scope="col-lg-15">
              <? if(isset($pname)): // Name set? ?>
                <? foreach($pname as $item): // Loop through all previous posted items ?>
                  <?php echo form_input(['type'=>'text','name'=>'pname[]','value'=>'','class'=>'form-control','id'=>'pname','placeholder'=>'Name','value'=>set_value('pname[]')]); ?>
	                <?php echo form_error('pname[]'); ?>
                <? endforeach; ?>
              <? else: ?>
              <? endif; ?>
            </th>
            <th scope="col-lg-15">
              <? if(isset($age)): // Name set? ?>
                <? foreach($age as $item): ?>
                 
                 <?php echo form_input(['type'=>'number','name'=>'age[]','class'=>'form-control','id'=>'age','min'=>5,'max'=>130,'placeholder'=>'Age','value'=>set_value('age[]')]); ?>
	          <?php echo form_error('age[]'); ?>
                <? endforeach; ?>
              <? else: ?>
              <? endif; ?>
            </th>
            <th scope="col-lg-15">
              <? if(isset($gender)): // Name set? ?>
                <? foreach($gender as $item): // Loop through all previous posted items ?>
                  <select class="form-control" id="gender[]" name="gender[]"  > 
                  <option  value="" disabled selected >Gender</option>
                    <option>Male</option> 
                    <option>Female</option>
                  </select>
                <? endforeach; ?>
              <? else: ?>
              <? endif; ?>
            </th>
            </tr>
            </thead>
            </table>
            <div class="form-group"><b>
              <label for="Total Amount">Total Amount</label>
              <?php echo form_input(['type'=>'username','name'=>'tamount','class'=>'form-control','id'=>'fare','placeholder'=>'Total Amount','readonly'=>'value','value'=>set_value('tamount')]); ?>
	            <?php echo form_error('tamount'); ?>
            </div>
            <div class="form-group">
              <label for="card number" >Card Number</label>
              <?php echo form_input(['type'=>'number','name'=>'cardno','class'=>'form-control','min'=>0,'placeholder'=>'Enter your 16 digit Card Number','value'=>set_value('cardno')]); ?>
              <?php echo form_error('cardno'); ?>
            </div>
            <div class="form-group"><b>
              <label for="Name on card">Name on card</label>
              <?php echo form_input(['type'=>'username','name'=>'noc','class'=>'form-control','placeholder'=>'Enter your Name as on Card','value'=>set_value('noc')]); ?>
	            <?php echo form_error('noc'); ?>
            </div>
            <div class="form-group">
              <label for="Cardtype">Card Expiry</label>
              <table class="table table-secondary" >
              <thead>
              <tr class="table-default">
              <th scope="col-lg-15">
              <div class="form-group">
                <select class="form-control" id="exampleSelect1" name="month"  >
                  <option  value="" disabled selected > Month</option>
                  <option>January</option> 
                  <option>February</option>
                  <option>March</option>
                  <option>April</option>
                  <option>May</option> 
                  <option>June</option>
                  <option>July</option>
                  <option>August</option>
                  <option>September</option> 
                  <option>October</option>
                  <option>November</option>
                  <option>December</option>
                </select>
              </div>
              <th scope="col-lg-">
              <div class="form-group">
                <select class="form-control" id="exampleSelect1" name="year"  >
                  <option  value="" disabled selected>Year</option>
                  <option>2020</option> 
                  <option>2021</option>
                  <option>2022</option>
                  <option>2024</option>
                  <option>2025</option>
                  <option>2026</option>
                  <option>2027</option>  
                </select>
              </div>
              </th>
              </tr>
              </thead>
              </table>
              <div class="form-group">
                <label for="Cardtype">Card type</label>
                <select class="form-control" id="exampleSelect1" name="cardtype"  >
                <option  value="" disabled selected >Select Card</option>
                  <option>Visa</option> 
                  <option>MasterCard</option>
                  <option>Rupay</option>
                  <option>Maestro</option>
                </select>
              </div>
              <div class="form-group">
                <label for="CVV" >CVV</label>
                <?php echo form_input(['type'=>'number','name'=>'cvv','class'=>'form-control','placeholder'=>'Enter your 3 digit CVV','min'=>'o','value'=>set_value('cvv')]); ?>
                <?php echo form_error('cvv'); ?>
              </div>
              <button type="submit" class="btn btn-primary" value="Make Payment">Make Payment</button>
             <?php echo anchor("user/availabletrains",'Back',['class'=>'btn btn-primary','style'=>'font-family:san-serif']);?>
              </fieldset>
              
      </div>
    </div>
  </div>
</div><br><br>
<script src="<?=base_url("smsbook/js/repeat.js")?>"></script>
<script src="<?=base_url('smsbook/js/repeater.js');?>" type="text/javascript"></script>
<script>
$(document).ready(function(){
  var i=1;

    $('#add').click(function(){
       let total_passenger = $('#passenger').val(); // get total passengers 
       let total_details   = $('.passenger_detail').length; // get total rows with class total_details
       if(total_details < total_passenger){ // check the condition
       
        i++;

        $('#a').append('<tr class="passenger_detail" id="row'+i+'"><th><input type="text" name="pname[]" placeholder="Name" class="form-control name_list" /></th><th ><input type="number" name="age[]" placeholder="Age" class="form-control name_list" min="5" max="130" /></th><th scope=""><select class="form-control" id="gender[]" name="gender[]"  placeholder="gender" width=""> <option>Male</option> <option>Female</option></select></th><th><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></th></tr>');  // use clone() here, then add id
       
      }else{
        alert('Passenger details cannot be greater than no. of passengers'); // your custom message
       }
    });

    $(document).on('click', '.btn_remove', function(){ 
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
    });

});

function sum()
{
  var price = document.getElementById('price').value;
    var passenger = document.getElementById('passenger').value;
    var result = (parseInt(price) * parseInt(passenger));
    if (!isNaN(result)) {
      document.getElementById('fare').value = result;
    }
}; 
</script>
</body>
</html>
