<?php
    include "db_info.php";
?>
<?php
  error_reporting(E_ALL);
  ini_set( "display_errors", 1 );
?>
<?php
    $ID = $_POST['ID'];
    $PW = $_POST['PW'];
    $crypto_pw = hash('sha256', $PW);
    
    $sql = "SELECT * FROM register WHERE id = '" . $ID . "' AND pw = '" . $crypto_pw . "'";
    echo $sql,"<br>";
    $result = sq($sql);
    $row_count = mysqli_num_rows($result);
    
    if($row_count) { // 약한 보호 $row_count != 0
        // session 설정
        session_save_path('../session');
        session_start();
        $path = session_save_path().'/sess_'.session_id();
        // chmod($path, 0775);
        session_regenerate_id(true);

        $row = mysqli_fetch_array($result);
        $_SESSION['name'] = $row['id'];
        $_SESSION['password'] = $row['pw'];
        echo "<h1>SUCESS</h1>";
        echo "Your \$_session_ID : ".session_id()."<br>";
        echo "Your \$_session['name'] : ".$_SESSION['name']."<br>";
        echo "Your \$_session['password'] : ".$_SESSION['password'];
        echo "<br><a href='../noticeboard/index.php'>Go to noticeboard</a>";
    } else {
        echo "<h1>FAIL<h1>";
        echo "<script>
                // alert('FAIL');
                // location.href='login.html';
            </script>";
    }
?>