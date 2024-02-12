<html>
<head>
    <title>write</title>

    <style>
        input[type="text"], input[type="password"], textarea {
            width : 30%;
        }

        textarea {
            height : 200px;
        }
    </style>
</head>
<body>

    <h1>write</h1>
    
    <!-- 과제 : POST로 ./write_ok.php로 값을 보낼것 -->
    <form method="POST" action="./write_ok.php">
        <!-- required : 값이 꼭 들어가 있어야만 조건이 만족 -->
        <input type="text" name="id" placeholder="id" required>
        <br>
        <!-- 과제 : input type = text | name, placeholder = title | required 옵션 넣을 것-->
        <input type="text" name="title" placeholder="title" required>
        <br>
        <!-- 과제 : tag = textarea | name, placeholder = content | required 옵션 넣을 것-->
        <textarea name="content" placeholder="content" required></textarea>
        <br>
        <!-- 과제 : input type = password | name, placeholder | required 옵션 넣을 것= pw-->
        <input type="password" name="pw" placeholder="pw" required>

        <p>You want to lock?</p>
        <!-- 과제 : input type = checkbox | name = is_lock -->
        <input type="checkbox" name="is_lock">
        <br>
        <!-- 과제 : input type = submit -->
        <input type="submit">
    </form>

    <a href="../index.php">메인으로 돌아가기</a>
</body>
</html>