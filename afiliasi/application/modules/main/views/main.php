 <div class="container slider">
    <div class="row-fluid">
      <div class="span10 offset1">
        <h2 class="title">Dashboard</h2>
        <!-- <br> -->
       <!--  <p>
            GarudaMedia memberi kesempatan kepada kamu untuk mendapatkan tambahan penghasilan dengan menjadi affiliasi. Dapatkan komisi hingga 20% setiap pembelian produk GarudaMedia melalui link affiliasimu!<br>
        </p> -->
        <!-- <a href="<?php echo base_url()?>main" class="btn btn-large btn-black tombol active"> REFERAL</a>
        <a href="<?php echo base_url()?>komisi" class="btn btn-large btn-black tombol"> KOMISI</a>
        <a href="<?php echo base_url()?>banner" class="btn btn-large btn-black tombol"> BANNER</a>
        <a href="<?php echo base_url()?>pengaturan" class="btn btn-large btn-black tombol"> PENGATURAN </a> -->
      </div>
    </div>
  </div> <!-- Tutup Container Slider-->

   <div class="container content" style="margin-bottom:40px;">
    <div class="row-fluid">
      <?php Modules::load('sidebar/sidebar')->index(); ?>
      <div class="span8">
      <ul class="nav nav-tabs">
				<li class="active"><a href="#tab1" data-toggle="tab">Tracker</a></li>
				<li><a href="#tab2" data-toggle="tab">Anggota Referal</a></li>
				<li><a href="#tab3" data-toggle="tab">Test Link Referal</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="tab1">
				  <?php Modules::load('tracker/tracker')->index(); ?>
				</div>

				<div class="tab-pane" id="tab2">	
					<?php Modules::load('myreferer/myreferer/')->index(); ?>
				</div>

				<div class="tab-pane" id="tab3">
					<a href="<?php echo base_url()?>tracker/id/<?php echo $this->session->userdata('userid')?>"><?php echo base_url()?>tracker/id/<?php echo $this->session->userdata('userid')?></a>
				</div>
			</div>
      </div>
    </div>
  </div> <!-- Tutup Container Content-->

  
    
  </body>
</html>
