<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">

      <div class="col-md-12">
  			<div class="card">
  				<div class="card-header">
  					<h4 class="card-title" id="hidden-label-colored-controls"><?php echo $subtitle;?></h4>
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
            <?php echo $this->session->flashdata('notif');?>
            <form class="form" action="<?php echo base_url('transaction/create_order/do_create');?>" method="POST" enctype="multipart/form-data">
              <div class="col-md-12 mb-2">
  							<div class="form-body">
                  <div class="row">
                    <div class="col-md-12">
                      <h4 class="form-section"> Order Baru
                      </h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-12 mb-2">
                      <label>Bahan Bakar</label>
                      <select class="form-control border-primary" name="jenis_bahan_bakar" id="jenis_bahan_bakar" required>
                        <option value="">.:Pilih Bahan Bakar:.</option>
                        <?php foreach($bahan_bakar as $row):?>
                          <option value="<?php echo $row->id_produk?>"><?php echo $row->nama_produk?> - Rp.<?php echo $row->harga_produk?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-12 mb-2">
                      <label  for="userinput5">Beli (Dalam Rupiah)</label>
                      <input class="form-control border-primary" type="number" name="beli_rupiah" id='beli_rupiah'>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-12 mb-2">
                      <label  for="userinput5">Beli (Dalam Liter)</label>
                      <input class="form-control border-primary" type="number" step="0.01"  name="beli_liter" id='beli_liter'>
                    </div>
                  </div>
               	<div class="form-actions right">
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
<!-- END: Content-->
