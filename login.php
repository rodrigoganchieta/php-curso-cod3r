<?php
/*  php -S localhost:8000 -t . */
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($_POST['email']) {
  $usuarios = [
    [
      "nome" => "Rodrigo Gonçalves de Anchieta",
      "email" => "rodrigoganchieta@gmail.com",
      "senha" => "123456",
    ]
  ];

  foreach ($usuarios as $usuario) {
    $emailValido = $email === $usuario['email'];
    $senhaValida = $senha === $usuario['senha'];

    if ($emailValido && $senhaValida) {
      $_SESSION['erros'] = null;
      $_SESSION['usuario'] = $usuario['nome'];
      $exp = time() + 60 * 60 * 24 * 30;
      setcookie('usuario', $usuario['nome'], $exp);
      header('Location: index.php');
    }
  }

  if (!$_SESSION['usuario']) {
    $_SESSION['erros'] = ['Usuário/Senha inválido!'];
  }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="Rodrigo Anchieta" />
  <meta name="copyright" content="Rodrigo anchieta" />
  <meta name="contact" content="rodrigoganchieta@gmail.com" />
  <meta name="robots" content="all" />
  <meta name="googlebot" content="all" />
  <meta name="robots" content="index,follow" />
  <meta name="googlebot" content="index,follow" />
  <meta name="distribution" content="global" />
  <meta name="rating" content="general" />
  <meta name="rating" content="safe for kids" />
  <meta name="classification" content="Sites">

  <title>PHP 7 Completo - Rodrigo Gonçalves de Anchieta</title>

  <meta name="description" content="PHP 7 Completo - Curso do Desenvolvedor Web + Projetos criado pela COD3R">
  <meta name="abstract" content="PHP 7 Completo - Curso do Desenvolvedor Web + Projetos criado pela COD3R">
  <meta name="keywords"
    content="PHP 7 Completo, desenvolvedor back-end, Rodrigo Anchieta, rodrigoganchieta, Rodrigo Gonçalves de Anchieta">

  <link rel="shortcut icon" type="image/x-icon"
    href="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>

<body class="login">
  <header class="cabecalho">
    <h1>PHP 7 Complete - Web Developer Course + Projects</h1>
    <h2>Welcome</h2>
  </header>
  <main class="principal">
    <div class="conteudo">
      <h3>Log in to your account</h3>
      <?php if ($_SESSION['erros']): ?>
        <div class="erros">
          <?php foreach ($_SESSION['erros'] as $erro): ?>
            <p>
              <?= $erro ?>
            </p>
          <?php endforeach ?>
        </div>
      <?php endif ?>
      <form action="#" id="form-login" method="post">
        <div>
          <label for="email">E-mail:</label>
          <input type="email" name="email" id="email" value="rodrigoganchieta@gmail.com" autofocus>
        </div>
        <div>
          <label for="senha">Password:</label>
          <input type="password" name="senha" id="senha" value="123456">
        </div>
        <button>Log in</button>
      </form>
    </div>
  </main>
  <footer class="rodape">
    <p>©
      <?= date('Y'); ?> - COD3R & <a href="https://github.com/rodrigoganchieta" target="_blank"><i
          class="devicon-github-original"></i> RODRIGOGANCHIETA</a>
    </p>
  </footer>
</body>

</html>