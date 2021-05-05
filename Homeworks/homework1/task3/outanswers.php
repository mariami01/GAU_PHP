<h1>Results:</h1>
<?php 
    $answers = array("ans1", "ans2", "ans3", "x = −b ± √b²-4ac/2a", "Slope = y₂ – y₁ / x₂ – x₁");
    $point = 0;
    $question ="question";
    if(isset($_POST["send_post"])){
        for($i=0; $i<5; $i++){
            // echo $answers[$i]."-".$_POST[$question . $i + 1];
            if($answers[$i] == $_POST[$question . $i+1]) $point++;
        }
        echo $point; 
    }
?>
