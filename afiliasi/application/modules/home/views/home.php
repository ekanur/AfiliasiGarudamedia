

  <div class="container slider">
    <div class="row-fluid">
      <div class="span6">
        <img src="<?php echo base_url(); ?>assets/img/slider.png" align="left">
      </div>
      <div class="span6">
        <h2 class="title">AFFILIASI <br><span class="merah besar">GARUDA MEDIA</span></h2>
        <small>www.garudamedia.co.id</small><br><br>
        <p>
            GarudaMedia memberi kesempatan kepada kamu untuk mendapatkan tambahan penghasilan dengan menjadi affiliasi. Dapatkan komisi hingga 20% setiap pembelian produk GarudaMedia melalui link affiliasimu. Daftar dan sebarkan link affiliasimu melalui facebook dan twitter!<br>
        </p>
        <a href="<?php echo base_url(); ?>registrasi" class="btn btn-large btn-black">Daftar <span class="kuning">Sekarang!</span></a>
        <a href="<?php echo base_url(); ?>login" class="btn btn-large btn-black"> <span class="kuning">Login</span></a>
      </div>
    </div>
  </div> <!-- Tutup Container Slider-->

   <div class="container content">
    <div class="row-fluid">
      <div class="span12">
          <center><h4 class="coklat">Kenapa Mendaftar <span class="kuning">Affiliasi?</span></h4><br><BR>
            <img src="<?php echo base_url(); ?>assets/img/kenapa.png"></center><br>
          <div class="row-fluid">
              <div class="span3 offset1">
                  <center><h4>Daftar Gratis</h4>
                  <p>Daftar dan jadilah member affiliasi GarudaMedia. Tidak dipungut biaya sepeserpun, Gratis!</p></center>
              </div>
              <div class="span4">
                  <center><h4>Template Banner Tersedia</h4>
                  <p>Kami telah menyediakan template banner produk GarudaMedia. Silahkan copy dan letakkan di website/forum/blog kamu.</p></center>
              </div>
              <div class="span3">
                  <center><h4>Komisi per Produk</h4>
                  <p>Kamu akan mendapatkan komisi 20% dari setiap produk yang dibeli melalui link affiliasimu. </p></center>
              </div>
          </div>
          <hr>
          <h4 class="coklat judul">Bagaimana Mekanisme Affiliasi <span class="kuning">Garuda Media?</span></h4>
          <div class="row-fluid">
              <div class="span10 offset1 abu">
                <img src="<?php echo base_url(); ?>assets/img/produk.png" align="right" width="300">
                        <h5>1. Jadi Member Affiliasi</h5>
                         <p>Daftar sebagai member affiliasi untuk mendapatkan id serta link url affiliasimu.</p>
                      
                        <h5>2. Promosikan Produk GarudaMedia</h5>
                         <p>Pasang banner produk GarudaMedia di situs/jejaring sosial favoritmu dan sebarkan link affiliasimu di internet.</p>
                      
                        <h5>3. Dapatkan Komisi</h5>
                         <p>Dari tiap pengunjung yang datang ke GarudaMedia dari link affiliasimu dan berbelanja produk, maka kamu akan mendapatkan komisi 20% dari tiap produk yang dibeli.</p>
                        
                        <h5>4. Komisi Berlipat</h5>
                         <p>Saat link affiliasi diklik, kami akan mengeset cookies selama 60 hari. Jadi kamu akan tetap mendapat komisi jika pengunjung membeli produk lagi dalam kurun waktu tersebut. </p>
                             <a href="<?php echo base_url(); ?>registrasi" class="btn btn-large btn-black">Daftar <span class="kuning">Sekarang!</span></a>

                  
              </div>
          </div>
          <!-- <hr> --><br><br>
          <h4 class="coklat judul">Contoh Banner <span class="kuning">Garuda Media</span></h4>
          <div class="row-fluid">
              <div class="span10 offset1 orange">                 

                  <?php 
                    foreach ($bannerimg as $banner) {
                      ?>
                  
                   <a href="<?php echo base_url().'assets/banner/'.$banner->konten;?>" rel="prettyPhoto[gallery1]">
                          <img src="<?php echo base_url().'assets/img/thumb'.$banner->konten;?>" alt="  " width="80"  class="thumb" /></a></td>
                        
                     <?php
                    }
                  ?>
              </div>
          </div>



    <script type="text/javascript" charset="utf-8">
      $(document).ready(function(){
        
        $(".span10:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
        $(".span10:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true,social_tools:'  ',deeplinking: false});
    
      });
      </script>
  
          
    
      

      </div>
    </div>
  </div> <!-- Tutup Container Content-->

    <?php $this->load->view('footer');?>