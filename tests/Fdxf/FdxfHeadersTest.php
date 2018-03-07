<?php
/**
 * This file is part of the dwp-cms package.
 *
 * (c) Corey Doughty <corey@distinctivewoodproducts.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fdxf\Tests;

use PHPUnit\Framework\TestCase;
use Fdxf\Fdxf;


/**
 * Class FdxfHeadersTest
 * @package Fdxf\Tests
 */
class FdxfHeadersTest extends TestCase
{
	/**
	 * @var Fdxf
	 */
	private $fdxf;


	/**
	 * FdxfHeadersTest Function Setup
	 */
	public function Setup(){
		$this->fdxf = new Fdxf();
	}


	/**
	 * Test accessors for Version header variable
	 */
	public function testVersion() {
		$this->fdxf->SetVersion('test');
		$test = $this->fdxf->GetVersion();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for ACADVER header variable
	 */
	public function testACADVER() {
		$this->fdxf->SetACADVER('test');
		$test = $this->fdxf->GetACADVER();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for INSBASE header variable
	 */
	public function testINSBASE() {
		$this->fdxf->SetINSBASE( '1', '2' , '3');
		$test = $this->fdxf->GetINSBASE();
		$this->assertEquals('1', $test['X']);
		$this->assertEquals('2', $test['Y']);
		$this->assertEquals('3', $test['Z']);
	}

	/**
	 * Test accessors for EXTMIN header variable
	 */
	public function testEXTMIN() {
		$this->fdxf->SetEXTMIN( '1', '2' , '3');
		$test = $this->fdxf->GetEXTMIN();
		$this->assertEquals('1', $test['X']);
		$this->assertEquals('2', $test['Y']);
		$this->assertEquals('3', $test['Z']);
	}

	/**
	 * Test accessors for EXTMAX header variable
	 */
	public function testEXTMAX() {
		$this->fdxf->SetEXTMAX( '1', '2' , '3');
		$test = $this->fdxf->GetEXTMAX();
		$this->assertEquals('1', $test['X']);
		$this->assertEquals('2', $test['Y']);
		$this->assertEquals('3', $test['Z']);
	}

	/**
	 * Test accessors for LIMMIN header variable
	 */
	public function testLIMMIN() {
		$this->fdxf->SetLIMMIN( '1', '2');
		$test = $this->fdxf->GetLIMMIN();
		$this->assertEquals('1', $test['X']);
		$this->assertEquals('2', $test['Y']);
	}

	/**
	 * Test accessors for LIMMAX header variable
	 */
	public function testLIMMAX() {
		$this->fdxf->SetLIMMAX( '1', '2');
		$test = $this->fdxf->GetLIMMAX();
		$this->assertEquals('1', $test['X']);
		$this->assertEquals('2', $test['Y']);
	}

	/**
	 * Test accessors for ORTHOMODE header variable
	 */
	public function testORTHOMODE() {
		$this->fdxf->SetORTHOMODE('test');
		$test = $this->fdxf->GetORTHOMODE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for REGENMODE header variable
	 */
	public function testREGENMODE() {
		$this->fdxf->SetREGENMODE('test');
		$test = $this->fdxf->GetREGENMODE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for FILLMODE header variable
	 */
	public function testFILLMODE() {
		$this->fdxf->SetFILLMODE('test');
		$test = $this->fdxf->GetFILLMODE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for QTEXTMODE header variable
	 */
	public function testQTEXTMODE() {
		$this->fdxf->SetQTEXTMODE('test');
		$test = $this->fdxf->GetQTEXTMODE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for MIRRTEXT header variable
	 */
	public function testMIRRTEXT() {
		$this->fdxf->SetMIRRTEXT('test');
		$test = $this->fdxf->GetMIRRTEXT();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DRAGMODE header variable
	 */
	public function testDRAGMODE() {
		$this->fdxf->SetDRAGMODE('test');
		$test = $this->fdxf->GetDRAGMODE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for LTSCALE header variable
	 */
	public function testLTSCALE() {
		$this->fdxf->SetLTSCALE('test');
		$test = $this->fdxf->GetLTSCALE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for OSMODE header variable
	 */
	public function testOSMODE() {
		$this->fdxf->SetOSMODE('test');
		$test = $this->fdxf->GetOSMODE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for ATTMODE header variable
	 */
	public function testATTMODE() {
		$this->fdxf->SetATTMODE('test');
		$test = $this->fdxf->GetATTMODE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for TEXTSIZE header variable
	 */
	public function testTEXTSIZE() {
		$this->fdxf->SetTEXTSIZE('test');
		$test = $this->fdxf->GetTEXTSIZE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for TRACEWID header variable
	 */
	public function testTRACEWID() {
		$this->fdxf->SetTRACEWID('test');
		$test = $this->fdxf->GetTRACEWID();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for TEXTSTYLE header variable
	 */
	public function testTEXTSTYLE() {
		$this->fdxf->SetTEXTSTYLE('test');
		$test = $this->fdxf->GetTEXTSTYLE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for CLAYER header variable
	 */
	public function testCLAYER() {
		$this->fdxf->SetCLAYER('test');
		$test = $this->fdxf->GetCLAYER();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for CELTYPE header variable
	 */
	public function testCELTYPE() {
		$this->fdxf->SetCELTYPE('test');
		$test = $this->fdxf->GetCELTYPE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for CECOLOR header variable
	 */
	public function testCECOLOR() {
		$this->fdxf->SetCECOLOR('test');
		$test = $this->fdxf->GetCECOLOR();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMSCALE header variable
	 */
	public function testDIMSCALE() {
		$this->fdxf->SetDIMSCALE('test');
		$test = $this->fdxf->GetDIMSCALE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMASZ header variable
	 */
	public function testDIMASZ() {
		$this->fdxf->SetDIMASZ('test');
		$test = $this->fdxf->GetDIMASZ();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMEXO header variable
	 */
	public function testDIMEXO() {
		$this->fdxf->SetDIMEXO('test');
		$test = $this->fdxf->GetDIMEXO();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMDLI header variable
	 */
	public function testDIMDLI() {
		$this->fdxf->SetDIMDLI('test');
		$test = $this->fdxf->GetDIMDLI();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMRND header variable
	 */
	public function testDIMRND() {
		$this->fdxf->SetDIMRND('test');
		$test = $this->fdxf->GetDIMRND();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMDLE header variable
	 */
	public function testDIMDLE() {
		$this->fdxf->SetDIMDLE('test');
		$test = $this->fdxf->GetDIMDLE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMEXE header variable
	 */
	public function testDIMEXE() {
		$this->fdxf->SetDIMEXE('test');
		$test = $this->fdxf->GetDIMEXE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMTP header variable
	 */
	public function testDIMTP() {
		$this->fdxf->SetDIMTP('test');
		$test = $this->fdxf->GetDIMTP();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMTM header variable
	 */
	public function testDIMTM() {
		$this->fdxf->SetDIMTM('test');
		$test = $this->fdxf->GetDIMTM();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMTXT header variable
	 */
	public function testDIMTXT() {
		$this->fdxf->SetDIMTXT('test');
		$test = $this->fdxf->GetDIMTXT();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMCEN header variable
	 */
	public function testDIMCEN() {
		$this->fdxf->SetDIMCEN('test');
		$test = $this->fdxf->GetDIMCEN();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMTSZ header variable
	 */
	public function testDIMTSZ() {
		$this->fdxf->SetDIMTSZ('test');
		$test = $this->fdxf->GetDIMTSZ();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMTOL header variable
	 */
	public function testDIMTOL() {
		$this->fdxf->SetDIMTOL('test');
		$test = $this->fdxf->GetDIMTOL();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMLIM header variable
	 */
	public function testDIMLIM() {
		$this->fdxf->SetDIMLIM('test');
		$test = $this->fdxf->GetDIMLIM();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMTIH header variable
	 */
	public function testDIMTIH() {
		$this->fdxf->SetDIMTIH('test');
		$test = $this->fdxf->GetDIMTIH();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMTOH header variable
	 */
	public function testDIMTOH() {
		$this->fdxf->SetDIMTOH('test');
		$test = $this->fdxf->GetDIMTOH();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMSE1 header variable
	 */
	public function testDIMSE1() {
		$this->fdxf->SetDIMSE1('test');
		$test = $this->fdxf->GetDIMSE1();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMSE2 header variable
	 */
	public function testDIMSE2() {
		$this->fdxf->SetDIMSE2('test');
		$test = $this->fdxf->GetDIMSE2();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMTAD header variable
	 */
	public function testDIMTAD() {
		$this->fdxf->SetDIMTAD('test');
		$test = $this->fdxf->GetDIMTAD();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMZIN header variable
	 */
	public function testDIMZIN() {
		$this->fdxf->SetDIMZIN('test');
		$test = $this->fdxf->GetDIMZIN();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMBLK header variable
	 */
	public function testDIMBLK() {
		$this->fdxf->SetDIMBLK('test');
		$test = $this->fdxf->GetDIMBLK();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMASO header variable
	 */
	public function testDIMASO() {
		$this->fdxf->SetDIMASO('test');
		$test = $this->fdxf->GetDIMASO();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMSHO header variable
	 */
	public function testDIMSHO() {
		$this->fdxf->SetDIMSHO('test');
		$test = $this->fdxf->GetDIMSHO();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMPOST header variable
	 */
	public function testDIMPOST() {
		$this->fdxf->SetDIMPOST('test');
		$test = $this->fdxf->GetDIMPOST();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMAPOST header variable
	 */
	public function testDIMAPOST() {
		$this->fdxf->SetDIMAPOST('test');
		$test = $this->fdxf->GetDIMAPOST();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMALT header variable
	 */
	public function testDIMALT() {
		$this->fdxf->SetDIMALT('test');
		$test = $this->fdxf->GetDIMALT();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMALTD header variable
	 */
	public function testDIMALTD() {
		$this->fdxf->SetDIMALTD('test');
		$test = $this->fdxf->GetDIMALTD();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMALTF header variable
	 */
	public function testDIMALTF() {
		$this->fdxf->SetDIMALTF('test');
		$test = $this->fdxf->GetDIMALTF();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMLFAC header variable
	 */
	public function testDIMLFAC() {
		$this->fdxf->SetDIMLFAC('test');
		$test = $this->fdxf->GetDIMLFAC();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMTOFL header variable
	 */
	public function testDIMTOFL() {
		$this->fdxf->SetDIMTOFL('test');
		$test = $this->fdxf->GetDIMTOFL();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMTVP header variable
	 */
	public function testDIMTVP() {
		$this->fdxf->SetDIMTVP('test');
		$test = $this->fdxf->GetDIMTVP();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMTIX header variable
	 */
	public function testDIMTIX() {
		$this->fdxf->SetDIMTIX('test');
		$test = $this->fdxf->GetDIMTIX();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMSOXD header variable
	 */
	public function testDIMSOXD() {
		$this->fdxf->SetDIMSOXD('test');
		$test = $this->fdxf->GetDIMSOXD();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMSAH header variable
	 */
	public function testDIMSAH() {
		$this->fdxf->SetDIMSAH('test');
		$test = $this->fdxf->GetDIMSAH();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMBLK1 header variable
	 */
	public function testDIMBLK1() {
		$this->fdxf->SetDIMBLK1('test');
		$test = $this->fdxf->GetDIMBLK1();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMBLK2 header variable
	 */
	public function testDIMBLK2() {
		$this->fdxf->SetDIMBLK2('test');
		$test = $this->fdxf->GetDIMBLK2();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMSTYLE header variable
	 */
	public function testDIMSTYLE() {
		$this->fdxf->SetDIMSTYLE('test');
		$test = $this->fdxf->GetDIMSTYLE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMCLRD header variable
	 */
	public function testDIMCLRD() {
		$this->fdxf->SetDIMCLRD('test');
		$test = $this->fdxf->GetDIMCLRD();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMCLRE header variable
	 */
	public function testDIMCLRE() {
		$this->fdxf->SetDIMCLRE('test');
		$test = $this->fdxf->GetDIMCLRE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMCLRT header variable
	 */
	public function testDIMCLRT() {
		$this->fdxf->SetDIMCLRT('test');
		$test = $this->fdxf->GetDIMCLRT();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMTFAC header variable
	 */
	public function testDIMTFAC() {
		$this->fdxf->SetDIMTFAC('test');
		$test = $this->fdxf->GetDIMTFAC();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for DIMGAP header variable
	 */
	public function testDIMGAP() {
		$this->fdxf->SetDIMGAP('test');
		$test = $this->fdxf->GetDIMGAP();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for LUNITS header variable
	 */
	public function testLUNITS() {
		$this->fdxf->SetLUNITS('test');
		$test = $this->fdxf->GetLUNITS();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for LUPREC header variable
	 */
	public function testLUPREC() {
		$this->fdxf->SetLUPREC('test');
		$test = $this->fdxf->GetLUPREC();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for SKETCHINC header variable
	 */
	public function testSKETCHINC() {
		$this->fdxf->SetSKETCHINC('test');
		$test = $this->fdxf->GetSKETCHINC();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for FILLETRAD header variable
	 */
	public function testFILLETRAD() {
		$this->fdxf->SetFILLETRAD('test');
		$test = $this->fdxf->GetFILLETRAD();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for AUNITS header variable
	 */
	public function testAUNITS() {
		$this->fdxf->SetAUNITS('test');
		$test = $this->fdxf->GetAUNITS();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for AUPREC header variable
	 */
	public function testAUPREC() {
		$this->fdxf->SetAUPREC('test');
		$test = $this->fdxf->GetAUPREC();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for MENU header variable
	 */
	public function testMENU() {
		$this->fdxf->SetMENU('test');
		$test = $this->fdxf->GetMENU();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for ELEVATION header variable
	 */
	public function testELEVATION() {
		$this->fdxf->SetELEVATION('test');
		$test = $this->fdxf->GetELEVATION();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for PELEVATION header variable
	 */
	public function testPELEVATION() {
		$this->fdxf->SetPELEVATION('test');
		$test = $this->fdxf->GetPELEVATION();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for THICKNESS header variable
	 */
	public function testTHICKNESS() {
		$this->fdxf->SetTHICKNESS('test');
		$test = $this->fdxf->GetTHICKNESS();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for LIMCHECK header variable
	 */
	public function testLIMCHECK() {
		$this->fdxf->SetLIMCHECK('test');
		$test = $this->fdxf->GetLIMCHECK();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for BLIPMODE header variable
	 */
	public function testBLIPMODE() {
		$this->fdxf->SetBLIPMODE('test');
		$test = $this->fdxf->GetBLIPMODE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for CHAMFERA header variable
	 */
	public function testCHAMFERA() {
		$this->fdxf->SetCHAMFERA('test');
		$test = $this->fdxf->GetCHAMFERA();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for CHAMFERB header variable
	 */
	public function testCHAMFERB() {
		$this->fdxf->SetCHAMFERB('test');
		$test = $this->fdxf->GetCHAMFERB();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for SKPOLY header variable
	 */
	public function testSKPOLY() {
		$this->fdxf->SetSKPOLY('test');
		$test = $this->fdxf->GetSKPOLY();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for USRTIMER header variable
	 */
	public function testUSRTIMER() {
		$this->fdxf->SetUSRTIMER('test');
		$test = $this->fdxf->GetUSRTIMER();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for ANGBASE header variable
	 */
	public function testANGBASE() {
		$this->fdxf->SetANGBASE('test');
		$test = $this->fdxf->GetANGBASE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for ANGDIR header variable
	 */
	public function testANGDIR() {
		$this->fdxf->SetANGDIR('test');
		$test = $this->fdxf->GetANGDIR();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for PDMODE header variable
	 */
	public function testPDMODE() {
		$this->fdxf->SetPDMODE('test');
		$test = $this->fdxf->GetPDMODE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for PDSIZE header variable
	 */
	public function testPDSIZE() {
		$this->fdxf->SetPDSIZE('test');
		$test = $this->fdxf->GetPDSIZE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for PLINEWID header variable
	 */
	public function testPLINEWID() {
		$this->fdxf->SetPLINEWID('test');
		$test = $this->fdxf->GetPLINEWID();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for COORDS header variable
	 */
	public function testCOORDS() {
		$this->fdxf->SetCOORDS('test');
		$test = $this->fdxf->GetCOORDS();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for SPLFRAME header variable
	 */
	public function testSPLFRAME() {
		$this->fdxf->SetSPLFRAME('test');
		$test = $this->fdxf->GetSPLFRAME();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for SPLINETYPE header variable
	 */
	public function testSPLINETYPE() {
		$this->fdxf->SetSPLINETYPE('test');
		$test = $this->fdxf->GetSPLINETYPE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for SPLINESEGS header variable
	 */
	public function testSPLINESEGS() {
		$this->fdxf->SetSPLINESEGS('test');
		$test = $this->fdxf->GetSPLINESEGS();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for ATTDIA header variable
	 */
	public function testATTDIA() {
		$this->fdxf->SetATTDIA('test');
		$test = $this->fdxf->GetATTDIA();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for ATTREQ header variable
	 */
	public function testATTREQ() {
		$this->fdxf->SetATTREQ('test');
		$test = $this->fdxf->GetATTREQ();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for HANDLING header variable
	 */
	public function testHANDLING() {
		$this->fdxf->SetHANDLING('test');
		$test = $this->fdxf->GetHANDLING();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for HANDSEED header variable
	 */
	public function testHANDSEED() {
		$this->fdxf->SetHANDSEED('test');
		$test = $this->fdxf->GetHANDSEED();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for SURFTAB1 header variable
	 */
	public function testSURFTAB1() {
		$this->fdxf->SetSURFTAB1('test');
		$test = $this->fdxf->GetSURFTAB1();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for SURFTAB2 header variable
	 */
	public function testSURFTAB2() {
		$this->fdxf->SetSURFTAB2('test');
		$test = $this->fdxf->GetSURFTAB2();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for SURFTYPE header variable
	 */
	public function testSURFTYPE() {
		$this->fdxf->SetSURFTYPE('test');
		$test = $this->fdxf->GetSURFTYPE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for SURFU header variable
	 */
	public function testSURFU() {
		$this->fdxf->SetSURFU('test');
		$test = $this->fdxf->GetSURFU();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for SURFV header variable
	 */
	public function testSURFV() {
		$this->fdxf->SetSURFV('test');
		$test = $this->fdxf->GetSURFV();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for UCSNAME header variable
	 */
	public function testUCSNAME() {
		$this->fdxf->SetUCSNAME('test');
		$test = $this->fdxf->GetUCSNAME();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for UCSORG header variable
	 */
	public function testUCSORG() {
		$this->fdxf->SetUCSORG( '1', '2' , '3');
		$test = $this->fdxf->GetUCSORG();
		$this->assertEquals('1', $test['X']);
		$this->assertEquals('2', $test['Y']);
		$this->assertEquals('3', $test['Z']);
	}

	/**
	 * Test accessors for UCSXDIR header variable
	 */
	public function testUCSXDIR() {
		$this->fdxf->SetUCSXDIR( '1', '2' , '3');
		$test = $this->fdxf->GetUCSXDIR();
		$this->assertEquals('1', $test['X']);
		$this->assertEquals('2', $test['Y']);
		$this->assertEquals('3', $test['Z']);
	}

	/**
	 * Test accessors for UCSYDIR header variable
	 */
	public function testUCSYDIR() {
		$this->fdxf->SetUCSYDIR( '1', '2' , '3');
		$test = $this->fdxf->GetUCSYDIR();
		$this->assertEquals('1', $test['X']);
		$this->assertEquals('2', $test['Y']);
		$this->assertEquals('3', $test['Z']);
	}

	/**
	 * Test accessors for PUCSNAME header variable
	 */
	public function testPUCSNAME() {
		$this->fdxf->SetPUCSNAME('test');
		$test = $this->fdxf->GetPUCSNAME();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for PUCSORG header variable
	 */
	public function testPUCSORG() {
		$this->fdxf->SetPUCSORG( '1', '2' , '3');
		$test = $this->fdxf->GetPUCSORG();
		$this->assertEquals('1', $test['X']);
		$this->assertEquals('2', $test['Y']);
		$this->assertEquals('3', $test['Z']);
	}

	/**
	 * Test accessors for PUCSXDIR header variable
	 */
	public function testPUCSXDIR() {
		$this->fdxf->SetPUCSXDIR( '1', '2' , '3');
		$test = $this->fdxf->GetPUCSXDIR();
		$this->assertEquals('1', $test['X']);
		$this->assertEquals('2', $test['Y']);
		$this->assertEquals('3', $test['Z']);
	}

	/**
	 * Test accessors for PUCSYDIR header variable
	 */
	public function testPUCSYDIR() {
		$this->fdxf->SetPUCSYDIR( '1', '2' , '3');
		$test = $this->fdxf->GetPUCSYDIR();
		$this->assertEquals('1', $test['X']);
		$this->assertEquals('2', $test['Y']);
		$this->assertEquals('3', $test['Z']);
	}

	/**
	 * Test accessors for USERI1 header variable
	 */
	public function testUSERI1() {
		$this->fdxf->SetUSERI1('test');
		$test = $this->fdxf->GetUSERI1();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for USERI2 header variable
	 */
	public function testUSERI2() {
		$this->fdxf->SetUSERI2('test');
		$test = $this->fdxf->GetUSERI2();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for USERI3 header variable
	 */
	public function testUSERI3() {
		$this->fdxf->SetUSERI3('test');
		$test = $this->fdxf->GetUSERI3();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for USERI4 header variable
	 */
	public function testUSERI4() {
		$this->fdxf->SetUSERI4('test');
		$test = $this->fdxf->GetUSERI4();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for USERI5 header variable
	 */
	public function testUSERI5() {
		$this->fdxf->SetUSERI5('test');
		$test = $this->fdxf->GetUSERI5();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for USERR1 header variable
	 */
	public function testUSERR1() {
		$this->fdxf->SetUSERR1('test');
		$test = $this->fdxf->GetUSERR1();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for USERR2 header variable
	 */
	public function testUSERR2() {
		$this->fdxf->SetUSERR2('test');
		$test = $this->fdxf->GetUSERR2();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for USERR3 header variable
	 */
	public function testUSERR3() {
		$this->fdxf->SetUSERR3('test');
		$test = $this->fdxf->GetUSERR3();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for USERR1 header variable
	 */
	public function testUSERR4() {
		$this->fdxf->SetUSERR4('test');
		$test = $this->fdxf->GetUSERR4();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for USERR5 header variable
	 */
	public function testUSERR5() {
		$this->fdxf->SetUSERR5('test');
		$test = $this->fdxf->GetUSERR5();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for WORLDVIEW header variable
	 */
	public function testWORLDVIEW() {
		$this->fdxf->SetWORLDVIEW('test');
		$test = $this->fdxf->GetWORLDVIEW();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for SHADEDGE header variable
	 */
	public function testSHADEDGE() {
		$this->fdxf->SetSHADEDGE('test');
		$test = $this->fdxf->GetSHADEDGE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for SHADEDIF header variable
	 */
	public function testSHADEDIF() {
		$this->fdxf->SetSHADEDIF('test');
		$test = $this->fdxf->GetSHADEDIF();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for TILEMODE header variable
	 */
	public function testTILEMODE() {
		$this->fdxf->SetTILEMODE('test');
		$test = $this->fdxf->GetTILEMODE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for MAXACTVP header variable
	 */
	public function testMAXACTVP() {
		$this->fdxf->SetMAXACTVP('test');
		$test = $this->fdxf->GetMAXACTVP();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for PLIMCHECK header variable
	 */
	public function testPLIMCHECK() {
		$this->fdxf->SetPLIMCHECK('test');
		$test = $this->fdxf->GetPLIMCHECK();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for PEXTMIN header variable
	 */
	public function testPEXTMIN() {
		$this->fdxf->SetPEXTMIN( '1', '2' , '3');
		$test = $this->fdxf->GetPEXTMIN();
		$this->assertEquals('1', $test['X']);
		$this->assertEquals('2', $test['Y']);
		$this->assertEquals('3', $test['Z']);
	}

	/**
	 * Test accessors for PEXTMAX header variable
	 */
	public function testPEXTMAX() {
		$this->fdxf->SetPEXTMAX( '1', '2' , '3');
		$test = $this->fdxf->GetPEXTMAX();
		$this->assertEquals('1', $test['X']);
		$this->assertEquals('2', $test['Y']);
		$this->assertEquals('3', $test['Z']);
	}

	/**
	 * Test accessors for PLIMMIN header variable
	 */
	public function testPLIMMIN() {
		$this->fdxf->SetPLIMMIN( '1', '2' );
		$test = $this->fdxf->GetPLIMMIN();
		$this->assertEquals('1', $test['X']);
		$this->assertEquals('2', $test['Y']);
	}

	/**
	 * Test accessors for PLIMMAX header variable
	 */
	public function testPLIMMAX() {
		$this->fdxf->SetPLIMMAX( '1', '2' );
		$test = $this->fdxf->GetPLIMMAX();
		$this->assertEquals('1', $test['X']);
		$this->assertEquals('2', $test['Y']);
	}

	/**
	 * Test accessors for UNITMODE header variable
	 */
	public function testUNITMODE() {
		$this->fdxf->SetUNITMODE('test');
		$test = $this->fdxf->GetUNITMODE();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for VISRETAIN header variable
	 */
	public function testVISRETAIN() {
		$this->fdxf->SetVISRETAIN('test');
		$test = $this->fdxf->GetVISRETAIN();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for PLINEGEN header variable
	 */
	public function testPLINEGEN() {
		$this->fdxf->SetPLINEGEN('test');
		$test = $this->fdxf->GetPLINEGEN();
		$this->assertEquals('test', $test);
	}

	/**
	 * Test accessors for PSLTSCALE header variable
	 */
	public function testPSLTSCALE() {
		$this->fdxf->SetPSLTSCALE('test');
		$test = $this->fdxf->GetPSLTSCALE();
		$this->assertEquals('test', $test);
	}

}
