<?php 
define('DB_HOST','smydb.mysql.database.azure.com');
define('DB_USER','sakshi');
define('DB_PASS','smeshram@1');
define('DB_NAME','studentmsdb');
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
