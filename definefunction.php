<?php
//no argu,no return
function add1()
{
        $a=10;
        $b=20;
        echo "<br> add(function 1):".($a+$b);
}

//argu,no return
function add2($a,$b)
{
    echo"<br> add(function 2):".($a+$b);
}

//no argu,return
function add3()
{
    $a=5;
    $b=5;
    return($a+$b);
}

//argu,return
function add4($a,$b)
{
    return($a+$b);
}
add1();
add2(11,22);
$ans=add3();
echo"<br> answear of function 3:".$ans;
$ans=add4(45,45);
echo"<br> answear of function 4:".$ans;
?>