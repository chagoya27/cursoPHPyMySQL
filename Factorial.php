<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>

<body>
    <form method="POST">
        <label >Ingresa un numero entero: </label>
        <input type="text" name="entrada">
        <br>
        <button type ="submit">Calcular</button>
        <label>El resultado es: </label>
    </form>
</body>
</html>

<?php  
    $m = $_POST['entrada'];
    function factorial ($n){
        if($n ==0 || $n == 1)
            return 1;
        else
            return $n*factorial($n-1);
    }
    echo factorial($m);
?>