<?php

 define( "DB_SERVER",    $_ENV['OPENSHIFT_MYSQL_DB_HOST'] );

  define( "DB_USER",      $_ENV['OPENSHIFT_MYSQL_DB_USERNAME'] );

  define( "DB_PASSWORD",  $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD'] );

  define( "DB_DATABASE",  $_ENV['OPENSHIFT_APP_NAME'] );

 /*$hostname = "111.93.137.133";
  $dbusername = "adminZueeJPa";
  $dbname  = "leprosy";
  $dbpassword = "CaH57HtycZYY";
*/

  $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
  if (mysqli_connect_errno())
  {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }
  if(!isset($_SESSION))
	   session_start();

?>