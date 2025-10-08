<?php
error_reporting(0);
ini_set('display_errors', 0);

$nada = "Dado não informado!";

$exibir = $_SERVER['REQUEST_METHOD'] == 'POST' ? true : false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['nome']) && !empty($_POST['nome'])) {

        $nome = $_POST['nome'];
    } else {

        $nome = $nada;
    }

    
    $semestre = isset($_POST['semestre']) && !empty($_POST['semestre']) ? $_POST['semestre'] : $nada;
    $numero = isset($_POST['numero']) && !empty($_POST['numero']) ? $_POST['numero'] : $nada;
    $resultado0 = 0 * $numero;
    $resultado1 = 1 * $numero; 
    $resultado2 = 2 * $numero; 
    $resultado3 = 3 * $numero; 
    $resultado4 = 4 * $numero; 
    $resultado5 = 5 * $numero; 
    $resultado6 = 6 * $numero; 
    $resultado7 = 7 * $numero; 
    $resultado8 = 8 * $numero; 
    $resultado9 = 9 * $numero; 
    $resultado10 = 10 * $numero; 
    $semestrefalta = 6 - $semestre;
}
?>

<!doctype html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bogle&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title>Dados do Cadastro</title>
        <style>
            * {
                margin: 0px;
                padding: 0px;
                box-sizing: border-box;
            }

            .containercards {
                display: flex;
                justify-content: center;
                gap: 5em;
            }

            .card {
                margin-top: 2%;
            }

            body h1 {
                text-align: center;
                margin-top: 1em;
                font-family: "BBH Sans Bogle", sans-serif;
                font-weight: 400;
                font-style: normal;
            }

            .table tbody td {
                text-align: center;
            }

            .btncontainer {
                max-width: 50%;
                margin: 0 auto;
                display: flex;
                justify-content: end;
            }
        </style>
    </head>

    <body>
        <?php if ($exibir): ?>

            <h1>Dados do Cadastro</h1>

            <div class="containercards">
                <div class="card" style="width: 18rem;">
                    <img src="https://conteudo.solutudo.com.br/wp-content/uploads/2022/05/fatec1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Olá <?= $nome ?></h5>
                        <p class="card-text"><b>Semestre Atual:</b> <?php echo $semestre ?></p>
                        <p class="card-text"><b>Faltam:</b> <?= $semestrefalta ?> semestres para acabar</p>
                    </div>
                </div>

                <div class="tabela">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Números</th>
                                <th scope="col"></th>
                                <th scope="col">Tabuada do <?= $numero ?></th>
                                <th scope="col">Resultado</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <td>0</td>
                                <td>X</td>
                                <td><?= $numero ?></td>
                                <td><?= $resultado0 ?></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>X</td>
                                <td><?= $numero ?></td>
                                <td><?= $resultado1 ?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>X</td>
                                <td><?= $numero ?></td>
                                <td><?= $resultado2 ?></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>X</td>
                                <td><?= $numero ?></td>
                                <td><?= $resultado3 ?></td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>X</td>
                                <td><?= $numero ?></td>
                                <td><?= $resultado4 ?></td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>X</td>
                                <td><?= $numero ?></td>
                                <td><?= $resultado5 ?></td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>X</td>
                                <td><?= $numero ?></td>
                                <td><?= $resultado6 ?></td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>X</td>
                                <td><?= $numero ?></td>
                                <td><?= $resultado7 ?></td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>X</td>
                                <td><?= $numero ?></td>
                                <td><?= $resultado8 ?></td>
                            </tr>

                            <tr>
                                <td>9</td>
                                <td>X</td>
                                <td><?= $numero ?></td>
                                <td><?= $resultado9 ?></td>
                            </tr>

                            <tr>
                                <td>10</td>
                                <td>X</td>
                                <td><?= $numero ?></td>
                                <td><?= $resultado10 ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="btncontainer">
                <a href="./index.php"><button class="btn btn-success">VOLTAR</button></a>
            </div>
        <?php endif; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>

</html>