<!Doctype html>

 <html>
 <head>
     <meta charset="utf-8">
    <title>admin</title>
    <link rel="stylesheet" href="css/admin.css">
 </head>
 <body>
      <div class="container">
         <div class="kotak">
            <h3>ABSENSI MAHASISWA PKL KOMINFO</h3> 
         </div>
         <div class="main">
            <div class="menu">
               <ul>
                  <li>
                     <?php
                        date_default_timezone_set('Asia/Jakarta');
                        echo date('d-m-Y H:i:s');
                     ?>   
                  </li>
                     <li><a href="mahasiswa/tambah_mhs.php">Tambah Mahasiswa</a></li>
                     <li><a href="mahasiswa/daftar_mhs.php">Daftar Mahasiswa</a></li>
                     <li><a href="absen.php">Absen</a></li>
                     <li><a href="lihat_absen.php">Lihat Absen</a></li>
                     <li><a href="catata.php">Catatan</a></li>
                     <li><a href="lihat_catatan.php">Lihat Catatan</a></li>
                     <li><a href="ubah_pwd.php">Ubah Password</a></li>
                     <li><a href="keluar.php">Keluar</a></li>
               </ul>
            </div>
         </div>
         
      </div>
 </body>
 </html>