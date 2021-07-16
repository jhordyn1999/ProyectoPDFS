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

                /** Extra personal styles **/
               /*  background-color: #03a9f4; */
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

                /** Extra personal styles **/
                /* background-color: #03a9f4; */
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


}
.tblfirma{
 
    margin-left: 0px;
  margin-right: 0px;

} 

     .firmas{
        font-size:10px;
        text-align: left;
        display: inline-block;
        vertical-align: top;
        
     }
     .acron{
         font-size:6px;
         text-align: left;
         display: inline;
     }
   
     
     .cuadro{
     
        vertical-align: top;
        text-align: center;
       
        height: 150px;
        width: 100vw; 
        border: 1px solid black;
            padding-left: 10px;
            padding-right: 10px;
     }
  
     hr{
        page-break-after: always;
		border: none;
		margin: 0;
		padding: 0;
     }
        .cuerpo{
            text-align: justify;
           /*  margin-left: 30px;
            margin-right: 30px; */
                
        }
    </style>
    <header>
        <img src="img/logo.png" alt="" width="100">
        <p class="cabder">Código Cliente:______________ </p>
         <p class="cabder">  Código Crédito:______________</p>
       {{-- <p class="cab"> prueba</p> --}}
    </header>
    <footer>
       <p> Pág. <span class="pagenum"></span> </p>
    </footer>
	{{-- <h1>Welcome to codingdriver.com - {{ $title }}</h1>
	<p>Today we learn Laravel AJAX CRUD Example Tutorial from Scratch. Here we demonstrate how you can create your ajax crud (operation) in laravel application with an example. The simple and easy way to explain ajax crud (create, read the update, delete) with laravel 5 framework without page refresh or reload. you can easily use with your laravel project and easy to customize</p>
    <button>GENERAR PDF</button> --}}
    <p class="titulopdf"><strong> <u>CONTRATO DE CRÉDITO CON CLAUSULA TESTIGO A RUEGO</u></strong></p>
    <div class="cuerpo">
        
   


       <p>Conste por el presente documento, el Contrato de Crédito que celebran de una parte,<strong> LA CORPORACION NACIONAL EMPRESARIAL 
        POSIBLE EIRL</strong> con RUC: 20605055801 con dirección en Jr. Miguel Grau N°552, distrito de Huamachuco, provincia de Sánchez Carrión, 
        departamento de La Libertad, en adelante POSSIBLE, y, de la otra parte, “EL CLIENTE”, cuyas generales de ley, aparecen en 
        la parte final de este contrato; en los términos y condiciones siguientes:</p>

    <p><strong> PRIMERA: OBJETO Y CONDICIONES DEL CONTRATO</strong></p>
    <p>Por medio de este Contrato, POSSIBLE aprueba y otorga a EL CLIENTE un crédito (en adelante, el “Crédito”), cuyo importe, modalidad, 
        interés compensatorio, interés moratorio o penalidad por pago tardío (según corresponda), comisiones, seguros y gastos se detallan 
        en la Hoja Resumen, la que forma parte integrante del presente contrato como Anexo 1, que EL CLIENTE declara haber recibido y 
        aceptado, así como el Cronograma de Pagos que contiene el número de cuotas de pago, el monto de las mismas y las fechas de pago.</p>
    
        <p><strong>SEGUNDA: DESEMBOLSO</strong></p>
        <p>El desembolso del Crédito podrá realizarse en cualquiera de las formas siguientes i) efectivo ii) cheque girado a la orden de EL CLIENTE 
            y/o la persona que este instruya iii) Abono en un cuenta que tenga EL CLIENTE en POSSIBLE iv) Abono en una cuenta que tenga EL CLIENTE 
            en otra entidad financiera y que éste instruya v) Abono en cuenta de ahorros especial, según se señala en la cláusula DÉCIMO SEXTA del 
            presente Contrato, que POSSIBLE apertura a favor de EL CLIENTE en la moneda que corresponda al crédito, en dicha cuenta de ahorros se 
            abonara el total desembolsado luego de descontado el impuesto a las Transacciones Financieras (en adelante, ITF)y sobre la cual POSSIBLE 
            podrá efectuar los abonos y/o cargos correspondientes al (los) crédito(s) que pueda mantener EL CLIENTE, sin más autorización 
            que la suscripción del presente contrato.
        </p>

            <p><strong>TERCERA: PLAZO Y FORMA DE PAGO</strong></p>
            <p>El pago del Crédito, incluyendo intereses compensatorios comisiones y gastos se efectuará en cuotas, en las fechas y por los importes 
                que se indica en el respectivo cronograma de pagos detallado en la Hoja de Resumen. Adicionalmente, queda establecido en la Hoja Resumen, 
                los intereses moratorios o penalidad por mora (según corresponda) y que será aplicable al crédito conforme a la cláusula cuarta del 
                presente contrato.
            </p>
            <p>El pago de las cuotas deberá ser efectuado por POSSIBLE en las Agencias de POSSIBLE o en sus cuentas de recaudación que están debidamente 
                indicadas en la Hoja Resumen Informativa, imputándose el pago en el siguiente orden: primero, a los gastos, segundo a las comisiones; 
                tercero, a los intereses moratorios o penalidad por mora (según corresponda); cuarto, a los intereses compensatorios; quinto al capital. 
                De acuerdo con lo señalado en el artículo 1257º del Código Civil, POSSIBLE podrá variar la imputación en la prelación de pago, enviando 
                una comunicación a EL CLIENTE a través de los medios directos establecidos en el literal a) de la cláusula quinta del presente contrato, 
                indicado esta variación. En caso que el cronograma de pagos establezca como fecha de pago un día feriado no laborable, el pago deberá 
                ser efectuado el primer día hábil siguiente Conforme al artículo 183° del Código Civil.
            </p>
            <p>Tratándose de créditos en moneda extranjera, los pagos se harán en la misma moneda extranjera, en caso de hacerse en moneda nacional, 
             POSSIBLE podrá realizar por cuenta y cargo de EL CLIENTE, las operaciones de compra y venta de moneda extranjera que sean necesarias 
            para el cumplimiento de sus obligaciones, aplicando el tipo de cambio que POSSIBLE tenga vigentes al momento de la operación. Asimismo, 
             los pagos del Crédito se realizarán sin deducción ni retención de naturaleza alguna por tributos o por cualquier otro concepto 
            salvo por el ITF. En los créditos vencidos, es decir cuando se haya dado por vencidas todas las cuotas, POSSIBLE a su sola decisión 
             podrá imputar los pagos, de la siguiente forma: 
                </p>


                <p>- De existir un solo crédito vencido el pago se podrá imputar hasta donde alcance en el siguiente orden: capital, gastos y 
                    comisiones pactadas, intereses moratorios o penalidad por mora pactados (según corresponda), e intereses compensatorios pactados.</p>
                <p>- De existir varios créditos vencidos POSSIBLE podrá imputar el pago hasta donde alcance, de la siguiente forma: en primer lugar, 
                    al capital de las obligaciones en el siguiente orden: a la obligación menos garantizada; de estar igualmente garantizadas, 
                    a la más onerosa, y, de ser igualmente onerosas y garantizadas, a la más antigua; en segundo lugar, a los gastos, comisiones, 
                    intereses moratorios o penalidad por mora pactados (según corresponda), e intereses compensatorios pactados de la obligación 
                    menos garantizada.</p>
                <p>- De acuerdo al pacto de imputación de pagos establecido en la presente cláusula no opera la presunción establecida en 
                    el artículo 1232 del Código Civil.</p>
                <p><strong>CUARTA: INTERESES COMPENSATORIOS, MORATORIOS O PENALIDAD POR MORA, COMISIONES Y GASTOS</strong></p>
                <p>El crédito devengará la tasa de interés compensatorio vigente en POSSIBLE para este tipo de operaciones, además de las comisiones, 
                    gastos y primas de seguro de desgravamen (siempre que dicha póliza de seguro haya sido directamente contratada por POSSIBLE, 
                    o así haya sido convenido por escrito con el cliente), los cuales se detallan en la Hoja Resumen del presente documento. 
                    Cabe señalar que, dichas comisiones se encuentran adecuadas a lo establecido por la Circular SBS N° CR 269-2013 
                    (Categorías y denominaciones de comisiones) y Resolución SBS Nº 3274-2017 (Reglamento de Gestión de Conducta de 
                    Mercado del Sistema Financiero).</p>
                <p>Para no incurrir en mayores costos, EL CLIENTE cuidará de pagar sus cuotas en la fecha de vencimiento, según su Cronograma de Pagos. 
                    El retraso en el pago de las cuotas genera mora automática, por lo que el CLIENTE pagará adicionalmente a los intereses 
                    compensatorios generados, los intereses moratorios o la penalidad por mora pactada por los días de atraso, aplicándose el 
                    orden de prelación establecido en la cláusula tercera del presente contrato.</p>

                    <p>La tasa de costo efectivo anual (TCEA) es la que permite comparar el costo total de un producto activo igualando el valor 
                        actual de todas las cuotas con el monto que efectivamente haya sido recibido en préstamo. Para este cálculo se incluirán 
                        las cuotas que involucran el capital, intereses, comisiones y gastos, que de acuerdo a lo pactado serán trasladados a EL CLIENTE, 
                        incluidos los seguros en los casos que se trate de créditos de consumo. No se incluirán en este cálculo aquellos pagos por servicios 
                        provistos por terceros que directamente sean pagados por EL CLIENTE, ni los tributos que resulten aplicables.</p>

                        <p><strong>QUINTA: FORMAS DE COMUNICACIÓN CON EL CLIENTE</strong></p>

                        <ol type="a" class="cuerpo">
                            <li></li>
                            <p> Por medios directos: Son comunicaciones dirigidas a EL CLIENTE que permiten dejar constancia de su envío mediante cualquiera 
                                de los medios físicos o mediante el uso de aparatos electrónicos que POSSIBLE tenga a su disposición, tales como cartas
                                 dirigidas al domicilio, correos electrónicos previamente informados por EL CLIENTE para esta cuenta y/o contrato, 
                                 anotaciones en los estados de cuenta, comunicaciones telefónicas, mensajes de texto (SMS), mensajería instantánea 
                                 como Whatsapp, Telegram u otros de similar naturaleza.</p>
                            <li></li>
                            <p>Por medios indirectos: Son publicaciones dirigidas al público en general en la página web y/o en diarios, 
                                avisos colocados en las agencias de atención al público, redes sociales, vouchers de pago o depósito u otros 
                                de difusión masiva.</p>
                        </ol>

                        <p><strong>SEXTA: MODIFICACIÓN DE INTERESES, COMISIONES, GASTOS Y OTRAS CONDICIONES DEL CONTRATO</strong></p>
                        <p>El CLIENTE reconoce que POSSIBLE podrá modificar las tasas de interés compensatorio, interés moratorio o penalidad por 
                            mora (según corresponda), pactados en el presente contrato por a) novación de la obligación considerando para tal 
                            efecto lo dispuesto en el Código Civil y b) cuando exista efectiva negociación al momento de contratar y en cada
                             oportunidad en la que se pretenda efectuar dichas modificaciones, para lo cual se indicará la fecha de entrada 
                             en vigencia mediante comunicación directa al domicilio de EL CLIENTE, correos electrónicos, estados de cuenta 
                             y comunicaciones telefónicas a EL CLIENTE, salvo dicha modificación se realice en negociación, donde se comunicará 
                             directamente a EL CLIENTE.</p>
                        <p>En el caso de modificaciones de las comisiones, gastos y otras condiciones del contrato, POSSIBLE podrá modificar 
                            unilateralmente y en cualquier momento los términos y/o condiciones del presente contrato, por causas asociadas a
                             cualquiera de las siguientes situaciones, siempre que éstas generen un impacto materialmente adverso: (i) cambios
                       en el régimen tributario; (ii) incremento o modificación del régimen de encajes; (iii) cambios en las leyes o normas
                         aplicables y/o en la política monetaria vigente y/o impacto de las disposiciones legales sobre costos u otros 
                         aspectos del contrato; (iv) cambios en las regulaciones bancarias que afecten el régimen legal vigente; (v) 
                         emisión de disposiciones del Banco Central de Reserva del Perú u otra entidad gubernamental; 
                         (vi) incremento de tasas de referencia del Banco Central de Reserva del Perú; (vii) condiciones
                        del mercado y/o cambios en la economía nacional o internacional y/o crisis financiera;
                        (viii) el funcionamiento o tendencias de los mercados; (ix) la competencia; (x)
                        la adopción de políticas de gobierno o de Estado; (xi) características, definición
                        o condiciones de los productos y servicios bancarios; (xii) inflación o deflación; 
                         (xiii) devaluación o revaluación de la moneda; (xiv) incremento del índice de morosidad; (xv) evaluación crediticia 
                        de EL CLIENTE o de su empleador, de ser el caso y/o variación en la capacidad de pago de EL CLIENTE y/o aplicación de políticas
                         de crédito y/o de riesgo y/o comerciales de POSSIBLE; (xvi) encarecimiento de los servicios prestados por terceros cuyos costos
                          son trasladados a EL CLIENTE o de los costos de prestación de los productos y servicios ofrecidos por POSSIBLE; 
                          (xvii) cambios en la calidad y/o comportamiento de pagos y/o crediticio de EL CLIENTE; (xviii) condiciones de riesgo
                           de EL CLIENTE; (xix); conmoción social o desastres naturales; (xx) terrorismo o guerra; (xxi) caso fortuito o fuerza
                            mayor; (xxii) mandato de autoridad competente.</p>
                        <p>Las modificaciones antes indicadas que se refieran a comisiones y gastos, a la resolución del contrato por causal distinta al
                         incumplimiento o distinta a los supuestos de resolución por normas prudenciales, a la limitación o exoneración de responsabilidad
                          por parte de las empresas, a la incorporación de servicios que no se encuentren directamente relacionados al producto o servicio 
                          financiero contratado; así como a aspectos o a información de carácter esencial materia del presente contrato, serán informadas 
                          a EL CLIENTE con una anticipación no menor de 45 (cuarenta y cinco) días a su entrada en vigencia, mediante cualquiera de los
                           medios de comunicación directos señalados en la cláusula quinta del presente contrato, salvo que la modificación resulte más
                            favorable a EL CLIENTE, en cuyo caso entrará en vigencia de manera inmediata, comunicándose a EL CLIENTE a través de la 
                            página web de POSSIBLE.</p>
                        <p>La modificación de otros aspectos contractuales distintos a tasas de interés, comisiones y gastos referidos en los párrafos
                             precedentes, serán comunicados a EL CLIENTE con una anticipación no menor de 45 (cuarenta y cinco) días a su entrada en 
                             vigencia, mediante cualquiera de los medios de comunicación directos señalados en la cláusula quinta del presente contrato. 
                             Si EL CLIENTE no está conforme con las modificaciones que se le informe, tendrá un plazo de hasta 45 (cuarenta y cinco) 
                             días calendario para comunicar por escrito su decisión de resolver el presente contrato, en cuyo caso tendrá 45 (cuarenta y cinco) 
                             días calendario contados desde la fecha de su comunicación, para cancelar sus obligaciones con POSSIBLE.</p>
                        <p>Si EL CLIENTE, luego de comunicadas las modificaciones a que se refiere la presente cláusula, y vencido el plazo otorgado, 
                            no cancela los pagos que sean de su cargo, significará la total aceptación de EL CLIENTE a las mismas y la aceptación de 
                            las nuevas condiciones señaladas.</p>
                        <p>Las modificaciones contractuales asociadas a la incorporación de servicios que no se encuentren directamente relacionados 
                            al producto o servicio contratado y que, por ende, no constituyan una condición para contratar, serán comunicadas previamente 
                            al cliente en el plazo y forma señalados en el tercer párrafo de la presente cláusula; otorgándole al cliente la facultad de
                             aceptar la modificación propuesta, sin que su negativa implique la resolución del presente contrato.</p>
                        <p>Cuando POSSIBLE otorgue a EL CLIENTE condiciones, opciones o derechos que constituyan facilidades adicionales a las existentes 
                            y que no impliquen la pérdida ni la sustitución de condiciones previamente establecidas, para efectos del presente contrato 
                            no serán considerados como modificaciones contractuales, y por lo tanto, no serán comunicados previamente a EL CLIENTE, pudiendo 
                            éstos aplicarse de manera inmediata, siendo comunicados por POSSIBLE a través de su página web.</p>
                        <p><strong>SÉPTIMA: PAGOS ANTICIPADOS Y/O ADELANTO DE CUOTAS</strong></p>
                        <p>EL CLIENTE tiene derecho a efectuar pagos anticipados de las cuotas o saldos en forma total o parcial, con la consiguiente 
                            reducción de intereses, comisiones y gastos al día de pago, así como también adelanto de cuotas con arreglo a las siguientes 
                            condiciones:</p>
                        <p>A la fecha en que se solicite el pago anticipado o el adelanto de cuotas, EL CLIENTE no deberá adeudar suma alguna por concepto
                             de cuotas vencidas.</p>
                        
                        <ol type="1" class="cuerpo">
                            <li></li>
                            <p>Pago Anticipado: es el pago que trae como consecuencia la aplicación del monto al capital del crédito, con la consiguiente 
                                reducción de los intereses, las comisiones y los gastos derivados de las cláusulas contractuales al día de pago. Los pagos
                                 mayores a dos cuotas (que incluye aquella exigible en el periodo) se consideran pagos anticipados.</p>
                            <p>Los pagos anticipados podrán ser realizados por EL CLIENTE en cualquier momento y cuantas veces lo estime conveniente sin 
                                penalidad alguna.</p>
                            <p>EL CLIENTE, al momento de realizar el pago, podrá elegir si desea proceder a la reducción del monto de las cuotas restantes, 
                                pero manteniendo el plazo original, o elegir la reducción del número de cuotas con la consecuente disminución del plazo del crédito,
                                 deberá dejar constancia de su elección en el formato que POSSIBLE ponga a su disposición.</p>
                            <p>En caso EL CLIENTE no manifieste su voluntad con la constancia de elección, dentro de los quince (15) días de realizado
                                 el pago, POSSIBLE queda autorizada a reducir el número de cuotas con la consecuente disminución del plazo del crédito.</p>
                            <p>En caso de pago anticipado, POSSIBLE procederá a entregar el Cronograma de Pago, en un plazo no mayor a siete (7) días 
                                de efectuada dicha solicitud. En virtud de lo expuesto, EL CLIENTE podrá acercarse a cualquier Agencia a recoger el 
                                Cronograma de Pagos por única vez luego de realizado el pago anticipado, o estará a disposición en todo momento en 
                                los medios digitales conforme a la cláusula DÉCIMA OCTAVA.</p>
                            
                            <li></li>
                            <p>Adelanto de Cuotas: es el pago que trae como consecuencia la aplicación del monto pagado a las cuotas inmediatas posteriores a
                                 la exigible en el periodo, sin que se produzca una reducción de los intereses, las comisiones y los gastos. Los pagos menores 
                                 o iguales al equivalente de dos cuotas (que incluyen aquella exigible en el periodo), se consideran adelanto de cuotas.</p>
                            <p>Sin perjuicio de lo expuesto, EL CLIENTE, al momento de efectuar el pago anticipado, podrá manifestar su voluntad expresa de adelantar 
                                el pago de cuotas, dejando evidencia de dicha decisión, procediendo POSSIBLE a aplicar el monto pagado en exceso sobre la cuota del 
                                periodo a las cuotas inmediatas siguientes no vencidas.</p>
                            <p>Asimismo, EL CLIENTE podrá requerir antes o al momento de efectuarse el adelanto de cuotas aplicar el pago como pago anticipado, 
                                exigiendo POSSIBLE que EL CLIENTE deje constancia de dicha elección.</p>
                            <p>EL CLIENTE podrá efectuar los pagos señalados en la presente cláusula en cualquiera de las oficinas de atención al público de POSSIBLE; 
                                sin que ello implique pago alguno por concepto de penalidad, gasto o comisión y sin establecer condiciones o limitaciones para 
                                el ejercicio del derecho. </p>
                        </ol>
                        <p><strong>OCTAVA: OBLIGACIONES DEL CLIENTE</strong></p>
                        <p>EL CLIENTE, en general y sin que la enumeración tenga carácter limitativo, se obliga a lo siguiente:</p>

                        <ol type="a" class="cuerpo">
                            <li></li>
                            <p>A cumplir con todas las obligaciones contenidas en las normas legales vigentes, así como los requerimientos de las autoridades gubernamentales, incluyendo, pero no limitándose con respecto de las licencias, certificados, permisos, franquicias y otras autorizaciones necesarias para la conducción del negocio. </p>
                            <li></li>
                            <p>A no cambiar el giro ordinario de su negocio, a no realizar o financiar actividades ilegales, como por ejemplo aquellas cuya realización traiga como consecuencia cualquier tipo de daño al medio ambiente o a la normatividad laboral y social.</p>
                            <li></li>
                            <p>A que los fondos obtenidos de POSSIBLE serán utilizados exclusivamente para el fin que han sido solicitados a POSSIBLE, según lo señalado en la solicitud de crédito, debidamente firmada por EL CLIENTE.</p>
                            <li></li>
                            <p>EL CLIENTE se compromete a informar a POSSIBLE, en un plazo no mayor de cinco (5) días hábiles, de cualquier hecho o circunstancia que pudiera dar origen a un deterioro sustancial en sus ingresos, utilidades, capacidad de pago y/o situación patrimonial o también cualquier incremento relevante en sus gastos. Asimismo, se compromete a informar de cualquier hecho susceptible de disminuir el valor de sus activos o que comprometan su dominio sobre los mismos.</p>
                            <li></li>
                            <p>EL CLIENTE deberá de informar si se le ha iniciado o está por iniciarse un proceso de insolvencia de acreedores o un procedimiento concursal o de reestructuración de pasivos conforme al marco legal vigente.</p>
                            <li></li>
                            <p>EL CLIENTE se obliga a entregar información actualizada cada vez que sea requerida por POSSIBLE, solicitada mediante cualquiera de los medios de comunicación, la misma que comprende estados financieros, flujos de caja, y cualquier otra información contable, económica y financiera que POSSIBLE considere relevante de EL CLIENTE.</p>
                            <li></li>
                            <p>EL CLIENTE autoriza a POSSIBLE para que, sin necesidad de previo aviso, pueda proceder respecto a cualesquiera de sus cuentas, depósitos o valores a extornar mediante un simple asiento, las transacciones que por error u otro motivo se hubieran registrado en la cuenta de EL CLIENTE, si estas no perjudican la posición del cliente no se requerirá notificación previa o de instrucciones o aceptación expresa oportuna de EL CLIENTE, informando. POSSIBLE con posterioridad y dentro de un plazo razonable las medidas aplicadas, con detalle de las operaciones realizadas y las razones que motivaron su adopción. En caso que el extorno perjudique la posición de EL CLIENTE, POSSIBLE deberá informar de forma previa a EL CLIENTE de forma directa mediante una carta o correo electrónico en la dirección registrada por EL CLIENTE.</p>
                            <li></li>
                            <p>POSSIBLE no asume responsabilidad algún si por caso fortuito o de fuerza mayor, no pudiera cumplir con cualquiera de las obligaciones y/o con las instrucciones de EL CLIENTE, que tenga relación con los servicios de materia del presente contrato. En tales casos POSSIBLE tratará de dar cumplimiento a la instrucción tan pronto desaparezca la causa que impidiera su atención oportuna.</p>
                        </ol>
                        <p><strong>NOVENA: RESOLUCIÓN DE CONTRATO Y VENCIMIENTO ANTICIPADO DE PLAZOS</strong></p>
                        <p>Las partes acuerdan que POSSIBLE podrá considerar vencidos todos los plazos y obligaciones del Crédito sin necesidad de trámite previo y exigir el pago inmediato de las mismas y/o resolver el contrato y exigir el pago total del crédito insoluto, previa deducción de las cuotas pagadas en caso de incumplimiento de las causales señaladas a continuación y de acuerdo a lo establecido en los artículos 1428 y 1430 del Código Civil, comunicándolo mediante comunicación escrita al domicilio señalado por EL CLIENTE en su solicitud de crédito.</p>
                        <ol type="a" class="cuerpo">
                            <li></li>
                            <p>Si EL CLIENTE incumpliera con el pago de una (1) o más cuotas establecidas en el cronograma, sean consecutivas o no.</p>
                            <li></li>
                            <p>Si EL CLIENTE incumple con cualquiera de las obligaciones señaladas en la cláusula octava.</p>
                            <li></li>
                            <p>Si POSSIBLE comprueba que cualquier información, documentación o dato proporcionado por EL CLIENTE y/o AVAL para sustentar u obtener el Crédito o cualquier otro crédito u operación realizada ante POSSIBLE, fueran falsos o tratándose de documentos, estos hubieran sido adulterados o alterados en alguna forma.</p>
                            <li></li>
                            <p>Si EL CLIENTE no cumple con proporcionar la información requerida o no cumple con actualizar su información crediticia y financiera de acuerdo en la cláusula octava.</p>
                            <li></li>
                            <p>Si EL CLIENTE solicita su declaración de insolvencia, es sujeto de una solicitud de insolvencia por los acreedores, incurre en protesto de títulos valores, deviene en insolvente, suspende sus pagos o es declarado en quiebra.</p>
                            <li></li>
                            <p>Si EL CLIENTE cambiara de domicilio y no cumpliera con informar a POSSIBLE el lugar en donde pueda ser ubicado, de conformidad con lo establecido en la cláusula décimo novena.</p>
                            <li></li>
                            <p>Si EL CLIENTE enajenase o gravase más del 25% de sus activos, cambiase de objeto social o realizase actos o contratos que pudieran, a criterio de POSSIBLE, influir negativamente en su solvencia económica.</p>
                            <li></li>
                            <p>En caso EL CLIENTE se somete voluntariamente o es sometido por sus acreedores a cualquier procedimiento concursal.</p>
                            <li></li>
                            <p>En General si EL CLIENTE y/o AVAL incumpliese cualquiera de las obligaciones a su cargo establecidas en este
                                Contrato.
                                </p>

                        </ol>

                        <p>La liquidación que se realice incluyendo intereses compensatorios, intereses moratorios o penalidad por mora (según corresponda), comisiones, gastos y otros rubros aplicables, conforme a las disposiciones legales vigentes tendrá merito ejecutivo.</p>
                        <p>POSSIBLE podrá resolver este Contrato unilateralmente, mediante aviso cursado al domicilio de EL CLIENTE con una anticipación no menor a cinco (05) días hábiles a la fecha de resolución efectiva, conforme al artículo 40º del Reglamento de Conducta  de  Mercado del Sistema  Financiero  (Resolución  SBS  Nº  3274-2017),  señalando  en  la  mencionada comunicación las razones que motivan la resolución.</p>
                        <p>EL CLIENTE, por su parte, podrá poner término a este Contrato acercándose a las oficinas de POSSIBLE cuando así lo decida debiendo en dicho acto, cancelar el íntegro del préstamo pendiente de pago según la liquidación que realice POSSIBLE, más los intereses compensatorios, moratorios o penalidad por pago de obligaciones en fecha posterior a su vencimiento (según corresponda), comisiones, otras penalidades y gastos generados. El presente contrato se mantendrá vigente hasta la cancelación total de dicho saldo deudor.</p>
                        
                        <p><strong>DÉCIMA: FACULTAD DE COMPENSACIÓN Y RETENCIÓN</strong></p>
                        <p>En el caso de existir obligaciones vencidas y exigibles, EL CLIENTE faculta irrevocablemente a POSSIBLE, a realizar en su nombre y representación todas las operaciones y transacciones que resulten necesarias para:</p>
                        <ol type="a" class="cuerpo">
                            <li></li>
                            <p>Centralizar en una única cuenta el saldo que tenga o pudiera tener en las otras cuentas, conforme a lo dispuesto en el numeral 11 del artículo 132 de la Ley 26702, Ley General del Sistema Financiero, del Sistema de Seguros y Orgánica de la Superintendencia de Banca y Seguros. Esta autorización comprende la facultad de compensar los saldos deudores que pudiera tener EL CLIENTE por cualquier concepto o naturaleza con los depósitos en general, saldos acreedores en cualquier cuenta, certificados, títulos, valores y cualquier otro bien que POSSIBLE tiene o pudiera tener en su poder a nombre de EL CLIENTE bajo cualquier título. Asimismo, EL CLIENTE autoriza a POSSIBLE a realizar cuando sea necesario, la correspondiente operación de cambio de monedas al tipo de cambio que POSSIBLE tenga establecido al momento de realizar la operación.</p>
                            <li></li>
                            <p>Retener o aplicar a la amortización y/o pago de lo adeudado toda suma, valor, título, certificado, cobranza de facturas u otros documentos o cualquier otro bien, que por cualquier razón y bajo cualquier título tengan en su poder y esté destinada a ser entregada o acreditada a EL CLIENTE. En caso la amortización y/o cancelación de lo adeudado se realice con cargo a una cuenta de depósito a plazo fijo, EL CLIENTE autoriza irrevocablemente a POSSIBLE a abrir un nuevo depósito a su nombre por el monto que quede luego de realizado el cargo y por el mismo faltante, aplicándole la tasa de interés compensatorio efectiva anual que corresponda conforme a la Cartilla de Información y Tarifario de POSSIBLE el día de la apertura. POSSIBLE no asume ninguna responsabilidad en caso decidiera no hacer uso de la facultad que por la presente cláusula se le concede.</p>
                            <li></li>
                            <p>Asimismo, POSSIBLE podrá cargar cualquier obligación directa o indirecta que se le impute, sea por capital, intereses compensatorios, intereses moratorios o penalidad por mora (según corresponda), comisiones, tributos y gastos. Asimismo, podrá retener, aplicando a los adeudos, cualquier suma o valor que tenga en su poder o reciba a favor de EL CLIENTE por cualquier concepto y en cualesquiera de sus oficinas o filiales en el país. También, podrá abonar o cargar en las mismas, con las sumas que resulten de más o de menos por errores o transposición y/o que resulten necesarios para regularizar las mismas.</p>


                        </ol>
                            <p>Estas operaciones y transacciones serán comunicadas por escrito o por correo electrónico en la dirección que señalara como domicilio EL CLIENTE en su solicitud de crédito, dentro de los 7 días de realizada la acción.</p>
                        <p>El Derecho de Compensación indicado en los párrafos anteriores de la presente cláusula, será ejercido por POSSIBLE entre sus acreencias y los activos de EL CLIENTE que mantenga en su poder, hasta por el monto de aquellas, devolviendo a la masa de EL CLIENTE el exceso resultante, si hubiere. Asimismo, en tales supuestos no serán objeto de compensación los activos legal o contractualmente declarados intangibles o excluidos de este derecho.</p>

                            <p><strong>DÉCIMA PRIMERA: ENTREGA DE TÍTULOS VALORES</strong></p>
                            <p>Las partes acuerdan que la emisión y/o entrega de títulos valores a favor de POSSIBLE, o su renovación o prórroga, no producirá novación de ninguna de las obligaciones asumidas por EL CLIENTE, salvo que expresamente se acuerde lo contrario. Asimismo, al amparo del artículo 1233° del Código Civil, las partes convienen y pactan que la emisión y/o entrega de títulos valores a favor de POSSIBLE en ningún caso determina la extinción de las obligaciones primitivas, aun cuando dichos títulos se hubiesen perjudicado por cualquier causa.</p>

                            <p><strong>DÉCIMA SEGUNDA: EMISIÓN DE PAGARÉ INCOMPLETO</strong></p>
                            <p>Al amparo de lo dispuesto por la Ley N° 27287 (Ley de Títulos Valores) y la Circular SBS N° G-0090-2001 (Título Valor emitido en forma incompleta), las partes acuerdan que, en representación del Crédito, EL CLIENTE emite y suscribe un pagaré incompleto a la orden de POSSIBLE, el cual será completado cuando opere la resolución del contrato y vencimiento anticipado de plazos conforme a la cláusula novena del presente contrato, en las siguientes condiciones:</p>

                            <ol type="a" class="cuerpo">
                                <li></li>
                                <p>La fecha de emisión será a criterio de POSSIBLE, la fecha en que se efectuó el desembolso o aquella en la cual POSSIBLE proceda a hacer uso de las facultades otorgadas en el presente contrato.</p>
                                <li></li>
                                <p>La fecha de vencimiento será en la fecha que POSSIBLE da por vencidos todos los plazos en caso de incumplimiento en el pago oportuno de una o más cuotas.</p>
                                <li></li>
                                <p>El importe del pagaré será el que resulte de la liquidación que POSSIBLE practique y que incluirá el saldo total adeudado hasta la fecha de dicha liquidación, comprendiéndose, capital, intereses compensatorios, intereses moratorios o penalidad por mora (según corresponda), comisiones, seguros (de corresponder) y gastos a las tasas establecidas por POSSIBLE.</p>
                                <li></li>
                                <p>EL CLIENTE declara conocer y aceptar las tasas de los intereses compensatorios, intereses moratorios o penalidad por mora (según corresponda), y las comisiones y gastos vigentes para las operaciones materia de este Contrato, reservándose POSSIBLE el derecho de modificarlas, de acuerdo al procedimiento descrito en la cláusula sexta y décima tercera de este Contrato. Para el pago de intereses moratorios o penalidad por mora (según corresponda), no será necesaria la constitución en mora, siendo esta automática.</p>
                                <li></li>
                                <p>El pagaré será emitido con la cláusula Sin Protesto. Sin perjuicio de lo cual, el tenedor podrá protestarlo asumiendo este los gastos de dicha diligencia. EL CLIENTE acepta que, desde la fecha de vencimiento del pagaré hasta su pago efectivo, el monto consignado en dicho título valor devengará intereses compensatorios y moratorios o penalidad por mora (según corresponda), con las tasas establecidas en el pagaré.</p>
                                <li></li>
                                <p>En caso que las partes acuerden el refinanciamiento del crédito otorgado mediante el presente contrato y conforme a la cláusula cuarta del presente contrato, el pagaré deberá ser llenado conforme a las nuevas condiciones pactadas en el contrato de refinanciamiento respectivo, por tratarse de la misma obligación garantizada.</p>
                                <li></li>
                                <p>Una vez cancelado el crédito el cliente deberá presentar una carta solicitando la devolución del pagaré, comprometiéndose POSSIBLE a dicha devolución en los 15 días siguientes de recibida la comunicación. Si transcurridos 6 meses el cliente no solicita la devolución del pagare mediante la comunicación indicada, las partes acuerdan que POSSIBLE procederá a la destrucción del título valor, conforme a lo establecido en el artículo 17.2 de la Ley de Títulos Valores.</p>

                            </ol>
                            <p>EL CLIENTE declara haber recibido una copia del pagaré incompleto que ha emitido y suscrito, EL CLIENTE y EL AVAL declaran haber sido instruidos de manera clara, explícita y comprensible sobre los alcances y finalidad del pagaré emitido en forma incompleta e informados por POSSIBLE de los mecanismos legales que lo protegen, y autorizan a POSSIBLE a poder transferir el pagaré sin reserva ni limitación alguna.</p>
                            <p><strong>DÉCIMA TERCERA: REFINANCIACIÓN Y REPROGRAMACIONES</strong></p>
                            <p>Sujeto al cumplimiento de las condiciones que POSSIBLE señale, podrá refinanciarse o reprogramarse el crédito no pagado oportunamente por EL CLIENTE, en cuyo caso, tales refinanciamientos y/o reprogramaciones acordadas y previamente aprobadas por POSSIBLE, seguirán rigiéndose con las mismas garantías que se constituyen en su respaldo en este contrato, obligándose a participar necesariamente EL CLIENTE, y para el caso de refinanciamiento se deberá suscribir el Contrato de refinanciamiento conforme al artículo 1361 y siguientes del Código Civil, el nuevo pagaré y la Hoja Resumen que se genere, siendo que estos documentos serán oponibles únicamente a los obligados que participen y suscriban dicho refinanciamiento.</p>
                            <p>POSSIBLE podrá aprobar el refinanciamiento si EL CLIENTE cumple con lo establecido en las políticas internas de POSSIBLE y pudiendo incluso exigir la constitución de garantía o de mayores garantías a las ya constituidas previo al refinanciamiento del crédito.</p>
                            
                        <p>En este sentido las partes acuerdan que si decidieran reprogramar o refinanciar el crédito materia del presente contrato, las estipulaciones que contiene el presente documento seguirán vigentes en todo aquello que no se modifique expresamente, en el contrato de refinanciamiento que se firmara, entregando POSSIBLE a EL CLIENTE el nuevo Cronograma de Pagos ajustado a las condiciones del refinanciamiento. </p>
                          <p>EL CLIENTE será debidamente informado de las consecuencias de calificación crediticia de un refinanciamiento o reprogramación por su asesor de negocios. Sin perjuicio de ello, EL CLIENTE podrá tener acceso a dicha información en la página web de POSSIBLE.</p>      
                    
                          <p><strong>DÉCIMA CUARTA: NORMAS PRUDENCIALES</strong></p>
                          <p>Si EL CLIENTE incurre en alguno de los supuestos establecidos por las normas prudenciales emitidas por la Superintendencia de Banca, Seguros y AFP a las que se refiere el artículo 41°del Reglamento de Conducta de Mercado del Sistema Financiero (Resolución SBS Nº 3274-2017).,tales como las referidas al riesgo de sobreendeudamiento de deudores minoristas, o por consideraciones del perfil del cliente vinculadas al sistema de prevención de lavado de activos o del financiamiento del terrorismo o por falta de transparencia, entendiéndose como falta de transparencia de EL CLIENTE cuando al evaluar la información señalada o presentada en la solicitud del crédito o durante la relación contractual con POSSIBLE, se demuestre que esta es inexacta, incompleta, falsa o inconsistente con la presentada por EL CLIENTE y ello pueda repercutir en el riesgo reputacional o legal de POSSIBLE, esta podrá resolver o modificar el presente contrato por las causales indicadas, en aspectos distintos a las tasas de interés, comisiones o gastos, remitiendo una comunicación a EL CLIENTE, dentro de los siete (7) días calendarios posteriores a dicha modificación o resolución. Asimismo, en aplicación de las normas prudenciales mencionadas, POSSIBLE podrá decidir no contratar con EL CLIENTE.</p>
                            <p><strong>DÉCIMA QUINTA: CESIÓN DE DERECHOS</strong></p>
                                <p>EL CLIENTE reconoce y acepta que POSSIBLE podrá ceder sus derechos derivados del presente contrato, ya sea mediante una cesión de derechos o mediante la constitución de patrimonio autónomo para efectos de su titularización o mecanismos similares, o venta de cartera, o emisión de instrumentos o bonos hipotecarios y/o cualquier otra forma permitida por la ley, a lo que EL CLIENTE presta desde ahora y por el presente documento su consentimiento expreso e irrevocable a dichas cesiones y transferencia, incluyendo las correspondientes garantías que pudiere haber constituido a favor de POSSIBLE en respaldo de sus obligaciones, siendo para ello suficiente que POSSIBLE le comunique la identidad del nuevo acreedor o titular de los derechos y garantías cedidas. Conforme a lo establecido en el artículo 1206° y siguientes del Código Civil.</p>
                            <p><strong>DÉCIMA SEXTA: CUENTA DE DEPÓSITO DE AHORRO</strong></p>
                            <p>EL CLIENTE autoriza irrevocablemente a POSSIBLE, a abrir a nombre de EL CLIENTE una cuenta de depósitos de ahorro sin costo, en la cual POSSIBLE podrá registrar los desembolsos del crédito y sus renovaciones de ser el caso, así como los importes de todas las obligaciones de EL CLIENTE con POSSIBLE bajo el presente contrato, incluidos los intereses, gastos, impuestos entre otros.</p>
                            <p>EL CLIENTE declara que el contrato de Cuentas de Depósito de Ahorro señalado en el párrafo anterior de la presente cláusula, así como la Cartilla Informativa correspondiente a éste, le fueron entregados para su lectura, que se absolvieron sus consultas y que firma con conocimiento pleno de las condiciones establecidas en los referidos documentos. Tratándose de una contratación por medios no presenciales o no escritos, se aplicará dispuesto en la cláusula décima octava del presente contrato.</p>
                            <p>Asimismo, las características del producto y su tarifario podrá encontrarlos en la página web de POSSIBLE.</p>
    
                            <p><strong>DÉCIMA SÉPTIMA: SEGURO DE DESGRAVAMEN</strong></p>
                            <p>En los casos en que las condiciones para el otorgamiento del crédito se requiera la contratación de un seguro de desgravamen, POSSIBLE informará previamente a EL CLIENTE que tienen derecho de elegir entre: a) la contratación del seguro ofrecido por POSSIBLE, en cuyo caso POSSIBLE será responsable de la renovación de del mismo, o b) un seguro contratado directamente por EL CLIENTE o a través de la designación de un corredor de seguros, siempre que cumpla con las condiciones requeridas de POSSIBLE, en este caso no estará obligado a contratar el seguro ofrecido por POSSIBLE endosándolo a su favor hasta por el monto del saldo adeudado, pudiendo acordar con POSSIBLE que el pago de la prima del seguro se adicione al pago de las cuotas periódicas previamente pactadas por el crédito o sea debitado de un producto pasivo a nombre de EL CLIENTE existente en POSSIBLE, este endoso y forma de pago podrá ser tramitado directamente por EL CLIENTE o por POSSIBLE, según acuerdo de partes.</p>
                            <p>En caso EL CLIENTE autorice a POSSIBLE a contratar un Seguro de Desgravamen, se designará como beneficiario a POSSIBLE, cuyas condiciones y cobertura serán las que consten en la Póliza de Seguro correspondiente que obra en poder de POSSIBLE, haciendo entrega a EL CLIENTE del Certificado de Seguro correspondiente, autorizando a cargar los gastos de la prima al monto del préstamo, lo que de ser el caso constara en la Hoja de Resumen de EL CLIENTE. Asimismo, suscribirá una declaración jurada de salud, que es veraz, completa y exacta, señalando que cumple con las condiciones de la póliza y los requisitos exigidos por ella, por lo que el Crédito quedará en su caso, cubierto por el Seguro de Desgravamen. Esta declaración la formula conociendo que, en caso contrario, así como en aquellos otros casos que no se cumplan las condiciones y requisitos de las condiciones de la póliza, se perderá el derecho a la indemnización que deba pagar la aseguradora por el Crédito, con los efectos consiguientes para EL CLIENTE y/o sus herederos, quienes asumirán el pago de lo adeudado a POSSIBLE hasta el límite de su patrimonio o de la masa hereditaria, según fuera el caso, conforme a Ley.</p>
                            <p>Queda establecido entre las partes que si por cualquier causa, el seguro contratado por POSSIBLE fuera variado o incluso suprimido, POSSIBLE lo comunicará a EL CLIENTE mediante aviso escrito enviado al domicilio señalado por EL CLIENTE, con una anticipación no menor de cuarenta y cinco (45) días calendario a su entrada en vigencia, a fin que éste tome debida nota de tales cambios y/o supresiones y de todas sus implicancias y consecuencias. Además, si las variaciones consistieran en nuevos requerimientos a ser cumplidos o presentados por EL CLIENTE, o nuevos riesgos excluidos u otros, EL CLIENTE se obliga a cumplirlos.</p>
                            <p>POSSIBLE podrá cambiar de Compañía de Seguros, para lo cual POSSIBLE deberá remitir a EL CLIENTE previamente las condiciones y coberturas que constan en la Póliza de Seguros respectiva correspondiente a la nueva Compañía de Seguros, con una anticipación de cuarenta y cinco (45) días calendario antes de proceder al cambio. En caso EL CLIENTE no se encontrará conforme con las nuevas condiciones, éste deberá acreditar, dentro del plazo señalado, haber contratado por su cuenta una póliza de seguro que brinde cobertura y plazo similar o mayor al ofrecido por POSSIBLE, ésta podrá aceptar que dicha póliza de seguro sea endosada a su favor. EL CLIENTE se obliga a mantenerla vigente y a renovarla en su oportunidad, caso contrario, POSSIBLE queda facultada, por cuenta de EL CLIENTE, a renovar y/o mantener vigente la respectiva póliza de seguro. EL CLIENTE autoriza a POSSIBLE a incluir el costo total de la misma en las cuotas del Crédito. En cuyo caso, EL CLIENTE se obliga a cumplir con los nuevos requerimientos exigidos por la nueva Compañía de Seguros.</p>
                            <hr>
                            <p><strong>DÉCIMA OCTAVA: CONTRATACIÓN POR MEDIOS NO PRESENCIALES O POR MEDIOS NO ESCRITOS</strong></p>
                            <p>De existir una contratación por medios no presenciales o por medios no escritos, EL CLIENTE acepta como válidas las transacciones y contratación de productos y/o servicios a través de los canales virtuales o medios electrónicos que POSSIBLE comunique y ponga a su disposición, tales como (i) mediante la plataforma de la página web de POSSIBLE  y/o su aplicación móvil, con el uso por parte de EL CLIENTE de sus claves de acceso y/o contraseñas, (ii) mensajes de correo electrónico a y/o desde la dirección de correo electrónico que EL CLIENTE tenga registrado en POSSIBLE, y otros medios que POSSIBLE ponga a su disposición.</p>
                            <p>POSSIBLE dispondrá de los mecanismos y medidas de seguridad en los medios utilizados para la contratación no presencial o por medios no escritos, según el canal que se utilice y cumplirá con la normativa vigente sobre contratación virtual. En este sentido, POSSIBLE en un plazo no mayor a 15 días calendarios remitirá a EL CLIENTE el Contrato, así como cualquier otra información que corresponda en conformidad a la normativa vigente. Dicha entrega puede realizarse en el domicilio de EL CLIENTE o a través de medios electrónicos, siempre que permitan su lectura, impresión, conversión y reproducción sin cambios.</p>
    
                            <p><strong>DÉCIMA NOVENA: DOMICILIO Y JURISDICCIÓN</strong></p>
                            <p>Las partes señalan como sus domicilios para los efectos de este Contrato los que figuran en este documento, donde se les harán llegar las notificaciones judiciales y extrajudiciales que hubiera lugar. Sin perjuicio de ello, POSSIBLE podrá emplear cualquiera de los demás medios previstos en la Ley para comunicarse con EL CLIENTE. Asimismo, POSSIBLE podrá ser notificada en sus oficinas de la ciudad donde se suscriba el presente contrato.</p>
                            <p>EL CLIENTE se obliga a no variar este domicilio durante la vigencia del Contrato. No obstante, en el caso de variación de su domicilio se obligan a comunicarlo por escrito o al correo oficial_conducta_mercado@corporacionposible.com, indicando sus datos y el nuevo domicilio, en un plazo máximo de 30 días de producida la variación. Se precisa que para que surta efecto esta notificación electrónica requiere la comunicación expresa de la POSSIBLE indicando haber tomado conocimiento y en su defecto no exista comunicación de POSSIBLE que confirme lo antes mencionado, EL CLIENTE deberá realizar dicha comunicación por escrito, siendo oponible a POSSIBLE con el solo hecho de tener el sello de recibido en el documento. Para que dicha variación sea válida y oponible a POSSIBLE, se deberá adjuntar a la variación copia de un recibo de servicios públicos del mes anterior a la fecha de la solicitud, el nuevo domicilio debe ser cierto y estar ubicado en el radio urbano de esta ciudad; de lo contrario las notificaciones y comunicación dirigidas al antiguo domicilio serán plenamente válidas y eficaces. POSSIBLE se reserva el derecho de realizar las verificaciones respectivas a fin de determinar la existencia y veracidad de la variación del domicilio.</p>
                            <p>POSSIBLE efectuará la cobranza respetando estrictamente los límites y prohibiciones establecidos en los artículos 61 y 62 del Código de Protección y Defensa del Consumidor, y de las normas que lo modifiquen o sustituyan.
                            </p>
                            <p>Las partes se someten expresamente a la jurisdicción de los jueces del distrito judicial del lugar de suscripción del contrato.</p>
                            <hr>
                            <p><strong>VIGÉSIMA: CARÁCTER DE DECLARACIÓN JURADA DE LA INFORMACIÓN Y DOCUMENTACIÓN PROPORCIONADA POR LOS PRESTATARIOS, VALIDEZ DEL CONTRATO</strong></p>
                            <p>LOS PRESTATARIOS, FIADORES SOLIDARIOS y/o AVAL(ES) declaran tener conocimiento de que toda información y/o documentación que sea proporcionada a POSSIBLE por El CLIENTE tendrá carácter de declaración jurada conforme a lo dispuesto en el Art. 179 de la Ley General del Sistema Financiero, Ley Nº 26702 y se someten a sus prescripciones todo aquello no previsto expresamente en este contrato. Por lo tanto, de resultar falsa cualquier información proporcionada se encontrarán sujetos a las responsabilidades penales del caso y en caso producto de esta información se genere el desembolso de dinero en perjuicio de terceros o de POSSIBLE, esta última se encontrará facultada a requerir el reembolso inmediato, así como los intereses, comisiones, gastos y las penalidades que se hayan establecido y generado, procediéndose en caso contrario a la ejecución judicial por la vía de Obligación de Dar suma de Dinero en su contra.</p>
                            <p>La nulidad o invalidez, total o parcial, de una o más disposiciones contenidas en este contrato no afectarán la validez de las demás disposiciones contenidas en el mismo, debiéndose considerar como inexistentes únicamente las cláusulas declaradas nulas o invalidas, total o parcialmente.</p>
                            <p> ________________________,________ de _____________________________de 20__. </p> <br>
                            {{-- <p></p> <br>
                            <p></p> <br>
                            <p></p> <br>
                            <p></p> <br> --}}
