
<!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Restrita</title>
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
        .corve{
            background-color: #4682B4
        }
         .res{
                background: #b80707;
                backdrop-filter: blur(15px);
                padding: 80px;
                border-radius: 20px;
                text-align: center;
                box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            }

        
        
    </style>

 </head>
 <body>

 <!-- Navigation-->
    <nav class="navbar navbar-expand-lg corve text-uppercase fixed-top" id="mainNav">
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
    <div class="res">
        <h2 class="mb-4">ERRO</h2>
            <div class="typewriter">
                <p>A senha ou e-mail estão incorretos. Tente novamente!</p>
            </div>
            <a href = "index.html" class="btn btn-primary">Voltar</a>
    </div>

     
   
 </body>
 </html> 