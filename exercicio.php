<?php
session_start();

if($_COOKIE['usuario']) {
  $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']) {
  header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="author" content="Rodrigo Anchieta"/>
  <meta name="copyright" content="Rodrigo anchieta"/>
  <meta name="contact" content="rodrigoganchieta@gmail.com"/>
  <meta name="robots" content="all"/>
  <meta name="googlebot" content="all"/>
  <meta name="robots" content="index,follow"/>
  <meta name="googlebot" content="index,follow"/>
  <meta name="distribution" content="global"/>
  <meta name="rating" content="general"/>
  <meta name="rating" content="safe for kids"/>
  <meta name="classification" content="Sites">

  <title>PHP 7 Completo - Rodrigo Gonçalves de Anchieta</title>

  <meta name="description" content="PHP 7 Completo - Curso do Desenvolvedor Web + Projetos criado pela COD3R, aluno Rodrigo Gonçalves de Anchieta">
  <meta name="abstract" content="PHP 7 Completo - Curso do Desenvolvedor Web + Projetos criado pela COD3R, aluno Rodrigo Gonçalves de Anchieta">
  <meta name="keywords" content="PHP, desenvolvedor back-end, Rodrigo Anchieta, rodrigoganchieta, Rodrigo Gonçalves de Anchieta">

  <link rel="shortcut icon" type="image/x-icon" href="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/exercicio.css">
</head>
<body class="exercicio">
  <header class="cabecalho">
    <h1>PHP 7 Completo - Curso do Desenvolvedor Web + Projetos</h1>
    <h2>Visualização do Exercício</h2>
  </header>
  <nav class="navegacao">
    <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
    <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
    <a href="index.php">Voltar</a>
    <a href="javascript:void(0)" onclick="sair();" class="vermelho">Sair</a>
  </nav>
  <main class="principal">
    <div class="conteudo">
      <?php include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php"); ?>
    </div>
  </main>
  <footer class="rodape">
    <p>© <?= date('Y'); ?> - COD3R & <a href="https://github.com/rodrigoganchieta" target="_blank"><i class="devicon-github-original"></i> RODRIGOGANCHIETA</a></p>
  </footer>
  <script>
      function sair() {
        var result;
        var r = confirm("Deseja sair do sistema?");
        if (r == true) {
          window.location.href = "logout.php";
        }
        document.getElementById("conf").innerHTML = result;
      }
  </script>
</body>
</html>
