<?php
namespace App\Commands;

use Rise\Command\BaseCommand;

class Welcome extends BaseCommand {
	public function greeting() {
		echo "Welcome!\n";
	}
}
