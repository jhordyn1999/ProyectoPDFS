
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
    text-align: center;
	color: black;
    font-size: 16px
	
}

    </style>
    <header>
        <img src="img/logo.png" alt="" width="100">

    </header>
    <footer>
       <p> P??g. <span class="pagenum"></span> </p>
    </footer>

    <p class="titulopdf"><strong>Carta de Autorizaci??n de Descuento por Planilla</strong></p>
    <div class="cuerpo">
   <p class="der">________de________ del_______</p>
   <br>
   <p>Se??ores: <br>
        Presente</p>
        <p><strong>Referencia:</strong>  Cr??dito Personal de LA CORPORACION NACIONAL EMPRESARIAL POSIBLE EIRL con RUC: 20605055801 con direcci??n en Jr. Miguel Grau N??552, distrito de Huamachuco, provincia de S??nchez Carri??n, departamento de La Libertad en adelante POSIBLE. / Descuento por Planilla</p>
   <p>Estimados se??ores:</p>
   <p>El que suscribe ________________________________________________________________ <br>
        identificado con DNI N??_______________________.
</p>
<p>TITULAR DEL CREDITO PERSONAL BAJO LA MODALIDAD DE DESCUENTO POR PLANILLA; he solicitado a POSSIBLE, 
    en virtud al convenio celebrado entre ustedes, convenio que declaro conocer en su totalidad, 
    un cr??dito hasta por el importe de S/ ___________________ con garant??a de mis haberes
     o ingresos; y/o beneficios sociales, y/o incentivos laborales, bonos de productividad, remuneraciones 
     impagas, indemnizaciones, utilidades, CTS o cualquier otra denominaci??n an??loga que por ley o convenio
      me correspondan. En ese sentido, para los efectos de su cancelaci??n  autorizo expresamente se me
       descuente mensualmente con cargo a dichos conceptos, en forma prioritaria sobre otros conceptos
        la suma de S/._____________ durante ____meses consecutivos hasta cubrir el monto
         adeudado m??s sus respectivos intereses.1 En caso mi empleador se trate de una Entidad P??blica 
         el descuento referido deber?? efectuarse de conformidad en lo dispuesto en la cuadrag??sima Primera 
         Disposici??n Complementaria Final de la Ley N?? 30114 Ley de Presupuesto del Sector Publico para el 
         a??o fiscal 2014 y D.S N?? 010-2014 ??? EF Normas Reglamentarias para que las Entidades P??blicas realicen 
         afectaciones en la Planilla ??nica de Pagos.</p>

         <p>En tal sentido, mediante la presente <strong>AUTORIZO EXPRESAMENTE Y EN FORMA IRREVOCABLE</strong> a ustedes para que, 
             a fin de amortizar y/o cancelar el cr??dito concedido por <strong>POSSIBLE </strong>descuenten mensualmente con cargo 
             a los conceptos mencionados anteriormente, la suma se??alada, de conformidad con el Cronograma de Pagos, 
             proporcionado por <strong>POSSIBLE</strong>. Dicho descuento debe tener prioridad sobre cualquier compromiso de deuda 
             que asuma y/o adquiera con posterioridad al cr??dito que <strong>POSSIBLE</strong> me haya otorgado y consecuentemente,
              por ning??n motivo deber??n ustedes prorratear el pago de cuotas por compromisos que contraiga con
               terceros despu??s de suscrito el presente documento. Asimismo, deber??n abstenerse de otorgarme adelantos 
               de mi remuneraci??n que puedan afectar el normal cumplimiento del pago de mis cuotas, salvo casos 
               de suma urgencia debidamente acreditados y bajo mi absoluta responsabilidad.</p>

               <p>Del mismo modo, en caso de suspensi??n o extinci??n de mi relaci??n laboral (bajo cualquier modalidad)
                    mi cr??dito perder?? las condiciones preferenciales a las que estuviera sujeto, 
                    entre las que se incluyen la tasa de inter??s y otros cargos. En ese sentido, en el supuesto 
                    que se configure alguna de las situaciones antes se??aladas <strong> AUTORIZO EXPRESAMENTE Y EN FORMA 
                    IRREVOCABLE</strong> a  ustedes para que  el  monto  pendiente de  pago en  virtud del cr??dito concedido,
                     sea descontado de mi liquidaci??n de beneficios sociales (incluido Gratificaciones y el pago por 
                     concepto de Utilidades que pudiera percibir)  y/o de cualquier otro beneficio al que tuviera derecho 
                     y que de acuerdo a ley fueran de mi libre disponibilidad, en ejercicio de la cual, por la presente
                      afecto dichos conceptos en respaldo de mis obligaciones ante <strong>POSSIBLE</strong>  hasta por el monto requerido
                       para la cancelaci??n total de mi cr??dito.</p>
            
                       <p>En el supuesto que s??lo se pueda realizar la cancelaci??n parcial del cr??dito, elijo la modalidad de pago indicada a continuaci??n:</p>

                        <table>
                            <tr>
                                <th colspan="3"> Pago Anticipado Parcial</th>
                                <th>Marcar X</th>
                            </tr>
                            <tr>
                            <th rowspan="2">Pago Anticipado</th> 
                    
                            <td>Reducci??n de Plazo</td>
                            <td>Amortiza capital, reduce intereses, comisiones y gastos al d??a de pago. Se
                                reduce el n??mero de cuotas con la consecuente reducci??n del plazo del cr??dito.
                                </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Reducci??n de Cuota</td>
                            <td>Amortiza  capital,  reduce  intereses,  comisiones  y  gastos  al  d??a  de  pago,
                                reduciendo el monto de la cuota del mes y manteniendo el plazo del cr??dito.
                                
                                </td>
                            <td></td>
                        </tr>
                        </table>
                        <br>
                        <br>
                        <p>Finalmente, dejo expresa constancia que si por cualquier raz??n ustedes no realizaran oportunamente los descuentos autorizados
                            mediante la presente, ello no afectar?? mi obligaci??n crediticia frente a <strong>POSSIBLE</strong> , la que continuar?? vigente hasta su total cancelaci??n. <br>
                            Atentamente,
                            </p>
                            <br>
                            <br>
                            <br>

                            <div class="firmas"> 
                                <div >
                                    <p>________________________</p>
                               <p >CLIENTE <br>	
                                  Nombre:<br>
                                   {{-- ____________________________________________ <br> --}}
                                   
                                   DNI:{{-- _________________________________________  --}}<br>
                                
                                   Direcci??n:{{-- ____________________________________  --}}<br>
                                   {{-- ____________________________________________ <br> --}}
                               </p>
                            
                            </div>
                            </div>
                            <div class="firmas"> 
                                <div >
                                    
                                    <p>________________________</p>
                               <p >C??NYUGE <br>	
                                  Nombre:<br>
                                  {{--  ____________________________________________ <br> --}}
                                   
                                   DNI:{{-- _________________________________________  --}}<br>
                                
                                   Direcci??n:{{-- ____________________________________ --}} <br>
                                  {{--  ____________________________________________ <br> --}}
                               </p>
                            
                            </div>
                            </div>
                            <div class="firmas"> 
                                <div >
                                    
                                    <p>______________________________</p>
                               <p >REPRESENTANTE AUTORIZADO <br>	
                                LA EMPRESA
                                 
                               </p>
                            
                            </div>
                            </div>

                        <br>
                        <p>Si en caso la oferta aprobada es menor a lo consignado en esta carta se autoriza a dar pase a la operaci??n.
                            En 02 Originales: LA EMPRESA/POSSIBLE
                            </p>

                    </div>
</body>
</html>