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
        <p class="cabder">C??digo Cliente:______________ </p>
         <p class="cabder">  C??digo Cr??dito:______________</p>
       {{-- <p class="cab"> prueba</p> --}}
    </header>
    <footer>
       <p> P??g. <span class="pagenum"></span> </p>
    </footer>
	{{-- <h1>Welcome to codingdriver.com - {{ $title }}</h1>
	<p>Today we learn Laravel AJAX CRUD Example Tutorial from Scratch. Here we demonstrate how you can create your ajax crud (operation) in laravel application with an example. The simple and easy way to explain ajax crud (create, read the update, delete) with laravel 5 framework without page refresh or reload. you can easily use with your laravel project and easy to customize</p>
    <button>GENERAR PDF</button> --}}
    <p class="titulopdf"><strong> <u>CONTRATO DE CR??DITO CON CLAUSULA TESTIGO A RUEGO</u></strong></p>
    <div class="cuerpo">
        
   


       <p>Conste por el presente documento, el Contrato de Cr??dito que celebran de una parte,<strong> LA CORPORACION NACIONAL EMPRESARIAL 
        POSIBLE EIRL</strong> con RUC: 20605055801 con direcci??n en Jr. Miguel Grau N??552, distrito de Huamachuco, provincia de S??nchez Carri??n, 
        departamento de La Libertad, en adelante POSSIBLE, y, de la otra parte, ???EL CLIENTE???, cuyas generales de ley, aparecen en 
        la parte final de este contrato; en los t??rminos y condiciones siguientes:</p>

    <p><strong> PRIMERA: OBJETO Y CONDICIONES DEL CONTRATO</strong></p>
    <p>Por medio de este Contrato, POSSIBLE aprueba y otorga a EL CLIENTE un cr??dito (en adelante, el ???Cr??dito???), cuyo importe, modalidad, 
        inter??s compensatorio, inter??s moratorio o penalidad por pago tard??o (seg??n corresponda), comisiones, seguros y gastos se detallan 
        en la Hoja Resumen, la que forma parte integrante del presente contrato como Anexo 1, que EL CLIENTE declara haber recibido y 
        aceptado, as?? como el Cronograma de Pagos que contiene el n??mero de cuotas de pago, el monto de las mismas y las fechas de pago.</p>
    
        <p><strong>SEGUNDA: DESEMBOLSO</strong></p>
        <p>El desembolso del Cr??dito podr?? realizarse en cualquiera de las formas siguientes i) efectivo ii) cheque girado a la orden de EL CLIENTE 
            y/o la persona que este instruya iii) Abono en un cuenta que tenga EL CLIENTE en POSSIBLE iv) Abono en una cuenta que tenga EL CLIENTE 
            en otra entidad financiera y que ??ste instruya v) Abono en cuenta de ahorros especial, seg??n se se??ala en la cl??usula D??CIMO SEXTA del 
            presente Contrato, que POSSIBLE apertura a favor de EL CLIENTE en la moneda que corresponda al cr??dito, en dicha cuenta de ahorros se 
            abonara el total desembolsado luego de descontado el impuesto a las Transacciones Financieras (en adelante, ITF)y sobre la cual POSSIBLE 
            podr?? efectuar los abonos y/o cargos correspondientes al (los) cr??dito(s) que pueda mantener EL CLIENTE, sin m??s autorizaci??n 
            que la suscripci??n del presente contrato.
        </p>

            <p><strong>TERCERA: PLAZO Y FORMA DE PAGO</strong></p>
            <p>El pago del Cr??dito, incluyendo intereses compensatorios comisiones y gastos se efectuar?? en cuotas, en las fechas y por los importes 
                que se indica en el respectivo cronograma de pagos detallado en la Hoja de Resumen. Adicionalmente, queda establecido en la Hoja Resumen, 
                los intereses moratorios o penalidad por mora (seg??n corresponda) y que ser?? aplicable al cr??dito conforme a la cl??usula cuarta del 
                presente contrato.
            </p>
            <p>El pago de las cuotas deber?? ser efectuado por POSSIBLE en las Agencias de POSSIBLE o en sus cuentas de recaudaci??n que est??n debidamente 
                indicadas en la Hoja Resumen Informativa, imput??ndose el pago en el siguiente orden: primero, a los gastos, segundo a las comisiones; 
                tercero, a los intereses moratorios o penalidad por mora (seg??n corresponda); cuarto, a los intereses compensatorios; quinto al capital. 
                De acuerdo con lo se??alado en el art??culo 1257?? del C??digo Civil, POSSIBLE podr?? variar la imputaci??n en la prelaci??n de pago, enviando 
                una comunicaci??n a EL CLIENTE a trav??s de los medios directos establecidos en el literal a) de la cl??usula quinta del presente contrato, 
                indicado esta variaci??n. En caso que el cronograma de pagos establezca como fecha de pago un d??a feriado no laborable, el pago deber?? 
                ser efectuado el primer d??a h??bil siguiente Conforme al art??culo 183?? del C??digo Civil.
            </p>
            <p>Trat??ndose de cr??ditos en moneda extranjera, los pagos se har??n en la misma moneda extranjera, en caso de hacerse en moneda nacional, 
             POSSIBLE podr?? realizar por cuenta y cargo de EL CLIENTE, las operaciones de compra y venta de moneda extranjera que sean necesarias 
            para el cumplimiento de sus obligaciones, aplicando el tipo de cambio que POSSIBLE tenga vigentes al momento de la operaci??n. Asimismo, 
             los pagos del Cr??dito se realizar??n sin deducci??n ni retenci??n de naturaleza alguna por tributos o por cualquier otro concepto 
            salvo por el ITF. En los cr??ditos vencidos, es decir cuando se haya dado por vencidas todas las cuotas, POSSIBLE a su sola decisi??n 
             podr?? imputar los pagos, de la siguiente forma: 
                </p>


                <p>- De existir un solo cr??dito vencido el pago se podr?? imputar hasta donde alcance en el siguiente orden: capital, gastos y 
                    comisiones pactadas, intereses moratorios o penalidad por mora pactados (seg??n corresponda), e intereses compensatorios pactados.</p>
                <p>- De existir varios cr??ditos vencidos POSSIBLE podr?? imputar el pago hasta donde alcance, de la siguiente forma: en primer lugar, 
                    al capital de las obligaciones en el siguiente orden: a la obligaci??n menos garantizada; de estar igualmente garantizadas, 
                    a la m??s onerosa, y, de ser igualmente onerosas y garantizadas, a la m??s antigua; en segundo lugar, a los gastos, comisiones, 
                    intereses moratorios o penalidad por mora pactados (seg??n corresponda), e intereses compensatorios pactados de la obligaci??n 
                    menos garantizada.</p>
                <p>- De acuerdo al pacto de imputaci??n de pagos establecido en la presente cl??usula no opera la presunci??n establecida en 
                    el art??culo 1232 del C??digo Civil.</p>
                <p><strong>CUARTA: INTERESES COMPENSATORIOS, MORATORIOS O PENALIDAD POR MORA, COMISIONES Y GASTOS</strong></p>
                <p>El cr??dito devengar?? la tasa de inter??s compensatorio vigente en POSSIBLE para este tipo de operaciones, adem??s de las comisiones, 
                    gastos y primas de seguro de desgravamen (siempre que dicha p??liza de seguro haya sido directamente contratada por POSSIBLE, 
                    o as?? haya sido convenido por escrito con el cliente), los cuales se detallan en la Hoja Resumen del presente documento. 
                    Cabe se??alar que, dichas comisiones se encuentran adecuadas a lo establecido por la Circular SBS N?? CR 269-2013 
                    (Categor??as y denominaciones de comisiones) y Resoluci??n SBS N?? 3274-2017 (Reglamento de Gesti??n de Conducta de 
                    Mercado del Sistema Financiero).</p>
                <p>Para no incurrir en mayores costos, EL CLIENTE cuidar?? de pagar sus cuotas en la fecha de vencimiento, seg??n su Cronograma de Pagos. 
                    El retraso en el pago de las cuotas genera mora autom??tica, por lo que el CLIENTE pagar?? adicionalmente a los intereses 
                    compensatorios generados, los intereses moratorios o la penalidad por mora pactada por los d??as de atraso, aplic??ndose el 
                    orden de prelaci??n establecido en la cl??usula tercera del presente contrato.</p>

                    <p>La tasa de costo efectivo anual (TCEA) es la que permite comparar el costo total de un producto activo igualando el valor 
                        actual de todas las cuotas con el monto que efectivamente haya sido recibido en pr??stamo. Para este c??lculo se incluir??n 
                        las cuotas que involucran el capital, intereses, comisiones y gastos, que de acuerdo a lo pactado ser??n trasladados a EL CLIENTE, 
                        incluidos los seguros en los casos que se trate de cr??ditos de consumo. No se incluir??n en este c??lculo aquellos pagos por servicios 
                        provistos por terceros que directamente sean pagados por EL CLIENTE, ni los tributos que resulten aplicables.</p>

                        <p><strong>QUINTA: FORMAS DE COMUNICACI??N CON EL CLIENTE</strong></p>

                        <ol type="a" class="cuerpo">
                            <li></li>
                            <p> Por medios directos: Son comunicaciones dirigidas a EL CLIENTE que permiten dejar constancia de su env??o mediante cualquiera 
                                de los medios f??sicos o mediante el uso de aparatos electr??nicos que POSSIBLE tenga a su disposici??n, tales como cartas
                                 dirigidas al domicilio, correos electr??nicos previamente informados por EL CLIENTE para esta cuenta y/o contrato, 
                                 anotaciones en los estados de cuenta, comunicaciones telef??nicas, mensajes de texto (SMS), mensajer??a instant??nea 
                                 como Whatsapp, Telegram u otros de similar naturaleza.</p>
                            <li></li>
                            <p>Por medios indirectos: Son publicaciones dirigidas al p??blico en general en la p??gina web y/o en diarios, 
                                avisos colocados en las agencias de atenci??n al p??blico, redes sociales, vouchers de pago o dep??sito u otros 
                                de difusi??n masiva.</p>
                        </ol>

                        <p><strong>SEXTA: MODIFICACI??N DE INTERESES, COMISIONES, GASTOS Y OTRAS CONDICIONES DEL CONTRATO</strong></p>
                        <p>El CLIENTE reconoce que POSSIBLE podr?? modificar las tasas de inter??s compensatorio, inter??s moratorio o penalidad por 
                            mora (seg??n corresponda), pactados en el presente contrato por a) novaci??n de la obligaci??n considerando para tal 
                            efecto lo dispuesto en el C??digo Civil y b) cuando exista efectiva negociaci??n al momento de contratar y en cada
                             oportunidad en la que se pretenda efectuar dichas modificaciones, para lo cual se indicar?? la fecha de entrada 
                             en vigencia mediante comunicaci??n directa al domicilio de EL CLIENTE, correos electr??nicos, estados de cuenta 
                             y comunicaciones telef??nicas a EL CLIENTE, salvo dicha modificaci??n se realice en negociaci??n, donde se comunicar?? 
                             directamente a EL CLIENTE.</p>
                        <p>En el caso de modificaciones de las comisiones, gastos y otras condiciones del contrato, POSSIBLE podr?? modificar 
                            unilateralmente y en cualquier momento los t??rminos y/o condiciones del presente contrato, por causas asociadas a
                             cualquiera de las siguientes situaciones, siempre que ??stas generen un impacto materialmente adverso: (i) cambios
                       en el r??gimen tributario; (ii) incremento o modificaci??n del r??gimen de encajes; (iii) cambios en las leyes o normas
                         aplicables y/o en la pol??tica monetaria vigente y/o impacto de las disposiciones legales sobre costos u otros 
                         aspectos del contrato; (iv) cambios en las regulaciones bancarias que afecten el r??gimen legal vigente; (v) 
                         emisi??n de disposiciones del Banco Central de Reserva del Per?? u otra entidad gubernamental; 
                         (vi) incremento de tasas de referencia del Banco Central de Reserva del Per??; (vii) condiciones
                        del mercado y/o cambios en la econom??a nacional o internacional y/o crisis financiera;
                        (viii) el funcionamiento o tendencias de los mercados; (ix) la competencia; (x)
                        la adopci??n de pol??ticas de gobierno o de Estado; (xi) caracter??sticas, definici??n
                        o condiciones de los productos y servicios bancarios; (xii) inflaci??n o deflaci??n; 
                         (xiii) devaluaci??n o revaluaci??n de la moneda; (xiv) incremento del ??ndice de morosidad; (xv) evaluaci??n crediticia 
                        de EL CLIENTE o de su empleador, de ser el caso y/o variaci??n en la capacidad de pago de EL CLIENTE y/o aplicaci??n de pol??ticas
                         de cr??dito y/o de riesgo y/o comerciales de POSSIBLE; (xvi) encarecimiento de los servicios prestados por terceros cuyos costos
                          son trasladados a EL CLIENTE o de los costos de prestaci??n de los productos y servicios ofrecidos por POSSIBLE; 
                          (xvii) cambios en la calidad y/o comportamiento de pagos y/o crediticio de EL CLIENTE; (xviii) condiciones de riesgo
                           de EL CLIENTE; (xix); conmoci??n social o desastres naturales; (xx) terrorismo o guerra; (xxi) caso fortuito o fuerza
                            mayor; (xxii) mandato de autoridad competente.</p>
                        <p>Las modificaciones antes indicadas que se refieran a comisiones y gastos, a la resoluci??n del contrato por causal distinta al
                         incumplimiento o distinta a los supuestos de resoluci??n por normas prudenciales, a la limitaci??n o exoneraci??n de responsabilidad
                          por parte de las empresas, a la incorporaci??n de servicios que no se encuentren directamente relacionados al producto o servicio 
                          financiero contratado; as?? como a aspectos o a informaci??n de car??cter esencial materia del presente contrato, ser??n informadas 
                          a EL CLIENTE con una anticipaci??n no menor de 45 (cuarenta y cinco) d??as a su entrada en vigencia, mediante cualquiera de los
                           medios de comunicaci??n directos se??alados en la cl??usula quinta del presente contrato, salvo que la modificaci??n resulte m??s
                            favorable a EL CLIENTE, en cuyo caso entrar?? en vigencia de manera inmediata, comunic??ndose a EL CLIENTE a trav??s de la 
                            p??gina web de POSSIBLE.</p>
                        <p>La modificaci??n de otros aspectos contractuales distintos a tasas de inter??s, comisiones y gastos referidos en los p??rrafos
                             precedentes, ser??n comunicados a EL CLIENTE con una anticipaci??n no menor de 45 (cuarenta y cinco) d??as a su entrada en 
                             vigencia, mediante cualquiera de los medios de comunicaci??n directos se??alados en la cl??usula quinta del presente contrato. 
                             Si EL CLIENTE no est?? conforme con las modificaciones que se le informe, tendr?? un plazo de hasta 45 (cuarenta y cinco) 
                             d??as calendario para comunicar por escrito su decisi??n de resolver el presente contrato, en cuyo caso tendr?? 45 (cuarenta y cinco) 
                             d??as calendario contados desde la fecha de su comunicaci??n, para cancelar sus obligaciones con POSSIBLE.</p>
                        <p>Si EL CLIENTE, luego de comunicadas las modificaciones a que se refiere la presente cl??usula, y vencido el plazo otorgado, 
                            no cancela los pagos que sean de su cargo, significar?? la total aceptaci??n de EL CLIENTE a las mismas y la aceptaci??n de 
                            las nuevas condiciones se??aladas.</p>
                        <p>Las modificaciones contractuales asociadas a la incorporaci??n de servicios que no se encuentren directamente relacionados 
                            al producto o servicio contratado y que, por ende, no constituyan una condici??n para contratar, ser??n comunicadas previamente 
                            al cliente en el plazo y forma se??alados en el tercer p??rrafo de la presente cl??usula; otorg??ndole al cliente la facultad de
                             aceptar la modificaci??n propuesta, sin que su negativa implique la resoluci??n del presente contrato.</p>
                        <p>Cuando POSSIBLE otorgue a EL CLIENTE condiciones, opciones o derechos que constituyan facilidades adicionales a las existentes 
                            y que no impliquen la p??rdida ni la sustituci??n de condiciones previamente establecidas, para efectos del presente contrato 
                            no ser??n considerados como modificaciones contractuales, y por lo tanto, no ser??n comunicados previamente a EL CLIENTE, pudiendo 
                            ??stos aplicarse de manera inmediata, siendo comunicados por POSSIBLE a trav??s de su p??gina web.</p>
                        <p><strong>S??PTIMA: PAGOS ANTICIPADOS Y/O ADELANTO DE CUOTAS</strong></p>
                        <p>EL CLIENTE tiene derecho a efectuar pagos anticipados de las cuotas o saldos en forma total o parcial, con la consiguiente 
                            reducci??n de intereses, comisiones y gastos al d??a de pago, as?? como tambi??n adelanto de cuotas con arreglo a las siguientes 
                            condiciones:</p>
                        <p>A la fecha en que se solicite el pago anticipado o el adelanto de cuotas, EL CLIENTE no deber?? adeudar suma alguna por concepto
                             de cuotas vencidas.</p>
                        
                        <ol type="1" class="cuerpo">
                            <li></li>
                            <p>Pago Anticipado: es el pago que trae como consecuencia la aplicaci??n del monto al capital del cr??dito, con la consiguiente 
                                reducci??n de los intereses, las comisiones y los gastos derivados de las cl??usulas contractuales al d??a de pago. Los pagos
                                 mayores a dos cuotas (que incluye aquella exigible en el periodo) se consideran pagos anticipados.</p>
                            <p>Los pagos anticipados podr??n ser realizados por EL CLIENTE en cualquier momento y cuantas veces lo estime conveniente sin 
                                penalidad alguna.</p>
                            <p>EL CLIENTE, al momento de realizar el pago, podr?? elegir si desea proceder a la reducci??n del monto de las cuotas restantes, 
                                pero manteniendo el plazo original, o elegir la reducci??n del n??mero de cuotas con la consecuente disminuci??n del plazo del cr??dito,
                                 deber?? dejar constancia de su elecci??n en el formato que POSSIBLE ponga a su disposici??n.</p>
                            <p>En caso EL CLIENTE no manifieste su voluntad con la constancia de elecci??n, dentro de los quince (15) d??as de realizado
                                 el pago, POSSIBLE queda autorizada a reducir el n??mero de cuotas con la consecuente disminuci??n del plazo del cr??dito.</p>
                            <p>En caso de pago anticipado, POSSIBLE proceder?? a entregar el Cronograma de Pago, en un plazo no mayor a siete (7) d??as 
                                de efectuada dicha solicitud. En virtud de lo expuesto, EL CLIENTE podr?? acercarse a cualquier Agencia a recoger el 
                                Cronograma de Pagos por ??nica vez luego de realizado el pago anticipado, o estar?? a disposici??n en todo momento en 
                                los medios digitales conforme a la cl??usula D??CIMA OCTAVA.</p>
                            
                            <li></li>
                            <p>Adelanto de Cuotas: es el pago que trae como consecuencia la aplicaci??n del monto pagado a las cuotas inmediatas posteriores a
                                 la exigible en el periodo, sin que se produzca una reducci??n de los intereses, las comisiones y los gastos. Los pagos menores 
                                 o iguales al equivalente de dos cuotas (que incluyen aquella exigible en el periodo), se consideran adelanto de cuotas.</p>
                            <p>Sin perjuicio de lo expuesto, EL CLIENTE, al momento de efectuar el pago anticipado, podr?? manifestar su voluntad expresa de adelantar 
                                el pago de cuotas, dejando evidencia de dicha decisi??n, procediendo POSSIBLE a aplicar el monto pagado en exceso sobre la cuota del 
                                periodo a las cuotas inmediatas siguientes no vencidas.</p>
                            <p>Asimismo, EL CLIENTE podr?? requerir antes o al momento de efectuarse el adelanto de cuotas aplicar el pago como pago anticipado, 
                                exigiendo POSSIBLE que EL CLIENTE deje constancia de dicha elecci??n.</p>
                            <p>EL CLIENTE podr?? efectuar los pagos se??alados en la presente cl??usula en cualquiera de las oficinas de atenci??n al p??blico de POSSIBLE; 
                                sin que ello implique pago alguno por concepto de penalidad, gasto o comisi??n y sin establecer condiciones o limitaciones para 
                                el ejercicio del derecho. </p>
                        </ol>
                        <p><strong>OCTAVA: OBLIGACIONES DEL CLIENTE</strong></p>
                        <p>EL CLIENTE, en general y sin que la enumeraci??n tenga car??cter limitativo, se obliga a lo siguiente:</p>

                        <ol type="a" class="cuerpo">
                            <li></li>
                            <p>A cumplir con todas las obligaciones contenidas en las normas legales vigentes, as?? como los requerimientos de las autoridades gubernamentales, incluyendo, pero no limit??ndose con respecto de las licencias, certificados, permisos, franquicias y otras autorizaciones necesarias para la conducci??n del negocio. </p>
                            <li></li>
                            <p>A no cambiar el giro ordinario de su negocio, a no realizar o financiar actividades ilegales, como por ejemplo aquellas cuya realizaci??n traiga como consecuencia cualquier tipo de da??o al medio ambiente o a la normatividad laboral y social.</p>
                            <li></li>
                            <p>A que los fondos obtenidos de POSSIBLE ser??n utilizados exclusivamente para el fin que han sido solicitados a POSSIBLE, seg??n lo se??alado en la solicitud de cr??dito, debidamente firmada por EL CLIENTE.</p>
                            <li></li>
                            <p>EL CLIENTE se compromete a informar a POSSIBLE, en un plazo no mayor de cinco (5) d??as h??biles, de cualquier hecho o circunstancia que pudiera dar origen a un deterioro sustancial en sus ingresos, utilidades, capacidad de pago y/o situaci??n patrimonial o tambi??n cualquier incremento relevante en sus gastos. Asimismo, se compromete a informar de cualquier hecho susceptible de disminuir el valor de sus activos o que comprometan su dominio sobre los mismos.</p>
                            <li></li>
                            <p>EL CLIENTE deber?? de informar si se le ha iniciado o est?? por iniciarse un proceso de insolvencia de acreedores o un procedimiento concursal o de reestructuraci??n de pasivos conforme al marco legal vigente.</p>
                            <li></li>
                            <p>EL CLIENTE se obliga a entregar informaci??n actualizada cada vez que sea requerida por POSSIBLE, solicitada mediante cualquiera de los medios de comunicaci??n, la misma que comprende estados financieros, flujos de caja, y cualquier otra informaci??n contable, econ??mica y financiera que POSSIBLE considere relevante de EL CLIENTE.</p>
                            <li></li>
                            <p>EL CLIENTE autoriza a POSSIBLE para que, sin necesidad de previo aviso, pueda proceder respecto a cualesquiera de sus cuentas, dep??sitos o valores a extornar mediante un simple asiento, las transacciones que por error u otro motivo se hubieran registrado en la cuenta de EL CLIENTE, si estas no perjudican la posici??n del cliente no se requerir?? notificaci??n previa o de instrucciones o aceptaci??n expresa oportuna de EL CLIENTE, informando. POSSIBLE con posterioridad y dentro de un plazo razonable las medidas aplicadas, con detalle de las operaciones realizadas y las razones que motivaron su adopci??n. En caso que el extorno perjudique la posici??n de EL CLIENTE, POSSIBLE deber?? informar de forma previa a EL CLIENTE de forma directa mediante una carta o correo electr??nico en la direcci??n registrada por EL CLIENTE.</p>
                            <li></li>
                            <p>POSSIBLE no asume responsabilidad alg??n si por caso fortuito o de fuerza mayor, no pudiera cumplir con cualquiera de las obligaciones y/o con las instrucciones de EL CLIENTE, que tenga relaci??n con los servicios de materia del presente contrato. En tales casos POSSIBLE tratar?? de dar cumplimiento a la instrucci??n tan pronto desaparezca la causa que impidiera su atenci??n oportuna.</p>
                        </ol>
                        <p><strong>NOVENA: RESOLUCI??N DE CONTRATO Y VENCIMIENTO ANTICIPADO DE PLAZOS</strong></p>
                        <p>Las partes acuerdan que POSSIBLE podr?? considerar vencidos todos los plazos y obligaciones del Cr??dito sin necesidad de tr??mite previo y exigir el pago inmediato de las mismas y/o resolver el contrato y exigir el pago total del cr??dito insoluto, previa deducci??n de las cuotas pagadas en caso de incumplimiento de las causales se??aladas a continuaci??n y de acuerdo a lo establecido en los art??culos 1428 y 1430 del C??digo Civil, comunic??ndolo mediante comunicaci??n escrita al domicilio se??alado por EL CLIENTE en su solicitud de cr??dito.</p>
                        <ol type="a" class="cuerpo">
                            <li></li>
                            <p>Si EL CLIENTE incumpliera con el pago de una (1) o m??s cuotas establecidas en el cronograma, sean consecutivas o no.</p>
                            <li></li>
                            <p>Si EL CLIENTE incumple con cualquiera de las obligaciones se??aladas en la cl??usula octava.</p>
                            <li></li>
                            <p>Si POSSIBLE comprueba que cualquier informaci??n, documentaci??n o dato proporcionado por EL CLIENTE y/o AVAL para sustentar u obtener el Cr??dito o cualquier otro cr??dito u operaci??n realizada ante POSSIBLE, fueran falsos o trat??ndose de documentos, estos hubieran sido adulterados o alterados en alguna forma.</p>
                            <li></li>
                            <p>Si EL CLIENTE no cumple con proporcionar la informaci??n requerida o no cumple con actualizar su informaci??n crediticia y financiera de acuerdo en la cl??usula octava.</p>
                            <li></li>
                            <p>Si EL CLIENTE solicita su declaraci??n de insolvencia, es sujeto de una solicitud de insolvencia por los acreedores, incurre en protesto de t??tulos valores, deviene en insolvente, suspende sus pagos o es declarado en quiebra.</p>
                            <li></li>
                            <p>Si EL CLIENTE cambiara de domicilio y no cumpliera con informar a POSSIBLE el lugar en donde pueda ser ubicado, de conformidad con lo establecido en la cl??usula d??cimo novena.</p>
                            <li></li>
                            <p>Si EL CLIENTE enajenase o gravase m??s del 25% de sus activos, cambiase de objeto social o realizase actos o contratos que pudieran, a criterio de POSSIBLE, influir negativamente en su solvencia econ??mica.</p>
                            <li></li>
                            <p>En caso EL CLIENTE se somete voluntariamente o es sometido por sus acreedores a cualquier procedimiento concursal.</p>
                            <li></li>
                            <p>En General si EL CLIENTE y/o AVAL incumpliese cualquiera de las obligaciones a su cargo establecidas en este
                                Contrato.
                                </p>

                        </ol>

                        <p>La liquidaci??n que se realice incluyendo intereses compensatorios, intereses moratorios o penalidad por mora (seg??n corresponda), comisiones, gastos y otros rubros aplicables, conforme a las disposiciones legales vigentes tendr?? merito ejecutivo.</p>
                        <p>POSSIBLE podr?? resolver este Contrato unilateralmente, mediante aviso cursado al domicilio de EL CLIENTE con una anticipaci??n no menor a cinco (05) d??as h??biles a la fecha de resoluci??n efectiva, conforme al art??culo 40?? del Reglamento de Conducta  de  Mercado del Sistema  Financiero  (Resoluci??n  SBS  N??  3274-2017),  se??alando  en  la  mencionada comunicaci??n las razones que motivan la resoluci??n.</p>
                        <p>EL CLIENTE, por su parte, podr?? poner t??rmino a este Contrato acerc??ndose a las oficinas de POSSIBLE cuando as?? lo decida debiendo en dicho acto, cancelar el ??ntegro del pr??stamo pendiente de pago seg??n la liquidaci??n que realice POSSIBLE, m??s los intereses compensatorios, moratorios o penalidad por pago de obligaciones en fecha posterior a su vencimiento (seg??n corresponda), comisiones, otras penalidades y gastos generados. El presente contrato se mantendr?? vigente hasta la cancelaci??n total de dicho saldo deudor.</p>
                        
                        <p><strong>D??CIMA: FACULTAD DE COMPENSACI??N Y RETENCI??N</strong></p>
                        <p>En el caso de existir obligaciones vencidas y exigibles, EL CLIENTE faculta irrevocablemente a POSSIBLE, a realizar en su nombre y representaci??n todas las operaciones y transacciones que resulten necesarias para:</p>
                        <ol type="a" class="cuerpo">
                            <li></li>
                            <p>Centralizar en una ??nica cuenta el saldo que tenga o pudiera tener en las otras cuentas, conforme a lo dispuesto en el numeral 11 del art??culo 132 de la Ley 26702, Ley General del Sistema Financiero, del Sistema de Seguros y Org??nica de la Superintendencia de Banca y Seguros. Esta autorizaci??n comprende la facultad de compensar los saldos deudores que pudiera tener EL CLIENTE por cualquier concepto o naturaleza con los dep??sitos en general, saldos acreedores en cualquier cuenta, certificados, t??tulos, valores y cualquier otro bien que POSSIBLE tiene o pudiera tener en su poder a nombre de EL CLIENTE bajo cualquier t??tulo. Asimismo, EL CLIENTE autoriza a POSSIBLE a realizar cuando sea necesario, la correspondiente operaci??n de cambio de monedas al tipo de cambio que POSSIBLE tenga establecido al momento de realizar la operaci??n.</p>
                            <li></li>
                            <p>Retener o aplicar a la amortizaci??n y/o pago de lo adeudado toda suma, valor, t??tulo, certificado, cobranza de facturas u otros documentos o cualquier otro bien, que por cualquier raz??n y bajo cualquier t??tulo tengan en su poder y est?? destinada a ser entregada o acreditada a EL CLIENTE. En caso la amortizaci??n y/o cancelaci??n de lo adeudado se realice con cargo a una cuenta de dep??sito a plazo fijo, EL CLIENTE autoriza irrevocablemente a POSSIBLE a abrir un nuevo dep??sito a su nombre por el monto que quede luego de realizado el cargo y por el mismo faltante, aplic??ndole la tasa de inter??s compensatorio efectiva anual que corresponda conforme a la Cartilla de Informaci??n y Tarifario de POSSIBLE el d??a de la apertura. POSSIBLE no asume ninguna responsabilidad en caso decidiera no hacer uso de la facultad que por la presente cl??usula se le concede.</p>
                            <li></li>
                            <p>Asimismo, POSSIBLE podr?? cargar cualquier obligaci??n directa o indirecta que se le impute, sea por capital, intereses compensatorios, intereses moratorios o penalidad por mora (seg??n corresponda), comisiones, tributos y gastos. Asimismo, podr?? retener, aplicando a los adeudos, cualquier suma o valor que tenga en su poder o reciba a favor de EL CLIENTE por cualquier concepto y en cualesquiera de sus oficinas o filiales en el pa??s. Tambi??n, podr?? abonar o cargar en las mismas, con las sumas que resulten de m??s o de menos por errores o transposici??n y/o que resulten necesarios para regularizar las mismas.</p>


                        </ol>
                            <p>Estas operaciones y transacciones ser??n comunicadas por escrito o por correo electr??nico en la direcci??n que se??alara como domicilio EL CLIENTE en su solicitud de cr??dito, dentro de los 7 d??as de realizada la acci??n.</p>
                        <p>El Derecho de Compensaci??n indicado en los p??rrafos anteriores de la presente cl??usula, ser?? ejercido por POSSIBLE entre sus acreencias y los activos de EL CLIENTE que mantenga en su poder, hasta por el monto de aquellas, devolviendo a la masa de EL CLIENTE el exceso resultante, si hubiere. Asimismo, en tales supuestos no ser??n objeto de compensaci??n los activos legal o contractualmente declarados intangibles o excluidos de este derecho.</p>

                            <p><strong>D??CIMA PRIMERA: ENTREGA DE T??TULOS VALORES</strong></p>
                            <p>Las partes acuerdan que la emisi??n y/o entrega de t??tulos valores a favor de POSSIBLE, o su renovaci??n o pr??rroga, no producir?? novaci??n de ninguna de las obligaciones asumidas por EL CLIENTE, salvo que expresamente se acuerde lo contrario. Asimismo, al amparo del art??culo 1233?? del C??digo Civil, las partes convienen y pactan que la emisi??n y/o entrega de t??tulos valores a favor de POSSIBLE en ning??n caso determina la extinci??n de las obligaciones primitivas, aun cuando dichos t??tulos se hubiesen perjudicado por cualquier causa.</p>

                            <p><strong>D??CIMA SEGUNDA: EMISI??N DE PAGAR?? INCOMPLETO</strong></p>
                            <p>Al amparo de lo dispuesto por la Ley N?? 27287 (Ley de T??tulos Valores) y la Circular SBS N?? G-0090-2001 (T??tulo Valor emitido en forma incompleta), las partes acuerdan que, en representaci??n del Cr??dito, EL CLIENTE emite y suscribe un pagar?? incompleto a la orden de POSSIBLE, el cual ser?? completado cuando opere la resoluci??n del contrato y vencimiento anticipado de plazos conforme a la cl??usula novena del presente contrato, en las siguientes condiciones:</p>

                            <ol type="a" class="cuerpo">
                                <li></li>
                                <p>La fecha de emisi??n ser?? a criterio de POSSIBLE, la fecha en que se efectu?? el desembolso o aquella en la cual POSSIBLE proceda a hacer uso de las facultades otorgadas en el presente contrato.</p>
                                <li></li>
                                <p>La fecha de vencimiento ser?? en la fecha que POSSIBLE da por vencidos todos los plazos en caso de incumplimiento en el pago oportuno de una o m??s cuotas.</p>
                                <li></li>
                                <p>El importe del pagar?? ser?? el que resulte de la liquidaci??n que POSSIBLE practique y que incluir?? el saldo total adeudado hasta la fecha de dicha liquidaci??n, comprendi??ndose, capital, intereses compensatorios, intereses moratorios o penalidad por mora (seg??n corresponda), comisiones, seguros (de corresponder) y gastos a las tasas establecidas por POSSIBLE.</p>
                                <li></li>
                                <p>EL CLIENTE declara conocer y aceptar las tasas de los intereses compensatorios, intereses moratorios o penalidad por mora (seg??n corresponda), y las comisiones y gastos vigentes para las operaciones materia de este Contrato, reserv??ndose POSSIBLE el derecho de modificarlas, de acuerdo al procedimiento descrito en la cl??usula sexta y d??cima tercera de este Contrato. Para el pago de intereses moratorios o penalidad por mora (seg??n corresponda), no ser?? necesaria la constituci??n en mora, siendo esta autom??tica.</p>
                                <li></li>
                                <p>El pagar?? ser?? emitido con la cl??usula Sin Protesto. Sin perjuicio de lo cual, el tenedor podr?? protestarlo asumiendo este los gastos de dicha diligencia. EL CLIENTE acepta que, desde la fecha de vencimiento del pagar?? hasta su pago efectivo, el monto consignado en dicho t??tulo valor devengar?? intereses compensatorios y moratorios o penalidad por mora (seg??n corresponda), con las tasas establecidas en el pagar??.</p>
                                <li></li>
                                <p>En caso que las partes acuerden el refinanciamiento del cr??dito otorgado mediante el presente contrato y conforme a la cl??usula cuarta del presente contrato, el pagar?? deber?? ser llenado conforme a las nuevas condiciones pactadas en el contrato de refinanciamiento respectivo, por tratarse de la misma obligaci??n garantizada.</p>
                                <li></li>
                                <p>Una vez cancelado el cr??dito el cliente deber?? presentar una carta solicitando la devoluci??n del pagar??, comprometi??ndose POSSIBLE a dicha devoluci??n en los 15 d??as siguientes de recibida la comunicaci??n. Si transcurridos 6 meses el cliente no solicita la devoluci??n del pagare mediante la comunicaci??n indicada, las partes acuerdan que POSSIBLE proceder?? a la destrucci??n del t??tulo valor, conforme a lo establecido en el art??culo 17.2 de la Ley de T??tulos Valores.</p>

                            </ol>
                            <p>EL CLIENTE declara haber recibido una copia del pagar?? incompleto que ha emitido y suscrito, EL CLIENTE y EL AVAL declaran haber sido instruidos de manera clara, expl??cita y comprensible sobre los alcances y finalidad del pagar?? emitido en forma incompleta e informados por POSSIBLE de los mecanismos legales que lo protegen, y autorizan a POSSIBLE a poder transferir el pagar?? sin reserva ni limitaci??n alguna.</p>
                            <p><strong>D??CIMA TERCERA: REFINANCIACI??N Y REPROGRAMACIONES</strong></p>
                            <p>Sujeto al cumplimiento de las condiciones que POSSIBLE se??ale, podr?? refinanciarse o reprogramarse el cr??dito no pagado oportunamente por EL CLIENTE, en cuyo caso, tales refinanciamientos y/o reprogramaciones acordadas y previamente aprobadas por POSSIBLE, seguir??n rigi??ndose con las mismas garant??as que se constituyen en su respaldo en este contrato, oblig??ndose a participar necesariamente EL CLIENTE, y para el caso de refinanciamiento se deber?? suscribir el Contrato de refinanciamiento conforme al art??culo 1361 y siguientes del C??digo Civil, el nuevo pagar?? y la Hoja Resumen que se genere, siendo que estos documentos ser??n oponibles ??nicamente a los obligados que participen y suscriban dicho refinanciamiento.</p>
                            <p>POSSIBLE podr?? aprobar el refinanciamiento si EL CLIENTE cumple con lo establecido en las pol??ticas internas de POSSIBLE y pudiendo incluso exigir la constituci??n de garant??a o de mayores garant??as a las ya constituidas previo al refinanciamiento del cr??dito.</p>
                            
                        <p>En este sentido las partes acuerdan que si decidieran reprogramar o refinanciar el cr??dito materia del presente contrato, las estipulaciones que contiene el presente documento seguir??n vigentes en todo aquello que no se modifique expresamente, en el contrato de refinanciamiento que se firmara, entregando POSSIBLE a EL CLIENTE el nuevo Cronograma de Pagos ajustado a las condiciones del refinanciamiento. </p>
                          <p>EL CLIENTE ser?? debidamente informado de las consecuencias de calificaci??n crediticia de un refinanciamiento o reprogramaci??n por su asesor de negocios. Sin perjuicio de ello, EL CLIENTE podr?? tener acceso a dicha informaci??n en la p??gina web de POSSIBLE.</p>      
                    
                          <p><strong>D??CIMA CUARTA: NORMAS PRUDENCIALES</strong></p>
                          <p>Si EL CLIENTE incurre en alguno de los supuestos establecidos por las normas prudenciales emitidas por la Superintendencia de Banca, Seguros y AFP a las que se refiere el art??culo 41??del Reglamento de Conducta de Mercado del Sistema Financiero (Resoluci??n SBS N?? 3274-2017).,tales como las referidas al riesgo de sobreendeudamiento de deudores minoristas, o por consideraciones del perfil del cliente vinculadas al sistema de prevenci??n de lavado de activos o del financiamiento del terrorismo o por falta de transparencia, entendi??ndose como falta de transparencia de EL CLIENTE cuando al evaluar la informaci??n se??alada o presentada en la solicitud del cr??dito o durante la relaci??n contractual con POSSIBLE, se demuestre que esta es inexacta, incompleta, falsa o inconsistente con la presentada por EL CLIENTE y ello pueda repercutir en el riesgo reputacional o legal de POSSIBLE, esta podr?? resolver o modificar el presente contrato por las causales indicadas, en aspectos distintos a las tasas de inter??s, comisiones o gastos, remitiendo una comunicaci??n a EL CLIENTE, dentro de los siete (7) d??as calendarios posteriores a dicha modificaci??n o resoluci??n. Asimismo, en aplicaci??n de las normas prudenciales mencionadas, POSSIBLE podr?? decidir no contratar con EL CLIENTE.</p>
                            <p><strong>D??CIMA QUINTA: CESI??N DE DERECHOS</strong></p>
                                <p>EL CLIENTE reconoce y acepta que POSSIBLE podr?? ceder sus derechos derivados del presente contrato, ya sea mediante una cesi??n de derechos o mediante la constituci??n de patrimonio aut??nomo para efectos de su titularizaci??n o mecanismos similares, o venta de cartera, o emisi??n de instrumentos o bonos hipotecarios y/o cualquier otra forma permitida por la ley, a lo que EL CLIENTE presta desde ahora y por el presente documento su consentimiento expreso e irrevocable a dichas cesiones y transferencia, incluyendo las correspondientes garant??as que pudiere haber constituido a favor de POSSIBLE en respaldo de sus obligaciones, siendo para ello suficiente que POSSIBLE le comunique la identidad del nuevo acreedor o titular de los derechos y garant??as cedidas. Conforme a lo establecido en el art??culo 1206?? y siguientes del C??digo Civil.</p>
                            <p><strong>D??CIMA SEXTA: CUENTA DE DEP??SITO DE AHORRO</strong></p>
                            <p>EL CLIENTE autoriza irrevocablemente a POSSIBLE, a abrir a nombre de EL CLIENTE una cuenta de dep??sitos de ahorro sin costo, en la cual POSSIBLE podr?? registrar los desembolsos del cr??dito y sus renovaciones de ser el caso, as?? como los importes de todas las obligaciones de EL CLIENTE con POSSIBLE bajo el presente contrato, incluidos los intereses, gastos, impuestos entre otros.</p>
                            <p>EL CLIENTE declara que el contrato de Cuentas de Dep??sito de Ahorro se??alado en el p??rrafo anterior de la presente cl??usula, as?? como la Cartilla Informativa correspondiente a ??ste, le fueron entregados para su lectura, que se absolvieron sus consultas y que firma con conocimiento pleno de las condiciones establecidas en los referidos documentos. Trat??ndose de una contrataci??n por medios no presenciales o no escritos, se aplicar?? dispuesto en la cl??usula d??cima octava del presente contrato.</p>
                            <p>Asimismo, las caracter??sticas del producto y su tarifario podr?? encontrarlos en la p??gina web de POSSIBLE.</p>
    
                            <p><strong>D??CIMA S??PTIMA: SEGURO DE DESGRAVAMEN</strong></p>
                            <p>En los casos en que las condiciones para el otorgamiento del cr??dito se requiera la contrataci??n de un seguro de desgravamen, POSSIBLE informar?? previamente a EL CLIENTE que tienen derecho de elegir entre: a) la contrataci??n del seguro ofrecido por POSSIBLE, en cuyo caso POSSIBLE ser?? responsable de la renovaci??n de del mismo, o b) un seguro contratado directamente por EL CLIENTE o a trav??s de la designaci??n de un corredor de seguros, siempre que cumpla con las condiciones requeridas de POSSIBLE, en este caso no estar?? obligado a contratar el seguro ofrecido por POSSIBLE endos??ndolo a su favor hasta por el monto del saldo adeudado, pudiendo acordar con POSSIBLE que el pago de la prima del seguro se adicione al pago de las cuotas peri??dicas previamente pactadas por el cr??dito o sea debitado de un producto pasivo a nombre de EL CLIENTE existente en POSSIBLE, este endoso y forma de pago podr?? ser tramitado directamente por EL CLIENTE o por POSSIBLE, seg??n acuerdo de partes.</p>
                            <p>En caso EL CLIENTE autorice a POSSIBLE a contratar un Seguro de Desgravamen, se designar?? como beneficiario a POSSIBLE, cuyas condiciones y cobertura ser??n las que consten en la P??liza de Seguro correspondiente que obra en poder de POSSIBLE, haciendo entrega a EL CLIENTE del Certificado de Seguro correspondiente, autorizando a cargar los gastos de la prima al monto del pr??stamo, lo que de ser el caso constara en la Hoja de Resumen de EL CLIENTE. Asimismo, suscribir?? una declaraci??n jurada de salud, que es veraz, completa y exacta, se??alando que cumple con las condiciones de la p??liza y los requisitos exigidos por ella, por lo que el Cr??dito quedar?? en su caso, cubierto por el Seguro de Desgravamen. Esta declaraci??n la formula conociendo que, en caso contrario, as?? como en aquellos otros casos que no se cumplan las condiciones y requisitos de las condiciones de la p??liza, se perder?? el derecho a la indemnizaci??n que deba pagar la aseguradora por el Cr??dito, con los efectos consiguientes para EL CLIENTE y/o sus herederos, quienes asumir??n el pago de lo adeudado a POSSIBLE hasta el l??mite de su patrimonio o de la masa hereditaria, seg??n fuera el caso, conforme a Ley.</p>
                            <p>Queda establecido entre las partes que si por cualquier causa, el seguro contratado por POSSIBLE fuera variado o incluso suprimido, POSSIBLE lo comunicar?? a EL CLIENTE mediante aviso escrito enviado al domicilio se??alado por EL CLIENTE, con una anticipaci??n no menor de cuarenta y cinco (45) d??as calendario a su entrada en vigencia, a fin que ??ste tome debida nota de tales cambios y/o supresiones y de todas sus implicancias y consecuencias. Adem??s, si las variaciones consistieran en nuevos requerimientos a ser cumplidos o presentados por EL CLIENTE, o nuevos riesgos excluidos u otros, EL CLIENTE se obliga a cumplirlos.</p>
                            <p>POSSIBLE podr?? cambiar de Compa????a de Seguros, para lo cual POSSIBLE deber?? remitir a EL CLIENTE previamente las condiciones y coberturas que constan en la P??liza de Seguros respectiva correspondiente a la nueva Compa????a de Seguros, con una anticipaci??n de cuarenta y cinco (45) d??as calendario antes de proceder al cambio. En caso EL CLIENTE no se encontrar?? conforme con las nuevas condiciones, ??ste deber?? acreditar, dentro del plazo se??alado, haber contratado por su cuenta una p??liza de seguro que brinde cobertura y plazo similar o mayor al ofrecido por POSSIBLE, ??sta podr?? aceptar que dicha p??liza de seguro sea endosada a su favor. EL CLIENTE se obliga a mantenerla vigente y a renovarla en su oportunidad, caso contrario, POSSIBLE queda facultada, por cuenta de EL CLIENTE, a renovar y/o mantener vigente la respectiva p??liza de seguro. EL CLIENTE autoriza a POSSIBLE a incluir el costo total de la misma en las cuotas del Cr??dito. En cuyo caso, EL CLIENTE se obliga a cumplir con los nuevos requerimientos exigidos por la nueva Compa????a de Seguros.</p>
                            <hr>
                            <p><strong>D??CIMA OCTAVA: CONTRATACI??N POR MEDIOS NO PRESENCIALES O POR MEDIOS NO ESCRITOS</strong></p>
                            <p>De existir una contrataci??n por medios no presenciales o por medios no escritos, EL CLIENTE acepta como v??lidas las transacciones y contrataci??n de productos y/o servicios a trav??s de los canales virtuales o medios electr??nicos que POSSIBLE comunique y ponga a su disposici??n, tales como (i) mediante la plataforma de la p??gina web de POSSIBLE  y/o su aplicaci??n m??vil, con el uso por parte de EL CLIENTE de sus claves de acceso y/o contrase??as, (ii) mensajes de correo electr??nico a y/o desde la direcci??n de correo electr??nico que EL CLIENTE tenga registrado en POSSIBLE, y otros medios que POSSIBLE ponga a su disposici??n.</p>
                            <p>POSSIBLE dispondr?? de los mecanismos y medidas de seguridad en los medios utilizados para la contrataci??n no presencial o por medios no escritos, seg??n el canal que se utilice y cumplir?? con la normativa vigente sobre contrataci??n virtual. En este sentido, POSSIBLE en un plazo no mayor a 15 d??as calendarios remitir?? a EL CLIENTE el Contrato, as?? como cualquier otra informaci??n que corresponda en conformidad a la normativa vigente. Dicha entrega puede realizarse en el domicilio de EL CLIENTE o a trav??s de medios electr??nicos, siempre que permitan su lectura, impresi??n, conversi??n y reproducci??n sin cambios.</p>
    
                            <p><strong>D??CIMA NOVENA: DOMICILIO Y JURISDICCI??N</strong></p>
                            <p>Las partes se??alan como sus domicilios para los efectos de este Contrato los que figuran en este documento, donde se les har??n llegar las notificaciones judiciales y extrajudiciales que hubiera lugar. Sin perjuicio de ello, POSSIBLE podr?? emplear cualquiera de los dem??s medios previstos en la Ley para comunicarse con EL CLIENTE. Asimismo, POSSIBLE podr?? ser notificada en sus oficinas de la ciudad donde se suscriba el presente contrato.</p>
                            <p>EL CLIENTE se obliga a no variar este domicilio durante la vigencia del Contrato. No obstante, en el caso de variaci??n de su domicilio se obligan a comunicarlo por escrito o al correo oficial_conducta_mercado@corporacionposible.com, indicando sus datos y el nuevo domicilio, en un plazo m??ximo de 30 d??as de producida la variaci??n. Se precisa que para que surta efecto esta notificaci??n electr??nica requiere la comunicaci??n expresa de la POSSIBLE indicando haber tomado conocimiento y en su defecto no exista comunicaci??n de POSSIBLE que confirme lo antes mencionado, EL CLIENTE deber?? realizar dicha comunicaci??n por escrito, siendo oponible a POSSIBLE con el solo hecho de tener el sello de recibido en el documento. Para que dicha variaci??n sea v??lida y oponible a POSSIBLE, se deber?? adjuntar a la variaci??n copia de un recibo de servicios p??blicos del mes anterior a la fecha de la solicitud, el nuevo domicilio debe ser cierto y estar ubicado en el radio urbano de esta ciudad; de lo contrario las notificaciones y comunicaci??n dirigidas al antiguo domicilio ser??n plenamente v??lidas y eficaces. POSSIBLE se reserva el derecho de realizar las verificaciones respectivas a fin de determinar la existencia y veracidad de la variaci??n del domicilio.</p>
                            <p>POSSIBLE efectuar?? la cobranza respetando estrictamente los l??mites y prohibiciones establecidos en los art??culos 61 y 62 del C??digo de Protecci??n y Defensa del Consumidor, y de las normas que lo modifiquen o sustituyan.
                            </p>
                            <p>Las partes se someten expresamente a la jurisdicci??n de los jueces del distrito judicial del lugar de suscripci??n del contrato.</p>
                            <hr>
                            <p><strong>VIG??SIMA: CAR??CTER DE DECLARACI??N JURADA DE LA INFORMACI??N Y DOCUMENTACI??N PROPORCIONADA POR LOS PRESTATARIOS, VALIDEZ DEL CONTRATO</strong></p>
                            <p>LOS PRESTATARIOS, FIADORES SOLIDARIOS y/o AVAL(ES) declaran tener conocimiento de que toda informaci??n y/o documentaci??n que sea proporcionada a POSSIBLE por El CLIENTE tendr?? car??cter de declaraci??n jurada conforme a lo dispuesto en el Art. 179 de la Ley General del Sistema Financiero, Ley N?? 26702 y se someten a sus prescripciones todo aquello no previsto expresamente en este contrato. Por lo tanto, de resultar falsa cualquier informaci??n proporcionada se encontrar??n sujetos a las responsabilidades penales del caso y en caso producto de esta informaci??n se genere el desembolso de dinero en perjuicio de terceros o de POSSIBLE, esta ??ltima se encontrar?? facultada a requerir el reembolso inmediato, as?? como los intereses, comisiones, gastos y las penalidades que se hayan establecido y generado, procedi??ndose en caso contrario a la ejecuci??n judicial por la v??a de Obligaci??n de Dar suma de Dinero en su contra.</p>
                            <p>La nulidad o invalidez, total o parcial, de una o m??s disposiciones contenidas en este contrato no afectar??n la validez de las dem??s disposiciones contenidas en el mismo, debi??ndose considerar como inexistentes ??nicamente las cl??usulas declaradas nulas o invalidas, total o parcialmente.</p>
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
    <p class="acron">(PJ)</p>	RAZ??N SOCIAL/ <p class="acron">(PN)</p>NOMBRES Y APELLIDOS: <br>
    __________________________________________________ <br>
    <p class="acron">(PJ)</p>	RUC/ <p class="acron">(PN)</p>DOI(*)___________ N??______________________ <br>
    <p class="acron">(PJ)</p>	APODERADO 01:_________________________________ <br>
    <p class="acron">(PJ)</p>	DOI(*)___________ N??_____________________________ <br>
    <p class="acron">(PJ)</p><p class="acron">(PN)</p>DOMICILIO: ____________________________________ <br> 

    <p class="acron">(PJ)</p>Partida de Poderes N??:______________________________ <br>
    <p class="acron">(PJ)</p>Oficina Registral:___________________________________ <br>
    <p class="acron">(PN)</p>Estado Civil:______________________________________ <br>
