<?php
if(!defined('BASEPATH'))exit('No Direct Access Allowed');

class crud extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->helper(array('url','form'));
	}
	
	//fungsi index saat pertamakali dijalankan//
	function index(){
	$limit	=10;
	$offset	=0;
	$this->load->model('m_jenis');
	$this->data['data_get']=$this->m_jenis->ambil($limit,$offset);
	$this->data['page']='tabel';
	$this->load->view('dh_view',$this->data);
	}
	//fungsi tambah jenis//
	function tambah_jenis(){
	$this->data['kode_soal']='';
	$this->data['nama_jenis']='';
	$this->data['versi_jenis']='';
	$this->data['st']="tambah";
	$this->data['id_jenis']='';
	$this->data['page']="formjenis";
	$this->load->view('dh_view',$this->data);
	}
	//fungsi edit//
	function edit(){
		$id=$this->uri->segment(3);
		if($id==NULL){
			redirect('crud');
		}
		$this->load->model('m_jenis');
		$dt=$this->m_jenis->edit($id);
		$this->data['kode_soal']=$dt->kode_jenis;
		$this->data['nama_jenis']=$dt->nama_jenis;
		$this->data['versi_jenis']=$dt->versi_jenis;
		$this->data['id_jenis']=$id;
		$this->data['st']="edit";
		$this->data['page']="formjenis";
		$this->load->view('dh_view',$this->data);
	}
	//fungsi hapus//
	function hapus(){
	$u=$this->uri->segment(3);
	$this->load->model('m_jenis');
	$this->m_jenis->hapus($u);
	redirect('crud');
	}
	//fungsi simpan//
	function simpan(){
	$this->form_validation->set_message('required','%s harus diisi.');
	$this->form_validation->set_message('min_length','%s minimal %s karakter.');
	$this->form_validation->set_message('max_length','%s maksimal %s karakter.');
	$this->form_validation->set_message('is_unique','%s telah terdaftar.');
	$this->form_validation->set_message('numeric','%s harus diisi dengan angka.');
	$this->form_validation->set_rules('kd_soal','Kode Soal', 'trim|required|is_unique[jenis_soal.kode_jenis]');
	$this->form_validation->set_rules('nm_soal','Nama Soal', 'trim|required');
	$this->form_validation->set_rules('versi','Versi Soal', 'trim|required|numeric|min_length[4]|max_length[6]');
	if($this->form_validation->run()==false){
		if($this->input->post('submit')){
			$this->data['kode_soal']=$this->input->post('kd_soal');
			$this->data['id_jenis']=$this->input->post('id');
			$this->data['st']=$this->input->post('st');
			$this->data['versi_jenis']=$this->input->post('versi');
			$this->data['nama_jenis']=$this->input->post('nm_soal');
			$this->data['page']='formjenis';
			$this->load->view('dh_view',$this->data);
		}
	}else{
		$st=$this->input->post('st');
		if($this->input->post('submit')){
			if($st=="tambah"){
				$this->load->model('m_jenis');
				$this->m_jenis->tambah();
				redirect('crud');
			}else if($st=="edit"){
				$id_jenis=$this->input->post('id');
				$this->load->model('m_jenis');
				$this->m_jenis->update($id_jenis);
				redirect('crud');}
		}
	}
	}
	}
?>