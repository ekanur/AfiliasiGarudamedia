 <div class="container slider">
    <div class="row-fluid">
      <div class="span10 offset1">
        <br><center>
        <h2 class="title">RESET <br><span class="merah besar"> PASSWORD</span></h2>
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
              <div class="span6 abu offset3"><br>
                <center>
                  <?php echo form_open('resetpassword/send', array('name'=>'resetform')); ?>
                      <div class="controls">
                          <input type="email" name="email" id="email"  value="<?php echo set_value('email');?>" placeholder="Masukkan email anda.."/>
                            <small><?php echo form_error('email'); ?></small>
                      </div>

                      <center>
                        <p><button type="submit" class="btn btn-warning" style="margin-top:5px;">Reset Password</button></p>
                      </center>
                  <?php echo form_close(); ?>
                  </center>
                </div>
              </div>
            
              </div>
          </div>      
      </div>
    </div>
  </div> <!-- Tutup Container Content-->
  <?php $this->load->view('template/footer');?>