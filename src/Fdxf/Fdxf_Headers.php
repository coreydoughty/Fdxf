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
 * Build DXF ASCII files header.
 *
 * Class Fdxf_Headers
 * @package Fdxf
 */
class Fdxf_Headers extends Fdxf_Base
{
	/**
	 * Application name and version for header comment.
	 * @var string
	 */
	private $APP = 'FDXF 0.1.0';

	/**
	 * @var string
	 */
	private $ACADVER = 'AC1009';

	/**
	 * @var array
	 */
	private $INSBASE = array( 'X' => '0.0', 'Y' => '0.0', 'Z' => '0.0' );

	/**
	 * @var array
	 */
	private $EXTMIN = array( 'X' => '1.0000000000000000E+20', 'Y' => '1.0000000000000000E+20', 'Z' => '1.0000000000000000E+20' );

	/**
	 * @var array
	 */
	private $EXTMAX = array( 'X' => '-1.0000000000000000E+20', 'Y' => '-1.0000000000000000E+20', 'Z' => '-1.0000000000000000E+20' );

	/**
	 * @var array
	 */
	private $LIMMIN = array( 'X' => '0.0', 'Y' => '0.0' );

	/**
	 * @var array
	 */
	private $LIMMAX = array( 'X' => '12.0', 'Y' => '9.0' );

	/**
	 * @var string
	 */
	private $ORTHOMODE = '0';

	/**
	 * @var string
	 */
	private $REGENMODE = '1';

	/**
	 * @var string
	 */
	private $FILLMODE = '1';

	/**
	 * @var string
	 */
	private $QTEXTMODE = '0';

	/**
	 * @var string
	 */
	private $MIRRTEXT = '0';

	/**
	 * @var string
	 */
	private $DRAGMODE = '2';

	/**
	 * @var string
	 */
	private $LTSCALE = '1.0';

	/**
	 * @var string
	 */
	private $OSMODE = '0';

	/**
	 * @var string
	 */
	private $ATTMODE = '1';

	/**
	 * @var string
	 */
	private $TEXTSIZE = '0.2';

	/**
	 * @var string
	 */
	private $TRACEWID = '0.05';

	/**
	 * @var string
	 */
	private $TEXTSTYLE = 'STANDARD';

	/**
	 * @var string
	 */
	private $CLAYER = '0';

	/**
	 * @var string
	 */
	private $CELTYPE = 'BYLAYER';

	/**
	 * @var string
	 */
	private $CECOLOR = '256';

	/**
	 * @var string
	 */
	private $DIMSCALE = '1.0';

	/**
	 * @var string
	 */
	private $DIMASZ = '0.18';

	/**
	 * @var string
	 */
	private $DIMEXO = '0.0625';

	/**
	 * @var string
	 */
	private $DIMDLI = '0.38';

	/**
	 * @var string
	 */
	private $DIMRND = '0.0';

	/**
	 * @var string
	 */
	private $DIMDLE = '0.0';

	/**
	 * @var string
	 */
	private $DIMEXE = '0.18';

	/**
	 * @var string
	 */
	private $DIMTP = '0.0';

	/**
	 * @var string
	 */
	private $DIMTM = '0.0';

	/**
	 * @var string
	 */
	private $DIMTXT = '0.18';

	/**
	 * @var string
	 */
	private $DIMCEN = '0.09';

	/**
	 * @var string
	 */
	private $DIMTSZ = '0.0';

	/**
	 * @var string
	 */
	private $DIMTOL = '0';

	/**
	 * @var string
	 */
	private $DIMLIM = '0';

	/**
	 * @var string
	 */
	private $DIMTIH = '1';

	/**
	 * @var string
	 */
	private $DIMTOH = '1';

	/**
	 * @var string
	 */
	private $DIMSE1 = '0';

	/**
	 * @var string
	 */
	private $DIMSE2 = '0';

	/**
	 * @var string
	 */
	private $DIMTAD = '0';

	/**
	 * @var string
	 */
	private $DIMZIN = '0';

	/**
	 * @var string
	 */
	private $DIMBLK = '';

	/**
	 * @var string
	 */
	private $DIMASO = '1';

	/**
	 * @var string
	 */
	private $DIMSHO = '1';

	/**
	 * @var string
	 */
	private $DIMPOST = '';

	/**
	 * @var string
	 */
	private $DIMAPOST = '';

	/**
	 * @var string
	 */
	private $DIMALT = '0';

	/**
	 * @var string
	 */
	private $DIMALTD = '2';

	/**
	 * @var string
	 */
	private $DIMALTF = '25.3999999999999986';

	/**
	 * @var string
	 */
	private $DIMLFAC = '1.0';

	/**
	 * @var string
	 */
	private $DIMTOFL = '0';

	/**
	 * @var string
	 */
	private $DIMTVP = '0.0';

	/**
	 * @var string
	 */
	private $DIMTIX = '0';

	/**
	 * @var string
	 */
	private $DIMSOXD = '0';

	/**
	 * @var string
	 */
	private $DIMSAH = '0';

	/**
	 * @var string
	 */
	private $DIMBLK1 = '';

	/**
	 * @var string
	 */
	private $DIMBLK2 = '';

	/**
	 * @var string
	 */
	private $DIMSTYLE = 'STANDARD';

	/**
	 * @var string
	 */
	private $DIMCLRD = '0';

	/**
	 * @var string
	 */
	private $DIMCLRE = '0';

	/**
	 * @var string
	 */
	private $DIMCLRT = '0';

	/**
	 * @var string
	 */
	private $DIMTFAC = '1.0';

	/**
	 * @var string
	 */
	private $DIMGAP = '0.09';

	/**
	 * @var string
	 */
	private $LUNITS = '2';

	/**
	 * @var string
	 */
	private $LUPREC = '4';

	/**
	 * @var string
	 */
	private $SKETCHINC = '0.1';

	/**
	 * @var string
	 */
	private $FILLETRAD = '0.0';

	/**
	 * @var string
	 */
	private $AUNITS = '0';

	/**
	 * @var string
	 */
	private $AUPREC = '0';

	/**
	 * @var string
	 */
	private $MENU = '.';

	/**
	 * @var string
	 */
	private $ELEVATION = '0.0';

	/**
	 * @var string
	 */
	private $PELEVATION = '0.0';

	/**
	 * @var string
	 */
	private $THICKNESS = '0.0';

	/**
	 * @var string
	 */
	private $LIMCHECK = '0';

	/**
	 * @var string
	 */
	private $BLIPMODE = '0';

	/**
	 * @var string
	 */
	private $CHAMFERA = '0.0';

	/**
	 * @var string
	 */
	private $CHAMFERB = '0.0';

	/**
	 * @var string
	 */
	private $SKPOLY = '0';

	/**
	 * @var string
	 */
	private $USRTIMER = '1';

	/**
	 * @var string
	 */
	private $ANGBASE = '0.0';

	/**
	 * @var string
	 */
	private $ANGDIR = '0';

	/**
	 * @var string
	 */
	private $PDMODE = '0';

	/**
	 * @var string
	 */
	private $PDSIZE = '0.0';

	/**
	 * @var string
	 */
	private $PLINEWID = '0.0';

	/**
	 * @var string
	 */
	private $COORDS = '1';

