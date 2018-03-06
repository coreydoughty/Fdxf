<?php
/**
 * This file is part of the Fdxf package.
 *
 * (c) Corey Doughty <corey@doughty.ca>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fdxf\Filesystem;

use League\Flysystem\Filesystem;
use League\Flysystem\Cached\CachedAdapter;
use League\Flysystem\Cached\Storage\Memory;
use League\Flysystem\AdapterInterface;
use League\Flysystem\Adapter\Local as Adapter;


/**
 * Class Local
 * @package Fdxf\Filesystem
 */
class Local extends Filesystem
{
	/**
	 * Local constructor.
	 */
	public function __construct() {
		$localAdapter = new Adapter( '/', null, null, [
			'file' => [
				'public' => 0664,
				'private' => 0600,
			],
			'dir' => [
				'public' => 0775,
				'private' => 0700,
			]
		] );

		$cacheStore = new Memory();

		$adapter = new CachedAdapter( $localAdapter, $cacheStore );

		parent::__construct( $adapter, [
			'visibility' => AdapterInterface::VISIBILITY_PUBLIC
		] );
	}

}
