<?php
    include "../common/db_info.php";
    error_reporting(E_ALL);
    ini_set("display_errors", 1 );
?>
<?php
    $idx = $_GET['idx'];

    $sql = "SELECT * FROM board WHERE idx = " . $idx;
    $result = sq($sql);
    $row = mysqli_fetch_array($result);

    echo "idx : " . $row['idx'] . "<br>";
    echo "id : " . $row['id'] . "<br>";
    echo "pw : " . $row['pw'] . "<br>";
    echo "title : " . $row['title'] . "<br>";
    echo "content : " . $row['content'] . "<br>";
    echo "date : " . $row['date'] . "<br>";
    echo "hit : " . $row['hit'] . "<br>";
    echo "is_lock : " . $row['is_lock'] . "<br>";
    echo "is_delete : " . $row['is_delete'] . "<br>";
?>