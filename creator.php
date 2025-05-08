<?php
$diretorio = 'teste';
$arquivo = $diretorio . '/arquivo.php';

if (!file_exists($diretorio)) {
    if (!mkdir($diretorio, 0777, true)) {
        die("Erro: Não foi possível criar o diretório '$diretorio'.");
    } else {
        echo "Diretório '$diretorio' criado com sucesso.<br>";
    }
} else {
    echo "O diretório '$diretorio' já existe.<br>";
}

$conteudo = <<<PHP
<?php
class teste {
    function __construct() { 
        echo "Olá mundo!";
    }
}
?>
PHP;

if (file_put_contents($arquivo, $conteudo) === false) {
    echo "Erro: Não foi possível criar o arquivo '$arquivo'.";
} else {
    echo "Arquivo '$arquivo' criado com sucesso.";
}
?>
