<?php
#Author: DIEGO CASALLAS
#Date: 27/08/2019
#Description : Is Class Notification
require "../bo/bo_provider.php";
header("Content-type: application/json; charset=utf-8");
class Notification{
    
    private $from;
    private $title;
    private $message;
    private $headboard;
    private $obJBo;
    private $to;
    private $cc;
    private $srtCode="";
    private $messageContact;
    private $srtProject="";

    public function __construct()
    {
        $this->obJBo=new BoProvider();
        
        $this->from="info@grupotrivia.co";
        $this->cc="diseno@grupotrivia.co";
        
    }

    public function __sendProvider($idProvider,$code){
        $this->srtCode=$code;
        $json=json_decode($this->obJBo->selectProviderMail($idProvider),true);
        $this->to= $json[0]['Pro_contactEmail'];
        $this->to;
        
        
    }
    public function __sendUser($code,$project){
        $this->srtCode=$code;
        $this->srtProject=$project;
        $this->to= "diseno@grupotrivia.co";
        $this->to;
        
        
    }
    public function __sendUserContact($client_contactName,$client_name,$quo_delivPlace,$client_address,$client_email,$client_contactCel){
        $this->to= "orangefotografia18@gmail.com";
        $this->to;

        $this->messageContact='<p>Plataforma WEB TRIVIA APP informa, la creación de una solicitud '
        .'<table>'.
        '<tr><td>Nombre:'.$client_contactName.'</td></tr>'.
        '<tr><td>Empresa/Colegio:'.$client_name.'</td></tr>'.
        '<tr><td>Ciudad:'.$quo_delivPlace.'</td></tr>'.
        '<tr><td>Dirección:'.$client_address.'</td></tr>'.
        '<tr><td>Teléfono:'.$client_contactCel.'</td></tr>'.
        '<tr><td>Email:'.$client_email.'</td></tr></table></p>';  
    }

