<?php
require_once get_theme_file_path() .'/includes/plugin-update-checker/plugin-update-checker.php';

$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/BiTechX/wordpress-theme',
	__FILE__,
	'wordpress-theme'
);
$myUpdateChecker->setBranch('master');