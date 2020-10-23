<html>
<body>
    // third exercise
<form action="Exercise_three.php" method = "get">
enter 1st number: <br>
<input name= "num1"><br>
enter 2nd number: <br>
<input name= "num2"><br>
<button type= "submit"=">Submit</button> <br><br>

<?php

if(isset($_GET['num1']) || isset($_GET['num2']))
{
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    echo "The GCD of $num1 and $num2 =", gcd($num1, $num2);
}
function gcd($num1, $num2)
{
    if($num2==0)
        return $num1;
    return gcd($num2, $num1 % $num2);
}
?> 
</form>
</body>
</html>


