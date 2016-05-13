<?php
/**
 * Configurations of command.
 *
 * "namespaces": Array of namespaces searched by command service.
 * "rules": Rules for searching command.
 */
return [
	'namespaces' => ['App\Components\Command'],
	'rules' => [
		'welcome' => 'Welcome.greeting',
	],
];
