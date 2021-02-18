<!DOCTYPE html>
<html lang="pt_BR">
<?php
session_start();
?>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Historypedia</title>

    <link rel="stylesheet" href="public/css/menu.css" />
    <link rel="stylesheet" href="public/css/main.css" />
    <link rel="stylesheet" href="public/css/home-page.css" />
    <link rel="stylesheet" href="public/css/footer.css" />

    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <header>
        <img id="logo" src="" alt="Logotipo de Historypedia" />
        <div class="menu">
          <a href="index.php" id="home">Home</a>
          <a href="discovery.php" id="descobertas">Descobertas</a>
          <a href="civilization.php" id="civilizacao">Civilização</a>
          <a href="chronology.php" id="cronologia">Cronologia</a>
          <a href="exercises.php" id="exercicios">Exercícios</a>
          <a href="contact-us.php" id="faleconosco">Fale Conosco</a>
        </div>
        <div id="buttons">
          
        <?php if (isset($_SESSION['logged'])): ?>
          <a href="profile.html" id="profileViewLink" class="accountLinks"><?php print "DEU BOM";?>
          <form action="logout.php" method="POST">
            <button type="submit">
              Sair
            </button>
          </form>
            
        <?php else: ?>
          <button type="button" id="log-in" class="button-hover">
            <a href="log-in.php" id="log-in" class="a-hover">Log In</a>
          </button>
          
          <button type="button" id="sign-up" class="button-hover">
            <a href="sign-up.php" id="sign-up" class="a-hover">Sign Up</a>
          </button>
        <?php endif; ?>
        </button>
        </div>
      </header>
      <main>
        <div class="slogan">
          <strong>Conhecimento é poder...</strong>
          <p>e aqui, você pode se tornar um imperador.</p>
        </div>
        <form class="search-bar" action="">
          <fieldset>
            <legend>Pesquise o que desejar</legend>
            <input
              type="search"
              name="search"
              placeholder="Ex. A história de Alexandre, o Grande"
            />
            <button id="search-button" type="submit">
              Buscar
            </button>
          </fieldset>
        </form>
      </main>
    </div>
    <main id="feed">
    <section id="list">
        <header>
          <h1>Últimas descobertas</h1>
          <a href="discovery.php">
            Ver todas &nbsp; &rarr;
          </a>
        </header>
        
        <div>
          <div class="item">
          <?php
          require_once('connect.php');

          $consulta = $con->query("SELECT title, image FROM post WHERE idpost = 1");

          while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            echo "{$linha['title']} </br>";
            echo "<img src='./public/upload/" . $linha['image'] . "' />";
          }
          ?>

            <h1></h1>
            
            <a href="#">Responder &nbsp; &rarr;</a>
          </div>
          
          <div class="item">
          <?php
          require_once('connect.php');

          $consulta = $con->query("SELECT title, image FROM post WHERE idpost = 2");

          while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            echo "{$linha['title']} </br>";
            echo "<img src='./public/upload/" . $linha['image'] . "' />";
          } 
          ?>

            <h1></h1>
            
            <a href="#">Responder &nbsp; &rarr;</a>
          </div>
          
          <div class="item">
          <?php
          require_once('connect.php');

          $consulta = $con->query("SELECT title, image FROM post WHERE idpost = 3");

          while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            echo "{$linha['title']} </br>";
            echo "<img src='./public/upload/" . $linha['image'] . "' />";
          }
          ?>
            
            <h1></h1>
            
            <a href="#">Responder &nbsp; &rarr;</a>
          </div>
        </div>
      </section>
      <section id="list">
        <header>
        <h1>Últimos artigos históricos</h1>
          <a href="study.php">
            Ver todas &nbsp; &rarr;
          </a>
        </header>
        
        <div>
          <div class="item">
          <?php
          require_once('connect.php');

          $consulta = $con->query("SELECT title, image FROM post WHERE idpost = 6");

          while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            echo "{$linha['title']} </br>";
            echo "<img src='./public/upload/" . $linha['image'] . "' />";
          }
          ?>
            
            <h1></h1>
            
            <a href="#">Responder &nbsp; &rarr;</a>
          </div>
          
          <div class="item">
          <?php
          require_once('connect.php');

          $consulta = $con->query("SELECT title, image FROM post WHERE idpost = 7");

          while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            echo "{$linha['title']} </br>";
            echo "<img src='./public/upload/" . $linha['image'] . "' />";
          }
          ?>
            
            <h1></h1>
            
            <a href="#">Responder &nbsp; &rarr;</a>
          </div>
          
          <div class="item">
          <?php
          require_once('connect.php');

          $consulta = $con->query("SELECT title, image FROM post WHERE idpost = 8");

          while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            echo "{$linha['title']} </br>";
            echo "<img src='./public/upload/" . $linha['image'] . "' />";
          }
          ?>
            
            <h1></h1>
            
            <a href="#">Responder &nbsp; &rarr;</a>
          </div>
        </section>
      </main>
  </body>
</html>
