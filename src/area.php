
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="area.css">
   
    <title></title>
</head>
      

<body>
<?php  
  if($_SERVER["REQUEST_METHOD"]=="POST"){
     $input1 = $_POST['input1'];
     $input2 = $_POST['input2'];
     $area = $_post['area'];
    $result =  $input1 * $input2 ;
    
    }



?>


<form  method="post" , action="" >
    <div class="inputdiv1">
        <label>Length of Rectangle</label> <input type="text" id="input1" name="input1" > <label>mtr</label>
         </div>
             <br>
             <br>
         <div class="inputdiv2" >
            <label>Width of Rectangle </label> <input type="text" id="input2" name="input2" > <label>mtr</label>
             </div>
             <br>
             <div  ><input type="submit" class="button1" name="area" value= "Calculate Area"  > </div>
             
             <div class="div3">
                <?php  
                   
                echo $result." "."mtr";                    
                ?>

                            
                </div>

              
</form>
             
     
</body>
</html>