	/**
	 * @var string
	 */
	private $SPLFRAME = '0';

	/**
	 * @var string
	 */
	private $SPLINETYPE = '6';

	/**
	 * @var string
	 */
	private $SPLINESEGS = '8';

	/**
	 * @var string
	 */
	private $ATTDIA = '1';

	/**
	 * @var string
	 */
	private $ATTREQ = '1';

	/**
	 * @var string
	 */
	private $HANDLING = '1';

	/**
	 * @var string
	 */
	private $HANDSEED = '1';

	/**
	 * @var string
	 */
	private $SURFTAB1 = '6';

	/**
	 * @var string
	 */
	private $SURFTAB2 = '6';

	/**
	 * @var string
	 */
	private $SURFTYPE = '6';

	/**
	 * @var string
	 */
	private $SURFU = '6';

	/**
	 * @var string
	 */
	private $SURFV = '6';

	/**
	 * @var string
	 */
	private $UCSNAME = '';

	/**
	 * @var array
	 */
	private $UCSORG = array( 'X' => '0.0', 'Y' => '0.0', 'Z' => '0.0' );

	/**
	 * @var array
	 */
	private $UCSXDIR = array( 'X' => '1.0', 'Y' => '0.0', 'Z' => '0.0' );

	/**
	 * @var array
	 */
	private $UCSYDIR = array( 'X' => '0.0', 'Y' => '1.0', 'Z' => '0.0' );

	/**
	 * @var string
	 */
	private $PUCSNAME = '';

	/**
	 * @var array
	 */
	private $PUCSORG = array( 'X' => '0.0', 'Y' => '0.0', 'Z' => '0.0' );

	/**
	 * @var array
	 */
	private $PUCSXDIR = array( 'X' => '1.0', 'Y' => '0.0', 'Z' => '0.0' );

	/**
	 * @var array
	 */
	private $PUCSYDIR = array( 'X' => '0.0', 'Y' => '1.0', 'Z' => '0.0' );

	/**
	 * @var string
	 */
	private $USERI1 = '0';

	/**
	 * @var string
	 */
	private $USERI2 = '0';

	/**
	 * @var string
	 */
	private $USERI3 = '0';

	/**
	 * @var string
	 */
	private $USERI4 = '0';

	/**
	 * @var string
	 */
	private $USERI5 = '0';

	/**
	 * @var string
	 */
	private $USERR1 = '0';

	/**
	 * @var string
	 */
	private $USERR2 = '0';

	/**
	 * @var string
	 */
	private $USERR3 = '0';

	/**
	 * @var string
	 */
	private $USERR4 = '0';

	/**
	 * @var string
	 */
	private $USERR5 = '0';

	/**
	 * @var string
	 */
	private $WORLDVIEW = '1';

	/**
	 * @var string
	 */
	private $SHADEDGE = '3';

	/**
	 * @var string
	 */
	private $SHADEDIF = '70';

	/**
	 * @var string
	 */
	private $TILEMODE = '1';

	/**
	 * @var string
	 */
	private $MAXACTVP = '64';

	/**
	 * @var string
	 */
	private $PLIMCHECK = '0';

	/**
	 * @var array
	 */
	private $PEXTMIN = array( 'X' => '0.0', 'Y' => '0.0', 'Z' => '0.0' );

	/**
	 * @var array
	 */
	private $PEXTMAX = array( 'X' => '0.0', 'Y' => '0.0', 'Z' => '0.0' );

	/**
	 * @var array
	 */
	private $PLIMMIN = array( 'X' => '0.0', 'Y' => '0.0' );

	/**
	 * @var array
	 */
	private $PLIMMAX = array( 'X' => '12.0', 'Y' => '9.0' );

	/**
	 * @var string
	 */
	private $UNITMODE = '0';

	/**
	 * @var string
	 */
	private $VISRETAIN = '1';

	/**
	 * @var string
	 */
	private $PLINEGEN = '0';

	/**
	 * @var string
	 */
	private $PSLTSCALE = '1';