</p>

</div>
</div>
<div class="firmas">

<div >
<p > EL CLIENTE / CODEUDOR <br>	
    <p class="acron">(PJ)</p>	RAZ??N SOCIAL/ <p class="acron">(PN)</p>NOMBRES Y APELLIDOS: <br>
    __________________________________________________ <br>
    <p class="acron">(PJ)</p>	RUC/ <p class="acron">(PN)</p>DOI(*)___________ N??______________________ <br>
    <p class="acron">(PJ)</p>	APODERADO 02:_________________________________ <br>
    <p class="acron">(PJ)</p>	DOI(*)___________ N??_____________________________ <br>
    <p class="acron">(PJ)</p><p class="acron">(PN)</p>DOMICILIO: ____________________________________ <br> 
    <p class="acron">(PN)</p>Estado Civil:______________________________________ <br>
</p>

</div>
</div> 
<br>
<br>
<br>

<p class="acron">(PJ) ??? Rellenar todos estos campos para Personas Jur??dicas <br>
    (PN) ??? Rellenar todos estos campos para Personas Naturales</p>
<br>
<p class="acron">(*)DOI: Rellenar con DNI (Documento Nacional de Identidad), CE (Carn?? de Extranjer??a) o P (Pasaporte)</p>
    <p>La persona que firma en calidad de c??nyuge o conviviente del Cliente interviene en el presente Contrato para: (i) en el caso del c??nyuge, prestar su conformidad a los t??rminos y condiciones del presente documento y las obligaciones que asume frente a POSSIBLE; y, (ii) en el caso del conviviente, declarar que a la fecha mantiene una uni??n de hecho con el Cliente de acuerdo a lo se??alado en el art??culo 326?? del C??digo Civil; y, para prestar su conformidad a los t??rminos y condiciones del presente documento y las obligaciones que asume frente a POSSIBLE.</p>
