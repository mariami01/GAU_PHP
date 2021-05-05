<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task 1 </title>
</head>
<body>
    
    <?php
        $nums = array();
        $smaller_num_count = 0;    
        $greater_num_count = 0;

        for($i=0; $i<12; $i++){
            array_push($nums, rand (10,100));
        }

        // echo "Array Elements: ";
        // print_r($nums);

        if(isset($_POST["myArray"])){
            for($i=0; $i<count($nums); $i++){
                if($_POST['number']>$nums[$i]) $smaller_num_count++;
                else if($_POST['number']<$nums[$i]) $greater_num_count++;
            }

            echo "<p>$smaller_num_count smaller number in array. </p>";
            echo "<p>$greater_num_count greater number in array. </p>";

        }
    ?>

    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" >
        <h2>Enter a number: </h2>
        <input type="number" name="number">
        <button name="myArray">Submit!</button>
    </form>
</body>
</html>