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
    <form action="forTask1.php">
        <h1>GET</h1>
        სახელი: <input type="text" name="name">
        <br>
        გვარი: <input type="text" name="lastnme">
        <br>
        თანამდებობა: <input type="text" name="position">
        <br>
        ხელფასი: <input type="number" name="salary">
        <br>
        <button>SEND GET!</button>
    </form>
</body>
</html>