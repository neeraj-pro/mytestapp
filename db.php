<html>
<head>
<title>Finally done</title>
</head>

<body>

<?php

//echo $dbhost = getenv("HOSTNAME");

echo $dbhost = "mysql-55-rhel7-2-ntt5d";
echo '<br>';
echo $dbport = getenv("MYSQL_55_RHEL7_SERVICE_PORT");
echo '<br>';
echo $dbuser = getenv("MYSQL_USER");
echo '<br>';
echo $dbpwd = getenv("MYSQL_PASSWORD");
echo '<br>';
echo $dbname = getenv("MYSQL_DATABASE");
echo '<br>';

$connection = new mysql($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    echo  $mysql->connect_error;
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
</body>
</html>