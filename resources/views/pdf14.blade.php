
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
                color: black;
                text-align: center;
                line-height: 35px;
            }

         body {
             
            font-family: 'Calibri' , sans-serif;
            font-size: 14px;     
        } 
        .titulopdf{
            text-align: center;
        }
        .newfirm{
        font-size:14px;
        margin: 0px 20px; 
        text-align: left;
        display: inline-block;
        }
     .firmas{
        font-size:14px;
        margin: 0px 20px; 
        display: inline-block;
        vertical-align: bottom;
        
     }
 
     .cuadro{
        display: inline-block;
        vertical-align: middle;
        text-align: center;
        width: 50px;
        height: 30px;
        border: 1px solid black;
   
     }
     .cuadrofirma{
        vertical-align: top; 
        width: 80px;
        height: 125px;
        border: 3px solid black;
   
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
    text-align: center;
	color: black;
    font-size: 16px
	
}

.huella{
    vertical-align: top; 
    display: inline-block;
    height: 170px;
    width: 110px;
}
    </style>
    <header>
        <img src="img/logo.png" alt="" width="100">
    </header>

    <footer>
       <p> Pág. <span class="pagenum"></span> </p>
    </footer>

    <p class="titulopdf"><strong>CONSTANCIA DE ELECCIÓN DE PAGO</strong></p>
    <div class="cuerpo">
   <p>Yo ___________________________________________________________________, identificado/a con DNI N° ________________, con domicilio en
       ___________________________________________________________ y con código de crédito N°_______________________.
   </p>
   <p>Que en mi calidad de titular del crédito Nº _____________ que mantengo vigente con LA CORPORACION NACIONAL EMPRESARIAL POSIBLE EIRL con RUC: 20605055801 con dirección en Jr. Miguel Grau N°552, distrito de Huamachuco, provincia de Sánchez Carrión, departamento de La Libertad,  en adelante <strong>POSSIBLE</strong> ,   por   la   suma   de   S/    ___________</p>
        <p>(________________________________________ Soles), expreso mi voluntad de  
            hacer uso de mis derechos como cliente, por lo cual deseo efectuar el pago por el importe 
            de   S/ _____________ (_____________________________________) con la finalidad de hacer:</p>
    <table>
        <tr>
            <td style="border: hidden"> <p class="cuadro"> </p> <p class="newfirm">Adelanto de Cuotas</p></td>
           
        </tr>
        <tr>
            <td style="border: hidden"> <p class="cuadro"> </p> <p class="newfirm">Pago Anticipado</p></td>
          
        </tr>
        <tr>
            <td style="border: hidden"> <p class="newfirm">En caso de elegir pago anticipado, el saldo será aplicado de acuerdo a mi elección a: </p></td>
         
        </tr>
        <tr>
            <td style="border: hidden"> <p class="cuadro"> </p> <p class="newfirm">Reducción del monto de las cuotas</p></td>
         
        <tr>
            <td style="border: hidden"> <p class="cuadro"> </p> <p class="newfirm">Reducción de plazo/p></td>
        </tr>
    </table>
    <br>
    <p>En caso de Pago Anticipado Parcial:</p>
    <ol type="a" class="cuerpo">
        <li></li>
        <p>Acepto que el Pago Anticipado parcial con reducción de número de cuotas también podría generar la variación del monto de la cuota, en cuyo caso acepto que el importe de las nuevas cuotas no podrá ser mayor al importe de cuota actual.</p>
        <li></li>
        <p>El importe de las cuotas y fechas de pago podrán tener una variación respecto al cronograma original.</p>
    </ol>
    <p>En caso de Pago Anticipado Total:</p>
        <ol type="a" class="cuerpo">
            <li></li>
            <p>Los gastos por la liberación de la Garantía Mobiliaria son por cuenta del cliente.</p>
        </ol>
        <p>Declaro que he sido informado previa y correctamente sobre todas las características del Adelanto de Cuota y del Pago Anticipado parcial y total, además de las opciones de reducción de plazo y monto de cuota. En virtud a dicha información he decidido elegir la presente opción y modalidad. Asimismo, se me informó que puedo solicitar un nuevo cronograma.</p>

        <p>De manera voluntaria realizo la elección de pago de mi crédito en <strong>POSSIBLE</strong> , con el propósito de que se pueda dar cumplimiento a lo señalado en el artículo 22 de la resolución SBS Nº 8181-2012 y las modificaciones del REGLAMENTO DE TRANSPARENCIA DE INFORMACIÓN Y CONTRATACIÓN CON USUARIOS DEL SISTEMA FINANCIERO expedida por la Superintendencia de Banca, Seguros y Administradora Privada de Fondos y Pensiones.</p>
        <p>En constancia de lo declarado, firmo la presente declaración a los ___________________ días del mes ________________ del año _______ en la ciudad de _________________________.
            </p>





    <div class="firmas">
        <p>_________________ <br>
       Firma del cliente</p>
    </div>
    <div class="huella"> 
    <p class="cuadrofirma"> </p>
    <p {{-- style="text-align: center" --}}>Huella Dactilar</p>
 </div> 
 <div class="firmas">
    
   <p>__________________ <br>
        Firma representante <br>
    POSSIBLE</p>
</div>
<div class="huella"> 
<p class="cuadrofirma"> </p>
<p {{-- style="text-align: center" --}}>Huella Dactilar</p>
</div> 


</div>
</body>
</html>