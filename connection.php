<?php
require("constants.php");

    $con = @new mysqli("localhost","root", "", "userlistdb");
    if ($con->connect_errno) {
        echo "error: " . $con->connect_errno;
    } else {
        return $con;
    }
