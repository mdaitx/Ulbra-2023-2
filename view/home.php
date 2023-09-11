<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <?php require_once $_SERVER ['DOCUMENT_ROOT'] . '/'. FOLDER . '/view/navbar.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous">
    </script>
<header class="container-fluid text-center bg-dark text-white p-3">
    <h2> Atividade de AP1 </h2>
    <h3>Mathias Daitx Santos de Oliveira</h3>
</header>

<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://www.forumdaconstrucao.com.br/materias/imagens/02144_02.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Semana da acessibilidade!</h5>
        <p>"Juntos, podemos construir um mundo onde a acessibilidade seja uma ponte que conecte todos os corações e mentes, transformando desafios em oportunidades e inspirando a inclusão de todos."</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://diariodainclusaosocialdotcom.files.wordpress.com/2017/11/acessibilidade.jpg?w=660&h=312&crop=1" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark">Semana da acessibilidade!</h5>
        <p class="text-dark">"Juntos, podemos construir um mundo onde a acessibilidade seja uma ponte que conecte todos os corações e mentes, transformando desafios em oportunidades e inspirando a inclusão de todos."</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.ufsm.br/app/uploads/sites/825/2021/09/Imagem11-1024x576.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark">Semana da acessibilidade!</h5>
        <p class="text-dark">"Juntos, podemos construir um mundo onde a acessibilidade seja uma ponte que conecte todos os corações e mentes, transformando desafios em oportunidades e inspirando a inclusão de todos."</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<footer class="container-fluid text-center text-white bg-dark p-2"> <h2> Desenvolvimento - WEB </h2></footer>
</body>
</html>
