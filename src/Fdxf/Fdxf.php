<?php
/**
 * This file is part of the Fdxf package.
 *
 * (c) Corey Doughty <corey@doughty.ca>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fdxf;


/**
 * Build DXF ASCII files.
 * https://www.autodesk.com/techpubs/autocad/dxf/reference/
 * https://www.autodesk.com/techpubs/autocad/acad2000/dxf/
 * https://github.com/codelibs/libdxfrw - Review and see if can use anything
 *
 * Class Fdxf
 * @package Fdxf
 */
class Fdxf extends Fdxf_Blocks
{
	/**
	 * DXF entities string for building
	 * @var string
	 */
	private $entities = '';


	/**
	 * FDXF constructor.
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
	 * Build DXF string and output
	 *
	 * @param string|null $filedir
	 * @param string|null $filename
	 * @return string
	 */
	public function Output(
		$filedir = null,
		$filename = null
	) {
		$s = '';
		$s .= $this->BuildHeaders();
		$s .= $this->BuildTables();
		$s .= $this->BuildBlocks();
		$s .= $this->BuildEntities();

		// End Of File
		$s .= $this->gc( '0', 'EOF' );

		//--- Export File ---
		if( isset( $filedir ) && isset( $filename ) ) {
			if( isset( $this->flysystem ) && is_object( $this->flysystem ) ) {
				$this->flysystem->put( $filedir . $filename, $s );
			} else {
				$file = fopen( $filedir . $filename, "w" );
				fwrite( $file, $s );
				fclose( $file );
			}
		}

		return $s;
	}


	/**
	 * Set width, height, and thickness of drawing.
	 *
	 * @param float $X
	 * @param float $Y
	 * @param float $Z
	 * @return FDXF
	 */
	public function SetDimensions(
		$X = 0.0,
		$Y = 0.0,
		$Z = 0.0
	) {
		$this->X = (float)$X;
		$this->Y = (float)$Y;
		$this->Z = (float)$Z;

		$this->SetLIMMIN(
			'-10',
			'-10'
		);

		$this->SetLIMMAX(
			( $this->X + 10 ),
			( $this->Y + 10 )
		);

		return $this;
	}


	/**
	 * Add to the entity string
	 *
	 * @param $str
	 * @return FDXF
	 */
	public function SetEntity(
		$str
	) {
		$this->entities .= $str;
		return $this;
	}


	/**
	 * Add to the entity string
	 *
	 * @param $str
	 * @return FDXF
	 */
	public function AddEntity(
		$str
	) {
		$this->entities .= $str;
		return $this;
	}


	/**
	 * Empty entities string
	 *
	 * @return FDXF
	 */
	public function ClearEntities() {
		$this->entities = '';
		return $this;
	}


	/**
	 * Empty layers, blocks, and entities
	 *
	 * @return FDXF
	 */
	public function Clear() {
		$this->ClearLayers();
		$this->ClearEntities();
		$this->ClearBlocks();

		return $this;
	}


	/**
	 * Add a typical DXF table string
	 *
	 * @return string
	 */
	public function BuildEntities() {
		$s = '';
		$s .= $this->gc( '0', 'SECTION' );
		$s .= $this->gc( '2', 'ENTITIES' );
		$s .= $this->entities;
		$s .= $this->gc( '0', 'ENDSEC' );
		return $s;
	}


	/**
	 * DXF line entity string
	 *
	 * @param $Layer
	 * @param $StartX
	 * @param $StartY
	 * @param $StartZ
	 * @param $EndX
	 * @param $EndY
	 * @param $EndZ
	 * @param $Thickness
	 * @return string
	 */
	public function Line(
		$Layer = '0',
		$StartX = 0,
		$StartY = 0,
		$StartZ = 0,
		$EndX = 0,
		$EndY = 0,
		$EndZ = 0,
		$Thickness = 0
	) {
		$seed = $this->GetHANDSEED();
		$this->SetHANDSEED( (int)$seed + 1 );

		$s = '';
		$s .= $this->gc( '0', 'LINE' );
		$s .= $this->gc( '5', dechex( $seed ) );
		$s .= $this->gc( '8', $Layer );
		$s .= $this->gc( '10', $StartX );
		$s .= $this->gc( '20', $StartY );
		$s .= $this->gc( '30', $StartZ );
		$s .= $this->gc( '11', $EndX );
		$s .= $this->gc( '21', $EndY );
		$s .= $this->gc( '31', $EndZ );
		$s .= $this->gc( '39', $Thickness );

		return $s;

	}

