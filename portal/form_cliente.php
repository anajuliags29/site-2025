<?php
    include('verifica_login.php');
    include('conexao.php');

    $niveldapagina = array($mestre, $colaborador);

    if(!in_array ($nivel, $niveldapagina)) {
        echo
            "<script> 
            alert('Você não tem acesso a essa área!')
            history.go(-1);
            </script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head> 
        <title> INÍCIO | Meu Portal </title>
        <!------------------------------------ HEAD ------------------------------------>
        <?php include 'include-portal/head.php'; ?>
        <!------------------------------------ HEAD ------------------------------------>
    </head>
    <body>
        <header>
            <!--------------------------------- HEADER --------------------------------->
            <?php include 'include-portal/header.php'; ?>
            <!--------------------------------- HEADER --------------------------------->
        </header>
        
        <div class="container">
            <br>

            <center><h5> PREENCHA OS CAMPOS ABAIXO PARA ADICIONAR UM NOVO CLIENTE </h5></center>

            <hr>

            <?php
               if (isset ($_SESSION['msgFormCliente'])) {
                echo $_SESSION['msgFormCliente'];
                unset($_SESSION['msgFormCliente']);

               }
            ?>
       
            <form action= "cad_cliente.php" method="POST">
                <div class="form-row">
                    <div class="col">
                        <label for="nomeCliente">* Nome</label>
                        <input type="text" class="form-control" id= "nome_plano" name="nome_cliente" placeholder="Nome completo">
                    </div>
                    <div class="col">
                        <label for="cpfCliente"> CPF </label>
                        <input type="text" class="form-control" id="cpf_cliente"  name="cpf_cliente" placeholder="089.098.654-863">
                    </div>
                    <div class="col">
                        <label for="rg_Cliente">* RG</label>
                        <input type="text" class="form-control" id="vlr_plano" name="rg_Cliente" placeholder="01020304">
                    </div>
                </div>
                <div class="form-row">
                    <label for="rgCliente">* Plano</label>
                    <select class="form-control">
                        <option> ESCOLHA UM PLANO </option>
                        <?php 
                            $consultaPlano = "SELECT * FROM planos ORDER BY nome_plano ASC";

                            $conPlano = $conexao->query ($consultaPlano) or die ($conexao->error);
                            
                            while ($dadoPlano = $conPlano->fetch_array()) {
                                $id_plano = $dadoPlano ['id_plano'];
                                $nome_plano = $dadoPlano ['nome_plano'];

                                echo "<option value=$id_plano> $nome_plano </option>";
                            }
                        ?> 
                    </select>
                </div>

                <br>

                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-danger">Limpar</button> 
            </form>

            <br>
            
        </div>
        <footer>
            <!------------------------------- FOOTER ----------------------------------->
            <?php include 'include-portal/footer.php'; ?>
            <!------------------------------- FOOTER ----------------------------------->
        </footer>
    </body>
</html>