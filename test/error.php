<?php
    $db = new mysqli("localhost", "daehun", "4869", "daehun");

    function sq($query) {
        global $db;
        return $db->query($query);
    }

  error_reporting(E_ALL);
  ini_set("display_errors", 1);
?>
<?php
    $par = $_GET['par'];

    $sql = "SELECT * FROM register WHERE " . $par;
    $result = sq($sql);

    if($result === false) {
        echo $sql;
    }

?>