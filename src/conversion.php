
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="conversion.css">
    <title>Document</title>
</head>

<body>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $input= $_POST['input'];
    $radio = $_POST['conversion'];
    $result = "";
    
    // switch("conversion"){
    //     case "h_to_m":
    //         $result = $input * 60 ;
    //           break;
    //     case "h_to_s":
    //         $result = $input * 3600 ;
    //             break;
    // }
    if($radio == "h_to_m"){
        $result = $input * 60 . " ". "Minutes";

    }
    else {
        $result = $input * 3600 . " ". "Minutes";

    }
     
    


}


?>

<form method="post" , action="" >
    <div class="maindiv">
        <div class="div1">
            <input type="text" class="inputdiv1" name="input" id="input1">
        </div>
        <div class="div2">

              <input type="radio" id="h2m" name="conversion" <?php if (isset($radio) && $radio=="h_to_m") echo "checked";?> value="h_to_m">
              <label for="h2m" >hours to mins</label><br>
              <input type="radio" id="h2s" name="conversion" <?php if (isset($radio) && $radio=="h_to_s") echo "checked";?> value="h_to_s">
              <label for="h2s">hours to seconds</label><br>
             

        </div>
        <div>
           <p id="result1" > <?php  echo $result; ?> </p>
        </div>
        <div class="div4">
            <input type="submit" value="Convert" class="btn" >
               
        </div>
    </div>

</form>
</body>

</html>