	/**
	 * FDXF_Headers constructor.
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
	 * Add a typical DXF header string
	 *
	 * @return string
	 */
	public function BuildHeaders() {
		$s = '';

		$s .= $this->gc( '0', 'SECTION' );
		$s .= $this->gc( '2', 'HEADER' );

		$s .= $this->gc( '999', $this->APP );

		$s .= $this->gc( '9', '$ACADVER' );
		$s .= $this->gc( '1', $this->ACADVER );

		$s .= $this->gc( '9', '$INSBASE' );
		$s .= $this->gc( '10', $this->INSBASE[ 'X' ] );
		$s .= $this->gc( '20', $this->INSBASE[ 'Y' ] );
		$s .= $this->gc( '30', $this->INSBASE[ 'Z' ] );

		$s .= $this->gc( '9', '$EXTMIN' );
		$s .= $this->gc( '10', $this->EXTMIN[ 'X' ] );
		$s .= $this->gc( '20', $this->EXTMIN[ 'Y' ] );
		$s .= $this->gc( '30', $this->EXTMIN[ 'Z' ] );

		$s .= $this->gc( '9', '$EXTMAX' );
		$s .= $this->gc( '10', $this->EXTMAX[ 'X' ] );
		$s .= $this->gc( '20', $this->EXTMAX[ 'Y' ] );
		$s .= $this->gc( '30', $this->EXTMAX[ 'Z' ] );

		$s .= $this->gc( '9', '$LIMMIN' );
		$s .= $this->gc( '10', $this->LIMMIN[ 'X' ] );
		$s .= $this->gc( '20', $this->LIMMIN[ 'Y' ] );

		$s .= $this->gc( '9', '$LIMMAX' );
		$s .= $this->gc( '10', $this->LIMMAX[ 'X' ] );
		$s .= $this->gc( '20', $this->LIMMAX[ 'Y' ] );

		$s .= $this->gc( '9', '$ORTHOMODE' );
		$s .= $this->gc( '70', $this->ORTHOMODE );

		$s .= $this->gc( '9', '$REGENMODE' );
		$s .= $this->gc( '70', $this->REGENMODE );

		$s .= $this->gc( '9', '$FILLMODE' );
		$s .= $this->gc( '70', $this->FILLMODE );

		$s .= $this->gc( '9', '$QTEXTMODE' );
		$s .= $this->gc( '70', $this->QTEXTMODE );

		$s .= $this->gc( '9', '$MIRRTEXT' );
		$s .= $this->gc( '70', $this->MIRRTEXT );

		$s .= $this->gc( '9', '$DRAGMODE' );
		$s .= $this->gc( '70', $this->DRAGMODE );

		$s .= $this->gc( '9', '$LTSCALE' );
		$s .= $this->gc( '40', $this->LTSCALE );

		$s .= $this->gc( '9', '$OSMODE' );
		$s .= $this->gc( '70', $this->OSMODE );

		$s .= $this->gc( '9', '$ATTMODE' );
		$s .= $this->gc( '70', $this->ATTMODE );

		$s .= $this->gc( '9', '$TEXTSIZE' );
		$s .= $this->gc( '40', $this->TEXTSIZE );

		$s .= $this->gc( '9', '$TRACEWID' );
		$s .= $this->gc( '40', $this->TRACEWID );

		$s .= $this->gc( '9', '$TEXTSTYLE' );
		$s .= $this->gc( '7', $this->TEXTSTYLE );

		$s .= $this->gc( '9', '$CLAYER' );
		$s .= $this->gc( '8', $this->CLAYER );

		$s .= $this->gc( '9', '$CELTYPE' );
		$s .= $this->gc( '6', $this->CELTYPE );

		$s .= $this->gc( '9', '$CECOLOR' );
		$s .= $this->gc( '62', $this->CECOLOR );

		$s .= $this->gc( '9', '$DIMSCALE' );
		$s .= $this->gc( '40', $this->DIMSCALE );

		$s .= $this->gc( '9', '$DIMASZ' );
		$s .= $this->gc( '40', $this->DIMASZ );

		$s .= $this->gc( '9', '$DIMEXO' );
		$s .= $this->gc( '40', $this->DIMEXO );

		$s .= $this->gc( '9', '$DIMDLI' );
		$s .= $this->gc( '40', $this->DIMDLI );

		$s .= $this->gc( '9', '$DIMRND' );
		$s .= $this->gc( '40', $this->DIMRND );

		$s .= $this->gc( '9', '$DIMDLE' );
		$s .= $this->gc( '40', $this->DIMDLE );

		$s .= $this->gc( '9', '$DIMEXE' );
		$s .= $this->gc( '40', $this->DIMEXE );

		$s .= $this->gc( '9', '$DIMTP' );
		$s .= $this->gc( '40', $this->DIMTP );

		$s .= $this->gc( '9', '$DIMTM' );
		$s .= $this->gc( '40', $this->DIMTM );

		$s .= $this->gc( '9', '$DIMTXT' );
		$s .= $this->gc( '40', $this->DIMTXT );

		$s .= $this->gc( '9', '$DIMCEN' );
		$s .= $this->gc( '40', $this->DIMCEN );

		$s .= $this->gc( '9', '$DIMTSZ' );
		$s .= $this->gc( '40', $this->DIMTSZ );

		$s .= $this->gc( '9', '$DIMTOL' );
		$s .= $this->gc( '70', $this->DIMTOL );

		$s .= $this->gc( '9', '$DIMLIM' );
		$s .= $this->gc( '70', $this->DIMLIM );

		$s .= $this->gc( '9', '$DIMTIH' );
		$s .= $this->gc( '70', $this->DIMTIH );

		$s .= $this->gc( '9', '$DIMTOH' );
		$s .= $this->gc( '70', $this->DIMTOH );

		$s .= $this->gc( '9', '$DIMSE1' );
		$s .= $this->gc( '70', $this->DIMSE1 );

		$s .= $this->gc( '9', '$DIMSE2' );
		$s .= $this->gc( '70', $this->DIMSE2 );

		$s .= $this->gc( '9', '$DIMTAD' );
		$s .= $this->gc( '70', $this->DIMTAD );

		$s .= $this->gc( '9', '$DIMZIN' );
		$s .= $this->gc( '70', $this->DIMZIN );

		$s .= $this->gc( '9', '$DIMBLK' );
		$s .= $this->gc( '1', $this->DIMBLK );

		$s .= $this->gc( '9', '$DIMASO' );
		$s .= $this->gc( '70', $this->DIMASO );

		$s .= $this->gc( '9', '$DIMSHO' );
		$s .= $this->gc( '70', $this->DIMSHO );

		$s .= $this->gc( '9', '$DIMPOST' );
		$s .= $this->gc( '1', $this->DIMPOST );

		$s .= $this->gc( '9', '$DIMAPOST' );
		$s .= $this->gc( '1', $this->DIMAPOST );

		$s .= $this->gc( '9', '$DIMALT' );
		$s .= $this->gc( '70', $this->DIMALT );

		$s .= $this->gc( '9', '$DIMALTD' );
		$s .= $this->gc( '70', $this->DIMALTD );

		$s .= $this->gc( '9', '$DIMALTF' );
		$s .= $this->gc( '40', $this->DIMALTF );

		$s .= $this->gc( '9', '$DIMLFAC' );
		$s .= $this->gc( '40', $this->DIMLFAC );

		$s .= $this->gc( '9', '$DIMTOFL' );
		$s .= $this->gc( '70', $this->DIMTOFL );

		$s .= $this->gc( '9', '$DIMTVP' );
		$s .= $this->gc( '40', $this->DIMTVP );

		$s .= $this->gc( '9', '$DIMTIX' );
		$s .= $this->gc( '70', $this->DIMTIX );

		$s .= $this->gc( '9', '$DIMSOXD' );
		$s .= $this->gc( '70', $this->DIMSOXD );

		$s .= $this->gc( '9', '$DIMSAH' );
		$s .= $this->gc( '70', $this->DIMSAH );

		$s .= $this->gc( '9', '$DIMBLK1' );
		$s .= $this->gc( '1', $this->DIMBLK1 );

		$s .= $this->gc( '9', '$DIMBLK2' );
		$s .= $this->gc( '1', $this->DIMBLK2 );

		$s .= $this->gc( '9', '$DIMSTYLE' );
		$s .= $this->gc( '2', $this->DIMSTYLE );

		$s .= $this->gc( '9', '$DIMCLRD' );
		$s .= $this->gc( '70', $this->DIMCLRD );

		$s .= $this->gc( '9', '$DIMCLRE' );
		$s .= $this->gc( '70', $this->DIMCLRE );

		$s .= $this->gc( '9', '$DIMCLRT' );
		$s .= $this->gc( '70', $this->DIMCLRT );

		$s .= $this->gc( '9', '$DIMTFAC' );
		$s .= $this->gc( '40', $this->DIMTFAC );

		$s .= $this->gc( '9', '$DIMGAP' );
		$s .= $this->gc( '40', $this->DIMGAP );

		$s .= $this->gc( '9', '$LUNITS' );
		$s .= $this->gc( '70', $this->LUNITS );

		$s .= $this->gc( '9', '$LUPREC' );
		$s .= $this->gc( '70', $this->LUPREC );

		$s .= $this->gc( '9', '$SKETCHINC' );
		$s .= $this->gc( '40', $this->SKETCHINC );

		$s .= $this->gc( '9', '$FILLETRAD' );
		$s .= $this->gc( '40', $this->FILLETRAD );

		$s .= $this->gc( '9', '$AUNITS' );
		$s .= $this->gc( '70', $this->AUNITS );

		$s .= $this->gc( '9', '$AUPREC' );
		$s .= $this->gc( '70', $this->AUPREC );

		$s .= $this->gc( '9', '$MENU' );
		$s .= $this->gc( '1', $this->MENU );

		$s .= $this->gc( '9', '$ELEVATION' );
		$s .= $this->gc( '40', $this->ELEVATION );

		$s .= $this->gc( '9', '$PELEVATION' );
		$s .= $this->gc( '40', $this->PELEVATION );

		$s .= $this->gc( '9', '$THICKNESS' );
		$s .= $this->gc( '40', $this->THICKNESS );

		$s .= $this->gc( '9', '$LIMCHECK' );
		$s .= $this->gc( '70', $this->LIMCHECK );

		$s .= $this->gc( '9', '$BLIPMODE' );
		$s .= $this->gc( '70', $this->BLIPMODE );

		$s .= $this->gc( '9', '$CHAMFERA' );
		$s .= $this->gc( '40', $this->CHAMFERA );

		$s .= $this->gc( '9', '$CHAMFERB' );
		$s .= $this->gc( '40', $this->CHAMFERB );

		$s .= $this->gc( '9', '$SKPOLY' );
		$s .= $this->gc( '70', $this->SKPOLY );

		$s .= $this->gc( '9', '$TDCREATE' );
		$s .= $this->gc( '40', ( time() / 86400 ) + 2440587.5 );

		$s .= $this->gc( '9', '$TDUPDATE' );
		$s .= $this->gc( '40', ( time() / 86400 ) + 2440587.5 );

		$s .= $this->gc( '9', '$TDINDWG' );
		$s .= $this->gc( '40', '0.0000000001' );

		$s .= $this->gc( '9', '$TDUSRTIMER' );
		$s .= $this->gc( '40', '0.0000000001' );

		$s .= $this->gc( '9', '$USRTIMER' );
		$s .= $this->gc( '70', $this->USRTIMER );

		$s .= $this->gc( '9', '$ANGBASE' );
		$s .= $this->gc( '50', $this->ANGBASE );

		$s .= $this->gc( '9', '$ANGDIR' );
		$s .= $this->gc( '70', $this->ANGDIR );

		$s .= $this->gc( '9', '$PDMODE' );
		$s .= $this->gc( '70', $this->PDMODE );

		$s .= $this->gc( '9', '$PDSIZE' );
		$s .= $this->gc( '40', $this->PDSIZE );

		$s .= $this->gc( '9', '$PLINEWID' );
		$s .= $this->gc( '40', $this->PLINEWID );

		$s .= $this->gc( '9', '$COORDS' );
		$s .= $this->gc( '70', $this->COORDS );

		$s .= $this->gc( '9', '$SPLFRAME' );
		$s .= $this->gc( '70', $this->SPLFRAME );

		$s .= $this->gc( '9', '$SPLINETYPE' );
		$s .= $this->gc( '70', $this->SPLINETYPE );

		$s .= $this->gc( '9', '$SPLINESEGS' );
		$s .= $this->gc( '70', $this->SPLINESEGS );

		$s .= $this->gc( '9', '$ATTDIA' );
		$s .= $this->gc( '70', $this->ATTDIA );

		$s .= $this->gc( '9', '$ATTREQ' );
		$s .= $this->gc( '70', $this->ATTREQ );

		$s .= $this->gc( '9', '$HANDLING' );
		$s .= $this->gc( '70', $this->HANDLING );

		// @ToDo: Omitted as it seems to cause errors
		//$s .= $this->gc( '9', '$HANDSEED' );
		//$s .= $this->gc( '5', dechex( $this->HANDSEED ) );

		$s .= $this->gc( '9', '$SURFTAB1' );
		$s .= $this->gc( '70', $this->SURFTAB1 );

		$s .= $this->gc( '9', '$SURFTAB2' );
		$s .= $this->gc( '70', $this->SURFTAB2 );

		$s .= $this->gc( '9', '$SURFTYPE' );
		$s .= $this->gc( '70', $this->SURFTYPE );

		$s .= $this->gc( '9', '$SURFU' );
		$s .= $this->gc( '70', $this->SURFU );

		$s .= $this->gc( '9', '$SURFV' );
		$s .= $this->gc( '70', $this->SURFV );

		$s .= $this->gc( '9', '$UCSNAME' );
		$s .= $this->gc( '2', $this->UCSNAME );

		$s .= $this->gc( '9', '$UCSORG' );
		$s .= $this->gc( '10', $this->UCSORG[ 'X' ] );
		$s .= $this->gc( '20', $this->UCSORG[ 'Y' ] );
		$s .= $this->gc( '30', $this->UCSORG[ 'Z' ] );

		$s .= $this->gc( '9', '$UCSXDIR' );
		$s .= $this->gc( '10', $this->UCSXDIR[ 'X' ] );
		$s .= $this->gc( '20', $this->UCSXDIR[ 'Y' ] );
		$s .= $this->gc( '30', $this->UCSXDIR[ 'Z' ] );

		$s .= $this->gc( '9', '$UCSYDIR' );
		$s .= $this->gc( '10', $this->UCSYDIR[ 'X' ] );
		$s .= $this->gc( '20', $this->UCSYDIR[ 'Y' ] );
		$s .= $this->gc( '30', $this->UCSYDIR[ 'Z' ] );

		$s .= $this->gc( '9', '$PUCSNAME' );
		$s .= $this->gc( '2', $this->PUCSNAME );

		$s .= $this->gc( '9', '$PUCSORG' );
		$s .= $this->gc( '10', $this->PUCSORG[ 'X' ] );
		$s .= $this->gc( '20', $this->PUCSORG[ 'Y' ] );
		$s .= $this->gc( '30', $this->PUCSORG[ 'Z' ] );

		$s .= $this->gc( '9', '$PUCSXDIR' );
		$s .= $this->gc( '10', $this->PUCSXDIR[ 'X' ] );
		$s .= $this->gc( '20', $this->PUCSXDIR[ 'Y' ] );
		$s .= $this->gc( '30', $this->PUCSXDIR[ 'Z' ] );

		$s .= $this->gc( '9', '$PUCSYDIR' );
		$s .= $this->gc( '10', $this->PUCSYDIR[ 'X' ] );
		$s .= $this->gc( '20', $this->PUCSYDIR[ 'Y' ] );
		$s .= $this->gc( '30', $this->PUCSYDIR[ 'Z' ] );

		$s .= $this->gc( '9', '$USERI1' );
		$s .= $this->gc( '70', $this->USERI1 );

		$s .= $this->gc( '9', '$USERI2' );
		$s .= $this->gc( '70', $this->USERI2 );

		$s .= $this->gc( '9', '$USERI3' );
		$s .= $this->gc( '70', $this->USERI3 );

		$s .= $this->gc( '9', '$USERI4' );
		$s .= $this->gc( '70', $this->USERI4 );

		$s .= $this->gc( '9', '$USERI5' );
		$s .= $this->gc( '70', $this->USERI5 );

		$s .= $this->gc( '9', '$USERR1' );
		$s .= $this->gc( '40', $this->USERR1 );

		$s .= $this->gc( '9', '$USERR2' );
		$s .= $this->gc( '40', $this->USERR2 );

		$s .= $this->gc( '9', '$USERR3' );
		$s .= $this->gc( '40', $this->USERR3 );

		$s .= $this->gc( '9', '$USERR4' );
		$s .= $this->gc( '40', $this->USERR4 );

		$s .= $this->gc( '9', '$USERR5' );
		$s .= $this->gc( '40', $this->USERR5 );

		$s .= $this->gc( '9', '$WORLDVIEW' );
		$s .= $this->gc( '70', $this->WORLDVIEW );

		$s .= $this->gc( '9', '$SHADEDGE' );
		$s .= $this->gc( '70', $this->SHADEDGE );

		$s .= $this->gc( '9', '$SHADEDIF' );
		$s .= $this->gc( '70', $this->SHADEDIF );

		$s .= $this->gc( '9', '$TILEMODE' );
		$s .= $this->gc( '70', $this->TILEMODE );

		$s .= $this->gc( '9', '$MAXACTVP' );
		$s .= $this->gc( '70', $this->MAXACTVP );

		$s .= $this->gc( '9', '$PLIMCHECK' );
		$s .= $this->gc( '70', $this->PLIMCHECK );

		$s .= $this->gc( '9', '$PEXTMIN' );
		$s .= $this->gc( '10', $this->PEXTMIN[ 'X' ] );
		$s .= $this->gc( '20', $this->PEXTMIN[ 'Y' ] );
		$s .= $this->gc( '30', $this->PEXTMIN[ 'Z' ] );

		$s .= $this->gc( '9', '$PEXTMAX' );
		$s .= $this->gc( '10', $this->PEXTMAX[ 'X' ] );
		$s .= $this->gc( '20', $this->PEXTMAX[ 'Y' ] );
		$s .= $this->gc( '30', $this->PEXTMAX[ 'Z' ] );

		$s .= $this->gc( '9', '$PLIMMIN' );
		$s .= $this->gc( '10', $this->PLIMMIN[ 'X' ] );
		$s .= $this->gc( '20', $this->PLIMMIN[ 'Y' ] );

		$s .= $this->gc( '9', '$PLIMMAX' );
		$s .= $this->gc( '10', $this->PLIMMAX[ 'X' ] );
		$s .= $this->gc( '20', $this->PLIMMAX[ 'Y' ] );

		$s .= $this->gc( '9', '$UNITMODE' );
		$s .= $this->gc( '70', $this->UNITMODE );

		$s .= $this->gc( '9', '$VISRETAIN' );
		$s .= $this->gc( '70', $this->VISRETAIN );

		$s .= $this->gc( '9', '$PLINEGEN' );
		$s .= $this->gc( '70', $this->PLINEGEN );

		$s .= $this->gc( '9', '$PSLTSCALE' );
		$s .= $this->gc( '70', $this->PSLTSCALE );

		$s .= $this->gc( '0', 'ENDSEC' );

		return $s;
	}


