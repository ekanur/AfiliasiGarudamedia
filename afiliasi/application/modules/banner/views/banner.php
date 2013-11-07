
 <div class="container slider">
    <div class="row-fluid">
      <div class="span10 offset1">
        <h2 class="title">Banner</h2>
<!--         <a href="<?php echo base_url()?>main" class="btn btn-large btn-black tombol"> REFERAL</a>
        <a href="<?php echo base_url()?>komisi" class="btn btn-large btn-black tombol"> KOMISI</a>
        <a href="<?php echo base_url()?>banner" class="btn btn-large btn-black tombol active"> BANNER</a>
        <a href="<?php echo base_url()?>pengaturan" class="btn btn-large btn-black tombol "> PENGATURAN </a>
 -->      </div>
    </div>
  </div> <!-- Tutup Container Slider-->


  <div class="container content" style="margin-bottom:40px;">
    <div class="row-fluid">
      <div class="span10 offset1">

                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab1" data-toggle="tab">Banner Image</a></li>
                  <li><a href="#tab2" data-toggle="tab">Banner Teks</a></li>
                </ul>
                <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                  <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Silahkan pilih banner yang ingin anda gunakan dan copy paste textbox banner ke website/blog anda. <BR>Klik gambar thumbnail untuk memperbesar.
                  </div>
                 <!--  <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <td>Gambar Banner</td>
                            <td>Embed Kode</td>
                        </tr>                    
                    </thead>
                    <tbody>
                  <?php 
                    foreach ($bannerimg as $banner) {
                      ?>
                        <tr>
                            <td>
                              <?php echo $banner->nama;?> (<?php echo $banner->width;?> x <?php echo $banner->height;?>) <br>
                              <img src="<?php echo base_url().'assets/banner/'.$banner->konten;?>">
                              
                            <td>
                                <br><textarea rows="5"><a href="<?php echo base_url()?>tracker/id/<?php echo $this->session->userdata('userid')?>"> <img src="<?php echo base_url().'assets/banner/'.$banner->konten;?>" alt="CD & Video Tutorial Komputer" width="<?php echo $banner->width;?>" height="<?php echo $banner->height;?>"> </a></textarea></td>
                        </tr>


                      <?php
                    }
                  ?>
                </tbody>
                  </table> -->

                  <?php 
                    foreach ($bannerimg as $banner) {
                      ?>
                  
                  <div class="banner">
                   <table>
                    <tr>
                        <td valign="top">
                          <a href="<?php echo base_url().'assets/banner/'.$banner->konten;?>" rel="prettyPhoto[gallery1]">
                          <img src="<?php echo base_url().'assets/img/thumb'.$banner->konten;?>" alt="  " width="80"  class="thumb" /></a></td>
                          <td>
                            <b><?php echo $banner->nama;?></b>
                            (<?php echo $banner->width;?>px x <?php echo $banner->height;?>px) <br>
                            <textarea><a href="<?php echo base_url()?>tracker/id/<?php echo $this->session->userdata('userid')?>"> <img src="<?php echo base_url().'assets/banner/'.$banner->konten;?>" alt="CD & Video Tutorial Komputer" width="<?php echo $banner->width;?>" height="<?php echo $banner->height;?>"> </a></textarea> 
                        </td>
                    </tr>
                    </table>
                  </div>


                      <?php
                    }
                  ?>


                <script type="text/javascript" charset="utf-8">
                  $(document).ready(function(){
                    
                    $(".span10:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
                    $(".span10:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true,social_tools:'  ',deeplinking: false});
                
                  });
                  </script>
                </div>

                <div class="tab-pane" id="tab2">
                  <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <td>Nama Banner</td>
                            <td>Isi Banner</td>
                            <td>Embed Kode</td>
                        </tr>                    
                    </thead>
                    <tbody>
                  <?php 
                    foreach ($bannertxt as $banner) {
                      ?>
                        <tr>
                            <td><?php echo $banner->nama;?></td>
                            <td>
                              <table>
                                <tr><td style="width:200px;background:#fff;height:200px;">
                                <?php echo $banner->konten;?>
                                </td></tr>
                              </table>
                            </td>
                            <td>    <br><textarea style="width:300px;" rows="5"><a href="<?php echo base_url()?>tracker/id/<?php echo $this->session->userdata('userid')?>"> <img src="<?php echo base_url().'assets/banner/'.$banner->konten;?> alt="CD & Video Tutorial Komputer"> </a></textarea>
                            </td>
                        </tr>


                      <?php
                    }
                  ?>
                </tbody>
                  </table>
                </div>
 
          
</div>

  </div>
  </div> <!-- Tutup Container Content-->
  </body>
</html>


