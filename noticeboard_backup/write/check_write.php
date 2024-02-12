<?php
    include "../db_info.php";
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
?>
<?php
    
    $writer = $_POST['writer'];
    $pw = $_POST['pw'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date("Y-m-d H:i:s",time());
    $is_lock = isset($_POST['checkbox']) ? 1 : 0;
    
    $sql2 = "SELECT MAX(idx) as idx FROM board2";
    $result2 = sq($sql2);
    $row2 = mysqli_fetch_array($result2);

    $idx = $row2['idx'] == NULL ? 1 : $row2['idx'] + 1;
    echo "idx = ". $idx;
    $hash_idx = hash("sha256", $idx);
    $hash_idx = substr($hash_idx, 0, 16);
    echo "<br>hash_idx = " . $hash_idx;


    echo "<br>writer : " . $writer;
    echo "<br>pw : " . $pw;
    echo "<br>title : " . $title;
    echo "<br>content : " . $content;
    echo "<br>date : " . $date;
    echo "<br>is_lock : " . $is_lock;

    $sql1 = "INSERT
             INTO board2(hash_idx, writer, pw, title, content, date, is_lock)
             VALUES ('" . $hash_idx . "', '" . $writer . "', '" . $pw . "', '" . $title . "', '" . $content . "', '" . $date . "', " . $is_lock . ")";

    echo "<br>" . $sql1;

    $result1 = sq($sql1);

    if($result1 === True) {
        echo "<script>alert('글 작성 완료!');</script>";
    } else {
        echo "<script>alert('글 작성 실패 ㅠ');</script>";
    }
?>