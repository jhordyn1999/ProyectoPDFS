
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

.tblnew{
    width: 100%;
    margin-top: 10px;
  margin-left: 10px;
  margin-right: 10px;
  height: 20px !important;
  
}
.tblfirma{
 
    margin-left: 30px;
  margin-right: 30px;

} 
    </style>
    <header>
        <img src="img/logo.png" alt="" width="100">
       {{--  <p class="cabder">C??digo Cliente:______________ </p>
         <p class="cabder">  C??digo Cr??dito:______________</p> --}}
       {{-- <p class="cab"> prueba</p> --}}
    </header>
    <footer>
        <p> "La empresa tiene la obligaci??n de difundir informaci??n de conformidad con la Ley N?? 29888 y el Reglamento
de Gesti??n de Conducta de Mercado del Sistema Financiero aprobado mediante Resoluci??n SBS N?? 3274-2017".</p>

      {{--  <p> P??g. <span class="pagenum"></span> </p> --}}
    </footer>

    <p class="titulopdf"><strong>HOJA RESUMEN INFORMATIVA</strong></p>
    <div class="cuerpo">
        <table >
            <tr>
                <td style="border: hidden; font:bold;">C??ddigo del Cr??dito</td>
                <td style="border: hidden; font:bold;">C??digo del Cliente</td>
            </tr>
          
        </table>
      <br>
        <table>
         
            <tr>
                <th colspan="2">I. DATOS DEL CLIENTE</th>
            </tr>
            <tr>
                <td colspan="2" style="border: hidden; height: 5px !important;"></td>
            </tr>
            <tr>
                <td style="border: hidden">Cliente:</td>
                <td style="border: hidden">DOI:</td>
            </tr>
     
        </table>
        <br>
        
        <table>
         
            <tr>
                <th colspan="2">II. DATOS DEL CR??DITO</th>
            </tr>
            <tr>
                <td style="border: hidden">
                Producto: <br>
                Moneda: <br>
                Monto Desembolsado: <br>
                Fecha Desembolso: <br>
                Fecha Vencimiento: <br>
                N?? Cuotas: <br>
                Frecuencia de Pago: <br>
                Per??odo de Gracia: <br>
                </td>
                <td style="border: hidden">
                    TEA (1): <br>
                    TCEA: <br>
                    Tasa Int.Compensatoria: <br>
                    Tasa Int.Moratoria: <br>
                    Comisiones: <br>
                    Gastos: <br>
                    Seguros: <br>
                    ITF: <br>
                </td>
            </tr>
        </table>
        <br>
        <br>
        <table>
            <tr>
                <th> III. INFORMACI??N DEL SEGURO</th>
            </tr>
            
        </table>
        <table class="tblnew">
            <tr>
                <td colspan="3" style="text-align: center; font: bold;"> Seguro de Desgravamen</td>
            </tr>
            <tr style="font: bold;">
                <td>Compa??ia de Seguros</td>
                <td>Numero de P??liza</td>
                <td>Tasa Prima(2)</td>
            </tr>
            <tr>
            <td rowspan="2" style="font: bold;"> (3)</td>
            <td>Soles</td>
            <td rowspan="2">Seg??n tarifario vigente</td>
        </tr>
        <tr>
            <td>D??lares</td>
        </tr>
        </table>
        <br>
        <br>
        <table>
            <tr>
                <th>IV. COMISIONES Y GASTOS</th>
            </tr>
            <tr>
                <td  style="border: hidden" >Las Comisiones y gastos son aplicables seg??n tarifario vigente, el mismo que se encuentra disponible en nuestra red de Agencias o en nuestra p??gina web </td>
            </tr>
        </table>
        <br>
        <br>
