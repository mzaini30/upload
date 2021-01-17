<?php
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// echo "Hello World";
if (!empty($_POST)){
	// $targetPath = $_SERVER['DOCUMENT_ROOT'] . 'upload/file/' . $_FILES["file"]["name"];
	// $namaFile = md5(rand());
	// $apiFile = 'http://localhost/upload/';
	// if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)){
		// echo json_encode($apiFile . $namaFile);
		// echo json_encode('berhasil');
	// }
	// echo json_encode($_FILES);
	echo json_encode('harimau');
}