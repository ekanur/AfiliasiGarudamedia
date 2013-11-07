
 <div class="container slider">
    <div class="row-fluid">
      <div class="span10 offset1">
        <h2 class="title">UBAH <br><span class="merah besar">PASSWORD</span></h2>
        <br>
        <p>
            GarudaMedia memberi kesempatan kepada kamu untuk mendapatkan tambahan penghasilan dengan menjadi affiliasi. Dapatkan komisi hingga 20% setiap pembelian produk GarudaMedia melalui link affiliasimu!<br>
        </p>
        <a href="<?php echo base_url()?>main" class="btn btn-large btn-black tombol"> REFERAL</a>
        <a href="<?php echo base_url()?>komisi" class="btn btn-large btn-black tombol"> KOMISI</a>
        <a href="<?php echo base_url()?>banner" class="btn btn-large btn-black tombol"> BANNER</a>
        <a href="<?php echo base_url()?>pengaturan" class="btn btn-large btn-black tombol active"> PENGATURAN </a>
      </div>
    </div>
  </div> <!-- Tutup Container Slider-->

  <div class="container content" style="margin-bottom:40px;">
    <div class="row-fluid">
   		<div class="span10 offset1">
   			<div class="alert alerf-info">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>Hati-hati! </strong>Setelah mengubah password silakan login menggunakan password baru.</div>
 	
 	 <?php
        if($this->session->flashdata('message')){
            echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>';
            echo "<b>Sukses!</b>".$this->session->flashdata('message')."";
            echo '</div>';
            }
        ?>


	<?php echo form_open('profile/do_changepass', array('class'=>'form-horizontal')); ?>
		<input type="hidden" name="oldpass" value="<?php echo $oldpass?>"/>
		<input type="hidden" name="email" value="<?php echo $this->session->userdata('email');?>"/>


		<p>Password Lama :<br>
		<input type="password" name="oldpassword" value="<?php echo set_value('oldpassword');?>"/>
		<small><?php echo form_error('oldpassword'); ?></small>
		<p>Password Baru:<br>
		<input type="password" name="password" value="<?php echo set_value('password');?>"/>
		<small><?php echo form_error('password'); ?></small>
		<p>Ulangi Password Baru:<br>
		<input type="password" name="repassword" value="<?php echo set_value('repassword');?>"/>
		<small><?php echo form_error('repassword'); ?></small>
		<p>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
   		</div>

    </div>
  </div> <!-- Tutup Container Content-->
  </body>
</html>
