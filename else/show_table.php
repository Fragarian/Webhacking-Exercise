<?php
    include "db_info.php";
    error_reporting(E_ALL);
    ini_set( "display_errors", 1 );
?>
<html>
<head>
    <title>show table</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>idx</th>
            <th>id</th>
            <th>pw</th>
            <th>memo</th>
        </tr>
    <?php
        $sql1 = "SELECT * FROM register";

        $result1 = sq($sql1);
        while($row1 = mysqli_fetch_array($result1)) {
    ?>
        <tr>
            <td><?php echo $row1['idx']; ?></td>
            <td><?php echo $row1['id']; ?></td>
            <td><?php echo $row1['pw']; ?></td>
            <td><?php echo $row1['memo']; ?></td>
        </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>