	/**
	 * Add DXF line to entities
	 *
	 * @param $Layer
	 * @param $StartX
	 * @param $StartY
	 * @param $StartZ
	 * @param $EndX
	 * @param $EndY
	 * @param $EndZ
	 * @param $Thickness
	 * @return FDXF
	 */
	public function AddLine(
		$Layer = '0',
		$StartX = 0,
		$StartY = 0,
		$StartZ = 0,
		$EndX = 0,
		$EndY = 0,
		$EndZ = 0,
		$Thickness = 0
	) {
		$this->entities .= $this->Line(
			$Layer,
			$StartX,
			$StartY,
			$StartZ,
			$EndX,
			$EndY,
			$EndZ,
			$Thickness
		);

		return $this;
	}


	/**
	 * DXF circle entity string
	 *
	 * @param $Layer
	 * @param $CenterX
	 * @param $CenterY
	 * @param $CenterZ
	 * @param $Radius
	 * @param $Thickness
	 * @return string
	 */
	public function Circle(
		$Layer = "0",
		$CenterX = 0,
		$CenterY = 0,
		$CenterZ = 0,
		$Radius = 0,
		$Thickness = 0
	) {
		$seed = $this->GetHANDSEED();
		$this->SetHANDSEED( (int)$seed + 1 );

		$s = '';
		$s .= $this->gc( '0', 'CIRCLE' );
		$s .= $this->gc( '5', dechex( $seed ) );
		$s .= $this->gc( '8', $Layer );
		$s .= $this->gc( '10', $CenterX );
		$s .= $this->gc( '20', $CenterY );
		$s .= $this->gc( '30', $CenterZ );
		$s .= $this->gc( '39', $Thickness );
		$s .= $this->gc( '40', $Radius );

		return $s;
	}

	/**
	 * Add DXF circle to entities
	 *
	 * @param $Layer
	 * @param $CenterX
	 * @param $CenterY
	 * @param $CenterZ
	 * @param $Radius
	 * @param $Thickness
	 * @return FDXF
	 */
	public function AddCircle(
		$Layer = "0",
		$CenterX = 0,
		$CenterY = 0,
		$CenterZ = 0,
		$Radius = 0,
		$Thickness = 0
	) {
		$this->entities .= $this->Circle(
			$Layer,
			$CenterX,
			$CenterY,
			$CenterZ,
			$Radius,
			$Thickness
		);

		return $this;
	}


	/**
	 * DXF Arc entitiy string
	 *
	 * @param $Layer
	 * @param $CenterX
	 * @param $CenterY
	 * @param $CenterZ
	 * @param $Radius
	 * @param $Thickness
	 * @param $AngleStart
	 * @param $AngleEnd
	 * @return string
	 */
	public function Arc(
		$Layer = "0",
		$CenterX = 0,
		$CenterY = 0,
		$CenterZ = 0,
		$Radius = 0,
		$Thickness = 0,
		$AngleStart = 0,
		$AngleEnd = 0
	) {
		$seed = $this->GetHANDSEED();
		$this->SetHANDSEED( (int)$seed + 1 );

		$s = '';
		$s .= $this->gc( '0', 'ARC' );
		$s .= $this->gc( '5', dechex( $seed ) );
		$s .= $this->gc( '8', $Layer );
		$s .= $this->gc( '6', 'CONTINUOUS' );
		$s .= $this->gc( '10', $CenterX );
		$s .= $this->gc( '20', $CenterY );
		$s .= $this->gc( '30', $CenterZ );
		$s .= $this->gc( '39', $Thickness );
		$s .= $this->gc( '40', $Radius );
		$s .= $this->gc( '50', $AngleStart );
		$s .= $this->gc( '51', $AngleEnd );

		return $s;
	}


