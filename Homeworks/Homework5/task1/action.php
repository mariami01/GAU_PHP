<?php 
    if(isset($_FILES['submit']))
    {
        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'png', 'gif');

        if(in_array($fileActualExt, $allowed)){
            if($fileExt === 0){
                if($fileSize < 100000){
                    $fileNameNew = uniqid('', true). ".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: task1.php?uploadsuccess");

                }else{
                    echo "your file is too big!";
                }
            }else{
                echo "there was an error uploadin your file!";
            }
        }else{
            echo "you cannot upload files of tis type!";
        }

    }
?>