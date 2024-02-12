<?php
    include "db_info.php";
    error_reporting(E_ALL);
    ini_set( "display_errors", 1 );
?>

<html>
<head>
    <title>index</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>글쓴이</th>
            <th>작성일</th>
            <th>조회수</th>
        </tr>
    <?php
        $sql1 = "SELECT * FROM board2";

        $result1 = sq($sql1);//전체 데이터 베이스를 불러옴
        while($row1 = mysqli_fetch_array($result1)) {//열 하나씩 불러옴> 반복
    ?>
    
        <tr>
            <td><?php echo $row1['idx']; ?></td>
            <?php
                $href = $row1['is_lock'] == 1 ?  "./read/lock_post.php?idx=" . $row1['idx']: "./read/read.php?hash_idx=" . $row1['hash_idx'];
            ?>
            <td><a href="<?php echo $href; ?>"><?php echo $row1['title']; ?><?php echo $row1['is_lock'] == 1 ? "@": ""; ?></a></td> 
            <td><?php echo $row1['writer']; ?></td> 
            <td><?php echo $row1['date']; ?></td>
            <td><?php echo $row1['hit']; ?></td> 
        </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>