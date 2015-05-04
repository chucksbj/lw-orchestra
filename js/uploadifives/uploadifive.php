<?php
/*
UploadiFive
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
*/

// Set the upload directory
$dbname = $_POST['dbname'];
$letter = $_POST['letter'];
$uploadDir = "/home/chucksbj/music_html/$dbname/$letter/";
$tempDir = "/home/chucksbj/music_html/uploads/";
// Set the allowed file extensions
$fileTypes = array('jpg', 'JPG', 'jpeg', 'JPEG'); // Allowed file extensions

$verifyToken = md5('unique_salt' . $_POST['timestamp']);

if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
	$tempFile   = $tempDir . $_FILES['Filedata']['tmp_name'];
//	$uploadDir  = $_SERVER['DOCUMENT_ROOT'] . $uploadDir;
	$targetFile = $uploadDir . $_FILES['Filedata']['name'];
	echo 'this is the $targetFile';
	// Validate the filetype
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	if (in_array(strtolower($fileParts['extension']), $fileTypes)) {

		// Save the file
		move_uploaded_file($tempFile, $targetFile);
		chmod($targetFile,777);
		echo 1;

	} else {

		// The file type wasn't allowed
		echo 'Invalid file type.';

	}
}
else { 
	echo '$_FILES is empty or token is invalid';
	}
?>