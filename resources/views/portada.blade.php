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
         body {
             
            font-family: 'Calibri' , sans-serif;
            font-size: 14px; 
            
        } 
        .titulopdf{
            text-align: center;
        }
        .cuadro{
            border: 1px solid black;
            padding-left: 10px;
            padding-right: 10px;
          
        }
        .cuerpo{
            text-align: justify;
                
        }
    </style>
	{{-- <h1>Welcome to codingdriver.com - {{ $title }}</h1>
	<p>Today we learn Laravel AJAX CRUD Example Tutorial from Scratch. Here we demonstrate how you can create your ajax crud (operation) in laravel application with an example. The simple and easy way to explain ajax crud (create, read the update, delete) with laravel 5 framework without page refresh or reload. you can easily use with your laravel project and easy to customize</p>
    <button>GENERAR PDF</button> --}}
    <p class="titulopdf"><strong> <u> DECLARACION JURADA DE ORIGEN DE FONDOS</u></strong></p>
    <div class="cuerpo">
    <p>Yo, <strong>Jhordyn Alexander Montenegro Castillo</strong> identificado
    con (tipo de documento) DNI N° de Documento 74739939,
    domiciliado en Urb. El Trapecio E-4, de
    estado civil  SOLTERO.</p>
<br>
    <p>De ser Casado o conviviente, indica el nombre del conyugue/conviviviente y tipo y N° de documento 
        de identidad: 74739939.
    </p>
<br>
    <div class="cuadro"> 
        <p><strong>Completar SOLO si es representante de persona jurídica:</strong></p>
        <p>En mi calidad de TRABAJO de la empresa POSSIBLE con RUC N° 8485234695
             con poderes inscritos en la partida Registral N° 845398-425-821
             de la Oficina Registral de CHIMBOTE.
        </p>
    
    </div>
<br>
    <p>DECLARO BAJO JURAMENTO: Que, todos los fondos que envíe/enviemos, deposite/depositemos, 
        transfiera/transfiramos o pague/paguemos a LA CORPORACION NACIONAL EMPRESARIAL POSIBLE EIRL 
        con RUC: 20605055801, con dirección en Jr. Miguel Grau N°552, distrito de Huamachuco, 
        provincia de Sánchez Carrión, departamento de La Libertad, en adelante POSSIBLE, 
        tienen origen en las actividades lícitas que se especifican a continuación: </p>

        <p>Linea de crédito, Abonos menusales, otras cosas mas
           
        </p>

        <p>En Chimbote, a los 31 dias del mes de Julio del 2021</p>

<div >
        <p>_______________________ <br>
            Firma y huella
        </p>
    </div>
    </div>
</body>
</html>

