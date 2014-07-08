<div class="thumbnail">
	<h4>
		FORM INPUT JADWAL PELAJARAN 
		HARI <font color="blue" style="text-transform: uppercase;"><b><?php echo $hari;?></b></font>&nbsp; KELAS <font color="blue"><?php echo $kelas?></font>
	</h4>
	<?php echo form_open('admin/simpaninputjadwal',array('class'=>'form-horizontal'));?>
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
				echo form_dropdown('satu',$satu,'id="satu" class="span6"');
				?> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Jam Pelajaran ke-2</label>
			<div class="controls">
				<?php
				$dua=array('PAI'=>'PAI',
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
				echo form_dropdown('dua',$dua,'id="dua" class="span6"');
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
				echo form_dropdown('tiga',$tiga,'id="tiga" class="span6"');
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
				echo form_dropdown('empat',$empat,'id="empat" class="span6"');
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
				echo form_dropdown('lima',$lima,'id="lima" class="span6"');
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
				echo form_dropdown('enam',$enam,'id="enam" class="span6"');
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
				echo form_dropdown('tujuh',$tujuh,'id="tujuh" class="span6"');
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
				echo form_dropdown('delapan',$delapan,'id="delapan" class="span6"');
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
				echo form_dropdown('sembilan',$sembilan,'id="sembilan" class="span6"');
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
				echo form_dropdown('sepuluh',$sepuluh,'id="sepuluh" class="span6"');
				?> 
			</div>
		</div>		
		
		<hr />						
		<?php echo form_submit('submit','SIMPAN','class="btn btn-primary"')?>			
		</form>
	<?php echo form_close()?>
</div>
