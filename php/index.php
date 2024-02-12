<?php
    include "db_info.php";
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
?>
<?php
    $sql = "SELECT * FROM register";
    $result = sq($sql);
?>
<table border="1">
    <tr>
        <th>idx</th>
        <th>id</th>
        <th>pw</th>
    </tr>
<?php
    while($row = mysqli_fetch_array($result)) {
?>
    <tr>
        <td><?php echo $row['idx']; ?></td>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['pw']; ?></td>
    </tr>
<?php
    }
?>
</table>