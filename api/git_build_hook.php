<?php

header("Content-Type: text/css");

$dir    = __DIR__;
$builds = '/var/www/boomerang.donatstudios.com/public/builds';

$build_info = json_decode($_POST['payload'], true);
$temp_dir   = tempdir('/tmp','boom');

file_put_contents( 'build_log.txt', var_export($temp_dir, true) . "\n"
, FILE_APPEND );

chdir($temp_dir);
echo shell_exec("git clone https://github.com/donatj/Boomerang.git " . escapeshellarg($temp_dir));
$rev = trim(shell_exec("git rev-parse HEAD"));
$rev_phar = $builds . "/{$rev}.phar";

if( file_exists($rev_phar) ) {
	echo shell_exec("rm -rf " . escapeshellarg($temp_dir));
	die('Already Built');
}

echo "\n\n";
echo shell_exec("composer.phar install --no-dev");
echo "\n\n";
echo shell_exec("php create-phar.php");
echo "\n\n";


if( file_exists($temp_dir . '/build/boomerang.phar') && 
	copy( $temp_dir . '/build/boomerang.phar', $builds . "/dev/boomerang.phar" ) && 
	copy( $temp_dir . '/build/boomerang.phar', $builds . "/{$rev}.phar" )
	) {

	echo shell_exec("rm -rf " . escapeshellarg($temp_dir));

	echo "Build Success";
	die(0);
}else{
	
	echo "Build Failed";
	die(1);
}

function tempdir($dir, $prefix='', $mode=0700) {
	if (substr($dir, -1) != '/') $dir .= '/';
	do {
		$path = $dir.$prefix.mt_rand(0, 9999999);
	} while (!mkdir($path, $mode));

	return $path;
}