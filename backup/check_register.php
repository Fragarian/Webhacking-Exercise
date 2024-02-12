<?php
    include "db_info.php";
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
?>
<?php
    $id = $_POST['id'];
    $pw = $_POST['pw'];

    // id 중복 검사
    $sql1 = "SELECT * FROM register WHERE id='" . $id . "'";
    echo $sql1;
    $result1 = sq($sql1);
    $row_count1 = mysqli_num_rows($result1);

    if($row_count1 == 0) {
         echo "<script>alert('success');</script>";
         echo "<script>location.href='register.php'</script>";
     } else {
         echo "<script>alert('fail');</script>";
    }
?>