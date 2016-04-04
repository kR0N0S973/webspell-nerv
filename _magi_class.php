<?php
	include_once("_settings.php");
	class magi_class {
		// WEBSPELL BASE FUNCTIONS
		function safe_query($query){
			include_once("_settings.php");
			return isafe_query($query);
		}
		
		function safe_query2($query){
			include_once("_settings.php");
			return safe_query2($query);
		}
		
		function gettemplate($template,$endung="html", $calledfrom="root") {
			include_once("_settings.php");
			include_once("_functions.php");
			return gettemplate($template,$endung="html", $calledfrom="root");
		}
		
		function show_error($errorcontent){
			echo $errorcontent;
		}
		
		
		// WEBSELL NERV FUNCTIONS
		function prepareUrl($url){
			include_once("_settings.php");
			return prepareUrl($url);
		}
		
		function getHpUrl(){
			include_once("_settings.php");
			return $hp_url;
		}
		
		function getControl($plugin_name, $control_name){
			include_once("_settings.php");
			return getControl($plugin_name, $control_name);
		}
		
		function updateControl($plugin_name, $control_name, $new_content){
			include_once("_settings.php");
			return updateControl($plugin_name, $control_name, $new_content);
		}
		
		function insertControl($plugin_name, $control_name, $content, $deletedate = 'NULL'){
			include_once("_settings.php");
			return insertControl($plugin_name, $control_name, $content, $deletedate = 'NULL');
		}
		
		function download($file, $extern = false) {
			if(!$extern) {
				$filename = basename($file);

				header("Expires: 0");
				header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
				header("Content-Type: application/force-download");
				header("Content-Description: File Transfer");

				header("Content-Disposition: attachment; filename=".str_replace(' ', '_', $filename).";");
				header("Content-Length: ".filesize($file));
				header("Content-Transfer-Encoding: binary");

				@readfile($file);
				exit;
			}
			else header("Location: ".$file);
		}
		
		function get_string_between($string, $start, $end){
			$string = ' ' . $string;
			$ini = strpos($string, $start);
			if ($ini == 0) return '';
			$ini += strlen($start);
			$len = strpos($string, $end, $ini) - $ini;
			return substr($string, $ini, $len);
		}
		
		function redirect_with_message($title, $content, $url, $time,$subline="", $type = "primary"){
			eval ("\$messagebox = \"".$this->gettemplate("messagebox")."\";");
			echo $messagebox;
			$this->redirect($url, $time);
		}
		
		function redirect($url, $time = 0){
			$redirectstring = "
			<script>
				setTimeout(function () {
				   window.location.href= '$url'; 
				},$time);
			</script>
			";
			echo $redirectstring;
		}
	}
?>