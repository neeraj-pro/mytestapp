<?php
echo $dbhost = getenv("HOSTNAME");
echo '<br>';
echo $dbport = getenv("MYSQL_55_RHEL7_SERVICE_PORT");
echo '<br>';
echo $dbuser = getenv("MYSQL_USER");
echo '<br>';
echo $dbpwd = getenv("MYSQL_PASSWORD");
echo '<br>';
echo $dbname = getenv("MYSQL_DATABASE");
echo '<br>';

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    echo  $mysqli->connect_error;
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
