<?php
    $studentNumber = $_POST['studentNumber'];
    $img_src = file_exists("./img_archive/student/" . $studentNumber . '.png') ? $studentNumber : "default";
?>
<h1><?php echo $studentNumber; ?></h1>

<img height=500 width=500 src="./img_archive/student/<?php echo $img_src; ?>.png?v=<?php echo date("Y-m-d H:i:s"); ?>" ></img>