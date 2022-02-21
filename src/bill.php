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
   $bill = 0;
   if($_SERVER["REQUEST_METHOD"] == "POST"){
       $unit = $_POST['unit'];
      
        $bill = myBill( $unit);

     }
   function myBill($unit){
      
       if ($unit <= 50){
           $bill = $unit*3.50;
       }
       elseif($unit>50 && $unit<=100){
           $temp = 50 * 3.50 ;
           $remain = $unit -50 ;
           $bill = $temp + ($remain * 4.00);
       }
       elseif($unit>100 && $unit<=200){
            $tempp = (50*3.50)+(100*4.00);
            $remain = $unit -150 ;
            $bill = $temp +($remain * 5.20);
       }
       else{
           $temp = (50*3.50)+(100*4.00)+( 100*5.20);
           $remain = $unit - 250 ;
           $bill = $temp + ($remain * 6.50 );
       }
       return    floatval($bill);
   }
   
   ?>
   <form method="post" action=""> 
   Bill: <input type="text" name="unit"  >
   <input type="submit"  name="submit" value="Submit">
   <div>
       <?php  

       echo  "<br>";
        echo $bill;
       
       
       ?>
</div>


</form>
</body>
</html>