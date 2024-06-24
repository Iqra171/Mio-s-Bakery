<?php
$conn = new mysqli('localhost', 'root', '', 'dbms');

if(!$conn)
{
    die(mysqli_error($conn));
}
   

?>