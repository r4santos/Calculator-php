<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <div>
        <h1>Calculator´s R4</h1>
        <?php
            if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["ope"])){
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $ope = $_POST["ope"];

                if($num1 == "" && $num2 == ""){
                    echo "Não foi possível realizar o cálculo <br> Informe os valores";
                } elseif($num1 == ""){
                    echo "Não foi possível realizar o cálculo <br> Informe o primerio valor";
                }elseif($num2 == ""){
                    echo "Não foi possível realizar o cálculo <br> Informe o segundo valor";
                }elseif($num2 == 0 && $ope == "/"){
                    echo "Não é possível fazer uma divisão por 0";
                }else{
                    if ($ope == "*") {
                        $result = $num1 * $num2;
                    } elseif ($ope == "/") {
                        $result = $num1 / $num2;
                    } elseif ($ope == " ") {
                        $result = $num1 + $num2;
                        $ope = "+";
                    } elseif ($ope == "-") {
                        $result = $num1 - $num2;
                    } else {
                        $result = 'nan';
                    }
    
                    echo "O resultado de ", $num1, " ", $ope, " ", $num2, " = ", $result;
                }               
            } else{
                echo "Parâmetros não foram encontrados";
            }
        ?>
        <br>
        <a href="index.php"><button>Voltar</button></a>
    </div>

    <style>
        body {
            text-align: center;
            background-color:rgb(124, 121, 121);
        }

        div {
            border: 1px solid #000000;
            background-color: #ffffff;
            width: 300px;
            height: 160px;
            border-radius: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        button{
            margin-top: 10px;
            background-color: blue;
            color: white;
            border-radius: 10px;
            cursor: pointer;
        }
    </style>
</body>

</html>