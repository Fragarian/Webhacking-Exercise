<?php
    include "db_info.php"
?>
<?php
    $id = $_GET['id'];
    $pw = $_GET['pw'];
    // $id = substr($id, 0, 16);
    // $pw = substr($pw, 0, 16);

    echo "id : " . $id . "<br>";
    echo "pw : " . $pw . "<br>";

    $sql = "SELECT * FROM register WHERE id='" . $id . "' AND pw = '" . $pw . "'";
    
    $result = sq($sql);
    $row = mysqli_fetch_array($result);
    $row_count = mysqli_num_rows($result);

    if($row_count != 0) {
        echo "success";
    } else {
        echo "fail";
    }
?>