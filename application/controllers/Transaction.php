<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	/**
		*created by https://medandigitalinnovation.com
		*Estimate 2019
	 */

	public $parent_modul = 2;
	public $title = 'Transaction';

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->create_order();
	}

	public function list($param1=''){
		$data['title'] = $this->title;
		if($param1 != null){
			$data['transaksi'] = $this->GeneralModel->get_transaksi_by_id($param1);
		}else{
			$data['transaksi'] = $this->GeneralModel->get_transaksi();
		}
		$data['subtitle'] = 'laporan';
		$data['content'] = 'panel/transaksi/index';
		$this->load->view('panel/content',$data);
	}

	public function create_order($param1='',$param2=''){
		if ($param1=='do_create') {
			$getProduct = $this->GeneralModel->get_by_id_general('spbu_produk','id_produk',$this->input->post('jenis_bahan_bakar'));
			$hargaBahanBakar = $getProduct[0]->harga_produk;
			date_default_timezone_set('Asia/Jakarta');
			$date = date('Y-m-d H:i:s');
			$dataOrder = array(
				'jenis_bahan_bakar' => $this->input->post('jenis_bahan_bakar'),
				'harga_bahan_bakar' => $hargaBahanBakar,
				'tanggal_transaksi' => $date,
				'created_by' => 'Admin',
			);
			if($this->input->post('beli_rupiah') == null){
				$dataOrder += array(
					'beli_rupiah' => $hargaBahanBakar*$this->input->post('beli_liter'),
					'beli_liter' => $this->input->post('beli_liter')
				);
			}
			if($this->input->post('beli_liter') == null){
				$dataOrder += array(
					'beli_liter' => $this->input->post('beli_rupiah')/$hargaBahanBakar,
					'beli_rupiah' => $this->input->post('beli_rupiah')
				);
			}
			if ($this->GeneralModel->create_general('spbu_transaksi',$dataOrder) == TRUE) {
				$this->session->set_flashdata('notif','<div class="alert alert-success">Data Transaksi berhasil ditambahkan</div>');
				redirect('transaction/list');
			}
		}else {
			$data['title'] = $this->title;
			$data['subtitle'] = 'transaksi';
			$data['content'] = 'panel/transaksi/create';
			$data['bahan_bakar'] = $this->GeneralModel->get_general('spbu_produk');
			$this->load->view('panel/content',$data);
		}
	}
}
