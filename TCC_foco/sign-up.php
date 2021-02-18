<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Historypedia</title>

    <link rel="stylesheet" href="public/css/menu.css" />
    <link rel="stylesheet" href="public/css/footer.css" />
    <link rel="stylesheet" href="public/css/form.css" />

    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
      <main class="form-main">
          <form method="post" action="insert.php" class="form split">
                <fieldset>
                    <legend>
                        <a href="index.php" id="home">&larr; Voltar</a>
                        <span id="signup">Sign Up</span>
                    </legend>
    
                    <div class="input-block">
                        <label for="name">Nome completo</label><br>
                        <input id="name" name="name" required />
                    </div>
                    <div class="input-block">
                        <label for=email id="email">Email pessoal</label></br>
                        <input type="email" id="email" name="email" placeholder="exemplo@dominio.com"></br>
                    </div>
                    <div class="input-password-all">
                        <div class="input-password">
                            <label for=senha id="senha">Senha</label></br>
                            <input type="password" id="senha" name="senha">
                        </div>
                        <div class="input-password">
                            <label for=confsenha id="confsenha">Confirme a senha</label></br>
                            <input type="password" id="confsenha" name="confsenha">
                        </div>
                    </div>

                    <div class="input-block2">
                        <input type="radio" id="estudante" name="user_type" value="estudante">
                        <label for="estudante">Estudante</label><br>
                        <input type="radio" id="criador" name="user_type" value="criador">
                        <label for="criador">Criador</label><br>
                    </div>
                    
                    <div class="input-buttons">
                        <div class="input-terms">
                            <input type="checkbox" id="terms-input" name="terms" >
                            <label for="terms-input" id="terms">Aceito os termos de uso</label>
                        </div>
                        <div class="input-image-sign-up">
                            <label for="avatar">Anexar foto de perfil</label>
                            <input id="avatar" class='avatar' type='file' name="avatar">
                        </div>
                    </div>
    
                    <button type="submit" class="primary-button">Cadastrar</button>
    
                </fieldset>
              
          </form>
      </main>
      
  </body>
</html>