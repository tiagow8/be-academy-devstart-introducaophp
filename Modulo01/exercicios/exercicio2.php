<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 2 - tabela HTML com PHP</title>
        <meta name="author" content="Tiago gomes"/>
        <meta name="keywords" content="php, tabela, produtos, html"/>
        <meta name="description" content="Tabela de produto simples com html e php"/>

        <style>
            body{
                margin: 0px;
                padding: 0px;
                display: flex;
                justify-content: center;
                align-items: flex-start;
            }
            table{
                text-align: center;
                border: 2px solid #808080;
            }
            table caption{
                margin-top: 10px;
                margin-bottom: 20px;
            }
        </style>
    </head>
<body>
    <?php

        $produto1 = [
            "nome" => "Caneca Devstart",
            "marca" => "Paylivre",
            "Qtd" => 20,
            "preco" => "35,00"];

        $produto2 = [
            "nome" => "Notebook Samsung",
            "marca" => "Samsung",
            "Qtd" => 10,
            "preco" => "4.000,00"];

        $produto3 = [
            "nome" => "Camisa Polo",
            "marca" => "Calvin Klein",
            "Qtd" => 15,
            "preco" => "50,00"];

        $produto4 = [
            "nome" => "Smartphone A20",
            "marca" => "Samsung",
            "Qtd" => 6,
            "preco" => "2000,00"];

       

        $produtos = [$produto1, $produto2, $produto3, $produto4];
    ?>
<table cellspacing="20">
    <caption>
        <h2>Tabela de produtos - Smartphones</h2>
    </caption>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Marca</th>
            <th>qtd.</th>
            <th>Preço</th>
        </tr>
    </thead> 
    <tbody>
        <?php
            foreach($produtos as $produto){
                echo "<tr>
                        <td>". $produto['nome'] ."</td>
                        <td>". $produto['marca'] ."</td>
                        <td>". $produto['Qtd'] ."</td>
                        <td>". $produto['preco'] ." Reais</td>
                    </tr>";
            }
        ?>
    </tbody>
</table>
</body>
</html>