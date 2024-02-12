<?php
    $idx = $_GET['idx'];
?>

<form method="POST" action="./check_lock_post.php?idx=<?php echo $idx; ?>">
    <input type="text" name="pw">
    <input type="submit" value="비밀번호 검사">
</form>