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
    <form action="returnpost.php" method="post">
        <h1>POST</h1>
        სტუდენტის სახელი: <input type="text" name="name">
        <br>
        სტუდენტის გვარი: <input type="text" name="lastnme">
        <br>
        საგანი: <input type="text" name="subject">
        <br>
        სემესტრი: <input type="number" name="semester">
        <br>
        ფაკულტეტი: <input type="text" name="faculity">
        <br>
        ნიშანი: <input type="number" name="score">
        <br>
        ლექტორის სახელი: <input type="text" name="lecturerName">
        <br>
        ლექტორის გვარი: <input type="text" name="LecturerLastname">
        <br>
        <button name="send_post">SEND POST!</button>
    </form>
</body>
</html>