# Ping

### If the file named '.htaccess' doesn't exist then create it and type the following code in it.<br />
ErrorDocument 404 "http://localhost/ping/error.html"<br />
php_value upload_max_filesize 2048M<br />
php_value post_max_size 2400M<br />
php_value max_execution_time 3000<br />
php_value max_input_time 3000<br />
<br />
##### The limit has been set to 2GigaByte data transfer but can be updated by editing the .htaccess file!#
