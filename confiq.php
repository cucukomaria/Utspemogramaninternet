<?php
/*
//mysql_connect("database-host","username","password")
$conn = mysql_connect("localhost","root","roor")
            or die(connot connected");
//mysql_connect_db("database-name","connect-link-indentifier")
@mysql_select_db("test","$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysql_connect instead
 */

 $databaseHost ='localhost';
 $databaseName = 'cucu_db';
 $databaseUsername = 'root';
 $databasePassword ='';

 $mysqli = mysqli_connect($databaseHost,$databaseUsername ,$databasePassword,$databaseUsername);


?>