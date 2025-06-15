<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body id="corpoResult">
    
    <?php 
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $res1 = $_POST["resu1"];
        $res2 = $_POST["resu2"];
        $res3 = $_POST["resu3"];

        if(!empty($res1) && !empty($res2) && !empty($res3)){
        $primeira = 'brasilia';
        $segunda = 'php';
        $terceira = 'leao';

        if(strtolower($res1) == $primeira){
            echo "Parabens voce acertou a primeira pergunta <br>";
        }else{
            echo "Resposta invalida, a respota correta é $primeira <br>";
        }

        if(strtolower($res2) == $segunda){
            echo "Parabens voce acertou a segunda pergunta <br>";
        }else{
            echo "Resposta invalida, a respota correta é $segunda <br>";
        }

        if(strtolower($res3) == $terceira){
            echo "Parabens voce acertou a terceira pergunta <br>";
        }else{
             echo "Resposta invalida, a respota correta é $terceira <br>";
        }

        }else{
            echo "Preencha os campos";
        }
    }

    
    ?>

    <button onclick="history.back()" class="btn btn-primary" id="btnBack"> voltar</button>

</body>
</html>