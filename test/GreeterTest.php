<?php

namespace App\Test;

# todo: Autoloading would eliminate this line
require __DIR__ . "/../src/Greeter.php";

use App\Greeter;

class GreeterTest extends \PHPUnit\Framework\TestCase {
	public function testGreeterSaysHello() {
		$greeter = new Greeter();
		self::assertStringContainsString(
			"Hello",
			$greeter->greet()
		);
	}

	public function testGreeterUsesName() {
		$greeter = new Greeter();

		self::assertStringContainsString(
			"Hello, Cody",
			$greeter->greet("Cody")
		);
		self::assertStringContainsString(
			"Hello, Sarah",
			$greeter->greet("Sarah")
		);
	}
}