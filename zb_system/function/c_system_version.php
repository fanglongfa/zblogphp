<?php
/**
 * 定义版本号
 */
define('ZC_VERSION_MAJOR', '1');
define('ZC_VERSION_MINOR', '5');
define('ZC_VERSION_BUILD', '1');
define('ZC_VERSION_COMMIT', '1720');
define('ZC_VERSION_CODENAME', 'Zero');
define('ZC_VERSION', ZC_VERSION_MAJOR . '.' . ZC_VERSION_MINOR . '.' . ZC_VERSION_BUILD . '.' . ZC_VERSION_COMMIT);
define('ZC_VERSION_DISPLAY', ZC_VERSION_MAJOR . '.' . ZC_VERSION_MINOR . '.' . ZC_VERSION_BUILD  .' ' . ZC_VERSION_CODENAME);
define('ZC_VERSION_FULL', ZC_VERSION . ' (' . ZC_VERSION_CODENAME . ')');
define('ZC_BLOG_COMMIT', ZC_VERSION_COMMIT); // 为写入系统配置统一风格
$GLOBALS['blogversion'] = ZC_VERSION_MAJOR . ZC_VERSION_MINOR . ZC_VERSION_COMMIT;
define('ZC_BLOG_VERSION', ZC_VERSION_DISPLAY . ' Build ' . $GLOBALS['blogversion']);