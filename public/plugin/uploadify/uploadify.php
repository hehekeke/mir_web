<?php
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

// Define a destination
if($_POST['path'] == 'image'){
	$targetFolder = '/public/uploads'; // Relative to the root
}else{
	$targetFolder = '/public/uploads/video';
}
$verifyToken = md5('unique_salt' . $_POST['timestamp']);

if (!empty($_FILES)) {
	
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
	// Validate the file type
	$fileTypes = array('jpg','jpeg','gif','png','mp4'); // File extensions
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	if (in_array($fileParts['extension'],$fileTypes)) {
		$_FILES['Filedata']['name'] = time().rand(1000,9999).'.'.$fileParts['extension'];
		$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
		move_uploaded_file($tempFile,$targetFile);
		$fileUrl = $_SERVER['server_name'].$targetFolder.'/'.$_FILES['Filedata']['name'];
		$fileName = $_FILES['Filedata']['name'];
		echo json_encode(['fileUrl'=>$fileUrl,'fileName'=>$fileName]);
	} else {
		echo '0';
	}
}
?>