<?php
echo "<head><title>My tugas</head></title>";
echo "<h1 align=center>Formulir Pendaftaran Kartu Tanda Mahasiswa</h1>";
echo "<table align=center border=2 width=45%>";
echo "<tr><td>Nama Lengkap  : ";
echo $_POST['nama'];
echo "</td></tr>";
echo "<tr><td>NIM           : ";
echo $_POST['nim'];
echo "</td></tr>"; 
echo "<tr><td>Tempat Lahir  : ";
echo $_POST['tempat'];
echo "</td></tr>";
echo "<tr><td>Tanggal Lahir : ";
echo $_POST['lahir'];
echo "<td></tr>";
echo "<tr><td>Alamat        : ";
echo $_POST['alamat'];
echo "</td></tr>";
echo "<tr><td>Email         : ";
echo $_POST['email'];
echo "</td></tr>";
echo "<tr><td>Prodi         : ";
echo $_POST['prodi'];
echo "</td></tr>";
echo "<tr><td>Fakultas      : ";
echo $_POST['fakultas'];
echo "</td></tr>";
echo "</table>";
echo "<align=center><a href=index_tampilan.html> Klik Disini </a>Isi Form Fendaftaran";


?>