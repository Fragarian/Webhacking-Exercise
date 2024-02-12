<html>
    <title>Student search</title>
</html>
<body>

    <img height=500 width=1000 src="./img_archive/main/main.png?v=<?php echo date("Y-m-d H:i:s"); ?>" ></img>
    <h3>Student search</h3>

    <form method="POST" action="./info.php"> 
        <input type="text" name="studentNumber" placeholder="studentNumber">
        <input type="submit" value="search...">
    </form>

    <hr>

    <h3>Student img upload</h3>
    <h3></h3>
    <form method="POST" action="./img_upload.php?" enctype="multipart/form-data">
        <input type="text" name="file_name" placeholder="studentNumber">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <input type="submit" value="img upload">
    </form>

</body>