<?php
                      $datos = json_decode(file_get_contents("https://rentingautomayor.maximo.com/maxrest/rest/os/RA_CLIENTE?_format=json&_lid=MAXADMIN&_lpwd=Renting123*"), true);
                      $nit = "";
                      function nit($datos)
                      {

                        $datos = $datos;
                        echo "<br>";
                        $select = '';
                        $nodatos[0] = "POR ENTREGAR";
                        $nodatos[1] = "RENTING USAD";
                        $nodatos[2] = "SINIESTRO";
                        $nodatos[3] = "RENTENS";
                        $nodatos[4] = "RENTNEW";
                        $nodatos[5] = "RENTUSED";

                        try {
                          foreach ($datos as $key => $value) {

                            $cliente = $value["RA_CLIENTESet"]["LOCATIONS"];
                            for ($i = 0; $i < count($cliente); $i++) {
                              if (isset($cliente[$i]["Attributes"]["DESCRIPTION"]["content"])) {
                                $descripcion = ($cliente[$i]["Attributes"]["DESCRIPTION"]["content"]);
                                $nit = ($cliente[$i]["Attributes"]["LOCATION"]["content"]);

                                if ($nit != $nodatos[0] && $nit != $nodatos[1] && $nit != $nodatos[2] && $nit != $nodatos[3] && $nit != $nodatos[4] && $nit != $nodatos[5]) {
                                  $select .= '
                                    <option value = "' . $nit . '">' . strtoupper($nit) . '   - : ' . strtoupper($descripcion) . '</option>
  
                                    ';
                                }
                              }
                            }
                          }
                          echo ($select);
                        } catch (Exception $e) {

                          print_r($e);
                        }
                      }
                      nit($datos);


                      ?>



