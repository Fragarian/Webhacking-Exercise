<!-- Reference : https://www.w3schools.com/php/php_file_upload.asp -->
<?php
  $file_name = $_POST['file_name'];
  // $hash_file_name = hash("sha256", $idx . $salt) . ".png";
  // $hash_file_name = basename($_FILES["fileToUpload"]["name"]);

  $target_dir = "./img_archive/student/";
  // $target_file = $target_dir . $studentNumber . ".png";
 // $target_file = $target_dir . $file_name . ".png";
   $target_file = $target_dir . $file_name;
  echo $target_file;

  $uploadOk = 1;

  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      $uploadOk = 1;
    } else {
      // 파일 맞는지 검사
      echo "<script>alert('파일이 아닌것 같습니다.');</script>";
      $uploadOk = 0;
    }
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 1000*1000*5) {
    // 사이즈 검사
    echo "<script>alert('업로드 크기는 5MB까지만 가능합니다.');</script>";
    $uploadOk = 0;
  }

  // Allow certain file formats
  /*
  if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png"
  && $imageFileType != "gif" ) {
    // 확장자 검사
    echo "<script>alert('확장자는 jpg, jpeg, png, gif만 가능합니다.');</script>";
    $uploadOk = 0;
  }
  */

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "<script>alert('wrong!!');</script>";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "<script>alert('이미지가 정상적으로 업로드 되었습니다.');</script>";
      echo "<script>history.back();</script>";
    } else {
      // 업로드중 이상 생김
      echo "<script>alert('업로드중 이상이 발생하였습니다.');</script>";
      echo $_FILES["fileToUpload"]["error"];
      echo;
    }
  }
?>
