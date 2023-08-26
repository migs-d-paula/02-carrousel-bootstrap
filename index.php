<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <title>  :: Carousel - Bootstrap ::</title>
</head>
<body>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/sova.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>SOVA</h5>
                    <p>Um agente especialista em informações e controle de área, sendo conhecido por suas habilidades de rastreamento e reconhecimento.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/raze.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>RAZE</h5>
                    <p>Uma agente especialista em explosivos e combate de curto alcance, sendo conhecida por suas habilidades caóticas e seu estilo agressivo.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/chamber.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>CHAMBER</h5>
                    <p>Bem-vestido e armado até os dentes, o criador de armas francês Chamber coloca os inimigos para correr com precisão mortal.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="noticia">
        <div class="noticia-imagem">
            <img src="images/pequeno.png" alt="">
        </div>
        <div class="noticia-titulo">
            <p> Turma A2022 de TI do Senac se forma em novembro de 2023 </p>
        </div>
        <div class="noticia-descricao">
            <p> depois de passarem por diversos conteudos irão se formar finalmente </p>
        </div>
    </div>

    <?php 
    for($i = 0; $i < 8; $i++)
    {
        echo '<div class="noticia">';
        echo '   <div class="noticia-imagem">';
        echo '        <img src="images/carro.png" alt="">';
        echo '   </div>';
        echo '   <div class="noticia-titulo">';
        echo '        <p> Carros estao tomando vida em 2023 </p>';
        echo '    </div>';
        echo '    <div class="noticia-descricao">';
        echo '        <p> Os carros estao ganhando vida em 2023, tudo começou com herbie e o cometa Harlem. </p>';
        echo '   </div>';
        echo '</div>';
    }
    ?>
</body>
</html>