<html>
<head>
    <title>login</title>
</head>
<body>
    <h1>Login page</h1>

    <script>
        function print_sql() {
            var ID = "daehun";
            var PW = document.getElementById("PW").value;
            var sql = "SELECT * FROM register2 WHERE id='" + ID + "' AND pw ='" + PW + "'";
            var comment_before = "";
            var comment_after = "";
            if(sql.indexOf("#") != -1) {
                comment_before = sql.slice(0, sql.indexOf("#"));
                comment_after = sql.slice(sql.indexOf("#"));
                document.getElementById("SQL").innerHTML = comment_before + ";<span style='color:rgba(0,0,0, 0.1);white-space:nowrap;'>" + comment_after +"<span>";
            } else {
                document.getElementById("SQL").innerHTML = sql + ";";
            }      
        }
    </script>

    <form method="POST" action="protect2.php">
        <legend>ID</legend>
        <p>daehun</p>
        <legend>PW</legend>
        <input type="text" id="PW" name="PW" placeholder="PW" oninput="print_sql()">
        <br>
        <input type="submit" value="login">
    </form>
    <div id="SQL"></div>
    <a href="../register/register.html">Go to register</a>

    <script>print_sql();</script>
</body>
</html>
