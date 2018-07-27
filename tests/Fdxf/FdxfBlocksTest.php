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
 * Class FdxfBlocksTest
 * @package Fdxf\Tests
 */
class FdxfBlocksTest extends TestCase
{
    /**
     * @var Fdxf
     */
    private $fdxf;


    /**
     * FdxfHeadersTest Function Setup
     */
    public function Setup()
    {
        $this->fdxf = new Fdxf(11.1, 12.2, 13.3);
    }


    /**
     * Test accessors for blocks
     */
    public function testBlocks()
    {
        $this->fdxf->SetBlock('test');
        $test = $this->fdxf->GetBlocks();
        $this->assertEquals('test', $test);

        $this->fdxf->ClearBlocks();
        $test = $this->fdxf->GetBlocks();
        $this->assertEmpty($test);
    }

    /**
     * Test build blocks
     */
    public function testBuildBlocks()
    {
        $test = $this->fdxf->BuildBlocks();
        $this->assertContains('ENDSEC', $test);
    }
}
