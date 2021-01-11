<?php

	$connect = mysqli_connect("localhost", "root", "", "webtruyen");
	mysqli_query($connect, "SET NAMES 'utf8'");

	$query = "SELECT  truyen.name, tacgia.ten, truyen.hinhanh, tacgia.id_tg, truyen.id_truyen FROM truyen inner join tacgia on truyen.id_tg = tacgia.id_tg  ";

	$data = mysqli_query($connect, $query);
	$arraydata = array();
	while ($row = mysqli_fetch_assoc($data)) {
		# code...
		array_push($arraydata, new Lists($row['name'],$row['ten'],$row['hinhanh'],$row['id_tg'],$row['id_truyen']));
	}
	echo json_encode($arraydata,256);

	

	class Lists
{
	function __construct($name,$ten,$hinhanh,$id_tg,$id_truyen)
	{			
		$this->name = $name;
		$this->ten = $ten;		
		// $this->time_cre = $time_cre;		
		$this->hinhanh = $hinhanh;
		$this->id_tg = $id_tg;
		$this->id_truyen = $id_truyen;
	}
}

?>