	/**
	 * Set AutoCAD version.
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetVersion(
		$str
	) {
		$this->SetACADVER( $str );
		return $this;
	}

	/**
	 * The AutoCAD drawing database version number:
	 * AC1006 = R10, AC1009 = R11 and R12,
	 * AC1012 = R13, AC1014 = R14, AC1500 = AutoCAD 2000
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetACADVER(
		$str
	) {
		if(
			(string)$str == '10' ||
			(string)$str == 'R10'
		) {
			$this->ACADVER = 'AC1006';
		} else if(
			(string)$str == '11' ||
			(string)$str == 'R11' ||
			(string)$str == '12' ||
			(string)$str == 'R12'
		) {
			$this->ACADVER = 'AC1009';
		} else if(
			(string)$str == '13' ||
			(string)$str == 'R13'
		) {
			$this->ACADVER = 'AC1012';
		} else if(
			(string)$str == '14' ||
			(string)$str == 'R14'
		) {
			$this->ACADVER = 'AC1014';
		} else if(
			(string)$str == '2000'
		) {
			$this->ACADVER = 'AC1500';
		} else {
			$this->ACADVER = (string)$str;
		}

		return $this;
	}

	/**
	 * Insertion base set by BASE command (in WCS)
	 *
	 * @param string $X
	 * @param string $Y
	 * @param string $Z
	 * @return self
	 */
	public function SetINSBASE(
		$X,
		$Y,
		$Z
	) {
		$this->INSBASE = array(
			'X' => (string)$X,
			'Y' => (string)$Y,
			'Z' => (string)$Z
		);
		return $this;
	}

