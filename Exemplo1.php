<?php

$diretorio = "php";
$arquivo = $diretorio . '/arquivo.php';

if (!file_exists($diretorio)) {
    if (!mkdir($diretorio, 0777, true)) {
        print "Erro: Diretório não criado.";
    } else {
        print "Diretório " . $diretorio . " criado com sucesso!";
    }
} else {
    print "O diretório " . $diretorio . " já existe.";
}
$x = "'Olá mundo'";
$conteudo = <<<PHP

    <?php

        class Teste{
            function __construct(){

                print $x;
                }
            }
    new Teste();
                ?>

    PHP;
if(file_put_contents($arquivo, $conteudo)===false){
    print "Erro ao criar arquivo";
}
else{
    print "Arquivo criado com sucesso!";
}