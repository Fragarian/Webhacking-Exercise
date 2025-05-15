<?php
    include "../db_info.php";
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
?>
<?php
    $id = $_POST['ID'];
    $pw1 = $_POST['PW1'];
    $pw2 = $_POST['PW2'];

    // 입력값 검증
    if(empty($id) || empty($pw1) || empty($pw2)) {
        echo "<script>
                alert('모든 필드를 입력해주세요.');
                history.back();
              </script>";
        exit;
    }

    // 비밀번호 일치 확인
    if($pw1 !== $pw2) {
        echo "<script>
                alert('비밀번호가 일치하지 않습니다.');
                history.back();
              </script>";
        exit;
    }

    // ID 중복 확인
    $check_sql = "SELECT * FROM register WHERE id = '".$id."'";
    $check_result = sq($check_sql);
    
    if(mysqli_num_rows($check_result) > 0) {
        echo "<script>
                alert('이미 존재하는 ID입니다.');
                history.back();
              </script>";
        exit;
    }

    // 회원가입 처리
    $sql = "INSERT INTO register(id, pw) VALUES('".$id."', '".$pw1."')";
    $result = sq($sql);

    if($result) {
        echo "<script>
                alert('회원가입이 완료되었습니다.');
                location.href='../login/login.html';
              </script>";
    } else {
        echo "<script>
                alert('회원가입에 실패했습니다.');  
                history.back();
              </script>";
    }
?> 