
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
       <p> Pág. <span class="pagenum"></span> </p>
    </footer>

    <p class="titulopdf"><strong>Carta de Autorización de Descuento por Planilla</strong></p>
    <div class="cuerpo">
   <p class="der">________de________ del_______</p>
   <br>
   <p>Señores: <br>
        Presente</p>
        <p><strong>Referencia:</strong>  Crédito Personal de LA CORPORACION NACIONAL EMPRESARIAL POSIBLE EIRL con RUC: 20605055801 con dirección en Jr. Miguel Grau N°552, distrito de Huamachuco, provincia de Sánchez Carrión, departamento de La Libertad en adelante POSIBLE. / Descuento por Planilla</p>
   <p>Estimados señores:</p>
   <p>El que suscribe ________________________________________________________________ <br>
        identificado con DNI Nº_______________________.
</p>
<p>TITULAR DEL CREDITO PERSONAL BAJO LA MODALIDAD DE DESCUENTO POR PLANILLA; he solicitado a POSSIBLE, 
    en virtud al convenio celebrado entre ustedes, convenio que declaro conocer en su totalidad, 
    un crédito hasta por el importe de S/ ___________________ con garantía de mis haberes
     o ingresos; y/o beneficios sociales, y/o incentivos laborales, bonos de productividad, remuneraciones 
     impagas, indemnizaciones, utilidades, CTS o cualquier otra denominación análoga que por ley o convenio
      me correspondan. En ese sentido, para los efectos de su cancelación  autorizo expresamente se me
       descuente mensualmente con cargo a dichos conceptos, en forma prioritaria sobre otros conceptos
        la suma de S/._____________ durante ____meses consecutivos hasta cubrir el monto
         adeudado más sus respectivos intereses.1 En caso mi empleador se trate de una Entidad Pública 
         el descuento referido deberá efectuarse de conformidad en lo dispuesto en la cuadragésima Primera 
         Disposición Complementaria Final de la Ley N° 30114 Ley de Presupuesto del Sector Publico para el 
         año fiscal 2014 y D.S N° 010-2014 – EF Normas Reglamentarias para que las Entidades Públicas realicen 
         afectaciones en la Planilla Única de Pagos.</p>

         <p>En tal sentido, mediante la presente <strong>AUTORIZO EXPRESAMENTE Y EN FORMA IRREVOCABLE</strong> a ustedes para que, 
             a fin de amortizar y/o cancelar el crédito concedido por <strong>POSSIBLE </strong>descuenten mensualmente con cargo 
             a los conceptos mencionados anteriormente, la suma señalada, de conformidad con el Cronograma de Pagos, 
             proporcionado por <strong>POSSIBLE</strong>. Dicho descuento debe tener prioridad sobre cualquier compromiso de deuda 
             que asuma y/o adquiera con posterioridad al crédito que <strong>POSSIBLE</strong> me haya otorgado y consecuentemente,
              por ningún motivo deberán ustedes prorratear el pago de cuotas por compromisos que contraiga con
               terceros después de suscrito el presente documento. Asimismo, deberán abstenerse de otorgarme adelantos 
               de mi remuneración que puedan afectar el normal cumplimiento del pago de mis cuotas, salvo casos 
               de suma urgencia debidamente acreditados y bajo mi absoluta responsabilidad.</p>

               <p>Del mismo modo, en caso de suspensión o extinción de mi relación laboral (bajo cualquier modalidad)
                    mi crédito perderá las condiciones preferenciales a las que estuviera sujeto, 
                    entre las que se incluyen la tasa de interés y otros cargos. En ese sentido, en el supuesto 
                    que se configure alguna de las situaciones antes señaladas <strong> AUTORIZO EXPRESAMENTE Y EN FORMA 
                    IRREVOCABLE</strong> a  ustedes para que  el  monto  pendiente de  pago en  virtud del crédito concedido,
                     sea descontado de mi liquidación de beneficios sociales (incluido Gratificaciones y el pago por 
                     concepto de Utilidades que pudiera percibir)  y/o de cualquier otro beneficio al que tuviera derecho 
                     y que de acuerdo a ley fueran de mi libre disponibilidad, en ejercicio de la cual, por la presente
                      afecto dichos conceptos en respaldo de mis obligaciones ante <strong>POSSIBLE</strong>  hasta por el monto requerido
                       para la cancelación total de mi crédito.</p>
            
                       <p>En el supuesto que sólo se pueda realizar la cancelación parcial del crédito, elijo la modalidad de pago indicada a continuación:</p>

                        <table>
                            <tr>
                                <th colspan="3"> Pago Anticipado Parcial</th>
                                <th>Marcar X</th>
                            </tr>
                            <tr>
                            <th rowspan="2">Pago Anticipado</th> 
                    
                            <td>Reducción de Plazo</td>
                            <td>Amortiza capital, reduce intereses, comisiones y gastos al día de pago. Se
                                reduce el número de cuotas con la consecuente reducción del plazo del crédito.
                                </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Reducción de Cuota</td>
                            <td>Amortiza  capital,  reduce  intereses,  comisiones  y  gastos  al  día  de  pago,
                                reduciendo el monto de la cuota del mes y manteniendo el plazo del crédito.
                                
                                </td>
                            <td></td>
                        </tr>
                        </table>
                        <br>
                        <br>
                        <p>Finalmente, dejo expresa constancia que si por cualquier razón ustedes no realizaran oportunamente los descuentos autorizados
                            mediante la presente, ello no afectará mi obligación crediticia frente a <strong>POSSIBLE</strong> , la que continuará vigente hasta su total cancelación. <br>
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
                                
                                   Dirección:{{-- ____________________________________  --}}<br>
                                   {{-- ____________________________________________ <br> --}}
                               </p>
                            
                            </div>
                            </div>
                            <div class="firmas"> 
                                <div >
                                    
                                    <p>________________________</p>
                               <p >CÓNYUGE <br>	
                                  Nombre:<br>
                                  {{--  ____________________________________________ <br> --}}
                                   
                                   DNI:{{-- _________________________________________  --}}<br>
                                
                                   Dirección:{{-- ____________________________________ --}} <br>
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
                        <p>Si en caso la oferta aprobada es menor a lo consignado en esta carta se autoriza a dar pase a la operación.
                            En 02 Originales: LA EMPRESA/POSSIBLE
                            </p>

                    </div>
</body>
</html>