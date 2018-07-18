<?php
/**
 * Configurations of session.
 *
 * "options": Options for session_start(). See http://php.net/manual/en/session.configuration.php
 *
 * @var array
 */
return [
	'options' => [
		'name' => 'rise_session',
		'save_path' => __DIR__ . '/../sessions'
	]
];
