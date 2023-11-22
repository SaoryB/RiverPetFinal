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

        .fund{
            background-image: url('uploads/ofertas/River4.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .content {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
        }
        .cor{
            color:white;
        }
    </style>
</head>
<body>
  <header class="header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="<?php echo e(url('welcome')); ?>"><strong class="h6 mb-0 font-weight-bold text-uppercase">Inicio</strong></a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo e(url('publicperfil')); ?>">Quem Somos</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo e(url('publicplano')); ?>">Planos</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">Área do Admin</a></li>
          </ul>
      </div>
  </div>
</nav>

</header>
<section class="fund">
<div class="text-left cor" class="container">
</div><div class="col-md-6">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<h2>Olá, seja bem vindo a RiverPet!</h2>
<h4>Um PetShop comprometido em criar uma experiência</h4>
<h4>excepcional para você e seu Pet.</h4>
<h4>Venha adquirir nossos serviços!!</h4>
</div>
</div>
<div class="text-left">
<br/>
<a href="<?php echo e(url('agenda/create')); ?>" button type="button" class="btn btn-success btn-lg">
   QUERO REALIZAR AGENDAMENTO
</a>
</div>
<div> </div>
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
</div>
</section>
    <footer class="text-center text-white" style="background-color: #2e1d28;">
      <div class="container p-4 pb-0">
        <section class="">
          <p class="d-flex justify-content-center align-items-center">
            <span class="me-3 text-center">Alguma dúvida ou sugestão? Entre em contato conosco:   </span>
            <p>    </p>
            <a href="" button type="button" class="btn btn-outline-light btn-rounded">
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
<?php /**PATH C:\Fontes\ultimatent\petriver\resources\views/welcome.blade.php ENDPATH**/ ?>