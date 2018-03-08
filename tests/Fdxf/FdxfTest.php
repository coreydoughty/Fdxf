<?php
/**
 * This file is part of the Fdxf package.
 *
 * (c) Corey Doughty <corey@doughty.ca>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fdxf\Tests;

use PHPUnit\Framework\TestCase;
use Fdxf\Fdxf;


/**
 * Class FdxfTest
 * @package Fdxf\Tests
 */
class FdxfTest extends TestCase
{
	/**
	 * @var Fdxf
	 */
	private $fdxf;


	/**
	 * FdxfHeadersTest Function Setup
	 */
	public function Setup() {
		$this->fdxf = new Fdxf( 11.1, 12.2, 13.3 );
	}


	/**
	 * Test DXF output
	 */
	public function testOutput() {
		$test = $this->fdxf->Output();
		$this->assertContains( 'HEADER', $test );
		$this->assertContains( 'TABLES', $test );
		$this->assertContains( 'BLOCKS', $test );
		$this->assertContains( 'ENTITIES', $test );
		$this->assertContains( 'EOF', $test );
	}

	/**
	 * Test accessors for entities string
	 */
	public function testEntities() {
		$this->fdxf->SetEntity( 'test' );
		$test = $this->fdxf->GetEntities();
		$this->assertEquals( 'test', $test );

		$this->fdxf->ClearEntities();
		$test = $this->fdxf->GetEntities();
		$this->assertEmpty( $test );
	}

	/**
	 * Test build entities
	 */
	public function testBuildEntities() {
		$test = $this->fdxf->BuildEntities();
		$this->assertContains( 'ENDSEC', $test );
	}

	/**
	 * Test clear
	 */
	public function testClear() {
		$this->fdxf->SetEntity( 'test' );
		$this->fdxf->SetBlock( 'test' );
		$this->fdxf->SetLayers( array( '1' => 'test_a', '2' => 'test_b' ) );
		$this->fdxf->Clear();

		$test = $this->fdxf->GetEntities();
		$this->assertEmpty( $test );
		$test = $this->fdxf->GetBlocks();
		$this->assertEmpty( $test );
		$test = $this->fdxf->GetLayers();
		$this->assertEmpty( $test );
	}

}
