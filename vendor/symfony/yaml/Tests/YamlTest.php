<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Yaml\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

class YamlTest extends TestCase
{
	public function testParseAndDump()
	{
		$data = array('lorem' => 'ipsum', 'dolor' => 'sit');
		$yml = Yaml::dump($data);
		$parsed = Yaml::parse($yml);
		$this->assertEquals($data, $parsed);
	}

<<<<<<< HEAD
    /**
     * @group legacy
     */
    public function testLegacyParseFromFile()
    {
        $filename = __DIR__.'/Fixtures/index.yml';
        $contents = file_get_contents($filename);
        $parsedByFilename = Yaml::parse($filename);
        $parsedByContents = Yaml::parse($contents);
        $this->assertEquals($parsedByFilename, $parsedByContents);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The indentation must be greater than zero
     */
    public function testZeroIndentationThrowsException()
    {
        Yaml::dump(array('lorem' => 'ipsum', 'dolor' => 'sit'), 2, 0);
    }
=======
	/**
	 * @expectedException \InvalidArgumentException
	 * @expectedExceptionMessage The indentation must be greater than zero
	 */
	public function testZeroIndentationThrowsException()
	{
		Yaml::dump(array('lorem' => 'ipsum', 'dolor' => 'sit'), 2, 0);
	}
>>>>>>> ea79a2f50edc89e12eeb879d17155d120f28d68e

	/**
	 * @expectedException \InvalidArgumentException
	 * @expectedExceptionMessage The indentation must be greater than zero
	 */
	public function testNegativeIndentationThrowsException()
	{
		Yaml::dump(array('lorem' => 'ipsum', 'dolor' => 'sit'), 2, -4);
	}
}
