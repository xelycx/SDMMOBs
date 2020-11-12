<?php
//to use just add include "autoload.php" on top of file

spl_autoload_register(function($class){
	$filename = $class.'.php'

	if(!file_exists(filename)) { return false; }
	include $filename;
}); 

?>