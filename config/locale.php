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
 * "defaultLocaleCode": Optional. Default locale code will be used when the locale code cannot be detected from url.
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

	'defaultLocaleCode' => 'en',

	'translations' => [
		'en' => [
			'hello' => 'Hello',
		],
	],
];
