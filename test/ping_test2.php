<?php
    $ip = $_GET['ip'];
    
    if(strpos($ip, "cat") !== false) {
        // include
        echo "Detect";
    } else {
        // not include 
        $command = "ping -c 3 " . $ip;
        system($command);
    }
    
?>

