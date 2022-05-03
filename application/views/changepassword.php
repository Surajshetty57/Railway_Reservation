
<?php include('common/userdashboard.php');?><br>
<style>
.border-class
{
  width:38%;
}
h2{
  color:#2196F3;
  text-decoration:underline;
  font-family:Monotype Corsiva;
  
  
}
</style>


<div class="d-flex justify-content-center ">
<h3 style="font-family:san-serif ;">
<?php if( $error = $this->session->flashdata('messagec')): ?>
              <div class="col-lg">
                <div class="alert alert-dismissible alert-success">
                  <?= $error ?>
                </div>
              </div>
              <?php endif; ?>
<?php if( $error = $this->session->flashdata('mesage')): ?>
              <div class="col-lg">
                <div class="alert alert-dismissible alert-danger">
                  <?= $error ?>
                </div>
              </div>
              <?php endif; ?>
</h3>
</div><br>

<div class="d-flex justify-content-center " >
  <div class="border-class" >
    <div class="container">
      <div class="shadow-lg p-4 mb-4 bg-white">
        <?php echo form_open('user/changepassword');?>
        <form method="post" name="changepassword" action="<?php echo base_url('user/changepassword');?>" >
        <fieldset>
         
        
        <h2 style="font-size:50px">Change Password </h2><br>
        <div class="col-lg-11 ">
            <div class="form-group"><b>
              <label for="username">Current Password</label>
              <?php echo form_input(['type'=>'password','name'=>'psword','class'=>'form-control','placeholder'=>'Enter Current Password']); ?>
	            <?php echo form_error('psword'); ?>
            </div>
            <div class="form-group">
              <label for="password">New Password</label>
              <?php echo form_input(['type'=>'password','name'=>'npword','class'=>'form-control','placeholder'=>'Enter new Password']); ?>
	            <?php echo form_error('npword'); ?>
            </div>
            <div class="form-group">
              <label for="password">Confirm New Password</label>
              <?php echo form_input(['type'=>'password','name'=>'confirmnpword','class'=>'form-control','placeholder'=>'Confirm new Password']); ?>
	            <?php echo form_error('confirmnpword'); ?>
            </div>
            <button type="submit" class="btn btn-primary" value="login"><i class="fas fa-user-edit"></i> Update </button>
            <?php echo anchor("user/dashboard",'<i class="fas fa-backward"></i> Return',['class'=>'btn btn-primary','style'=>'font-family:san-serif;' ]);?>
             </div>
        </fieldset>
        </form>
      </div>
    </div>
  </div>
</div><br><br>