<!-- PÁGINA DE LOGIN -->

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO DE LOGIN</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    <style>
        body{
            height:100vh;
            background-color: #87CEEB;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }
        .caixa{
            background-color:#87CEFA ;
            padding: 60px;
            border-radius: 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            border: 3px solid rgba(0,0,0,0.2) ;
        }
        
    </style>

 </head>
 <body>

 <!-- Navigation-->
    <nav class="navbar navbar-expand-lg corNav text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">PHP</a>
                <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.html#portifolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.html#about">Sobre PHP</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="formulario.php">Login</a></li>
                    </ul>
                </div>
            </div>
    </nav>
    <div class="caixa">
        <h1 class="titulo">Formulário de Login</h1>
        <div class="container">
            <form action="processa.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email </label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
                </div>
                
                <input  class="btn btn-primary" type="submit" value="LOGAR">
            
            </form>
        </div>
    </div>
        <?php
            if (isset($_GET['erro'])){
                echo"<script>alert('Email ou senha incorretos!')</script>";
            }
        ?>
   
 </body>
 </html> 


 