<?php 
$fp = fopen("daftarhadir.txt", "r");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data kehadiran</title>
    <link rel="stylesheet" type="text/css" href="styleform.css">
</head>
<body>
    <h1 align="center">Data Kehadiran</h1>
    <div align="center"><strong><a href="index.php">Isi Daftar hadir</a></strong></div>
    <hr>
    <table border="1" width="80%" style="margin: 0 auto; background-color: #F5F5F5;">
        <thead>
            <tr align="center">
                <td>Tanggal</td>
                <td>Nama</td>
                <td>Email</td>
                <td>Alamat</td>
                <td>Status</td>
                <td>Komentar</td>
            </tr>
        </thead>
        <tbody>
            <?php while ($isi = fgets($fp)): ?>
                <?php $data = explode('|', $isi) ?>
                <tr>
                    <td><?php echo $data[0] ?></td>
                    <td><?php echo $data[1] ?></td>
                    <td><?php echo $data[2] ?></td>
                    <td><?php echo $data[3] ?></td>
                    <td><?php echo $data[4] ?></td>
                    <td><?php echo $data[5] ?></td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>

</body>
</html>


    
    
    
    
    



