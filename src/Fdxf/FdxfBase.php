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

use League\Flysystem\Filesystem as Flysystem;


/**
 * Build DXF ASCII files base.
 *
 * Class FDXF_Base
 * @package Fdxf
 */
class FdxfBase
{
	/**
	 * @var Flysystem
	 */
	public $flysystem;

	/**
	 * DXF overall height
	 * @var float
	 */
	public $X = 0.0;

	/**
	 * DXF overall width
	 * @var float
	 */
	public $Y = 0.0;

	/**
	 * DXF overall thickness
	 * @var float
	 */
	public $Z = 0.0;


	/**
	 * FDXF_Header constructor.
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
		$this->X = (float)$X;
		$this->Y = (float)$Y;
		$this->Z = (float)$Z;
	}


	/**
	 * Set flysystem class
	 *
	 * @param Flysystem $flysystem
	 * @return self
	 */
	public function SetFlysystem(
		Flysystem $flysystem
	) {
		$this->flysystem = $flysystem;
		return $this;
	}


	/**
	 * Get flysystem class
	 *
	 * @return Flysystem
	 */
	public function GetFlysystem() {
		return $this->flysystem;
	}


	/**
	 * Sets group code and value for string
	 *
	 * @param string $code
	 * @param string $value
	 * @return string
	 */
	public function gc(
		$code,
		$value
	) {
		// Pad integer value
		if(
			(float)$code == 62 ||
			(float)$code > 59.9 && (float)$code < 79.1 ||
			(float)$code > 169.9 && (float)$code < 179.1 ||
			(float)$code > 1059.9 && (float)$code < 1079.1
		) {
			$value = str_pad( $value, 6, " ", STR_PAD_LEFT );
		}

		// Pad code
		$code = str_pad( $code, 3, " ", STR_PAD_LEFT );

		return (string)$code . "\n" . (string)$value . "\n";
	}


	/**
	 * DXF overall height
	 *
	 * @param float $X
	 * @return self
	 */
	public function SetOverallX(
		$X
	) {
		$this->X = (float)$X;
		return $this;
	}

	/**
	 * @return string
	 */
	public function GetOverallX() {
		return $this->X;
	}

	/**
	 * DXF overall width
	 *
	 * @param float $Y
	 * @return self
	 */
	public function SetOverallY(
		$Y
	) {
		$this->Y = (float)$Y;
		return $this;
	}

	/**
	 * @return string
	 */
	public function GetOverallY() {
		return $this->Y;
	}

	/**
	 * DXF overall thickness
	 *
	 * @param float $Z
	 * @return self
	 */
	public function SetOverallZ(
		$Z
	) {
		$this->Z = (float)$Z;
		return $this;
	}

	/**
	 * @return string
	 */
	public function GetOverallZ() {
		return $this->Z;
	}

}
