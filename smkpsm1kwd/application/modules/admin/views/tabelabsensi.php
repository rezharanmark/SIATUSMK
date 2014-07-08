<center>
	<h5>REKAP ABSENSI SISWA SMK PSM 1 KAWEDANAN<!--&nbsp; TAHUN PELAJARAN <font color="blue" id="thnajar"><?php //echo $thn1.'/'.$thn2?></font>--> &nbsp; BULAN: <font color="blue" id="blnlap"><?php echo $bulan?></font> <font color="blue" id="thnlap"><?php echo $thn1?></font></h5>
</center>
<table class="siswa" align="center">
	<tbody>
		<tr>
			<th align="center" rowspan="2">NO</th>
			<th align="center" rowspan="2">KELAS</th>
			<th align="center" colspan="3">Jenis Kelamin</th>
			<th align="center" colspan="3">JUMLAH</th>
		</tr>
		<tr>
			<th align="center">L</th>
			<th align="center">P</th>
			<th align="center">Jumlah</th>
			<th align="center">S</th>
			<th align="center">I</th>
			<th align="center">A</th>
		</tr>
		<?php 
			for($no=1; $no<=18; $no++){
				$bagi=$no%2;
				if($bagi==0)$warna="#E1E1E1";
				else $warna="#EEEEEE";
				$gender[$no]=$L[$no]+$P[$no];
		?> 
		<tr class="<?php echo $bagi;?>" bgcolor="<?php echo $warna;?>">
			<td align="center"><?php echo $no;?>.</td>
			<td align="center"><?php echo $kelas[$no];?></td>
			<td align="center"><?php echo $L[$no];?></td>
			<td align="center"><?php echo $P[$no];?></td>
			<td align="center"><?php echo $gender[$no];?></td>
			<td align="center"><?php echo $sakit[$no];?></td>
			<td align="center"><?php echo $izin[$no];?></td>
			<td align="center"><?php echo $alpha[$no];?></td>
		</tr>
		<?php }?>
		<tr>
			<td bgcolor="grey" style="color:white; font-weight:bold;" align="center" colspan="2">JUMLAH</td>
			<td bgcolor="grey" style="color:white; font-weight:bold;" align="center"><?php echo $L[1]+$L[2]+$L[3]+$L[4]+$L[5]+$L[6]+$L[7]+$L[8]+$L[9]+$L[10]+$L[11]+$L[12]+$L[13]+$L[14]+$L[15]+$L[16]+$L[17]+$L[18];?></td>
			<td bgcolor="grey" style="color:white; font-weight:bold;" align="center"><?php echo $P[1]+$P[2]+$P[3]+$P[4]+$P[5]+$P[6]+$P[7]+$P[8]+$P[9]+$P[10]+$P[11]+$P[12]+$P[13]+$P[14]+$P[15]+$P[16]+$P[17]+$P[18];?></td>
			<td bgcolor="grey" style="color:white; font-weight:bold;" align="center"><?php echo $gender[1]+$gender[2]+$gender[3]+$gender[4]+$gender[5]+$gender[6]+$gender[7]+$gender[8]+$gender[9]+$gender[10]+$gender[11]+$gender[12]+$gender[13]+$gender[14]+$gender[15]+$gender[16]+$gender[17]+$gender[18];?></td>
			<td bgcolor="grey" style="color:white; font-weight:bold;" align="center"><?php echo $sakit[1]+$sakit[2]+$sakit[3]+$sakit[4]+$sakit[5]+$sakit[6]+$sakit[7]+$sakit[8]+$sakit[9]+$sakit[10]+$sakit[11]+$sakit[12]+$sakit[13]+$sakit[14]+$sakit[15]+$sakit[16]+$sakit[17]+$sakit[18];?></td>
			<td bgcolor="grey" style="color:white; font-weight:bold;" align="center"><?php echo $izin[1]+$izin[2]+$izin[3]+$izin[4]+$izin[5]+$izin[6]+$izin[7]+$izin[8]+$izin[9]+$izin[10]+$izin[11]+$izin[12]+$izin[13]+$izin[14]+$izin[15]+$izin[16]+$izin[17]+$izin[18];?></td>
			<td bgcolor="grey" style="color:white; font-weight:bold;" align="center"><?php echo $alpha[1]+$alpha[2]+$alpha[3]+$alpha[4]+$alpha[5]+$alpha[6]+$alpha[7]+$alpha[8]+$alpha[9]+$alpha[10]+$alpha[11]+$alpha[12]+$alpha[13]+$alpha[14]+$alpha[15]+$alpha[16]+$alpha[17]+$alpha[18];?></td>
		</tr>
	</tbody>
</table>
	

