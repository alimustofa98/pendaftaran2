<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
if (isset($_POST['kirim'])) {
  $nama_lengkap = $_POST["nama_lengkap"];
  $asal_sekolah = $_POST["asal_sekolah"];
  $alamat = $_POST["alamat"];
  $tanggal_lahir = $_POST["tanggal_lahir"];
  $jenis_kelamin = $_POST["jenis_kelamin"];
  $no_telpon = $_POST["no_telpon"];
  $email = $_POST["email"];
  $kota = $_POST["kota"];
  //$password=md5($_POST["password"]); //untuk password digunakan enskripsi md5


  //Query input menginput data kedalam tabel anggota
  //$sql = "insert into pendaftaran2 (nama_lengkap,alamat,tanggal_lahir,jenis_kelamin,no_telpon,email,kota) values
  //('$nama_lengkap','$alamat','$tanggal_lahir','$jenis_kelamin','$no_telpon','$email','$kota')";
  $simpan = "insert into pendaftaran2 (nama_lengkap,asal_sekolah,alamat,tanggal_lahir,jenis_kelamin,no_telpon,email,kota) values
		('$nama_lengkap','$asal_sekolah','$alamat','$tanggal_lahir','$jenis_kelamin','$no_telpon','$email','$kota')";


  //echo $sql;

  //Mengeksekusi/menjalankan query diatas	
  //$hasil = mysqli_query($kon, $sql);
  $result = mysqli_query($conn, $simpan);

  //Kondisi apakah berhasil atau tidak
  //if ($hasil) {
  //echo "Berhasil simpan data anggota";
  //exit;
  if ($result) {
    echo "<script>alert('Data Telah Terkirim');window,location='index.php'</script>";
  }
}

//} else {
  //  echo "Gagal simpan data anggota";
    //exit;
