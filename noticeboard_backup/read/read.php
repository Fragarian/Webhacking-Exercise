<?php
    include "../db_info.php";
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
?>
<?php
    $hash_idx = $_GET['hash_idx'];

    $sql1 = "SELECT * FROM board2 WHERE hash_idx='" . $hash_idx . "'";
    echo $sql1;
    $result1 = sq($sql1);
    $row1 = mysqli_fetch_array($result1);

    // print_r($row1);

    echo "<br>idx = " . $row1['idx'];
    echo "<br>title = " . $row1['title'];
    echo "<br>writer = " . $row1['writer'];
    echo "<br>date = " . $row1['date'];
    echo "<br>hit = " . $row1['hit'];

?>