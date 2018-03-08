#!/usr/bin/env php
<?php

require __DIR__ . '/../../vendor/autoload.php';

use Fdxf\Fdxf;
use Fdxf\Filesystem\Local;

// --- Start Class ---
$dxf = new Fdxf( 100, 100, 15 );

// --- Set layers ---
$layers = array();
$layers[ 1 ] = array( 'name' => 'Temp', 'color' => '8' );
$dxf->SetLayers( $layers );

// --- Set file system ---
$filesystem = new Local();
$dxf->SetFlysystem( $filesystem );

// --- Add objects ---
$dxf->AddRectangle( $layers[ 1 ][ 'name' ], 0, 0, 0, 100, 100 );

// --- Output to folder ---
$dir_output = __DIR__ . '/../Output/';
$dxf->Output( $dir_output, 'Test.dxf' );


$os = php_uname('s');
echo $os."\r\n";
if( $os == 'Linux' ){
	$platform = 'linuxfb';
} else {
	$platform = null;
}

// --- Convert ---
$dxf->FileConverter(
	$dir_output,
	$dir_output,
	'Test.dxf',
	'ACAD2000',
	'DWG',
	0,
	1,
	$platform
);
