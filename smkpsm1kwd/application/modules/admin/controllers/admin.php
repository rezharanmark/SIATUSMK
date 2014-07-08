<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index(){
		if ($this->session->userdata('tipe')=='admin'){
			$data['header']='header';
			$data['content']='masukadmin';
			$data['subcontent']='adminloading';
			$data['footer']='footer';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);
		}else{
			$this->load->model('modeladmin');
			$data['header']='header';
			$data['content']='admin';
			$data['footer']='footer';
			$carifoto=$this->modeladmin->carifoto();
			foreach ($carifoto as $dat){
				$foto=$dat->foto;
			}
			$biodata=$this->modeladmin->get('biodata');
			foreach ($biodata as $dat){
				$nama=$dat->nama;
				$alamat=$dat->alamat;
				$email=$dat->email;
				$phone=$dat->phone;
			}
			$data['foto']=$foto;
			$data['nama']=$nama;
			$data['alamat']=$alamat;
			$data['email']=$email;
			$data['phone']=$phone;
			$this->load->view('mainview',$data);
		}

	}
	
	function editjadwal(){
		$data['header']='header';
		$data['content']='jadwal';
		$data['footer']='footer';
		$data['id']='editjadwal';
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);
	}
	
	function edittabel(){
		$this->load->model('modeladmin');
		$hari=$this->input->post('hari');
		$kelas=$this->input->post('kelas');
		$param='kelas';
		$order='jam';
		$data['jadwal']=$this->modeladmin->carijadwal($param,$kelas,$hari,$order);
		$data['hari']=$hari;
		$data['kelas']=$kelas;
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('tabeledit',$data);
	}
	
	function inputtabel(){
		$hari=$this->input->post('hari');
		$kelas=$this->input->post('kelas');
		$data['hari']=$hari;
		$data['kelas']=$kelas;
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('tabelinput',$data);
	}
	
	function inputjadwal(){
		$data['header']='header';
		$data['content']='jadwal';
		$data['footer']='footer';
		$data['id']='inputjadwal';
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);
	}
	
	function idadmin(){
		$data['header']='header';
		$data['content']='masukadmin';
		$data['subcontent']='idadmin';
		$data['footer']='footer';
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);
	}
	
	function editdataadmin(){
		$data['header']='header';
		$data['content']='masukadmin';
		$data['subcontent']='editdataadmin';
		$data['footer']='footer';
		$this->load->model('modeladmin');
		$data['biodata']=$this->modeladmin->get('biodata');
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);
	}
	
	function fotoadmin(){
		$data['header']='header';
		$data['content']='masukadmin';
		$data['subcontent']='fotoadmin';
		$data['footer']='footer';
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);
	}
	function simpanidadmin(){
		$usernamelama=$this->input->post('usernamelama');
		$passwordlama=$this->input->post('passwordlama');
		$passwordlama=md5($passwordlama);
		$usernamebaru=$this->input->post('usernamebaru');
		$passwordbaru=$this->input->post('passwordbaru');
		$passwordbaru=md5($passwordbaru);
		$query=$this->db->query("SELECT * FROM admin WHERE username='$usernamelama' AND userpass='$passwordlama'");
		$this->form_validation->set_rules('usernamelama', 'Username Lama', 'trim|required|xss'); 
		$this->form_validation->set_rules('passwordlama', 'Password Lama', 'trim|required|xss'); 
		$this->form_validation->set_rules('usernamebaru', 'Username Baru', 'trim|required|alpha|min_length[3]|max_length[7]|xss'); 
		$this->form_validation->set_rules('passwordbaru', 'Password Baru', 'trim|required|min_length[5]|max_length[7]|xss');
		$this->form_validation->set_rules('konfirmasi', 'Konfirmasi', 'trim|required|matches[passwordbaru]|xss');  
		if (($this->form_validation->run() == FALSE)||($query->num_rows()==0)){  
			$data['header']='header';
			$data['content']='masukadmin';
			$data['subcontent']='idadmin';
			$data['footer']='footer';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);
		}else{
			$this->load->model('modeladmin');
			$cariid=$this->modeladmin->cariid($usernamelama,$passwordlama);
			foreach ($cariid as $db){
				$adminid=$db->adminid;
			}
			$update=$this->modeladmin->update($adminid,$usernamebaru,$passwordbaru);
			if($update==1){
				$data['header']='header';
				$data['content']='masukadmin';
				$data['subcontent']='adminloading';
				$data['footer']='footer';
				$data['tipe']=$this->session->userdata('tipe');
				$this->load->view('mainview',$data);
				echo '<script>alert("UPDATE ID ADMIN: SUKSES");</script>';	
			}else{
				redirect('admin');
			}
		}
	}
	
	function simpandataadmin(){
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$data=array('nama'=>$nama,'alamat'=>$alamat,'email'=>$email,'phone'=>$phone);
			$this->load->model('modeladmin');
			$update=$this->modeladmin->updatebiodata($data);
			if($update==1){
				$data['header']='header';
				$data['content']='masukadmin';
				$data['subcontent']='statusbiodata';
				$data['footer']='footer';
				$data['proses']='UPDATE';
				$data['status']='SUKSES';
				$data['tipe']=$this->session->userdata('tipe');
				$this->load->view('mainview',$data);
			}else{
				$data['header']='header';
				$data['content']='masukadmin';
				$data['subcontent']='statusbiodata';
				$data['footer']='footer';
				$data['proses']='UPDATE';
				$data['status']='GAGAL';
				$data['tipe']=$this->session->userdata('tipe');
				$this->load->view('mainview',$data);
			}

	}
	
	function simpanfotoadmin(){
		$config['upload_path'] = './themes/upload';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload()){
			$data['error']=$this->upload->display_errors();
			$data['header']='header';
			$data['content']='masukadmin';
			$data['subcontent']='fotoadmin';
			$data['footer']='footer';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);
		}else{
			$upload_data=$this->upload->data();
			foreach ($upload_data as $item=>$val){
				$dat[$item]=$val;
			}
			$foto=$dat['file_name'];
			$adminid=$this->session->userdata('id');
			$this->load->model('modeladmin');
			$this->modeladmin->updatefoto($adminid,$foto);
			$data['upload_data']=$upload_data;
			$data['header']='header';
			$data['content']='masukadmin';
			$data['subcontent']='suksesfoto';
			$data['footer']='footer';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);
		}
	}
	function simpanfotokegiatan(){
		$config['upload_path'] = './asset/img/galeri';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload()){
			$data['error']=$this->upload->display_errors();
			$data['content']='admin';
			$data['subcontent']='fotoadmin';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);
		}else{
			$upload_data=$this->upload->data();
			foreach ($upload_data as $item=>$val){
				$dat[$item]=$val;
			}
			$foto=$dat['file_name'];
			$data=array('nama'=>$foto);
			$adminid=$this->session->userdata('id');
			$this->load->model('modeladmin');
			$this->modeladmin->insertfoto('kegiatan',$data);
			$data['upload_data']=$upload_data;
			$data['content']='admin';
			$data['subcontent']='suksesfoto';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);
		}
	}
	function siswa($kelas){
		$this->load->model('modeladmin');			
		$data['siswa']=$this->modeladmin->siswa($kelas);
		$data['header']='header';
		$data['content']='masukadmin';
		$data['subcontent']='siswa';
		$data['footer']='footer';
		$data['tipe']=$this->session->userdata('tipe');
		$data['kelas']=$kelas;
		$this->load->view('mainview',$data);
	}
	function editsiswa($id,$kelas){
		$this->load->model('modeladmin');			
		$data['editsiswa']=$this->modeladmin->siswaid($id,'siswa');
		$data['header']='header';
		$data['content']='masukadmin';
		$data['subcontent']='editsiswa';
		$data['footer']='footer';
		$data['tipe']=$this->session->userdata('tipe');
		$data['kelas']=$kelas;
		$this->load->view('mainview',$data);
	}
	function updatesiswa(){
		$config['upload_path'] = './asset/img/psb';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);
		$id=$this->input->post('no');
		$nama=$this->input->post('nama');
		$gender=$this->input->post('gender');
			if ($gender==1)$gender='L';
			elseif($gender==2)$gender='P';
			else $gender='';
		$tempat_lahir=$this->input->post('tempat_lahir');
		$agama=$this->input->post('agama');
			if ($agama==1)$agama='Islam';
			elseif($agama==2)$agama='Kristen';
			elseif($agama==3)$agama='Katolik';
			elseif($agama==4)$agama='Hindu';
			else $agama='';
		$alamat=$this->input->post('alamat');
		$nama_ayah=$this->input->post('nama_ayah');
		$kerja_ayah=$this->input->post('kerja_ayah');
		$nama_ibu=$this->input->post('nama_ibu');
		$kerja_ibu=$this->input->post('kerja_ibu');
		$kelas=$this->input->post('kelas');
			if ($kelas==0)$kelas='';
		$ket=$this->input->post('ket');
		$thn=$this->input->post('thn');
		$bln=$this->input->post('bln');
		$tgl=$this->input->post('tgl');
		$tgl_lahir=$thn.'-'.$bln.'-'.$tgl;
		$nisn=$this->input->post('nisn');
		$unsd=$this->input->post('unsd');
		$this->load->model('modeladmin');
		if ($this->upload->do_upload()){
			$upload_data=$this->upload->data();
			foreach ($upload_data as $item=>$val){
				$dat[$item]=$val;
			}
			$foto=$dat['file_name'];
			$data=array('foto'=>$foto,'no'=>$id,'unsd'=>$unsd,'nama'=>$nama,'gender'=>$gender,'tempat_lahir'=>$tempat_lahir,'agama'=>$agama,'alamat'=>$alamat,'nama_ayah'=>$nama_ayah,'kerja_ayah'=>$kerja_ayah,'nama_ibu'=>$nama_ibu,'kerja_ibu'=>$kerja_ibu,'kelas'=>$kelas,'ket'=>$ket,'tgl_lahir'=>$tgl_lahir,'nisn'=>$nisn);
			$update=$this->modeladmin->updatesiswa($id,$data); 
		}else{
			$data=array('no'=>$id,'unsd'=>$unsd,'nama'=>$nama,'gender'=>$gender,'tempat_lahir'=>$tempat_lahir,'agama'=>$agama,'alamat'=>$alamat,'nama_ayah'=>$nama_ayah,'kerja_ayah'=>$kerja_ayah,'nama_ibu'=>$nama_ibu,'kerja_ibu'=>$kerja_ibu,'kelas'=>$kelas,'ket'=>$ket,'tgl_lahir'=>$tgl_lahir,'nisn'=>$nisn);
			$update=$this->modeladmin->updatesiswa($id,$data); 
		}
		  
		if($update==1){
			redirect('admin/siswa/'.$kelas);
		}else{
			redirect('admin/editsiswa/'.$id.'/'.$kelas);
		}     
	}
	function absensisiswa(){
		$data['header']='header';
		$data['content']='masukadmin';
		$data['subcontent']='absensisiswa';
		$data['footer']='footer';
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);	
	}
	function laporanguru(){
		$data['header']='header';
		$data['content']='masukadmin';
		$data['subcontent']='laporanguru';
		$data['footer']='footer';
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);	
	}
	function tabelabsensi(){
		$this->load->model('modeladmin');
		$thn=$this->input->post('thn');
		$bln=$this->input->post('bln');
		$search=array('10','11','12','1','2','3','4','5','6','7','8','9');
		$replace=array('Oktober','November','Desember','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September');
		$bulan=str_replace($search, $replace, $bln);
		$data['thn1']=$thn;
		$data['thn2']=$thn+1;
		$data['bulan']=$bulan;
		for($kelas=1; $kelas<=18; $kelas++){
			$qL=$this->modeladmin->L($kelas);
			$qP=$this->modeladmin->P($kelas);
			$qsakit=$this->modeladmin->sakit($kelas,$bln,$thn,'absensisiswa');	
			$qizin=$this->modeladmin->izin($kelas,$bln,$thn,'absensisiswa');
			$qalpha=$this->modeladmin->alpha($kelas,$bln,$thn,'absensisiswa');
			foreach ($qL as $row){$L[$kelas]=$row[0];}
			foreach ($qP as $row){$P[$kelas]=$row[0];}
			foreach ($qsakit as $row){$sakit[$kelas]=$row[0];}
			foreach ($qizin as $row){$izin[$kelas]=$row[0];}
			foreach ($qalpha as $row){$alpha[$kelas]=$row[0];}
		}
		$data['kelas']=array('1'=>'10TPM1','2'=>'10TPM2','3'=>'10TKR1','4'=>'10TKR2','5'=>'10TSM1','6'=>'10TSM2','7'=>'11TPM1','8'=>'11TPM2','9'=>'11TKR1','10'=>'11TKR2','11'=>'11TSM1','12'=>'11TSM2','13'=>'12TPM1','14'=>'12TPM2','15'=>'12TKR1','16'=>'12TKR2','17'=>'12TSM1','18'=>'12TSM2');
		$data['sakit']=array('1'=>$sakit[1],'2'=>$sakit[2],'3'=>$sakit[3],'4'=>$sakit[4],'5'=>$sakit[5],'6'=>$sakit[6],'7'=>$sakit[7],'8'=>$sakit[8],'9'=>$sakit[9],'10'=>$sakit[10],'11'=>$sakit[11],'12'=>$sakit[12],'13'=>$sakit[13],'14'=>$sakit[14],'15'=>$sakit[15],'16'=>$sakit[16],'17'=>$sakit[17],'18'=>$sakit[18]);
		$data['izin']=array('1'=>$izin[1],'2'=>$izin[2],'3'=>$izin[3],'4'=>$izin[4],'5'=>$izin[5],'6'=>$izin[6],'7'=>$izin[7],'8'=>$izin[8],'9'=>$izin[9],'10'=>$izin[10],'11'=>$izin[11],'12'=>$izin[12],'13'=>$izin[13],'14'=>$izin[14],'15'=>$izin[15],'16'=>$izin[16],'17'=>$izin[17],'18'=>$izin[18]);
		$data['alpha']=array('1'=>$alpha[1],'2'=>$alpha[2],'3'=>$alpha[3],'4'=>$alpha[4],'5'=>$alpha[5],'6'=>$alpha[6],'7'=>$alpha[7],'8'=>$alpha[8],'9'=>$alpha[9],'10'=>$alpha[10],'11'=>$alpha[11],'12'=>$alpha[12],'13'=>$alpha[13],'14'=>$alpha[14],'15'=>$alpha[15],'16'=>$alpha[16],'17'=>$alpha[17],'18'=>$alpha[18]);
		$data['L']=array('1'=>$L[1],'2'=>$L[2],'3'=>$L[3],'4'=>$L[4],'5'=>$L[5],'6'=>$L[6],'7'=>$L[7],'8'=>$L[8],'9'=>$L[9],'10'=>$L[10],'11'=>$L[11],'12'=>$L[12],'13'=>$L[13],'14'=>$L[14],'15'=>$L[15],'16'=>$L[16],'17'=>$L[17],'18'=>$L[18]);
		$data['P']=array('1'=>$P[1],'2'=>$P[2],'3'=>$P[3],'4'=>$P[4],'5'=>$P[5],'6'=>$P[6],'7'=>$P[7],'8'=>$P[8],'9'=>$P[9],'10'=>$P[10],'11'=>$P[11],'12'=>$P[12],'13'=>$P[13],'14'=>$P[14],'15'=>$P[15],'16'=>$P[16],'17'=>$P[17],'18'=>$P[18]);
		$this->load->view('tabelabsensi',$data);
	}
	function editabsensisiswa($nis,$date,$kelas){
		$this->load->model('modeladmin');
		$edit=$this->modeladmin->editabsensidate($nis,$date);	
		foreach($edit as $dat){
			$data['nama']=$dat->nama;
			$data['nis']=$dat->nis;
			$data['ket']=$dat->ket;
			$data['bulan']=$dat->bln;
		}
		$data['kelas']=$kelas;
		$data['date']=$date;
		$date=explode('-',$date);
		$data['tgl']=$date[2];
		$search=array('01','02','03','04','05','06','07','08','09','10','11','12');
		$replace=array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
		$date[1]=str_replace($search,$replace,$date[1]);
		$data['bln']=$date[1];
		$data['thn']=$date[0];	
		$data['content']='admin';
		$data['subcontent']='tabeleditabsensi';
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);	
	}
	function updateabsensisiswa(){
		$nis=$this->input->post('nis');
		$kelas=$this->input->post('kelas');
		$date=$this->input->post('date');
		$ket=$this->input->post('ket');
		$this->load->model('modeladmin');
		$search=array('1','2','3');
		$replace=array('Sakit','Izin','Alpha');
		$ket=str_replace($search, $replace, $ket);
		$data=array('ket'=>$ket);
		$update=$this->modeladmin->updateabsensisiswa($nis,$date,$data);
		if($update==1){
			echo '<script>alert("UPDATE ABSENSI SISWA: SUKSES");</script>';
			$data['content']='admin';
			$data['subcontent']='absensisiswa';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);	
		}elseif($update==0){
			redirect('admin/editabsensisiswa/'.$nis.'/'.$date.'/'.$kelas);	
		}
	}
	function inputguru(){
		$data['header']='header';
		$data['content']='masukadmin';
		$data['subcontent']='inputguru';
		$data['footer']='footer';
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);	
	}
	
	function inputberita(){
		$data['header']='header';
		$data['content']='masukadmin';
		$data['subcontent']='inputberita';
		$data['footer']='footer';
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);	
	}
	
	function simpaninputberita(){
		$config['upload_path'] = './themes/upload/berita';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);
		$judul=$this->input->post('judul');
		$deskripsi=$this->input->post('deskripsi');
		$isi=$this->input->post('isi');

			$this->load->model('modeladmin');
			if($this->upload->do_upload()){
		
				$upload_data=$this->upload->data();
				foreach ($upload_data as $item=>$val){
					$dat[$item]=$val;
				}
				$foto=$dat['file_name'];
				$data=array('judul'=>$judul,'judul'=>$judul,'deskripsi'=>$deskripsi,'isi'=>$isi,'foto'=>$foto);
				$insert=$this->modeladmin->insert($data,'berita');
			}else{
				$data=array('judul'=>$judul,'judul'=>$judul,'deskripsi'=>$deskripsi,'isi'=>$isi);
				$insert=$this->modeladmin->insert($data,'berita');
			}
				if ($insert=1){
					$data['header']='header';
					$data['content']='masukadmin';
					$data['subcontent']='statusberita';
					$data['footer']='footer';
					$data['proses']='INPUT';
					$data['status']='SUKSES';
					$data['tipe']=$this->session->userdata('tipe');
					$this->load->view('mainview',$data);
				}else{
					$data['error']=$this->upload->display_errors();
					$data['header']='header';
					$data['content']='masukadmin';	
					$data['subcontent']='statusberita';
					$data['footer']='footer';
					$data['proses']='INPUT';
					$data['status']='GAGAL';
					$data['tipe']=$this->session->userdata('tipe');
					$this->load->view('mainview',$data);
				}

				
	}
	
	
	function simpaninputguru(){
		$nip=$this->input->post('nip');
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$konfirmasi=$this->input->post('konfirmasi');
		$matpel=$this->input->post('matpel');
		$gender=$this->input->post('gender');
		$agama=$this->input->post('agama');
		$alamat=$this->input->post('alamat');
		$this->form_validation->set_rules('nip','','required'); 
		$this->form_validation->set_rules('nama','','required');
		$this->form_validation->set_rules('username','','required|alpha|min_length[5]|max_length[9]');
		$this->form_validation->set_rules('password','','required|min_length[5]|max_length[9]|matches[konfirmasi]');
		$this->form_validation->set_rules('konfirmasi','','required');
		$this->form_validation->set_rules('matpel','','required');
		$userpass=md5($password);
		$data=array('matpel'=>$matpel,'nip'=>$nip,'nama'=>$nama,'gender'=>$gender,'agama'=>$agama,'alamat'=>$alamat,'username'=>$username,'userpass'=>$userpass,'password'=>$password);
		if ($this->form_validation->run() == TRUE){
			$this->load->model('modeladmin');
			$insert=$this->modeladmin->insert($data,'guru');
			if($insert==1){
				$data['header']='header';
				$data['content']='masukadmin';
				$data['subcontent']='sukses';
				$data['footer']='footer';
				$data['proses']='INPUT';
				$data['tipe']=$this->session->userdata('tipe');
				$this->load->view('mainview',$data);
			}else{
				$data['header']='header';
				$data['content']='masukadmin';
				$data['subcontent']='gagal';
				$data['footer']='footer';
				$data['proses']='INPUT';
				$data['tipe']=$this->session->userdata('tipe');
				$this->load->view('mainview',$data);
			}
		}else{
			$data['header']='header';
			$data['content']='masukadmin';
			$data['subcontent']='inputguru';
			$data['footer']='footer';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);
		}	
	}
	
	function simpaninputjadwal(){
		$this->load->model('modeladmin');
		$kelas=$this->input->post('kelas');
		$hari=$this->input->post('hari');
		
		$satu=$this->input->post('satu');
		$data1=array('kelas'=>$kelas,'matpel'=>$satu,'jam'=>'1');
		$insert1=$this->modeladmin->insert($data1,$hari);
		
		$dua=$this->input->post('dua');
		$data2=array('kelas'=>$kelas,'matpel'=>$dua,'jam'=>'2');
		$insert2=$this->modeladmin->insert($data2,$hari);
		
		$tiga=$this->input->post('tiga');
		$data3=array('kelas'=>$kelas,'matpel'=>$tiga,'jam'=>'3');
		$insert3=$this->modeladmin->insert($data3,$hari);
		
		$empat=$this->input->post('empat');
		$data4=array('kelas'=>$kelas,'matpel'=>$empat,'jam'=>'4');
		$insert4=$this->modeladmin->insert($data4,$hari);
		
		$lima=$this->input->post('lima');
		$data5=array('kelas'=>$kelas,'matpel'=>$lima,'jam'=>'5');
		$insert5=$this->modeladmin->insert($data5,$hari);
		
		$enam=$this->input->post('enam');
		$data6=array('kelas'=>$kelas,'matpel'=>$enam,'jam'=>'6');
		$insert6=$this->modeladmin->insert($data6,$hari);
		
		$tujuh=$this->input->post('tujuh');
		$data7=array('kelas'=>$kelas,'matpel'=>$tujuh,'jam'=>'7');
		$insert7=$this->modeladmin->insert($data7,$hari);
		
		$delapan=$this->input->post('delapan');
		$data8=array('kelas'=>$kelas,'matpel'=>$delapan,'jam'=>'8');
		$insert8=$this->modeladmin->insert($data8,$hari);
		
		$sembilan=$this->input->post('sembilan');
		$data9=array('kelas'=>$kelas,'matpel'=>$sembilan,'jam'=>'9');
		$insert9=$this->modeladmin->insert($data9,$hari);
		
		$sepuluh=$this->input->post('sepuluh');
		$data10=array('kelas'=>$kelas,'matpel'=>$sepuluh,'jam'=>'10');
		$insert10=$this->modeladmin->insert($data10,$hari);
		
		if(($insert1==1)&&($insert2==1)&&($insert3==1)&&($insert4==1)&&($insert5==1)&&($insert6==1)&&($insert7==1)&&($insert8==1)&&($insert9==1)&&($insert10==1)){
				$data['header']='header';
				$data['content']='jadwal';
				$data['subcontent']='statusjadwal';
				$data['footer']='footer';
				$data['id']='inputjadwal';
				$data['proses']='INPUT';
				$data['status']='BERHASIL';
				$data['tipe']=$this->session->userdata('tipe');
				$this->load->view('mainview',$data);
	
			}else{
				$data['header']='header';
				$data['content']='jadwal';
				$data['subcontent']='statusjadwal';
				$data['footer']='footer';
				$data['id']='inputjadwal';
				$data['proses']='INPUT';
				$data['status']='GAGAL';
				$data['tipe']=$this->session->userdata('tipe');
				$this->load->view('mainview',$data);
			}	
	}
	
	function simpaneditjadwal(){
		$this->load->model('modeladmin');
		$kelas=$this->input->post('kelas');
		$hari=$this->input->post('hari');
		
		$satu=$this->input->post('satu');
		$data1=array('matpel'=>$satu);
		$insert1=$this->modeladmin->updatejadwal($kelas,1,$data1,$hari);
		
		$dua=$this->input->post('dua');
		$data2=array('matpel'=>$dua);
		$insert2=$this->modeladmin->updatejadwal($kelas,2,$data2,$hari);
		
		$tiga=$this->input->post('tiga');
		$data3=array('matpel'=>$tiga);
		$insert3=$this->modeladmin->updatejadwal($kelas,3,$data3,$hari);
		
		$empat=$this->input->post('empat');
		$data4=array('matpel'=>$empat);
		$insert4=$this->modeladmin->updatejadwal($kelas,4,$data4,$hari);
		
		$lima=$this->input->post('lima');
		$data5=array('matpel'=>$lima);
		$insert5=$this->modeladmin->updatejadwal($kelas,5,$data5,$hari);
		
		$enam=$this->input->post('enam');
		$data6=array('matpel'=>$enam);
		$insert6=$this->modeladmin->updatejadwal($kelas,6,$data6,$hari);
		
		$tujuh=$this->input->post('tujuh');
		$data7=array('matpel'=>$tujuh);
		$insert7=$this->modeladmin->updatejadwal($kelas,7,$data7,$hari);
		
		$delapan=$this->input->post('delapan');
		$data8=array('matpel'=>$delapan);
		$insert8=$this->modeladmin->updatejadwal($kelas,8,$data8,$hari);
		
		$sembilan=$this->input->post('sembilan');
		$data9=array('matpel'=>$sembilan);
		$insert9=$this->modeladmin->updatejadwal($kelas,9,$data9,$hari);
		
		$sepuluh=$this->input->post('sepuluh');
		$data10=array('matpel'=>$sepuluh);
		$insert10=$this->modeladmin->updatejadwal($kelas,10,$data10,$hari);
		
		if(($insert1==1)||($insert2==1)||($insert3==1)||($insert4==1)||($insert5==1)||($insert6==1)||($insert7==1)||($insert8==1)||($insert9==1)||($insert10==1)){
				$data['header']='header';
				$data['content']='jadwal';
				$data['subcontent']='statusjadwal';
				$data['footer']='footer';
				$data['id']='inputjadwal';
				$data['proses']='EDIT';
				$data['status']='BERHASIL';
				$data['tipe']=$this->session->userdata('tipe');
				$this->load->view('mainview',$data);
	
			}else{
				$data['header']='header';
				$data['content']='jadwal';
				$data['subcontent']='statusjadwal';
				$data['footer']='footer';
				$data['id']='inputjadwal';
				$data['proses']='EDIT';
				$data['status']='GAGAL';
				$data['tipe']=$this->session->userdata('tipe');
				$this->load->view('mainview',$data);
			}	
	}
	
	function listguru(){
		$data['header']='header';
		$data['content']='masukadmin';
		$data['subcontent']='listguru';
		$data['footer']='footer';
		$this->load->model('modeladmin');
		$data['guru']=$this->modeladmin->get('guru');
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);	
	}
	
	function listberita(){
		$data['header']='header';
		$data['content']='masukadmin';
		$data['subcontent']='listberita';
		$data['footer']='footer';
		$this->load->model('modeladmin');
		$data['berita']=$this->modeladmin->get('berita');
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);	
	}
	
	function editguru($guruid){
		$data['header']='header';
		$data['content']='masukadmin';
		$data['subcontent']='editguru';
		$data['footer']='footer';
		$this->load->model('modeladmin');
		$data['guru']=$this->modeladmin->get_where($guruid,'guru');
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);	
	}
	
	function removeguru($guruid){
		$this->db->delete('guru', array('id' => $guruid)); 
		redirect('admin/listguru');
	}
	
	function removesiswa($nis,$kelas){
		$this->db->delete('siswa', array('nis' => $nis)); 
		redirect('admin/siswa/'.$kelas);
	}
	
	function removeberita($beritaid){
		$this->db->delete('berita', array('id' => $beritaid)); 
		redirect('admin/listberita');
	}
	
	function editberita($beritaid){
		$data['header']='header';
		$data['content']='masukadmin';
		$data['subcontent']='editberita';
		$data['footer']='footer';
		$this->load->model('modeladmin');
		$data['berita']=$this->modeladmin->get_where($beritaid,'berita');
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);	
	}
	
	function simpaneditguru(){
		$guruid=$this->input->post('guruid');
		$nip=$this->input->post('nip');
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$konfirmasi=$this->input->post('konfirmasi');
		$matpel=$this->input->post('matpel');
		$gender=$this->input->post('gender');
		$agama=$this->input->post('agama');
		$alamat=$this->input->post('alamat');
		$this->form_validation->set_rules('nip','','required'); 
		$this->form_validation->set_rules('nama','','required');
		$this->form_validation->set_rules('username','','required|alpha|min_length[5]|max_length[9]');
		$this->form_validation->set_rules('password','','matches[konfirmasi]');
		$userpass=md5($password);
		$data=array('matpel'=>$matpel,'nip'=>$nip,'nama'=>$nama,'gender'=>$gender,'agama'=>$agama,'alamat'=>$alamat,'username'=>$username,'userpass'=>$userpass,'password'=>$password);
		if ($this->form_validation->run() == TRUE){
			$this->load->model('modeladmin');
			$insert=$this->modeladmin->updateguru($guruid,$data);
			if($insert==1){
				$data['header']='header';
				$data['content']='masukadmin';
				$data['subcontent']='sukses';
				$data['footer']='footer';
				$data['proses']='UPDATE';
				$data['tipe']=$this->session->userdata('tipe');
				$this->load->view('mainview',$data);
			}else{
				$data['header']='header';
				$data['content']='masukadmin';	
				$data['subcontent']='gagal';
				$data['footer']='footer';
				$data['proses']='UPDATE';
				$data['tipe']=$this->session->userdata('tipe');
				$this->load->view('mainview',$data);
			}
		}else{
			$data['header']='header';
			$data['content']='masukadmin';
			$data['subcontent']='gagal';
			$data['footer']='footer';
			$data['proses']='UPDATE';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);
		}
	}
	
	function simpaneditberita(){
		$config['upload_path'] = './themes/upload/berita';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);
		$beritaid=$this->input->post('beritaid');
		$judul=$this->input->post('judul');
		$deskripsi=$this->input->post('deskripsi');
		$isi=$this->input->post('isi');

			$this->load->model('modeladmin');
			if($this->upload->do_upload()){
				$upload_data=$this->upload->data();
				foreach ($upload_data as $item=>$val){
					$dat[$item]=$val;
				}
				$foto=$dat['file_name'];
				$data=array('judul'=>$judul,'judul'=>$judul,'deskripsi'=>$deskripsi,'isi'=>$isi,'foto'=>$foto);
				$insert=$this->modeladmin->updateberita($beritaid,$data);
			}else{
				$data=array('judul'=>$judul,'judul'=>$judul,'deskripsi'=>$deskripsi,'isi'=>$isi);
				$insert=$this->modeladmin->updateberita($beritaid,$data);
			}
				if ($insert=1){
					$data['header']='header';
					$data['content']='masukadmin';
					$data['subcontent']='statusberita';
					$data['footer']='footer';
					$data['proses']='UPDATE';
					$data['status']='SUKSES';
					$data['tipe']=$this->session->userdata('tipe');
					$this->load->view('mainview',$data);
				}else{
					$data['error']=$this->upload->display_errors();
					$data['header']='header';
					$data['content']='masukadmin';	
					$data['subcontent']='statusberita';
					$data['footer']='footer';
					$data['proses']='UPDATE';
					$data['status']='GAGAL';
					$data['tipe']=$this->session->userdata('tipe');
					$this->load->view('mainview',$data);
				}

		
	}
	
	function absensiguru(){
		$data['header']='header';
		$data['content']='masukadmin';
		$data['subcontent']='absensiguru';
		$data['footer']='footer';
		$str1=explode(" ",date('r'));
		$str2=explode("0",$str1[5]);
		if ($str2[1]==null) $dif=0;
		else $dif=$str2[1];
		$gmt=time()+($dif*60*60);
		$wib=$gmt+(7*60*60);
		$data['hari']=$this->inadate->indonesian_date($wib,'l','');
		$data['tgl']=$this->inadate->indonesian_date($wib,'j F Y','');
		$this->load->model('modeladmin');
		$data['guru']=$this->modeladmin->get('guru');
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);	
	}
	function viewabsensiguru($guruid){
		$data['header']='header';
		$data['content']='masukadmin';
		$data['subcontent']='viewabsensiguru';
		$data['footer']='footer';
		$str1=explode(" ",date('r'));
		$str2=explode("0",$str1[5]);
		if ($str2[1]==null) $dif=0;
		else $dif=$str2[1];
		$gmt=time()+($dif*60*60);
		$wib=$gmt+(7*60*60);
		$data['hari']=$this->inadate->indonesian_date($wib,'l','');
		$data['tgl']=$this->inadate->indonesian_date($wib,'j F Y','');
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->model('modeladmin');
		$data['guru']=$this->modeladmin->get_where($guruid,'guru');
		$this->load->view('mainview',$data);	
	}
	function ajaxabsensiguru(){
		$str1=explode(" ",date('r'));
		$str2=explode("0",$str1[5]);
		if ($str2[1]==null) $dif=0;
		else $dif=$str2[1];
		$gmt=time()+($dif*60*60);
		$wib=$gmt+(7*60*60);
		$data['hari']=$this->inadate->indonesian_date($wib,'l','');
		$data['tgl']=$this->inadate->indonesian_date($wib,'j F Y','');
		$this->load->model('modeladmin');
		$data['guru']=$this->modeladmin->get('guru');
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('absensiguru',$data);	
	}
	function simpanabsenguru(){
		$ket=$this->input->post('ket');
		$guruid=$this->input->post('id');
		$str1=explode(" ",date('r'));
		$str2=explode("0",$str1[5]);
		if ($str2[1]==null) $dif=0;
		else $dif=$str2[1];
		$gmt=time()+($dif*60*60);
		$wib=$gmt+(7*60*60);
		$hari=$this->inadate->indonesian_date($wib,'l','');
		$date=date('Y-m-d');
		$bln=date('m');
		$thn=date('Y');
		$data=array('guruid'=>$guruid,'date'=>$date,'hari'=>$hari,'ket'=>$ket,'bln'=>$bln,'thn'=>$thn);
		$this->load->model('modeladmin');
		$cek=$this->modeladmin->cekabsensiguru($date,$guruid);
		if($cek==1){
			$data['tipe']=$this->session->userdata('tipe');
			$data['header']='header';
			$data['content']='masukadmin';
			$data['subcontent']='gagal';
			$data['footer']='footer';
			$data['proses']='ABSENSI';
			$this->load->view('mainview',$data);
		}else{
			$insert=$this->modeladmin->insert($data,'absensiguru');
			if($insert==1){	
				$data['tipe']=$this->session->userdata('tipe');
				$data['header']='header';
				$data['content']='masukadmin';
				$data['subcontent']='sukses';
				$data['footer']='footer';
				$data['proses']='ABSENSI';
				$this->load->view('mainview',$data);
			}else{
				$data['tipe']=$this->session->userdata('tipe');
				$data['header']='header';
				$data['content']='masukadmin';
				$data['subcontent']='gagal';
				$data['footer']='footer';
				$data['proses']='ABSENSI';
				$this->load->view('mainview',$data);
			}
		}
	}
	function tabelguru(){
		$this->load->model('modeladmin');
		$thn=$this->input->post('thn');
		$bln=$this->input->post('bln');
		$search=array('1','2','3','4','5','6','7','8','9','10','11','12');
		$replace=array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
		$bulan=str_replace($search, $replace, $bln);
		$data['thn1']=$thn-1;
		$data['thn2']=$thn;
		$data['bulan']=$bulan;
		$data['guru']=$this->modeladmin->get('guru');
		$count=$this->modeladmin->count('guru');
		for($guruid=0; $guruid<=$count+1; $guruid++){
			$qsakit=$this->modeladmin->sakit($guruid,$bln,$thn,'absensiguru');	
			$qizin=$this->modeladmin->izin($guruid,$bln,$thn,'absensiguru');
			$qalpha=$this->modeladmin->alpha($guruid,$bln,$thn,'absensiguru');
			foreach ($qsakit as $row){$s[$guruid]=$row[0];}
			foreach ($qizin as $row){$i[$guruid]=$row[0];}
			foreach ($qalpha as $row){$a[$guruid]=$row[0];}
			$arrsakit[]=$s[$guruid];
			$arrizin[]=$i[$guruid];
			$arralpha[]=$a[$guruid];
		}
		$data['sakit']=$arrsakit;
		$data['izin']=$arrizin;
		$data['alpha']=$arralpha;
		$data['jsakit']=array_sum($arrsakit);
		$data['jizin']=array_sum($arrizin);
		$data['jalpha']=array_sum($arralpha);
		$this->load->view('tabelguru',$data);
	}
}
