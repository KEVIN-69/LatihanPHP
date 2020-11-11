<?php
	$nama = [["Nama"=>"Kevin", 
	"Kelas"=>"RPL 1"],
	["Nama"=>"Bima", 
	"Kelas"=>"RPL 2"],
	["Nama"=>"Zaky", 
	"Kelas"=>"RPL 3"],
	["Nama"=>"Dafa", 
	"Kelas"=>"RPL 4"],
	["Nama"=>"Edrik", 
	"Kelas"=>"RPL 5"],
	["Nama"=>"Iksan", 
	"Kelas"=>"RPL 6"]];
	foreach ($nama as $name) {
		echo " Nama : <b>".$name["Nama"],"</b>";
		echo " Kelas: <b>".$name["Kelas"], "</b><br>";
	}
?>