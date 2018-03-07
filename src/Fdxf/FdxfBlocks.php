<?php
/**
 * This file is part of the Fdxf package.
 *
 * (c) Corey Doughty <corey@doughty.ca
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fdxf;


/**
 * Build DXF ASCII files header.
 *
 * Class FDXF_Blocks
 * @package Fdxf
 */
class FdxfBlocks extends FdxfTables
{
	/**
	 * DXF block string for building
	 * @var string
	 */
	private $blocks = '';


	/**
	 * FDXF_Blocks constructor.
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
	 * Add to the block string
	 *
	 * @param $str
	 *
	 * @return self
	 */
	public function SetBlock(
		$str
	) {
		$this->blocks .= $str;
		return $this;
	}


	/**
	 * Empty blocks string
	 *
	 * @return self
	 */
	public function ClearBlocks() {
		$this->blocks = '';
		return $this;
	}


	/**
	 * Block model space string
	 *
	 * @return string
	 */
	private function BlockModelSpace() {
		$s = '';
		$s .= $this->gc( '0', 'BLOCK' );
		$s .= $this->gc( '8', '0' );
		$s .= $this->gc( '2', '$MODEL_SPACE' );
		$s .= $this->gc( '70', '0' );
		$s .= $this->gc( '10', '0.0' );
		$s .= $this->gc( '20', '0.0' );
		$s .= $this->gc( '30', '0.0' );
		$s .= $this->gc( '3', '$MODEL_SPACE' );
		$s .= $this->gc( '1', '' );
		$s .= $this->gc( '0', 'ENDBLK' );

		return $s;
	}


	/**
	 * Block paper space string
	 *
	 * @return string
	 */
	private function BlockPaperSpace() {
		$s = '';
		$s .= $this->gc( '0', 'BLOCK' );
		$s .= $this->gc( '67', '     1' );
		$s .= $this->gc( '8', '0' );
		$s .= $this->gc( '2', '$PAPER_SPACE' );
		$s .= $this->gc( '70', '0' );
		$s .= $this->gc( '10', '0.0' );
		$s .= $this->gc( '20', '0.0' );
		$s .= $this->gc( '30', '0.0' );
		$s .= $this->gc( '3', '$PAPER_SPACE' );
		$s .= $this->gc( '1', '' );
		$s .= $this->gc( '0', 'ENDBLK' );

		return $s;
	}


	/**
	 * Block oblique string
	 *
	 * @return string
	 */
	private function BlockOblique() {
		$seed = $this->GetHANDSEED();
		$this->SetHANDSEED( (int)$seed + 1 );

		$s = '';
		$s .= $this->gc( '0', 'BLOCK' );
		$s .= $this->gc( '8', '0' );
		$s .= $this->gc( '2', '_OBLIQUE' );
		$s .= $this->gc( '70', '0' );
		$s .= $this->gc( '10', '0.0' );
		$s .= $this->gc( '20', '0.0' );
		$s .= $this->gc( '30', '0.0' );
		$s .= $this->gc( '3', '_OBLIQUE' );
		$s .= $this->gc( '1', '' );
		$s .= $this->gc( '0', 'LINE' );
		$s .= $this->gc( '5', dechex( $seed ) );
		$s .= $this->gc( '8', '0' );
		$s .= $this->gc( '6', 'BYBLOCK' );
		$s .= $this->gc( '62', '0' );
		$s .= $this->gc( '10', '-0.5' );
		$s .= $this->gc( '20', '-0.5' );
		$s .= $this->gc( '30', '0.0' );
		$s .= $this->gc( '11', '0.5' );
		$s .= $this->gc( '21', '0.5' );
		$s .= $this->gc( '31', '0.0' );
		$s .= $this->gc( '0', 'ENDBLK' );

		return $s;
	}


	/**
	 * Add a typical DXF block string
	 *
	 * @return string
	 */
	public function BuildBlocks() {
		$s = '';
		$s .= $this->gc( '0', 'SECTION' );
		$s .= $this->gc( '2', 'BLOCKS' );
		$s .= $this->BlockModelSpace();
		$s .= $this->BlockPaperSpace();
		$s .= $this->BlockOblique();
		$s .= $this->blocks;
		$s .= $this->gc( '0', 'ENDSEC' );

		return $s;
	}
}
