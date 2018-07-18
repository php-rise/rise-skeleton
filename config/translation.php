<?php
/**
 * Configurations of translations.
 *
 * "defaultLocale": Optional. Default locale code will be used when the locale code cannot be detected.
 *
 * "translations": Translations. It should be a key value pairs under each locale code.
 *                 Format: [
 *                     '<locale code>' => [
 *                         '<key1>' => '<value1>',
 *                         '<key2>' => '<value2>',
 *                         ...
 *                     ],
 *                     ...
 *                 ]
 *
 * @var array
 */

return [
	'defaultLocale' => 'en',

	'translations' => [
		'en' => [
			'hello' => 'Hello',
		],
	],
];
