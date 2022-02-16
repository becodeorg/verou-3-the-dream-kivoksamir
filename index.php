

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">

    <form action="" method="GET">

<label for="country">Choose a country:</label>

<select name="country" id="country">

    <option> </option>
    
  <option value="japan" name="input_1">Japan</option>
  <option value="usa" name="input_2">usa</option>
  <option value="uk" name="input_3">uk</option>
  <option value="canada" name="input_4">canada</option>
</select>
    <input type="submit">

</form>

</div>
    
</body>
</html>


<?php

//var_dump($_GET);

if(empty($_GET)){
    echo "select the country to get the info..";
}elseif
    ($_GET["country"]=="japan"){
        echo "currency to euro is 1.05";
}elseif($_GET["country"]=="usa"){
        echo "currency to euro is 0.85";
}elseif($_GET["country"]=="uk"){
    echo "currency to euro is 1.80";
}else{
    echo"you must select a country to get INFO !!";
};


    


