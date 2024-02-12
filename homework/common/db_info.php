<?php
    // [] 제외하고 채우기
    $db = new mysqli("localhost", ["id"], ["pw"], ["database"]);

    function sq($query) {
        global $db;
        return $db->query($query);
    }
?>