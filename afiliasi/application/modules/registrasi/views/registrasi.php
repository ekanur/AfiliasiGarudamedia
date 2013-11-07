 <div class="container slider">
    <div class="row-fluid">
      <div class="span10 offset1">
        <br><center>
        <h2 class="title">REGISTRASI <br><span class="merah besar"> AFFILIASI</span></h2>
        <small>www.garudamedia.co.id</small><br><br>
        <img src="<?php echo base_url();?>assets/img/panah.png" class="panah"></center>

      </div>
    </div>
  </div> <!-- Tutup Container Slider-->

   <div class="container content">
    <div class="row-fluid">
      <div class="span12">
          <center><h4 class="coklat">Data Member <span class="kuning">Affiliasi</span></h4></center>
          <div class="row-fluid">
              <div class="span6 offset3 abu">
               <br><center>
                 <form method="post" action="<?php echo base_url();?>registrasi/baru">
                    <input type="hidden" name="formsubmitted" value="TRUE" />   
                      <div class="control-group">
                        <label class="control-label" for="username">Username</label>
                          <div class="controls">
                            <input type="text" id="username" name="username" value="<?php echo set_value('username');?>">
                            <small><?php echo form_error('username'); ?></small>
                          </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="password">Password</label>
                          <div class="controls">
                            <input type="password" id="password" name="password" value="<?php echo set_value('password');?>">
                            <small><?php echo form_error('password'); ?></small>
                          </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label" for="password_lagi">Ulangi Password</label>
                          <div class="controls">
                            <input type="password" id="password_lagi" name="password_lagi" value="<?php echo set_value('password_lagi');?>">
                            <small><?php echo form_error('password_lagi'); ?></small>
                          </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                          <div class="controls">
                            <input type="text" id="email" name="email" value="<?php echo set_value('email');?>">
                            <small><?php echo form_error('email'); ?></small>
                          </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="phone">Phone</label>
                          <div class="controls">
                            <input type="text" id="phone" name="phone" value="<?php echo set_value('phone');?>">
                            <small><?php echo form_error('phone'); ?></small>
                          </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="captchaku">Captcha</label>
                          <div class="controls">
                            <?php echo $captcha ?><br>
                            <input type="text" id="captchaku" name="captchaku">
                            <small><?php echo form_error('captchaku'); ?></small>
                          </div>
                      </div>

                      <div class="controls">
                        <button type="submit" class="btn btn-warning">Register</button>
                      </div>
            </form>
            </center>
              </div>
          </div>      
      </div>
    </div>
  </div> <!-- Tutup Container Content-->
  <?php $this->load->view('template/footer'); ?>