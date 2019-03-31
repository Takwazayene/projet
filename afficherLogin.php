<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../../public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../../public/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../public/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form   method="POST" action="verifierUtilisateur.php" >
              <h1>Bienvenu </h1>
              <div>
                <input type="text" name="id" class="form-control" placeholder="Identifiant"  required="" />
              </div>
              <div>
                <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" required="" />
              </div>
              <div>
			    <button id="send" type="submit" class="btn btn-success">Se connecter</button>
               <!-- <a class="btn btn-default submit" href="index.html">Log in</a> !-->
                <a class="reset_pass" href="#">Mot de passe oublié?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Nouveau sur le site?
                  <a href="#signup" class="to_register"> Créer un compte </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1> ETSZAYENE </h1>
                  <p>©2019 Tous les droits sont réservés . ETSZAYENE ! est un distributeur de composants extérieurs automobile .  Distributeur Autorisé</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form  method="POST" action="../ajoutClient.php">
              <h1>Créer un compte</h1>
              <div>
                <input type="text" name="id" class="form-control" placeholder="identifiant" required="" />
              </div>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" required="" />
              </div>
              <div>
            
				<button id="send" type="submit" class="btn btn-success">Créer</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Déjà un client ?
                  <a href="#signin" class="to_register"> Se connecter </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1> ETSZAYENE</h1>
                  <p>©2019 Tous les droits sont réservés . ETSZAYENE ! est un distributeur de composants extérieurs automobile .  Distributeur Autorisé</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
