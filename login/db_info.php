<?php
    $db = new mysqli("127.0.0.1", "root", "", "victim");

    function sq($query) {
        global $db;
        return $db->query($query);
    }
?>