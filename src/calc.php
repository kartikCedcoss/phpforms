<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fInput =   $_POST['finput'];
    $sInput = $_POST['sinput'];
    $btnOp = $_POST['btnOp'];
    $ans ="";
switch($btnOp){
    case "+":
        $ans = $fInput + $sInput ;
        break ;
    case "-":
        $ans = $fInput - $sInput ;
        break ;
    case "*":
            $ans = $fInput * $sInput ;
                break ;
     case "/":
        $ans = $fInput / $sInput ;
                break ;
}

}
?>


<form method="post" , action="" >
First Number : <input type="text" name="finput" ><br>
Second Number : <input type="text" name="sinput" > <br>
</t> </t>
<input type="submit" name="btnOp" value="+" />
<input type="submit" name="btnOp" value="-" />
<input type="submit" name="btnOp" value="*" />
<input type="submit" name="btnOp" value="/" />
<div>
     
 <?php 
   
  echo $ans;
 
 ?>

</div>



</form> 

</body>
</html>