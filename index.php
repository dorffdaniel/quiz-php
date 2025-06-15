<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>

    <h1 class="title">QUIZ COM PHP</h1>

    <div class="d-flex justify-content-center align-items-center vh-100">

        <form action="result.php" method="post" class="form w-50">

            <label for="primeira">Qual a capital do Brasil ? </label>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="resu1" id="primeira">
            </div>

            <br>
            <br>


            <label for="segunda">Qual é a linguagem principal usada para desenvolvimento web no lado do servidor?</label>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="resu2" id="segunda">
            </div>

            <br>
            <br>

            <label for="terceira">Qual animal é conhecido como "rei da selva"?</label>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="resu3" id="terceira">
            </div>

            <button type="submit" class="btn btn-primary w-100">Enviar</button>

        </form>


    </div>



</body>

</html>