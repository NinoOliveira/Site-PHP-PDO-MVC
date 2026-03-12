<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário já está logado, em caso afirmativo, redirecione-o para a página de boas-vindas
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: Welcome.php");
    exit;
}
 
// Incluir arquivo de configuração
//require_once "config/conexao.php";

 ?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>RFN - Equipamentos</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">RFN - Storage</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" ></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled"  tabindex="-1" aria-disabled="true"></a>
            </li>
          </ul>
          <!-- Botões Acessar home -->
          <div class="text-end"> <a class="btn btn-outline-secondary" href="cadastro/Login.php"> <i class="bi bi-box-arrow-in-right"></i> Acessar </a> </div>

          <!-- Tratativa de poup-up Teste -- Funciona, porem ao logar, o logon se mantem em nova tela bloqueando tela aberta antirormente.
          <div class="text-end">
                <a class="btn btn-outline-secondary" href="cadastro/login.php" onclick="window.open('cadastro/login.php','popup','width=540,height=420'); return false;">
                    <i class="bi bi-box-arrow-in-right"></i> Acessar
                </a>
            </div> -->
          </form>
        </div>
      </div>
    </nav>
</div>
</body>
</html>
