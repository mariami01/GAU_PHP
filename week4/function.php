<?php 
    function f1(){
        echo "<h1>Function</h1>";
    }
    function f2($name="Mariam", $lastname="Zena"){
        echo "<h1>Hello $name $lastname</h1>";
    }
    function f3(){
        return "Hello my Function";
    }
    function f4($x, $y, $z){
        return $x + $y + $z;
    }

    f1();
    echo "<hr>";
    f2("Joe", "Nelson");
    echo "<hr>";
    echo f3();
    echo "<hr>";
    echo f4(4,5,8);

    function f5($N){
        $a=1;
        if($N==1){
            return 1;
        }
        return $N*f5($N-1);
        
    }

    echo "<hr>";
    echo f5(5);
?>