	/**
	 * Add DXF Arc to entities
	 *
	 * @param $Layer
	 * @param $CenterX
	 * @param $CenterY
	 * @param $CenterZ
	 * @param $Radius
	 * @param $Thickness
	 * @param $AngleStart
	 * @param $AngleEnd
	 * @return FDXF
	 */
	public function AddArc(
		$Layer = "0",
		$CenterX = 0,
		$CenterY = 0,
		$CenterZ = 0,
		$Radius = 0,
		$Thickness = 0,
		$AngleStart = 0,
		$AngleEnd = 0
	) {
		$this->entities .= $this->Arc(
			$Layer,
			$CenterX,
			$CenterY,
			$CenterZ,
			$Radius,
			$Thickness,
			$AngleStart,
			$AngleEnd
		);

		return $this;
	}


	/**
	 * DXF polyline start string
	 *
	 * @param $Layer
	 * @param $StartX
	 * @param $StartY
	 * @param $StartZ
	 * @param $Thickness
	 * @return string
	 */
	public function PlineStart(
		$Layer = "0",
		$StartX = 0,
		$StartY = 0,
		$StartZ = 0,
		$Thickness = 0
	) {
		$seed = $this->GetHANDSEED();
		$this->SetHANDSEED( (int)$seed + 1 );

		$s = '';
		$s .= $this->gc( '0', 'POLYLINE' );
		$s .= $this->gc( '5', dechex( $seed ) );
		$s .= $this->gc( '8', $Layer );
		$s .= $this->gc( '66', '     1' );

		//--- Start Points ---
		$s .= $this->gc( '10', $StartX );
		$s .= $this->gc( '20', $StartY );
		$s .= $this->gc( '30', $StartZ );
		$s .= $this->gc( '39', $Thickness );
		$s .= $this->gc( '70', '     1' );

		return $s;
	}


	/**
	 * Add DXF polyline start
	 *
	 * @param $Layer
	 * @param $StartX
	 * @param $StartY
	 * @param $StartZ
	 * @param $Thickness
	 * @return FDXF
	 */
	public function AddPlineStart(
		$Layer = "0",
		$StartX = 0,
		$StartY = 0,
		$StartZ = 0,
		$Thickness = 0
	) {
		$this->entities .= $this->PlineStart(
			$Layer,
			$StartX,
			$StartY,
			$StartZ,
			$Thickness
		);

		return $this;
	}


	/**
	 * DXF polyline entity string
	 *
	 * The bulge is the tangent of 1/4 the included angle for an arc segment,
	 * made negative if the arc goes clockwise from the start point to the end point;
	 * a bulge of 0 indicates a straight segment, and a bulge of 1 is a semicircle.
	 * Bulge is Number 42. Autocad gives 16 digits for this.
	 *
	 * @param $Layer
	 * @param $X
	 * @param $Y
	 * @param $Z
	 * @param $Bulge
	 * @return string
	 */
	public function PlineEntity(
		$Layer = "0",
		$X = 0,
		$Y = 0,
		$Z = 0,
		$Bulge = 0
	) {
		$s = '';
		$s .= $this->gc( '0', 'VERTEX' );
		$s .= $this->gc( '8', $Layer );
		$s .= $this->gc( '10', $X );
		$s .= $this->gc( '20', $Y );
		$s .= $this->gc( '30', $Z );
		if( $Bulge !== 0 ) {
			//--- Bulge (Radius) ---
			$s .= $this->gc( '42', $Bulge );
		}

		return $s;
	}


	/**
	 * Add DXF polyline to entities string
	 *
	 * @param $Layer
	 * @param $X
	 * @param $Y
	 * @param $Z
	 * @param $Bulge
	 * @return FDXF
	 */
	public function AddPlineEntity(
		$Layer = "0",
		$X = 0,
		$Y = 0,
		$Z = 0,
		$Bulge = 0
	) {
		$this->entities .= $this->PlineEntity(
			$Layer,
			$X,
			$Y,
			$Z,
			$Bulge
		);

		return $this;
	}


	/**
	 * DXF polyline close entity string
	 *
	 * @param $Layer
	 * @return string
	 */
	public function PlineClose(
		$Layer = "0"
	) {
		$s = '';
		$s .= $this->gc( '0', 'SEQEND' );
		$s .= $this->gc( '8', $Layer );

		return $s;
	}


