<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 2 - tabela HTML com PHP</title>
        <meta name="author" content="Tiago gomes"/>
        <meta name="keywords" content="php, tabela, produtos, html"/>
        <meta name="description" content="Tabela simples com html e php"/>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
<body>
<?php

    $aluno1 =["nome" => "Isadora Gomes Silva",
            "email" => "isadora00@gmail.com",
            "telefone" => "88 99799 5949",
            "notas" => [
                8,
                10,
                8,
                6 // 27,5
            ]];

    $aluno2 =["nome" => "Marcelo Andrade Ferro",
            "email" => "marcelor3@gmail.com",
            "telefone" => "11 99943 4909",
            "notas" => [
                5,
                6,
                9,
                10 // 7,5
            ]];

    $aluno3 =["nome" => "Nicolas Sousa Gomes",
            "email" => "nicolasbarros@hotmail.com",
            "telefone" => "21 98811 0969",
            "notas" => [
                7,
                8,
                7,
                9 // 7,75
            ]];



    $alunos = [$aluno1, $aluno2, $aluno3];
?>
<div class="container">
    <table class="table table-hover table-striped mt-5">
        <h2 class="mt-5 text-center">Média dos Alunos</h2>
        <hr/>
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Média</th>
            </tr>
        </thead>
        <tbody>
                <?php

                    foreach($alunos as $aluno){

                            $index = 0;
                            $total = 0;
                            while($index < count($aluno['notas'])){

                                $total += $aluno['notas'][$index];
                                $index++;
                            }

                            $media = $total / 4;

                            $mediaFinal = number_format($media, 1, '.', '');

                        echo "<tr>
                                <td>{$aluno['nome']}</td>
                                <td>{$aluno['email']}</td>
                                <td>{$aluno['telefone']}</td>
                                <td>{$mediaFinal}</td>
                            </tr>";


                    }

                ?>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>