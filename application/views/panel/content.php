<?php
        $this->load->view('panel/templates/header');
	$this->load->view('panel/templates/sidebar');
	$this->load->view('panel/templates/navbar');
        $this->load->view($content);
        $this->load->view('panel/templates/footer');
?>