	/**
	 * Add DXF polyline close to entities
	 *
	 * @param $Layer
	 * @return FDXF
	 */
	public function AddPlineClose(
		$Layer = "0"
	) {
		$this->entities .= $this->PlineClose(
			$Layer
		);

		return $this;
	}


	/**
	 * DXF text entity string
	 *
	 * @param $Layer
	 * @param $StartX
	 * @param $StartY
	 * @param $StartZ
	 * @param $TextHeight
	 * @param $Rotation
	 * @param $Text
	 * @return string
	 */
	public function Text(
		$Layer = "0",
		$StartX = 0,
		$StartY = 0,
		$StartZ = 0,
		$TextHeight = 0,
		$Rotation = 0,
		$Text = ' '
	) {
		$seed = $this->GetHANDSEED();
		$this->SetHANDSEED( (int)$seed + 1 );

		$s = '';
		$s .= $this->gc( '0', 'TEXT' );
		$s .= $this->gc( '5', dechex( $seed ) );
		$s .= $this->gc( '8', $Layer );
		$s .= $this->gc( '6', 'CONTINUOUS' );
		$s .= $this->gc( '10', $StartX );
		$s .= $this->gc( '20', $StartY );
		$s .= $this->gc( '30', $StartZ );
		$s .= $this->gc( '40', $TextHeight );
		$s .= $this->gc( '50', $Rotation );
		$s .= $this->gc( '1', $Text );

		return $s;
	}


	/**
	 * Add DXF text to entities
	 *
	 * @param $Layer
	 * @param $StartX
	 * @param $StartY
	 * @param $StartZ
	 * @param $TextHeight
	 * @param $Rotation
	 * @param $Text
	 * @return FDXF
	 */
	public function AddText(
		$Layer = "0",
		$StartX = 0,
		$StartY = 0,
		$StartZ = 0,
		$TextHeight = 0,
		$Rotation = 0,
		$Text = ' '
	) {
		$this->entities .= $this->Text(
			$Layer,
			$StartX,
			$StartY,
			$StartZ,
			$TextHeight,
			$Rotation,
			$Text
		);

		return $this;
	}


	/**
	 * DXF block by name entity string
	 * Block string must be added in Block section.
	 *
	 * @param $Layer
	 * @param $BlockName
	 * @param $X
	 * @param $Y
	 * @param $Z
	 * @param $Rotation
	 * @return string
	 */
	public function BlockEntity(
		$Layer = "0",
		$BlockName = null,
		$X = 0,
		$Y = 0,
		$Z = 0,
		$Rotation = 0
	) {
		$seed = $this->GetHANDSEED();
		$this->SetHANDSEED( (int)$seed + 1 );

		$s = '';
		$s .= $this->gc( '0', 'INSERT' );
		$s .= $this->gc( '5', dechex( $seed ) );
		$s .= $this->gc( '8', $Layer );
		$s .= $this->gc( '2', $BlockName );
		$s .= $this->gc( '10', $X );
		$s .= $this->gc( '20', $Y );
		$s .= $this->gc( '30', $Z );
		$s .= $this->gc( '50', $Rotation );

		return $s;
	}


	/**
	 * Add DXF block by name to entities
	 * Block string must be added in Block section.
	 *
	 * @param $Layer
	 * @param $BlockName
	 * @param $X
	 * @param $Y
	 * @param $Z
	 * @param $Rotation
	 * @return FDXF
	 */
	public function AddBlockEntity(
		$Layer = "0",
		$BlockName = null,
		$X = 0,
		$Y = 0,
		$Z = 0,
		$Rotation = 0
	) {
		$this->entities .= $this->BlockEntity(
			$Layer,
			$BlockName,
			$X,
			$Y,
			$Z,
			$Rotation
		);

		return $this;
	}


