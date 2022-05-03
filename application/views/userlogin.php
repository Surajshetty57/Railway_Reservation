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
        <?php echo form_open('home/uslogin');?>
        <form >
        <fieldset>
        <h2 style="font-family:Monotype Corsiva;font-size:50px;color:#2196F3;text-decoration:underline;">User Login</h2><br>
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
            <?php echo form_input(['type'=>'username','name'=>'uname','class'=>'form-control','placeholder'=>'Username','value'=>set_value('uname')]); ?>
	          <?php echo form_error('uname'); ?>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <?php echo form_input(['type'=>'password','name'=>'pword','class'=>'form-control','placeholder'=>'Password']); ?>
	          <?php echo form_error('pword'); ?>
	        </div>
          <button type="submit" class="btn btn-primary" value="login">Submit</button>
          <button type="reset" class="btn btn-danger" >Cancel</button><br><br>
          <a href="<?= base_url('home/register') ?>">Not a member yet? REGISTER</a></b>
        </fieldset>
        </div>
        </form>
      </div>
    </div> 
  </div>
</div><br><br><br>
<?php include('common/footer.php')?>

       


