<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="stylesheet" href="./src/css/bootstrap.css">
</head>

<body id="corpoTi">

    <div class="container">
        <div class="row  ">
            <div class="col-12 d-flex justify-content-center align-items-center flex-column">
                <h3 class="mb-4">Bem vindo ao Quiz Geral</h3>
                <form action="./result.php" method="post" class="form w-50 text-center">

                    <input type="text" name="opc2" value="2" class="d-none">

                    <label for="primeira">Qual planeta é conhecido como o "planeta vermelho"?</label>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="resu4" id="primeira">
                    </div>

                    <label for="segunda" class="mt-3">Qual animal é considerado o “rei da selva”?</label>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="resu5" id="segunda">
                    </div>

                    <label for="terceira" class="mt-3">Qual metal é líquido à temperatura ambiente?</label>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="resu6" id="terceira">
                    </div>


                    <div class="row">
                        <div class="col-12 d-flex">
                            <a href="./index.php" class="m-2 w-25">
                                <button type="button" class="btn btn-warning w-100">Voltar</button>
                            </a>


                            <button type="submit" class="btn btn-primary w-75 m-2">Enviar</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </div>


</body>

</html>