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

