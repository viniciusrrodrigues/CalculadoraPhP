<?php
$num1 = 0;
$num2 = 0;
$resultado = 0;
$calcular = 'somar';

       if (isset($_GET['num1']) && ($_GET['num2'] && ($_GET['calcular']))){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $calcular = $_GET['calcular'];

        switch($calcular){  
            case 'somar':
                $resultado = $num1 + $num2;
                break;
            case 'subtrair':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicar':
                $resultado = $num1 * $num2;
                break;
            case 'dividir':
                $resultado = $num1 / $num2;
                break;
        }
       }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>minha calculadora</title>
</head>
<body>
    <form>
         Primeiro Número <br />
        <input type="number" name="num1" value=<?= $num1 ?> required/><br />
         Segundo Número <br />
         <input type="number" name="num2" value=<?= $num2 ?> required/><br /><br />
         <select name = "calcular">
            <option value="somar" <? ($calcular =='somar')?'Selected':''; ?>  >Somar</option>
            <option value="subtrair" <? ($calcular =='subtrair')?'Selected':''; ?> >Subtrair</option>
            <option value="multiplicar" <? ($calcular =='multiplicar')?'Selected':''; ?> >Multiplicar</option>
            <option value="dividir" <? ($calcular =='dividir')?'Selected':''; ?> >Dividir</option>    
     </select>
     <br /><br />
     <input type="submit" value="Calcular"/>
     <br /><br />
     <p>O resultado é <?= $resultado ?></p>
    </form>
</body>
</html>