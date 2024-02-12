<?php
    include "../common/db_info.php";
    error_reporting(E_ALL);
    ini_set("display_errors", 1 );
?>
<?php
    // 과제 : GET으로 온 idx 받아오기
    
    // 과제 : board 테이블에서 해당 idx의 정보 가져오기
    
    // 과제 : 쿼리를 보내고 결과 받기
    
    // 과제 : mysqli_fetch_array로 변수에 저장하기
    
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