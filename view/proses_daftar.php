<?php
// Load file koneksi.php
include "../db/connection.php";

$id = $_GET["id"];

$nama=$_POST['nama'];
$email=$_POST['email'];
$no_tlp=$_POST['no_tlp'];
$alamat=$_POST['alamat'];
$tgl = date('d');
$bln = date('M');


// Ambil Data yang Dikirim dari Form
$fotoktp = $_FILES['ktp']['name'];
	$ukuran_file = $_FILES['ktp']['size'];
	$tipe_file = $_FILES['ktp']['type'];
	$tmp_file = $_FILES['ktp']['tmp_name'];
	$simpan = "../img/upload/".$fotoktp;

$fotokk = $_FILES['kk']['name'];
	$ukuran_file = $_FILES['kk']['size'];
	$tipe_file = $_FILES['kk']['type'];
	$tmp_file = $_FILES['kk']['tmp_name'];
	$simpan = "../img/upload/".$fotokk;

$foto_pengajuan = $_FILES['pengajuan']['name'];
	$ukuran_file = $_FILES['pengajuan']['size'];
	$tipe_file = $_FILES['pengajuan']['type'];
	$tmp_file = $_FILES['pengajuan']['tmp_name'];
	$simpan = "../img/upload/".$foto_pengajuan;
 // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
	// Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
	if($ukuran_file <= 10000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
		// Jika ukuran file kurang dari sama dengan 1MB, lakukan :
		// Proses upload
		if(move_uploaded_file($tmp_file, $simpan)){ // Cek apakah gambar berhasil diupload atau tidak
			// Jika gambar berhasil diupload, Lakukan :	
			// Proses simpan ke Database
			$query = "INSERT INTO pendaftar(id_loker,nama,email,no_tlp,alamat,ktp,kk,pengajuan,tgl,bln) VALUES('".$id."','".$nama."','".$email."','".$no_tlp."','".$alamat."','".$fotoktp."','".$fotokk."','".$foto_pengajuan."','".$tgl."','".$bln."')";

			$sql = mysqli_query($connection, $query); // Eksekusi/ Jalankan query dari variabel $query
			
			if($sql){ // Cek jika proses simpan ke database sukses atau tidak
				// Jika Sukses, Lakukan :
				?>


				<script type="text/javascript">
 					
 					alert ("Anda Berhasil Mendaftar");
 					window.location.href="tambah.php?id=<?php echo $id ?>";

 				</script><?php// Redirectke halaman index.php
			}else{
				// Jika Gagal, Lakukan :
				?><script type="text/javascript">
 					
 					alert ("Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.");
 					window.location.href="mendaftar.php";
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
 					window.location.href="mendaftar.php";
 				</script><?php
	}
?>
