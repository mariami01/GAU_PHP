<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online file storage</title>
    <style type="text/css" media="all"> 
        @import url("style/style.css");
    </style>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>

</head>
<body>
    
<div id="container">
    <h1>Online File Storage</h1>
     
    <fieldset>
        <legend>Add a new file to the storage</legend>
        <form method="post" enctype="multipart/form-data" action="action.php">
            <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
            <p><label for="name">Select file</label><br />
            <input type="file" name="file" /></p>
            <p><input type="submit" name="submit" value="Start upload" /></p>
            </form>   
    </fieldset>

    <!-- <fieldset>
        <legend>Previousely uploaded files</legend>
        <ul id="menu">
            <li><a href="">All files</a></li>
            <li><a href="">Documents</a></li>
            <li><a href="">Images</a></li>
            <li><a href="">Applications</a></li>
        </ul>
        
        <ul id="files">
            <?php echo $fileName; ?>

        </ul>
    </fieldset> -->
</div>
</body>
</html>