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
    text-align: center;
	color: black;
    font-size: 16px
	
}
.comparativo{
    height: 200px !important;
    text-align: center;

}
    </style>
    
    <header>
        <img src="img/logo.png" alt="" width="100">
    </header>

    <footer>
       <p> Pág. <span class="pagenum"></span> </p>
    </footer>

    <p class="titulopdf"><strong><u>CONTRATO DE SERVICIO PARA DESCUENTO POR PLANILLA DE CREDITOS PERSONALES</u></strong></p>
    <div class="cuerpo">
   
   
        <p>Conste por el presente documento, el <strong> CONTRATO DE SERVICIO  PARA DESCUENTO  POR PLANILLA  DE CREDITOS
            PERSONALES,</strong>que celebran de una parte, .......................................................................................................................,  con RUC No..........,  con domicilio  en …………………………………………………………....., distrito  de ……………....., provincia ………………………… y departamento  de ……………………….., debidamente representada  por su ........................, Sr. ..........................................................................  identificado con DNI No. ......................, según poderes inscritos en la Partida Electrónica No. ............................ del Registro de Personas Jurídicas de ……………………………., a la que en adelante se denominará  <strong>LA EMPRESA; </strong>  y de la otra de  <strong>LA CORPORACION NACIONAL EMPRESARIAL POSIBLE EIRL  con RUC: 20605055801, </strong> con dirección en Jr. Miguel Grau N°552, distrito de Huamachuco, provincia de Sánchez Carrión, departamento de La Libertad,,   en   adelante   <strong> POSSIBLE,</strong> en los términos y condiciones siguientes:
            </p>

            <p><strong><u></u></strong></p>

            <p>DE LAS PARTES.-</p>
            <p><strong>PRIMERA:  POSSIBLE</strong> es una empresa del Sistema Financiero, cuya organización y funcionamiento se encuentran regulados por ley y por las disposiciones de su Estatuto Social. Tiene por objeto realizar las operaciones y servicios permitidos a las
                empresas del Sistema Financiero por la Ley General del Sistema Financiero y del Sistema de Seguros y Orgánica de la
                Superintendencia de Banca y Seguros, y demás disposiciones modificatorias, complementarias y reglamentarias.
                </p>
            <p><strong>LA EMPRESA</strong> es una institución   organizada de acuerdo a las leyes del Perú que se regula por su estatuto y por las leyes</p>
            <p><strong><u>DEL OBJETO DE EL CONTRATO.-</u></strong></p>
            <p><strong>SEGUNDA:  POSSIBLE</strong> pone a disposición de los trabajadores de <strong>LA EMPRESA, </strong> créditos personales de consumo, cuyas
                características están descritas en el Anexo 1, que forma parte de este contrato, sujetos a reembolsos mediante descuentos mensuales automáticos por planilla, que debe efectuar <strong> LA EMPRESA</strong>.
                </p>
            <p><strong><u>DEL OTORGAMIENTO Y CONDICIONES DEL CREDITO</u></strong></p>
            <p><strong>TERCERA:</strong> </p>
                <ol type="a" class="cuerpo">
                    <li></li>
                    <p>La solicitud de crédito presentada por el prestatario y su cónyuge, cuando corresponda, al amparo de este Contrato,
                        conjuntamente con su autorización para el descuento de sus remuneraciones y de su liquidación de beneficios sociales, liberalidades,  indemnizaciones  u otros conceptos  similares,  en caso de renuncia,  despido,  cese o retiro, es evaluada, calificada y aprobada por <strong>POSSIBLE, </strong> el mismo que determinará el monto del crédito, según la capacidad de pago y/o endeudamiento mensual, tanto del solicitante como del aval permanente, según sea el caso, de acuerdo a lo expresado en las respectivas boletas de pago.
                        </p>
                    <li></li>
                    <p>El prestatario deberá afectar sus remuneraciones, autorizando el descuento por planilla hasta la cancelación total del
                        crédito otorgado por <strong>POSSIBLE. </strong>
                        </p>
                        <hr>
                    <li></li>
                    <p><strong>POSSIBLE,</strong> a su criterio, aprueba las solicitudes y realiza el desembolso  del crédito en la cuenta que el prestatario mantiene abierta a su nombre o abrirá en  <strong>POSSIBLE</strong>  para tal efecto.</p>
                </ol>

            <p><strong><u>DEL REEMBOLSO DEL CREDITO</u></strong></p>
            <p> <strong>CUARTA:</strong> </p>
            <ol type="a" class="cuerpo">
                <li></li>
                <p><strong>LA EMPRESA</strong> efectuará en forma oportuna el descuento mensual por planilla de las cuotas (capital, intereses, gastos e
                    Impuesto a las Transacciones Financieras) a cargo del prestatario hasta la total cancelación del crédito, abonando dichos montos mediante depósito, transferencia o cheque girado a nombre de <strong>POSSIBLE.</strong></p>
                <li></li>
                <p><strong> LA EMPRESA</strong> entregará a <strong>POSSIBLE</strong> los montos retenidos con tres (3) días de anterioridad al vencimiento de las cuotas de los créditos a cargo de los prestatarios.</p>
                <li></li>
                <p>Las fechas de vencimiento (vencimiento de la cuota, fecha de corte, fecha de envío de los descuentos, etc.)  y de intercambio de información para efectos de cumplir con el descuento se detallan en el Anexo 1.
                    <strong> LA EMPRESA</strong> podrá efectuar descuentos parciales por falta de liquidez en la planilla de su personal para ser aplicados a
                    pagos menores a las cuotas, sin perjuicio de aplicarse el interés moratorio generado por la parte impaga de la cuota.
                    </p>
                <li></li>
                <p>Al vencimiento natural o anticipado por cualquier causa del presente contrato, <strong>LA EMPRESA</strong> se compromete a continuar
                    realizando los descuentos por planilla al prestatario hasta la total cancelación de los créditos otorgados bajo el presente contrato.
                    </p>
                <li></li>
                <p>En caso que <strong>LA EMPRESA</strong> no efectúe los descuentos por planilla a sus trabajadores que tengan obligaciones con  <strong>POSSIBLE</strong> en mérito al presente contrato, se hará responsable del pago de las cuotas no descontadas, para lo cual autoriza a <strong>POSSIBLE</strong> a debitar o cargar dichos montos en cualquiera de las cuentas que mantiene en <strong>POSSIBLE,</strong> salvo que acredite la imposibilidad de efectuar el descuento por haberse ejecutado retenciones judiciales sobre las remuneraciones de sus trabajadores  prestatarios,  en cuyo caso solo deberá descontar y abonar a <strong>POSSIBLE</strong> el saldo no afecto a la retención judicial.</p>
                <li></li>
                <p>El horario de atención y procedimiento requerido para la evaluación, calificación selección, autorización, registro, control, reporte, reembolso y acciones de recuperación de los créditos son los establecidos por <strong>POSSIBLE</strong> en su normatividad interna, la misma que LA EMPRESA declara tener conocimiento.</p>
            </ol>
            <p><strong><u>DE LAS OBLIGACIONES DE LA EMPRESA.-</u></strong></p>
            <p><strong> QUINTA: LA EMPRESA </strong> está obligada a:</p>
            <ol type="a" class="cuerpo">
                <li></li>
                <p>Asumir la responsabilidad por la veracidad de la información y documentación relacionada con los ingresos del(los)
                    prestatario(s) remitida a <strong>POSSIBLE.</strong>
                    </p>
                <li></li>
                <p>Efectuar en forma oportuna los descuentos por planilla a los prestatarios, conforme a lo establecido en la Cláusula Cuarta precedente.</p>
                <hr>
                <li></li>
                <p>Los importes totales de las cuotas descontadas por planilla sobre las remuneraciones mensuales que, perciben los prestatarios deberán abonarse mediante depósito, transferencia o cheque girando a nombre de <strong>POSSIBLE</strong> para aplicar a los préstamos bajo el presente contrato, tres (3) días antes del vencimiento de las cuotas.</p>
                <li></li>
                <p>Respetar el orden de prelación de los créditos otorgados por <strong>POSSIBLE,</strong> bajo el marco del presente contrato, otorgándole
                    la primera preferencia de pago frente a cualquier otro acreedor y/o descuento autorizado posteriormente por los prestatarios, luego de los correspondientes de Ley.
                    </p>
                <li></li>
                <p><strong>LA EMPRESA</strong> se compromete a no gestionar créditos adicionales que afecten la planilla de su personal con descuentos adicionales.</p>
                <li></li>
                <p>Comunicar a <strong>POSSIBLE,</strong> dentro de los noventa (90) días de ocurrido, el deceso del prestatario.</p>
                <li></li>
                <p>Comunicar a <strong> POSSIBLE</strong> la renuncia o cese del prestatario dentro de las veinticuatro (24) horas siguientes de producida. Comunicar a <strong>POSSIBLE</strong> las licencias del prestatario subsidiadas por ESSALUD dentro de los treinta (30) días siguientes de producida.</p>
                <li></li>
                <p>Nombrar un coordinador calificado, el mismo que se responsabilizará por la ejecución del presente contrato. Dicho nombramiento deberá ser informado a <strong>POSSIBLE</strong> , con la debida anticipación, indicando los nombres y apellidos completos y cargo respectivos.</p>
             
            </ol>
            <p><strong><u>DE LAS OBLIGACIONES DE POSSIBLE.-</u></strong></p>
            <p><strong> SEXTA: POSSIBLE</strong> está obligado a:</p>
            <ol type="a" class="cuerpo">
                <li></li>
                <p>Abonar el monto de los créditos aprobados a los prestatarios a las 48 horas de su aprobación, salvo caso fortuito o de
                    fuerza mayor.
                    </p>
                <li></li>
                <p>Cumplir con enviar a <strong> LA EMPRESA</strong> los requerimientos de cobranza en la fecha señalada en el Anexo 1.</p>
                <li></li>
                <p>Nombrar un coordinador calificado, el mismo que se responsabilizará por la ejecución del presente contrato. Dicho nombramiento deberá ser informado a <strong> LA EMPRESA,</strong> con la debida anticipación, indicando los nombres y apellidos completos y cargo del Funcionario respectivo.</p>
            </ol>
            <p><strong><u>DE LA FUERZA MAYOR O CASO FORTUITO.-</u></strong></p>
            <p><strong> SETIMA:</strong> La prestación de los servicios del presente contrato podrá ser suspendida temporalmente, sin responsabilidad para
               <strong>POSSIBLE</strong> , en los siguientes casos:
                </p>
            <p> -     Huelga o paros. <br>
                -     Falta de fluido eléctrico. <br>
                -     Terremotos, incendios, inundaciones y otros similares. <br>
                -     Actos y consecuencias de vandalismo, terrorismo. <br>
                -     Caída de la red de teleproceso. <br>
                -     Otros eventos no previstos.
                </p>
            <p><strong><u>DE LAS MODIFICACIONES.-</u></strong></p>
            <p><strong> OCTAVA:</strong>  Las partes acuerdan que cualquier modificación que se efectúe al presente contrato, será realizada mediante
                adenda, la misma que formará parte integrante de este contrato.
                </p>
             
            <p><strong><u>DE LA RESOLUCIÓN.-</u></strong></p>
            <p><strong> NOVENA:</strong>  Las partes se reservan el derecho a resolver unilateralmente  el presente contrato sin expresión de causa y sin
                responsabilidad por los improbables daños y perjuicios resultantes, mediante aviso escrito a la contraparte con treinta (30) días de anticipación.  En dicho supuesto, subsistirá la obligación de <strong> LA EMPRESA </strong> de descontar  los  adeudos  que,  según  los registros de <strong>POSSIBLE</strong> , se encuentren pendientes de pago hasta su cancelación total, momento a partir del cual recién se produciría la resolución definitiva del presente contrato.
                </p>
            <p><strong><u>DEL DOMICILIO</u></strong></p>
            <p><strong> DECIMA:</strong> Para efectos de cualquier comunicación y/o notificación, las partes señalan como sus domicilios los indicados en la
                introducción del presente contrato. Todo cambio domiciliario deberá tener lugar dentro de la región de La Libertad y para surtir todos sus efectos deberá ser comunicado obligatoriamente por vía notarial a la otra parte dentro de los treinta (30) días de ocurrido el hecho bajo responsabilidad, según lo previsto por el Art. 40 del Código Civil. En caso contrario, se reputarán bien hechas las comunicaciones y/o notificaciones que se cursen a <strong> LA EMPRESA </strong> en el domicilio antes señalado.
                </p>
            <p><strong><u>DE LA JURISDICCIÓN Y COMPETENCIA.-</u></strong></p>
            <p><strong> DECIMA  PRIMERA:</strong>  En  caso  de  controversia  sobre  la  interpretación  o  ejecución  de  los  actos  referidos  en  el  presente documento, y los que se generen en virtud de él, las partes se someten en forma expresa a la jurisdicción y competencia de los
                jueces y  tribunales  del  Distrito  Judicial  de  El  Cercado  de  Lima,  renunciando  al  fuero  que,  por  sus  domicilios,  pudiera corresponderles.
                </p>
            <p><strong><u>DE LA LEGISLACIÓN APLICABLE.-</u></strong></p>
            <p><strong> DECIMO SEGUNDA:</strong>  En todo lo no previsto expresamente en el presente contrato, es de aplicación supletoria las normas pertinentes del Código Civil, Ley General del Sistema Financiero y del Sistema de Seguros y Orgánica de la Superintendencia
                de Banca y Seguros y demás normas aplicables.
                </p>
            <p>Estando las partes conformes con los términos y condiciones contenidas en el presente contrato y declarando que el mismo
                contiene su real y verdadera intención y voluntad al respecto, lo suscriben por duplicado, en la ciudad de …………………….., a los ...... del mes de …………………. de ........
                </p>
                <br>
              
                <table>
                    <tr>
                        <th width = "50%">POSIBLE</th>
                        <th width = "50%"> LA EMPRESA</th>
                    </tr>
                    <tr>
                        <td class="comparativo"></td>
                        <td class="comparativo"></td>
                    </tr>
                </table>

        <hr>
        <p class="titulopdf"><strong><u>ANEXO N°1  <br> HOJA RESUMEN</u></strong></p>
        <table>
          
	<tr>
		<th  width = "30%"> LA EMPRESA</th> 
        <td  width = "70%">LA EMPRESA es.........</td> 
       
	</tr>
    <tr>
         <th>MARCO DE REFERENCIA</th>
         <td><strong> POSSIBLE y LA EMPRESA</strong> han acordado canalizar selectivamente una oferta de créditos personales en beneficio del personal con contrato de trabajo a plazo indeterminado, con una antigüedad no menor de un (01) año de servicios; y, al personal con contrato de trabajo a plazo fijo con mínimo de un año de antigüedad; a través del cual se otorga préstamos personales sujetos a reembolsos mediante descuentos mensuales por planilla.</td>
  
    </tr>
    <tr>
        <th>TIPO DE CREDITOS</th>
        <td>Productos vigentes de POSSIBLE: Multiuso Possible y Adelanto de sueldo</td>

        </tr>
        <tr>
            <th>TASA DE INTERES</th>
            <td>Según tarifario vigente en MN de POSSIBLE</td>
                    </tr>
        <tr>
            <th>CUOTA/INGRESO</th>
            <td>La cuota de amortización máxima mensual proyectada para el prestatario, no debe ser mayor al cincuenta por ciento (50%) de sus ingresos netos mensuales por planilla.</td>
     
        </tr>
        <tr>
            <th>VENCIMIENTO DEL CONVENIO</th>
        <td>Fecha: …... de …………………..... de …....</td>    
        </tr>
        <tr>
            <th>PAGO DE CUOTAS</th>
        <td>Fecha de Vencimiento: Los días ........... de cada mes.</td>
        </tr>
        <tr>
            <th></th>
        <td></td>
        </tr>
        <tr>
            <th>PERIODO DE GRACIA</th>
        <td>Pago Primera Cuota a los ..... días mínimo, máximo ... días.</td>
        </tr>
        <tr>
            <th>GASTOS Y COMISIONES</th>
        <td>Según tarifario vigente en MN de POSSIBLE</td>
        </tr>
        <tr>
            <th>TRIBUTOS</th>
        <td>Impuesto a las Transacciones Financieras vigente a partir del 01 de Enero de cada año.</td>
        </tr>
        <tr>
            <th>INTERÉSES POR MOROSIDAD</th>
        <td>Según tarifario vigente en MN de POSSIBLE</td>
        </tr>
        <tr>
            <th>PLAZOS DEL PRÉSTAMO</th>
        <td>Según el producto: Multiuso de 3 a 24 meses y Adelanto de Sueldo 1 mes</td>
        </tr>
        <tr>
            <th>MONTOS A DESEMBOLSAR</th>
        <td>Según el producto Multiuso de 500 a 10,000 soles y Adelanto de Sueldo hasta 4,500</td>
        </tr>
        <tr>
            <th>CUOTAS ESPECIALES</th>
        <td>-  Dobles en Julio y Diciembre  (Opcional)</td>
        </tr>
        <tr>
            <th>INFORMACIÓN CORRESPONDIENTE A LA COBRANZA (Debe indicar LA EMPRESA)</th>
        <td>Fecha máxima de pago: El ....... día de cada mes.</td>
        </tr>
        <tr>
            <th>INFORMACIÓN CORRESPONDIENTE A LOS DESCUENTOS (Debe indicar POSSIBLE)</th>
        <td>Fecha máxima de entrega: Los días 27 de cada mes.</td>
        </tr>
        <tr>
            <th>REEMBOLSOS</th>
        <td>- Empresa realiza descuentos y envía montos retenidos mediante depósito en cuenta, transferencia o cheque girado a nombre de <strong>POSSIBLE</strong> , con tres (3) días de anterioridad al vencimiento de las cuotas a cargo de los prestatarios.</td>
        </tr>
        <tr>
            <th rowspan="2">PERSONAS DE COORDINACIÓN</th>
        <td><strong> EN LA EMPRESA:</strong>
            Cargo: <br>
            Nombre: ..........................  <br>
            Teléfono.: ......... <br>
            </td>
        </tr>
        <tr>
            
        <td><strong> EN POSIBLE:  </strong> <br>
            Cargo <br>
            Nombre: .......................... <br>
            Teléfono.: .........
            </td>
        </tr>
            
        </table>

        <br>
        <br>
    
        <p class="der">,……………………………., …..de …………..... de …....</p>
                
          <br>
          <br>
          <br>
          <table>
              <tr>
              <th width = "50%">POSIBLE</th>
              <th width = "50%">LA EMPRESA</th>
            </tr>
            <tr >
                <td class="comparativo" style="vertical-align:bottom;" > -------------------------------- <br>
                    (Firma y sello)<br>
                    Representante:<br>
                    DNI:<br>
                    </td>
                <td class="comparativo" style="vertical-align:bottom;" > -------------------------------- <br>
                    (Firma y sello)<br>
                    Representante:<br>
                    DNI:<br>
                    </td>
            </tr>
          </table>
</div>
</body>
</html>