<?php

/******************************************
PRAKTIKUM RPL
******************************************/

include("conf.php");
include("includes/Template.class.php");
include("includes/DB.class.php");
include("includes/Task.class.php");

// Membuat objek dari kelas task
$otask = new Task($db_host, $db_user, $db_password, $db_name);
$otask->open();


if(isset($_POST['add'])){
	$nama = $_POST['nama'];
	$id = $_POST['id'];
	$plugtype = $_POST['plugtype'];
	$jenis = $_POST['jenis'];
	$toko = $_POST['toko'];
	$status = "Belum Terdaftar";

	$otask->insertTask($nama, $id, $plugtype, $toko, $jenis, $status);

	header('Location: index.php');
}
if(isset($_GET['id_hapus'])){
	$id = $_GET['id_hapus'];
	$otask->delete($id);

  header('Location: index.php');
}

// update status data mahasiswa
if(isset($_GET['id_status'])){
	$id = $_GET['id_status'];
	$otask->update($id);

	header('Location: index.php');
}
// Memanggil method getTask di kelas Task
$otask->getTask();

// Proses mengisi tabel dengan data
$data = null;
$no = 1;

while (list($id, $nama, $plugtype, $jenis, $toko, $status) = $otask->getResult()) {
	// Tampilan jika status sudah terdaftar
	if($status == "Sudah Terdaftar"){
		$data .= "<tr>
		<td>" . $no . "</td>
		<td>" . $id . "</td>
		<td>" . $nama . "</td>
		<td>" . $plugtype . "</td>
		<td>" . $jenis . "</td>
		<td>" . $toko . "</td>
		<td>" . $status . "</td>
		<td>
		<button class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
		</td>
		</tr>";
		$no++;
	}

	// Tampilan jika status belum terdaftar
	else{
		$data .= "<tr>
		<td>" . $no . "</td>
		<td>" . $id . "</td>
		<td>" . $nama . "</td>
		<td>" . $plugtype . "</td>
		<td>" . $jenis . "</td>
		<td>" . $toko . "</td>
		<td>" . $status . "</td>
		<td>
		<button class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
		<button class='btn btn-success' ><a href='index.php?id_status=" . $id .  "' style='color: white; font-weight: bold;'>Selesai</a></button>
		</td>
		</tr>";
		$no++;
	}
}


// Membaca template skin.html
$tpl = new Template("templates/skin.html");

// Menutup koneksi database
$otask->close();


// Mengganti kode Data_Tabel dengan data yang sudah diproses
$tpl->replace("DATA_TABEL", $data);

// Menampilkan ke layar
$tpl->write();