<hr>

<div class="newfirm">
    <table >
        <tr>
            <td {{-- style="width: 70% !important;" --}}>
               Firma y Sello
            </td>
           
        </tr>
    </table>
    <p><strong>POSSIBLE</strong></p>
    
</div>
    <div class="newfirm">
        <table >
            <tr>
                <td {{-- style="width: 70% !important;" --}}>
                   Firma y Sello
                </td>
                
            </tr>
        </table>
        <p><strong>POSSIBLE</strong></p>  
    </div> <br>
    <br>




    <div class="newfirm">
        <table >
            <tr>
                <td style="width: 70% !important;">
                    <p class="acron">(PJ)</p><p class="acron">(PN)</p>  Firma y   <p class="acron">(PJ)</p>Sello
                </td>
                <td style="width: 30% !important;">
            Huella
                </td>
            </tr>
        </table>
    </div>
        <div class="newfirm">
            <table >
                <tr>
                    <td style="width: 70% !important;">
                        <p class="acron">(PJ)</p><p class="acron">(PN)</p>  Firma y   <p class="acron">(PJ)</p>Sello
                    </td>
                    <td style="width: 30% !important;">
                Huella
                    </td>
                </tr>
            </table>
         
        </div> <br>
<div class="firmas"> 

<div >
<p > EL CLIENTE <br>	
    <p class="acron">(PJ)</p>	RAZÓN SOCIAL/ <p class="acron">(PN)</p>NOMBRES Y APELLIDOS: <br>
    __________________________________________________ <br>
    <p class="acron">(PJ)</p>	RUC/ <p class="acron">(PN)</p>DOI(*)___________ N°______________________ <br>
    <p class="acron">(PJ)</p>	APODERADO 01:_________________________________ <br>
    <p class="acron">(PJ)</p>	DOI(*)___________ N°_____________________________ <br>
    <p class="acron">(PJ)</p><p class="acron">(PN)</p>DOMICILIO: ____________________________________ <br> 

    <p class="acron">(PJ)</p>Partida de Poderes N°:______________________________ <br>
    <p class="acron">(PJ)</p>Oficina Registral:___________________________________ <br>
    <p class="acron">(PN)</p>Estado Civil:______________________________________ <br>
