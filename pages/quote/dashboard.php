<?php

session_start();
$var_session = $_SESSION['User'];
if ($var_session == null || $var_session = '') {
  header("Location:login.html");
  die();
}

?>
<!doctype html>
<html lang="en">

<head>
  <title>ST Dendrite</title>
  <!-- Icons  -->
  <link rel="shortcut icon" href="../../img/favicon.ico">
  <link rel="icon" type="image/png" href="../../img/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="../../img/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="../../img/favicon-96x96.png" sizes="96x96">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link href="../../css/material-dashboard.css" rel="stylesheet" />
  <link href="../../css/styleUpload.css" rel="stylesheet" />
  <style>
    .sidebar .nav i {
      color: inherit;
    }
  </style>
</head>

<body>
  <div class="loadPage" id="loadPage"></div>
  <div class="wrapper ">
    <div class="sidebar" data-color="wine" data-background-color="white">
      <div class="logo">
        <a href="https://www.sinapsistechnologies.com.co/" target="_blank" class="simple-text logo-mini">
          <img src="../../img/favicon-32x32.png">
          DENDRITE
        </a>
      </div>
      <div class="sidebar-wrapper">
      <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="material-icons">create</i>
              <p id="labelName"></p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="quotation.html?action=0">
              <i class="material-icons">create</i>
              <p>Crear Cotización</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pre_quote/dashboard.html">
              <i class="material-icons">extension</i>
              <p>Pre Cotización</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../customer/customers.html">
              <i class="material-icons">account_circle</i>
              <p>Clientes</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="../provider/provider.html">
              <i class="material-icons">people</i>
              <p>Proveedores</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="../user/user.html">
              <i class="material-icons">how_to_reg</i>
              <p>Usuarios</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
      <div class="foot">
        <input type="submit" value="Cerrar Sesión" onclick="closeSession()" class="btn btn-warning">
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#">Panel Administrativo</a>
            <input type="hidden" id="User_id">
          </div>

          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          </button>
        </div>
      </nav>
      <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="javascript:;">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="javascript:;">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="javascript:;">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="javascript:;">Disabled</a>
  </li>
</ul>
      
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 align-self-center">
              <form class="navbar-form" id="formSearchQuote" onSubmit="searchQuote(this.id,event);return false">
                <div class="input-group no-border">
                  <input type="text" value="" class="form-control" placeholder="Cotización a buscar">
                  <button type="submit" class="btn btn-white btn-round btn-just-icon" onclick="searchQuotes(event);return false">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-yellow">
                  <h4 class="card-title">Cotizaciones realizadas</h4>
                  <p class="card-category"> Encuentre aquí la cotización que desea seguir trabajando</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="tableQuote" class="table">
                      <thead class=" text-wine">
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="copy_right">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="copyright">Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              | Sinapsis Technologies. </p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--Script -->
  <script src="../../js/jquery-3.4.1.min.js"></script>
  <script src="../../js/popper.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="../../js/functionsSite.js"></script>
  <script src="../../js/Storage.js"></script>
  <script src="../../js/table.js"></script>
  <script src="js/quote.js"></script>
  <script>
    window.onload = loadView
  </script>
  <!--End Script -->
</body>

</html>