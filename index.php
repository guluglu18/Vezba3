<?php
    function kalkulator($op1, $op2, $operator = "+"){
        switch($operator){
            case '+':
                $x=$op1+$op2;
            break;
            case '-':
                $x=$op1-$op2;
            break;
            case '*':
                $x=$op1*$op2;
            break;
            case '/':
                $x=$op1/$op2;
            break;
            default: $x="Nije definisana opcija!!!";
        }
        return $x;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>Treca Vezba - stranica 1</h1>
    <?php
        $rez = kalkulator(5,3,"+");
        echo "Kalkulator: rezultat - $rez<br><br>";
        $rez = kalkulator(5,3,"-");
        echo "Kalkulator: rezultat - $rez<br><br>";
        $rez = kalkulator(5,3,"*");
        echo "Kalkulator: rezultat - $rez<br><br>";
        $rez = kalkulator(5,3,"/");
        echo "Kalkulator: rezultat - $rez<br><br>";
        $rez = kalkulator(5,3,"%");
        echo "Kalkulator: rezultat - $rez<br><br>";

    ?>
    </div>
</body>
</html>