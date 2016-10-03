<?php

spl_autoload_register(function ($classname) {
	$class = ltrim($classname, '\\');
		$filename = '';
		$namespace = '';
		if ($lastNsPosition = strrpos($class, '\\')) {
			$namespace = substr($class, 0, $lastNsPosition);
			$class = substr($class, $lastNsPosition + 1);
			$filename = str_replace('\\', '/', $namespace) . '/';
		}
		$filename .= $class . '.php';

		require __DIR__ . '/app/' . $filename;
});
