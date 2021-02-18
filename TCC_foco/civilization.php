<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Historypedia</title>

    <link rel="stylesheet" href="public/css/menu.css" />
    <link rel="stylesheet" href="public/css/main.css" />
    <link rel="stylesheet" href="public/css/civ-page.css" />
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
              <strong>A civilização é um método de viver...</strong>
              <p>Uma atitude de igual respeito por todos os homens.</p>
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
            <div class="scroll-buttons">
            <button type="button" id="civ1" class="button-hover">
            <a href="#africa">África</a>
          </button>
          <button type="button" id="civ2" class="button-hover">
            <a href="#americas">Américas</a>
          </button>
          <button type="button" id="civ3" class="button-hover">
            <a href="#asia">Ásia</a>
          </button>
          <button type="button" id="civ4" class="button-hover">
            <a href="#europa">Europa</a>
          </button>
          <button type="button" id="civ5" class="button-hover">
            <a href="#oceania">Oceania</a>
          </button>
            </div>
          
          <section class="discovery-box">
            <h2 id="africa">África</h2>
              <div class="civ-page-box">
                  <div class="civ-box">
                      <img src="public/images/pre-historia.jpeg" alt="pré-história" style="width: 100%; height: 100%;">
                      <div class="centered">
                        <h3>Pré-história</h3>
                      </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/historia-grecia-antiga.jpg" alt="Antiguidade Clássica" >
                      <div class="centered">
                        <h3>Antiguidade Clássica</h3>
                      </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-media.jpeg" alt="Idade Média" >
                    <div class="centered">
                      <h3>Idade Média</h3>
                    </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-moderna.jpg" alt="Idade Moderna" >
                    <div class="centered">
                      <h3>Idade Moderna</h3>
                    </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-cont.jpg" alt="Idade Contemporânea" >
                    <div class="centered">
                      <h3>Idade Contemporânea</h3>
                    </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-cont.jpg" alt="Idade Contemporânea" >
                    <div class="centered">
                      <h3>Idade Contemporânea</h3>
                    </div>
                  </div>
              </div>
            <h2 id="americas">Américas</h2>
              <div class="civ-page-box">
                
                  <div class="civ-box">
                      <img src="public/images/pre-historia.jpeg" alt="pré-história" style="width: 100%; height: 100%;">
                      <div class="centered">
                        <h3>Pré-história</h3>
                      </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/historia-grecia-antiga.jpg" alt="Antiguidade Clássica" >
                      <div class="centered">
                        <h3>Antiguidade Clássica</h3>
                      </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-media.jpeg" alt="Idade Média" >
                    <div class="centered">
                      <h3>Idade Média</h3>
                    </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-moderna.jpg" alt="Idade Moderna" >
                    <div class="centered">
                      <h3>Idade Moderna</h3>
                    </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-cont.jpg" alt="Idade Contemporânea" >
                    <div class="centered">
                      <h3>Idade Contemporânea</h3>
                    </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-cont.jpg" alt="Idade Contemporânea" >
                    <div class="centered">
                      <h3>Idade Contemporânea</h3>
                    </div>
                  </div>
              </div>
            <h2 id="asia">Ásia</h2>
              <div class="civ-page-box">
                
                  <div class="civ-box">
                      <img src="public/images/pre-historia.jpeg" alt="pré-história" style="width: 100%; height: 100%;">
                      <div class="centered">
                        <h3>Pré-história</h3>
                      </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/historia-grecia-antiga.jpg" alt="Antiguidade Clássica" >
                      <div class="centered">
                        <h3>Antiguidade Clássica</h3>
                      </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-media.jpeg" alt="Idade Média" >
                    <div class="centered">
                      <h3>Idade Média</h3>
                    </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-moderna.jpg" alt="Idade Moderna" >
                    <div class="centered">
                      <h3>Idade Moderna</h3>
                    </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-cont.jpg" alt="Idade Contemporânea" >
                    <div class="centered">
                      <h3>Idade Contemporânea</h3>
                    </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-cont.jpg" alt="Idade Contemporânea" >
                    <div class="centered">
                      <h3>Idade Contemporânea</h3>
                    </div>
                  </div>
              </div>
            <h2 id="europa">Europa</h2>
              <div class="civ-page-box">
                
                  <div class="civ-box">
                      <img src="public/images/pre-historia.jpeg" alt="pré-história" style="width: 100%; height: 100%;">
                      <div class="centered">
                        <h3>Pré-história</h3>
                      </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/historia-grecia-antiga.jpg" alt="Antiguidade Clássica" >
                      <div class="centered">
                        <h3>Antiguidade Clássica</h3>
                      </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-media.jpeg" alt="Idade Média" >
                    <div class="centered">
                      <h3>Idade Média</h3>
                    </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-moderna.jpg" alt="Idade Moderna" >
                    <div class="centered">
                      <h3>Idade Moderna</h3>
                    </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-cont.jpg" alt="Idade Contemporânea" >
                    <div class="centered">
                      <h3>Idade Contemporânea</h3>
                    </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-cont.jpg" alt="Idade Contemporânea" >
                    <div class="centered">
                      <h3>Idade Contemporânea</h3>
                    </div>
                  </div>
              </div>
            <h2 id="oceania">Oceania</h2>
              <div class="civ-page-box">
                
                  <div class="civ-box">
                      <img src="public/images/pre-historia.jpeg" alt="pré-história" style="width: 100%; height: 100%;">
                      <div class="centered">
                        <h3>Pré-história</h3>
                      </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/historia-grecia-antiga.jpg" alt="Antiguidade Clássica" >
                      <div class="centered">
                        <h3>Antiguidade Clássica</h3>
                      </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-media.jpeg" alt="Idade Média" >
                    <div class="centered">
                      <h3>Idade Média</h3>
                    </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-moderna.jpg" alt="Idade Moderna" >
                    <div class="centered">
                      <h3>Idade Moderna</h3>
                    </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-cont.jpg" alt="Idade Contemporânea" >
                    <div class="centered">
                      <h3>Idade Contemporânea</h3>
                    </div>
                  </div>
                  <div class="civ-box">
                    <img src="public/images/idade-cont.jpg" alt="Idade Contemporânea" >
                    <div class="centered">
                      <h3>Idade Contemporânea</h3>
                    </div>
                  </div>
              </div>
          </section>
          </div>
        </div>
        <!--
        
        
        
        