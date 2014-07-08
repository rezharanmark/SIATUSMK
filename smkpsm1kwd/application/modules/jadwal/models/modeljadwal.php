<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modeljadwal extends CI_Model {
	function update($data){
		$this->db->update('biodata',$data);
		if ($this->db->affected_rows()) return 1;
		else return 0;
	}
	function insert($data,$tabel){
		$this->db->insert($tabel,$data);
		if ($this->db->affected_rows()) return 1;
		else return 0;
	}
	function get($tabel){
		return $this->db->get($tabel)->result();
	}
	function get_where($param,$kolom,$tabel,$order){
		$this->db->select('*');
		$this->db->where($param,$kolom);
		$this->db->order_by($order,'asc');
		$this->db->from($tabel);
		$query=$this->db->get();
		return $query->result();
	}
}
