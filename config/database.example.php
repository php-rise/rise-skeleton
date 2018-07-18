<?php
/**
 * The framework will execute "database.php" instead of this file. Please make
 * sure the configurations are in "database.php".
 *
 * "default": Default connection name.
 *
 * "connections": Configurations of different connections.
 *                Format: [
 *                    '<name>' => [
 *                        'dsn' => '<PDO DSN>', // See http://php.net/manual/en/ref.pdo-mysql.connection.php
 *                        'username' => '<username>',
 *                        'password' => '<password>',
 *                        'options' => [], // See http://php.net/manual/en/pdo.setattribute.php
 *                        'migrate' => <bool>, // Indicate this database config is suitable for running migrations
 *                    ]
 *                ]
 *
 * @var array
 */
return [
	'default' => 'master',

	'connections' => [
		'master' => [
			'dsn' => 'mysql:unix_socket=/var/run/mysqld/mysqld.sock;dbname=rise_framework;charset=utf8',
			//'dsn' => 'mysql:host=localhost;port=3307;dbname=rise_framework;charset=utf8',
			'username' => 'rise',
			'password' => 'pass',
			'migrate' => true,
		],
	]
];
