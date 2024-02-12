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
    
    <!-- 과제 : method와 action 채우기(POST로 ./write_ok.php로 값을 보낼것) -->
    <form method="" action="">
        <!-- required : 값이 꼭 들어가 있어야만 조건이 만족 -->
        <input type="text" name="id" placeholder="id" required>
        <br>
        <!-- 과제 : input type = text | name, placeholder = title | required 옵션 넣을 것-->
        
        <br>
        <!-- 과제 : tag = textarea | name, placeholder = content | required 옵션 넣을 것-->
        
        <br>
        <!-- 과제 : input type = password | name, placeholder | required 옵션 넣을 것= pw-->
        

        <p>You want to lock?</p>
        <!-- 과제 : input type = checkbox | name = is_lock -->
        
        <br>
        <!-- 과제 : input type = submit -->
        
    </form>

    <a href="../index.php">메인으로 돌아가기</a>
</body>
</html>