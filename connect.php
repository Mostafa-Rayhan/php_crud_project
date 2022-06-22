<?php

$con = new mysqli('localhost', 'root', '', 'crud_operation');

if(!$con){
    die(mysqli_error($con));
}

?>