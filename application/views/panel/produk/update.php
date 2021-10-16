<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">

      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title" id="hidden-label-colored-controls"><?php echo $subtitle; ?></h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collpase show">
            <div class="card-body">
              <?php echo $this->session->flashdata('notif'); ?>
              <form class="form" action="<?php echo base_url('product/update/do_update/' . my_simple_crypt($product[0]->id_produk, 'e')); ?>" method="POST" enctype="multipart/form-data">
                <div class="col-md-12 mb-2">
                  <div class="form-body">
                    <h4 class="form-section"> Information Product</h4>
                    <div class="row">
                      <div class="form-group col-12 mb-2">
                        <label for="userinput5">Nama Produk</label>
                        <input class="form-control border-primary" type="text" placeholder="Masukkan Nama Produk" name="nama_produk" id='nama_produk' required>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="form-group col-12 mb-2">
                        <label for="userinput5">Harga Produk</label>
                        <input class="form-control border-primary" type="number" step="0.001" placeholder="Masukkan Harga Produk" name="harga_produk" id='harga_produk' required>
                      </div>
                    </div>
                  </div>
                  <div class="form-actions right">
                    <a href="<?php echo base_url('product/'); ?>" class="btn btn-warning mr-1">
                      <i class="ft-x"></i> Batal
                    </a>
                    <button type="submit" class="btn btn-primary">
                      <i class="fa fa-check-square-o"></i> Simpan
                    </button>
                  </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
</div>
<script type="text/javascript">
  <?php foreach ($product as $key) : ?>
    $('#nama_produk').val('<?php echo $key->nama_produk; ?>')
    $('#harga_produk').val('<?php echo $key->harga_produk; ?>')
  <?php endforeach; ?>
</script>
<!-- END: Content-->