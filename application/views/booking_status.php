<style>
    .border-class
{
  width:40%;
  margin-top:85px;
}
</style>
<?php include('common/header.php');?>
<div class="d-flex justify-content-center ">
  <div class="border-class" style="margin-bottom:106px">
    <div class="container">
      <div class="shadow-lg p-4 mb-4 bg-white">
      <?php echo form_open('home/display_bookings');?>
      
        <form method="post" name="booking" action="<?php echo base_url('home/booking_status');?>">
          <fieldset>
         
          <h2 style="font-family:Monotype Corsiva;font-size:50px;color:#2196F3;text-decoration:underline">Booking Status</h2><br><br> 
              <div class="col-lg-11"><b>
              <div class="form-group">
            <label >Enter Booking ID</label>
              <?php echo form_input(['type'=>'number','name'=>'booking_id','class'=>'form-control','min'=>1,'placeholder'=>'Enter Booking ID','value'=>set_value('booking_id')]); ?>
	            <?php echo form_error('booking_id'); ?>
          </div>
              <button name="search" value="search" class="btn btn-primary">Submit</button>
              </fieldset>
        </form>
      </div>
    </div>
    </div>
    </div>
<?php include('common/footer.php')?>