	/**
	 * DXF rectangle enitiy string
	 *
	 * @param $Layer
	 * @param $StartX
	 * @param $StartY
	 * @param $StartZ
	 * @param $HeightX
	 * @param $WidthY
	 * @param $Radius
	 * @param $Thickness
	 * @param $Bot
	 * @param $Top
	 * @param $Right
	 * @param $Left
	 * @param $Offset
	 * @return string
	 */
	public function Rectangle(
		$Layer = "0",
		$StartX = 0,
		$StartY = 0,
		$StartZ = 0,
		$HeightX = 0,
		$WidthY = 0,
		$Radius = 0,
		$Thickness = 0,
		$Bot = 0,
		$Top = 0,
		$Right = 0,
		$Left = 0,
		$Offset = 0
	) {
		//--- Rectangle Offset Calculations ---
		$StartX = $StartX + ( $Bot - $Offset );
		$StartY = $StartY + ( $Right - $Offset );
		$HeightX = $HeightX - ( ( $Bot - $Offset ) + ( $Top - $Offset ) );
		$WidthY = $WidthY - ( ( $Right - $Offset ) + ( $Left - $Offset ) );

		//--- Standard 90 Degree Bulge (Used for Radii) ---
		$Bulge = "0.4142135623730951";

		$s = $this->PlineStart( $Layer, $StartX, $StartY, $StartZ, $Thickness );

		//--- Point A ---
		$X = $StartX;
		$Y = $StartY + ( $WidthY / 2 );
		$s .= $this->PlineEntity( $Layer, $X, $Y, $StartZ, 0 );

		//--- Point B ---
		if( $Radius > 0 ) {
			$X = $StartX;
			$Y = $StartY + $Radius;
			$s .= $this->PlineEntity( $Layer, $X, $Y, $StartZ, $Bulge );
		}

		//--- Point C ---
		$X = $StartX + $Radius;
		$Y = $StartY;
		$s .= $this->PlineEntity( $Layer, $X, $Y, $StartZ, 0 );

		//--- Point D ---
		if( $Radius > 0 ) {
			$X = $StartX + $HeightX - $Radius;
			$Y = $StartY;
			$s .= $this->PlineEntity( $Layer, $X, $Y, $StartZ, $Bulge );
		}

		//--- Point E ---
		$X = $StartX + $HeightX;
		$Y = $StartY + $Radius;
		$s .= $this->PlineEntity( $Layer, $X, $Y, $StartZ, 0 );

		//--- Point F ---
		if( $Radius > 0 ) {
			$X = $StartX + $HeightX;
			$Y = $StartY + $WidthY - $Radius;
			$s .= $this->PlineEntity( $Layer, $X, $Y, $StartZ, $Bulge );
		}

		//--- Point G ---
		$X = $StartX + $HeightX - $Radius;
		$Y = $StartY + $WidthY;
		$s .= $this->PlineEntity( $Layer, $X, $Y, $StartZ, 0 );

		//--- Point H ---
		if( $Radius > 0 ) {
			$X = $StartX + $Radius;
			$Y = $StartY + $WidthY;
			$s .= $this->PlineEntity( $Layer, $X, $Y, $StartZ, $Bulge );
		}

		//--- Point I ---
		$X = $StartX;
		$Y = $StartY + $WidthY - $Radius;
		$s .= $this->PlineEntity( $Layer, $X, $Y, $StartZ, 0 );

		//--- End and Return to Start ---
		$s .= $this->PlineClose( $Layer );
		return $s;
	}


	/**
	 * Add DXF rectangle to entities
	 *
	 * @param $Layer
	 * @param $StartX
	 * @param $StartY
	 * @param $StartZ
	 * @param $HeightX
	 * @param $WidthY
	 * @param $Radius
	 * @param $Thickness
	 * @param $Bot
	 * @param $Top
	 * @param $Right
	 * @param $Left
	 * @param $Offset
	 * @return FDXF
	 */
	public function AddRectangle(
		$Layer = "0",
		$StartX = 0,
		$StartY = 0,
		$StartZ = 0,
		$HeightX = 0,
		$WidthY = 0,
		$Radius = 0,
		$Thickness = 0,
		$Bot = 0,
		$Top = 0,
		$Right = 0,
		$Left = 0,
		$Offset = 0
	) {
		$this->entities .= $this->Rectangle(
			$Layer,
			$StartX,
			$StartY,
			$StartZ,
			$HeightX,
			$WidthY,
			$Radius,
			$Thickness,
			$Bot,
			$Top,
			$Right,
			$Left,
			$Offset
		);

		return $this;
	}


}