<?php
    $db = new mysqli("localhost", "daehun", "4869", "daehun");

    function sq($query) {
        global $db;
        return $db->query($query);
    }
?>