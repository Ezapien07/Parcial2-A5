<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>

<body>
    <?php
    $total = 0.0;
    //Uso de clases 
    class Calculadora
    {

        //funciones estaticas
        public static function sumar($pNum, $pNum2)
        {
            return $pNum + $pNum2;
        }
        public static function restar($pNum, $pNum2)
        {
            return $pNum - $pNum2;
        }
        public static function multi($pNum, $pNum2)
        {
            return $pNum * $pNum2;
        }
        public static function dividir($pNum, $pNum2)
        {
            if($pNum==0 && $pNum2==0) {
                return  "Invalido";
            }
            if ($pNum > $pNum2) {
                if ($pNum2 != 0) {
                    return $pNum / $pNum2;
                }else{
                    return " no se puede dividir entre 0";
                }
            }else {
                return $pNum / $pNum2;
            }
        }
    }
    if (isset($_POST['calcular'])) {
        //
        $numero1 = $_POST["num"];
        $numero2 = $_POST["num2"];
        $op = $_POST['operaciones'];
        if ( empty($numero1)) {
            $numero1=0;
        }else if ( empty($numero2)){
            $numero2=0;
        }elseif( empty($numero1) && empty($numero2)){
             $numero1=0;
             $numero2=0;   
        }
        switch ($op) {
            case 1:
                
                $resultado = Calculadora::sumar($numero1, $numero2);
                include('show.php');
                break;
            case 2:
                $resultado = Calculadora::restar($numero1,$numero2);
                include_once('show.php');
                break;
            case 3:
                $resultado = Calculadora::multi($numero1,$numero2);
                include_once('show.php');
                break;
            case 4:
                $resultado = Calculadora::dividir($numero1,$numero2);
                include_once('show.php');
                break;
        }
    } else {
        include_once("form.php");
    }

    ?>
</body>

</html>