<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<style>
    table{
        width:400px;
        height: 300px;
        border: 1px solid black;
    }
    tr, td{
        border: 1px solid black;
    }
</style>
<?php

    function generateTable(){
        
        $table = "<table>";
            for($row=1;$row<=10;$row++){
                $table .="<tr>";
                for($col=1;$col<=10;$col++){
                    $r = rand(10,99);
                    $table .= "<td>$r</td> \n";
                }
                $table .="</tr>";
            }
        $table .= "</table>";
        return $table;
    }

    echo generateTable();
?>