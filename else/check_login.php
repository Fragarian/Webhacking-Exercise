<?php
    include "db_info.php";
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
?>
<?php
    $id = $_POST['id'];
    $pw = $_POST['pw'];

    $sql1 = "SELECT * FROM register WHERE id='" . $id . "' AND pw='" . $pw . "'";
    echo $sql1;

    $result1 = sq($sql1);
    mysqli_fetch_array($result1);
    $row1 = mysqli_fetch_array($result1);

    echo "<br>" . $row1['id'];

?>