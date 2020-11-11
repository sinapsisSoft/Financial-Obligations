<?php
  require "../bo/bo_quote.php";
  header("Content-type: application/json; charset=utf-8");
  setlocale (LC_ALL, "es_ES");

  if(isset($_GET['Quo_consec'])) {
    $objBo = new BoQuote();
    $Quo_consec = $_GET['Quo_consec']; 
    $entry = $_GET['entry']; 

    
    $json = json_decode($objBo->selectQuotePdf($Quo_consec,$entry),true);
    var_dump($json);
    $Client_name = $json[0]['Client_name'];
    $Client_contactName = $json[0]['Client_contactName'];
    $Quo_project = $json[0]['Quo_project'];
    $Client_contactTitle = $json[0]['Client_contactTitle'];
    $Quo_date = $json[0]['Quo_date'];
    if(empty($Quo_date)){
      $Quo_date = "";
    }
    $Quo_year = $json[0]['Quo_year'];
    $Quo_version = $json[0]['Quo_version'];
    $Quo_quantity = $json[0]['Quo_quantity'];
    
    $Quo_width = $json[0]['Quo_width'];
    $Quo_height = $json[0]['Quo_height'];
    $Quo_format = $json[0]['Quo_format'];
    if ($Quo_format == 'Vertical') {
      $Quo_format1 = 'checked';
    }
    else if ($Quo_format == 'Horizontal'){
      $Quo_format2 = 'checked';
    }    
    $Quo_color = $json[0]['Quo_color'];
    if($Quo_color > 0){
      $Quo_colorPaper = $json[0]['Quo_colorPaper'];
      $Quo_colorWeight = $json[0]['Quo_colorWeight'];
    }
    
    $Quo_bw = $json[0]['Quo_bw'];
    if ($Quo_bw > 0) {
      $Quo_bwPaper = $json[0]['Quo_bwPaper'];
      $Quo_bwWeight = $json[0]['Quo_bwWeight']; 
    }
       
    $Quo_guards = $json[0]['Quo_guards'];
    if ($Quo_guards > 0) {
      $Quo_guardsPaper = $json[0]['Quo_guardsPaper'];
      $Quo_guardsWeight = $json[0]['Quo_guardsWeight'];
    }
    
    $Quo_cover = $json[0]['Quo_cover'];
    if ($Quo_cover > 0) {
      $Quo_coverPaper = $json[0]['Quo_coverPaper'];
      $Quo_coverWeight = $json[0]['Quo_coverWeight'];
    }
    
    $Quo_pageTotal = $json[0]['Quo_pageTotal'];    
    $Quo_inserts = $json[0]['Quo_inserts'];
    $Quo_inser = $json[0]['Quo_inser'];
    if ($Quo_inser > 0){
      $Quo_inserPaper = $json[0]['Quo_inserPaper'];
      $Quo_inserWeight = $json[0]['Quo_inserWeight'];
    }
    
    if ($Quo_inserts == 'Si') {
      $Quo_inserts1 = 'checked';
    }
    else if ($Quo_inserts == 'No'){
      $Quo_inserts2 = 'checked';
    }   
    $Quo_top = $json[0]['Quo_top'];
    if ($Quo_top == 'Dura') {
      $Quo_top1 = 'checked';
    }
    else if ($Quo_top == 'Rústica'){
      $Quo_top2 = 'checked';
    }  
    $Quo_coverFinish = $json[0]['Quo_coverFinish'];
    if ($Quo_coverFinish == 'Brillo uv') {
      $Quo_coverFinish1 = 'checked';
    }
    else if ($Quo_coverFinish == 'Troquel'){
      $Quo_coverFinish2 = 'checked';
    }
    else if ($Quo_coverFinish == 'Brillo uv-Troquel') {
      $Quo_coverFinish1 = 'checked';
      $Quo_coverFinish2 = 'checked';
    }
    $Quo_plast = $json[0]['Quo_plast'];
    if ($Quo_plast == 'Mate') {
      $Quo_plast1 = 'checked';
    }
    else if ($Quo_plast == 'Brillante'){
      $Quo_plast2 = 'checked';
    }
    $Quo_correction = $json[0]['Quo_correction'];
    if ($Quo_correction == 'Si') {
      $Quo_correction1 = 'checked';
    }
    else if ($Quo_correction == 'No'){
      $Quo_correction2 = 'checked';
    }
    $Quo_issn = $json[0]['Quo_issn'];
    if ($Quo_issn == 'Si') {
      $Quo_issn1 = 'checked';
    }
    else if ($Quo_issn == 'No'){
      $Quo_issn2 = 'checked';
    }
    $Quo_observ = $json[0]['Quo_observ'];
    $Quo_delivDate = $json[0]['Quo_delivDate'];
    if(empty($Quo_delivDate)){
      $Quo_delivDate = "";
    }
    $fecha = strftime("%d %B de %Y", strtotime($Quo_delivDate));
    $Quo_delivPlace = $json[0]['Quo_delivPlace']; 
    $Cost_finalValue = $json[0]['Cost_finalValue'];
    $Cost_finalValue1 = number_format($Cost_finalValue);
    $number = number_format(round($Cost_finalValue / $Quo_quantity));
    $Quo_calendar = $json[0]['Quo_calendar'];
    $newdelivDate = explode("-",$Quo_delivDate);
    if ($Quo_calendar == 'A') {
      $secondDate = strftime("%B de %Y", strtotime($newdelivDate[0].'-08-30'));
    }
    else {
      $secondDate = strftime("%B de %Y", strtotime($newdelivDate[0].'-03-20'));
    }
    $User_name = $json[0]['User_name'];
    $User_title = $json[0]['User_title'];
    $Cost_description = $json[0]['Cost_description'];
    $User_telephone = $json[0]['User_telephone'];
  }
