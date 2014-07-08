<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modellaporan extends CI_Model {
	function siswa($kelas){
		if($kelas=='Semua Kelas') return $this->db->query('select * from siswa order by kelas asc')->result();
		else return $this->db->get_where('siswa',array('kelas'=>$kelas))->result();
	}
	function carinis($nis){
		return $this->db->get_where('siswa',array('nisn'=>$nis))->result();                        
	}
	function carinilai($tabel,$nis,$jenis,$matpelid){
		return $this->db->get_where($tabel,array('nis'=>$nis,'jenis'=>$jenis,'matpelid'=>$matpelid))->result();
	}
	function editabsensisiswa($kls,$thn,$bln){
		return $this->db->get_where('absensisiswa',array('kelas'=>$kls,'thn'=>$thn,'bln'=>$bln))->result();
	}
	function averag($matpel,$nis){
		$sql= "SELECT AVG(nilai) FROM nilai WHERE matpelid=$matpel AND nis=$nis";
		$query = mysql_query($sql);
		while($row = $this->db->call_function('fetch_row', $query)) {
        	$return[] = $row;
    	}
      	return $return;
	}
}
