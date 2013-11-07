<div class="container slider">
    <div class="row-fluid">
      <div class="span10 offset1">
        <br><center>
        <h2 class="title">TIDAK <br><span class="merah besar"> DITEMUKAN</span></h2>
        <small>www.garudamedia.co.id</small>
        </center>

      </div>
    </div>
  </div> <!-- Tutup Container Slider-->

   <div class="container content">
    <div class="row-fluid">
      <div class="span12">
        <center>
          <p>Halaman yang anda tuju tidak dapat ditemukan atau telah terhapus dari server kami.</p>
          <p><a class="btn btn-warning" href="<?php echo base_url(); ?>"><i class="icon-home icon-white"></i>&nbsp Kembali ke Home</a></p>
        </center>
      </div>
    </div>
  </div> <!-- Tutup Container Content-->

  <?php
   		$datalogin=$this->session->all_userdata();
		if($this->session->userdata('login')===TRUE && $datalogin['rolename']==='member' && isset($datalogin['userid'])){
			
		}else{
			$this->load->view('template/footer'); 
		}

   ?>



