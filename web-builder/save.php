<?php

	/* CONFIG */
	
	$pathToAssets = array("elements/css", "elements/images", "elements/js", "elements/less", "elements/libs");
	
	$filename = "tmp/Neumann.zip"; //use the /tmp folder to circumvent any permission issues on the root folder

	/* END CONFIG */


	$zip = new ZipArchive();
	
	$zip->open($filename, ZipArchive::CREATE);

	//add folder structure
	foreach( $pathToAssets as $thePath ) {
	
		// Create recursive directory iterator
		$files = new RecursiveIteratorIterator(
	    	new RecursiveDirectoryIterator( $thePath ),
	    	RecursiveIteratorIterator::LEAVES_ONLY
		);
	
		foreach ($files as $name => $file) {
		
			if( $file->getFilename() != '.' && $file->getFilename() != '..' ) {
	
	    		// Get real path for current file
	    		$filePath = $file->getRealPath();
	    
	    		$temp = explode("/", $name);
	    
	    		array_shift( $temp );
	    
	    		$newName = implode("/", $temp);
	
	    		// Add current file to archive
	    		$zip->addFile($filePath, $newName);
	    	
	    	}
	    
		}
	
	}
	
	
	
	foreach( $_POST['pages'] as $page=>$content ) {
	
		$zip->addFromString($page.".html", $_POST['doctype']."\n".stripslashes($content));
		
		//echo $content;
	
	}
	
	//$zip->addFromString("testfilephp.txt" . time(), "#1 This is a test string added as testfilephp.txt.\n");
	//$zip->addFromString("testfilephp2.txt" . time(), "#2 This is a test string added as testfilephp2.txt.\n");
	
	$zip->close();
	
	
	$yourfile = $filename;
	
	$file_name = basename($yourfile);
	
	//disable download file
	/**
	header("Content-Type: application/zip");
	header("Content-Transfer-Encoding: Binary");
	header("Content-Disposition: attachment; filename=$file_name");
	header("Content-Length: " . filesize($yourfile));
	

	readfile($yourfile);*/
	
	// file yang sudah didapatkan di unzip
	$zip = new ZipArchive;
	if ($zip->open($filename) === TRUE) {
	    $zip->extractTo('../userfiles/'); // ganti dengan site address
	    $zip->close();
	    echo $filename.' unzipped<br/>';

	    //detail folder

	    // ubah owner files di folder ini
	    chown('../userfiles/*.*', 'root'); // ganti dengan site owner
	    //chgrp() jika ganti dengan usergroup

		unlink('tmp/Neumann.zip');
	} else {
	    echo 'Failed to unzip into directory, request fix to your Administrator';
	}


	header("Location: //localhost/smartmedia/member/");
	
	exit;

?>