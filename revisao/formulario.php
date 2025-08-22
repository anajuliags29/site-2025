<!DOCTYPE html>
<html>
    <head>
        <title> FORMULÁRIO </title>
    </head>
    <body>
        <form action="processa_dados.php" method="POST">
            <table border="1" width="400">
                <tr>
                    <td><label for="campo_nome">Nome:</label></td>
                    <td><input type="text" id="campo_nome" name="nome_usuario" size ="30" required  placeholder="informe seu nome completo" ></td>
                     
                </tr>
                <tr>
                    <td><label for="campo_email">Email:</label></td>
                    <td><input type="email" id="campo_email" name="email_usuario" size="30"  placeholder="informe seu email" ></td>
                    
                </tr>
                <tr>
                    <td colspan="2" align="center"> 
                        <button type="submit">Enviar Dados</button>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
