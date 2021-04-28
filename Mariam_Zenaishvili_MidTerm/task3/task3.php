<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        form{
            width: 800px;
            border: 2px solid grey;
            background-color: lightgreen;
            margin: 0px;
            padding: 8px;
            font-family: "Arial";
            font-weight: normal;
            border: 6px solid darkgreen;
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
                // $text = '';

                $amount = $_POST['amount'];
                $snum = $_POST['snum'];
                $enum = $_POST['enum'];

                // for($i=0; $i<=$amount; $i++){
                //     $text += rand($snum,$enum);
                // }

                for($i = 0 ; $i < $amount; $i++){
                    $text[$i] = rand($snum,$enum);
                }


                $str = implode(", ", $text);  

                $name = "numbers.txt";
                $f = fopen("files/".$name, 'w');
                fwrite($f, $str);
                fclose($f);

                
        }

    ?>

    <form method="post">
        <h3>Genrate Random Numbers</h3>
        N: <input type="number" name="amount"> <br> <br><br>
        a: <input type="number" name="snum"> <br> <br>
        b: <input type="number" name="enum"> <br> <br>
        <button name="submit">Submit!</button>

        <div>
            <h3>Generated random numbers</h3>
            <?php
                $myfile = fopen("files/numbers.txt", "r");
                echo fread($myfile,filesize("files/numbers.txt"));
                fclose($myfile);
            ?>
        </div>
    </form>

</body>
</html>