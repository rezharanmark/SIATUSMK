<h5>
JADWAL PELAJARAN <font color="blue">SMK PSM 1 KAWEDANAN</font> &nbsp; HARI <font color="blue" style="text-transform: uppercase;"><b><?php echo $hari;?></b></font>&nbsp; KELAS <font color="blue"><?php echo $kelas?></font>
</h5>
<table class="siswa" align="center">
	<tbody>
		<tr>
			<th align="center">Jam Pelajaran</th>
			<th align="center">&nbsp;</th>
			<th align="center">Mata Pelajaran</th>
		</tr>
		<?php 
			$no=1; 
			foreach ($jadwal as $data){
			$bagi=$no%2;
			if($bagi==0){$warna="#E1E1E1";}
			else {$warna="#EEEEEE";}
		?> 
		<tr class="<?php echo $bagi;?>" bgcolor="<?php echo $warna;?>">
			<td align="center"><?php echo $data->jam;?></td>
			<td align="center">&nbsp;</td>
			<td align="center"><?php echo $data->matpel;?></td>
		</tr>
		<?php 
			$no++;
		}
		?>
	</tbody>
</table>


