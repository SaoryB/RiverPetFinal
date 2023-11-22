<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>RiverPet</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .navbar {
            background-color:white;
        }

        .navbar-dark .navbar-nav .nav-link{
            color: black;
        }
        .fund3{
            background-image: url('uploads/ofertas/fundo2.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .form-container {
            border: 2px solid #080808;
            padding: 20px;
            background-color: #fcc0c0
        }

        .table {
        text-align: center;
        border-collapse: collapse;
        width: 100%;
        text-align: center;
        background-color: #ebcfcf;
        max-width: 1200px;
        margin: 0 auto;
        }

        .table th, .table td {
        border: 1px solid #000000;
        padding: 8px;
         }

        .table th {
        background-color: #ec8383;
        }



    </style>
</head>
<body>
    <section class="fund3">
  <header class="header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="<?php echo e(url('home')); ?>"><strong class="h6 mb-0 font-weight-bold text-uppercase">Inicio</strong></a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo e(url('plano')); ?>">Nossos Planos</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo e(url('nossosperfil')); ?>">Nossos Perfis</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo e(url('horario')); ?>">Horários</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo e(url('agenda')); ?>">Agendamentos</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo e(url('welcome')); ?>">Sair</a></li>
          </ul>
      </div>
  </div>
</nav>
</header>
<main class="py-4 fund">
    <?php echo $__env->yieldContent('content'); ?>
</main>
<footer class="text-center text-white" style="background-color: #2e1d28;">
    <div class="container p-4 pb-0">
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3 text-center">Alguma dúvida ou sugestão? Entre em contato conosco:   </span>
          <p>    </p>
          <a href="contato.html" button type="button" class="btn btn-outline-light btn-rounded">
            Entrar em contato!</a>
        </p>
      </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(3, 3, 3, 0.082);">
      © 2023 Ciências da Computação:
      <a class="text-white" href="https://www.instagram.com/ccp.famper/?igshid=NjIwNzIyMDk2Mg%3D%3D">Instagram</a>
    </div>
  </footer>
</body>
<?php /**PATH C:\Fontes\ultimatent\petriver\resources\views/layouts/admin.blade.php ENDPATH**/ ?>