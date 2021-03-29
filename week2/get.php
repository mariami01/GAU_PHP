<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <style>
        form {
            border: solid 1px;
            margin: auto;
            width: 300px;
            padding: 10px;
        }

        form input  {
            margin: 10px;
        }

        table {
            border: solid 1px;
            border-collapse: collapse;
        }

        table td, th{
            border: solid 1px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <form action="worker.php">
        <h1>GET</h1>
        <input type="text" name="user"> - user
        <br>
        <input type="password" name="pwd"> - password
        <br>
        <button>SEND GET!</button>
    </form>

    <br>
    <br>
    <hr>
    <?php
        if(isset($_POST['send_post']) && !empty($_POST['user']) && !empty($_POST['pwd'])){
    ?>
    <table>
        <tr>
            <th>user</th>
            <th>password</th>
        </tr>
        <tr>
            <td>
                <?php
                    echo $_POST['user'];
                ?>
            </td>
             <td>
                <?php
                    echo $_POST['pwd'];
                ?>
            </td>
        </tr>
    </table>
    <?php
        }
    ?>
    <hr>
        
    <form method="post">
        <h1>POST</h1>
        <input type="text" name="user"> - user
        <br>
        <input type="password" name="pwd"> - password
        <br>
        <button name='send_post'>SEND POST!</button>
    </form>

</body>
</html>