<?php
    include "db_info.php";
?>
<?php
  error_reporting(E_ALL);
  ini_set( "display_errors", 1 );
?>
<?php
    $ID = $_GET['ID'];
    $PW = $_GET['PW'];
    
    $sql = "SELECT * FROM register2 WHERE id = '" . $ID . "' AND pw = '" . $PW . "'";
    $result = sq($sql);
    $row_count = mysqli_num_rows($result);
    
    if($row_count) {
        echo "<h1>SUCCESS</h1>";
        echo "<a href='../noticeboard/index.php'>Go to noticeboard</a>";
    } else {
        echo "<h1>FAIL<h1>";
    }
?>