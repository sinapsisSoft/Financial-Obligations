<?php
session_start();

if (!isset($_SESSION['User'])) {
  header("../../pages/login/login.html");
} else {
  $var_session  = $_SESSION['User'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ST Dendrite</title>
  <!-- css link -->
  <?php include("../../php/viewHtml/cssLink.php") ?>
</head>

<body id="page-top">
  <div class="loadPage" id="loadPage"></div>
  <input type="hidden" id="User_id">
  <!--Alert-->
  <div id="myAlert"></div>
  <!--Alert-->
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include("../../php/viewHtml/slideMenu.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include("../../php/viewHtml/navUser.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Panel Administrativo</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Lista de Proveedores</h6>
              <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                  <div class=" ml-4">
                    <button class="btn btn-secondary" data-toggle="modal" data-target="#providerModal" onclick="clearForm('form_providers', 1);clearFromFile()"><i style="font-size: 2.1rem;" class="material-icons">person_add</i></button>
                  </div>
                </li>
              </ul>
            </div>
            <div class=" mx-auto col-md-6 align-self-center">
              <form class="navbar-form" id="formSearchProviders">
                <div class="input-group ">
                  <input type="text" value="" class="form-control bg-light border-0 small" placeholder="Proveedor a buscar">
                  <button type="submit" class="btn btn-primary" onclick="searchProviders(event);return false">
                    <i class="fas fa-search fa-sm"></i>
                    <div class="ripple-container"></div>
                  </button>
                </div>
              </form>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table  " data-order='[[ 1, "asc" ]]' data-page-length='25' id="tableProvider" width="100%" cellspacing="0">
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; <script>
                document.write(new Date().getFullYear());
              </script> | Sinapsis Technologies. </span>

          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade fullscreen-modal" id="providerModal" tabindex="-1" role="dialog" aria-labelledby="providerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="providerModalLabel">Proveedor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <form id="form_providers"  class="text-left  was-validated" action="#!" onsubmit="sendData(this.id,event);return false">
            <input type="hidden" id="Pro_id">
              <div class="form-row mb-1">
                <div class="col-md-4 mb-1">
                  <!-- Nit -->
                  <label class="bmd-label-floating">Número de identificación</label>
                  <input type="text" id="Pro_identification" class="form-control form-control-sm read" placeholder="Número de identificación" required>
                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Proporcione un valor válido.</div>
                </div>
                <div class="col-md-4 mb-1">
                  <!-- Razon social -->
                  <label class="bmd-label-floating">Razón Social</label>
                  <input type="text" id="Pro_name" class="form-control form-control-sm read" placeholder="Razón Social" required>
                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Proporcione un valor válido.</div>
                </div>
                <div class="col-md-4 mb-1">
                  <!-- Teléfono -->
                  <label class="bmd-label-floating">Teléfono</label>
                  <input type="text"  pattern="[0-9]{7,10}" id="Pro_tel" class="form-control form-control-sm" placeholder="Teléfono"   >
                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Proporcione un teléfono válido.</div>
                </div>
              </div>
              <div class="form-row mb-1">
                <div class="col-md-4 mb-1">
                  <!-- Dirección -->
                  <label class="bmd-label-floating">Dirección</label>
                  <input type="text" id="Pro_address" class="form-control form-control-sm" placeholder="Dirección" >
                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Proporcione una dirección válida.</div>
                </div>
                <div class="col-md-4 mb-1">
                  <!-- Nombre contacto -->
                  <label class="bmd-label-floating">Nombre del Contacto</label>
                  <input type="text" id="Pro_contactName" class="form-control form-control-sm" placeholder="Nombre del contacto" required>
                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Proporcione un nombre válidao.</div>
                </div>
                <div class="col-md-4 mb-1">
                  <!-- Email -->
                  <label class="bmd-label-floating">E-mail de contacto</label>
                  <input type="email" id="Pro_contactEmail" class="form-control form-control-sm" placeholder="E-mail de contacto" required>
                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Proporcione un E-mail válida.</div>
                </div>
              </div>
              <div class="form-row mb-1">
                <div class="col-md-2 mb-1 mx-auto">
                  <!-- Rut -->
                  <label class="bmd-label-floating">RUT</label>
                    <div><a id="href_pro_attach" href="" target="_blank"><i class="material-icons" style="font-size:40px;">picture_as_pdf</i></a></div>
                    <input type="hidden" id="Pro_attach">
                </div>
                <div class="col-md-4 mb-1 mx-auto">
                  <!-- Estado -->
                  <label class="bmd-label-floating">Estado</label>
                    <select id="Stat_id" class="custom-select custom-select-sm" required>
                
                    </select>
                    <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Seleccione una opción válido.</div>
                </div>
              </div>
              <hr>
            </form>
                <!-- Form upload file  -->
            <form id="form-file" action="" accept=".pdf,application/pdf" onsubmit="validatorBtnFile(this.id, event)">
            <div class="form-row col-12 mb-1">
                <div class="mb-4 mx-auto">
                  <!-- Uplod pdf -->
                  <label>Seleccionar PDF:</label><br>
                <input type="file" id="getFile" name="nameFile"  class="form-control-file border">
                </div>
                <div class=" mb-4 mx-auto">
                  <label>Cargar/Cancelar</label><br>
                  <button type="submit" class="btn btn-info"><i class="material-icons">cloud_upload</i></button>
                  <button type="button" id="cancel" class="btn btn-danger cancel" disabled><i class="material-icons">cloud_off</i></button>
                </div>
              </div>
              <div class="bar col-12">
                <div class="bar-start" id="bar_status">
                  <span id="spanFile"></span>
                </div>
              </div>
              <input type="hidden" id="nameFiles" value="" name="name_file">
            </form>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" value="Submit" form="form_providers">Guardar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../../js/demo/chart-area-demo.js"></script>
  <script src="../../js/demo/chart-pie-demo.js"></script>

  <!-- Page functión scripts -->
  <!-- Page level plugins -->
  <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>


  <!-- Page level custom scripts -->

  <script src="../../js/functionsSite.js"></script>
  <script src="../../js/Storage.js"></script>
  <script src="../../js/table-filter.js"></script>
  <script src="../../js/table.js"></script>
  <script src="../../js/selectList.js"></script>
  <script src="js/provider.js"></script>
  <script>
    window.onload = loadView
  </script>



</body>

</html>