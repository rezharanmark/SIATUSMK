<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal extends CI_Controller {
	public function index(){
		$data['header']='header';
		$data['content']='jadwal';
		$data['footer']='footer';
		$this->load->view('mainview',$data);
	}
	function tabel(){
		$this->load->model('modeljadwal');
		$hari=$this->input->post('hari');
		$kelas=$this->input->post('kelas');
		$param='kelas';
		$order='jam';
		$data['jadwal']=$this->modeljadwal->get_where($param,$kelas,$hari,$order);
		$data['hari']=$hari;
		$data['kelas']=$kelas;
		$this->load->view('tabel',$data);
	}
}
