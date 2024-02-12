<?php
$systemCMD = "ls";

extract($_GET);
print_r($_GET);
system($systemCMD);
?>
