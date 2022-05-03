<style>
.border-class
{
  width:40%;
}
</style>
<?php include('common/header.php')?>
<br><br><br>
<div class="d-flex justify-content-center " >
  <div class="border-class" >
    <div class="container">
      <div class="shadow-lg p-4 mb-4 bg-white">
        <?php echo form_open('home/adminlogin');?>
        <form method="post" name="adminlogin" action="<?php echo base_url('home/adminlogin');?>" >
        <fieldset>
        <h2 style="font-family:Monotype Corsiva;font-size:50px;color:#2196F3;text-decoration:underline;">Admin Login</h2><br>
          
        <?php if( $error = $this->session->flashdata('Login_failed')): ?>
          <div class="col-lg-9">
          <div class="alert alert-dismissible alert-danger">
            <?= $error ?>
          </div>
        </div>
        <?php endif; ?>
       
        <div class="col-lg-9 ">
            <div class="form-group"><b>
              <label for="username">Username</label>
              <?php echo form_input(['type'=>'username','name'=>'username','class'=>'form-control','placeholder'=>'Username','value'=>set_value('username')]); ?>
	            <?php echo form_error('username'); ?>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <?php echo form_input(['type'=>'password','name'=>'password','class'=>'form-control','placeholder'=>'Password']); ?>
	            <?php echo form_error('password'); ?>
            </div>
            <button type="submit" class="btn btn-primary" value="login">Submit</button>
            <button type="reset" class="btn btn-danger" >Cancel</button></b>
        </div>
        </fieldset>
        </form>
      </div>
    </div>
  </div>
</div><br><br><br><br>
<?php include('common/footer.php')?>

