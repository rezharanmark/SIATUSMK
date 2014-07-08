<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modelberanda extends CI_Model {
	function get($tabel){
		return $this->db->get($tabel)->result();
	}
	function cariberita($no){
		return $this->db->get_where('berita',array('beritaid'=>$no))->result();
	}
}
