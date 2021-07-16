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
                margin: 96px 46px;
    }
  @font-face {
  font-family: 'Calibri';
  src: url({{ storage_path('fonts/CalibriBold.TTF') }}) format('TrueType');
  
    }   
  header {
              position: fixed; 
                top: -60px;
                margin-left: -10px;
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


         body {
             
            font-family: 'Calibri' , sans-serif;
            font-size: 14px; 
        } 
        .titulopdf{
            text-align: center;
        }
     .cuadro{
        vertical-align: top;
        text-align: center;
        height: 100px;
        width: 100px; 
        margin-right: 5px;
        border: 1px solid black;
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
        .der{
        margin-left: 550px
        }
        table{
    border-collapse: collapse;
    width: 100%;
}
th,tr,td{
	border:1px solid #000;
	vertical-align:middle;
	padding-left: 5px;
    text-align: center;
    padding-bottom: 5px;
    line-height: 1.5em;
    height: 20px !important;
    font-size: 12px;
}
th{
    font: bold;
    text-align: center;
	color: black;
    font-size: 20px
	
}
    </style>

    <header>
        <img src="img/logo.png" alt="" width="100">
    </header>
    <footer>
       <p> Pág. <span class="pagenum"></span> </p>
    </footer>

    <p class="titulopdf"><strong><u>DECLARACIÓN JURADA DE BENEFICIARIOS</u></strong></p>
    <div class="cuerpo">
    <p>CONSTE POR EL PRESENTE DOCUMENTO POR EL CUAL, YO  <br> 
        _________________________________________________________________________________________ <br>
         CON DNI/CEX_______________, DOMICILIO____________________________________________________ <br>
        DISTRITO_____________________, TELEFONO________________________ DECLARO BAJO JURAMENTO,
         QUE EN CASO DE MI FALLECIMIENTO LOS BENEFICIARIOS PARA EL COBRO DEL MONTO CORRESPONDIENTE 
         AL DEPOSITO A PLAZO FIJO CON CODIGO/NUMERO DE OPERACIÓN: _________________________________, SON LAS SIGUIENTES:
        </p> <br>
        <br>

        <table>
            <tr>

            <th colspan=8>BENEFICIARIO(S)</th>
	        </tr>
	<tr>
		<td rowspan="2" width = "10%"> DNI</td> 
        <td rowspan="2" width = "30%">NOMBRES Y APELLIDOS</td> 
        <td rowspan="2" width = "10%">FECHA NACIMIENTO</td> 
        <td rowspan="2" width = "10%">PARENTESCO:</td> 
        <td width = "20%" colspan="2">GENERO</td> 
        <td rowspan="2" width = "5%">%</td> 
        <td rowspan="2" width = "15%">DOMICILIO</td> 
	</tr>
    <tr>
      
        <td>F</td>
        <td>M</td>
        
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
	
        </table>

        <br>
        <br>
    
        <p>ME AFIRMO Y RATIFICO EN LO EXPRESADO, EN SEÑAL DE LO CUAL FIRMO EL PRESENTE DOCUMENTO
             EN LA CIUDAD DE _____________, A LOS________DÍAS DEL MES _______________
            DEL AÑO______________.
            </p>
            <p>FIRMA_____________________</p>
<br>
           <div class="der">
            <p >HUELLA DIGITAL</p>
                <div class="cuadro">
                </div>
               
            </div>
                
          
</div>
</body>
</html>