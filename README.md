TG-zf2
======

zend framework PHP MVC

1、配置xampp下的Apache的虚拟主机    httpd-vhosts.conf
<VirtualHost *:80>
    ServerName localhost
    DocumentRoot "D:\workspace\TG-zf2"
    <Directory "D:\workspace\TG-zf2"> 
         Options FollowSymLinks IncludesNOEXEC Indexes
         DirectoryIndex index.html index.htm index.php
         AllowOverride all 
         Order Deny,Allow 
         Allow from all 
         Require all granted
    </Directory>
</VirtualHost>

2、配置PHP的xdebug
[XDebug]
zend_extension = "D:\xampp\php\ext\php_xdebug.dll"
xdebug.profiler_append = 0
xdebug.profiler_enable = 1
xdebug.profiler_enable_trigger = 0
xdebug.profiler_output_dir = "D:\xampp\tmp"
xdebug.profiler_output_name = "cachegrind.out.%t-%s"
xdebug.remote_enable = 0
xdebug.remote_handler = "dbgp"
xdebug.remote_host = "127.0.0.1"
xdebug.trace_output_dir = "D:\xampp\tmp"


