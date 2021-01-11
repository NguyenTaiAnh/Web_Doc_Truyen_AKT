<?php

	$id_truyen = $_GET['id_truyen'];

	$connect = mysqli_connect("localhost", "root", "", "webtruyen");
	mysqli_query($connect, "SET NAMES 'utf8'");

	$query = "SELECT truyen.hinhanh, truyen.name, tacgia.ten,theloai.ten_tl,trangthai.name_tt,truyen.mota FROM truyen inner join tacgia on truyen.id_tg = tacgia.id_tg inner join trangthai on trangthai.id_tt = truyen.id_tt inner join theloai on theloai.id_tl = truyen.id_tl where truyen.id_truyen = '$id_truyen'";

	$data = mysqli_query($connect, $query);
	$arraydata = array();
	while ($row = mysqli_fetch_assoc($data)) {
		# code...
		array_push($arraydata, new Lists($row['hinhanh'],$row['name'],$row['ten'],$row['ten_tl'],$row['name_tt'],$row['mota']));
	}
	echo json_encode($arraydata,256);

	

	class Lists
{
	function __construct($hinhanh,$name,$ten,$ten_tl,$name_tt,$mota)
	{			
		$this->hinhanh = $hinhanh;
		$this->name = $name;
		$this->ten = $ten;		
		$this->ten_tl = $ten_tl;		
		$this->name_tt = $name_tt;
		$this->mota = $mota;
		
	}
}

?>