</p>

</div>
</div>
<div class="firmas">

<div >
<p > EL CLIENTE / CODEUDOR <br>	
    <p class="acron">(PJ)</p>	RAZÓN SOCIAL/ <p class="acron">(PN)</p>NOMBRES Y APELLIDOS: <br>
    __________________________________________________ <br>
    <p class="acron">(PJ)</p>	RUC/ <p class="acron">(PN)</p>DOI(*)___________ N°______________________ <br>
    <p class="acron">(PJ)</p>	APODERADO 02:_________________________________ <br>
    <p class="acron">(PJ)</p>	DOI(*)___________ N°_____________________________ <br>
    <p class="acron">(PJ)</p><p class="acron">(PN)</p>DOMICILIO: ____________________________________ <br> 
    <p class="acron">(PN)</p>Estado Civil:______________________________________ <br>
</p>

</div>
</div> 
<br>
<br>
<br>

<p class="acron">(PJ) – Rellenar todos estos campos para Personas Jurídicas <br>
    (PN) – Rellenar todos estos campos para Personas Naturales</p>
<br>
<p class="acron">(*)DOI: Rellenar con DNI (Documento Nacional de Identidad), CE (Carné de Extranjería) o P (Pasaporte)</p>
    <p>La persona que firma en calidad de cónyuge o conviviente del Cliente interviene en el presente Contrato para: (i) en el caso del cónyuge, prestar su conformidad a los términos y condiciones del presente documento y las obligaciones que asume frente a POSSIBLE; y, (ii) en el caso del conviviente, declarar que a la fecha mantiene una unión de hecho con el Cliente de acuerdo a lo señalado en el artículo 326° del Código Civil; y, para prestar su conformidad a los términos y condiciones del presente documento y las obligaciones que asume frente a POSSIBLE.</p>
