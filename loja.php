<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">DETALHES DA COMPRA!</h3>
            </div>
            <div class="card-body">
                <?php
                $nomeProduto = "CELULAR";
                $precoUnitario = 1500;
                $quantidadeComprada = 2;
                $temcupomdesconto = true;

                $total = $precoUnitario * $quantidadeComprada;

                $aplicadesconto = false; // Inicializa como false
                if ($total > 200 || $temcupomdesconto === true) {
                    $aplicardesconto = true;
                }

                $valedesconto = 200.00;
                if ($aplicadesconto) { // Use $aplicadesconto 
                    $valedesconto = $total * 0.10;
                }
                $totalapagar = $total - $valedesconto;
                ?>
                <p class="card-text"><strong>Nome do Produto:</strong> <?php echo $nomeProduto; ?></p>
                <hr>
                <p class="card-text"><strong>Quantidade:</strong> <?php echo $quantidadeComprada; ?></p>
                <hr>
                <p class="card-text"><strong>Preço Total (antes do desconto):</strong> R$ <?php echo number_format($total, 2, ',', '.'); ?></p>
                <hr>
                <p class="card-text"><strong>Desconto Aplicado:</strong> R$ <?php echo number_format($valedesconto, 2, ',', '.'); ?></p>
                <hr>
                <h5 class="card-title text-success">Total a Pagar: R$ <?php echo number_format($totalapagar, 2, ',', '.'); ?></h5>
            </div>
            <div class="card-footer text-muted">
                Obrigado pela sua compra!
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9QTTNr+om+wM+aVzN/2qfWf/nFfA0Gv9Q1jsJOpzN" crossorigin="anonymous"></script>
</body>
</html>