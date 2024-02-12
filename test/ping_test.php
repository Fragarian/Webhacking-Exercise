<?php
    $ip = $_GET['ip'];
    $command = "ping -c 1 '" . $ip . "'";
    echo "<p style='color:red;'>" . $command . "</p><br>";
    system($command);
?>
