<?php
namespace App\Components\Command;

use Rise\Components\Command\BaseCommand;

class Welcome extends BaseCommand {
	public function greeting() {
		echo "Welcome!\n";
	}
}
