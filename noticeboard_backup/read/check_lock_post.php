<?php
    include "../db_info.php";
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
?>
<?php
    $idx = $_GET['idx'];
    $pw = $_POST['pw'];

    $sql1 = "SELECT * FROM board2 WHERE idx=" . $idx;
    $result1 = sq($sql1);
    $row1 = mysqli_fetch_array($result1);

    if($row1['pw'] == $pw) {
        $hash_idx = hash("sha256", $idx);
        $hash_idx = substr($hash_idx, 0, 16);
        
        echo "<script>location.href='./read.php?hash_idx=" . $hash_idx . "';</script>";
    } else {
        echo "<script>alert('wrong pw');</script>";
        echo "<script>history.back();</script>";
    }


?>