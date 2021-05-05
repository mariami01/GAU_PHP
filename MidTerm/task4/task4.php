<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        form{
            width: 800px;
            border: 2px solid grey;
            background-color: green;
            background-color: #4b75b3;
            margin: 0px;
            padding: 8px;
            font-family: "Arial";
            font-weight: normal;
            border: 6px solid grey;
        }
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        if(!is_dir("files")) {
            mkdir("files");
        }
        if(isset($_POST['submit'])){
                $name = "test";
                $f = fopen("files/".$name, 'w');
                fwrite($f, $content);
                fclose($f);
            
        }
    ?>

    <form method="post">
        <h3>Upload txt file</h3>
        <h6>**NOTE: It will be placed in "files" Directory!</h6>
        <input type="hidden" name="MAX_FILE_SIZE" value="100000" /> <br>
        <p><label for="name">Select file</label><br/>
        <input type="file" name="file" /></p>
        <button name="submit">Upload file!</button>
    </form>
</body>
</html>