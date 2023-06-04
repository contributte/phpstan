<?php declare(strict_types = 1);

namespace Tests\Fixtures;

class BadClass
{

	public function foo($foo): void
	{
		$foo->hello();
	}

}
