<?php include_once 'cabecalho.php' ?>
<link href="css.css" rel="stylesheet">

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div id="divConteudo">
    <table id="tabela">
        <thead>
        <tr>
            <th>Código</th>
            <th>Descrição</th>
            <th>Grupo</th>
        </tr>
        <tr>
            <th><input type="text" id="txtColuna1"/></th>
            <th><input type="text" id="txtColuna2"/></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>001.01-A</td>
            <td>Feijão preto</td>
            <td>Cerais</td>
        </tr>
        <tr>
            <td>001.02-B</td>
            <td>Feijão branco</td>
            <td>Cerais</td>
        </tr>
        <tr>
            <td>002.10-C</td>
            <td>Arroz parboilizado</td>
            <td>Cerais</td>
        </tr>
        <tr>
            <td>003.12-D</td>
            <td>Iogurte de morango</td>
            <td>Laticínios</td>
        </tr>
        <tr>
            <td>041.27-E</td>
            <td>Sabão em pó</td>
            <td>Limpeza</td>
        </tr>
        </tbody>
    </table>
    <?php include_once 'rodape2.php' ?>
    <script>
        $(function () {
            $("#tabela input").keyup(function () {
                var index = $(this).parent().index();
                var nth = "#tabela td:nth-child(" + (index + 1).toString() + ")";
                var valor = $(this).val().toUpperCase();
                $("#tabela tbody tr").show();
                $(nth).each(function () {
                    if ($(this).text().toUpperCase().indexOf(valor) < 0) {
                        $(this).parent().hide();
                    }
                });
            });

            $("#tabela input").blur(function () {
                $(this).val("");
            });
        });
    </script>