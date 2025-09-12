<?php
include('verifica_login.php');
include('conexao.php');

$niveldapagina = array($mestre, $colaborador);

if (!in_array($nivel, $niveldapagina)) {
    echo "
        <script>
            alert('você nao tem permissao para acessar essa area!');
            history.go(-1);
        </script>
    ";
} else if (!empty($_POST['nome_plano']) || !empty($_POST['desc_plano']) || !empty($_POST['vlr_plano'])) {

    $nome_plano = $_POST['nome_plano'];
    $desc_plano = $_POST['desc_plano'];
    $vlr_plano = $_POST['vlr_plano'];

} else {
    echo " 
        <script>
            alert('VIOLAÇÃO: Tentativa ilegal de operação');
            history.go(-1);
        </script>
    ";
}

?>