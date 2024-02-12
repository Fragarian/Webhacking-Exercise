<?php
    include "../db_info.php";
?>
<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
?>
<?php
    session_save_path('../../session');
    session_start();
    $username = $_SESSION['name'];
    $userpw = $_SESSION['password'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date("Y-m-d H:i:s",time());
    $lock = isset($_POST['lock']) ? ($_POST['lock']) : 0;

    if($username && $userpw && $title && $content){
        $sql = "insert into board(id, pw, title, content, date, is_lock) values('".$username."','".$userpw."','".$title."','".$content."','".$date."',".$lock.")";
        sq($sql);
        echo "<script>
                alert('글쓰기 완료되었습니다.');
                location.href='../index.php';
            </script>";
    }else{
        echo "<script>
                alert('글쓰기에 실패했습니다.');
                history.back();
            </script>";
    }
?>