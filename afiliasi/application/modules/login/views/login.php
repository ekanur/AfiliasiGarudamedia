 <div class="container slider">
    <div class="row-fluid">
      <div class="span10 offset1">
        <br><center>
        <h2 class="title">LOGIN <br><span class="merah besar"> AFFILIASI</span></h2>
        <small>www.garudamedia.co.id</small><br><br>
        <img src="<?php echo base_url();?>assets/img/panah.png" class="panah"></center>

      </div>
    </div>
  </div> <!-- Tutup Container Slider-->

   <div class="container content">
    <div class="row-fluid">
      <div class="span12">
        
          <center><h4 class="coklat">Member <span class="kuning">Affiliasi</span></h4></center>
          <div class="row-fluid">	
              <div class="span6 abu offset3">
              	<center><span class="merah"><?php echo $msg_content;?></span></center>
               <br><center>
                 <form method="post" action="<?php echo base_url();?>login/signin"> 
                    <input type="hidden" name="formsubmitted" value="TRUE" />   
                      <div class="control-group">
                        <label class="control-label" for="username">Email</label>
                          <div class="controls">
                            <input type="text" id="username" name="username" value="<?php echo set_value('username');?>" >
                            <small><?php echo form_error('username'); ?></small>
                          </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="password">Password</label>
                          <div class="controls">
                            <input type="password" id="pwd" name="pwd" value="<?php echo set_value('pwd');?>" >
                            <small><?php echo form_error('pwd'); ?></small>
                          </div>
                      </div>
                      <div class="controls">
                      	<button type="submit" class="btn btn-warning">Login</button>
                        <a href="<?php echo base_url(); ?>resetpassword" class="btn btn-success">Lupa Password?</a>
                      </div>
                      </form>
                    </div>
             	</div>
            
              </div>
          </div>      
      </div>
    </div>
  </div> <!-- Tutup Container Content-->
  <?php $this->load->view('template/footer');?>