    public function selectHeadboard($select){
        // To send an HTML email, the Content-type header must be set
        $this->headboard  = 'MIME-Version: 1.0' . "\r\n";
        $this->headboard .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        switch($select){
            case 0:
            $this->title="Solicitud de cotización";
            $this->headboard.='To:'.$this->to."\r\n";
            $this->headboard.='From:'. $this->from."\r\n";
            $this->headboard.='Cc:'. $this->cc."\r\n";
            $this->message='<html>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><head><title><b>Solicitud de cotización</b></title></head>
            <body>
                <h5>Cordial saludo,</h5>
                <p>Pedimos el favor nos ayude a cotizar la publicación con las siguientes características
                    adjuntas.</p>
                <a href="http://www.grupotrivia.co/application/php/pdf/pre-quote_pdf.php?'.$this->srtCode.'" download="http://www.grupotrivia.co/application/php/pdf/pre-quote_pdf.php?'.$this->srtCode.'">
                    <img src="http://www.grupotrivia.co/application/img/imgPdf.png" style="height:25px"></a>
                <p>Quedamos atentos a la cotización lo más pronto posible.</p>
                <table>
                    <tr><td><h4>Lina M. Cortés Martínez </h4></td></tr>
                    <tr><td style="color: lightcoral">Trivia Editores</td></tr>
                    <tr><td>Cll 150 # 16-56  C.C. Cedritos  of. 405 </td></tr>
                    <tr><td>PBX: 467 30 70  Ext. 101 </td></tr>  
                    <tr><td>CEL. 301 265 65 71 </td></tr>       
                </table>
                </p>
                <p style="font-size:11px"> GRUPO TRIVIA S.A.S-, sociedad debidamente constituida bajo las leyes colombianas e
                    identificada con NIT. 900220568-1, en su calidad de Responsable del Tratamiento de Bases de Datos Personales,
                    registrada ante la Delegatura de Bases de Datos Personales de la Superintendencia de Industria y Comercio de
                    Colombia, se permite informar que de acuerdo con Ley 1581 de 2012 y el Decreto 1074 de 2015, ha implementado
                    mecanismos para facilitar el ejercicio de los derechos de los titulares de la información de conformidad con el
                    aviso de privacidad que puede revisar en siguiente link <a target="_black"
                        href="http://grupotrivia.co/politicas-de-privacidad/">http://grupotrivia.co/politicas-de-privacidad/</a>. En
                    caso
                    de no estar de acuerdo, puede enviar en cualquier momento un correo electrónico a administracion@grupotrivia.co
                    y/o nota física a la dirección CALLE 150 NO. 16-56 OF. 4005 CENTRO COMERCIAL CEDRITOS Bogotá D.C., revocando
                    expresamente su autorización respecto del tratamiento de sus datos personales, caso en el cual deberá
                    abstenerse de utilizar de forma definitiva y automática los productos y servicios de GRUPO TRIVIA S.A.S. para
                    los cuales la información sea necesaria, así como los sitios Web antes mencionados. Para conocer, actualizar, y
                    rectificar sus datos personales o ante cualquier duda o información, por favor comunicarse con
                    administracion@grupotrivia.co y/o enviar una nota física a la dirección CALLE 150 NO. 16-56 OF. 4005 CENTRO
                    COMERCIAL CEDRITOS Bogotá D.C.</p>
            </body>
            
            </html>';
            break;
            case 1:
            $this->title="Solicitud de Pre - cotización";
            $this->headboard.='To:'.$this->to."\r\n";
            $this->headboard.='From:'. $this->from."\r\n";
            $this->headboard.='Cc:'. $this->cc."\r\n";
            $this->message='<html>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><head><title><b>Solicitud de cotización</b></title></head>
            <body>
                <h5>Cordial saludo,</h5>
                <p>Plataforma de pre-cotización TRIVIA APP informa, la creación de la pre-cotización con el código: '.$this->srtCode.', nombre de proyecto: '.$this->srtProject.'</p>
                <table>
                    <tr><td><h4>Lina M. Cortés Martínez </h4></td></tr>
                    <tr><td style="color: lightcoral">Trivia Editores</td></tr>
                    <tr><td>Cll 150 # 16-56  C.C. Cedritos  of. 405 </td></tr>
                    <tr><td>PBX: 467 30 70  Ext. 101 </td></tr>  
                    <tr><td>CEL. 301 265 65 71 </td></tr>       
                </table>
                </p>
                <p style="font-size:11px"> GRUPO TRIVIA S.A.S-, sociedad debidamente constituida bajo las leyes colombianas e
                    identificada con NIT. 900220568-1, en su calidad de Responsable del Tratamiento de Bases de Datos Personales,
                    registrada ante la Delegatura de Bases de Datos Personales de la Superintendencia de Industria y Comercio de
                    Colombia, se permite informar que de acuerdo con Ley 1581 de 2012 y el Decreto 1074 de 2015, ha implementado
                    mecanismos para facilitar el ejercicio de los derechos de los titulares de la información de conformidad con el
                    aviso de privacidad que puede revisar en siguiente link <a target="_black"
                        href="http://grupotrivia.co/politicas-de-privacidad/">http://grupotrivia.co/politicas-de-privacidad/</a>. En
                    caso
                    de no estar de acuerdo, puede enviar en cualquier momento un correo electrónico a administracion@grupotrivia.co
                    y/o nota física a la dirección CALLE 150 NO. 16-56 OF. 4005 CENTRO COMERCIAL CEDRITOS Bogotá D.C., revocando
                    expresamente su autorización respecto del tratamiento de sus datos personales, caso en el cual deberá
                    abstenerse de utilizar de forma definitiva y automática los productos y servicios de GRUPO TRIVIA S.A.S. para
                    los cuales la información sea necesaria, así como los sitios Web antes mencionados. Para conocer, actualizar, y
                    rectificar sus datos personales o ante cualquier duda o información, por favor comunicarse con
                    administracion@grupotrivia.co y/o enviar una nota física a la dirección CALLE 150 NO. 16-56 OF. 4005 CENTRO
                    COMERCIAL CEDRITOS Bogotá D.C.</p>
            </body>
            
            </html>';
            break;
            case 2:
            $this->title="Solicitud desde la WEB";
            $this->headboard.='To:'.$this->to."\r\n";
            $this->headboard.='From:'. $this->from."\r\n";
            $this->headboard.='Cc:'. $this->cc."\r\n";
            $this->message='<html>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><head><title><b>Solicitud de cotización</b></title></head>
            <body>
                <h5>Cordial saludo,</h5>

                '.$this->messageContact.'
                <table>
                    <tr><td><h4>Lina M. Cortés Martínez </h4></td></tr>
                    <tr><td style="color: lightcoral">Trivia Editores</td></tr>
                    <tr><td>Cll 150 # 16-56  C.C. Cedritos  of. 405 </td></tr>
                    <tr><td>PBX: 467 30 70  Ext. 101 </td></tr>  
                    <tr><td>CEL. 301 265 65 71 </td></tr>       
                </table>
                </p>
                <p style="font-size:11px"> GRUPO TRIVIA S.A.S-, sociedad debidamente constituida bajo las leyes colombianas e
                    identificada con NIT. 900220568-1, en su calidad de Responsable del Tratamiento de Bases de Datos Personales,
                    registrada ante la Delegatura de Bases de Datos Personales de la Superintendencia de Industria y Comercio de
                    Colombia, se permite informar que de acuerdo con Ley 1581 de 2012 y el Decreto 1074 de 2015, ha implementado
                    mecanismos para facilitar el ejercicio de los derechos de los titulares de la información de conformidad con el
                    aviso de privacidad que puede revisar en siguiente link <a target="_black"
                        href="http://grupotrivia.co/politicas-de-privacidad/">http://grupotrivia.co/politicas-de-privacidad/</a>. En
                    caso
                    de no estar de acuerdo, puede enviar en cualquier momento un correo electrónico a administracion@grupotrivia.co
                    y/o nota física a la dirección CALLE 150 NO. 16-56 OF. 4005 CENTRO COMERCIAL CEDRITOS Bogotá D.C., revocando
                    expresamente su autorización respecto del tratamiento de sus datos personales, caso en el cual deberá
                    abstenerse de utilizar de forma definitiva y automática los productos y servicios de GRUPO TRIVIA S.A.S. para
                    los cuales la información sea necesaria, así como los sitios Web antes mencionados. Para conocer, actualizar, y
                    rectificar sus datos personales o ante cualquier duda o información, por favor comunicarse con
                    administracion@grupotrivia.co y/o enviar una nota física a la dirección CALLE 150 NO. 16-56 OF. 4005 CENTRO
                    COMERCIAL CEDRITOS Bogotá D.C.</p>
            </body>
            
            </html>';
            break;
        }

       
    }

    public function sendMail(){
       if(mail($this->for,$this->title, $this->message, $this->headboard)){
            return 1;
        };
        return 0;
    } 
}
$getData = file_get_contents('php://input');
$data = json_decode($getData);
/**********CREATE ************/
if (isset($data->POST)) {
    $mail=new Notification();
    if ($data->POST == "POST_MAIL") {
     
      $mail->__sendProvider($data->Pro_id,$data->Quo_consec);
      $mail->selectHeadboard(0);
      echo $mail->sendMail();
    }
    if ($data->POST == "POST_MAIL_WEB") {

      $mail->__sendUser($data->Pre_quo_consec,$data->Pre_quo_project);
      $mail->selectHeadboard(1);
      echo $mail->sendMail();
    }
    if ($data->POST == "POST_MAIL_CONTACT") {
        $mail->__sendUserContact($data->Client_contactName,$data->Client_name,$data->Quo_delivPlace,$data->Client_address,$data->Client_email,$data->Client_contactCel);
        $mail->selectHeadboard(2);
        echo $mail->sendMail();
      }
       
  }



?>