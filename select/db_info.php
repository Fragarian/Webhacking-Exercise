<?php
    $db = new mysqli("localhost", "pay1oad", "pay1oad", "webhacking");

    function sq($query) {
        global $db;
        return $db->query($query);
    }
?>