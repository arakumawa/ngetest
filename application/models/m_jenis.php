<?php
if(!defined('BASEPATH'))exit('No direct script access allowed');

class m_jenis extends CI_Model {
	//insert data ke database//
	function tambah(){
		$kode=$this->input->post('kd_soal');
		$jenis=$this->input->post('jn_soal');
		$nama=$this->input->post('nm_soal');
		$versi=$this->input->post('versi');
		$data=array('id_jenis'=>NULL,
		'kode_jenis'=>$kode,
		'nama_jenis'=>$nama,
		'jenis_soal'=>$jenis,
		'versi_jenis'=>$versi);
		$this->db->insert('jenis_soal',$data);
	}
	//mengambil semua data dari database//
	function ambil($limit, $offset){
	$this->db->order_by('kode_jenis','asc');
	$ambil=$this->db->get('jenis_soal',$limit,$offset);
	if($ambil->num_rows()>0){
		foreach($ambil->result()as $data){
			$hasil[]=$data;
		}
		return $hasil;
	}
	}
	//mengambil data sesuai id_jenis//
	function edit($a){
		$d=$this->db->get_where('jenis_soal',array('id_jenis'=>$a))->row();
		return $d;
	}
	//menghapus salah satu data//
	function hapus($a){
		$this->db->where('id_jenis', $a);
		$hasil=$this->db->delete('jenis_soal');
		return $hasil;
	}
	//mengubah salah satu data//
	function update($id){
		$kode=$this->input->post('kd_soal');
		$jenis=$this->input->post('jn_soal');
		$nama=$this->input->post('nm_soal');
		$versi=$this->input->post('versi');
		$data=array(
			'kode_jenis'=>$kode,
			'nama_jenis'=>$nama,
			'jenis_soal'=>$jenis,
			'versi_jenis'=>$versi);
		$this->db->where('id_jenis',$id);
		$this->db->update('jenis_soal',$data);
	}
}
?>