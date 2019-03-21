<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php">GAMES</a>
        </div>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Categoria 1</a></li>
                <li><a href="#">Categoria 2</a></li>
                <li><a href="#">Categoria 3</a></li>
                <li><a href="#">Sobre nosotros</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section>

     <div class="card">
         <div class="form" method="POST" action="login.php">
             <h1>Entrar a web</h1>
             <input type="text" name="usuario" placeholder="Ingresa tu usuario"> 
             <input type="text" name="password" placeholder="Ingresa tu contraseña">
            <br>
             <input type="submit" value="Enviar">
         </div>
     </div>
     <br>
     <div class="card-registrarse">
         <div class="form" method="POST" action="registrarse.php">
             <h1>Registrate </h1>   
           
             <input type="text" name="nombre" placeholder="Ingresa tu nombre">
              <input type="email" name="email" placeholder="Ingresa tu email">
             <input type="password" name="password" placeholder="Ingresa tu contraseña"> 
             
             <input type="submit" value="Enviando">
         </div>
        
     </div>
           
    </section>

    <section class="article">
        <h1>PRIMERA ENTRADA</h1>
        <article>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, sequi iste dignissimos doloremque at aperiam, deleniti alias exercitationem minima facilis fugiat nulla ex quaerat, quibusdam placeat fuga nam pariatur totam.</p>
        </article>
        <article>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, sequi iste dignissimos doloremque at aperiam, deleniti alias exercitationem minima facilis fugiat nulla ex quaerat, quibusdam placeat fuga nam pariatur totam.</p>
        </article>
        <article>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, sequi iste dignissimos doloremque at aperiam, deleniti alias exercitationem minima facilis fugiat nulla ex quaerat, quibusdam placeat fuga nam pariatur totam.</p>
        </article>
    </section>

    <footer>
       <em>Desarrollado por Carlodaniel</em>
     
    </footer>
</body>
</html>