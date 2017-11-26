<?php
/*
 * This file is part of the PHP_CodeCoverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @category   PHP
 * @package    CodeCoverage
 * @author     Arne Blankerts <arne@blankerts.de>
 * @copyright  Sebastian Bergmann <sebastian@phpunit.de>
 * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @link       http://github.com/sebastianbergmann/php-code-coverage
 * @since      Class available since Release 2.0.0
 */
class PHP_CodeCoverage_Report_XML_Tests
{
	private $contextNode;

<<<<<<< HEAD
    private $codeMap = array(
        0 => 'PASSED',     // PHPUnit_Runner_BaseTestRunner::STATUS_PASSED
        1 => 'SKIPPED',    // PHPUnit_Runner_BaseTestRunner::STATUS_SKIPPED
        2 => 'INCOMPLETE', // PHPUnit_Runner_BaseTestRunner::STATUS_INCOMPLETE
        3 => 'FAILURE',    // PHPUnit_Runner_BaseTestRunner::STATUS_FAILURE
        4 => 'ERROR',      // PHPUnit_Runner_BaseTestRunner::STATUS_ERROR
        5 => 'RISKY'       // PHPUnit_Runner_BaseTestRunner::STATUS_RISKY
    );
=======
	private $codeMap = [
		0 => 'PASSED',     // PHPUnit_Runner_BaseTestRunner::STATUS_PASSED
		1 => 'SKIPPED',    // PHPUnit_Runner_BaseTestRunner::STATUS_SKIPPED
		2 => 'INCOMPLETE', // PHPUnit_Runner_BaseTestRunner::STATUS_INCOMPLETE
		3 => 'FAILURE',    // PHPUnit_Runner_BaseTestRunner::STATUS_FAILURE
		4 => 'ERROR',      // PHPUnit_Runner_BaseTestRunner::STATUS_ERROR
		5 => 'RISKY'       // PHPUnit_Runner_BaseTestRunner::STATUS_RISKY
	];
>>>>>>> ea79a2f50edc89e12eeb879d17155d120f28d68e

	public function __construct(DOMElement $context)
	{
		$this->contextNode = $context;
	}

<<<<<<< HEAD
    public function addTest($test, $result)
    {
        $node = $this->contextNode->appendChild(
            $this->contextNode->ownerDocument->createElementNS(
                'http://schema.phpunit.de/coverage/1.0',
                'test'
            )
        );
        $node->setAttribute('name', $test);
        $node->setAttribute('result', (int) $result);
        $node->setAttribute('status', $this->codeMap[(int) $result]);

    }
=======
	public function addTest($test, array $result)
	{
		$node = $this->contextNode->appendChild(
			$this->contextNode->ownerDocument->createElementNS(
				'http://schema.phpunit.de/coverage/1.0',
				'test'
			)
		);
		$node->setAttribute('name', $test);
		$node->setAttribute('size', $result['size']);
		$node->setAttribute('result', (int) $result['status']);
		$node->setAttribute('status', $this->codeMap[(int) $result['status']]);
	}
>>>>>>> ea79a2f50edc89e12eeb879d17155d120f28d68e
}
