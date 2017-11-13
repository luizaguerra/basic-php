<?php

function nameFunction($param){
    //action

    //return
}

function calc($num1, $num2, $op){
    if($op=="+"){
        return $num1+$num2;
    }
    else if($op=="-"){
        return $num1-$num2;
    }
    else if($op=="*"){
        return $num1*$num2;
    }
    else if ($op=="/"){
        return $num1/$num2;
    }
    else
    return "Erro!";
}

echo calc(4, 6, "+");
echo "<br/>";

echo calc(4, 3, "-");
echo "<br/>";

echo calc(2, 4, "*");
echo "<br/>";

echo calc(3, 2, "/");
echo "<br/>";

echo calc(3, 2, "a");
echo "<br/>";
?>