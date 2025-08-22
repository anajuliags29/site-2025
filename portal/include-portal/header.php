<!-- NAVBAR DA LOGO E PESQUISA -->
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="midias-portal/img/logo.png" alt="Logo" width="80" height="80" class="d-inline-block align-text-top">
                </a>
                <form>
                <i class='fa fa-user-circle' style='font-size:24px'>&ensp;<?php echo $noperador ?> </i>
                </form>
                </div>
            </div>
            </nav>
            
            <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" id="header" href="#"><i class="fa fa-map-pin" style="font-size:24px"></i>&ensp;Início</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="header" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-plus" style="font-size:24px"></i>&ensp;Adicionar
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fa fa-address-book-o" style="font-size:24px"></i>&ensp;Cliente</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-tags" style="font-size:24px"></i>&ensp;Plano</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-calendar" style="font-size:24px"></i>&ensp;Atendimento</a></li>
                    </li>
                    </ul>
                    <li class="nav-item">
                    <a class="nav-link" id="header" href="fatura.php"><i class="fa fa-drivers-license" style="font-size:24px"></i>&ensp;Faturas</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="header" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-navicon" style="font-size:24px"></i>&ensp;Listar
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fa fa-address-book-o" style="font-size:24px"></i>&ensp;Clientes</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-tags" style="font-size:24px"></i>&ensp;Planos</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-calendar" style="font-size:24px"></i>&ensp;Atendimentos</a></li>
                    </ul>
                    </li>   
                </ul>
                <a href="contato.php">
                <button type="button" class="btn btn-secondary btn-lg"><i class="fa fa-mail-reply"></i>&ensp;Sair</button>
                </a>
            </div>
        </nav>
