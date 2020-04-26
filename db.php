<html>
<head>
<title>Finally done</title>
</head>

<body>
<h1>test6</h1>
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

//$connection = new mysql($dbhost, $dbuser, $dbpwd, $dbname);
//if ($connection->connect_errno) {
//    echo  $mysql->connect_error;
//    exit();
//} else {
//    printf("Connected to the database");
//}

$link = mysql_connect($dbhost, $dbuser, $dbpwd);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);

//$connection->close();
?>
</body>
</html>