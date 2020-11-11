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

  <title>Pagar Obligacion</title>
  <!-- css link -->
  <?php include("../../php/viewHtml/cssLink.php") ?>
  <link href="css/styleObligation.css" rel="stylesheet">
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
          <h1 class="h3 mb-2 text-gray-800">Pagar obligación Financiera</h1>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Obligaciones registradas</h6>
              <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                  </li>
              </ul>
            </div>
            <div class=" mx-auto col-md-6 align-self-center">
              <form class="navbar-form" id="formSearchCustomer">
                <div class="input-group ">
                  <input type="text" value="" class="form-control bg-light border-0 small" placeholder="Cliente a buscar">
                  <button type="submit" class="btn btn-primary" onclick="searchCustomer(event);return false">
                    <i class="fas fa-search fa-sm"></i>
                    <div class="ripple-container"></div>
                  </button>
                </div>
              </form>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table  " data-order='[[ 1, "asc" ]]' data-page-length='25' id="tableCustomers" width="100%" cellspacing="0">
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
              </script> | Renting automayor. </span>

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
  <div class="modal fade fullscreen-modal" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="customerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="customerModalLabel">Cliente </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">

            <form id="form_customers" class="text-left  was-validated" action="#!" onsubmit="sendData(this.id,event);return false">
              <input type="hidden" id="Client_id">
              <div class="form-row mb-1">
                <div class="col-md-4 mb-1">
                  <!-- cliente -->
                  <div class="bmd-label-floating">
                    <h6 for="client_idmax">Seleccionar Cliente</h6>
                    
                      <select id="client_idmax" class="custom-select custom-select-sm" onchange="getSelectContract(this.value)" required>
                  <option selected></option>
                    </select>
                      

                    <div class="valid-feedback">Ok!</div>
                    <div class="invalid-feedback">Proporcione un valor válido.</div>
                  </div>
                </div>


                <div class="col-md-4 mb-1">
                  <!-- contrato -->
                  <h6 for="client_contract">Seleccionar Contrato</h6>
                  <select id="client_contract" class="custom-select custom-select-sm" required>
                    <option selected></option>
                  </select>

                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Proporcione un valor válido.</div>
                </div>
                <div class="col-md-4 mb-1">
                  <!-- banco -->
                  <h6 for="Client_tel">Seleccionar Banco</h6>
                  
                  <select id="Bank_id" class="custom-select custom-select-sm" required>
                  <option selected></option>
                    </select>
                  

                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Proporcione un valor válido.</div>
                </div>
              </div>

              <div class="form-row mb-1">
                <div class="col-md-3 mb-1">
                  <!-- tipo de credito -->
                  <h6 for="type_credit">tipo de credito</h6>
                  <select id="type_credit" class="custom-select custom-select-sm" required>
                  <option disabled selected value> -- Seleccione una opción -- </option>
                    <option value="creditoOrdinario">Credito Ordinario</option>
                    <option value="creditoTesoreria">Credito de Tesoreria</option>
                  </select>

                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Proporcione un valor válido.</div>
                </div>

                <div class="col-md-3 mb-1">
                  <!-- Tipo de interes -->
                  <h6 for="type_interes">Tipo de interes</h6>
                  <select id="type_interes" class="custom-select custom-select-sm" required onchange="viewContent(this.selectedIndex)">
                  <option disabled selected value> -- Seleccione una opción -- </option>
                    <option value="dtf">DTF</option>
                    <option value="ibr">IBR</option>
                    <option value="Tsfija">Tasa fija</option>
                  </select>

                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Proporcione un valor válido.</div>
                </div>
                <div class="col-md-3 mb-1">
                  <!-- Metodo de amortizacion -->
                  <h6 for="amortization_method">Metodo de amortizacion</h6>
                  <select id="amortization_method" class="custom-select custom-select-sm" required>
                  <option disabled selected value> -- Seleccione una opción -- </option>
                    <<option value="AbonoInt">Abono fijo a Cuota</option>
                      <option value="Abonok">Abono fijo a Capital</option>
                  </select>

                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Proporcione un valor válido.</div>
                </div>
                <div class="col-md-3 mb-1">
                  <!-- Ingresar Fecha de desembolso -->
                  <h6 class="bmd-label-floating">Ingresar Fecha de desembolso</h6>
                  <input type="date" id="desembolso_date" class="custom-select custom-select-sm" placeholder="Ingresar Fecha de desembolso" required>
                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Proporcione una fecha válida.</div>
                </div>
              </div>
              <div class="form-row mb-1">
                <div class="col-md-4 mb-1">
                  <!-- Ingresar valor inicial de desembolso -->
                  <label class="bmd-label-floating">Ingresar valor inicial de desembolso</label>
                  <input type="number" id="initial_value" class="custom-select custom-select-sm" placeholder="Ingresar valor inicial de desembolso" required>
                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Proporcione un valor válido.</div>
                </div>
                <div class="col-md-4 mb-1">
                  <!-- Ingresar # de cuotas -->
                  <label class="bmd-label-floating">Ingresar # de cuotas</label>
                  <input type="number" pattern="[0-3]{0,3}" id="cuotes_number" class="custom-select custom-select-sm" placeholder="Ingresar # de cuotas " required>
                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Valor Maximo permitido es de 999 cuotas</div>
                </div>
                <div class="col-md-4 mb-1">
                  <!-- Ingresar valor residual -->
                  <label class="bmd-label-floating">Ingresar valor residual</label>
                  <input type="number" id="residual_number" class="custom-select custom-select-sm" placeholder="Ingresar valor residual" required>
                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Proporcione un valor válido.</div>
                </div>
              </div>
              <div class="form-row mb-1 hideContent" id="content_1" >
         
              <!-- empieza nueva fila-->
            
                
                <div class="col-md-4 mb-1">
                  <!-- DTF efectivo  -->
                  <label class="bmd-label-floating">DTF efectivo</label>
                  <input type="number" id="dtf" class="custom-select custom-select-sm" placeholder="DTF efectivo" required>


                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Proporcione un valor válido.</div>
                </div>
                <div class="col-md-4 mb-1">
                  <!-- DTF efectivo  -->
                  <label class="bmd-label-floating">puntos de DTF</label>
                  <input type="number" id="dtf_points" class="custom-select custom-select-sm" placeholder="puntos de DTF" required>

                  </select>
                  <div class="valid-feedback" >Ok!</div>
                  <div class="invalid-feedback">Proporcione un valor válido.</div>
                </div>
              </div>
              <div class="form-row mb-1 hideContent"  id="content_2">
                <div class="col-md-4 mb-1">
                  <!-- IBR efectivo -->
                  <label class="bmd-label-floating">Ingresar IBR efectivo</label>
                  <input type="number" id="ibr" class="custom-select custom-select-sm" placeholder="Ingresar IBR efectivo" required>
                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Proporcione un valor válido.</div>
                </div>
                <div class="col-md-4 mb-1">
                  <!-- puntos de IBR  -->
                  <label class="bmd-label-floating">puntos de IBR</label>
                  <input type="number" id="ibr_points" class="custom-select custom-select-sm" placeholder="puntos de IBR" required>
                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Seleccione una opción válido.</div>
                </div>
              </div>
              <div class="form-row mb-1 hideContent"  id="content_3">
                <div class="col-md-4 mb-1">
                  <!-- Tasa Fija  -->
                  <label class="bmd-label-floating">Tasa Fija</label>
                  <input type="number" id="tasafija" class="custom-select custom-select-sm" placeholder="Tasa Fija" required>

                  </select>
                  <div class="valid-feedback">Ok!</div>
                  <div class="invalid-feedback">Seleccione una opción válido.</div>
                </div>
              </div>
             </form>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" value="Submit" form="form_customers">Guardar</button>
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
  <script src="js/obligation.js"></script>
  <script src="js/contract.js"></script>
  <script>
    window.onload = loadView;
  </script>



</body>

</html>