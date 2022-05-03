<?php include('common/userdashboard.php');?><br>
<div class="container" style="text-align:center">
<?php if( $error = $this->session->flashdata('message')): ?>
              <div class="col-lg-15">
                <div class="alert alert-dismissible alert-success" style="width:100%;font-size:40px;font-family:Monotype Corsiva;">
                  <?= $error ?>
                </div>
              </div>
              <?php endif; ?> 
              </div>
<div class="container"><br><br><br>


<h1 style="text-align:center;font-size:40px "><b>Welcome <?php echo ucfirst($this->session->userdata('fname'));?>!!! Book your ticket here.......</b></h1> <br>
</div><br><Br>

<div class="d-flex justify-content-center ">
<?php echo anchor("user/booknow",'Book <i class="fas fa-subway"></i>',['class'=>'btn btn-primary','style'=>'font-family:san-serif;font-size:30px;' ]);?>
</div>