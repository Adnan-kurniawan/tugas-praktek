<?php
$hari = date("d");
$bulan = date("m");
$tahun = date("Y");
$jumlahhari = date("d",mktime(0,0,0,$bulan,$hari,$tahun));

?>
<br><br>
<?php
switch ($bulan) {
	case 1: $nmbulan = "Jan";
		break;
	case 2: $nmbulan = "Feb";
		break;
	case 3: $nmbulan = "mar";
		break;
	case 4: $nmbulan = "Apr";
		break;
	case 5: $nmbulan = "Mei";
		break;
	case 6: $nmbulan = "Jun";
		break;
	case 7: $nmbulan = "Jul";
		break;
	case 8: $nmbulan = "Agu";
		break;
	case 9: $nmbulan = "Sep";
		break;
	case 10: $nmbulan = "Okt";
		break;
	case 11: $nmbulan = "Nov";
		break;
	case 12: $nmbulan = "Des";
		break;
}
echo "<Left><h1>$nmbulan $tahun </h1></left>";
?>
<br>
<table style="border: 2px solid #1E90FF" align="Left" cellpadding="10">
	<tr bgcolor="#ADD8E6">
		<td align="center"><font color="#FF0000"></font>Min</td>
		<td align="center">Sen</td>
		<td align="center">Sel</td>
		<td align="center">rab</td>
		<td align="center">Kam</td>
		<td align="center">Jum</td>
		<td align="center">Sab</td>
	</tr>
<?php
$s=date("w", mktime( 0,0,0,$bulan,1,$tahun));
for ($ds=1; $ds<=$s ; $ds++) { 
	echo "<td></td>";
}

for ($d=1; $d<=$jumlahhari ; $d++) { 
	if (date("l",mktime(0,0,0,$bulan,$d,$tahun))== "sunday") {
	$warna="FF0000";
	}
echo "<td align=center valign=middle><span style=\"color:#FF0000\">$d</span></td>";
if (date("w",mktime(0,0,0,$bulan,$d,$tahun)) == 6) {
	echo "</tr>";
}
}
echo "</table>";
?>