<?php

	$chap = $_GET['chap'];
	$id_truyen = $_GET['id_truyen'];

	$connect = mysqli_connect("localhost", "root", "", "webtruyen");
	mysqli_query($connect, "SET NAMES 'utf8'");

	$query = "SELECT chuong.content from chuong inner join truyen on truyen.id_truyen = chuong.id_truyen where chuong.chap = '$chap'";

	$data = mysqli_query($connect, $query);
	$arraydata = array();
	while ($row = mysqli_fetch_assoc($data)) {
		# code...
		array_push($arraydata, new Lists($row['content']));
	}
	echo json_encode($arraydata,256);

	

	class Lists
{
	function __construct($content)
	{			
		$this->content = $content;
		
		
	}
}

?>