<?php
declare(strict_types=1);


use PHPUnit\Framework\TestCase;

final class BoxTest extends TestCase
{

	public function testOnSetHeightInNumber()
	{
		 $box = Box::instance();
			$box->setHeight(5);
			$this->assertEquals(
				5,
				$box->getHeight()
			);
	}

}
