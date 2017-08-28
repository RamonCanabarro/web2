<?php include_once "../cabecalho.php"?>
<?php include_once "../rodape.php"?>

1-quando selecionar a marca chamar o ajax
$('$id_marca).change(function){
    $('#id_modelo').loead('processamento?acao=recuperar-modelos&id_marca=' + $('#id_marca').val());
});
2- requisiçao url
    exl:s.ajax({
url:'pagina.php'(){
}});
exl: s('#div_retorno').load('pagina.php');
3- processamento da requisiçao
4- retorno da requisição

echo sql die
function ()(
$('#id_modelo').triger("chosen:updated");
)
