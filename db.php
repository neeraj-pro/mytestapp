 <?php

$MYSQL_USER = 'user_neeraj';
$MYSQL_PASSWORD = 'password_neeraj';
$MYSQL_DATABASE = 'database_neeraj';
$HOSTNAME = 'registry.access.redhat.com/openshift3/mysql-55-rhel7';

$mysqli = new mysqli($HOSTNAME,$MYSQL_USER,$MYSQL_PASSWORD,$MYSQL_DATABASE);

// Check connection

if ($mysqli -> connect_errno) {

  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;

  exit();
}

else {

echo "Connection failed";

}

?> 