?>
<?php
$html = "
<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta http-equiv='X-UA-Compatible' content='ie=edge'>
  <title>Formulario Afiliación</title>
  <style>
  html,
  body {
    width: 100%;
    height: 100%;
    margin: 10px;
    padding: 0;
    border: 0;
  }

  .header {
    width: 100%;
    margin: auto;
  }

  .container {
    width: 90%;
    margin: auto;   
    margin-top: 20px;
    font-size: 12px;
    font-weight: bold;
  }

  .container .content {
    width: 80%;    
    float: left;
    display: inline;
    font-weight: normal;
  }

  .container .content .head {
    margin-top: 100px;
    margin-left: 30px;
    font-weight: normal;
  }
  .container .content .head .project{
    margin-top: 0px;
    padding-top: 0;
    font-weight: bold;
    text-align: center;
    font-size: 20px;
    text-transform: uppercase;
  }

  .container .content .detail {
    margin-top: 50px;
    margin-left: 30px;   
  }

  .container .content .footer {
    margin-top: 50px;
    margin-left: 30px; 
  }

  .page {
    margin-top: 0px;
    margin-left: 30px; 
    text-align: center;
  }

  .textNormal {
    font-weight: normal;
  }
  label {
    font-size: 10px;
    font-weight: normal;
  }

  .tableSection-0 {
    margin-top: -35px
  }

  .tableSection-0 small {
    color: white;
    font-size: 15px;
    margin-left: 25px;
  }

  .tableSection-0 input {
    color: white;
    font-size: 15px;
  }

  .section-1 {
    width: 100%;
  }

  .tableSection-1 {
    margin-top: 15px;
    width: 100%;
    text-transform: uppercase;
    font-size: 10px;
    vertical-align: middle;
    font-weight: bold;
  }

  .tableSection-2 input {
    font-size: 16px;
  }

  .tableSection-2 {
    margin-top: 0px;
    width: 100%;
  }

  .tableSection-3 {
    margin-top: 10px;
    width: 100%;    
  }

  .tableSection-4 {
    width: 100%;
    margin-top: 3px;
  }

  .tableSection-4 input {
    font-size: 12px;
  }

  .tableSection-5 {
    margin-top: 7px;
    width: 100%;
  }

  .tableSection-5 input {
    font-size: 12px;
  }

  .tableSection-6 {
    margin-top: 7px;
    width: 100%;
  }

  .tableSection-6 input {
    font-size: 12px;
  }

  .tableSection-7 {
    margin-top: 7px;
    width: 100%;
  }

  .tableSection-7 input {
    font-size: 12px;
  }

  .tableBody {
    font-weight: normal;
  }

  .rectangle {
    width: 680px; 
    height: 25px; 
    border: 1px solid #555;
}

  .tdScale {
    font-size: 16px;
  }

  .td-0 {
    width: 10px;
  }

  .td-0-1 {
    width: 20px;
  }

  .td-1 {
    width: 40px;
  }

  .td-1-2 {
    width: 60px;
  }

  .td-2 {
    width: 80px;
  }

  .td-2-3 {
    width: 100px;
  }

  .td-3 {
    width: 120px;
  }

  .td-3-4 {
    width: 140px;
  }

  .td-4 {
    width: 160px;
  }

  .td-4-5 {
    width: 180px;
  }

  .td-5 {
    width: 200px;
  }

  .td-5-6 {
    width: 220px;
  }

  .td-6 {
    width: 240px;
  }

  .td-7 {
    width: 280px;
  }

  .td-7-8 {
    width: 300px;
  }

  .td-8 {
    width: 320px;
  }

  .td-9 {
    width: 360px;
  }

  .td-9-10 {
    width: 380px;
  }

  .td-10 {
    width: 400px;
  }

  .td-11 {
    width: 440px;
  }

  .td-12 {
    width: 480px;
  }

  .td-13 {
    width: 520px;
  }

  .td-14 {
    width: 560px;
  }

  .td-15 {
    width: 600px;
  }

  .td-16 {
    width: 640px;
  }

  .td-17 {
    width: 680px;
  }

  .td-18 {
    width: 720px;
  }

  td {
    border: solid 2px black;
  }

  th {
    border: solid 1px black;
    border-top: transparent;
  }

  .tableSection-1 .odd {
    background-color:#ddd;
  }

  .tableSection-1 .top{
    background-color: #A21D1A;
    color: #fff;
  }

  .tableSection-1 .date{
    background-color: #A21D1A;
    color: #fff;    
  }

  .center {
    text-align: center;
  }

  .general {
    text-align: justify;
    font-weight: normal;
    line-height: 10px;
    text-transform: none;
    font-size: 9px;
  }

  .tdClearBorder {
    border: transparent;
  }

  .tdClearBorder-y2 {
    border-left: transparent;
    border-right: transparent;
  }

  .tdClearBorder-y1 {
    border-left: transparent;
    border-right: transparent;
  }

  table {
    border-collapse: collapse;
  }

  .td-tall td,
  th {
    padding-bottom: 7px;
  }

  .td-m {
    height: 50px;
  }

  .td-s {
    height: 130px;
  }

  .td-s hr {
    margin-top: 100px;
    border: 1px solid;
  }

  .check {
    background-color: white;
    height: 10px;
    width: 10px;
    border: black;
    border-style: solid;
    border-width: 1px;
    border-radius: 6px;
  }

  .checked {
    background-color: black;
  }
  </style>
