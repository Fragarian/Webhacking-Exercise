<?php
    $db = new mysqli("localhost", "root", "", "victim");

    function sq($query) {
        global $db;
        return $db->query($query);
    }
?>