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
    <title>RFN - Movimantação</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">RFN - Movimentação</a>
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
                    <a class="nav-link " href="Sobre.php" tabindex="-1" aria-disabled="true">Sobre</a>
                    </li>
                </ul>
                </form>
                <!--  -->
                </div>
                    <!-- Botões troca de senha e sair (index) -->
                    <div>
                        <span class="fw-bold me-3"><b>User:</b> 
                        <?php echo htmlspecialchars($_SESSION["username"]); ?>
                        <a href="../cadastro/reset-password.php" class="btn btn-outline-secondary btn-sm" tabindex="-1" role="button" aria-disabled="true">Trocar senha</a>
                        <a href="../cadastro/logout.php" class="btn btn-secondary btn-lg btn-sm" tabindex="-1" role="button" aria-disabled="true">Sair</a>
                    </div>
                </header>
            </div>
        </nav>
</body>
</html>
