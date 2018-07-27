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
 * Class FdxfTablesTest
 * @package Fdxf\Tests
 */
class FdxfTablesTest extends TestCase
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
     * Test accessors for layers
     */
    public function testLayers()
    {
        $this->fdxf->SetLayers(array( '1' => 'test_a', '2' => 'test_b' ));
        $test = $this->fdxf->GetLayers();
        $this->assertEquals('test_a', $test[ '1' ]);
        $this->assertEquals('test_b', $test[ '2' ]);

        $this->fdxf->ClearLayers();
        $test = $this->fdxf->GetLayers();
        $this->assertEmpty($test);
    }

    /**
     * Test build tables
     */
    public function testBuildTables()
    {
        $this->fdxf->SetLayers(array( '1' => 'test_a', '2' => 'test_b' ));
        $test = $this->fdxf->BuildTables();
        $this->assertContains('ENDSEC', $test);
    }
}
