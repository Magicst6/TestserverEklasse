<?php include "../../../../wp-config.php";?>
<?php if (!defined('DATATABLES')) exit(); // Ensure being used in DataTables env.

// Enable error reporting for debugging (remove for production)
error_reporting(E_ALL);
ini_set('display_errors', '1');


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Database user / pass
 */
$sql_details = array(
	"type" => "Mysql",     // Database type: "Mysql", "Postgres", "Sqlserver", "Sqlite" or "Oracle"
	"user" =>  DB_USER_EKL,          // Database user name
	"pass" =>  DB_PASSWORD_EKL,          // Database password
	"host" => DB_HOST, // Database host
	"port" => "3306",          // Database connection port (can be left empty for default)
	"db"   => DB_NAME_EKL,          // Database name
	"dsn"  => "",          // PHP DSN extra information. Set as `charset=utf8mb4` if you are using MySQL
	"pdoAttr" => array()   // PHP PDO attributes array. See the PHP documentation for all options
);




