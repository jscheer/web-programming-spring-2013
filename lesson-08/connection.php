<?php
$dataconnection = new mysqli("localhost", "jscheer_admin", "F0aRtrKV", "peretz13");
if ($dataconnection->connect_errno) {
    echo "Failed to connect to MySQL: (" . $dataconnection->connect_errno . ") " . $dataconnection->connect_error;
}