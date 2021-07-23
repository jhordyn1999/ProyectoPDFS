<!DOCTYPE html>
<html>
<head>
   <title>Generate Pdf</title>
   {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 --}}
 {{-- <link rel="stylesheet" href="{{asset('fonts/ve')}}"> --}}
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
                color: white;
                 width: 100vw;
                position: fixed; 
                bottom: -97px; 
                left: -95px; 
                right: 0px;
                height: 50px; 
                font-size: 18px !important;
                vertical-align: top;
            background: #1a4088; 
                text-align: center;
                line-height: 35px;
            }
            .txtfooter{
               vertical-align: text-top;
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
        .icon{
            margin-top: -6px !important;
    /* //vertical-align: top; */
        }
        .fot{
            position: absolute;
     bottom: -212px;
     right: -280px;
     left: 150px;
     z-index: 999;

        }
     /*    .imglazo{
        width: 400px;
        height: 10px;
        } */
    </style>

    <header>
        <img src="img/logo.png" alt="" width="100">
    </header>
    <footer>
        <div class="fot"><img src="img/footverde.png" width="100%" alt="" ></div>
      <p class="txtfooter"> <span class="icon"><img src="img/celular.png" alt="" width="30"></span> +51914166380</p>
    {{--  <p> Pág. <span class="pagenum"></span> </p>  --}}
    </footer>

    <p class="titulopdf"><strong>CARTILLA DE INFORMACION <br> (INVERSIONES)</strong></p>
    <div class="cuerpo">
    
      <p><strong>DECLARACIONES FINALES</strong></p>
      <ol type="1" class="cuerpo">
          <li></li>
          <p>EL CLIENTE declara que el presente contrato, así como la Cartilla Informativa y cronogramas de ser el caso, le fueron entregados para su lectura, que se absolvieron sus consultas y que firma con conocimiento pleno de las condiciones establecidas en los referidos documentos.</p>
          <li></li>
          <p>La nulidad o invalidez, total o parcial, de una o más disposiciones contenidas en este contrato no afectarán la validez de las demás disposiciones contenidas en el mismo, debiéndose considerar como inexistentes únicamente las cláusulas declaradas nulas o invalidas, total o parcialmente.</p>
          <li></li>
          <p>Queda establecido que este documento sustituye a todo acuerdo contractual previo referido a la prestación de los servicios materia del presente contrato, a partir de la fecha de suscripción del mismo.

        </p>


      </ol>
      <br>
      <p><strong>EL CLIENTE</strong> <br>
        Nombre/Razón Social: <br>
        DNI o RUC:______________________________ <br>
        Dirección:_____________________________________________________________________</p>
        <br>
        <br>
        <br>
        <br>
      <p>Firma y huella</p>
      <p class="der">__________________,________ de __________________ del ___________.</p>
      <p></p>
      <p></p>

      <p ></p>

</div>

</body>
</html>