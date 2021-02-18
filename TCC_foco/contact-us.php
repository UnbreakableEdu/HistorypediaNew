<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Historypedia</title>

    <link rel="stylesheet" href="public/css/menu.css" />
    <link rel="stylesheet" href="public/css/main.css" />
    <link rel="stylesheet" href="public/css/contact-us.css" />
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
            <button type="button" id="log-in" class="button-hover">
              <a href="log-in.php" id="log-in" class="a-hover">Log In</a>
            </button>
            <button type="button" id="sign-up" class="button-hover">
              <a href="sign-up.php" id="sign-up" class="a-hover">Sign Up</a>
            </button>
          </div>
        </header>
        <main>
            <div class="slogan">
              <strong>Entre em contato conosco.</strong>
              <p>Sábio é aquele que conhece os limites da própria ignorância.</p>
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
        <div class="main-container">
            <div class="subcontainer">
                <form class="contact-form" method="post" action="" class="form split">
                    <fieldset>
                        <legend>
                            <a href="index.php" id="home">&larr; Voltar</a>
                            <span id="Fale-conosco">Fale conosco</span>
                        </legend>
        
                        <div class="input-block">
                            <label for="name">Nome completo</label><br>
                            <input id="name" name="name" required />
                        </div>
                        <div class="input-block">
                            <label for=email id="email">Email pessoal</label></br>
                            <input type="email" id="email" name="email" placeholder="exemplo@dominio.com"></br>
                        </div>
                        <div class="input-block">
                            <label for="comment">Comentário</label><br>
                            <textarea
                            id="instructions"
                            name="instructions"
                            required
                            ></textarea>
                        </div>
        
                        <button type="submit" class="primary-button">Enviar</button>
        
                    </fieldset>
                  
              </form>
            </div>
        </div>