<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bogle&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title>Formulário</title>
        <style>
            * {
                margin: 0px;
                padding: 0px;
                box-sizing: border-box;
            }

            form a, button {
                margin-top: 20px;
            }

            form label {
                font-size: 1.2rem;
            }

            #container h1 {
                text-align: center;
            }

            #numero {
                margin: 20px 0px 0px 0px;
            }

            body h1 {
                text-align: center;
                margin-top: 0.7em;
                font-family: "BBH Sans Bogle", sans-serif;
                font-weight: 400;
                font-style: normal;
            }
        </style>
    </head>

    <body>

        <div id="container" class="container-fluid">
            <h1>Formulario da Fatec</h1>

            <form method="POST" action="recebe-form.php">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>

                <select class="form-select" name="semestre" id="semestre">
                    <option selected value="0">Escolha seu semestre</option>
                    <option value="1° Semestre">1° Semestre</option>
                    <option value="2° Semestre">2° Semestre</option>
                    <option value="3° Semestre">3° Semestre</option>
                    <option value="4° Semestre">4° Semestre</option>
                    <option value="5° Semestre">5° Semestre</option>
                    <option value="6° Semestre">6° Semestre</option>
                </select>

                <select class="form-select" name="numero" id="numero">
                    <option selected value="0">Escolha um número de 0 a 10</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>

                <a href="index.php" class="btn btn-info">VOLTAR</a>
                <button type="reset" class="btn btn-warning">LIMPAR</button>
                <button type="submit" class="btn btn-success">ENVIAR PARA O PHP</button>

            </form>
        </div>

    </body>

</html>