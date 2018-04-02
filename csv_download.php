<?php
$file = 'sample.csv'; //path to the file on disk

if (file_exists($file)) {

	//set appropriate headers
	header('Content-Description: File Transfer');
	header('Content-Type: application/csv');
	header('Content-Disposition: attachment; filename='.basename($file));
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize($file));
	ob_clean();
	flush();

	//read the file from disk and output the content.
	readfile($file);
	exit;
    }


?>