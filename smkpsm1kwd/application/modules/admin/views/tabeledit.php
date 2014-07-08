<div class="thumbnail">
	<h4>
		FORM EDIT JADWAL PELAJARAN 
		HARI <font color="blue" style="text-transform: uppercase;"><b><?php echo $hari;?></b></font>&nbsp; KELAS <font color="blue"><?php echo $kelas?></font>
	</h4>
	<?php 
	$matpel=array();
	foreach ($jadwal as $data){
		$matpel[]=$data->matpel;
	}
	if(isset($matpel[0])){$matpel1=$matpel[0];} else{$matpel1='PAI';}
	if(isset($matpel[1])){$matpel2=$matpel[1];} else{$matpel2='PAI';}
	if(isset($matpel[2])){$matpel3=$matpel[2];} else{$matpel3='PAI';}
	if(isset($matpel[3])){$matpel4=$matpel[3];} else{$matpel4='PAI';}
	if(isset($matpel[4])){$matpel5=$matpel[4];} else{$matpel5='PAI';}
	if(isset($matpel[5])){$matpel6=$matpel[5];} else{$matpel6='PAI';}
	if(isset($matpel[6])){$matpel7=$matpel[6];} else{$matpel7='PAI';}
	if(isset($matpel[7])){$matpel8=$matpel[7];} else{$matpel8='PAI';}
	if(isset($matpel[8])){$matpel9=$matpel[8];} else{$matpel9='PAI';}
	if(isset($matpel[9])){$matpel10=$matpel[9];} else{$matpel10='PAI';}
	
	?>
	<?php echo form_open('admin/simpaneditjadwal',array('class'=>'form-horizontal'));?>
		<?php 
										$param1=array('class'=>'span6','name'=>'hari','value'=>$hari,'type'=>'hidden');
										echo form_input($param1);
									 
										$param2=array('class'=>'span6','name'=>'kelas','value'=>$kelas,'type'=>'hidden');
										echo form_input($param2);
									
									?>
		<div class="control-group">
			<label class="control-label">Jam Pelajaran ke-1</label>
			<div class="controls">
				<?php
				$satu=array(
				'PAI'=>'PAI',
				'PPKn'=>'PPKn',
				'BIN'=>'BIN',
				'OR'=>'OR',
				'SBK'=>'SBK',
				'MAT'=>'MAT',
				'BIG'=>'BIG',
				'IPA'=>'IPA',
				'KIMIA'=>'KIMIA',
				'FISIKA'=>'FISIKA',
				'IPS'=>'IPS',
				'KWU'=>'KWU',
				'KKPI'=>'KKPI',
				'MULOK'=>'MULOK',
				'PSM'=>'PSM',
				'PRO1'=>'PRO1',
				'PRO2'=>'PRO2',
				'PRO3'=>'PRO3',
				'PRO4'=>'PRO4',
				'PRO5'=>'PRO5',
				'PRO6'=>'PRO6',
				'Istirahat'=>'Istirahat'
				);
				echo form_dropdown('satu',$satu,$matpel1,'id="satu" class="span6"');
				?> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Jam Pelajaran ke-2</label>
			<div class="controls">
				<?php
				$dua=array(
				'PAI'=>'PAI',
				'PPKn'=>'PPKn',
				'BIN'=>'BIN',
				'OR'=>'OR',
				'SBK'=>'SBK',
				'MAT'=>'MAT',
				'BIG'=>'BIG',
				'IPA'=>'IPA',
				'KIMIA'=>'KIMIA',
				'FISIKA'=>'FISIKA',
				'IPS'=>'IPS',
				'KWU'=>'KWU',
				'KKPI'=>'KKPI',
				'MULOK'=>'MULOK',
				'PSM'=>'PSM',
				'PRO1'=>'PRO1',
				'PRO2'=>'PRO2',
				'PRO3'=>'PRO3',
				'PRO4'=>'PRO4',
				'PRO5'=>'PRO5',
				'PRO6'=>'PRO6',
				'Istirahat'=>'Istirahat'
				);
				echo form_dropdown('dua',$dua,$matpel2,'id="dua" class="span6"');
				?> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Jam Pelajaran ke-3</label>
			<div class="controls">
				<?php
				$tiga=array(
				'PAI'=>'PAI',
				'PPKn'=>'PPKn',
				'BIN'=>'BIN',
				'OR'=>'OR',
				'SBK'=>'SBK',
				'MAT'=>'MAT',
				'BIG'=>'BIG',
				'IPA'=>'IPA',
				'KIMIA'=>'KIMIA',
				'FISIKA'=>'FISIKA',
				'IPS'=>'IPS',
				'KWU'=>'KWU',
				'KKPI'=>'KKPI',
				'MULOK'=>'MULOK',
				'PSM'=>'PSM',
				'PRO1'=>'PRO1',
				'PRO2'=>'PRO2',
				'PRO3'=>'PRO3',
				'PRO4'=>'PRO4',
				'PRO5'=>'PRO5',
				'PRO6'=>'PRO6',
				'Istirahat'=>'Istirahat'
				);
				echo form_dropdown('tiga',$tiga,$matpel3,'id="tiga" class="span6"');
				?> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Jam Pelajaran ke-4</label>
			<div class="controls">
				<?php
				$empat=array(
				'PAI'=>'PAI',
				'PPKn'=>'PPKn',
				'BIN'=>'BIN',
				'OR'=>'OR',
				'SBK'=>'SBK',
				'MAT'=>'MAT',
				'BIG'=>'BIG',
				'IPA'=>'IPA',
				'KIMIA'=>'KIMIA',
				'FISIKA'=>'FISIKA',
				'IPS'=>'IPS',
				'KWU'=>'KWU',
				'KKPI'=>'KKPI',
				'MULOK'=>'MULOK',
				'PSM'=>'PSM',
				'PRO1'=>'PRO1',
				'PRO2'=>'PRO2',
				'PRO3'=>'PRO3',
				'PRO4'=>'PRO4',
				'PRO5'=>'PRO5',
				'PRO6'=>'PRO6',
				'Istirahat'=>'Istirahat'
				);
				echo form_dropdown('empat',$empat,$matpel4,'id="empat" class="span6"');
				?> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Jam Pelajaran ke-5</label>
			<div class="controls">
				<?php
				$lima=array(
				'PAI'=>'PAI',
				'PPKn'=>'PPKn',
				'BIN'=>'BIN',
				'OR'=>'OR',
				'SBK'=>'SBK',
				'MAT'=>'MAT',
				'BIG'=>'BIG',
				'IPA'=>'IPA',
				'KIMIA'=>'KIMIA',
				'FISIKA'=>'FISIKA',
				'IPS'=>'IPS',
				'KWU'=>'KWU',
				'KKPI'=>'KKPI',
				'MULOK'=>'MULOK',
				'PSM'=>'PSM',
				'PRO1'=>'PRO1',
				'PRO2'=>'PRO2',
				'PRO3'=>'PRO3',
				'PRO4'=>'PRO4',
				'PRO5'=>'PRO5',
				'PRO6'=>'PRO6',
				'Istirahat'=>'Istirahat'
				);
				echo form_dropdown('lima',$lima,$matpel5,'id="lima" class="span6"');
				?> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Jam Pelajaran ke-6</label>
			<div class="controls">
				<?php
				$enam=array(
				'PAI'=>'PAI',
				'PPKn'=>'PPKn',
				'BIN'=>'BIN',
				'OR'=>'OR',
				'SBK'=>'SBK',
				'MAT'=>'MAT',
				'BIG'=>'BIG',
				'IPA'=>'IPA',
				'KIMIA'=>'KIMIA',
				'FISIKA'=>'FISIKA',
				'IPS'=>'IPS',
				'KWU'=>'KWU',
				'KKPI'=>'KKPI',
				'MULOK'=>'MULOK',
				'PSM'=>'PSM',
				'PRO1'=>'PRO1',
				'PRO2'=>'PRO2',
				'PRO3'=>'PRO3',
				'PRO4'=>'PRO4',
				'PRO5'=>'PRO5',
				'PRO6'=>'PRO6',
				'Istirahat'=>'Istirahat'
				);
				echo form_dropdown('enam',$enam,$matpel6,'id="enam" class="span6"');
				?> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Jam Pelajaran ke-7</label>
			<div class="controls">
				<?php
				$tujuh=array(
				'PAI'=>'PAI',
				'PPKn'=>'PPKn',
				'BIN'=>'BIN',
				'OR'=>'OR',
				'SBK'=>'SBK',
				'MAT'=>'MAT',
				'BIG'=>'BIG',
				'IPA'=>'IPA',
				'KIMIA'=>'KIMIA',
				'FISIKA'=>'FISIKA',
				'IPS'=>'IPS',
				'KWU'=>'KWU',
				'KKPI'=>'KKPI',
				'MULOK'=>'MULOK',
				'PSM'=>'PSM',
				'PRO1'=>'PRO1',
				'PRO2'=>'PRO2',
				'PRO3'=>'PRO3',
				'PRO4'=>'PRO4',
				'PRO5'=>'PRO5',
				'PRO6'=>'PRO6',
				'Istirahat'=>'Istirahat'
				);
				echo form_dropdown('tujuh',$tujuh,$matpel7,'id="tujuh" class="span6"');
				?> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Jam Pelajaran ke-8</label>
			<div class="controls">
				<?php
				$delapan=array(
				'PAI'=>'PAI',
				'PPKn'=>'PPKn',
				'BIN'=>'BIN',
				'OR'=>'OR',
				'SBK'=>'SBK',
				'MAT'=>'MAT',
				'BIG'=>'BIG',
				'IPA'=>'IPA',
				'KIMIA'=>'KIMIA',
				'FISIKA'=>'FISIKA',
				'IPS'=>'IPS',
				'KWU'=>'KWU',
				'KKPI'=>'KKPI',
				'MULOK'=>'MULOK',
				'PSM'=>'PSM',
				'PRO1'=>'PRO1',
				'PRO2'=>'PRO2',
				'PRO3'=>'PRO3',
				'PRO4'=>'PRO4',
				'PRO5'=>'PRO5',
				'PRO6'=>'PRO6',
				'Istirahat'=>'Istirahat'
				);
				echo form_dropdown('delapan',$delapan,$matpel8,'id="delapan" class="span6"');
				?> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Jam Pelajaran ke-9</label>
			<div class="controls">
				<?php
				$sembilan=array(
				'PAI'=>'PAI',
				'PPKn'=>'PPKn',
				'BIN'=>'BIN',
				'OR'=>'OR',
				'SBK'=>'SBK',
				'MAT'=>'MAT',
				'BIG'=>'BIG',
				'IPA'=>'IPA',
				'KIMIA'=>'KIMIA',
				'FISIKA'=>'FISIKA',
				'IPS'=>'IPS',
				'KWU'=>'KWU',
				'KKPI'=>'KKPI',
				'MULOK'=>'MULOK',
				'PSM'=>'PSM',
				'PRO1'=>'PRO1',
				'PRO2'=>'PRO2',
				'PRO3'=>'PRO3',
				'PRO4'=>'PRO4',
				'PRO5'=>'PRO5',
				'PRO6'=>'PRO6',
				'Istirahat'=>'Istirahat'
				);
				echo form_dropdown('sembilan',$sembilan,$matpel9,'id="sembilan" class="span6"');
				?> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Jam Pelajaran ke-10</label>
			<div class="controls">
				<?php
				$sepuluh=array(
				'PAI'=>'PAI',
				'PPKn'=>'PPKn',
				'BIN'=>'BIN',
				'OR'=>'OR',
				'SBK'=>'SBK',
				'MAT'=>'MAT',
				'BIG'=>'BIG',
				'IPA'=>'IPA',
				'KIMIA'=>'KIMIA',
				'FISIKA'=>'FISIKA',
				'IPS'=>'IPS',
				'KWU'=>'KWU',
				'KKPI'=>'KKPI',
				'MULOK'=>'MULOK',
				'PSM'=>'PSM',
				'PRO1'=>'PRO1',
				'PRO2'=>'PRO2',
				'PRO3'=>'PRO3',
				'PRO4'=>'PRO4',
				'PRO5'=>'PRO5',
				'PRO6'=>'PRO6',
				'Istirahat'=>'Istirahat'
				);
				echo form_dropdown('sepuluh',$sepuluh,$matpel10,'id="sepuluh" class="span6"');
				?> 
			</div>
		</div>		
		
		<hr />						
		<?php echo form_submit('submit','UPDATE','class="btn btn-primary"')?>			
		</form>
	<?php echo form_close();?>
</div>
