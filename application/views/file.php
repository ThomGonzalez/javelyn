<?php

if( ! empty($download_path)){
	// Read the file's contents
	$data = file_get_contents(base_url().'/docs/HTML5.pdf'); 
	$name = $download_path;
	force_download($name, $data);
}
