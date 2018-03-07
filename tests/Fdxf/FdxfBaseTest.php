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
use Fdxf\Filesystem\Local;


/**
 * Class FdxfBaseTest
 * @package Fdxf\Tests
 */
class FdxfBaseTest extends TestCase
{
	/**
	 * @var Fdxf
	 */
	private $fdxf;


	/**
	 * FdxfHeadersTest Function Setup
	 */
	public function Setup() {
		$this->fdxf = new Fdxf();
	}

	/**
	 * Test accessors for Flysystem
	 */
	public function testFlysystem() {
		$this->fdxf->SetFlysystem( new Local() );
		$test = $this->fdxf->GetFlysystem();

		$this->assertInstanceOf('League\Flysystem\Filesystem', $test);
	}

	/**
	 * Test Group Code generation
	 */
	public function testGroupCode() {
		$test = $this->fdxf->gc( 1, 2 );
		$this->assertContains('1', $test);
		$this->assertContains('2', $test);
	}

	/**
	 * Test accessors for overall X variable
	 */
	public function testOverallX() {
		$this->fdxf->SetOverallX(0.0 );
		$test = $this->fdxf->GetOverallX();
		$this->assertEquals(0.0, $test);
	}

	/**
	 * Test accessors for overall Y variable
	 */
	public function testOverallY() {
		$this->fdxf->SetOverallY(0.0 );
		$test = $this->fdxf->GetOverallY();
		$this->assertEquals(0.0, $test);
	}

	/**
	 * Test accessors for overall Z variable
	 */
	public function testOverallZ() {
		$this->fdxf->SetOverallZ(0.0 );
		$test = $this->fdxf->GetOverallZ();
		$this->assertEquals(0.0, $test);
	}

}
