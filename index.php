<?php
/**
 * 系统入口文件
 * @Author HeJun(hejun@hejun.biz)
 * @Link   www.hejun.biz
 * @license       http://www.hejun.biz/license
 * @version       v1.0
 */
error_reporting(E_ERROR | E_WARNING | E_PARSE);
define('DS', DIRECTORY_SEPARATOR);
define('WWWPATH', str_replace(array('\\', '\\\\'), '/', dirname(__FILE__)));
$framework = dirname(__FILE__) . DS. 'framework'.DS.'yii.php';
$config = WWWPATH . DS .'protected'.DS.'config'.DS.'main.php';
//开启调试
defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
require_once ($framework);
Yii::createWebApplication($config)->run();
?>