	/**
	 * X, Y, and Z drawing extents lower-left corner (in WCS)
	 *
	 * @param string $X
	 * @param string $Y
	 * @param string $Z
	 * @return self
	 */
	public function SetEXTMIN(
		$X,
		$Y,
		$Z
	) {
		$this->EXTMIN = array(
			'X' => (string)$X,
			'Y' => (string)$Y,
			'Z' => (string)$Z
		);
		return $this;
	}

	/**
	 * X, Y, and Z drawing extents upper-right corner (in WCS)
	 *
	 * @param string $X
	 * @param string $Y
	 * @param string $Z
	 * @return self
	 */
	public function SetEXTMAX(
		$X,
		$Y,
		$Z
	) {
		$this->EXTMAX = array(
			'X' => (string)$X,
			'Y' => (string)$Y,
			'Z' => (string)$Z
		);
		return $this;
	}

	/**
	 * XY drawing limits lower-left corner (in WCS)
	 *
	 * @param string $X
	 * @param string $Y
	 * @return self
	 */
	public function SetLIMMIN(
		$X,
		$Y
	) {
		$this->LIMMIN = array(
			'X' => (string)$X,
			'Y' => (string)$Y
		);
		return $this;
	}

	/**
	 * XY drawing limits upper-right corner (in WCS)
	 *
	 * @param string $X
	 * @param string $Y
	 * @return self
	 */
	public function SetLIMMAX(
		$X,
		$Y
	) {
		$this->LIMMAX = array(
			'X' => (string)$X,
			'Y' => (string)$Y
		);
		return $this;
	}

