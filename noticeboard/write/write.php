<?php
  error_reporting( E_ALL );
  ini_set( "display_errors", 1 );
?>
<?php
    session_save_path('../../session');
    session_start();

    if(isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
    } else {
        $name = "wrong";
        echo "<script>alert('허가되지 않은 접근!');</script>";
        echo "<script>location.href='../../login/login.html'</script>";
    }
?>
<head>
    <meta charset="UTF-8">
    <title>게시판</title>
    <link rel="stylesheet" type="text/css" href="./css/write.css?v=<?php echo date("Y-m-d H:i:s",time());?>">
</head>
<body>
    <div id="board_write">
        <h1><a href="../index.php">자유게시판</a></h1>
        <h4>글을 작성하는 공간입니다.</h4>
            <div id="write_area">
                <form action="write_ok.php" method="post">
                    <div id="in_title">
                        <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_name">
		                <?php echo $name; ?>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_content">
                        <textarea name="content" id="ucontent" placeholder="내용" required></textarea>
                    </div>
                    <div class="in_lock">
                        <input type="checkbox" value="1" name="lock">해당글을 잠급니다.
                    <div class="bt_se">
                        <button type="submit">글 작성</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
