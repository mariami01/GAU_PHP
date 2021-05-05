<!DOCTYPE html>
<html lang="en">
<head>
    <title>Week 4 </title>
    <style>
        header{
            border: solid 5px blue;
            height: 90px;
            margin: auto;
            width: 70%;
            margin-bottom: 10px;
            background-color: grey;
        }
        .body{
            border: solid 5px blue;
            min-height: 330px;
            margin: auto;
            width: 70%;
            background-color: cyan;
            margin-bottom: 10px;
        }
        footer{
            border: solid 5px blue;
            min-height: 60px;
            margin-bottom: 10px;
            margin: auto;
            width: 70%;
            background-color: brown;
        }
    </style>

</head>
<body>
    <?php 
        // if(isset($_GET['profile'])){
        //     include("block/profile.php");
        // }else{
        //     include("block/autorization.php");
        // }
        // for($i=0; $i<5; $i++){
        //     @include("block/header/php");
        // }
        include("block/header.php");
        include_once("block/body.php");
        require("block/footer.php");
    ?>
</body>
</html>