	/**
	 * Ortho mode on if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetORTHOMODE(
		$str
	) {
		$this->ORTHOMODE = (string)$str;
		return $this;
	}

	/**
	 * REGENAUTO mode on if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetREGENMODE(
		$str
	) {
		$this->REGENMODE = (string)$str;
		return $this;
	}

	/**
	 * Fill mode on if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetFILLMODE(
		$str
	) {
		$this->FILLMODE = (string)$str;
		return $this;
	}

	/**
	 * Quick text mode on if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetQTEXTMODE(
		$str
	) {
		$this->QTEXTMODE = (string)$str;
		return $this;
	}

	/**
	 * Mirror text if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetMIRRTEXT(
		$str
	) {
		$this->MIRRTEXT = (string)$str;
		return $this;
	}

	/**
	 * Drag mode
	 * 0 = off, 1 = on, 2 = auto
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDRAGMODE(
		$str
	) {
		$this->DRAGMODE = (string)$str;
		return $this;
	}

	/**
	 * Global linetype scale
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetLTSCALE(
		$str
	) {
		$this->LTSCALE = (string)$str;
		return $this;
	}

	/**
	 * Running object snap modes
	 *
	 * Here are the bitcodes that determine your snaps:
	 *    0 None
	 *    1 Endpoint
	 *    2 Midpoint
	 *    4 Center
	 *    8 Node
	 *   16 Quadrant
	 *   32 Intersection
	 *   64 Insertion
	 *  128 PERpendicular
	 *  256 Tangent
	 *  512 Nearest
	 * 1024 Quick
	 * 2048 Apparent Intersection
	 * 4096 Extension
	 * 8192 Parallel
	 *
	 * Add the codes for the object snaps that you prefer and then enter that value.
	 * For example if you like endpoint (1) and intersection (32) then set the OSMODE value to 33.
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetOSMODE(
		$str
	) {
		$this->OSMODE = (string)$str;
		return $this;
	}

	/**
	 * Attribute visibility
	 * 0 = none, 1 = normal, 2 = all
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetATTMODE(
		$str
	) {
		$this->ATTMODE = (string)$str;
		return $this;
	}

	/**
	 * Default text height
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetTEXTSIZE(
		$str
	) {
		$this->TEXTSIZE = (string)$str;
		return $this;
	}

	/**
	 * Default trace width
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetTRACEWID(
		$str
	) {
		$this->TRACEWID = (string)$str;
		return $this;
	}

	/**
	 * Current text style name
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetTEXTSTYLE(
		$str
	) {
		$this->TEXTSTYLE = (string)$str;
		return $this;
	}

	/**
	 * Current layer name
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetCLAYER(
		$str
	) {
		$this->CLAYER = (string)$str;
		return $this;
	}

	/**
	 * Entity linetype name, or BYBLOCK or BYLAYER
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetCELTYPE(
		$str
	) {
		$this->CELTYPE = (string)$str;
		return $this;
	}

	/**
	 * Entity color number; 0 = BYBLOCK, 256 = BYLAYER
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetCECOLOR(
		$str
	) {
		$this->CECOLOR = (string)$str;
		return $this;
	}

	/**
	 * Overall dimensioning scale factor
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMSCALE(
		$str
	) {
		$this->DIMSCALE = (string)$str;
		return $this;
	}

	/**
	 * Dimensioning arrow size
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMASZ(
		$str
	) {
		$this->DIMASZ = (string)$str;
		return $this;
	}

	/**
	 * Dimension Extension line offset
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMEXO(
		$str
	) {
		$this->DIMEXO = (string)$str;
		return $this;
	}

	/**
	 * Dimension line increment
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMDLI(
		$str
	) {
		$this->DIMDLI = (string)$str;
		return $this;
	}

	/**
	 * Dimension Rounding value for dimension distances
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMRND(
		$str
	) {
		$this->DIMRND = (string)$str;
		return $this;
	}

	/**
	 * Dimension line extension
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMDLE(
		$str
	) {
		$this->DIMDLE = (string)$str;
		return $this;
	}

	/**
	 * Extension line extension
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMEXE(
		$str
	) {
		$this->DIMEXE = (string)$str;
		return $this;
	}

	/**
	 * Plus tolerance
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMTP(
		$str
	) {
		$this->DIMTP = (string)$str;
		return $this;
	}

	/**
	 * Minus tolerance
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMTM(
		$str
	) {
		$this->DIMTM = (string)$str;
		return $this;
	}

	/**
	 * Dimensioning text height
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMTXT(
		$str
	) {
		$this->DIMTXT = (string)$str;
		return $this;
	}

	/**
	 * Size of center mark/lines
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMCEN(
		$str
	) {
		$this->DIMCEN = (string)$str;
		return $this;
	}

	/**
	 * Dimensioning tick size: 0 = no ticks
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMTSZ(
		$str
	) {
		$this->DIMTSZ = (string)$str;
		return $this;
	}

	/**
	 * Dimension tolerances generated if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMTOL(
		$str
	) {
		$this->DIMTOL = (string)$str;
		return $this;
	}

	/**
	 * Dimension limits generated if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMLIM(
		$str
	) {
		$this->DIMLIM = (string)$str;
		return $this;
	}

	/**
	 * Text inside horizontal if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMTIH(
		$str
	) {
		$this->DIMTIH = (string)$str;
		return $this;
	}

	/**
	 * Text outside horizontal if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMTOH(
		$str
	) {
		$this->DIMTOH = (string)$str;
		return $this;
	}

	/**
	 * First extension line suppressed if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMSE1(
		$str
	) {
		$this->DIMSE1 = (string)$str;
		return $this;
	}

	/**
	 * Second extension line suppressed if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMSE2(
		$str
	) {
		$this->DIMSE2 = (string)$str;
		return $this;
	}

	/**
	 * Text above dimension line if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMTAD(
		$str
	) {
		$this->DIMTAD = (string)$str;
		return $this;
	}

	/**
	 * Zero suppression for "feet & inch" dimensions
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMZIN(
		$str
	) {
		$this->DIMZIN = (string)$str;
		return $this;
	}

	/**
	 * Arrow block name
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMBLK(
		$str
	) {
		$this->DIMBLK = (string)$str;
		return $this;
	}

	/**
	 * 1 = create associative dimensioning, 0 = draw individual entities
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMASO(
		$str
	) {
		$this->DIMASO = (string)$str;
		return $this;
	}

	/**
	 * 1 = Recompute dimensions while dragging, 0 = drag original image
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMSHO(
		$str
	) {
		$this->DIMSHO = (string)$str;
		return $this;
	}

	/**
	 * General dimensioning suffix
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMPOST(
		$str
	) {
		$this->DIMPOST = (string)$str;
		return $this;
	}

	/**
	 * Alternate dimensioning suffix
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMAPOST(
		$str
	) {
		$this->DIMAPOST = (string)$str;
		return $this;
	}

	/**
	 * Alternate unit dimensioning performed if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMALT(
		$str
	) {
		$this->DIMALT = (string)$str;
		return $this;
	}

	/**
	 * Alternate unit decimal places
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMALTD(
		$str
	) {
		$this->DIMALTD = (string)$str;
		return $this;
	}

	/**
	 * Alternate unit scale factor
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMALTF(
		$str
	) {
		$this->DIMALTF = (string)$str;
		return $this;
	}

	/**
	 * Linear measurements scale factor
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMLFAC(
		$str
	) {
		$this->DIMLFAC = (string)$str;
		return $this;
	}

	/**
	 * If text outside extensions, force line extensions between extensions if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMTOFL(
		$str
	) {
		$this->DIMTOFL = (string)$str;
		return $this;
	}

	/**
	 * Text vertical position
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMTVP(
		$str
	) {
		$this->DIMTVP = (string)$str;
		return $this;
	}

	/**
	 * Force text inside extensions if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMTIX(
		$str
	) {
		$this->DIMTIX = (string)$str;
		return $this;
	}

	/**
	 * Suppress outside-extensions dimension lines if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMSOXD(
		$str
	) {
		$this->DIMSOXD = (string)$str;
		return $this;
	}

	/**
	 * Use separate arrow blocks if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMSAH(
		$str
	) {
		$this->DIMSAH = (string)$str;
		return $this;
	}

	/**
	 * First arrow block name
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMBLK1(
		$str
	) {
		$this->DIMBLK1 = (string)$str;
		return $this;
	}

	/**
	 * Second arrow block name
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMBLK2(
		$str
	) {
		$this->DIMBLK2 = (string)$str;
		return $this;
	}

	/**
	 * Dimension style name
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMSTYLE(
		$str
	) {
		$this->DIMSTYLE = (string)$str;
		return $this;
	}

	/**
	 * Dimension line color, range is 0 = BYBLOCK, 256 = BYLAYER
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMCLRD(
		$str
	) {
		$this->DIMCLRD = (string)$str;
		return $this;
	}

	/**
	 * Dimension extension line color, range is 0 = BYBLOCK, 256 = BYLAYER
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMCLRE(
		$str
	) {
		$this->DIMCLRE = (string)$str;
		return $this;
	}

	/**
	 * Dimension text color, range is 0 = BYBLOCK, 256 = BYLAYER
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMCLRT(
		$str
	) {
		$this->DIMCLRT = (string)$str;
		return $this;
	}

	/**
	 * Dimension tolerance display scale factor
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMTFAC(
		$str
	) {
		$this->DIMTFAC = (string)$str;
		return $this;
	}

	/**
	 * Dimension line gap
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetDIMGAP(
		$str
	) {
		$this->DIMGAP = (string)$str;
		return $this;
	}

	/**
	 * Units format for coordinates and distances
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetLUNITS(
		$str
	) {
		$this->LUNITS = (string)$str;
		return $this;
	}

	/**
	 * Units precision for coordinates and distances
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetLUPREC(
		$str
	) {
		$this->LUPREC = (string)$str;
		return $this;
	}

	/**
	 * Sketch record increment
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetSKETCHINC(
		$str
	) {
		$this->SKETCHINC = (string)$str;
		return $this;
	}

	/**
	 * Sketch record increment
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetFILLETRAD(
		$str
	) {
		$this->FILLETRAD = (string)$str;
		return $this;
	}

	/**
	 * Units format for angles
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetAUNITS(
		$str
	) {
		$this->AUNITS = (string)$str;
		return $this;
	}

	/**
	 * Units precision for angles
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetAUPREC(
		$str
	) {
		$this->AUPREC = (string)$str;
		return $this;
	}

	/**
	 * Name of menu file
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetMENU(
		$str
	) {
		$this->MENU = (string)$str;
		return $this;
	}

	/**
	 * Current elevation set by ELEV command
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetELEVATION(
		$str
	) {
		$this->ELEVATION = (string)$str;
		return $this;
	}

	/**
	 * Current paper space elevation
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetPELEVATION(
		$str
	) {
		$this->PELEVATION = (string)$str;
		return $this;
	}

	/**
	 * Current thickness set by ELEV command
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetTHICKNESS(
		$str
	) {
		$this->THICKNESS = (string)$str;
		return $this;
	}

	/**
	 * Nonzero if limits checking is on
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetLIMCHECK(
		$str
	) {
		$this->LIMCHECK = (string)$str;
		return $this;
	}

	/**
	 * Blip mode on if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetBLIPMODE(
		$str
	) {
		$this->BLIPMODE = (string)$str;
		return $this;
	}

	/**
	 * First chamfer distance
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetCHAMFERA(
		$str
	) {
		$this->CHAMFERA = (string)$str;
		return $this;
	}

	/**
	 * Second chamfer distance
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetCHAMFERB(
		$str
	) {
		$this->CHAMFERB = (string)$str;
		return $this;
	}

	/**
	 * 0 = sketch lines, 1 = sketch polylines
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetSKPOLY(
		$str
	) {
		$this->SKPOLY = (string)$str;
		return $this;
	}

	/**
	 * 0 = timer off, 1 = timer on
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetUSRTIMER(
		$str
	) {
		$this->USRTIMER = (string)$str;
		return $this;
	}

	/**
	 * Angle 0 direction
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetANGBASE(
		$str
	) {
		$this->ANGBASE = (string)$str;
		return $this;
	}

	/**
	 * 1 = clockwise angles, 0 = counterclockwise
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetANGDIR(
		$str
	) {
		$this->ANGDIR = (string)$str;
		return $this;
	}

	/**
	 * Point display mode
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetPDMODE(
		$str
	) {
		$this->PDMODE = (string)$str;
		return $this;
	}

	/**
	 * Point display size
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetPDSIZE(
		$str
	) {
		$this->PDSIZE = (string)$str;
		return $this;
	}

	/**
	 * Default Polyline width
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetPLINEWID(
		$str
	) {
		$this->PLINEWID = (string)$str;
		return $this;
	}

	/**
	 * 0 = static coordinate display, 1 = continuous update, 2 = "d<a" format
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetCOORDS(
		$str
	) {
		$this->COORDS = (string)$str;
		return $this;
	}

	/**
	 * Spline control polygon display, 1 = on, 0 = off
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetSPLFRAME(
		$str
	) {
		$this->SPLFRAME = (string)$str;
		return $this;
	}

	/**
	 * Spline curve type for PEDIT Spline (See your AutoCAD Reference Manual)
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetSPLINETYPE(
		$str
	) {
		$this->SPLINETYPE = (string)$str;
		return $this;
	}

	/**
	 * Number of line segments per spline patch
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetSPLINESEGS(
		$str
	) {
		$this->SPLINESEGS = (string)$str;
		return $this;
	}

	/**
	 * Attribute entry dialogs, 1 = on, 0 = off
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetATTDIA(
		$str
	) {
		$this->ATTDIA = (string)$str;
		return $this;
	}

	/**
	 * Attribute prompting during INSERT, 1 = on, 0 = off
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetATTREQ(
		$str
	) {
		$this->ATTREQ = (string)$str;
		return $this;
	}

	/**
	 * Handles enabled if nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetHANDLING(
		$str
	) {
		$this->HANDLING = (string)$str;
		return $this;
	}

	/**
	 * Next available handle
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetHANDSEED(
		$str
	) {
		$this->HANDSEED = (string)$str;
		return $this;
	}

	/**
	 * @return string
	 */
	public function GetHANDSEED() {
		return $this->HANDSEED;
	}

