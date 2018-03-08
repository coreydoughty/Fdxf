#!/usr/bin/env php
<?php

require __DIR__ . '/../../vendor/autoload.php';

use Fdxf\Fdxf;
use Fdxf\Filesystem\Local;

$width = 400;
$height = 300;
$thickness = 0;

// --- Start Class ---
$dxf = new Fdxf( $width, $height, 0 );



// --- Set layers ---
$layers = array();
$layers[ 1 ] = array( 'name' => 'LINEA', 'color' => '1' );
$layers[ 2 ] = array( 'name' => 'CIRCA', 'color' => '2' );
$layers[ 3 ] = array( 'name' => 'ARCA', 'color' => '3' );
$layers[ 4 ] = array( 'name' => 'PLINEA', 'color' => '4' );
$layers[ 5 ] = array( 'name' => 'TEXTA', 'color' => '5' );
$layers[ 6 ] = array( 'name' => 'BLOCKA', 'color' => '6' );
$layers[ 7 ] = array( 'name' => 'RECTA', 'color' => '7' );
$dxf->SetLayers( $layers );



// --- Set file system ---
$filesystem = new Local();
$dxf->SetFlysystem( $filesystem );



// --- Test Line ---
$dxf->AddLine( $layers[ 1 ][ 'name' ], 15, $height/2, 0, $width-15, $height/2, 0 );

// --- Test Circle ---
$dxf->AddCircle( $layers[ 2 ][ 'name' ], $width/2, $height/2, 0, $height/4 );

// --- Test Arc ---
$dxf->AddArc( $layers[ 3 ][ 'name' ], $width/2, $height/2, 0, $height/3, 0, -30, 30 );

// --- Test Polyline ---
$dxf->AddPlineStart( $layers[ 4 ][ 'name' ], 0, $height/2, 0 );
$dxf->AddPlineEntity( $layers[ 4 ][ 'name' ], $width/2, $height, 0 );
$dxf->AddPlineEntity( $layers[ 4 ][ 'name' ], $width, $height/2, 0 );
$dxf->AddPlineEntity( $layers[ 4 ][ 'name' ], $width/2, 0, 0 );
$dxf->AddPlineEntity( $layers[ 4 ][ 'name' ], 0, $height/2, 0 );
$dxf->AddPlineClose( $layers[ 4 ][ 'name' ] );

// --- Test Text ---
$dxf->AddText( $layers[ 5 ][ 'name' ], 15, 15, 0, 15, 0, 'TESTING' );

// --- Test Block ---
$str  = $dxf->gc( '0', 'BLOCK');
$str .= $dxf->gc( '8', '0');
$str .= $dxf->gc( '2', 'TESTBLOCK');
$str .= $dxf->gc( '70', '0');
$str .= $dxf->gc( '10', '0.0');
$str .= $dxf->gc( '20', '0.0');
$str .= $dxf->gc( '20', '0.0');
$str .= $dxf->gc( '2', 'TESTBLOCK');
$str .= $dxf->gc( '1', '');
$str .= $dxf->Rectangle( $layers[ 6 ][ 'name' ], 0, 0, 0, 25, 25 );
$str .= $dxf->gc( '0', 'ENDBLK');
$dxf->SetBlock( $str );
$dxf->AddBlockEntity( $layers[ 6 ][ 'name' ], 'TESTBLOCK', $width/2, $height/2,0,135 );
$dxf->AddBlockEntity( $layers[ 6 ][ 'name' ], 'TESTBLOCK', $width/2, $height/2,0,45 );
$dxf->AddBlockEntity( $layers[ 6 ][ 'name' ], 'TESTBLOCK', $width/2, $height/2,0,-45 );
$dxf->AddBlockEntity( $layers[ 6 ][ 'name' ], 'TESTBLOCK', $width/2, $height/2,0,-135 );

// --- Test Rectangle ---
$dxf->AddRectangle( $layers[ 7 ][ 'name' ], 0, 0, 0, $width, $height, 10 );



// --- Output to folder ---
$dir_output = __DIR__ . '/../Output/';
$dxf->Output( $dir_output, 'Test.dxf' );



// --- Convert ---
$os = php_uname( 's' );
echo $os . "\r\n";
if( $os == 'Linux' ) {
	$platform = 'linuxfb';
} else {
	$platform = null;
}

$dxf->FileConverter(
	$dir_output,
	$dir_output,
	'Test.dxf',
	'ACAD2010',
	'DWG',
	'0',
	'1',
	$platform
);
