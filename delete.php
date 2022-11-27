<?php
if( isset($_GET["npsn"])){
    $npsn = $_GET["npsn"];

    $server   = "localhost";
    $user     = "root";
    $password = "";
    $db       = "db_cucu";

    //koneksi
    $connect  = new mysqli($server, $user, $password, $db);

    $sql = "DELETE FROM db_cucu WHERE npsn=$npsn";
    $connect->query($sql);
}
header("location: /uts/index.php");
exit;
?>