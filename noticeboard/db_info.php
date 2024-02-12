<?php
    $db = new mysqli("localhost", "root", "0914", "victim");

    function sq($query) {
        global $db;
        return $db->query($query);
    }
?>