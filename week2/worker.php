<h1>Worker</h1>
<?php
    if(isset($_GET['user']))  echo $_GET['user'];
    echo "<hr>";
    if(isset($_GET['pwd']))  echo $_GET['pwd'];
    echo "<hr>";
    print_r($_GET);
    echo "<hr>";
    if(isset($_GET['cat'])) echo $_GET['cat'];
?>

<h1>
    <?=$_GET['user']?>
</h1>