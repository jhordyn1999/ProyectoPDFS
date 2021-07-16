
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
        vertical-align: bottom;

        }
     .firmas{
        font-size:14px;
        margin: 0px 20px; 
        text-align: left;
        display: inline-block;   
     }
 
     .cuadro{
        display: inline-block;
        text-align: center;
        width: 15px;
        height: 15px;
        border: 1px solid black;
   
     }
     .cuadrofirma{
        vertical-align: top; 
        width: 100px;
        height: 150px;
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
        .der{
           float:right;
        }
        table{
    border-collapse: collapse;
    width: 100%;
}
th,tr,td{
	border:1px solid #000;
   
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
    font-size: 16px
	
}

.tbldni{
    width: 150px !important;
    height: 15px !important;
    vertical-align: center;
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

    <p class="titulopdf"><strong>SOLICITUD DE REPROGRAMACIÓN<strong></p>
    <div class="cuerpo">
   <p class="der"> Chimbote, 14 de Julio del 2021 </p>
   <p>Señores:</p>
   
  <p>  CORPORACION NACIONAL EMPRESARIAL POSIBLE EIRL con RUC: 20605055801 con dirección en Jr. Miguel Grau N°552, distrito de Huamachuco, provincia de Sánchez Carrión, departamento de La Libertad, en adelante POSSIBLE.
</p>
<p>Estimados señores:</p>
<p>Yo, </p>
<table>
    <tr>
        <td>Apellido Paterno</td>
        <td>Apellido Materno</td>
        <td>Nombres</td>
    </tr>
    <tr>
        <td>Montenegro</td>
        <td>Castillo</td>
        <td>Jhordyn Alexander</td>
    </tr>
</table>
<br>
<br>
<div class="firmas">
    <p style="vertical-align: middle">Identificado con D.N.I  </p>
</div>
<div class="firmas">
    <table class="tbldni">
        <tr>    
            
            <td>7</td>
            <td>4</td>
            <td>7</td>
            <td>3</td>
            <td>9</td>
            <td>9</td>
            <td>3</td>
            <td>9</td>
        </tr>
    </table>
</div>
<br>
<div class="firmas">
    <p style="vertical-align: middle">Con código de crédito  </p>
</div>
<div class="firmas">
    <table class="tbldni">
        <tr>    
            
            <td>8</td>
            <td>5</td>
            <td>9</td>
            <td>0</td>
            <td>6</td>
            <td>8</td>
            <td>6</td>
            <td>3</td>
        </tr>
    </table>
</div>
<p>Con domicilio en: Urb. El Trapecio E-4 .</p>

<p>En calidad del titular del crédito, solicito la reprogramación de mi crédito actual, por el motivo indicado a continuación: (favor de marcar con aspa en el cuadro que corresponda)</p>

   
    <table>
        <tr>
            <td style="border: hidden"> <p class="cuadro"> </p> <p class="newfirm">Enfermedad de titular</p></td>
            <td style="border: hidden"> <p class="cuadro"> </p> <p class="newfirm">Enfermedad de pariente Cercano</p></td>
        </tr>
        <tr>
            <td style="border: hidden"> <p class="cuadro"> </p> <p class="newfirm">Accidente del titular</p></td>
            <td style="border: hidden"> <p class="cuadro"> </p> <p class="newfirm">Accidente de pariente Cercano</p></td>
        </tr>
        <tr>
            <td style="border: hidden"> <p class="cuadro"> </p> <p class="newfirm">Fallecimiento de familiar</p></td>
            <td style="border: hidden"> <p class="cuadro"> </p> <p class="newfirm">Robo del bien </p></td>
        </tr>
        <tr>
            <td style="border: hidden"> <p class="cuadro"> </p> <p class="newfirm">Fallas o problemas mecánicos del bien</p></td>
            <td style="border: hidden"> <p class="cuadro">X </p> <p class="newfirm">Demora de entrega del bien </p></td>
        </tr>
        <tr>
            <td colspan="2" style="border: hidden"> <p class="cuadro"> </p> <p class="newfirm">Otros (detallar) ___________________________________________________</p></td>
        </tr>
    </table>
    <br>
    <br>
  <hr>
 <br>
 <br>
    <div class="firmas">
        <p>Asimismo, me comprometo a cumplir con la presente reprogramación. </p>
        <br>
        <p>Firma del titular: ________________________________</p>
        <br>
        <p>Autorizado por: _________________________________</p>
        <br>
        <p>Firma: ________________________________________</p>
    </div>
    <div class="huella"> 
    <p class="cuadrofirma"> </p>
    <p style="text-align: center">Huella Dactilar</p>
 </div> 



</div>
</body>
</html>