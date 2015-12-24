<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'CLICKPRESS',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'CLICKPRESS\ModuleProgressbar' => 'system/modules/cp_progressbar/modules/ModuleProgressbar.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_progressbar' => 'system/modules/cp_progressbar/templates',
));
