<?php
// Load file koneksi.php
include "../db/connection.php";

$nm_perusahaan=$_POST['nm_usaha'];
$jenis_usaha=$_POST['jenis_usaha'];
$syarat=$_POST['syarat'];
$alamat=$_POST['alamat'];
$daftar = $_POST['daftar'];
$tgl = date('d');
$bln = date('M');

// Ambil Data yang Dikirim dari Form
$foto = $_FILES['foto']['name'];
$ukuran_file = $_FILES['foto']['size'];
$tipe_file = $_FILES['foto']['type'];
$tmp_file = $_FILES['foto']['tmp_name'];

// Set path folder tempat menyimpan gambarnya
$path = "../img/upload/".$foto;
 // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
	// Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
	if($ukuran_file <= 10000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
		// Jika ukuran file kurang dari sama dengan 1MB, lakukan :
		// Proses upload
		if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
			// Jika gambar berhasil diupload, Lakukan :	
			// Proses simpan ke Database
			$query = "INSERT INTO loker(nm_perusahaan,jenis_usaha,syarat,alamat,foto,tgl,bln,pendaftar) VALUES('".$nm_perusahaan."','".$jenis_usaha."','".$syarat."','".$alamat."','".$foto."','".$tgl."','".$bln."','".$daftar."')";
			$sql = mysqli_query($connection, $query); // Eksekusi/ Jalankan query dari variabel $query
			
			if($sql){ // Cek jika proses simpan ke database sukses atau tidak
				// Jika Sukses, Lakukan :
				?><script type="text/javascript">
 					
 					alert ("Anda Berhasil Menambahkan Loker");
 					window.location.href="loker.php";

 				</script><?php// Redirectke halaman index.php
			}else{
				// Jika Gagal, Lakukan :
				?><script type="text/javascript">
 					
 					alert ("Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.");
 					window.location.href="loker.php";
 				</script><?php
			}
		}else{
			// Jika gambar gagal diupload, Lakukan :
			?><script type="text/javascript">
 					
 					alert ("Maaf, Foto Gagal Diupload.");
 					window.location.href="loker.php";
 				</script><?php
		}
	}else{
		// Jika ukuran file lebih dari 1MB, lakukan :
		?><script type="text/javascript">
 					
 					alert ("Maaf, Foto Yang Diupload Terlau Besar.");
 					window.location.href="dapes.php";
 				</script><?php
	}
?>
