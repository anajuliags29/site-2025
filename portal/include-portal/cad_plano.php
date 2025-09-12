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
    
    $sql_code = "INSERT INTO planos (nome_plano, desc_plano, vlr_plano, dt_cad_plano) VALUES ('$nome_plano', '$desc_plano' ,'$vlr_plano', NOW())";

    if ($conexao->query($sql_code) or die($conexao->error)) {
       #_SESSION['msgFormPlano'] = "ok, plano insrido com sucesso!";
       header("Location: form_plano.php");
    } else {
        #_SESSION['msgFormPlano'] = "ERRO,, plano nao foi inserido!";
         header("Location: form_plano.php");
    }

} else {
    echo " 
        <script>
            alert('VIOLAÇÃO: Tentativa ilegal de operação');
            history.go(-1);
        </script>
    ";
}

?>