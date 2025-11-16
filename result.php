 <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // strtolower serve para transforma tudo em minuscula
        $res1 = strtolower($_POST["resu1"]);
        $res2 = strtolower($_POST["resu2"]);
        $res3 = strtolower($_POST["resu3"]);

        if (!empty($res1) && !empty($res2) && !empty($res3)) {
            $primeira = 'brasilia';
            $segunda = 'php';
            $terceira = 'leao';
        }
    }

    // mandei tudo para um array e depois fiz um laço verificando as respostas 
    $campos = [$res1, $res2, $res3];
    $cont = 0;

    foreach ($campos as $valores) {
        if ($valores == $primeira) {
            $cont += 10;
        } else if ($valores == $segunda) {
            $cont += 10;
        } else if ($valores == $terceira) {
            $cont += 10;
        }
    }

    if ($cont == 30) {
        $msg = "SUPER INTELIGENTE";
    } else if ($cont == 20) {
        $msg = "FALTOU APENAS UMA";
    } else if ($cont == 10) {
        $msg = "UM POUCO MAL EM ";
    } else {
        $msg = "NENHUMA EM ...";
    }


    ?>


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


     <div class="container">
         <div class="row">
             <div class="col-12 d-flex justify-content-center align-items-center flex-column">
                 <div class="card w-50 d-flex align-items-center flex-column justify-content-center p-2" id="cardBody">
                     <div class="card-body">
                         <h2 class="card-title mb-3 text-center">Respostas</h2>
                         <?php if ($res1 == $primeira): ?>
                             <p class="certo">Parabens voce acertou a primeira pergunta</p>
                         <?php else: ?>
                             <p class="errado">Resposta invalida, a respota correta <?php echo $primeira ?> </p>
                         <?php endif; ?>

                         <?php if ($res2 == $segunda): ?>
                             <p class="certo">Parabens voce acertou a segunda </p>
                         <?php else: ?>
                             <p class="errado">Resposta invalida, a respota correta é <?php echo $segunda ?> </p>
                         <?php endif; ?>

                         <?php if ($res3 == $terceira): ?>
                             <p class="certo">Parabens voce acertou a terceira pergunta </p>
                         <?php else: ?>
                             <p class="errado">Resposta invalida, a respota correta é <?php echo $terceira ?> </p>
                         <?php endif; ?>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row mt-5">
             <div class="col-12 d-flex justify-content-center align-items-center flex-column">
                 <div class="card w-50">
                     <div class="card-body d-flex justify-content-center align-items-center">
                         <p> <?= $msg ?> </p>
                     </div>
                 </div>
                 <button onclick="history.back()" class="btn btn-primary" id="btnBack"> voltar</button>
             </div>
         </div>

     </div>




 </body>

 </html>