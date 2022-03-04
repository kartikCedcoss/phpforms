<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php  

if($_SERVER["REQUEST_METHOD"]=="POST"){
      
       $target_dir = 'uploads/';
        $target_file = $target_dir.basename($_FILES["img_upload"]["name"]);
        $uploadOK=1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if ($_FILES["img_upload"]["size"] > 200000) {
            echo "Image size should not exceed 2MB.";
            $uploadOK = 0;
          }
          if( $imageFileType != "png") {
            echo "Image type should be png only";
             $uploadOK = 0;
           }

          if ($uploadOK == 0) {
            echo "Sorry, your file was not uploaded.";
         
        } else {
            if (move_uploaded_file($_FILES["img_upload"]["tmp_name"], $target_file)) {
              echo "The file ". htmlspecialchars( basename( $_FILES["img_upload"]["name"])). " has been uploaded.";
            } else {
              echo "Sorry, there was an error uploading your file abc.";
            }
          }
        }
      ?>



 
    <form method="post" action="" enctype ='multipart/form-data' >
   <input type="file" name="img_upload"> <br> <br>
   <input type="submit" name="img_submit">


    </form>
</body>
</html>