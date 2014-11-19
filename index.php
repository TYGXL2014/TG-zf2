<?php
/*
 * Created on 2014年11月19日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 $root=dirname(__FILE__); 
 $root=str_replace('', '/', $root); 
 define('__ROOT__',$root); //网站根目录 
 define('LIB_PATH', __ROOT__.'/libs/');
 define('CONF_PATH', __ROOT__.'/config/'); //配置文件目录 
 define('LANG_PATH', __ROOT__.'/lang/'); //语言目录 
 define('TMPL_PATH', __ROOT__.'/templates/'); //目录文件 
 define('HTML_PATH', __ROOT__.'/a/'); //生成静态页面目录 
 define('RUNTIME_PATH',__ROOT__.'/cache/'); //缓存目录 
 define('LOG_PATH', RUNTIME_PATH.'/log/'); 
 define('TEMP_PATH', RUNTIME_PATH.'/temp/');  
 define('DATA_PATH',RUNTIME_PATH.'/data/'); 
 define('CACHE_PATH', RUNTIME_PATH.'/cache/'); 
 define('APP_DEBUG', true); //开启调试
 //require_once 'core/ThinkPHP.php';
 
 phpinfo();
 
 
 
 
 
 
 
?>
