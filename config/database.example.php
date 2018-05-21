<?php
/**
 * The framework will execute "database.php" instead of this file. Please make
 * sure the configurations are in "database.php".
 *
 * Doctrine DBAL 2 configurations.
 *
 * References:
 * http://doctrine-orm.readthedocs.org/projects/doctrine-dbal/en/latest/reference/configuration.html
 * http://www.doctrine-project.org/api/dbal/2.5/class-Doctrine.DBAL.DriverManager.html
 */
return [
	'default' => [
		'driver' => 'pdo_mysql',
		'unix_socket' => '/var/run/mysqld/mysqld.sock',
		'dbname' => 'rise_framework',
		'charset' => 'UTF8',
		'user' => 'rise',
		'password' => 'fuckingtopsecret',
	],
	'session' => [
		'driver' => 'pdo_mysql',
		'host' => 'localhost',
		'dbname' => 'rise_framework',
		'charset' => 'UTF8',
		'user' => 'rise',
		'password' => 'fuckingtopsecret',
	],
];
