<html>
<body>
//second exercise
<form action ="Exercise_two.php" method= "post">
<input type ="text" name ="num1" value ="" placeholder="      ENTER A NUMBER"><br>
<input type ="text" name ="num2" value ="" placeholder="      ENTER A NUMBER"><br>
<input type ="submit" name ="add" value ="+">
<input type ="submit" name ="sub" value ="-">
<input type ="submit" name ="mul" value ="*">
<input type ="submit" name ="div" value ="/">
</form>
<?php 
if (isset($_POST['add']))
{
    $num1 = $_POST['num1'];
    $num2= $_POST['num2'];
    $add = $num1 + $num2;
    echo "The sum is: ". $add;
}
if (isset($_POST['sub']))
{   
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $sub = $num1 - $num2;
    echo "The difference is: ". $sub;
}
if (isset($_POST['mul']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $mul = $num1 * $num2;
    echo "The product is: ". $mul;

}
if (isset($_POST['div']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $div = $num1 / $num2;
    echo "The quotient is: ". $div;

}
?>
</body>
</html>
