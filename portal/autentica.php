    <?php
        session_start();
        include('conexao.php');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['email']) || empty($_POST['senha'])) {
                header('Location: login.php');
                exit();
            }

            $email = mysqli_real_escape_string($conexao, $_POST['email']);
            $senha = mysqli_real_escape_string($conexao, md5($_POST['senha']));

            $query = "SELECT * FROM operadores
                    WHERE email = '{$email}' AND senha = '{$senha}'";

            $result = $conexao->query($query);

            while($dado = $result->fetch_array()) {
                $id_operador        = $dado['id_operador'];
                $nome_operador      = $dado['nome_operador'];
                $sobrenome_operador = $dado['sobrenome_operador'];
                $nivel              = $dado['nivel'];
            }


            if ($result) {
                $row = $result->num_rows;

                if ($row == 1) {
                    $dado = $result->fetch_assoc(); // Use fetch_assoc() para array associativo
                    $_SESSION['id_operador']        = $id_operador;
                    $_SESSION['nome_operador']      = $nome_operador;
                    $_SESSION['sobrenome_operador'] = $sobrenome_operador;
                    $_SESSION['email']              = $email;
                    $_SESSION['nivel']              = $nivel;

                    header('location: index.php');
                    exit();
                } else {
                    $_SESSION['nao_autenticado'] = true;
                    header('Location: login.php');
                    exit();
                }
            } else {
                // Adicione esta linha para verificar erros na consulta
                die("Erro na consulta: " . $conexao->error);
            }

        } else {
            header('Location: login.php');
            exit();
        }
    ?>