<hr>
        <table>
            <tr>
                <th>V. CONSIDERACIONES GENERALES</th>
            </tr>
            <tr>
                    <td style="border: hidden" >
                <ol type="1" class="cuerpo">
                    <li></li>
                  <p> Tasa Efectiva Anual (TEA), las tasas de inter??s son fijas durante su periodo de vigencia y est??n expresadas en t??rminos anuales sobre una base de c??lculo de 360 d??as.
                </p> <li></li>
                   <p> Porcentaje aplicado sobre el saldo insoluto, equivalente al saldo deudor. Solo aplicable a personas naturales de acuerdo a
                    p??liza.</p>
                    <li></li>
                    <p>La compa????a de seguros cubre el monto inicial del cr??dito desembolsado o el saldo insoluto de la deuda capital al momento del fallecimiento o incapacidad, las condiciones, riesgos y exclusiones se describen en el certificado de seguro de la p??liza en soles o en d??lares indicados en el numeral IV. Del mismo modo, los plazos para su atenci??n se encuentran en el certificado que EL CLIENTE recibe a la firma del presente documento.</p>
                    <li></li>
                    <p>El pago del seguro de desgravamen se incluye en cada cuota. Se aplica desde la primera cuota en que se amortice capital.</p>
                    <li></li>
                    <p>Todos los pagos y desembolsos est??n afectos al Impuesto a las Transacciones Financieras (ITF) Tasa 0.005%.</p>
                    <li></li>
                    <p>El costo por env??o f??sico de estado de cuenta es S/ 10.00 Soles; el cliente tiene la opci??n de elegir el env??o v??a virtual sin ning??n costo.</p>
                    <li></li>
                    <p>Las comisiones y gastos han sido definidas en moneda nacional, para las operaciones en moneda extranjera dichas comisiones y gastos ser??n cargadas al cliente en su equivalente en moneda extranjera de acuerdo al tipo de cambio del
                        cierre del mes anterior.
                        </p>
                    <li></li>
                    <p>Si el cliente incumple los pagos seg??n las condiciones pactadas, se aplica Tasa de Inter??s Moratorio o Penalidad, Tasa Compensatoria y Gastos de Cobranza seg??n Tarifario vigente. Asimismo, POSSIBLE reportar?? a las Centrales de Riesgo con la calificaci??n que corresponda, de conformidad con el Reglamento para la Evaluaci??n y Clasificaci??n del Deudor y la Exigencia de Provisiones vigente.</p>
                    <li></li>
                    <p>Si el cliente realiza pre-pagos o cancelaciones anticipadas, los intereses aplicados son recalculados a la fecha de pago.</p>
                    <li></li>
                    <p>Las Tasas, comisiones y gastos pueden ser variadas por POSSIBLE cuando estime, a su s??lo criterio, cuando las condiciones
                        del mercado financiero o riesgo crediticio del Cliente lo amerite, sin necesidad de autorizaci??n alguna de este ??ltimo, debiendo ??stas ser reguladas por la Superintendencia de Banca y Seguros.
                        </p>
                        <li></li>
                        <p>Cuando se trate de incrementos, las modificaciones en las tasas, comisiones o gastos entrar??n en vigencia en un
                            plazo de 45 (Cuarenta y cinco) d??as calendario calculados a partir de la comunicaci??n al cliente, conforme los mecanismos pactados.
                            </p>
                        <li></li>
                        <p>Los bienes otorgados en garant??a por el cliente respaldan todas sus deudas y obligaciones con POSSIBLE.</p>
                    
                </ol>
            </td>
            </tr>
        </table>
        <hr>

        <table>
            <tr>
                <th>VI. ATENCI??N AL CLIENTE</th>
            </tr>
            <tr>
                <td style="border: hidden" >
                <ol type="1" class="cuerpo">
                    <li></li>
                    <p>Puede   efectuar   el   pago   de   su   cr??dito   en   las   ventanillas   de   nuestra   Red   de   Agencias.</p>
                    <li></li>
                    <p>Cualquier consulta ser?? resuelta llamando a nuestras Oficinas al: </p>
                </ol>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <th>VII. CRONOGRAMA DE PAGOS</th>
            </tr>
        </table>
        <hr>
        <table>
            <tr style="font: bold;">
                <td style="border: hidden">C??digo del Cr??dito</td>
                <td style="border: hidden">C??digo del Cliente</td>
            </tr>
            <tr>
                <th colspan="2"> VIII. CONFORMIDAD DEL CLIENTE</th>
            </tr>
            <tr>
                <td colspan="2"  style="border: hidden">
                    El Cliente declara haber recibido en su integridad la presente Hoja Resumen Informativa y el Contrato para su lectura. Asimismo, acepta que POSSIBLE ha absuelto todas sus preguntas, suscribiendo el presente documento y el Contrato con absoluto conocimiento de sus alcances en cuanto a derechos, obligaciones y responsabilidades contenidas.
                    El Cliente declara haber recibido copia de los siguientes documentos:
                    <ol type="1" class="cuerpo">
                        <li></li>
                        <p>Hoja Resumen Informativa (Incluye el Cronograma de pagos)</p>
                        <li></li>
                        <p>Contrato</p>
                        <li></li>
                        <p>Pagar??</p>
                        <li></li>
                        <p>Certificado del Seguro de Desgravamen (Solo para Personas Naturales y/o personas que cumplan con los requisitos estipulados en la p??liza de seguros vigente).
                        </p>
                    </ol>
                </td>
            </tr>
        </table>

        <br>
        <br>

        <table class="tblfirma">
            <tr>
                <td  style="border: hidden; font: bold;">
                    _________________________________ <br>
                    Datos del Cliente: <br>
                    Apellidos y nombres: <br>
                    _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _  <br>
                    _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _<br>
                    DNI:_ _ _ _ _ _ _ _ _ _ _ _  <br>
                </td>
                <td  style="border: hidden; font: bold; vertical-align: top; text-align:center;">
                    ______________________________ <br>
                    Representante <br>
                    POSSIBLE
                </td>
            </tr>
        </table>


    </div>
</body>
</html>