
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
   <p> P??g. <span class="pagenum"></span> </p>
    </footer>

    <p class="titulopdf"><strong>PAGAR??</strong></p>
    <div class="cuerpo">
        <table >
            <tr>
                <td width = "60%" style="border: hidden;">N??MERO</td>
                <td width = "40%" style="border: hidden;">VENCIMIENTO</td>
            </tr>
          
        </table>
      <br>
    
      <p>Prometo/prometemos pagar solidariamente e incondicionalmente a la orden de <strong> LA CORPORACION NACIONAL EMPRESARIAL POSIBLE EIRL con RUC: 20605055801</strong> con direcci??n en Jr. Miguel Grau N??552, distrito de Huamachuco, provincia de S??nchez Carri??n, departamento de La Libertad  en   adelante <strong>POSSIBLE, </strong>    o   a   quien   ??ste   hubiera   transferido   este   pagar??,   la   suma   de _________________________, importe recibido a mi/nuestra entera satisfacci??n y que me/nos obligo/obligamos a pagar en la misma moneda antes expresada en el plazo y vencimiento pactados; en el local de <strong> POSSIBLE</strong>  o en el lugar que se me/nos solicite/n el cobro a elecci??n de <strong> POSSIBLE</strong>, quedando estipulado que, si no se efect??a su pago a su vencimiento, se deber?? abonar los intereses compensatorios, de acuerdo a lo establecido en el contrato del que emana este pagar??; as?? como los intereses que correspondan, comisiones y tasas que <strong> POSSIBLE</strong>  tenga establecidas en su tarifario a partir del d??a siguiente de su vencimiento hasta la cancelaci??n del monto total liquidado; m??s los gastos de cobranza,
        gastos notariales, judiciales, extrajudiciales, tributos y otros   a que hubiere lugar. Las tasas de inter??s compensatorio y/o moratorio antes indicados ser??n las vigentes en el tarifario de <strong> POSSIBLE</strong>  en la fecha respectiva de liquidaci??n y pago de monto total liquidado. <br>
        Declaro/declaramos haber suscrito a favor de <strong> POSSIBLE</strong>  el presente pagar?? en forma incompleta, de conformidad con lo dispuesto en el Articulo N?? 10-Ley N?? 27287, autorizando a <strong> POSSIBLE</strong>  de manera irrevocable a completarlo, en caso que por incumplimiento sea necesaria su ejecuci??n, considerando el vencimiento pertinente con el importe del saldo del pr??stamo, m??s intereses compensatorios y moratorios pactados, comisiones, gastos y todos los dem??s conceptos aplicables y exigibles.<br>
        Queda entendido que si no efectuase/efectu??semos el pago al vencimiento establecido, <strong> POSSIBLE</strong>  podr?? iniciar y ejercitar las acciones de cobranza en la v??a judicial a fin de hacer efectivo lo que adeudo/ adeudamos.
        El presente pagar?? no requiere ser protestado por falta de pago, procediendo su ejecuci??n por el s??lo m??rito de haber vencido su plazo, de conformidad con lo dispuesto en el Art??culo52??-Ley N??27287.<br>
        Conforme a lo establecido en el Art.49??-Ley N?? 27287, este t??tulo podr?? ser prorrogado y/o renovado por su tenedor, por el plazo que ??ste se??ale en el mismo documento o en hoja adherida a ??l y por el importe del capital m??s los intereses
        correspondientes que se hayan devengado, hasta la fecha de pr??rroga y/o renovaci??n, sin que sea necesaria la intervenci??n del/los obligado/os principal/les; aceptando desde ya las pr??rrogas y/o renovaciones que se efect??en.<br>
        Me/nos someto/sometemos expresamente a los Jueces de los domicilios de las partes intervinientes del presente pagar??, donde se efectuar??n las diligencias y notificaciones notariales y/o judiciales a que hubiere lugar. As?? mismo, podr??/podremos
        realizar cambio de domicilio de conformidad con el Art??culo N?? 40 - C??digo Civil.<br>
        En los mismos t??rminos y condiciones antes expresados, declaro/declaramos haber sido informado/s de las estipulaciones y condiciones relativas al llenado de este t??tulo valor y haber recibido una copia del mismo. Interviene/n en este pagar??, de ser el
        caso, el/la c??nyuge del emitente, asumiendo la misma calidad y obligaciones que ??ste, conforme a los Arts. 292 y 315 del
        C??digo Civil. Dejo/dejamos expresa constancia que renuncio/renunciamos a mi/nuestro derecho de impedir o limitar la libre transferencia de este pagar?? que he/hemos emitido en forma incompleta y entregado a <strong> POSSIBLE. </strong>
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
        DNI/PASAPORTE/CE N??: <br>
        Domicilio:______________ <br>
        ________________________
         </div>
         <br>
         <br>
         <br>
         <br>
         <div>
            ______________________________ <br>
            PERSONA JUR??DICA (Firma y huella) <br>
            EL CLIENTE <br>
            Nombre/Raz??n Social/Denominacion: <br>
            RUC N??: <br>
            Partida Registral N??: <br>
            Representante Legal y/o Apoderado: <br>
            DNI/PASAPORTE/CE N??: <br>
            Domicilio:______________ <br>
            ________________________
         </div>
       </div>

       <div class="firmas">
        <div>
     ______________________________ <br>
     PERSONA NATURAL (Firma y huella) <br>
     C??nyuge de EL CLIENTE <br>
     Nombre: <br>
     Estado Civil: <br>
     DNI/PASAPORTE/CE N??: <br>
     Domicilio:______________ <br>
     ________________________
      </div>
      <br>
      <br>
      <br>
      <br>
      <div>
         ______________________________ <br>
         PERSONA JUR??DICA (Firma y huella) <br>
         C??nyuge de EL CLIENTE <br>
         Nombre/Raz??n Social/Denominacion: <br>
         RUC N??: <br>
         Partida Registral N??: <br>
         Representante Legal y/o Apoderado: <br>
         DNI/PASAPORTE/CE N??: <br>
         Domicilio:______________ <br>
         ________________________
      </div>
    </div>
    <hr>
    <p class="titulopdf"><strong>AVAL/ES</strong></p>
    <p>Me/nos constituyo/constituimos en aval/avales con el deudor/es y entre nosotros mismos, por todas las obligaciones que ??ste/??stos contrae/contraen frente a <strong>POSSIBLE</strong> por el presente pagar??, comprometi??ndome/comprometi??ndonos a responder por la cantidad adeudada, gastos administrativos, intereses y comisiones pactadas, que se devengasen, seg??n lo estipulado y gastos judiciales que pudieran haber, y cualquier otro concepto que sea/n adeudado/s por mi/nuestros avalado/s.<br>
        Asumo/asumimos esta condici??n de aval/es por un plazo indeterminado, de manera irrevocable y permanente hasta que sea totalmente pagada la obligaci??n a la que sirva de garant??a.<br>
        Conforme a lo establecido en el Art.49??-Ley N??27287, en la fecha de su vencimiento o despu??s de ??l, de ser el caso, este t??tulo podr?? ser prorrogado y/o renovado por su tenedor, por el plazo que ??ste se??ale en este mismo documento o en hoja adherida
        a ??l y por el importe del capital m??s el inter??s compensatorio y moratorio que se haya devengado hasta la fecha de pr??rroga y/o renovaci??n, sin que sea necesaria la intervenci??n del/de los obligado/s principal/es ni del/de los aval/es; aceptando desde
        ya las pr??rrogas y/o renovaciones que se efect??en.<br>
        Declaro/declaramos haber suscrito a favor de <strong>POSSIBLE</strong> el presente pagar?? en forma incompleta, de conformidad con lo dispuesto en el Art.10??-Ley N??27287, autorizando a <strong>POSSIBLE</strong> de manera irrevocable a completar el pagar??, en caso que por incumplimiento sea necesaria su ejecuci??n, considerando el vencimiento pertinente con el importe del saldo del pr??stamo, m??s intereses compensatorios y moratorios pactados, comisiones, gastos y todos los dem??s conceptos aplicables y exigibles.<br>
        Queda entendido que si no efectuase /efectu??semos el pago al vencimiento pactado, <strong>POSSIBLE</strong> podr?? iniciar y ejercitar las acciones de cobranza en la v??a judicial a fin de hacer efectivo lo que adeudo/adeudamos. El presente pagar?? no requiere ser protestado por falta de pago, procediendo su ejecuci??n por el s??lo m??rito de haber vencido, de conformidad con lo dispuesto en el Art.52?? de la Ley N?? 27287. Me (nos) someto (emos) a los jueces y Tribunales del distrito judicial de Lima, fijando mi/nuestro domicilio en la direcci??n se??alada en este documento, donde se efectuar??n las diligencias y notificaciones notariales y/o judiciales a que hubiere lugar. Asimismo, podr??/podremos realizar cambio de domicilio de conformidad con el Art. 40 ??? C??digo Civil.<br>
        Declaro/declaramos haber sido informado/s de las estipulaciones y condiciones relativas al llenado de este t??tulo valor y haber recibido copia del mismo.  En los t??rminos y condiciones antes expresados, y declaro/declaramos haber le??do en su integridad,
        encontrando conforme y aceptando en todos sus extremos. Interviene/n en ??ste pagar?? el/la c??nyuge del aval, asumiendo la
        misma calidad y obligaciones que ??ste, conforme a los Art.292?? y 315?? del C??digo Civil.<br>
        Dejo/dejamos expresa constancia que renuncio/renunciamos a mi/nuestro derecho de impedir o limitar la libre transferencia del pagar?? que ha/n emitido en forma incompleta y entregado a <strong>POSSIBLE. </strong> <br>
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
         DNI/PASAPORTE/CE N??: <br>
         Domicilio:______________ <br>
         ________________________
          </div>
          <br>
          <br>
          <br>
          <br>
          <div>
             ______________________________ <br>
             PERSONA JUR??DICA (Firma y huella) <br>
             AVAL <br>
             Nombre/Raz??n Social/Denominacion: <br>
             RUC N??: <br>
             Partida Registral N??: <br>
             Representante Legal y/o Apoderado: <br>
             DNI/PASAPORTE/CE N??: <br>
             Domicilio:______________ <br>
             ________________________
          </div>
        </div>
 
        <div class="firmas">
         <div>
      ______________________________ <br>
      PERSONA NATURAL (Firma y huella) <br>
      C??nyuge de AVAL <br>
      Nombre: <br>
      Estado Civil: <br>
      DNI/PASAPORTE/CE N??: <br>
      Domicilio:______________ <br>
      ________________________
       </div>
       <br>
       <br>
       <br>
       <br>
       <div>
          ______________________________ <br>
          PERSONA JUR??DICA (Firma y huella) <br>
          C??nyuge de AVAL <br>
          Nombre/Raz??n Social/Denominacion: <br>
          RUC N??: <br>
          Partida Registral N??: <br>
          Representante Legal y/o Apoderado: <br>
          DNI/PASAPORTE/CE N??: <br>
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
             RUC N??:20438563084 <br>
             Representante Legal y/o Apoderado: <br>
             Partida Registral N??: <br>
             DNI/PASAPORTE/CE N??: <br>
             Domicilio:______________ <br>
             ________________________<br>
             Domicilio:______________ <br>
             ________________________<br>
     
        </div>
 
        <div class="firmas">
    
            ______________________________ <br>
           POSSIBLE<br>
            RUC N??:20438563084 <br>
            Representante Legal y/o Apoderado: <br>
            Partida Registral N??: <br>
            DNI/PASAPORTE/CE N??: <br>
            Domicilio:______________ <br>
            ________________________<br>
            Domicilio:______________ <br>
            ________________________<br>
    
       </div>
    </div>
</body>
</html>