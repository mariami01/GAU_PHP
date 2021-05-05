<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        form{
            width: 800px;
            height: 200px;
            border: 2px solid grey;
            background-color: purple;
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

                $stringErr = 'უნდა იყოს 2ზე მეტი და 50ზე ნაკლები სიმბოლო!ფაილში არ ჩაიწერება ასეთ შემთხვევაში!';
                $text = '';
                $engWord = $_POST['engWord'];
                $geoWord = $_POST['geoWord'];
 
                if(strlen($engWord)> 2 && strlen($engWord)< 50){
                    $text = $engWord."-".$geoWord;

                    $name = "lexicon.txt";
                    $f = fopen("files/".$name, 'w');
                    fwrite($f, $text);
                    fclose($f);
                }else{
                    echo $stringErr;
                }
        }

    ?>

    <form method="post">
        <h3>Translate</h3>
        English Word: <input type="text" name="engWord">  <br> <br>

        Georgian Word: <input type="text" name="geoWord"> <br> <br>
        <button name="submit">Submit!</button> <br>
        
        <?php
            echo $stringErr;
        ?>
    </form>
    
</body>
</html>