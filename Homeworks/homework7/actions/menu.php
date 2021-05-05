<?php
    include './main.php'; 
    if(isset($_POST['insertMenu'])){
        $title = $_POST['Title'];
        $meta_k = $_POST['Meta_k'];
        $meta_d = $_POST['Meta_d'];
        $text = $_POST['Text'];

        $insert_query = "INSERT INTO Menu(Title, Meta_K, Meta_d, Text) 
                                VALUES('$title', '$meta_k', '$meta_d', '$text')";
        if(mysqli_query($conn, $insert_query)){
            header("InsertedMenu");
        }else{
            echo "Error: ". $insert_query . "<br>" . mysqli_error($conn);
        };
    }
?>


<div>
    <h2>Menu</h2>
    <form method="POST">
        <input type="text" name="Title" placeholder="Title">
        <br> <br>
        <input type="text" name="Meta_k" placeholder="Meta_k">
        <br> <br>
        <input type="text" name="Meta_d" placeholder="Meta_d">
        <br> <br>
        <input type="text" name="Text" placeholder="Text">
        <br> <br>
        <button name="insertMenu">INSERT</button>
    </form>
</div>