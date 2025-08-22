    <?php
        include('verifica_login.php');
        include('conexao.php');
    ?>
    <!DOCTYPE html>
    <html>  
        <head>
            <!----------------------------------------- HEAD ---------------------------->
            <title> INÍCIO| PORTAL </title>
            <?php include 'include-portal/head.php'; ?>
            <!----------------------------------------- HEAD ---------------------------->
        </head>
        <body>
            <header>
            <!----------------------------------------- HEADER ---------------------------->
            <?php include 'include-portal/header.php'; ?>
            <!----------------------------------------- HEADER ---------------------------->
    </header>
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="../portal/midias-portal/img/img1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>BEM VINDO!</h5>
                        <button type="button" class="btn btn-primary btn-lg">Conheça nossos planos!</button>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="../portal/midias-portal/img/img2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>BEM VINDO!</h5>
                        <button type="button" class="btn btn-primary btn-lg">Conheça nossos planos!</button>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="../portal/midias-portal/img/img3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>BEM VINDO!</h5>
                        <button type="button" class="btn btn-primary btn-lg">Conheça nossos planos!</button>
                    </div>
                    </div>
                </div>
            </div>
                
            <div class="conteiner">
                
            </div>

            <footer>
            <!----------------------------------------- FOOTER ---------------------------->
            <?php include 'include-portal/footer.php'; ?>
            <!----------------------------------------- FOOTER ---------------------------->
    </footer>
        </body>
    </html>
