<script type="text/javascript">
<!-- some tricky stuff to destroy modal content, so it would show different content :D -->
 $(document).ready(function () {
    $('body').on('hidden', '.modal', function () {
  $(this).removeData('modal');
});
}); 
// http://stackoverflow.com/questions/12286332/twitter-bootstrap-remote-modal-shows-same-content-everytime
</script>
<div class="container slider">
    <div class="row-fluid ">
      <div class="span10 offset1">
        <h2 class="title">Komisi</h2>
    <!-- <br/><br/>
     <a href="<?php echo base_url()?>main" class="btn btn-large btn-black tombol"> REFERAL</a>
        <a href="<?php echo base_url()?>komisi" class="btn btn-large btn-black tombol  active"> KOMISI</a>
        <a href="<?php echo base_url()?>banner" class="btn btn-large btn-black tombol"> BANNER</a>
        <a href="<?php echo base_url()?>pengaturan" class="btn btn-large btn-black tombol"> PENGATURAN </a> -->
      </div>
    </div>
    </div>
<div class="container content" style="margin-bottom:40px;">
<div class="row-fluid">
<div class="span10 offset1">
    <?php
    echo "<h4>TOTAL KOMISI ANDA Rp. ".$total_komisi."</h4>";
          if ($total_komisi==0) {
            echo "
            <strong>Anda belum bisa melakukan penarikan komisi</strong><br/>
                  <a href='' data-target='#TOSModal' role='button' class='btn btn-info' data-toggle='modal'>Kenapa ???</a>
            ";
          }
          else
          {
              echo "
                    <strong>Ingin mengambil saldo komisi??</strong>
                 <a href='".base_url()."withdraw' data-target='#withdrawForm' role='button' class='btn btn-info' data-toggle='modal'>Ya, transfer komisi saya</a>
            ";
          }
        ?>
       <div style="height:auto; width:100%; margin:15px 0px;">
       <ul class="nav nav-tabs">
        <li class="active"><a href="#komisi1" data-toggle="tab">Komisi dari Pembelian Produk</a></li>
        <li><a href="#komisi2" data-toggle="tab">Komisi dari Premium Member</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="komisi1">
            <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">Sukses</a></li>
        <li><a href="#tab2" data-toggle="tab">Pending</a></li>
        <li><a href="#tab3" data-toggle="tab">Terhapus</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab1">
          <strong>Total : Rp. <?php echo $income_komisi; ?></strong>
          <?php echo $transfer_sukses; ?>
        </div>

        <div class="tab-pane" id="tab2">  
           <strong>Total : Rp. <?php echo $pending_komisi; ?></strong>
          <?php echo $transfer_pending; ?>
        </div>

        <div class="tab-pane" id="tab3">
          
          <?php echo $transfer_dihapus; ?>

          <strong><em class='text-info'>* Komisi akan terhapus jika pembeli tidak melakukan pembayaran pembelian barang lebih dari 1 bulan</em></strong>
        </div>
      </div>          
        </div>

        <div class="tab-pane" id="komisi2">
          <ul class="nav nav-tabs">
        <li class="active"><a href="#premium1" data-toggle="tab">Sukses</a></li>
        <li><a href="#premium2" data-toggle="tab">Pending</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="premium1">
          <?php echo $aktif_premium; ?>
        </div>

        <div class="tab-pane" id="premium2">
          <?php echo $pending_premium; ?>
        </div>
      </div>  
        </div>
      </div>

</div>
<hr width="90%" style="text-align:center"/>
        
  <!-- <h3>My Commission</h3> -->



          
<!-- Modal start -->
<div id='myModal' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
  <div class='modal-header'>
    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>x</button>
    <h3 id='myModalLabel'>Detail Pembelian</h3>
  </div>
     <div class='modal-body'>
     </div>
 <div class='modal-footer'>
    <button class='btn' data-dismiss='modal' aria-hidden='true'>Close</button>
  </div>
</div>

<div id='withdrawForm' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
  <div class='modal-header'>
    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>x</button>
    <h3 id='myModalLabel'>Ambil Komisi</h3>
  </div><div class='modal-body'>


 </div><div class='modal-footer'>
    <button class='btn' data-dismiss='modal' aria-hidden='true'>Close</button>
  </div>
</div>

<div class="modal hide fade" id="TOSModal">
  <div class="modal-header">
    <button type="button" class="close" id="keluar" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Ketentuan Penarikan Komisi</h3>
  </div>
  <div class="modal-body">
    Anda dapat melakukan penarikan komisi jika telah memenuhi syarat-syarat berikut :
    <ol start=1>
      <li>Pembeli telah melakukan konfirmasi pembayaran kepada pihak GarudaMedia</li>
      <li>Member GarudaMedia telah melakukan konfirmasi pembayaran Premium member kepada pihak GarudaMedia</li>
      <!-- <li>Saldo Minimal yang tersisa adalah Rp. 100.000,00</li> -->
      <li>Saldo Penarikan komisi minimal adalah Rp. 100.000,00</li>
    </ol>
  </div>
  <div class="modal-footer">
     <button class='btn'  id="keluar" data-dismiss='modal' aria-hidden='true'>&larr; Kembali</button>
    
  </div>
</div>
<!-- EOF modal -->
 <?php Modules::load('withdraw/withdraw')->info(); ?>
</div>
</div>
</div>
