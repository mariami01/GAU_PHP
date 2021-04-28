<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N1</title>
    <style>
        form, .files{
            border: solid black 1px;
            margin: 10px auto;
            padding: 10px;
            width: 500px;
        }
        form{
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <?php
        if(!is_dir("files")) {
            mkdir("files");
        }
        if(isset($_POST['writeButtonFile'])){
            $text = $_POST['text'];
            $tarigi = date("Y-m-d-H-i-s");
            $f = fopen("files/".$tarigi, 'w');
            fwrite($f, $text);
            fclose($f);
        }

        if(!is_dir("folders")) {
            mkdir("folders");
        }

        if(isset($_POST['writeButtonFolder'])){

            if(!is_dir('folders'."/".$_POST['folderName'])){
                mkdir('folders'."/".$_POST['folderName']);
            }else{
                echo "<script>alert('Folder with same name already exists!')</script>";
            }         
        }
    ?>
    <form method="post">
        <h3>Create a folder</h3>
        <input type="text" name="folderName" placeholder="folderName"> <br> <br>
        <button name="writeButtonFolder">Create Folder</button> <br> <br>

        <hr>
        <hr>
        <h3>Create a file</h3>
        <!-- <input type="text" placeholder="Directory where you want to create a file"> <br> <br> -->
        <textarea name="text" rows="5" cols="40"></textarea> - Text
        <br><br>
        <hr>    
        <button name="writeButtonFile">Create file</button>
    </form>
    <div class="files">
        <h2>Drive Storage</h2>
        <ul>
            <h3>Files</h3>
            <?php
                $files = scandir("files");
                for($i=2; $i<count($files); $i++){
                    echo "<li><a href='files/".$files[$i]."'>".$files[$i]."</a></li>";
                }
            ?>
        </ul>
        <ul>
            <h3>Folder</h3>
            <?php 
                $folders = scandir("folders");
                for($i=2; $i<count($folders); $i++){
                    echo "<li><a href='folders/".$folders[$i]."'>".$folders[$i]."</a></li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>