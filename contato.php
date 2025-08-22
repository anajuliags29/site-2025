<!DOCTYPE html>
<html>
    <head>
        <title> CONTATO </title>
        <?php include 'includes-site/head.php'; ?>
        </head>
    <body>
        <header>
        <?php include 'includes-site/header.php'; ?>
        </header>
    <br>
    <form action="processa_formulario.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-md-6"> <label for="nome" > Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                </div>
                <div class="col-md-6"> <label for="idade" > Idade</label>
                    <input type="number" class="form-control" id="idade" name="idade" placeholder="idade" required>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <label for="email" > Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="col-md-6">
                <label for="telefone" > Telefone</label>
                <input type="number" class="form-control" id="telefone" name="telefone" placeholder=".." required>
            </div>
        </div>
        </div>
        <br>
        <div class="container">
            <label for="mensagem" > Mensagem</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="3" placeholder="Bem-Vindo(a)!"></textarea>
            <br>
            <button type="submit" class="btn btn-primary">ENVIAR</button>
            <button type="reset" class="btn btn-danger">LIMPAR</button>
        </div>
        <br>
    </form>
    
        <footer>
            <?php include 'includes-site/footer.php'; ?>
        </footer>
    </body>
</html>