<?php
/**
 * This file is part of the Fdxf package.
 *
 * (c) Corey Doughty <corey@ddoughty.ca>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fdxf;


/**
 * Build DXF ASCII files header.
 *
 * Class Fdxf_Tables
 * @package Fdxf
 */
class Fdxf_Tables extends Fdxf_Headers
{
	/**
	 * DXF layers array
	 * @var array
	 */
	private $layers = array();


	/**
	 * FDXF_Tables constructor.
	 * Can set width, height, and thickness of drawing.
	 *
	 * @param float $X
	 * @param float $Y
	 * @param float $Z
	 */
	public function __construct(
		$X = 0.0,
		$Y = 0.0,
		$Z = 0.0
	) {
		@parent::__construct(
			$X,
			$Y,
			$Z
		);
	}


	/**
	 * Set layers array
	 *
	 * @param array $layers
	 * @return self
	 */
	public function SetLayers(
		array $layers
	) {
		$this->layers = $layers;
		return $this;
	}


	/**
	 * Empty layers array
	 *
	 * @return self
	 */
	public function ClearLayers() {
		$this->layers = array();
		return $this;
	}


	/**
	 * Add a typical DXF table string
	 *
	 * @return string
	 */
	public function BuildTables() {
		$s = '';
		$s .= $this->gc( '0', 'SECTION' );
		$s .= $this->gc( '2', 'TABLES' );

		$s .= $this->TableVPORT();


		//--- Start Table Line Types ---
		$s .= $this->gc( '0', 'TABLE' );
		$s .= $this->gc( '2', 'LTYPE' );
		// Change to the quantity of line types
		$s .= $this->gc( '70', '2' );
		// Line Type 1 CONTINUOUS
		$s .= $this->gc( '0', 'LTYPE' );
		$s .= $this->gc( '2', 'CONTINUOUS' );
		$s .= $this->gc( '70', '0' );
		$s .= $this->gc( '3', 'Solid line' );
		$s .= $this->gc( '72', '65' );
		$s .= $this->gc( '73', '0' );
		$s .= $this->gc( '40', '0.0' );
		// Line Type 2 PHANTOM2
		$s .= $this->gc( '0', 'LTYPE' );
		$s .= $this->gc( '2', 'PHANTOM2' );
		$s .= $this->gc( '70', '0' );
		$s .= $this->gc( '3', '___ _ _ ___ _ _ ___ _ _ ___ _ _' );
		$s .= $this->gc( '72', '65' );
		$s .= $this->gc( '73', '6' );
		$s .= $this->gc( '40', '12.0' );
		$s .= $this->gc( '49', '6.0' );
		$s .= $this->gc( '49', '-6.0' );
		$s .= $this->gc( '49', '6.0' );
		$s .= $this->gc( '49', '-6.0' );
		$s .= $this->gc( '49', '6.0' );
		$s .= $this->gc( '49', '-6.0' );
		$s .= $this->gc( '0', 'ENDTAB' );
		//--- End Table Line Types ---

		//--- Start Table Layers ---
		$TotalLayers = count( $this->layers );
		$s .= $this->gc( '0', 'TABLE' );
		$s .= $this->gc( '2', 'LAYER' );
		$s .= $this->gc( '70', $TotalLayers );
		// Layer 1 0
		$s .= $this->gc( '0', 'LAYER' );
		$s .= $this->gc( '2', '0' );
		$s .= $this->gc( '70', '0' );
		$s .= $this->gc( '62', '7' );
		$s .= $this->gc( '6', 'CONTINUOUS' );
		// Layers Array Loop
		foreach( $this->layers as $key => $value ) {
			if( is_array( $value ) ) {
				if( isset( $value[ 'name' ] ) && isset( $value[ 'color' ] ) ) {
					$color = str_pad( $value[ 'color' ], 6, ' ', STR_PAD_LEFT );
					$s .= $this->gc( '0', 'LAYER' );
					$s .= $this->gc( '2', '' . strtoupper( $value[ 'name' ] ) . '' );
					$s .= $this->gc( '70', '0' );
					$s .= $this->gc( '62', $color );
					$s .= $this->gc( '6', 'CONTINUOUS' );
				} else if( isset( $value[ 'name' ] ) ) {
					$s .= $this->gc( '0', 'LAYER' );
					$s .= $this->gc( '2', '' . strtoupper( $value[ 'name' ] ) . '' );
					$s .= $this->gc( '70', '0' );
					$s .= $this->gc( '62', '7' ); // White
					$s .= $this->gc( '6', 'CONTINUOUS' );
				}
			} else {
				$s .= $this->gc( '0', 'LAYER' );
				$s .= $this->gc( '2', '' . strtoupper( $value ) . '' );
				$s .= $this->gc( '70', '0' );
				$s .= $this->gc( '62', '7' ); // White
				$s .= $this->gc( '6', 'CONTINUOUS' );
			}
		}
		$s .= $this->gc( '0', 'ENDTAB' );
		//--- End Table Layers ---

		//--- Start Table Style ---
		$s .= $this->gc( '0', 'TABLE' );
		$s .= $this->gc( '2', 'STYLE' );
		// Change to the quantity of styles
		$s .= $this->gc( '70', '2' );
		// Style 1 STANDARD
		$s .= $this->gc( '0', 'STYLE' );
		$s .= $this->gc( '2', 'STANDARD' );
		$s .= $this->gc( '70', '0' );
		$s .= $this->gc( '40', '0.0' );
		$s .= $this->gc( '41', '1.0' );
		$s .= $this->gc( '50', '0.0' );
		$s .= $this->gc( '71', '0' );
		$s .= $this->gc( '42', '12.0' );
		$s .= $this->gc( '3', 'txt' );
		$s .= $this->gc( '4', '' );
		// Style 2 ANNOTATIVE
		$s .= $this->gc( '0', 'STYLE' );
		$s .= $this->gc( '2', 'ANNOTATIVE' );
		$s .= $this->gc( '70', '0' );
		$s .= $this->gc( '40', '0.0' );
		$s .= $this->gc( '41', '1.0' );
		$s .= $this->gc( '50', '0.0' );
		$s .= $this->gc( '71', '0' );
		$s .= $this->gc( '42', '12.0' );
		$s .= $this->gc( '3', 'txt' );
		$s .= $this->gc( '4', '' );
		$s .= $this->gc( '0', 'ENDTAB' );
		//--- End Table Style ---

		//--- Start Table View ---
		$s .= $this->gc( '0', 'TABLE' );
		$s .= $this->gc( '2', 'VIEW' );
		$s .= $this->gc( '70', '0' );
		$s .= $this->gc( '0', 'ENDTAB' );
		//--- End Table View ---

		//--- Start Table UCS ---
		$s .= $this->gc( '0', 'TABLE' );
		$s .= $this->gc( '2', 'UCS' );
		$s .= $this->gc( '70', '0' );
		$s .= $this->gc( '0', 'ENDTAB' );
		//--- End Table UCS ---

		//--- Start Table AppID ---
		$s .= $this->gc( '0', 'TABLE' );
		$s .= $this->gc( '2', 'APPID' );
		// Change to the quantity of AppID
		$s .= $this->gc( '70', '5' );
		// AppID 1 ACAD
		$s .= $this->gc( '0', 'APPID' );
		$s .= $this->gc( '2', 'ACAD' );
		$s .= $this->gc( '70', '0' );
		// AppID 2 ACADANNOTATIVE
		$s .= $this->gc( '0', 'APPID' );
		$s .= $this->gc( '2', 'ACADANNOTATIVE' );
		$s .= $this->gc( '70', '0' );
		// AppID 3 NCPOLARIS_BASE
		$s .= $this->gc( '0', 'APPID' );
		$s .= $this->gc( '2', 'NCPOLARIS_BASE' );
		$s .= $this->gc( '70', '0' );
		// AppID 4 ACAD_NAV_VCDISPLAY
		$s .= $this->gc( '0', 'APPID' );
		$s .= $this->gc( '2', 'ACAD_NAV_VCDISPLAY' );
		$s .= $this->gc( '70', '0' );
		// AppID 5 ACAD_MLEADERVER
		$s .= $this->gc( '0', 'APPID' );
		$s .= $this->gc( '2', 'ACAD_MLEADERVER' );
		$s .= $this->gc( '70', '0' );
		$s .= $this->gc( '0', 'ENDTAB' );
		//--- End Table AppID ---

		//--- Start Table Dimension Styles ---
		$s .= $this->gc( '0', 'TABLE' );
		$s .= $this->gc( '2', 'DIMSTYLE' );
		// Change to the quantity of dimension styles
		$s .= $this->gc( '70', '2' );
		// Dimension styles 1 STANDARD
		$s .= $this->gc( '0', 'DIMSTYLE' );
		$s .= $this->gc( '2', 'STANDARD' );
		$s .= $this->gc( '70', '0' );
		$s .= $this->gc( '3', '' );
		$s .= $this->gc( '4', '' );
		$s .= $this->gc( '5', '' );
		$s .= $this->gc( '6', '' );
		$s .= $this->gc( '7', '' );
		$s .= $this->gc( '40', '1.0' );
		$s .= $this->gc( '41', '6.0' );
		$s .= $this->gc( '42', '6.0' );
		$s .= $this->gc( '43', '6.0' );
		$s .= $this->gc( '44', '6.0' );
		$s .= $this->gc( '45', '0.0' );
		$s .= $this->gc( '46', '0.0' );
		$s .= $this->gc( '47', '0.0' );
		$s .= $this->gc( '48', '0.0' );
		$s .= $this->gc( '140', '12.0' );
		$s .= $this->gc( '141', '6.0' );
		$s .= $this->gc( '142', '0.0' );
		$s .= $this->gc( '143', '25.3999999999999986' );
		$s .= $this->gc( '144', '1.0' );
		$s .= $this->gc( '145', '0.0' );
		$s .= $this->gc( '146', '1.0' );
		$s .= $this->gc( '147', '6.0' );
		$s .= $this->gc( '71', '0' );
		$s .= $this->gc( '72', '0' );
		$s .= $this->gc( '73', '1' );
		$s .= $this->gc( '74', '1' );
		$s .= $this->gc( '75', '0' );
		$s .= $this->gc( '76', '0' );
		$s .= $this->gc( '77', '0' );
		$s .= $this->gc( '78', '0' );
		$s .= $this->gc( '170', '0' );
		$s .= $this->gc( '171', '2' );
		$s .= $this->gc( '172', '0' );
		$s .= $this->gc( '173', '0' );
		$s .= $this->gc( '174', '0' );
		$s .= $this->gc( '175', '0' );
		$s .= $this->gc( '176', '0' );
		$s .= $this->gc( '177', '0' );
		$s .= $this->gc( '178', '0' );
		// Dimension styles 2 ANNOTATIVE
		$s .= $this->gc( '0', 'DIMSTYLE' );
		$s .= $this->gc( '2', 'ANNOTATIVE' );
		$s .= $this->gc( '70', '     0' );
		$s .= $this->gc( '3', '' );
		$s .= $this->gc( '4', '' );
		$s .= $this->gc( '5', '' );
		$s .= $this->gc( '6', '' );
		$s .= $this->gc( '7', '' );
		$s .= $this->gc( '40', '1.0' );
		$s .= $this->gc( '41', '6.0' );
		$s .= $this->gc( '42', '6.0' );
		$s .= $this->gc( '43', '6.0' );
		$s .= $this->gc( '44', '6.0' );
		$s .= $this->gc( '45', '0.0' );
		$s .= $this->gc( '46', '0.0' );
		$s .= $this->gc( '47', '0.0' );
		$s .= $this->gc( '48', '0.0' );
		$s .= $this->gc( '140', '12.0' );
		$s .= $this->gc( '141', '6.0' );
		$s .= $this->gc( '142', '0.0' );
		$s .= $this->gc( '143', '25.3999999999999986' );
		$s .= $this->gc( '144', '1.0' );
		$s .= $this->gc( '145', '0.0' );
		$s .= $this->gc( '146', '1.0' );
		$s .= $this->gc( '147', '6.0' );
		$s .= $this->gc( '71', '0' );
		$s .= $this->gc( '72', '0' );
		$s .= $this->gc( '73', '1' );
		$s .= $this->gc( '74', '1' );
		$s .= $this->gc( '75', '0' );
		$s .= $this->gc( '76', '0' );
		$s .= $this->gc( '77', '0' );
		$s .= $this->gc( '78', '0' );
		$s .= $this->gc( '170', '0' );
		$s .= $this->gc( '171', '2' );
		$s .= $this->gc( '172', '0' );
		$s .= $this->gc( '173', '0' );
		$s .= $this->gc( '174', '0' );
		$s .= $this->gc( '175', '0' );
		$s .= $this->gc( '176', '0' );
		$s .= $this->gc( '177', '0' );
		$s .= $this->gc( '178', '0' );
		$s .= $this->gc( '0', 'ENDTAB' );
		//--- End Table Dimension Styles ---

		$s .= $this->gc( '0', 'ENDSEC' );

		return $s;
	}


