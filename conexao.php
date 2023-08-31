<?php
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $bd = 'culinary_blend_2ds';

    $conexao = new mysqli($host, $usuario,$senha,$bd);

    if($conexao->connect_error) {
        die('Erro ao conectar ao Banco de Dados');
    }

    echo'Conectado';
?>