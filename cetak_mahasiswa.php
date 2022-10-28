<html>
<head>
	<title>Tampil Data Mahasiswa</title>
</head>
<body>
<table cellpadding="2" cellspacing="0" border="1" align="center">
 <thead>
            <th>No                      : 085730318783</th>
            <th>NIM                     : 2041720139</th>
            <th>Nama                    : Dwi Maria Ulfa </th>
            <th>Jurusan                 : Teknik Informatika </th>
            <th>Tempat/Tanggal Lahir    : Malang 17 oktober 2002 </th>
            <th>Alamat                  : Malang , Precet Sumbersuko Kec.Wagir </th>
</thead>
<tbody>
<?php
include ('koneksi.php');
//*********** Perintah menampilkan data mahasiswa ***********//
$sql=mysql_query("select * from tb_mahasiswa,tb_jurusan where tb_mahasiswa.id_jurusan=tb_jurusan.id_jurusan order by id_mahasiswa ASC");
      $no=1;
      while ($row=mysql_fetch_array($sql)){
       echo "
         <tr>
                 <td>".$no."</td>
                 <td width='150'>".$row['npm']."</td>
	<td width='150'>".$row['nama_mahasiswa']."</td>
	<td width='150'>".$row['nama_jurusan']."</td>
	<td width='150'>".$row['tempat_lahir'].",".$row['tanggal_lahir']."</td>
	<td width='150'>".$row['alamat']."</td>
         </tr>";
      $no++;
     };
 ?>
</tbody>
</table>
</body>
</html>