</head>
<body>
  <!--Start Content-->  
  <div class='container'>               
    <div class='content'>
      <div class='head'>
        <div class='project'>
          <b style='font-size: 25px;'>$Client_name</b><br>
          $Quo_project - $Quo_year
        </div>        
        <table class='tableSection-1' style='margin-left: 220px; border-collapse: separate;'>
          <tr class='td-tall'>
            <td class='td-3 date'>Cotización</td>
            <td class='td-4'>$Quo_consec</td>
          </tr>
          <tr class='td-tall'>
            <td class='date'>Fecha</td>
            <td>$Quo_date</td>
          </tr>
        </table>
      </div>
      <div class='detail'>
        $Client_name<br>
        <b>$Client_contactName</b><br>
        <b>$Client_contactTitle</b>
        <br><br><br><b>De a cuerdo a su solicitud, amablemente pongo a su consideración la siguiente oferta.</b>
        <table class='tableSection-1 center'>
          <tr class='td-tall top'>
            <td colspan='3'>Proyecto</td>
            <td colspan='6'>$Quo_project</td>
          </tr>
          <tr class='td-tall odd'>
            <td style='width:110px'>versión</td>
            <td colspan='8' class='td-2-3'><label>$Quo_version</label></td>
          </tr>
          <tr class='td-tall'>
            <td style='width:110px'>año</td>
            <td colspan='8'><label>$Quo_year</label></td>
          </tr>
          <tr class='td-tall odd'>
            <td style='width:110px'>cantidad</td>
            <td colspan='8'><label>$Quo_quantity</label></td>
          </tr>
          <tr>
            <td rowspan='3' style='width:110px'>tamaño</td>
            <td colspan='2' class='td-2-3'>ancho</td>
            <td colspan='2' class='td-2-3'>alto</td>
            <td colspan='4'>formato</td>
          </tr>
          <tr>
            <td colspan='2' rowspan='2'><label>$Quo_width</label></td>
            <td colspan='2' rowspan='2'><label>$Quo_height</label></td>
            <td colspan='2' style='width:85px'>vertical  </td>
            <td colspan='2' style='width:85px'>Horizontal</td>
          </tr>
          <tr>
            <td colspan='2'><div class='check $Quo_format1'></div></td>
            <td colspan='2'><div class='check $Quo_format2'></div></td>
          </tr>
          <tr class='td-tall'>
            <td colspan='5'></td>
            <td colspan='2'>papel</td>
            <td colspan='2'>gramaje</td>
          </tr>
          <tr class='td-tall odd'>
            <td style='width:110px'>No. pág. color</td>
            <td colspan='4'><label>$Quo_color</label></td>
            <td colspan='2'><label>$Quo_colorPaper</label></td>
            <td colspan='2'><label>$Quo_colorWeight</label></td>
          </tr>
          <tr class='td-tall'>
            <td style='width:110px'>No. pág. b/n</td>
            <td colspan='4'><label>$Quo_bw</label></td>
            <td colspan='2'><label>$Quo_bwPaper</label></td>
            <td colspan='2'><label>$Quo_bwWeight</label></td>
          </tr>          
          <tr class='td-tall odd'>
            <td style='width:110px'>guardas 4x1</td>
            <td colspan='4'><label>$Quo_guards</label></td>
            <td colspan='2'><label>$Quo_guardsPaper</label></td>
            <td colspan='2'><label>$Quo_guardsWeight</label></td>
          </tr>
          <tr class='td-tall'>
            <td style='width:110px'>Portada</td>
            <td colspan='4'><label>$Quo_cover</label></td>
            <td colspan='2'><label>$Quo_coverPaper</label></td>
            <td colspan='2'><label>$Quo_coverWeight</label></td>
          </tr>
          <tr class='td-tall'>
            <td style='width:110px'>insertos</td>
            <td colspan='2'>si</td>
            <td colspan='2'><div class='check $Quo_inserts1'></div></td>
            <td colspan='2'>no</td>
            <td colspan='2'><div class='check $Quo_inserts2'></div></td>
          </tr>
          <tr class='td-tall'>
            <td style='width:110px'>insertos</td>
            <td colspan='4'><label>$Quo_inser</label></td>
            <td colspan='2'><label>$Quo_inserPaper</label></td>
            <td colspan='2'><label>$Quo_inserWeight</label></td>
          </tr>
          <tr class='td-tall'>
            <td class='odd' style='width:110px'>Total pág.</td>
            <td colspan='4' class='odd'>$Quo_pageTotal</td>
            <td colspan='4'></td>
          </tr>
          
          <tr>
            <td style='width:110px'>tapa</td>
            <td colspan='2'>dura</td>
            <td colspan='2'><div class='check $Quo_top1'></div></td>
            <td colspan='2'>rústica</td>
            <td colspan='2'><div class='check $Quo_top2'></div></td>
          </tr>
          <tr>
            <td rowspan='3' style='width:110px'>acabados de carátula</td>
            <td colspan='2' rowspan='2'>brillo uv</td>
            <td colspan='2' rowspan='2'>troquel</td>
            <td colspan='4'>plastificado</td>
          </tr>
          <tr>
            <td colspan='2'>mate</td>
            <td colspan='2'>brillante</td>
          </tr>
          <tr>
            <td colspan='2'><div class='check $Quo_coverFinish1'></div></td>
            <td colspan='2'><div class='check $Quo_coverFinish2'></div></td>
            <td colspan='2'><div class='check $Quo_plast1'></div></td>
            <td colspan='2'><div class='check $Quo_plast2'></div></td>
          </tr>
          <tr>
            <td class='td-2'>corrección de estilo</td>
            <td colspan='2'>si</td>
            <td colspan='2'><div class='check $Quo_correction1'></div></td>
            <td colspan='2'>no</td>
            <td colspan='2'><div class='check $Quo_correction2'></div></td>
          </tr>
          <tr class='td-tall odd'>
            <td>observaciones</td>
            <td colspan='8'><label>$Quo_observ</label></td>
          </tr>
          <tr>
            <td class='td-2'>ISSN/ISBN</td>
            <td colspan='2'>si</td>
            <td colspan='2'><div class='check $Quo_issn1'></div></td>
            <td colspan='2'>no</td>
            <td colspan='2'><div class='check $Quo_issn2'></div></td>
          </tr>
          <tr class='td-tall'>
            <td>fecha de entrega</td>
            <td colspan='8'><label>$Quo_delivDate</label></td>
          </tr>
          <tr>
            <td class='td-2'>lugar de entrega</td>
            <td colspan='8'><label>$Quo_delivPlace</label></td>
          </tr>
        </table>
        <table class='tableSection-1 center'>
          <tr class='td-tall odd'>
            <td style='width: 164px;'>cantidad</td>
            <td style='width: 164px;'>valor unitario</td>
            <td style='width: 172px;'>total</td>
          </tr>
          <tr class='td-tall'>
            <td><label>$Quo_quantity</label></td>
            <td><label>$$number</label></td>
            <td class='top' style='font-size:15px;'>$$Cost_finalValue1</td>
          </tr>
        </table>
      </div>          
      <div class='page'>
        Página [[page_cu]] de [[page_nb]]
      </div>  
    </div>    
    <div class='content' style='width: 10%; margin-top: 25px;'>
      <img src='../../img/slide1.jpg' style='height: 95%'> 
    </div>         
  </div> 
  
  <div class='container'>               
    <div class='content'>
      <div class='detail' style='margin-top: 200px;'>
        <b>Aclaraciones y Observaciones:</b><br>
        <br>Se hará la gestión del ISSN/ISBN por parte de Trivia Editores, en caso de no ser aprobado, el cliente asumirá el valor del IVA.<br>
        <br>Toda modificación del trabajo será facturada por separado por su valor equivalente.<br><br><br>
        <b>Incluye: </b>$Cost_description
        <br><br><br><br><br>
        <table>
          <tr>
            <td class='td-4 tdClearBorder'><b>Validez de la oferta:</b></td>
            <td class='td-4 tdClearBorder'>30 días</td>
          </tr>
          <tr>
            <td class='td-4 tdClearBorder'><b>Precio proyectado a:</b></td>
            <td class='td-4 tdClearBorder'>$fecha</td>
          </tr>
          <tr>
            <td rowspan='3' class='td-4 tdClearBorder'><b>Forma de pago:</b></td>
            <td class='td-4 tdClearBorder'>30% FIRMA DE CONTRATO</td>
          </tr>
          <tr>
            <td class='td-4 tdClearBorder' style='text-transform: uppercase;'>40% $secondDate</td>
          </tr>
          <tr>
            <td class='td-4 tdClearBorder'>30% CONTRA ENTREGA</td>
          </tr>
        </table>                       
      </div>
      <div class='footer'>    
          <b>Cordialmente, <br><br><br>$User_name</b><br>$User_title<br>Teléfono: $User_telephone<br>E-mail: gerencia@grupotrivia.com<br>  
        </div>  
      <div class='page' style='margin-top: 130px;'>
        Página [[page_cu]] de [[page_nb]]
      </div>  
    </div>  
    <div class='content' style='width: 10%; margin-top: 25px;'>
      <img src='../../img/slide1.jpg' style='height: 95%'> 
    </div>      
  </div>   
</body>
</html>"
?>
<?php
require '../vendor/autoload.php';

$html;
$nameFile = 'cotizacion'.$Quo_consec.'.pdf';
use Spipu\Html2Pdf\Html2Pdf;

$size=[216,279];
$html2pdf = new Html2Pdf('p',$size,'es','true','UTF-8',[0,0,0,2]);
ob_end_clean();
$html2pdf->writeHTML($html);
$html2pdf->output($nameFile);
?>