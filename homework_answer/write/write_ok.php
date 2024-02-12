<?php
    include "../common/db_info.php";
    error_reporting(E_ALL);
    ini_set( "display_errors", 1 );
?>
<?php
    // 과제 : id, title, content, pw 값 POST 형태로 받아올것
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $pw = $_POST['pw'];
    $date = date("Y-m-d H:i:s",time());
    $is_lock = isset($_POST['is_lock']) ? 1 : 0; // is_lock 이라는 매개변수가 들어오면 1 아니면 0

    echo "id : " . $id . "<br>";
    echo "title : " . $title . "<br>";
    echo "content : " . $content . "<br>";
    echo "pw : " . $pw . "<br>";
    echo "date : " . $date . "<br>"; // 시간은 서버시간을 따라감(서버시간은 GMT+0임)
    echo "is_lock : " . $is_lock . "<br>";

    $sql = "INSERT
            INTO board(id, pw, title, content, date, is_lock)
            VALUES ('" . $id . "', '" . $pw . "', '" . $title . "', '" . $content . "', '" . $date . "', " . $is_lock . ")";
    echo $sql;

    $result = sq($sql);

    // 제대로 들어갔는지 검사하는 부분
    if($result === True) {
        // 값이 들어갔으면 성공 멘트 출력하고, write.php로 돌아가기
        echo "<script>alert('글쓰기가 성공하셨습니다!');</script>";
    } else {
        // 값이 잘 안들어 갔으면 실패 멘트 출력하고, 이전 페이지로 돌아가기 
        echo "<script>alert('글쓰기가 실패하였습니다ㅠ');</script>";
    }
?>
<br>
<!-- location.href : 해당 페이지로 가기(페이지를 새로 불러옴) -->
<!-- history.back() : 이전 페이지로 가기(단순히 뒤로가기 때문에 정보가 살아있음) -->
<input type="button" value="뒤로가기 1" onclick="location.href='write.php'">
<input type="button" value="뒤로가기 2" onclick="history.back()">