<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task 3</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Quiz Time :)</h1>
    <form action="outanswers.php" method="post">
        <!-- Q - 1 -->
        <h3>1.What's answer of 2*2?</h3>

        <input type="radio" name="question1" value="ans1">
        <label for="ans2">4</label><br>

        <input type="radio" name="question1" value="ans2">
        <label for="ans2">8</label><br>

        <input type="radio" name="question1" value="ans3">
        <label for="ans3">6</label><br>

        <input type="radio" name="question1" value="ans4">
        <label for="ans4">10</label><br>
        <!-- Q - 2  -->

        <h3>2.What's answer of (2*2)-1?</h3>

        <input type="radio" name="question2" value="ans1">
        <label for="ans2">4</label><br>

        <input type="radio" name="question2" value="ans2">
        <label for="ans2">3</label><br>

        <input type="radio" name="question2" value="ans3">
        <label for="ans3">7</label><br>

        <input type="radio" name="question2" value="ans4">
        <label for="ans4">10</label><br>

        <!-- Q - 3  -->

        <h3>3.What's answer of (2*2)-2?</h3>

        <input type="radio" name="question3" value="ans1">
        <label for="ans2">3</label><br>

        <input type="radio" name="question3" value="ans2">
        <label for="ans2">6</label><br>

        <input type="radio" name="question3" value="ans3">
        <label for="ans3">2</label><br>

        <input type="radio" name="question3" value="ans4">
        <label for="ans4">12</label><br>

        <!-- Q - 4  -->
        <h3>4. Write the Quadratic Formula </h3>
        <input type="text" name="question4">

        <!-- Q - 5  -->
        <h3>5. Write the Slope Formula </h3>
        <input type="text" name="question5"> <br> <br>
        <button name="send_post">Submit!</button>
    </form>
</body>
</html>