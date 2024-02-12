<?php
    include "../db_info.php";
?>
<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
?>
<?php
    $bno = $_GET["idx"];
    $pw = $_POST["pw"];
    
    $sql = "select * from board where idx ='". $bno . "'";
    // echo $sql;
    $result = sq($sql);
    $row = mysqli_fetch_array($result);
    if($row["pw"] == $pw) {
        echo "<script>
                location.href='read.php?idx=$bno';
            </script>";
    } else {
        echo "<script>
                alert('비밀번호가 틀렸습니다.');
                history.back();
            </script>";
    }
?>