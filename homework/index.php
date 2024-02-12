<?php
    include "./common/db_info.php";
    error_reporting(E_ALL);
    ini_set( "display_errors", 1 );
?>
<html>
<head>
    <title>index</title>

    <style>
        table {
            text-align : center;
        }
        
        a {
            text-decoration : none;
        }
    </style>
</head>
<body>

    <h1>자유 게시판</h1>

    <table border="1">
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성자</th>
            <th>조회수</th>
            <th>잠금 여부</th>  
        </tr>
    <?php
        // 과제 : board 테이블의 모든 내용을 가져오기
        
        // 과제 : 쿼리 보내고 변수에 받기
        
        // 과제 : mysqli_fetch_array로 변수에 저장하고 row가 없을때까지 반복
        
    ?>
        <tr>
            <td><?php echo $row['idx']; ?></td>
            <td>
                <!-- 과제 : href 채우기(read.php)로 가는데 GET으로 idx 들고가야 특정 게시글을 읽을 수 있음 -->
                <a href="">
                    <?php echo $row['title']; ?>
                </a>
            </td>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['hit']; ?></td>
            <td><?php echo $row['is_lock'] == 1 ? "lock" :""; ?></td>
        </tr>
    <?php
        // 과제 : while 문 닫기
        
    ?>
    </table>
    <!-- 과제 : 글쓰기로 이동 -->
    
</body>
</html>