<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guru extends CI_Controller {
	public function index(){
		if ($this->session->userdata('tipe')=='guru'){
			$data['header']='header';
			$data['content']='masukguru';
			$data['subcontent']='guruloading';
			$data['footer']='footer';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);
		}else{
			$data['header']='header';
			$data['content']='guru';
			$data['footer']='footer';
			$this->load->view('mainview',$data);
		}
	}
	function ajaxabsensi($kelas){
		$this->load->model('modelguru');			
		$data['absensi']=$this->modelguru->absensisiswa($kelas);
		$data['tipe']=$this->session->userdata('tipe');
		$str1=explode(" ",date('r'));
		$str2=explode("0",$str1[5]);
		if ($str2[1]==null) $dif=0;
		else $dif=$str2[1];
		$gmt=time()+($dif*60*60);
		$wib=$gmt+(7*60*60);
		$data['hari']=$this->inadate->indonesian_date($wib,'l','');
		$data['tgl']=$this->inadate->indonesian_date($wib,'j F Y','');
		$data['kelas']=$kelas;
		$this->load->view('guruabsensi',$data);
	}
	function absensi($kelas){
		$this->load->model('modelguru');			
		$data['absensi']=$this->modelguru->absensisiswa($kelas);
		$data['header']='header';
		$data['content']='masukguru';
		$data['subcontent']='guruabsensi';
		$data['footer']='footer';
		$data['tipe']=$this->session->userdata('tipe');
		$str1=explode(" ",date('r'));
		$str2=explode("0",$str1[5]);
		if ($str2[1]==null) $dif=0;
		else $dif=$str2[1];
		$gmt=time()+($dif*60*60);
		$wib=$gmt+(7*60*60);
		$data['hari']=$this->inadate->indonesian_date($wib,'l','');
		$data['tgl']=$this->inadate->indonesian_date($wib,'j F Y','');
		$data['kelas']=$kelas;
		$this->load->view('mainview',$data);
	}
	function viewabsensi($nis,$kelas){
		$this->load->model('modelguru');
		$data['header']='header';
		$data['content']='masukguru';
		$data['subcontent']='absensipersiswa';
		$data['footer']='footer';
		$data['carinis']=$this->modelguru->carinis($nis);
		$data['tipe']=$this->session->userdata('tipe');
		$str1=explode(" ",date('r'));
		$str2=explode("0",$str1[5]);
		if ($str2[1]==null) $dif=0;
		else $dif=$str2[1];
		$gmt=time()+($dif*60*60);
		$wib=$gmt+(7*60*60);
		$data['hari']=$this->inadate->indonesian_date($wib,'l','');
		$data['tgl']=$this->inadate->indonesian_date($wib,'j M Y','');
		$data['kelas']=$kelas;
		$this->load->view('mainview',$data);
	}
	function cekabsensi(){
		$this->load->model('modelguru');
		$tgl=$this->input->post('tgl');
		$bln=$this->input->post('bln');
		$thn=$this->input->post('thn');	
		$date=$thn.'-'.$bln.'-'.$tgl;	
		$nis=$this->input->post('nis');
		$cekabsensi=$this->modelguru->cekabsensi($date,$nis);
		echo $cekabsensi;
	}
	function simpanabsensi(){
		$this->load->model('modelguru');
		$nis=$this->input->post('nis');
		$nama=$this->input->post('nama');
		$kelas=$this->input->post('kelas');
		if($kelas=='10TPM1')$kelasid=1;
		elseif($kelas=='10TPM2')$kelasid=2;
		elseif($kelas=='10TKR1')$kelasid=3;
		elseif($kelas=='10TKR2')$kelasid=4;
		elseif($kelas=='10TSM1')$kelasid=5;
		elseif($kelas=='10TSM2')$kelasid=6;
		elseif($kelas=='11TPM1')$kelasid=7;
		elseif($kelas=='11TPM2')$kelasid=8;
		elseif($kelas=='11TKR1')$kelasid=9;
		elseif($kelas=='11TKR2')$kelasid=10;
		elseif($kelas=='11TSM1')$kelasid=11;
		elseif($kelas=='11TSM2')$kelasid=12;
		elseif($kelas=='12TPM1')$kelasid=13;
		elseif($kelas=='12TPM2')$kelasid=14;
		elseif($kelas=='12TKR1')$kelasid=15;
		elseif($kelas=='12TKR2')$kelasid=16;
		elseif($kelas=='12TSM1')$kelasid=17;
		elseif($kelas=='12TSM2')$kelasid=18;
		$ket=$this->input->post('ket');
		$hari=$this->input->post('hari');
		$tgl=$this->input->post('tgl');
		$bln=$this->input->post('bln');
		$thn=$this->input->post('thn');
		$date=$thn.'-'.$bln.'-'.$tgl;
		$data=array('nis'=>$nis,'kelas'=>$kelas,'kelasid'=>$kelasid,'ket'=>$ket,'nama'=>$nama,'hari'=>$hari,'date'=>$date,'tgl'=>$tgl,'bln'=>$bln,'thn'=>$thn);
		$status=$this->modelguru->simpanabsensi($data);
		if ($status==1) echo 'ABSEN SISWA: SUKSES';
		else if($status==0) echo 'ABSEN SISWA: GAGAL';
	}
	
	function ajaxnilai(){
		$tipe=$this->session->userdata('tipe');
		$id=$this->session->userdata('id');
		$this->load->model('modelguru');
		$matpel=$this->modelguru->cariguru($id);
		foreach($matpel as $dat){
			$matpel=$dat->matpel;
		}
		//if(($matpel=='Kelas 1')||($matpel=='Kelas 2')||($matpel=='Kelas 3')||($matpel=='Kelas 4')||($matpel=='Kelas 5')||($matpel=='Kelas 6')){
			//$data['matpel']=$matpel;		
			//$data['tipe']=$this->session->userdata('tipe');
			//$mat=explode(' ',$matpel);
			//$kelas=$mat[1];
			//$data['siswa']=$this->modelguru->carisiswakelas($kelas);
			//$this->load->view('nilai/kelas',$data);
		//}
		//elseif(($matpel=='PA')||($matpel=='PJK')||($matpel=='BING')||($matpel=='TIK')){
			$data['matpel']=$matpel;	
			$data['tipe']=$this->session->userdata('tipe');
			$data['siswa']=$this->modelguru->siswa();
			$this->load->view('nilai/khusus',$data);
		//}
		//else{
			//redirect('guru');
		//}
	}
	
	function nilai(){
		$tipe=$this->session->userdata('tipe');
		$id=$this->session->userdata('id');
		$this->load->model('modelguru');
		$matpel=$this->modelguru->cariguru($id);
		foreach($matpel as $dat){
			$matpel=$dat->matpel;
		}
		//if(($matpel=='Kelas 1')||($matpel=='Kelas 2')||($matpel=='Kelas 3')||($matpel=='Kelas 4')||($matpel=='Kelas 5')||($matpel=='Kelas 6')){
			//$data['content']='guru';
			//$data['matpel']=$matpel;	
			//$data['subcontent']='nilai/kelas';	
			//$data['tipe']=$this->session->userdata('tipe');
			//$mat=explode(' ',$matpel);
			//$kelas=$mat[1];
			//$data['siswa']=$this->modelguru->carisiswakelas($kelas);
			//$this->load->view('mainview',$data);
		//}
		//elseif(($matpel=='PA')||($matpel=='PJK')||($matpel=='BING')||($matpel=='TIK')){
			$data['header']='header';
			$data['content']='masukguru';
			$data['footer']='footer';
			$data['matpel']=$matpel;	
			$data['subcontent']='nilai/khusus';	
			$data['tipe']=$this->session->userdata('tipe');
			$data['siswa']=$this->modelguru->siswa();
			$this->load->view('mainview',$data);
		//}
		//else{
			//redirect('guru');
		
		//}
	}
	function inputnilai($nis,$guruid){
		$this->load->model('modelguru');	
		$data['header']='header';
			$data['content']='masukguru';
			$data['footer']='footer';
		$matpel=$this->modelguru->cariguru($guruid);
		foreach($matpel as $dat){
			$matpel=$dat->matpel;
		}
		
		$matpelname=$this->modelguru->carisubmatpel($matpel);
		foreach($matpelname as $dat){
			$subname=$dat->subname;
			$subid=$dat->subid;
		}

		//if(($matpel=='Kelas 1')||($matpel=='Kelas 2')||($matpel=='Kelas 3')||($matpel=='Kelas 4')||($matpel=='Kelas 5')||($matpel=='Kelas 6')){
			//$data['subcontent']='nilai/kelaspersiswa';
		//}
		//elseif(($matpel=='PA')||($matpel=='PJK')||($matpel=='BING')||($matpel=='TIK')){
			$data['subcontent']='nilai/khususpersiswa';
			$data['matpelname']=$matpelname;
			$data['matpel']=$subid;
			$data['subname']=$subname;
		//}
		//else{
			//redirect('guru');
		//}	
		$data['tipe']=$this->session->userdata('tipe');
		$data['siswa']=$this->modelguru->carinis($nis);
		$this->load->view('mainview',$data);
	}

	function ajaxsimpannilai(){
		$this->load->model('modelguru');
		$nis=$this->input->post('nis');	
		$kelas=$this->modelguru->carinis($nis);
		foreach($kelas as $dat){
			$kelas=$dat->kelas;
		}
		$nilai=$this->input->post('nilai');
		$jenis1=$this->input->post('jenis1');
		$jenis2=$this->input->post('jenis2');
		$matpel=$this->input->post('matpel');
		$this->form_validation->set_rules('nilai', '', 'required');
		if($jenis2==1)$jenis2='mid1'; elseif($jenis2==2)$jenis2='sem1'; elseif($jenis2==3)$jenis2='mid2'; elseif($jenis2==4)$jenis2='sem2';
		if($jenis1==1)$jenis1='pr'; elseif($jenis1==2)$jenis1='tugas'; elseif($jenis1==3)$jenis1='ujian';
		$jenis=$jenis2.$jenis1;
		$data=array('nis'=>$nis,'nilai'=>$nilai,'matpelid'=>$matpel,'jenis'=>$jenis);
		if($this->form_validation->run() == TRUE){
			$ceknilai=$this->modelguru->simpannilai($data,'nilai');
			if($ceknilai==1){
				echo 'PROSES SIMPAN DATA: SUKSES';
			}else{
				echo 'PROSES SIMPAN DATA: GAGAL';
			}
		}else{
			echo 'DATA BELUM LENGKAP';
		}
	}
	function ajaxupdatenilai(){
		$this->load->model('modelguru');
		$nis=$this->input->post('nis');	
		$kelas=$this->modelguru->carinis($nis);
		foreach($kelas as $dat){
			$kelas=$dat->kelas;
		}
		$nilai=$this->input->post('nilai');
		$jenis1=$this->input->post('jenis1');
		$jenis2=$this->input->post('jenis2');
		$matpel=$this->input->post('matpel');
		$this->form_validation->set_rules('nilai', '', 'required');
		if($jenis2==1)$jenis2='mid1'; elseif($jenis2==2)$jenis2='sem1'; elseif($jenis2==3)$jenis2='mid2'; elseif($jenis2==4)$jenis2='sem2';
		if($jenis1==1)$jenis1='pr'; elseif($jenis1==2)$jenis1='tugas'; elseif($jenis1==3)$jenis1='ujian';
		$jenis=$jenis2.$jenis1;
		$data=array('jenis'=>$jenis,'nis'=>$nis,'nilai'=>$nilai,'matpelid'=>$matpel);
		if($this->form_validation->run() == TRUE){
			$ceknilai=$this->modelguru->updatenilai($matpel,$nis,$data,'nilai');
			if($ceknilai==1){
				echo 'PROSES UPDATE DATA: SUKSES';
			}else{
				echo 'PROSES UPDATE DATA: GAGAL';
			}
		}else{
			echo 'DATA BELUM LENGKAP';
		}
	}
	function ajaxceknilai(){
		$matpel=$this->input->post('matpel');
		$nis=$this->input->post('nis');
		$jenis1=$this->input->post('jenis1');
		$jenis2=$this->input->post('jenis2');
		if($jenis2==1)$jenis2='mid1'; elseif($jenis2==2)$jenis2='sem1'; elseif($jenis2==3)$jenis2='mid2'; elseif($jenis2==4)$jenis2='sem2';
		if($jenis1==1)$jenis1='pr'; elseif($jenis1==2)$jenis1='tugas'; elseif($jenis1==3)$jenis1='ujian';
		$jenis=$jenis2.$jenis1;
		$this->load->model('modelguru');
		$ceknilai=$this->modelguru->ceknilai($matpel,$nis,'nilai',$jenis);
		echo $ceknilai;
	}
}
