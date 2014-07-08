<div class="container">
<div class="row">
	<div class="span1"></div>
	<div class="span4">
		<div class="well well-small">
			<table align="center">
			<tr>
				<td><b>NIS</b></td>
				<td><b>:</b></td>
				<td><?php if(isset($nis)) echo $nis;?></td>
			</tr>
			<tr>
				<td><b>Nama</b></td>
				<td><b>:</b></td>
				<td><?php if(isset($nama)) echo $nama;?></td>
			</tr>
			<tr>
				<td><b>Kelas</b></td>
				<td><b>:</b></td>
				<td><?php if(isset($kelas)) echo $kelas;?></td>
			</tr>
		</table>
		</div>
	</div>
	<div class="span6">
			<div class="well well-small">
				<h5>KETERANGAN</h5>
				<i class="icon-black icon-remove"></i>  <font color="green"><b>RATA-RATA</b></font> berwarna <font color="red"><b>merah</b></font> artinya Anda harus mengikuti <b>REMIDI</b>
				<br />
				<i class="icon-black icon-ok"></i> <font color="green"><b>RATA-RATA</b></font> berwarna <font color="blue"><b>biru</b></font> artinya Anda tidak perlu mengikuti <b>REMIDI</b>
				</p>
			</div>
	</div>
</div>
<div class="row">
	<div class="span12"> 
		<table align="center" border="1">
			<tr>
				<th align="center" rowspan="2">NO.</th>
				<th align="center" rowspan="2">MATPEL</th>
				<th align="center" rowspan="2">KKM</th>
				<th align="center" colspan="3">MID 1</th>
				<th align="center" colspan="3">SEMESTER 1</th>
				<th align="center" colspan="3">MID 2</th>
				<th align="center" colspan="3">SEMESTER 2</th>
				<th align="center" rowspan="2">TOTAL</th>
				<th align="center" rowspan="2"><font color="green">RATA-RATA</font></th>
				<th align="center" rowspan="2">PREDIKAT</th>
			</tr>
			<tr>
				<th align="center">PR</th>
				<th align="center">Tugas</th>
				<th align="center">Ujian</th>
				<th align="center">PR</th>
				<th align="center">Tugas</th>
				<th align="center">Ujian</th>
				<th align="center">PR</th>
				<th align="center">Tugas</th>
				<th align="center">Ujian</th>
				<th align="center">PR</th>
				<th align="center">Tugas</th>
				<th align="center">Ujian</th>
			</tr>
			<?php 
			for($no=1; $no<=21; $no++){
				$bagi=$no%2;
				if($bagi==0)$warna="#E1E1E1"; else $warna="#EEEEEE";
				$kkm=$this->config->item('kkm');
				if($rataan[$no]>=$kkm)$status="biru"; else $status="merah";
			?>
			<tr class="<?php echo $bagi;?>" bgcolor="<?php echo $warna;?>">
				<td align="center"><?php echo $no;?>.</td>
				<td align="center"><?php echo $matpel[$no];?></td>
				<td align="center"><b><?php echo $kkm;?></b></td>
				<td align="center"><?php echo $mid1pr[$no];?></td>
				<td align="center"><?php echo $mid1tugas[$no];?></td>
				<td align="center"><?php echo $mid1ujian[$no];?></td>
				<td align="center"><?php echo $sem1pr[$no];?></td>
				<td align="center"><?php echo $sem1tugas[$no];?></td>
				<td align="center"><?php echo $sem1ujian[$no];?></td>
				<td align="center"><?php echo $mid2pr[$no];?></td>
				<td align="center"><?php echo $mid2tugas[$no];?></td>
				<td align="center"><?php echo $mid2ujian[$no];?></td>
				<td align="center"><?php echo $sem2pr[$no];?></td>
				<td align="center"><?php echo $sem2tugas[$no];?></td>
				<td align="center"><?php echo $sem2ujian[$no];?></td>
				<td align="center"><?php echo $jumlah[$no];?></td>
				<td align="center" class="<?php echo $status;?>"><?php echo $rataan[$no];?></td>
				<td align="center"><?php echo $predikat[$no];?></td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
</div>
	

