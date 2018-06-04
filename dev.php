<?php
if (php_sapi_name() == 'cli-server') {
	$url  = parse_url($_SERVER['REQUEST_URI']);
	$file = __DIR__ . '/public' . $url['path'];
	if (is_file($file)) {
		readfile($file);
	} else {
		require __DIR__ . '/public/index.php';
	}
}
