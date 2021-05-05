<?php
        if(isset($_POST[$insertUsers])){
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $age = $_POST['age'];
            $date = $_POST['date'];
            $Regdate = $_POST['Regdate'];
            $password = $_POST['password'];
            $gender = $_POST['gender'];

            $insertUser_query = "INSERT INTO Users(Name, Lastname, Age, Date, Reg_date, Password, Gender)
                                            VALUES ('$name', '$lastname','$age', '$date', '$Regdate','$password', '$Gender',)";
            if(mysqli_query($conn, $insertUser_query)){
                header("InsertedUser");
            }else{
                echo "Error: ". $insertUser_query . "<br>" . mysqli_error($conn);
            };
        }
    ?>


<div>
    <h2>Users</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Name">
        <br> <br>
        <input type="text" name="lastname" placeholder="LastName">
        <br> <br>
        <input type="number" name="age" placeholder="Age">
        <br> <br>
        <input type="date" name="date" placeholder="Date">
        <br> <br>
        <input type="date" name="Regdate" placeholder="Reg_Date">
        <br> <br>
        <input type="password" name="password" placeholder="Password">
        <br> <br>
        <input type="text" name="gender" placeholder="Gender">
        <br> <br>
        <button name="insertUsers">INSERT</button>
    </form>

</div>