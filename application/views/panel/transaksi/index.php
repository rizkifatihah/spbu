<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body"><!-- fitness target -->
      <!-- Column selectors table -->
      <section id="column-selectors">
      	<div class="row">
      		<div class="col-12">
      			<div class="card">
      				<div class="card-header">
                <h4 class="card-title"><?php echo $subtitle;?></h4>
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
      				<div class="card-content collapse show">
      					<div class="card-body card-dashboard">
                  <table class="table table-striped table-bordered dataex-html5-selectors" style="width:100%" id="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal Transaksi</th>
                        <th>Nama Produk</th>
                        <?php if($this->uri->segment(3) != null){?>
                        <th>
                          Beli (Dalam Rupiah)
                        </th>
                        <th>
                          Beli (Dalam Liter)
                        </th>
                        <?php }else{?>
                        
                        <?php } ?>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($transaksi as $key): ?>
							          <tr>
                          <td> <?php echo $no++;?></td>
                          <td> <?php echo tgl_indo($key->tanggal_transaksi);?> <?php echo substr($key->tanggal_transaksi,10)?></td>
  		        			      <td> <?php echo $key->nama_produk;?></td> 
                          <?php if($this->uri->segment(3) != null){?>
                          <td>
                            <?php echo $key->beli_rupiah;?>
                          </td>
                          <td>
                          <?php echo substr($key->beli_liter,0,4);?>
                          </td>
                        <?php }else{?>
                        
                        </td>
                        <?php } ?>
      						        <td>
                          
                          <?php if($this->uri->segment(3) != null){?>
                          <a href="#" onclick="printElement('#pre_print')" title="Cetak" class="btn btn-primary">
                            <i class="fa fa-print"> Cetak</i>
                          </a>
                          <?php }else{?>
                            <a href="<?php echo base_url('transaction/list/')?><?php echo $key->id_transaksi?>" title="detail" class="btn btn-warning">
                            Detail
                          </a>
                          <?php } ?>
                          </td>
      						        </tr>
                        <?php endforeach; ?>
      					      </tbody>
      							<tfoot>
                      <tr>
                        <th>No</th>
                        <th>Tanggal Transaksi</th>
                        <th>Nama Produk</th>
                        <?php if($this->uri->segment(3) != null){?>
                        <th>
                          Beli (Dalam Rupiah)
                        </th>
                        <th>
                          Beli (Dalam Liter)
                        </th>
                        <?php }else{?>
                        
                        <?php } ?>
                        <th>Aksi</th>
                      </tr>
      							</tfoot>
      						</table>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </section>
      <!--/ Column selectors table -->
    </div>
  </div>
</div>

<script type="text/javascript">
  function printElement(prn){
    BtPrint1($('<div/>').append($(prn).clone()).html())
  }
  function BtPrint1(data) {
    var printWindow = window.open('', '', 'height=400,width=800');
    printWindow.document.write('<html><head><title>CETAK TRANSAKSI</title>');
    printWindow.document.write('<style>@media print{@page{size: 80mm auto} #pre_print {width: 80mm;font-size: 15px;}}</style></head><body>');
    printWindow.document.write(data);
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.print();
  }
</script>
<!-- <script type="text/javascript">
  var printer = new Recta('APPKEY', '1811')

  function onClick () {
    printer.open().then(function () {
      printer.align('center')
        .text('Hello World !!')
        .bold(true)
        .text('This is bold text')
        .bold(false)
        .underline(true)
        .text('This is underline text')
        .underline(false)
        .barcode('UPC-A', '123456789012')
        .cut()
        .print()
    })
  }
</script> -->
<div id="pre_print" class="hidden">
<img src="<?php echo base_url('assets/logo.png')?>">
<br>
SPBU 
<div style="font-size:11px;">
Jl.<br>
Alamat<br>
No Telp<br>
<?php echo tgl_indo($transaksi[0]->tanggal_transaksi); ?> <?php echo substr($transaksi[0]->tanggal_transaksi,10)?><br>
</div>
==========================<br>
<div style="font-size:11px;">
Jenis BBM &nbsp;&nbsp;&nbsp;: <?php echo $transaksi[0]->nama_produk?><br>
Liter &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo substr($transaksi[0]->beli_liter,0,4)?><br>
Harga / Liter : Rp.<?php echo $transaksi[0]->harga_produk?><br>
Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp.<?php echo $transaksi[0]->beli_rupiah?><br>
</div>
==========================<br>
<div style="font-size:11px;">
Tunai &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp.<?php echo $transaksi[0]->beli_rupiah?><br>
Kembalian &nbsp;&nbsp;&nbsp;&nbsp;: Rp.0<br><br>
Selamat Jalan Dan Terima Kasih
</div>

</div>