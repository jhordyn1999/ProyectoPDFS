<!DOCTYPE html>
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
            .cabder{
                font-size: 10px;
                top: -60px;
                float: right;
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
                color: black;
                text-align: center;
                line-height: 35px;
            }
            .der{
           float:right;
        }

         body {
             
            font-family: 'Calibri' , sans-serif;
            font-size: 14px; 
            
        } 
        .titulopdf{
            text-align: center;
        }
        .newfirm{
            width: 45%;
       margin: 0px 5px; 

        display: inline-block;
        vertical-align: top;

        }
        table{
    border-collapse: collapse;
    width: 100%;
}
th,tr,td{
	border:1px solid #000;
    vertical-align:bottom;
	padding-left: 5px;
    text-align: center;
    padding-bottom: 5px;
    line-height: 1.5em;
    height: 120px !important;
    width: 130px !important;
    font-size: 12px;

}




     .firmas{
         font-size:10px;
        margin: 0px 20px;
        text-align: left;
        display: inline-block;
        vertical-align: top;
        
     }
 
     .cuadro{
        vertical-align: top;
        text-align: center;
        height: 150px;
        width: 50vw; 
        border: 1px solid black;
     }
     .cent{
                margin: auto;
                width: 50%;
               
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
        
    </style>

    <header>
        <img src="img/logo.png" alt="" width="100">
    </header>
    <footer>
       <p> P??g. <span class="pagenum"></span> </p>
    </footer>

    <p class="titulopdf"><strong>CARTILLA DE INFORMACION <br> (Dep??sito de Ahorro y A Plazo)</strong></p>
    <div class="cuerpo">
        <p>LA CORPORACION NACIONAL EMPRESARIAL POSIBLE EIRL con RUC: 20605055801 con direcci??n en Jr. Miguel Grau N??552, distrito de Huamachuco, provincia de S??nchez Carri??n, departamento de La Libertad, en adelante <strong>POSSIBLE</strong>, ha recibido de:<br>

            __________________________________________________________________________ <br>
            el importe de:__________________________, menos el importe de ITF de:___________________ 
            siendo un total neto de____________  	
            que han sido depositados en su Cuenta Nro.:_______________________, y que devengar?? intereses a una Tasa de Inter??s Compensatoria Efectiva Anual (TEA en base a un a??o de 360 d??as) fija de:___________ 	
            El monto total de intereses a pagar al vencimiento (s??lo para Dep??sitos a Plazo) es: ____________ La TREA es aquella que permite igualar el monto que se ha depositado con el valor actual del monto que
            efectivamente se recibe al vencimiento del plazo, considerando todos los cargos por comisiones y gastos, incluidos   los   seguros, cuando   corresponda, y   bajo   el   supuesto   de   cumplimiento   de   todas   las
            condiciones, la TREA es:______________. 	 
            El Plazo (s??lo para Dep??sitos a Plazo) es: ______ d??as.</p> 
            <p>El per??odo de pago de intereses (s??lo para Dep??sitos a Plazo) es:_______________________________
            La fecha de corte para el abono de intereses es:__________ Forma de pago: ___________________________________________________
            La fecha de vencimiento (s??lo para Dep??sitos a Plazo) es:________________</p>
            
            <p><strong>Saldo m??nimo de equilibrio para obtener rendimiento es:____________</strong> porque en condiciones de utilizaci??n ordinaria de la cuenta no se cobran comisiones ni gastos. El Saldo M??nimo de Equilibrio variar?? en la medida
            que el cliente haga uso de los servicios detallados en la presente cartilla o se produzcan las condiciones por las cuales se cobran las comisiones o gastos se??alados en el Tarifario. La variaci??n est?? en funci??n del
            monto de la comisi??n o gasto que corresponda. </p>
            <p><strong>Reconocimiento de Intereses (s??lo para Dep??sitos a Plazo): </strong> Si la cuenta a Plazo es cancelada antes de
            30 d??as de su apertura, no generar?? intereses. Si dicha cuenta es cancelada luego de 30 d??as contados a partir de la fecha de su apertura, pero con anterioridad al plazo pactado, se aplicar?? la Tasa de Inter??s
            Efectiva Anual m??nima que se encuentre vigente para Cuenta de Ahorros en la fecha de la cancelaci??n.
            <strong>Impuestos: </strong> Las transacciones que se efect??en estar??n afectas a los tributos aplicables de acuerdo a las disposiciones legales vigentes o futuras. La tasa actual del Impuesto a las Transacciones Financieras (ITF) es de 0.005%, aplicable al monto de la transacci??n. </p>
            <p><strong>Canales para retiro de dinero: </strong> Red de Agencias (Sin Costo).<br>
            <strong>Requisitos para realizar retiros: </strong> Presentar DNI, Pasaporte o Carnet de Extranjer??a vigentes.
            Las comisiones y/o gastos a cobrar son las establecidas seg??n Tarifario vigente, el mismo que se encuentra disponible en nuestra red de Agencias. Las modificaciones de estos conceptos que afecten al cliente respecto a lo pactado, deber?? ser comunicado con una anticipaci??n no menor a cuarenta y cinco (45) d??as indicando la fecha o el momento, a partir del cual, la modificaci??n entrar?? en vigencia. </p>
            
            <hr>
            <p>El CLIENTE, declara haber recibido y le??do en su integridad la presente Cartilla de Informaci??n y el Contrato de Dep??sito a Plazo Fijo de <strong>POSSIBLE, </strong> As?? mismo acepta que, han sido absueltas todassus dudas y preguntas, suscribiendo el presente documento y el contrato con absoluto conocimiento de sus alcances en cuanto a derechos, obligaciones y responsabilidades contenidas. </p>
                <br>
            <p class="der">  ___________________/______________de ___________________de 20__</p>
            <br>
            <br>
            <br>
            <br>
            <span class="der"><strong> N?? Cuenta:___________________</strong> </span>
           {{--  <p class="der"><strong> N?? Cuenta:___________________</strong></p>
 --}}
            <br>
            <br>
            <br>
            <br>
            
            <div class="newfirm">
                <table>
                    <tr>
                        <td> Firma y Sello </td>
                    </tr>
                </table>
                <p>FIRMA</p>
                
            </div>

            <div class="newfirm">
                <table>
                    <tr>
                        <td> Firma y Sello </td>
                    </tr>
                </table>
                <p>FIRMA</p>
                
            </div>
            <br>
               <br>
                <div class="firmas"> 
                  
        <p > EL CLIENTE <br>	
            NOMBRES / RAZ??N SOCIAL<br>
            ____________________________________________ <br>
            ____________________________________________ <br>
            DOI_________________________________________ <br>
           
            Direcci??n:____________________________________ <br>
            ____________________________________________ <br>
        </p>

    
</div>
<div class="firmas"> 
  
   <p > EL CLIENTE <br>	
       NOMBRES / RAZ??N SOCIAL<br>
       ____________________________________________ <br>
       ____________________________________________ <br>
       DOI_________________________________________ <br>
    
       Direcci??n:____________________________________ <br>
       ____________________________________________ <br>
   </p>


</div><br>
<br>

<div class="cent">
    <div class="cuadro">
    </div>
    <p>FIRMA</p>
    <p><strong>REPRESENTANTE LEGAL POSSIBLE </strong></p>
</div>

    
</div>
</body>
</html>