<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {
	public function index(){
		$data['header']='header';
		$data['content']='laporan';
		$data['subcontent']='laporanloading';
		$data['footer']='footer';
		$this->load->view('mainview',$data);
	}
	function siswa(){
		$data['header']='header';
		$data['content']='laporan';
		$data['subcontent']='siswa';
		$data['footer']='footer';	
		$this->load->view('mainview',$data);
	}
	function tabelsiswa(){
		$this->load->model('modellaporan');
		$kelas=$this->input->post('kelas');
		$data['tabelsiswa']=$this->modellaporan->siswa($kelas);
		$this->load->view('tabelsiswa',$data);
	}
	function absensi(){
		$data['header']='header';
		$data['content']='laporan';
		$data['subcontent']='absensi';
		$data['footer']='footer';		
		$this->load->view('mainview',$data);
	}
	function tabelabsensi(){
		$this->load->model('modellaporan');
		$thn=$this->input->post('thn');
		$bln=$this->input->post('bln');
		$kls=$this->input->post('kelas');
		if($bln==1)$bulan='Januari';
		elseif($bln==2)$bulan='Februari';
		elseif($bln==3)$bulan='Maret';
		elseif($bln==4)$bulan='April';
		elseif($bln==5)$bulan='Mei';
		elseif($bln==6)$bulan='Juni';
		elseif($bln==7)$bulan='Juli';
		elseif($bln==8)$bulan='Agustus';
		elseif($bln==9)$bulan='September';
		elseif($bln==10)$bulan='Oktober';
		elseif($bln==11)$bulan='November';
		elseif($bln==12)$bulan='Desember';
		
		if($kls==1)$kelas='10TPM1';
		elseif($kls==2)$kelas='10TPM2';
		elseif($kls==3)$kelas='10TKR1';
		elseif($kls==4)$kelas='10TKR2';
		elseif($kls==5)$kelas='10TSM1';
		elseif($kls==6)$kelas='10TSM2';
		elseif($kls==7)$kelas='11TPM1';
		elseif($kls==8)$kelas='11TPM2';
		elseif($kls==9)$kelas='11TKR1';
		elseif($kls==10)$kelas='11TKR2';
		elseif($kls==11)$kelas='11TSM1';
		elseif($kls==12)$kelas='11TSM2';
		elseif($kls==13)$kelas='12TPM1';
		elseif($kls==14)$kelas='12TPM2';
		elseif($kls==15)$kelas='12TKR1';
		elseif($kls==16)$kelas='12TKR2';
		elseif($kls==17)$kelas='12TSM1';
		elseif($kls==18)$kelas='12TSM2';
		else $kelas='';
		$data['thn1']=$thn-1;
		$data['thn2']=$thn;
		$data['bulan']=$bulan;
		$data['kelas']=$kelas;
		$data['edit']=$this->modellaporan->editabsensisiswa($kelas,$thn,$bln);
		$this->load->view('tabelabsensi',$data);
	}
	function nilai(){
		$data['header']='header';
		$data['content']='laporan';
		$data['subcontent']='nilai';
		$data['footer']='footer';	
		$this->load->view('mainview',$data);
	}
	function tabelnilai(){
		$nis=$this->input->post('nis');	
		$this->load->model('modellaporan');

		$siswa=$this->modellaporan->carinis($nis);
		foreach($siswa as $dat){
			$nis=$dat->nisn;	
			$nama=$dat->nama;
			$kelas=$dat->kelas;
		}

		for($matpel=1; $matpel<=21; $matpel++){	
				$qmid1pr=$this->modellaporan->carinilai('nilai',$nis,'mid1pr',$matpel); 
				foreach ($qmid1pr as $row){$mid1pr[$matpel]=$row->nilai;}
				$qmid1tugas=$this->modellaporan->carinilai('nilai',$nis,'mid1tugas',$matpel); 
				foreach ($qmid1tugas as $row){$mid1tugas[$matpel]=$row->nilai;}
				$qmid1ujian=$this->modellaporan->carinilai('nilai',$nis,'mid1ujian',$matpel); 
				foreach ($qmid1ujian as $row){$mid1ujian[$matpel]=$row->nilai;}
				
				$qsem1pr=$this->modellaporan->carinilai('nilai',$nis,'sem1pr',$matpel); 
				foreach ($qsem1pr as $row){$sem1pr[$matpel]=$row->nilai;}
				$qsem1tugas=$this->modellaporan->carinilai('nilai',$nis,'sem1tugas',$matpel); 
				foreach ($qsem1tugas as $row){$sem1tugas[$matpel]=$row->nilai;}
				$qsem1ujian=$this->modellaporan->carinilai('nilai',$nis,'sem1ujian',$matpel); 
				foreach ($qsem1ujian as $row){$sem1ujian[$matpel]=$row->nilai;}
				
				$qmid2pr=$this->modellaporan->carinilai('nilai',$nis,'mid2pr',$matpel); 
				foreach ($qmid2pr as $row){$mid2pr[$matpel]=$row->nilai;}
				$qmid2tugas=$this->modellaporan->carinilai('nilai',$nis,'mid2tugas',$matpel); 
				foreach ($qmid2tugas as $row){$mid2tugas[$matpel]=$row->nilai;}
				$qmid2ujian=$this->modellaporan->carinilai('nilai',$nis,'mid2ujian',$matpel); 
				foreach ($qmid2ujian as $row){$mid2ujian[$matpel]=$row->nilai;}
				
				$qsem2pr=$this->modellaporan->carinilai('nilai',$nis,'sem2pr',$matpel); 
				foreach ($qsem2pr as $row){$sem2pr[$matpel]=$row->nilai;}
				$qsem2tugas=$this->modellaporan->carinilai('nilai',$nis,'sem2tugas',$matpel); 
				foreach ($qsem2tugas as $row){$sem2tugas[$matpel]=$row->nilai;}
				$qsem2ujian=$this->modellaporan->carinilai('nilai',$nis,'sem2ujian',$matpel); 
				foreach ($qsem2ujian as $row){$sem2ujian[$matpel]=$row->nilai;}	
		}
	
		for($matpel=1; $matpel<=21; $matpel++){	
			if(isset($mid1pr[$matpel])) $mid1pr[$matpel]=$mid1pr[$matpel]; else $mid1pr[$matpel]='';
			if(isset($mid1tugas[$matpel])) $mid1tugas[$matpel]=$mid1tugas[$matpel]; else $mid1tugas[$matpel]='';
			if(isset($mid1ujian[$matpel])) $mid1ujian[$matpel]=$mid1ujian[$matpel]; else $mid1ujian[$matpel]='';
			if(isset($sem1pr[$matpel])) $sem1pr[$matpel]=$sem1pr[$matpel]; else $sem1pr[$matpel]='';
			if(isset($sem1tugas[$matpel])) $sem1tugas[$matpel]=$sem1tugas[$matpel]; else $sem1tugas[$matpel]='';
			if(isset($sem1ujian[$matpel])) $sem1ujian[$matpel]=$sem1ujian[$matpel]; else $sem1ujian[$matpel]='';
			if(isset($mid2pr[$matpel])) $mid2pr[$matpel]=$mid2pr[$matpel]; else $mid2pr[$matpel]='';
			if(isset($mid2tugas[$matpel])) $mid2tugas[$matpel]=$mid2tugas[$matpel]; else $mid2tugas[$matpel]='';
			if(isset($mid2ujian[$matpel])) $mid2ujian[$matpel]=$mid2ujian[$matpel]; else $mid2ujian[$matpel]='';
			if(isset($sem2pr[$matpel])) $sem2pr[$matpel]=$sem2pr[$matpel]; else $sem2pr[$matpel]='';
			if(isset($sem2tugas[$matpel])) $sem2tugas[$matpel]=$sem2tugas[$matpel]; else $sem2tugas[$matpel]='';
			if(isset($sem2ujian[$matpel])) $sem2ujian[$matpel]=$sem2ujian[$matpel]; else $sem2ujian[$matpel]='';
		}
		
		for($matpel=1; $matpel<=21; $matpel++){
			$jumlah[$matpel]=$mid1pr[$matpel]+$mid1tugas[$matpel]+$mid1ujian[$matpel]+$sem1pr[$matpel]+$sem1tugas[$matpel]+$sem1ujian[$matpel]+$mid2pr[$matpel]+$mid2tugas[$matpel]+$mid2ujian[$matpel]+$sem2pr[$matpel]+$sem2tugas[$matpel]+$sem2ujian[$matpel];
		}
		for($matpel=1; $matpel<=21; $matpel++){
			$qrataan=$this->modellaporan->averag($matpel,$nis);
			foreach ($qrataan as $row){$rataan[$matpel]=$row[0];}
			$rataan[$matpel]=round($rataan[$matpel],1);
		}
		$amatbaik=$this->config->item('amatbaik');
		$baik=$this->config->item('baik');
		$cukup=$this->config->item('cukup');
		$kompeten=$this->config->item('kompeten');
		for($matpel=1; $matpel<=21; $matpel++){
			if (($matpel==17)||($matpel==18)||($matpel==19)||($matpel==20)||($matpel==21)){
				if ($rataan[$matpel]>=$kompeten){ 
					$predikat[$matpel]='Kompeten'; 
				}else{
					$predikat[$matpel]='Belum Kompeten';
				}
			}else{
				if ($rataan[$matpel]>=$amatbaik){ 
					$predikat[$matpel]='Amat Baik'; 
				}else if (($rataan[$matpel]<$amatbaik)&&($rataan[$matpel]>=$baik)) {
					$predikat[$matpel]='Baik';
				}else if (($rataan[$matpel]<$baik)&&($rataan[$matpel]>=$cukup)) {
					$predikat[$matpel]='Cukup';
				}else {
					$predikat[$matpel]='Kurang';
				}
			}
		}
		
		$data['matpel']=array('1'=>'PAI','2'=>'PPKn','3'=>'BIN','4'=>'OR','5'=>'SBK','6'=>'MAT','7'=>'BIG','8'=>'IPA','9'=>'KIMIA','10'=>'FISIKA','11'=>'IPS','12'=>'KWU','13'=>'KKPI','14'=>'MULOK','15'=>'PSM','16'=>'PRO1','17'=>'PRO2','18'=>'PRO3','19'=>'PRO4','20'=>'PRO5','21'=>'PRO6');
		
		$data['mid1pr']=array('1'=>$mid1pr[1],'2'=>$mid1pr[2],'3'=>$mid1pr[3],'4'=>$mid1pr[4],'5'=>$mid1pr[5],'6'=>$mid1pr[6],'7'=>$mid1pr[7],'8'=>$mid1pr[8],'9'=>$mid1pr[9],'10'=>$mid1pr[10],'11'=>$mid1pr[11],'12'=>$mid1pr[12],'13'=>$mid1pr[13],'14'=>$mid1pr[14],'15'=>$mid1pr[15],'16'=>$mid1pr[16],'17'=>$mid1pr[17],'18'=>$mid1pr[18],'19'=>$mid1pr[19],'20'=>$mid1pr[20],'21'=>$mid1pr[21]);
		$data['mid1tugas']=array('1'=>$mid1tugas[1],'2'=>$mid1tugas[2],'3'=>$mid1tugas[3],'4'=>$mid1tugas[4],'5'=>$mid1tugas[5],'6'=>$mid1tugas[6],'7'=>$mid1tugas[7],'8'=>$mid1tugas[8],'9'=>$mid1tugas[9],'10'=>$mid1tugas[10],'11'=>$mid1tugas[11],'12'=>$mid1tugas[12],'13'=>$mid1tugas[13],'14'=>$mid1tugas[14],'15'=>$mid1tugas[15],'16'=>$mid1tugas[16],'17'=>$mid1tugas[17],'18'=>$mid1tugas[18],'19'=>$mid1tugas[19],'20'=>$mid1tugas[20],'21'=>$mid1tugas[21]);
		$data['mid1ujian']=array('1'=>$mid1ujian[1],'2'=>$mid1ujian[2],'3'=>$mid1ujian[3],'4'=>$mid1ujian[4],'5'=>$mid1ujian[5],'6'=>$mid1ujian[6],'7'=>$mid1ujian[7],'8'=>$mid1ujian[8],'9'=>$mid1ujian[9],'10'=>$mid1ujian[10],'11'=>$mid1ujian[11],'12'=>$mid1ujian[12],'13'=>$mid1ujian[13],'14'=>$mid1ujian[14],'15'=>$mid1ujian[15],'16'=>$mid1ujian[16],'17'=>$mid1ujian[17],'18'=>$mid1ujian[18],'19'=>$mid1ujian[19],'20'=>$mid1ujian[20],'21'=>$mid1ujian[21]);
		$data['sem1pr']=array('1'=>$sem1pr[1],'2'=>$sem1pr[2],'3'=>$sem1pr[3],'4'=>$sem1pr[4],'5'=>$sem1pr[5],'6'=>$sem1pr[6],'7'=>$sem1pr[7],'8'=>$sem1pr[8],'9'=>$sem1pr[9],'10'=>$sem1pr[10],'11'=>$sem1pr[11],'12'=>$sem1pr[12],'13'=>$sem1pr[13],'14'=>$sem1pr[14],'15'=>$sem1pr[15],'16'=>$sem1pr[16],'17'=>$sem1pr[17],'18'=>$sem1pr[18],'19'=>$sem1pr[19],'20'=>$sem1pr[20],'21'=>$sem1pr[21]);
		$data['sem1tugas']=array('1'=>$sem1tugas[1],'2'=>$sem1tugas[2],'3'=>$sem1tugas[3],'4'=>$sem1tugas[4],'5'=>$sem1tugas[5],'6'=>$sem1tugas[6],'7'=>$sem1tugas[7],'8'=>$sem1tugas[8],'9'=>$sem1tugas[9],'10'=>$sem1tugas[10],'11'=>$sem1tugas[11],'12'=>$sem1tugas[12],'13'=>$sem1tugas[13],'14'=>$sem1tugas[14],'15'=>$sem1tugas[15],'16'=>$sem1tugas[16],'17'=>$sem1tugas[17],'18'=>$sem1tugas[18],'19'=>$sem1tugas[19],'20'=>$sem1tugas[20],'21'=>$sem1tugas[21]);
		$data['sem1ujian']=array('1'=>$sem1ujian[1],'2'=>$sem1ujian[2],'3'=>$sem1ujian[3],'4'=>$sem1ujian[4],'5'=>$sem1ujian[5],'6'=>$sem1ujian[6],'7'=>$sem1ujian[7],'8'=>$sem1ujian[8],'9'=>$sem1ujian[9],'10'=>$sem1ujian[10],'11'=>$sem1ujian[11],'12'=>$sem1ujian[12],'13'=>$sem1ujian[13],'14'=>$sem1ujian[14],'15'=>$sem1ujian[15],'16'=>$sem1ujian[16],'17'=>$sem1ujian[17],'18'=>$sem1ujian[18],'19'=>$sem1ujian[19],'20'=>$sem1ujian[20],'21'=>$sem1ujian[21]);
		$data['mid2pr']=array('1'=>$mid2pr[1],'2'=>$mid2pr[2],'3'=>$mid2pr[3],'4'=>$mid2pr[4],'5'=>$mid2pr[5],'6'=>$mid2pr[6],'7'=>$mid2pr[7],'8'=>$mid2pr[8],'9'=>$mid2pr[9],'10'=>$mid2pr[10],'11'=>$mid2pr[11],'12'=>$mid2pr[12],'13'=>$mid2pr[13],'14'=>$mid2pr[14],'15'=>$mid2pr[15],'16'=>$mid2pr[16],'17'=>$mid2pr[17],'18'=>$mid2pr[18],'19'=>$mid2pr[19],'20'=>$mid2pr[20],'21'=>$mid2pr[21]);
		$data['mid2tugas']=array('1'=>$mid2tugas[1],'2'=>$mid2tugas[2],'3'=>$mid2tugas[3],'4'=>$mid2tugas[4],'5'=>$mid2tugas[5],'6'=>$mid2tugas[6],'7'=>$mid2tugas[7],'8'=>$mid2tugas[8],'9'=>$mid2tugas[9],'10'=>$mid2tugas[10],'11'=>$mid2tugas[11],'12'=>$mid2tugas[12],'13'=>$mid2tugas[13],'14'=>$mid2tugas[14],'15'=>$mid2tugas[15],'16'=>$mid2tugas[16],'17'=>$mid2tugas[17],'18'=>$mid2tugas[18],'19'=>$mid2tugas[19],'20'=>$mid2tugas[20],'21'=>$mid2tugas[21]);
		$data['mid2ujian']=array('1'=>$mid2ujian[1],'2'=>$mid2ujian[2],'3'=>$mid2ujian[3],'4'=>$mid2ujian[4],'5'=>$mid2ujian[5],'6'=>$mid2ujian[6],'7'=>$mid2ujian[7],'8'=>$mid2ujian[8],'9'=>$mid2ujian[9],'10'=>$mid2ujian[10],'11'=>$mid2ujian[11],'12'=>$mid2ujian[12],'13'=>$mid2ujian[13],'14'=>$mid2ujian[14],'15'=>$mid2ujian[15],'16'=>$mid2ujian[16],'17'=>$mid2ujian[17],'18'=>$mid2ujian[18],'19'=>$mid2ujian[19],'20'=>$mid2ujian[20],'21'=>$mid2ujian[21]);
		$data['sem2pr']=array('1'=>$sem2pr[1],'2'=>$sem2pr[2],'3'=>$sem2pr[3],'4'=>$sem2pr[4],'5'=>$sem2pr[5],'6'=>$sem2pr[6],'7'=>$sem2pr[7],'8'=>$sem2pr[8],'9'=>$sem2pr[9],'10'=>$sem2pr[10],'11'=>$sem2pr[11],'12'=>$sem2pr[12],'13'=>$sem2pr[13],'14'=>$sem2pr[14],'15'=>$sem2pr[15],'16'=>$sem2pr[16],'17'=>$sem2pr[17],'18'=>$sem2pr[18],'19'=>$sem2pr[19],'20'=>$sem2pr[20],'21'=>$sem2pr[21]);
		$data['sem2tugas']=array('1'=>$sem2tugas[1],'2'=>$sem2tugas[2],'3'=>$sem2tugas[3],'4'=>$sem2tugas[4],'5'=>$sem2tugas[5],'6'=>$sem2tugas[6],'7'=>$sem2tugas[7],'8'=>$sem2tugas[8],'9'=>$sem2tugas[9],'10'=>$sem2tugas[10],'11'=>$sem2tugas[11],'12'=>$sem2tugas[12],'13'=>$sem2tugas[13],'14'=>$sem2tugas[14],'15'=>$sem2tugas[15],'16'=>$sem2tugas[16],'17'=>$sem2tugas[17],'18'=>$sem2tugas[18],'19'=>$sem2tugas[19],'20'=>$sem2tugas[20],'21'=>$sem2tugas[21]);
		$data['sem2ujian']=array('1'=>$sem2ujian[1],'2'=>$sem2ujian[2],'3'=>$sem2ujian[3],'4'=>$sem2ujian[4],'5'=>$sem2ujian[5],'6'=>$sem2ujian[6],'7'=>$sem2ujian[7],'8'=>$sem2ujian[8],'9'=>$sem2ujian[9],'10'=>$sem2ujian[10],'11'=>$sem2ujian[11],'12'=>$sem2ujian[12],'13'=>$sem2ujian[13],'14'=>$sem2ujian[14],'15'=>$sem2ujian[15],'16'=>$sem2ujian[16],'17'=>$sem2ujian[17],'18'=>$sem2ujian[18],'19'=>$sem2ujian[19],'20'=>$sem2ujian[20],'21'=>$sem2ujian[21]);
		
		$data['jumlah']=array('1'=>$jumlah[1],'2'=>$jumlah[2],'3'=>$jumlah[3],'4'=>$jumlah[4],'5'=>$jumlah[5],'6'=>$jumlah[6],'7'=>$jumlah[7],'8'=>$jumlah[8],'9'=>$jumlah[9],'10'=>$jumlah[10],'11'=>$jumlah[11],'12'=>$jumlah[12],'13'=>$jumlah[13],'14'=>$jumlah[14],'15'=>$jumlah[15],'16'=>$jumlah[16],'17'=>$jumlah[17],'18'=>$jumlah[18],'19'=>$jumlah[19],'20'=>$jumlah[20],'21'=>$jumlah[21]);
		$data['rataan']=array('1'=>$rataan[1],'2'=>$rataan[2],'3'=>$rataan[3],'4'=>$rataan[4],'5'=>$rataan[5],'6'=>$rataan[6],'7'=>$rataan[7],'8'=>$rataan[8],'9'=>$rataan[9],'10'=>$rataan[10],'11'=>$rataan[11],'12'=>$rataan[12],'13'=>$rataan[13],'14'=>$rataan[14],'15'=>$rataan[15],'16'=>$rataan[16],'17'=>$rataan[17],'18'=>$rataan[18],'19'=>$rataan[19],'20'=>$rataan[20],'21'=>$rataan[21]);	
		$data['predikat']=array('1'=>$predikat[1],'2'=>$predikat[2],'3'=>$predikat[3],'4'=>$predikat[4],'5'=>$predikat[5],'6'=>$predikat[6],'7'=>$predikat[7],'8'=>$predikat[8],'9'=>$predikat[9],'10'=>$predikat[10],'11'=>$predikat[11],'12'=>$predikat[12],'13'=>$predikat[13],'14'=>$predikat[14],'15'=>$predikat[15],'16'=>$predikat[16],'17'=>$predikat[17],'18'=>$predikat[18],'19'=>$predikat[19],'20'=>$predikat[20],'21'=>$predikat[21]);
		
		$data['nis']=$nis;
		if(isset($nama)) $data['nama']=$nama; 
		if(isset($kelas)) $data['kelas']=$kelas;
		
		$this->load->view('tabelnilai',$data);
	}
}