<hr>
    <p class="titulopdf"><strong>  CLÁUSULA ADICIONAL </strong></p>
    <p class="titulopdf"><strong>  FIANZA </strong></p>
    <p>Interviene(n) en éste Contrato el(los) Fiador(es) que suscribe(n) este documento constituyéndose (solidariamente entre
        sí) en fiador(es) solidario(s) de EL CLIENTE, sin beneficio de excusión, comprometiéndose a pagar las obligaciones asumidas por EL CLIENTE a favor de POSSIBLE; incluyendo los intereses compensatorios, moratorios o penalidad por mora (según corresponda), comisiones, impuestos y gastos de toda clase que se deriven de este Contrato, sin reserva ni limitación alguna, dejando expresa constancia que su garantía es de plazo indeterminado, además de solidaria, es indivisible e ilimitada.
        </p>

        <P>El(los) Fiador(es) se obliga(n) al pago, en forma indistinta y solidaria frente a POSSIBLE, del pagaré mencionado en la cláusula décimo segunda de este Contrato.</P>

        <p>Conforme lo dispuesto por el artículo 1877° del Código Civil, EL CLIENTE deberá reemplazar al Fiador u ofrecer otra garantía a satisfacción de POSSIBLE, en caso el Fiador devengue en insolvente.</p>
        <p>POSSIBLE remitirá al domicilio del(los) Fiador(es) señalado en el presente Contrato, las notificaciones judiciales y extrajudiciales a que hubiera lugar.</p>
        <p>El(los) Fiador(es) renuncia(n) a hacer uso de la facultad otorgada por los artículos 1898º y1899° del Código Civil. El(los) Fiador(es) autoriza(n) en este documento desde ahora y en forma irrevocable a POSSIBLE para que, si así lo decidiera, debite el importe parcial o total de las obligaciones vencidas y exigibles que se deriven del presente Contrato en cualquier cuenta que tenga(n) o pudiera(n) tener en POSSIBLE, en caso dichos importes no sean pagados por EL CLIENTE. No serán objeto de compensación los activos legal o contractualmente declarados intangibles, o que se encuentren excluidos de dicho derecho.</p>
        <p>El(los) Fiador(es) se obliga a intervenir como tal en las prórrogas o refinanciaciones que POSSIBLE pudiera otorgar a EL CLIENTE, dejando expresa constancia que conoce que el pagaré aceptado a favor de POSSIBLE garantiza cualquier reprogramación, modificación y/o refinanciamientos hasta la total cancelación de las obligaciones derivadas del crédito materia del presente contrato, o que se deriven de ellas, sin reserva ni limitación alguna, hayan intervenido o no en las mencionadas reprogramaciones, modificaciones y/o refinanciaciones.</p>
        <p>Sin perjuicio de lo anterior, El(los) Fiador(es) se obliga a suscribir como avalista el pagaré a que se refiere la cláusula décima segunda del presente documento, pagaré que garantizará la obligación de crédito pactada en el presente contrato sus modificaciones o refinanciamientos conforme a lo señalado en la misma cláusula. El(los) Fiador(es) igualmente se obliga, a solicitud de POSSIBLE a constituir nuevas garantías en su favor o mejorar las ya otorgadas, que respalden en forma suficiente el íntegro de las obligaciones de EL CLIENTE derivadas del presente contrato, en el caso que su patrimonio disminuya de manera tal que no resulte suficiente para garantizar las obligaciones asumidas en el presente contrato.</p>
            <hr>



            <div class="newfirm">
                <table >
                    <tr>
                        <td {{-- style="width: 70% !important;" --}}>
                           Firma y Sello
                        </td>
                       
                    </tr>
                </table>
                <p><strong>POSSIBLE</strong></p>
                
            </div>
                <div class="newfirm">
                    <table >
                        <tr>
                            <td {{-- style="width: 70% !important;" --}}>
                               Firma y Sello
                            </td>
                            
                        </tr>
                    </table>
                    <p><strong>POSSIBLE</strong></p>  
                </div> <br>
                <br>


            <div class="firmas"> 
               {{--  <div class="cuadro">
                    <p class="txtcuadro">Firma y sello</p>

                </div> --}}
                <div {{-- class="firmas" --}}>
                    <p > EL CLIENTE <br>	
                        <p class="acron">(PJ)</p>	RAZÓN SOCIAL/ <p class="acron">(PN)</p>NOMBRES Y APELLIDOS: <br>
                        __________________________________________________ <br>
                        <p class="acron">(PJ)</p>	RUC/ <p class="acron">(PN)</p>DOI(*)___________ N°______________________ <br>
                        <p class="acron">(PJ)</p>	APODERADO 01:_________________________________ <br>
                        <p class="acron">(PJ)</p>	DOI(*)___________ N°_____________________________ <br>
                        <p class="acron">(PJ)</p><p class="acron">(PN)</p>DOMICILIO: ____________________________________ <br> 

                        <p class="acron">(PJ)</p>Partida de Poderes N°:______________________________ <br>
                        <p class="acron">(PJ)</p>Oficina Registral:__________________________________ <br>
                        <p class="acron">(PN)</p>Estado Civil:_____________________________________ <br>
                    </p>

                </div>
            </div>
            <div class="firmas"> 
                {{-- <div class="cuadro">
                    <p class="txtcuadro">Firma y sello</p>
                </div >  
                <br>--}}



                <div class="firmas" >
                    <p > EL CLIENTE / CODEUDOR <br>	
                        <p class="acron">(PJ)</p>	RAZÓN SOCIAL/ <p class="acron">(PN)</p>NOMBRES Y APELLIDOS: <br>
                        __________________________________________________ <br>
                        <p class="acron">(PJ)</p>	RUC/ <p class="acron">(PN)</p>DOI(*)___________ N°______________________ <br>
                        <p class="acron">(PJ)</p>	APODERADO 02:_________________________________ <br>
                        <p class="acron">(PJ)</p>	DOI(*)___________ N°_____________________________ <br>
                        <p class="acron">(PJ)</p><p class="acron">(PN)</p>DOMICILIO: ___________________________________ <br> 
                        <p class="acron">(PN)</p>Estado Civil:______________________________________ <br>
                    </p>

                </div>
            </div> <br> <br>
            <p class="acron">(PJ) – Rellenar todos estos campos para Personas Jurídicas <br>
                (PN) – Rellenar todos estos campos para Personas Naturales</p> <br>
           
            <p class="acron">(*)DOI: Rellenar con DNI (Documento Nacional de Identidad), CE (Carné de Extranjería) o P (Pasaporte)</p>
             
                    <br>
                    <br>
                    <br>
                    <div class="newfirm">
                        <table class="tblfirma">
                            <tr>
                                <td style="width: 70% !important;">
                                    <p class="acron">(PJ)</p><p class="acron">(PN)</p>  Firma y   <p class="acron">(PJ)</p>Sello
                                </td>
                                <td style="width: 30% !important;">
                               Huella
                                </td>
                            </tr>
                        </table>
                        {{-- <div class="cuadro">
                            <p class="txtcuadro">Firma y sello</p>

                        </div> --}}
                    </div>
                    <div class="newfirm">
                        <table class="tblfirma">
                            <tr>
                                <td style="width: 70% !important;">
                                    <p class="acron">(PJ)</p><p class="acron">(PN)</p>  Firma y   <p class="acron">(PJ)</p>Sello
                                </td>
                                <td style="width: 30% !important;">
                               Huella
                                </td>
                            </tr>
                        </table>
                   {{--  <div class="cuadro">
                            <p class="txtcuadro">Firma y sello</p>
                        </div>   --}}
                    </div> <br>

            <div class="firmas"> 
         
                <div >
                    <p > EL FIADOR <br>	
                        <p class="acron">(PJ)</p>	RAZÓN SOCIAL/ <p class="acron">(PN)</p>NOMBRES Y APELLIDOS: <br>
                        __________________________________________________ <br>
                        <p class="acron">(PJ)</p>	RUC/ <p class="acron">(PN)</p>DOI(*)___________ N°______________________ <br>
                        <p class="acron">(PJ)</p>	APODERADO 01:_________________________________ <br>
                        <p class="acron">(PJ)</p>	DOI(*)___________ N°_____________________________ <br>
                        <p class="acron">(PJ)</p><p class="acron">(PN)</p>DOMICILIO: ____________________________________ <br> 

                        <p class="acron">(PJ)</p>Partida de Poderes N°:______________________________ <br>
                        <p class="acron">(PJ)</p>Oficina Registral:__________________________________ <br>
                        <p class="acron">(PN)</p>Estado Civil:_____________________________________ <br>
                    </p>

                </div>
            </div>
         

                <div class="firmas" >
                    <p > EL FIADOR / CODEUDOR <br>	
                        <p class="acron">(PJ)</p>	RAZÓN SOCIAL/ <p class="acron">(PN)</p>NOMBRES Y APELLIDOS: <br>
                        __________________________________________________ <br>
                        <p class="acron">(PJ)</p>	RUC/ <p class="acron">(PN)</p>DOI(*)___________ N°______________________ <br>
                        <p class="acron">(PJ)</p>	APODERADO 02:_________________________________ <br>
                        <p class="acron">(PJ)</p>	DOI(*)___________ N°_____________________________ <br>
                        <p class="acron">(PJ)</p><p class="acron">(PN)</p>DOMICILIO: ____________________________________ <br> 
                        <p class="acron">(PN)</p>Estado Civil:_____________________________________ <br>
                    </p>

                </div>
                      <br>
                <p class="acron">(PJ) – Rellenar todos estos campos para Personas Jurídicas <br>
                    (PN) – Rellenar todos estos campos para Personas Naturales</p>
               
                <p class="acron">(*)DOI: Rellenar con DNI (Documento Nacional de Identidad), CE (Carné de Extranjería) o P (Pasaporte)</p>
                 <P>La persona que firma en calidad de cónyuge o conviviente del Fiador interviene en el presente Contrato para: (i) en el caso del cónyuge, prestar su conformidad a los términos y condiciones del presente documento y las obligaciones que asume frente a POSSIBLE; y, (ii) en el caso del conviviente, declarar que a la fecha mantiene una unión de hecho con el Fiador de acuerdo a lo señalado en el artículo 326° del Código Civil; y, para prestar su conformidad a los términos y condiciones del presente documento y las obligaciones que asume frente a POSSIBLE. </P>
               
               
               
                                             <hr>
                                             <p><strong>CLÁUSULA ADICIONAL</strong></p>
                                            <p>Se constituye en testigo a ruego el (la) Sr(a): _____________________________________________ <br>
                                            identificado(a) con: __________________ N° ____________________ con domicilio en: <br>
                                        ____________________________________________________________________________ <br>
                                        a  solicitud  del / la Sr(a) ________________________ identificado(a)  con ___________  N° ____________, quien  es 
                                        iletrado(a) declarando que participa en conocimiento del contenido del presente contrato.
                                        
                                        </p>
                                        <br>
                                        <div class="newfirm">
                                            <table >
                                                <tr>
                                                    <td {{-- style="width: 70% !important;" --}}>
                                                       Firma y Sello
                                                    </td>
                                                    
                                                </tr>
                                            </table>
                                            <p><strong>POSSIBLE</strong></p>  
                                        </div>
                                       
    
                        </div>
</body>
</html>