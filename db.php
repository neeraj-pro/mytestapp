<html>
<head>
<title>Finally done</title>
</head>

<body>
<h1>test8</h1>
<?php

echo $h= gethostname();
echo '<br>';

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

echo $hostname;
echo '<br>';

//echo $dbhost = getenv("HOSTNAME");

echo $dbhost = "10-131-16-11.router-default.openshift-ingress.svc.cluster.local";
echo '<br>';
echo $dbport = getenv("MYSQL_55_RHEL7_SERVICE_PORT");
echo '<br>';
echo $dbuser = getenv("MYSQL_USER");
echo '<br>';
echo $dbpwd = getenv("MYSQL_PASSWORD");
echo '<br>';
echo $dbname = getenv("MYSQL_DATABASE");
echo '<br>';

//$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
//if ($connection->connect_errno) {
//    echo  $mysqli->connect_error;
//    exit();
//} else {
//    printf("Connected to the database");
//}

$link = mysqli_connect($dbhost, $dbuser, $dbpwd);
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
mysqli_close($link);

//$connection->close();
?>
</body>
</html>