<?php 

/******************************************
PRAKTIKUM RPL
******************************************/

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke mic_datapasok
		$query = "SELECT * FROM mic_datapasok";

		// Mengeksekusi query
		return $this->execute($query);
	}
	function insertTask($nama, $id, $plugtype, $toko, $jenis, $status){
	
		$sql_add = "INSERT INTO mic_datapasok (id, nama_mic, plug_type, jenis_mic, toko, status_brg) VALUES  
				('$id', '$nama', '$plugtype', '$jenis', '$toko', '$status')";

		
	 return $this->execute($sql_add);
		
	}
	function delete($data){
		
        $sql = "DELETE FROM mic_datapasok WHERE id=$data";

		
	 return $this->execute($sql);
    }
	function update($data){
	
		$sql = "UPDATE mic_datapasok SET status_brg='Sudah Terdaftar' WHERE id=$data";

		
	 return $this->execute($sql);
	}

}



?>
