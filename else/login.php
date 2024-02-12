<?php
    include "db_info.php";
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
?>
<html>
<head>
    <title>login</title>
</head>
<body>
    <form method="POST" action="check_login.php">
        <input type="text" name="id" placeholder="id">
        <input type="text" name="pw" placeholder="pw">
        <input type="submit" value="login">
    <form>
</body>
</html>