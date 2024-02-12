<! DOCTYPE html>
<html lang = "kr" >
<head>
<meta charset = "utf-8" >
<title> 키보드와 하루 </title>
</head>
<body>
<?php
$v_test = $_POST [ "test" ];
print_r( $v_test );
?>
//폼에 있는 데이터를 현재 페이지에 던지기
<form method = "POST" action = "<?php echo $_SERVER['PHP_SELF'] ;?>" >
<input type = "text" name = "test" value ="<?php echo $v_test ;?>" />
<input type = "submit" value = "전송" />
</form>
</body>
</html>
