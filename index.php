<html>
	<head>
		<title>Responsi Pweb-Uas </title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" type="text/css" href="styleform.css">
	</head>

	<body>
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
<table style="border: 2px solid #1E90FF" align="Left" cellpadding="10" bgcolor="#ffffff">
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

<!--Input Output !--->

		<div align="center"><strong><font size="6" face="Courier New, Courier, mono">Form kehadiran</font></strong></div>
			<form name="form1" method="post" action="Barproses.php">
				<table width="58%" border="0" align="center">
					<tr>
						<td>Nama Lengkap</td>
						<td><input name="nama" type="text" id="nama"></td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><input name="alamat" type="text" id="alamat"></td>
					</tr>

					<tr>
						<td>email</td>
						<td><input name="email" type="text" id="email"></td> </tr>
					</tr>

					<tr>
						<td>Status</td>
						<td>
							<select name="status" id="status">
								<option>Hadir</option>
								<option>Mboten Rawuh</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Komentar</td>
						<td><textarea name="komentar" id="komentar"></textarea></td> </textarea>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
					</td>
					</tr>
				</table>
			</form>
		<div align="center"><strong><a href="lihat.php" style="font-family: cursive; lighting-color: brown;">Daftar Hadir</a></strong></div>

<!--KalKulator !--->
<style type="text/css">
  .tombol{
   background-color: deepskyblue;
  }
  .tabel{
   background-color: gold;
   margin: 10px;
   padding: 10px;
  }
 </style>

 <form name="calculator">
  
  <table style="background-color:#ffffff " class="tabel">
   <tr>
    <td>Angka 1</td><td>:</td><td><input type="number" name="angka1"></td>
   </tr>
   <tr>
    <td>Angka 2</td><td>:</td><td><input type="number" name="angka2"></td>
   </tr>
   <tr>
    <td>Hasil</td><td>:</td><td><input type="number" name="hasil"></td>
   </tr>
   <tr>
    <td colspan="3" align="center">
     <input class="tombol" type="button" onclick="tambah()" value="+">
     <input class="tombol" type="button" onclick="kurang()" value="-">
     <input class="tombol" type="button" onclick="kali()" value="*">
     <input class="tombol" type="button" onclick="bagi()" value="/">
    </td>
 		  </tr>
  	</table>
 	</form>

<script type="text/javascript">
function tambah(){
 var angka1=parseFloat(document.calculator.angka1.value);
 var angka2=parseFloat(document.calculator.angka2.value);
 var hasil= angka1+angka2;
 document.calculator.hasil.value=hasil;
}
function kurang(){
 var angka1=parseFloat(document.calculator.angka1.value);
 var angka2=parseFloat(document.calculator.angka2.value);
 var hasil= angka1-angka2;
 document.calculator.hasil.value=hasil;
}
function kali(){
 var angka1=parseFloat(document.calculator.angka1.value);
 var angka2=parseFloat(document.calculator.angka2.value);
 var hasil= angka1*angka2;
 document.calculator.hasil.value=hasil;
}
function bagi(){
 var angka1=parseFloat(document.calculator.angka1.value);
 var angka2=parseFloat(document.calculator.angka2.value);
 var hasil= angka1/angka2;
 document.calculator.hasil.value=hasil;
}
</script>
	</body>
</html>