<hr>
    <p class="titulopdf"><strong>  CL??USULA ADICIONAL </strong></p>
    <p class="titulopdf"><strong>  FIANZA </strong></p>
    <p>Interviene(n) en ??ste Contrato el(los) Fiador(es) que suscribe(n) este documento constituy??ndose (solidariamente entre
        s??) en fiador(es) solidario(s) de EL CLIENTE, sin beneficio de excusi??n, comprometi??ndose a pagar las obligaciones asumidas por EL CLIENTE a favor de POSSIBLE; incluyendo los intereses compensatorios, moratorios o penalidad por mora (seg??n corresponda), comisiones, impuestos y gastos de toda clase que se deriven de este Contrato, sin reserva ni limitaci??n alguna, dejando expresa constancia que su garant??a es de plazo indeterminado, adem??s de solidaria, es indivisible e ilimitada.
        </p>

        <P>El(los) Fiador(es) se obliga(n) al pago, en forma indistinta y solidaria frente a POSSIBLE, del pagar?? mencionado en la cl??usula d??cimo segunda de este Contrato.</P>

        <p>Conforme lo dispuesto por el art??culo 1877?? del C??digo Civil, EL CLIENTE deber?? reemplazar al Fiador u ofrecer otra garant??a a satisfacci??n de POSSIBLE, en caso el Fiador devengue en insolvente.</p>
        <p>POSSIBLE remitir?? al domicilio del(los) Fiador(es) se??alado en el presente Contrato, las notificaciones judiciales y extrajudiciales a que hubiera lugar.</p>
        <p>El(los) Fiador(es) renuncia(n) a hacer uso de la facultad otorgada por los art??culos 1898?? y1899?? del C??digo Civil. El(los) Fiador(es) autoriza(n) en este documento desde ahora y en forma irrevocable a POSSIBLE para que, si as?? lo decidiera, debite el importe parcial o total de las obligaciones vencidas y exigibles que se deriven del presente Contrato en cualquier cuenta que tenga(n) o pudiera(n) tener en POSSIBLE, en caso dichos importes no sean pagados por EL CLIENTE. No ser??n objeto de compensaci??n los activos legal o contractualmente declarados intangibles, o que se encuentren excluidos de dicho derecho.</p>
        <p>El(los) Fiador(es) se obliga a intervenir como tal en las pr??rrogas o refinanciaciones que POSSIBLE pudiera otorgar a EL CLIENTE, dejando expresa constancia que conoce que el pagar?? aceptado a favor de POSSIBLE garantiza cualquier reprogramaci??n, modificaci??n y/o refinanciamientos hasta la total cancelaci??n de las obligaciones derivadas del cr??dito materia del presente contrato, o que se deriven de ellas, sin reserva ni limitaci??n alguna, hayan intervenido o no en las mencionadas reprogramaciones, modificaciones y/o refinanciaciones.</p>
        <p>Sin perjuicio de lo anterior, El(los) Fiador(es) se obliga a suscribir como avalista el pagar?? a que se refiere la cl??usula d??cima segunda del presente documento, pagar?? que garantizar?? la obligaci??n de cr??dito pactada en el presente contrato sus modificaciones o refinanciamientos conforme a lo se??alado en la misma cl??usula. El(los) Fiador(es) igualmente se obliga, a solicitud de POSSIBLE a constituir nuevas garant??as en su favor o mejorar las ya otorgadas, que respalden en forma suficiente el ??ntegro de las obligaciones de EL CLIENTE derivadas del presente contrato, en el caso que su patrimonio disminuya de manera tal que no resulte suficiente para garantizar las obligaciones asumidas en el presente contrato.</p>
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
                        <p class="acron">(PJ)</p>	RAZ??N SOCIAL/ <p class="acron">(PN)</p>NOMBRES Y APELLIDOS: <br>
                        __________________________________________________ <br>
                        <p class="acron">(PJ)</p>	RUC/ <p class="acron">(PN)</p>DOI(*)___________ N??______________________ <br>
                        <p class="acron">(PJ)</p>	APODERADO 01:_________________________________ <br>
                        <p class="acron">(PJ)</p>	DOI(*)___________ N??_____________________________ <br>
                        <p class="acron">(PJ)</p><p class="acron">(PN)</p>DOMICILIO: ____________________________________ <br> 

                        <p class="acron">(PJ)</p>Partida de Poderes N??:______________________________ <br>
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
                        <p class="acron">(PJ)</p>	RAZ??N SOCIAL/ <p class="acron">(PN)</p>NOMBRES Y APELLIDOS: <br>
                        __________________________________________________ <br>
                        <p class="acron">(PJ)</p>	RUC/ <p class="acron">(PN)</p>DOI(*)___________ N??______________________ <br>
                        <p class="acron">(PJ)</p>	APODERADO 02:_________________________________ <br>
                        <p class="acron">(PJ)</p>	DOI(*)___________ N??_____________________________ <br>
                        <p class="acron">(PJ)</p><p class="acron">(PN)</p>DOMICILIO: ___________________________________ <br> 
                        <p class="acron">(PN)</p>Estado Civil:______________________________________ <br>
                    </p>

                </div>
            </div> <br> <br>
            <p class="acron">(PJ) ??? Rellenar todos estos campos para Personas Jur??dicas <br>
                (PN) ??? Rellenar todos estos campos para Personas Naturales</p> <br>
           
            <p class="acron">(*)DOI: Rellenar con DNI (Documento Nacional de Identidad), CE (Carn?? de Extranjer??a) o P (Pasaporte)</p>
             
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
                        <p class="acron">(PJ)</p>	RAZ??N SOCIAL/ <p class="acron">(PN)</p>NOMBRES Y APELLIDOS: <br>
                        __________________________________________________ <br>
                        <p class="acron">(PJ)</p>	RUC/ <p class="acron">(PN)</p>DOI(*)___________ N??______________________ <br>
                        <p class="acron">(PJ)</p>	APODERADO 01:_________________________________ <br>
                        <p class="acron">(PJ)</p>	DOI(*)___________ N??_____________________________ <br>
                        <p class="acron">(PJ)</p><p class="acron">(PN)</p>DOMICILIO: ____________________________________ <br> 

                        <p class="acron">(PJ)</p>Partida de Poderes N??:______________________________ <br>
                        <p class="acron">(PJ)</p>Oficina Registral:__________________________________ <br>
                        <p class="acron">(PN)</p>Estado Civil:_____________________________________ <br>
                    </p>

                </div>
            </div>
         

                <div class="firmas" >
                    <p > EL FIADOR / CODEUDOR <br>	
                        <p class="acron">(PJ)</p>	RAZ??N SOCIAL/ <p class="acron">(PN)</p>NOMBRES Y APELLIDOS: <br>
                        __________________________________________________ <br>
                        <p class="acron">(PJ)</p>	RUC/ <p class="acron">(PN)</p>DOI(*)___________ N??______________________ <br>
                        <p class="acron">(PJ)</p>	APODERADO 02:_________________________________ <br>
                        <p class="acron">(PJ)</p>	DOI(*)___________ N??_____________________________ <br>
                        <p class="acron">(PJ)</p><p class="acron">(PN)</p>DOMICILIO: ____________________________________ <br> 
                        <p class="acron">(PN)</p>Estado Civil:_____________________________________ <br>
                    </p>

                </div>
                      <br>
                <p class="acron">(PJ) ??? Rellenar todos estos campos para Personas Jur??dicas <br>
                    (PN) ??? Rellenar todos estos campos para Personas Naturales</p>
               
                <p class="acron">(*)DOI: Rellenar con DNI (Documento Nacional de Identidad), CE (Carn?? de Extranjer??a) o P (Pasaporte)</p>
                 <P>La persona que firma en calidad de c??nyuge o conviviente del Fiador interviene en el presente Contrato para: (i) en el caso del c??nyuge, prestar su conformidad a los t??rminos y condiciones del presente documento y las obligaciones que asume frente a POSSIBLE; y, (ii) en el caso del conviviente, declarar que a la fecha mantiene una uni??n de hecho con el Fiador de acuerdo a lo se??alado en el art??culo 326?? del C??digo Civil; y, para prestar su conformidad a los t??rminos y condiciones del presente documento y las obligaciones que asume frente a POSSIBLE. </P>
               
               
               
                                             <hr>
                                             <p><strong>CL??USULA ADICIONAL</strong></p>
                                            <p>Se constituye en testigo a ruego el (la) Sr(a): _____________________________________________ <br>
                                            identificado(a) con: __________________ N?? ____________________ con domicilio en: <br>
                                        ____________________________________________________________________________ <br>
                                        a  solicitud  del / la Sr(a) ________________________ identificado(a)  con ___________  N?? ____________, quien  es 
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