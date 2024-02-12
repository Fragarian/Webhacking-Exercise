<html>
<head>
    <title>cyber campus</title>

    <style>
        .login {
        position: absolute;
        left : 80px;
        top : 350px;
    }
    input[type="text"], input[type="password"] {
        width : 800px;
        height : 90px;
        margin-bottom : 10px;
        padding-left : 30px;
        /* background-color : rgb(232, 240, 254); */
        background-color : white;
        border : none;
        font-family: '돋움';
        font-size : 35px;
    } 
    .login_button {
        width : 800px;
        height : 90px;
        background-color : #2464b2;
        border : none;
        font-family: '돋움';
        font-size : 35px;
        color : white;
    }
    .total_login_button {
        margin-top : 30px;
        width : 100%;
        height : 80px;
        background-color : #142c52;
        border : none;
        font-family: '돋움';
        font-size : 25px;
        color : white;
        border-radius: 20px;
    }
    </style>
</head>
<body>
    <div class="imgScrollBox">
        <img style="width:100%;" src="cybercampus.png" alt="이미지 설명문" />
    </div>
    <form method="POST" action="./check_login.php">
        <div class="login">
            <input type="text" name="id" placeholder="사용자 아이디">
            <br>
            <input type="password" name="pw" placeholder="사용자 비밀번호">
            <br>
            <input type="submit" class="login_button" value="로그인">
            <br>
            <button class="total_login_button">통합 로그인</button>
        </div>
    </form>
</body>