	/**
	 * Number of mesh tabulations in first direction
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetSURFTAB1(
		$str
	) {
		$this->SURFTAB1 = (string)$str;
		return $this;
	}

	/**
	 * Number of mesh tabulations in second direction
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetSURFTAB2(
		$str
	) {
		$this->SURFTAB2 = (string)$str;
		return $this;
	}

	/**
	 * Surface type for PEDIT Smooth (See your AutoCAD Reference Manual)
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetSURFTYPE(
		$str
	) {
		$this->SURFTYPE = (string)$str;
		return $this;
	}

	/**
	 * Surface density (for PEDIT Smooth) in M direction
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetSURFU(
		$str
	) {
		$this->SURFU = (string)$str;
		return $this;
	}

	/**
	 * Surface density (for PEDIT Smooth) in N direction
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetSURFV(
		$str
	) {
		$this->SURFV = (string)$str;
		return $this;
	}

	/**
	 * Name of current UCS
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetUCSNAME(
		$str
	) {
		$this->UCSNAME = (string)$str;
		return $this;
	}

	/**
	 * Origin of current UCS (in WCS)
	 *
	 * @param string $X
	 * @param string $Y
	 * @param string $Z
	 * @return self
	 */
	public function SetUCSORG(
		$X,
		$Y,
		$Z
	) {
		$this->UCSORG = array(
			'X' => (string)$X,
			'Y' => (string)$Y,
			'Z' => (string)$Z
		);
		return $this;
	}

	/**
	 * Direction of current UCS's X axis (in World coordinates)
	 *
	 * @param string $X
	 * @param string $Y
	 * @param string $Z
	 * @return self
	 */
	public function SetUCSXDIR(
		$X,
		$Y,
		$Z
	) {
		$this->UCSXDIR = array(
			'X' => (string)$X,
			'Y' => (string)$Y,
			'Z' => (string)$Z
		);
		return $this;
	}

