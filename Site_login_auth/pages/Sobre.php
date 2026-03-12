<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../cadastro/login.php");
    exit;
}
?>
 

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>RFN - Sobre</title>
    <!-- <link rel="stylesheet" href="/css/styles.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">RFN - Sobre</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Welcome.php">Início</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="Movimentacao.php" tabindex="-1" aria-disabled="true">Movimentações</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Sobre</a>
                    </li>
                </ul>
                </form>
                <!--  -->
                </div>
                <!-- Botões troca de senha e sair (index) -->
                <header>
                    <div>
                        <span class="fw-bold me-3"><b>User:</b> 
                        <?php echo htmlspecialchars($_SESSION["username"]); ?>
                        <a href="../cadastro/reset-password.php" class="btn btn-outline-secondary btn-sm" tabindex="-1" role="button" aria-disabled="true">Trocar senha</a>
                        <a href="../cadastro/logout.php" class="btn btn-secondary btn-lg btn-sm" tabindex="-1" role="button" aria-disabled="true">Sair</a>
                    </div>
                </header>
            </div>
        </nav>
    
<div class="card text-center">
  <div class="card-header">

  </div>

 <div class="card-body text-center mx-auto" style="max-width: 1080px;">

    <h5 class="card-title">Ezio Oliveira</h5>

    <p class="fs-6 lh-lg">

        Sou desenvolvedor de software com foco no desenvolvimento de aplicações web utilizando as linguagens PHP e Java.
        Tenho experiência na criação de sistemas web robustos, seguros e escaláveis, atuando desde a modelagem de banco de dados até a
        implementação de interfaces e integração entre sistemas.

        Possuo conhecimento em tecnologias essenciais para o desenvolvimento web, como JavaScript, HTML e CSS, além de frameworks e
        bibliotecas modernas que auxiliam na construção de aplicações eficientes e responsivas, como Bootstrap e Spring Framework.

        No desenvolvimento backend, trabalho com integração de bancos de dados relacionais como MySQL e PostgreSQL, aplicando boas práticas
        de arquitetura, segurança e organização de código. Também utilizo ferramentas de versionamento como Git para controle e colaboração em projetos.

        Meu foco é desenvolver soluções tecnológicas que contribuam para a otimização de processos, melhoria da experiência do usuário e
        eficiência operacional, sempre buscando aprendizado contínuo e evolução nas áreas de desenvolvimento web, engenharia de software e boas
        práticas de programação.

    </p>

</div>

</div>


</body>
</html>
