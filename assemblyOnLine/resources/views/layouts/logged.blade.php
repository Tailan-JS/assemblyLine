<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Personal CSS -->
    <link rel="stylesheet" href="css/desktop.css">
</head>
<body>
    <header class="indigo darken-4 white-text" id="topo">
        <div class="logo">
            <h2>Assembly <br><span class="green-text darken-2">on</span>Line</h2>
        </div>
        <ul>
            <a href="/dashboard" class="white-text"><li>Tasks</li></a>
            <a href="/team" class="white-text"><li>Team</li></a>
            <form action="/logout" name="logout" method="post">
                @csrf
            <a href="javascript:logout.submit()" class="white-text"><li>Logout</li></a>
            </form>
        </ul>
    </header>
@yield('content')
<footer class="page-footer indigo darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Prototipe</h5>
                <p class="grey-text text-lighten-4">This is a non-professional site, use it by your own risk</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Contact</h5>
                <ul>
                  <li><i class="material-icons prefix">whatsapp</i><a class="grey-text text-lighten-3" href="#!"> Zap Zap</a></li>
                  <li><i class="material-icons prefix">person</i><a class="grey-text text-lighten-3" href="#!">Github</a></li>
                  <li><i class="material-icons prefix">email</i><a class="grey-text text-lighten-3" href="#!">Email</a></li>
                  <li><i class="material-icons prefix">alternate_email</i><a class="grey-text text-lighten-3" href="#!">Linkedin</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2021 Developed By Me
            </div>
          </div>
        </footer>
<!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <!-- Personal Javascript -->
 <script src="js/materialActions.js"></script>           
</body>
</html>