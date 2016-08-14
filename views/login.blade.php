<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="../app/resources/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../app/resources/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../app/resources/css/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../app/resources/css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../app/resources/css/custom.css" rel="stylesheet">
    <!-- Mi Estilo -->
    <link rel="stylesheet" type="text/css" href="../app/resources/css/my_style_login.css">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <a class="hiddenanchor" id="passrecover"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <div class="logo"> <img src="../app/resources/images/logo_sena.png"></div>
          <section class="login_content">
            <form>
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Usuario" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contraseña" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="home">Entrar</a>
                <a class="reset_pass" href="#passrecover">Olvidaste Tu Contraseña?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Nuevo en el Sitio?
                  <a href="#signup" class="to_register"> Crea una Cuenta </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-barcode"></i> Sires-108</h1>
                  <p>©2016 Todos los Derechos Reservados. Sires un Sistema Facil Rapido y Eficaz.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Crear Cuenta</h1>
              <div>
                <input type="text" class="form-control" placeholder="Usuario" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contraseña" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Enviar</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Eres ya un Miembro ?
                  <a href="#signin" class="to_register"> Iniciar Sesión </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-barcode"></i> Sires-108</h1>
                  <p>©2016 Todos los Derechos Reservados. Sires un Sistema Facil Rapido y Eficaz.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="pass" class="animate form pass_form">
          <section class="login_content">
            <form>
              <h1>Recuperar Contraseña</h1>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Enviar</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Eres ya un Miembro ?
                  <a href="#signin" class="to_register"> Iniciar Sesión </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-barcode"></i> Sires-108</h1>
                  <p>©2016 Todos los Derechos Reservados. Sires un Sistema Facil Rapido y Eficaz.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>