	/**
	 * Direction of current UCS's Y axis (in World coordinates)
	 *
	 * @param string $X
	 * @param string $Y
	 * @param string $Z
	 * @return self
	 */
	public function SetUCSYDIR(
		$X,
		$Y,
		$Z
	) {
		$this->UCSYDIR = array(
			'X' => (string)$X,
			'Y' => (string)$Y,
			'Z' => (string)$Z
		);
		return $this;
	}

	/**
	 * Current paper space UCS name
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetPUCSNAME(
		$str
	) {
		$this->PUCSNAME = (string)$str;
		return $this;
	}

	/**
	 * Current paper space UCS origin
	 *
	 * @param string $X
	 * @param string $Y
	 * @param string $Z
	 * @return self
	 */
	public function SetPUCSORG(
		$X,
		$Y,
		$Z
	) {
		$this->PUCSORG = array(
			'X' => (string)$X,
			'Y' => (string)$Y,
			'Z' => (string)$Z
		);
		return $this;
	}

	/**
	 * Current paper space UCS X axis
	 *
	 * @param string $X
	 * @param string $Y
	 * @param string $Z
	 * @return self
	 */
	public function SetPUCSXDIR(
		$X,
		$Y,
		$Z
	) {
		$this->PUCSXDIR = array(
			'X' => (string)$X,
			'Y' => (string)$Y,
			'Z' => (string)$Z
		);
		return $this;
	}

	/**
	 * Current paper space UCS Y axis
	 *
	 * @param string $X
	 * @param string $Y
	 * @param string $Z
	 * @return self
	 */
	public function SetPUCSYDIR(
		$X,
		$Y,
		$Z
	) {
		$this->PUCSYDIR = array(
			'X' => (string)$X,
			'Y' => (string)$Y,
			'Z' => (string)$Z
		);
		return $this;
	}

	/**
	 * Five integer variables intended for use by third-party developers
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetUSERI1(
		$str
	) {
		$this->USERI1 = (string)$str;
		return $this;
	}

	/**
	 * Five integer variables intended for use by third-party developers
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetUSERI2(
		$str
	) {
		$this->USERI2 = (string)$str;
		return $this;
	}

	/**
	 * Five integer variables intended for use by third-party developers
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetUSERI3(
		$str
	) {
		$this->USERI3 = (string)$str;
		return $this;
	}

	/**
	 * Five integer variables intended for use by third-party developers
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetUSERI4(
		$str
	) {
		$this->USERI4 = (string)$str;
		return $this;
	}

	/**
	 * Five integer variables intended for use by third-party developers
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetUSERI5(
		$str
	) {
		$this->USERI5 = (string)$str;
		return $this;
	}

	/**
	 * Five real variables intended for use by third-party developers
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetUSERR1(
		$str
	) {
		$this->USERR1 = (string)$str;
		return $this;
	}

	/**
	 * Five real variables intended for use by third-party developers
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetUSERR2(
		$str
	) {
		$this->USERR2 = (string)$str;
		return $this;
	}

	/**
	 * Five real variables intended for use by third-party developers
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetUSERR3(
		$str
	) {
		$this->USERR3 = (string)$str;
		return $this;
	}

	/**
	 * Five real variables intended for use by third-party developers
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetUSERR4(
		$str
	) {
		$this->USERR4 = (string)$str;
		return $this;
	}

	/**
	 * Five real variables intended for use by third-party developers
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetUSERR5(
		$str
	) {
		$this->USERR5 = (string)$str;
		return $this;
	}

	/**
	 * 1 = set UCS to WCS during DVIEW/VPOINT, 0 = don't change UCS
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetWORLDVIEW(
		$str
	) {
		$this->WORLDVIEW = (string)$str;
		return $this;
	}

	/**
	 * 0 = faces shaded, edges not highlighted
	 * 1 = faces shaded, edges highlighted in black
	 * 2 = faces not filled, edges in entity color
	 * 3 = faces in entity color, edges in black
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetSHADEDGE(
		$str
	) {
		$this->SHADEDGE = (string)$str;
		return $this;
	}

	/**
	 * Percent ambient/diffuse light, range 1-100, default 70
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetSHADEDIF(
		$str
	) {
		$this->SHADEDIF = (string)$str;
		return $this;
	}

	/**
	 * 1 for previous release compatibility mode, 0 otherwise
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetTILEMODE(
		$str
	) {
		$this->TILEMODE = (string)$str;
		return $this;
	}

	/**
	 * Sets maximum number of viewports to be regenerated
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetMAXACTVP(
		$str
	) {
		$this->MAXACTVP = (string)$str;
		return $this;
	}

	/**
	 * Limits checking in paper space when nonzero
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetPLIMCHECK(
		$str
	) {
		$this->PLIMCHECK = (string)$str;
		return $this;
	}

	/**
	 * Minimum X, Y, and Z extents for paper space
	 *
	 * @param string $X
	 * @param string $Y
	 * @param string $Z
	 * @return self
	 */
	public function SetPEXTMIN(
		$X,
		$Y,
		$Z
	) {
		$this->PEXTMIN = array(
			'X' => (string)$X,
			'Y' => (string)$Y,
			'Z' => (string)$Z
		);
		return $this;
	}

	/**
	 * Maximum X, Y, and Z extents for paper space
	 *
	 * @param string $X
	 * @param string $Y
	 * @param string $Z
	 * @return self
	 */
	public function SetPEXTMAX(
		$X,
		$Y,
		$Z
	) {
		$this->PEXTMAX = array(
			'X' => (string)$X,
			'Y' => (string)$Y,
			'Z' => (string)$Z
		);
		return $this;
	}

	/**
	 * Minimum X and Y limits in paper space
	 *
	 * @param string $X
	 * @param string $Y
	 * @return self
	 */
	public function SetPLIMMIN(
		$X,
		$Y
	) {
		$this->PLIMMIN = array(
			'X' => (string)$X,
			'Y' => (string)$Y
		);
		return $this;
	}

	/**
	 * Maximum X and Y limits in paper space
	 *
	 * @param string $X
	 * @param string $Y
	 * @return self
	 */
	public function SetPLIMMAX(
		$X,
		$Y
	) {
		$this->PLIMMAX = array(
			'X' => (string)$X,
			'Y' => (string)$Y
		);
		return $this;
	}

	/**
	 * Low bit set = display fractions, feet-and-inches, and surveyor's angles in input format
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetUNITMODE(
		$str
	) {
		$this->UNITMODE = (string)$str;
		return $this;
	}

	/**
	 * 0 = don't retain Xref-dependent visibility settings
	 * 1 = retain Xref-dependent visibility settings
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetVISRETAIN(
		$str
	) {
		$this->VISRETAIN = (string)$str;
		return $this;
	}

	/**
	 * Governs the generation of linetype patterns around the vertices of a 2D Polyline
	 * 1 = linetype is generated in a continuous pattern around vertices of the Polyline
	 * 0 = each segment of the Polyline starts and ends with a dash
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetPLINEGEN(
		$str
	) {
		$this->PLINEGEN = (string)$str;
		return $this;
	}

	/**
	 * Controls paper space linetype scaling
	 * 1 = no special linetype scaling
	 * 0 = viewport scaling governs linetype scaling
	 *
	 * @param string $str
	 * @return self
	 */
	public function SetPSLTSCALE(
		$str
	) {
		$this->PSLTSCALE = (string)$str;
		return $this;
	}


}
