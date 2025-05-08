<?php 

    $diretorio = "php";
    $arquivo = $diretorio . '/arquivo.php';
    
    mkdir("bucheee", 0777, true);
    file_put_contents("Classe.php", "Texto para conteúdo");