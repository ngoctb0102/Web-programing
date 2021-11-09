<?php
# parameters for connecting to the "business_service"
$username = "ngoc"; $password = "123"; 
$hostspec= "localhost"; $database = "business_service";
$dbtype = 'mysqli';
$dsn = "$dbtype://$username:$password@$hostspec/$database";
$db = DB::connect($dsn);
if (DB::isError($db)) {
    die ($db->getMessage());
}
?>