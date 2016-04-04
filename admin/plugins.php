<?php
	chdir("../");
	nervinc("_plugins");
	
	$plugin_class = new plugins();
	$styles = $plugin_class->getStyles();
	var_dump($styles);
	
	$plugg = new plugins("cookie_law");
	
	$headervariable = "testvariable";
	//echo $plugg->getTemplate("cookie", "header");
	
	eval ("\$header = \"".$plugg->getTemplate("cookie", "header")."\";");
	echo $header;
	
	// $dirs = array_filter(glob('plugins/*'), 'is_dir');
	// foreach($dirs as $dir){
		// if(file_exists($dir."/_info.json")){
			// $file = file_get_contents($dir."/_info.json");
			// $json = json_decode($file, true);
			
			// $enable 		= $json['plugin']['enable'];
			// $name   		= $json['plugin']['info']['name'];
			// $folder			= $json['plugin']['info']['folder'];
			// $version		= $json['plugin']['info']['version'];
			// $nerv_version   = $json['plugin']['info']['nerv_version'];
			// $styles 		= $json['plugin']['styles'];
			// $tables 		= $json['plugin']['tables'];
			
			// print_r($styles);
		// }
	// }
?>