<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Historypedia</title>

    <link rel="stylesheet" href="public/css/menu.css" />
    <link rel="stylesheet" href="public/css/footer.css" />
    <link rel="stylesheet" href="public/css/form2.css" />

    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
      <main class="form-main">
          <form method="post" action="login.php" class="form split">
                <fieldset>
                    <legend>
                        <a href="index.php" id="home">&larr; Voltar</a>
                        <span id="signup">Log In</span>
                    </legend>
    
                    <div class="input-block">
                        <div class="input-email">
                            <label for=email id="email">Email pessoal</label></br>
                            <input type="email" id="email" name="email" placeholder="exemplo@dominio.com"></br>
                        </div>
                    </div>
                    <div class="input-block">
                        <div class="input-password">
                            <label for=senha id="senha">Senha</label></br>
                            <input type="password" id="senha" name="senha">
                        </div>
                    </div>
    
                    <button type="submit" class="primary-button">Entrar</button>
    
                </fieldset>
              
          </form>
      </main>
      
  </body>
</html>