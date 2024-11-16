<?php declare(strict_types = 1);

namespace Tests\Cases;

use Contributte\Tester\Toolkit;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

Toolkit::test(static function (): void {
	chdir(__DIR__ . '/../..');
	$output = shell_exec('vendor/bin/phpstan analyse -c phpstan.neon --level 9 --error-format=json --no-progress tests/Fixtures');

	$pattern = <<<'JSON'
	{"totals":{"errors":0,"file_errors":1},"files":{"%A%/tests/Fixtures/BadClass.php":{"errors":1,"messages":[{"message":"Method Tests\\Fixtures\\BadClass::foo() has parameter $foo with no type specified.","line":8,"ignorable":true,"identifier":"missingType.parameter"}]}},"errors":[]}
JSON;

	Assert::match(trim($pattern), trim($output));
});
