<?php
    include "db_info.php";
    error_reporting(E_ALL);
    ini_set( "display_errors", 1 );
?>
<html>
<head>
    <title>loop</title>
</head>
<body>
<?php
    for($i = 0 ; $i < 5 ; $i++) {
?>
    <h1>hi</h1>
<?php
    }
?>
</body>
</html>