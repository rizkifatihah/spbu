<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-border">
  <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">&copy; 2021 </span><span class="float-md-right d-none d-lg-block">SPBU</span></p>
</footer>
<!-- END: Footer-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/extensions/jquery.knob.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/charts/raphael-min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/charts/morris.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/extensions/unslider-min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/tables/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/tables/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/tables/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/tables/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/tables/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/tables/buttons.colVis.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/forms/select/form-select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/vendors/js/webshim-1.16.0/polyfiller.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/4.5.0/echarts.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo base_url(); ?>assets/backend/app-assets/js/core/app-menu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/js/core/app.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/app-assets/js/scripts/customizer.min.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="<?php echo base_url(); ?>assets/backend/app-assets/js/scripts/pages/dashboard-fitness.min.js"></script>
<!-- END: Page JS-->
<script>
  function onlyNumberKey(evt) {
    // Only ASCII charactar in that range allowed
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
      return false;
    return true;
  }

  $(document).ready(function(){
    $('<br><br><br>').insertBefore('#table_length')
  })
</script>
	<script type="text/javascript">
		webshims.setOptions('forms-ext', {
      extendNative: true,
			replaceUI: {
				'number': 'auto'
			},
			widgets: {
				startView: 2,
				openOnMouseFocus: true,
				stepfactor: 1
			}
		});
		webshim.polyfill("forms forms-ext number");
	</script>
	<script>
		$('.select2').select2({
			dropdownParent: $("#addProductModal"),
			width: '100%'
		});
	</script>
</body>
<!-- END: Body-->

</html>