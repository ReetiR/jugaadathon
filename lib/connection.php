<?php

 define( "DB_SERVER",    $_ENV['OPENSHIFT_MYSQL_DB_HOST'] );

   define( "DB_USER",      $_ENV['OPENSHIFT_MYSQL_DB_USERNAME'] );

   define( "DB_PASSWORD",  $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD'] );

    define( "DB_DATABASE",  $_ENV['OPENSHIFT_APP_NAME'] );

/*$mysqli = new mysqli("localhost", "root", "", "leprosy");
if (mysqli_connect_errno())
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}*/
?>