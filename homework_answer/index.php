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
        // 과제 : SELECT해서 board의 모든 내용을 가져오기
        $sql = "SELECT * FROM board";
        $result = sq($sql);

        while($row = mysqli_fetch_array($result)) {
    ?>
        <tr>
            <td><?php echo $row['idx']; ?></td>
            <td>
                <a href="./read/read.php?idx=<?php echo $row['idx']; ?>">
                    <?php echo $row['title']; ?>
                </a>
            </td>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['hit']; ?></td>
            <td><?php echo $row['is_lock'] == 1 ? "lock" :""; ?></td>
        </tr>
    <?php
        }
    ?>
    </table>

    <a href="./write/write.php">글쓰기</a>
</body>
</html>