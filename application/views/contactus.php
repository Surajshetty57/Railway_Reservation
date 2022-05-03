
<?php include('common/header.php')?><br><br>
<?php echo form_open('home/contactus');?>
<table class=" table table-light" >
<thead>
<tr>      
    <th scope="col" width="50%" >
        <div class="d-flex justify-content-center ">
            <div class="border-class" style="width:100%">
                <div class="container">
                    <div class="shadow-lg p-4 mb-4 bg-white">
                    <?php if( $error = $this->session->flashdata('contact')): ?>
                    <div class="col-lg-10" style="font-family:Monotype Corsiva;font-size:30px">
                        <div class="alert alert-dismissible alert-success">
                            <?= $error ?>
                        </div>
                    </div>
                    <?php endif; ?> 
                    <h2 style="font-family:Monotype Corsiva;font-size:50px;color:#2196F3;text-decoration:underline;"><b>Contact Us</b></h2><br>
                    
                    <div class="col-lg-10 ">
                        <div class="form-group"><b>
                            <label for="name">Name</label>
                            <?php echo form_input(['type'=>'name','name'=>'name','class'=>'form-control','placeholder'=>'Enter Name','value'=>set_value('name')]); ?>
	                        <?php echo form_error('name'); ?>
                        </div>
                        <div class="form-group">
                            <label >Mobile Number</label>
                            <?php echo form_input(['type'=>'number','name'=>'mobile','class'=>'form-control','placeholder'=>'Enter 10 digit Mobile number','value'=>set_value('mobile')]); ?>
	                        <?php echo form_error('mobile'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <?php echo form_input(['type'=>'email','name'=>'email','class'=>'form-control','id'=>'exampleInputEmail1','aria-describedby'=>'emailHelp','placeholder'=>'Enter email','value'=>set_value('email')]); ?>
                            <?php echo form_error('email'); ?>  
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleTextarea">Feedback</label>
                            <?php echo form_textarea(['name'=>'feedback','class'=>'form-control','id'=>'exampleTextarea','rows'=>'3','placeholder'=>'Write your feedback','value'=>set_value('feedback')]); ?>
                            <?php echo form_error('feedback'); ?> 
                        </div>
                        <button type="submit" class="btn btn-primary" value="login">Send Feedback</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </th>
    <th scope="col" >
    <div class="d-flex justify-content-center " >
        <div class="container"> 
            <div class="border-class" style="width:90%;margin-bottom:210px;">
                <div class=" shadow-lg p-4 mb-4 bg-white" style="font-family:Monotype Corsiva;margin-left:120px">
                    <h2 style="font-family:Monotype Corsiva;font-size:50px;color:#2196F3;text-decoration:underline;">Contact Details</b></h2><br>
                    <h2 ><b>SMS TravelBook</b></h1>
                    <h2><b>Phone No :7619524614 , 9164565325</h2>
                    <h2><b>E-mail : SMSTravelBook@gmail.com</b></h2>
                </div>
            </div>
        </div>
    </div>
    </th>
</tr>
</table><br><br>
<?php include('common/footer.php')?>