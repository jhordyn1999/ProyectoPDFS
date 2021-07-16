
</html><!DOCTYPE html>
<html>
<head>
   <title>Generate Pdf</title>
     {{--  
 <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Calibri"> --}}
</head>
<body>
    <style>

    @page{
                margin: 96px 96px;
    }
  @font-face {
  font-family: 'Calibri';
  src: url({{ storage_path('fonts/CalibriBold.TTF') }}) format('TrueType');
  
    }   
  header {
              position: fixed;
                top: -60px;
                margin-left: -40px;
                right: 0px; 
                height: 50px;
                display: inline;
                vertical-align: top;
                color: black;
                text-align: left;
                line-height: 35px;
            }

            .pagenum:before {
                content: counter(page);
            }
            footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 50px; 
                color: rgb(139, 138, 138);
                text-align: center;
            }


         body {
            font-family: 'Calibri' , sans-serif;
            font-size: 14px;  
        } 
        .titulopdf{
            text-align: center;
        }

     .firmas{
         font-size:10px;
        margin: 0px 30px;
        text-align: left;
        display: inline-block;
        vertical-align: top;
        
     }
     hr{
        page-break-after: always;
		border: none;
		margin: 0;
		padding: 0;
     }
        .cuerpo{
            text-align: justify; 
        }
 
        table{
    border-collapse: collapse;
    width: 100%;
}
th,tr,td{
	border:1px solid #000;
	vertical-align:middle;
	padding-left: 5px;
    text-align: left;
    padding-bottom: 5px;
    line-height: 1.5em;
    height: 20px !important;
    font-size: 12px;
}
th{
    font: bold;
    background: #1a4088;
    text-align: left;
	color: white;
    font-size: 16px
	
}

    </style>
    <header>
        <img src="img/logo.png" alt="" width="100">
    </header>
    <footer>
   <p> Pág. <span class="pagenum"></span> </p>
    </footer>

    <p class="titulopdf"><strong>PAGARÉ</strong></p>
    <div class="cuerpo">
        <table >
            <tr>
                <td width = "60%" style="border: hidden;">NÚMERO</td>
                <td width = "40%" style="border: hidden;">VENCIMIENTO</td>
            </tr>
          
        </table>
      <br>
    
      <p>Prometo/prometemos pagar solidariamente e incondicionalmente a la orden de <strong> LA CORPORACION NACIONAL EMPRESARIAL POSIBLE EIRL con RUC: 20605055801</strong> con dirección en Jr. Miguel Grau N°552, distrito de Huamachuco, provincia de Sánchez Carrión, departamento de La Libertad  en   adelante <strong>POSSIBLE, </strong>    o   a   quien   éste   hubiera   transferido   este   pagaré,   la   suma   de _________________________, importe recibido a mi/nuestra entera satisfacción y que me/nos obligo/obligamos a pagar en la misma moneda antes expresada en el plazo y vencimiento pactados; en el local de <strong> POSSIBLE</strong>  o en el lugar que se me/nos solicite/n el cobro a elección de <strong> POSSIBLE</strong>, quedando estipulado que, si no se efectúa su pago a su vencimiento, se deberá abonar los intereses compensatorios, de acuerdo a lo establecido en el contrato del que emana este pagaré; así como los intereses que correspondan, comisiones y tasas que <strong> POSSIBLE</strong>  tenga establecidas en su tarifario a partir del día siguiente de su vencimiento hasta la cancelación del monto total liquidado; más los gastos de cobranza,
        gastos notariales, judiciales, extrajudiciales, tributos y otros   a que hubiere lugar. Las tasas de interés compensatorio y/o moratorio antes indicados serán las vigentes en el tarifario de <strong> POSSIBLE</strong>  en la fecha respectiva de liquidación y pago de monto total liquidado. <br>
        Declaro/declaramos haber suscrito a favor de <strong> POSSIBLE</strong>  el presente pagaré en forma incompleta, de conformidad con lo dispuesto en el Articulo N° 10-Ley Nº 27287, autorizando a <strong> POSSIBLE</strong>  de manera irrevocable a completarlo, en caso que por incumplimiento sea necesaria su ejecución, considerando el vencimiento pertinente con el importe del saldo del préstamo, más intereses compensatorios y moratorios pactados, comisiones, gastos y todos los demás conceptos aplicables y exigibles.<br>
        Queda entendido que si no efectuase/efectuásemos el pago al vencimiento establecido, <strong> POSSIBLE</strong>  podrá iniciar y ejercitar las acciones de cobranza en la vía judicial a fin de hacer efectivo lo que adeudo/ adeudamos.
        El presente pagaré no requiere ser protestado por falta de pago, procediendo su ejecución por el sólo mérito de haber vencido su plazo, de conformidad con lo dispuesto en el Artículo52º-Ley Nº27287.<br>
        Conforme a lo establecido en el Art.49º-Ley Nº 27287, este título podrá ser prorrogado y/o renovado por su tenedor, por el plazo que éste señale en el mismo documento o en hoja adherida a él y por el importe del capital más los intereses
        correspondientes que se hayan devengado, hasta la fecha de prórroga y/o renovación, sin que sea necesaria la intervención del/los obligado/os principal/les; aceptando desde ya las prórrogas y/o renovaciones que se efectúen.<br>
        Me/nos someto/sometemos expresamente a los Jueces de los domicilios de las partes intervinientes del presente pagaré, donde se efectuarán las diligencias y notificaciones notariales y/o judiciales a que hubiere lugar. Así mismo, podré/podremos
        realizar cambio de domicilio de conformidad con el Artículo N° 40 - Código Civil.<br>
        En los mismos términos y condiciones antes expresados, declaro/declaramos haber sido informado/s de las estipulaciones y condiciones relativas al llenado de este título valor y haber recibido una copia del mismo. Interviene/n en este pagaré, de ser el
        caso, el/la cónyuge del emitente, asumiendo la misma calidad y obligaciones que éste, conforme a los Arts. 292 y 315 del
        Código Civil. Dejo/dejamos expresa constancia que renuncio/renunciamos a mi/nuestro derecho de impedir o limitar la libre transferencia de este pagaré que he/hemos emitido en forma incompleta y entregado a <strong> POSSIBLE. </strong>
        </p>
       <br>
       <br>
       <p>__________________________, ______ de ___________________ de _________</p>
       <br>
       <br>
       <br>
       <br>
       <div class="firmas">
           <div>
        ______________________________ <br>
        PERSONA NATURAL (Firma y huella) <br>
        EL CLIENTE <br>
        Nombre: <br>
        Estado Civil: <br>
        DNI/PASAPORTE/CE N°: <br>
        Domicilio:______________ <br>
        ________________________
         </div>
         <br>
         <br>
         <br>
         <br>
         <div>
            ______________________________ <br>
            PERSONA JURÍDICA (Firma y huella) <br>
            EL CLIENTE <br>
            Nombre/Razón Social/Denominacion: <br>
            RUC N°: <br>
            Partida Registral N°: <br>
            Representante Legal y/o Apoderado: <br>
            DNI/PASAPORTE/CE N°: <br>
            Domicilio:______________ <br>
            ________________________
         </div>
       </div>

       <div class="firmas">
        <div>
     ______________________________ <br>
     PERSONA NATURAL (Firma y huella) <br>
     Cónyuge de EL CLIENTE <br>
     Nombre: <br>
     Estado Civil: <br>
     DNI/PASAPORTE/CE N°: <br>
     Domicilio:______________ <br>
     ________________________
      </div>
      <br>
      <br>
      <br>
      <br>
      <div>
         ______________________________ <br>
         PERSONA JURÍDICA (Firma y huella) <br>
         Cónyuge de EL CLIENTE <br>
         Nombre/Razón Social/Denominacion: <br>
         RUC N°: <br>
         Partida Registral N°: <br>
         Representante Legal y/o Apoderado: <br>
         DNI/PASAPORTE/CE N°: <br>
         Domicilio:______________ <br>
         ________________________
      </div>
    </div>
    <hr>
    <p class="titulopdf"><strong>AVAL/ES</strong></p>
    <p>Me/nos constituyo/constituimos en aval/avales con el deudor/es y entre nosotros mismos, por todas las obligaciones que éste/éstos contrae/contraen frente a <strong>POSSIBLE</strong> por el presente pagaré, comprometiéndome/comprometiéndonos a responder por la cantidad adeudada, gastos administrativos, intereses y comisiones pactadas, que se devengasen, según lo estipulado y gastos judiciales que pudieran haber, y cualquier otro concepto que sea/n adeudado/s por mi/nuestros avalado/s.<br>
        Asumo/asumimos esta condición de aval/es por un plazo indeterminado, de manera irrevocable y permanente hasta que sea totalmente pagada la obligación a la que sirva de garantía.<br>
        Conforme a lo establecido en el Art.49º-Ley Nº27287, en la fecha de su vencimiento o después de él, de ser el caso, este título podrá ser prorrogado y/o renovado por su tenedor, por el plazo que éste señale en este mismo documento o en hoja adherida
        a él y por el importe del capital más el interés compensatorio y moratorio que se haya devengado hasta la fecha de prórroga y/o renovación, sin que sea necesaria la intervención del/de los obligado/s principal/es ni del/de los aval/es; aceptando desde
        ya las prórrogas y/o renovaciones que se efectúen.<br>
        Declaro/declaramos haber suscrito a favor de <strong>POSSIBLE</strong> el presente pagaré en forma incompleta, de conformidad con lo dispuesto en el Art.10º-Ley Nº27287, autorizando a <strong>POSSIBLE</strong> de manera irrevocable a completar el pagaré, en caso que por incumplimiento sea necesaria su ejecución, considerando el vencimiento pertinente con el importe del saldo del préstamo, más intereses compensatorios y moratorios pactados, comisiones, gastos y todos los demás conceptos aplicables y exigibles.<br>
        Queda entendido que si no efectuase /efectuásemos el pago al vencimiento pactado, <strong>POSSIBLE</strong> podrá iniciar y ejercitar las acciones de cobranza en la vía judicial a fin de hacer efectivo lo que adeudo/adeudamos. El presente pagaré no requiere ser protestado por falta de pago, procediendo su ejecución por el sólo mérito de haber vencido, de conformidad con lo dispuesto en el Art.52º de la Ley Nº 27287. Me (nos) someto (emos) a los jueces y Tribunales del distrito judicial de Lima, fijando mi/nuestro domicilio en la dirección señalada en este documento, donde se efectuarán las diligencias y notificaciones notariales y/o judiciales a que hubiere lugar. Asimismo, podré/podremos realizar cambio de domicilio de conformidad con el Art. 40 – Código Civil.<br>
        Declaro/declaramos haber sido informado/s de las estipulaciones y condiciones relativas al llenado de este título valor y haber recibido copia del mismo.  En los términos y condiciones antes expresados, y declaro/declaramos haber leído en su integridad,
        encontrando conforme y aceptando en todos sus extremos. Interviene/n en éste pagaré el/la cónyuge del aval, asumiendo la
        misma calidad y obligaciones que éste, conforme a los Art.292º y 315º del Código Civil.<br>
        Dejo/dejamos expresa constancia que renuncio/renunciamos a mi/nuestro derecho de impedir o limitar la libre transferencia del pagaré que ha/n emitido en forma incompleta y entregado a <strong>POSSIBLE. </strong> <br>
        </p>
        <br>
        <br>
        <hr>
        <p>__________________________, ______ de ___________________ de _________</p>
        <br>
        <br>
        <br>
        <br>
        <div class="firmas">
            <div>
         ______________________________ <br>
         PERSONA NATURAL (Firma y huella) <br>
         AVAL <br>
         Nombre: <br>
         Estado Civil: <br>
         DNI/PASAPORTE/CE N°: <br>
         Domicilio:______________ <br>
         ________________________
          </div>
          <br>
          <br>
          <br>
          <br>
          <div>
             ______________________________ <br>
             PERSONA JURÍDICA (Firma y huella) <br>
             AVAL <br>
             Nombre/Razón Social/Denominacion: <br>
             RUC N°: <br>
             Partida Registral N°: <br>
             Representante Legal y/o Apoderado: <br>
             DNI/PASAPORTE/CE N°: <br>
             Domicilio:______________ <br>
             ________________________
          </div>
        </div>
 
        <div class="firmas">
         <div>
      ______________________________ <br>
      PERSONA NATURAL (Firma y huella) <br>
      Cónyuge de AVAL <br>
      Nombre: <br>
      Estado Civil: <br>
      DNI/PASAPORTE/CE N°: <br>
      Domicilio:______________ <br>
      ________________________
       </div>
       <br>
       <br>
       <br>
       <br>
       <div>
          ______________________________ <br>
          PERSONA JURÍDICA (Firma y huella) <br>
          Cónyuge de AVAL <br>
          Nombre/Razón Social/Denominacion: <br>
          RUC N°: <br>
          Partida Registral N°: <br>
          Representante Legal y/o Apoderado: <br>
          DNI/PASAPORTE/CE N°: <br>
          Domicilio:______________ <br>
          ________________________
       </div>
     </div>
     <hr>
     <p>ENDOSO: </p>
     <p>Endosado el presente documento en propiedad de _____________________________________, sin responsabilidad para el endosante.</p>
     <br>
        <p>__________________________, ______ de ___________________ de _________</p>
        <div class="firmas">
    
             ______________________________ <br>
            POSSIBLE<br>
             RUC N°:20438563084 <br>
             Representante Legal y/o Apoderado: <br>
             Partida Registral N°: <br>
             DNI/PASAPORTE/CE N°: <br>
             Domicilio:______________ <br>
             ________________________<br>
             Domicilio:______________ <br>
             ________________________<br>
     
        </div>
 
        <div class="firmas">
    
            ______________________________ <br>
           POSSIBLE<br>
            RUC N°:20438563084 <br>
            Representante Legal y/o Apoderado: <br>
            Partida Registral N°: <br>
            DNI/PASAPORTE/CE N°: <br>
            Domicilio:______________ <br>
            ________________________<br>
            Domicilio:______________ <br>
            ________________________<br>
    
       </div>
    </div>
</body>
</html>