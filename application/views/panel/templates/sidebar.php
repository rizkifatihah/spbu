
<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion" data-scroll-to-active="true">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="nav-item <?php if($subtitle=='transaksi') { echo 'active'; }?>">
        <a href="<?php echo base_url('transaction')?>">
          <i class="fa fa-shopping-cart"></i>
          <span class="menu-title" data-i18n="">
        Transaksi
        </a>
      </li>
      <li class="nav-item <?php if($subtitle=='produk') { echo 'active'; }?>">
        <a href="<?php echo base_url('product')?>">
          <i class="ft-edit"></i>
          <span class="menu-title" data-i18n="">
        Produk
        </a>
      </li>
      <li class="nav-item <?php if($subtitle=='laporan') { echo 'active'; }?>">
        <a href="<?php echo base_url('transaction/list')?>">
          <i class="fa fa-line-chart"></i>
          <span class="menu-title" data-i18n="">
        Laporan
        </a>
      </li>
      </ul>
  </div>
</div>
<!-- END: Main Menu-->