	/**
	 * Table Viewport
	 *
	 * @return string
	 */
	private function TableVPORT() {
		$s = '';
		$s .= $this->gc( '0', 'TABLE' );
		$s .= $this->gc( '2', 'VPORT' );
		$s .= $this->gc( '70', '1' );

		$s .= $this->gc( '0', 'VPORT' );

		// Viewport name
		$s .= $this->gc( '2', '*ACTIVE' );

		// Standard flag values (See "Common Group Codes for Symbol Table Entries.")
		$s .= $this->gc( '70', '0' );

		// Lower-left corner of viewport
		// DXF: X value; APP: 2D point
		// DXF: Y value of lower-left corner of viewport
		$s .= $this->gc( '10', '0.0' );
		$s .= $this->gc( '20', '0.0' );

		// Upper-right corner of viewport
		// DXF: X value; APP: 2D point
		// DXF: Y value of upper-right corner of viewport
		$s .= $this->gc( '11', $this->X );
		$s .= $this->gc( '21', $this->Y );

		// View center point (in DCS).
		// DXF: X value; APP: 2D point
		// DXF: Y value of view center point (in DCS)
		$s .= $this->gc( '12', ( $this->X / 2 ) );
		$s .= $this->gc( '22', ( $this->Y / 2 ) );

		// Snap base point.
		// DXF: X value; APP: 2D point
		// DXF: Y value of snap base point
		$s .= $this->gc( '13', '0.0' );
		$s .= $this->gc( '23', '0.0' );

		// Snap spacing X and Y.
		// DXF: X value; APP: 2D point
		// DXF: Y value of snap spacing X and Y
		$s .= $this->gc( '14', '1.0' );
		$s .= $this->gc( '24', '1.0' );

		// Grid spacing X and Y.
		// DXF: X value; APP: 2D point
		// DXF: Y value of grid spacing X and Y
		$s .= $this->gc( '15', '0.0' );
		$s .= $this->gc( '25', '0.0' );

		// View direction from target point (in WCS)
		// DXF: X value; APP: 3D point
		// DXF: Y and Z values of view direction from target point (in WCS)
		$s .= $this->gc( '16', '0.0' );
		$s .= $this->gc( '26', '0.0' );
		$s .= $this->gc( '36', '1.0' );

		// View target point (in WCS).
		// DXF: X value; APP: 3D point
		// DXF: Y and Z values of view target point (in WCS)
		$s .= $this->gc( '17', '0.0' );
		$s .= $this->gc( '27', '0.0' );
		$s .= $this->gc( '37', '0.0' );

		// View height.
		$s .= $this->gc( '40', $this->Y );

		// Viewport aspect ratio
		$s .= $this->gc( '41', $this->X / $this->Y );

		// Lens length
		$s .= $this->gc( '42', '50.0' );

		// Front clipping plane (offset from target point)
		$s .= $this->gc( '43', '0.0' );

		// Back clipping plane (offset from target point)
		$s .= $this->gc( '44', '0.0' );

		// Snap rotation angle
		$s .= $this->gc( '50', '0.0' );

		// View twist angle
		$s .= $this->gc( '51', '0.0' );

		// View mode (see VIEWMODE system variable)
		$s .= $this->gc( '71', '0' );

		// Circle zoom percent
		$s .= $this->gc( '72', '20000' );

		// Fast zoom setting
		$s .= $this->gc( '73', '1' );

		// UCSICON setting
		$s .= $this->gc( '74', '3' );

		// Snap on/off
		$s .= $this->gc( '75', '0' );

		// Grid on/off
		$s .= $this->gc( '76', '0' );

		// Snap style
		$s .= $this->gc( '77', '0' );

		//Snap isopair
		$s .= $this->gc( '78', '0' );

		$s .= $this->gc( '0', 'ENDTAB' );

		return $s;
	}

}
