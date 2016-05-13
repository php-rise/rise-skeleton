<?php
/**
 * Configurations of locale.
 *
 * "locales": Locales enabled in the website.
 *            Format: [
 *                '<locale code>' => [
 *                    'name' => '<locale name>',
 *                ],
 *                ...
 *            ]
 *
 * "translations": Translations.
 *                 Format: [
 *                     '<locale code>' => [
 *                         '<key1>' => '<value1>',
 *                         '<key2>' => [
 *                             '<nested key>' => '<value2>',
 *                             ...
 *                         ],
 *                         ...
 *                     ],
 *                     ...
 *                 ]
 *
 * @var array
 */

return [
	'locales' => [
		'en' => [
			'name' => 'English',
		],
	],

	'translations' => [
		'en' => [
			'hello' => 'Hello',
		],
	],
];
