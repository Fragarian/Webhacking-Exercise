<html>
<head>
    <title>글 작성</title>
</head>
<body>
    <h1>글 작성 공간입니다.</h1>

    <form method="POST" action="check_write.php">
        <legend>글 제목</legend>
        <input type="text" name="title">
        <legend>작성자</legend>
        <input type="text" name="writer">
        <legend>본문</legend>
        <input type="text" name="content">
        <legend>비밀번호</legend>
        <input type="text" name="pw">
        <legend>비공개 여부</legend>
        <input type="checkbox" name="checkbox">
        <br>
        <input type="submit" value="글 작성">
    </form>

</body>
</html>