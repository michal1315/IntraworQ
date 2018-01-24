<?php

require_once "database-connect.php";

$connection = @new mysqli($host, $db_user, $db_pass, $db_name);

if($connection->connect_errno!=0)
{
    echo "Error: ".$connection->connect_errno;
}
else
{

    $connection->close();
    header("Location: table.php");

}

?>