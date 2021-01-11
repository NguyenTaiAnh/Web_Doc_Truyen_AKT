<?php

	$id_truyen = $_GET['id_truyen'];

	$connect = mysqli_connect("localhost", "root", "", "webtruyen");
	mysqli_query($connect, "SET NAMES 'utf8'");

	$query = "SELECT truyen.name, chuong.name_chap,chuong.chap FROM chuong inner join truyen on truyen.id_truyen = chuong.id_truyen  WHERE chuong.id_truyen = '$id_truyen'";

	$data = mysqli_query($connect, $query);
	$arraydata = array();
	while ($row = mysqli_fetch_assoc($data)) {
		# code...
		array_push($arraydata, new Lists($row['name'],$row['name_chap'],$row['chap']));
	}
	echo json_encode($arraydata,256);

	

	class Lists
{
	function __construct($name,$name_chap,$chap)
	{			
		$this->chap = $chap;
		$this->name_chap = $name_chap;
		$this->name = $name;
		
	}
}

?>