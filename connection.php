<?php
define('DB_SERVER', 'eu-cdbr-azure-north-e.cloudapp.net');
define('DB_USERNAME', 'b6794460a9c5f4');
define('DB_PASSWORD', 'd5e1c62e');
define('DB_DATABASE', 'news-item');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>