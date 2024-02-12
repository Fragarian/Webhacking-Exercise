<?php
    include "db_info.php";
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
?>
<?php
    $id = $_GET['id'];
    $pw = $_GET['pw'];

    // id 중복 검사
    $sql1 = "SELECT * FROM register WHERE id='" . $id . "' AND pw='" . $pw . "'";
    $result1 = sq($sql1);
    $row_count1 = mysqli_num_rows($result1);

    if($row_count1 == 0) {
        echo "<script>alert('회원가입에 성공했습니다.');</script>";
        
     } else {
        echo "<script>alert('회원가입에 실패했습니다.');</script>";
    }
?>