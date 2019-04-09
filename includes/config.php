<?php 
// DB credentials.

$DB_HOST = getenv('db_host');
$DB_USER = getenv('db_user');
$DB_PASS = getenv('db_passwd');
$DB_NAME = getenv('db_name');


/*define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','bbdms');*/
// Establish database connection.
try
{
//$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
$dbh = new PDO("mysql:host="$DB_HOST";dbname="$DB_NAME,$DB_USER, $DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
