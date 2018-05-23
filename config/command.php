<?php
/**
 * Configurations of command.
 *
 * "namespaces": Array of namespaces searched by command service, from lower to higher priority.
 * "rules": Rules for searching command.
 */
return [
	'namespaces' => ['App\Components\Command'],
	'rules' => [
		'welcome' => 'Welcome.greeting',
	],
];