<h1>Results:</h1>
<?php 
    $answers = array("1", "2", "3", "x = −b ± √b²-4ac/2a", "Slope = y₂ – y₁ / x₂ – x₁");
    $point = 0;
    $question ="question";
    if(isset($_POST["send_post"])){
        for($i=1; $i<5; $i++){
            if($answers[$i] == $_POST[$question . $i + 1]) $point++;
        }
        echo $point; 
    }
?>
