<?php
$hostname = "localhost";
$user = "root";
$database = "immaculate";
$New_Conn = @mysql_pconnect($hostname, $user) or trigger_error(mysql_error(), E_USER_ERROR); 
?>