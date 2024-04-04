<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>¡Comunidad de CC!</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="shortcut icon" href="images/favico.ico" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="registro.css" />
</head>


<body>
  <div class="big-wrapper light">
    <img src="./img/shape.png" alt="" class="shape" />
    <div class="header_load">
    </div>

    <main class="reg">
      <div class="big-wrapper light">
        <img src="./img/shape.png" alt="" class="shape" />
        <div class="box">
          <div class="inner-box">
            <div class="forms-wrap">
              <form action="perfil.php" autocomplete="off" class="sign-in-form">
                <div class="logo">
                  <!-- <img src="images/logo.png" alt="easyclass" /> -->
                  <h2>CupidCode</h2>
                </div>

                <div class="heading">
                  <h2>¡Bienvenido!</h2>
                  <h6>¿Aún no estas registrado?</h6>
                  <a href="#" class="toggle">Registrarme</a>
                </div>

                <div class="actual-form">
                  <div class="input-wrap">
                    <input type="email" class="input-field" autocomplete="off" required />
                    <label>Correo institucional</label>
                  </div>

                  <div class="input-wrap">
                    <input type="password" minlength="4" class="input-field" autocomplete="off" required />
                    <label>Password</label>
                  </div>

                  <input type="submit" formaction="perfil.html" value="Sign In" class="sign-btn" />

                  <p class="text">
                    ¿Olvidaste tu password?
                    <a href="#">Recuperalo</a> para iniciar sesión
                  </p>
                </div>
              </form>

              <!-- Registro formulario -->

              <form action="reg_informacion.php" autocomplete="off" class="sign-up-form" id="myForm">
                <div class="logo">
                  <img src="images/logo.png" alt="easyclass" />
                  <h2>CupidCode</h2>
                </div>

                <div class="heading">
                  <h2>¡Registrate!</h2>
                  <h6>¿Ya tienes una cuenta?</h6>
                  <a href="#" class="toggle">Iniciar Sesión</a>
                </div><br>

                <div class="actual-form">
                  <div class="input-wrap">
                    <input type="text" id="nombre" name="nombre" minlength="4" class="input-field" autocomplete="off" required />
                    <label>Nombre</label>
                  </div>

                  <div class="input-wrap">
                    <input type="email" name="correo" id="correo" class="input-field" autocomplete="off" required />
                    <label>Email</label>
                  </div>

                  <div class="input-wrap">
                    <input type="password" id="pass" name="pass" minlength="4" class="input-field" autocomplete="off" required />
                    <label>Password</label>
                  </div>

                  <input type="submit" value="Sign Up" class="sign-btn" />

                  <p class="text">
                    Al registrarte, aceptas los
                    <a href="#">Terminos de servicios </a> y
                    <a href="#">la política de privacidad de CupidCode</a>
                  </p>
                </div>
              </form>
            </div>
            <div class="carousel">
              <div class="images-wrapper">
                <img src="" class="image img-1 show" alt="" />
                <img src="" class="image img-2" alt="" />
                <img src="" class="image img-3" alt="" />
              </div>

              <div class="text-slider">
                <div class="text-wrap">
                  <div class="text-group">
                    <h2>Conoce gente<span>&#128519</span>...</h2>
                    <h2>Has match<span>&#128520</span>...</h2>
                    <h2>Y dieviértete!<span>&#128147;...</h2></span>
                  </div>
                </div>

                <div class="bullets">
                  <span class="active" data-value="1"></span>
                  <span data-value="2"></span>
                  <span data-value="3"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>


    <script src="js/registro.js "></script>
    <!-- partial -->
    <script>
      $(document).ready(function () {
        $('.header_load').load('header.html');
      });
    </script>


    <!-- correo -->
    <script>
      document.getElementById('myForm').addEventListener('submit', function (event) {
        // Evita que el formulario se envíe y la página se recargue
        event.preventDefault();
        var correo = document.getElementById('correo').value;
        localStorage.setItem('correo', correo);
        validarCorreo();
      });
    </script>


    <!-- Validarcorreo -->
    <script>
      function validarCorreo() {
        var correo = document.getElementById("correo").value;
        // Expresión regular para validar el formato del correo
        var regex = /^[a-zA-Z0-9._-]+@iztapalapa\.tecnm\.mx$/;
        if (regex.test(correo)) {
        
          window.location.href = "reg_informacion.php";
        } else {
          alert("El correo no es válido. Por favor, ingresa un correo institucional.");
          window.location.href = "registro.php";
        }
      }
    </script>

  </body>

  </html>
