<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	/**
		*created by https://medandigitalinnovation.com
		*Estimate 2019
	 */

	public $parent_modul = 3;
	public $title = 'Produk';

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->list();
	}

	public function list($param1=''){
		$data['content'] = 'panel/produk/index';
		$data['subtitle'] = 'produk';
		$data['product'] = $this->GeneralModel->get_general('spbu_produk');
 		$this->load->view('panel/content',$data);
	}

	public function create($param1='',$param2=''){
		if ($param1=='do_create') {
			$dataProduct = array(
				'nama_produk' => $this->input->post('nama_produk'),
				'harga_produk' => $this->input->post('harga_produk'),
				'created_by' => 'Admin',
			);

			if ($this->GeneralModel->create_general('spbu_produk',$dataProduct) == TRUE) {
				$this->session->set_flashdata('notif','<div class="alert alert-success">Data produk berhasil ditambahkan</div>');
				redirect('product');
			}
		}else {
			$data['title'] = $this->title;
			$data['subtitle'] = 'produk';
			$data['content'] = 'panel/produk/create';
			$this->load->view('panel/content',$data);
		}
	}
	public function update($param1='',$param2=''){
		if ($param1=='do_update') {
			$getProduct = $this->GeneralModel->get_by_id_general('spbu_produk','id_produk',my_simple_crypt($param2,'d'));
			$dataProduct = array(
				'nama_produk' => $this->input->post('nama_produk'),
				'harga_produk' => $this->input->post('harga_produk'),
				'updated_by' => 'Admin',
			);
			if ($this->GeneralModel->update_general('spbu_produk','id_produk',my_simple_crypt($param2,'d'),$dataProduct) == TRUE) {
				$this->session->set_flashdata('notif','<div class="alert alert-success">Data Produk berhasil diubah</div>');
				redirect('product');
			}
		}else {
			$data['title'] = $this->title;
			$data['subtitle'] = 'produk';
			$data['content'] = 'panel/produk/update';
			$data['product'] = $this->GeneralModel->get_by_id_general('spbu_produk','id_produk',my_simple_crypt($param1,'d'));
			$this->load->view('panel/content',$data);
		}
	}
}
