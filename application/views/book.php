<style>
    .border-class
{
  width:40%;
}
</style>
<?php include('common/userdashboard.php');?><br><br>

<div class="d-flex justify-content-center ">
  <div class="border-class">
    <div class="container">
      <div class="shadow-lg p-4 mb-4 bg-white">
      <?php echo form_open('user/availabletrains');?>
      
        <form method="post" name="booking" action="<?php echo base_url('user/available_trains');?>">
          <fieldset>
         
          <h2 style="font-family:Monotype Corsiva;font-size:50px;color:#2196F3">Find train</h2><br>
            
              
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
            <label for="dob">Date of birth</label>
            <?php echo form_input(['type'=>'date','name'=>'date','class'=>'form-control','value'=>set_value('date')]); ?>
	          <?php echo form_error('date'); ?>
          </div>
              
              <button name="search" value="search" class="btn btn-primary">Search</button>
              </fieldset>
        </form>
      </div>
    </div>
  </div></div><br><br><br><br>