<style>
.border-class
{
  width:40%;
}
</style>
<?php include('common/header.php')?>
<br><br>
<div class="d-flex justify-content-center ">
  <div class="border-class" >
    <div class="container">
      <div class="shadow-lg p-4 mb-4 bg-white">
        <?php echo form_open('home/register');?>
        <form >
        <fieldset>
        <div class="col-lg-11 " >
          <h2 style="font-family:Monotype Corsiva;font-size:50px;color:#2196F3;text-decoration:underline;">Register !!!</h2><br>
          <div class="form-group"><b>
            <label > Full name</label>
            <?php echo form_input(['name'=>'fname','class'=>'form-control','placeholder'=>'Enter  Fullname','value'=>set_value('fname')]); ?>
	          <?php echo form_error('fname'); ?>
          </div>
          <div class="form-group">
            <label >Username</label>
              <?php echo form_input(['name'=>'uname','class'=>'form-control','placeholder'=>'Enter Username','value'=>set_value('uname')]); ?>
	            <?php echo form_error('uname'); ?>
          </div>
          <div class="form-group">
            <label for="dob">Date of birth</label>
            <?php echo form_input(['type'=>'date','name'=>'dob','class'=>'form-control','value'=>set_value('dob')]); ?>
	          <?php echo form_error('dob'); ?>
          </div>
          <div class="form-group">
           <label for="exampleSelect1">Gender</label>
            <select class="form-control" id="exampleSelect1" name="gender" vale="set_value(gender)">
            <option>Male</option>
            <option>Female</option>
            </select>
            <?php echo form_error('gender'); ?>
          </div>
          <div class="form-group">
            <label >Mobile number</label>
              <?php echo form_input(['type'=>'number','name'=>'mobile','class'=>'form-control','min'=>0,'placeholder'=>'Enter 10 digit Mobile number','value'=>set_value('mobile')]); ?>
	            <?php echo form_error('mobile'); ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Enter City</label>
            <?php echo form_input(['type'=>'text','name'=>'city','class'=>'form-control','placeholder'=>'Enter City','value'=>set_value('city')]); ?>
            <?php echo form_error('city'); ?>  
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <?php echo form_input(['type'=>'email','name'=>'email','class'=>'form-control','id'=>'exampleInputEmail1','aria-describedby'=>'emailHelp','placeholder'=>'Enter email','value'=>set_value('email')]); ?>
            <?php echo form_error('email'); ?>  
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <?php echo form_input(['type'=>'password','name'=>'pword','class'=>'form-control','placeholder'=>'Enter Password']); ?>
	          <?php echo form_error('pword'); ?>
          </div>
          <div class="form-group">
            <label for="password">Confirm Password</label>
            <?php echo form_input(['type'=>'password','name'=>'confirmpword','class'=>'form-control','placeholder'=>'Confirm Password']); ?>
	          <?php echo form_error('confirmpword'); ?>
          </div>
          <div>
            <button type="submit" class="btn btn-primary" value="login">Submit</button>
            <button type="reset" class="btn btn-danger" >Cancel</button>
          </div><br>
          <a class="" href="<?= base_url('home/uslogin') ?>">Already  a member? LOGIN </a></b>
          </fieldset>
        </fieldset>
        </div>
      </form>
    </div>
  </div>
</div><br><br><br>
<?php include('common/footer.php')?>