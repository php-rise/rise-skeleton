<?php
/**
 * Configurations of initializer.
 *
 * "serviceNamespaces": Array of service namespaces searched by service locator. The one near the end has higher priority.
 *
 * "services": Array of services that will be registered.
 *             Format: [
 *                 '<service name>' => <an instance of \Rise\Services\BaseService>,
 *                 '<service name>' => '<class name of service (without namespace specified in "serviceNamespaces")>',
 *                 ...
 *             ]
 */

return [
	'serviceNamespaces' => ['App\Services'],
	'services' => [
	],
];
