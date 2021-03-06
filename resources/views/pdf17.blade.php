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
    </style>

    <header>
        <img src="img/logo.png" alt="" width="100">
    </header>
    <footer>
        <div class="fot"><img src="img/footverde.png" width="100%" alt="" ></div>
      <p class="txtfooter"> <span class="icon"><img src="img/ubicacion.png"  class="icon" alt="" width="30"></span> Jr. Grau - Huamachuco <span class="icon"><img class="icon" src="img/correo.png" alt="" width="30"></span> consultas@corporacionposible.com <span class="icon"><img src="img/celular.png" class="icon" alt="" width="30"></span> +51914166380</p>
    {{--  <p> P??g. <span class="pagenum"></span> </p>  --}}
    </footer>

    <p class="titulopdf"><strong>CARTILLA DE INFORMACION <br> (INVERSIONES)</strong></p>
    
    <div class="cuerpo">
       
          <p>LA CORPORACION NACIONAL EMPRESARIAL POSIBLE EIRL con RUC: 20605055801 con direcci??n en Jr. Miguel Grau N??552, distrito de Huamachuco, provincia de S??nchez Carri??n, departamento de La Libertad, en adelante <strong>POSSIBLE</strong> , ha recibido de
   
            .................................. ............................. de importe de ........................., que han sido invertidos en su Cuenta N??:...................... y que devengar?? intereses a una Tasa de Inter??s Compensatoria Efectiva Anual (TEA en base a un a??o de 360 d??as) fija de ?????????????????? el monto total de intereses a pagar al vencimiento (s??lo para INVERSIONES RENOVABLES) es: ????????????.. <br>
            La TREA es aquella que permite igualar el monto que se ha depositado con el valor actual del monto que efectivamente se recibe al vencimiento del plazo, considerando todos los cargos por comisiones y gastos, incluidos   los   seguros, cuando   corresponda, y   bajo   el   supuesto   de   cumplimiento   de   todas   las condiciones, la TREA es: <br>
            El Plazo (s??lo para INVERSIONES RENOVABLES) es: ????????????????????????????????? d??as. <br>
El per??odo de pago de intereses (s??lo para INVERSIONES RENOVABLES) es: ????????????????????????????????? <br>
La fecha de vencimiento (s??lo para INVERSIONES RENOVABLES) es: ?????????????????????????????????????????? <br>


        </p>


      <p><strong> Saldo m??nimo de equilibrio para obtener rendimiento es: desde un sol o su equivalente en moneda extranjera,</strong> porque en condiciones de utilizaci??n ordinaria de la cuenta no se cobran comisiones ni gastos. El Saldo M??nimo de Equilibrio variar?? en la medida que el cliente haga uso de los servicios detallados en la presente cartilla o se produzcan las condiciones por las cuales se cobran las comisiones o gastos se??alados en el Tarifario. La variaci??n est?? en funci??n del monto de la comisi??n o gasto que corresponda.</p>
      <p><strong> Reconocimiento de Intereses</strong> (s??lo para INVERSIONES RENOVABLES): Si la inversi??n es cancelada antes de 30 d??as de su apertura, no generar?? intereses. Si dicha cuenta es cancelada luego de 30 d??as contados a partir de la fecha de su apertura, pero con anterioridad al plazo pactado, se aplicar?? la Tasa de Inter??s Efectiva Anual m??nima que se encuentre vigente para INVERSIONES MOVILES en la fecha de la cancelaci??n. <br>
       <strong> Canales para retiro de dinero: </strong>Red de Agencias (Sin Costo). <br>
      <strong>  Requisitos para realizar retiros: </strong>Presentar DNI, Pasaporte o Carnet de Extranjer??a vigentes.
       Las comisiones y/o gastos a cobrar son las establecidas seg??n Tarifario vigente, el mismo que se encuentra disponible en nuestra red de Agencias. Las modificaciones de estos conceptos que afecten al cliente respecto a lo pactado, deber?? ser comunicado con una anticipaci??n no menor a cuarenta y cinco (45) d??as indicando la fecha o el momento, a partir del cual, la modificaci??n entrar?? en vigencia.
       
    </p>
      <p>El CLIENTE, declara haber recibido y le??do en su integridad la presente Cartilla de Informaci??n y el Contrato de INVERSIONES RENOVABLES de <strong>POSSIBLE</strong> , As?? mismo acepta que, han sido absueltas todas sus dudas y preguntas, suscribiendo el presente documento y el contrato con absoluto conocimiento de sus alcances en cuanto a derechos, obligaciones y responsabilidades contenidas.

    </p>
      <p>_______________________/_______ de ____________________ del 20____</p>

      <hr>
      {{-- 2do Word a partir de ac?? --}}
      <p class="titulopdf"><strong>CONTRATO DE INVERSIONES</strong> </p>
      <p>La persona o personas que suscriben el presente documento, en adelante EL CLIENTE, declara(n) conocer y aceptar desde ya los t??rminos y condiciones siguientes que rigen sus relaciones con de <strong> LA CORPORACION NACIONAL EMPRESARIAL POSIBLE EIRL con RUC: 20605055801,</strong> con direcci??n en Jr. Miguel Grau N??552, distrito de Huamachuco, provincia de S??nchez Carri??n, departamento de La Libertad, en adelante <strong>POSSIBLE</strong>,  ratificando su aceptaci??n mediante firma y huella digital en el caso de contrataciones escritas o mediante alg??n mecanismo de autenticaci??n o una combinaci??n de ellos (tales como identificaci??n biom??trica, ingreso de claves o contrase??as, firma o certificado digital, entre otros) si se trata de una contrataci??n electr??nica, dejando constancia que ha sido previamente informado de los alcances e implicancias del presente contrato, habiendo sido absueltas todas las dudas y consultas que podr??a haber tenido, no pudiendo alegar su desconocimiento en ning??n caso. <br>
        POSSIBLE se encuentra facultada por EL CLIENTE para poder efectuar, respecto a cualquiera de las cuentas, inversiones o valores que mantenga en la misma, cualquiera de las siguientes operaciones a:
    </p>
    <ol type="1" class="cuerpo">
        <li></li>
        <p>Cargar el costo de los servicios, comisiones, seguros, tributos y gastos de cargo de EL CLIENTE estipulados en la Cartilla de Informaci??n, en cualquiera de las cuentas, inversiones y/o valores que ??ste mantenga en POSSIBLE, independientemente de si ??stas est??n provistas o no de fondos. <br>
            POSSIBLE est?? facultada a cargar en cualquiera de las cuentas, inversiones, y/o valores de EL CLIENTE, las comisiones, gastos o tributos derivados de operaciones practicadas por orden de autoridades competentes tales como, embargos, retenciones, entre otros. De igual manera, EL CLIENTE faculta a POSSIBLE a cargar el costo de las comisiones, tributos y gastos derivados de transferencias o disposici??n de fondos en plazas distintas, siempre que dichos conceptos se encuentren incluidos en la Cartilla Informativa y en cualquiera de los tarifarios de POSSIBLE. Estos conceptos tambi??n se describir??n en el tarifario de POSSIBLE y estar??n a disposici??n EL CLIENTE en todas las oficinas de atenci??n al p??blico, en su p??gina web y otros canales de atenci??n que POSSIBLE habilite para tal fin. <br>
            La realizaci??n de operaciones har?? presumir que EL CLIENTE se ha informado sobre los costos e implicancias de los servicios informaci??n que est?? a disposici??n de EL CLIENTE en los distintos canales que tiene POSSIBLE tales como su p??gina web y agencias de atenci??n al p??blico.
            </p>
        <li></li>
        <p>Cargar en las cuentas pasivas, inversiones o valores de EL CLIENTE cualquier obligaci??n directa o indirecta, vencida y exigible de la que pudiera resultar deudor ante POSSIBLE, sea por capital, intereses, comisiones, tributos o gastos.  <br>
            Sin perjuicio del derecho de compensaci??n que tiene POSSIBLE, EL CLIENTE podr?? constituir primera y preferente garant??a mobiliaria a favor de POSSIBLE sobre los fondos existentes en sus cuentas, inversiones o valores en poder de POSSIBLE para garantizar cualquier obligaci??n de su cargo, dentro de los alcances la Ley de la Garant??a Mobiliaria, Ley 28677, as?? como las normas que la modifiquen o la sustituyan. La garant??a mobiliaria afecta todos los fondos de las cuentas, inversiones o valores y los intereses que se generen exceptu??ndose aquellos que no sean permitidos por la Ley de Garant??a Mobiliaria ??? Ley 28677, as?? como las normas que la modifiquen o a sustituyan.
            </p>
        <li></li>
        <p>Abonar o cargar en las cuentas, inversiones o valores de EL CLIENTE, las sumas que resulten de m??s o de menos por errores que se hubieran registrado en la cuenta de EL CLIENTE, autorizando ??ste a aplicarlas inmediatamente. POSSIBLE informar?? a EL CLIENTE a trav??s de una comunicaci??n escrita, llamada telef??nica o env??o de un correo electr??nico en un plazo no mayor de (5) d??as ??tiles, el motivo que origin?? el cargo o abono.</p>
        <li></li>
        <p>Realizar por cuenta y cargo de EL CLIENTE las operaciones de compra o venta de moneda extranjera que POSSIBLE estime necesario para el cumplimiento de las obligaciones de EL CLIENTE, y/o los requerimientos exigidos por las autoridades competentes, y/o los gastos y comisiones que correspondan a las operaciones de EL CLIENTE, aplicando  el tipo de cambio respectivo que POSSIBLE tenga vigente al momento de la operaci??n, no asumiendo POSSIBLE responsabilidades por la diferencia de cambio que resulte como consecuencia de la respectiva operaci??n</p>
        <li></li>
        <p>EL CLIENTE es el ??nico autorizado para operar sobre sus cuentas, inversiones o valores. En caso lo haya autorizado el cliente, la realizaci??n de operaciones a trav??s de terceras personas, se entender??n efectuadas bajo su absoluta y exclusiva responsabilidad y ser??n consideradas como realizadas por EL CLIENTE. Salvo que POSSIBLE demuestre la responsabilidad del CLIENTE, ??ste ??ltimo no ser?? responsable de ninguna p??rdida por las operaciones realizadas en los siguientes casos: (i) por el funcionamiento defectuoso de los canales o sistemas puestos a disposici??n del CLIENTE por POSSIBLE para efectuar operaciones; (ii) cuando se haya producido la suplantaci??n del usuario en las oficinas; y (iii) dem??s supuestos establecidos en la normativa vigente aplicable.</p>
        <li></li>
        <p>Trat??ndose de operaciones realizadas por representantes o apoderados de EL CLIENTE, POSSIBLE solo reconocer?? como tales a aquellos que estuvieren previamente registrados ante POSSIBLE. Requerir??n de la presentaci??n de los instrumentos pertinentes debidamente inscritos en los Registros P??blicos, de ser el caso, en un plazo no mayor a cinco (5) d??as h??biles previos a cualquier operaci??n que realicen en POSSIBLE. Entre tanto, POSSIBLE observar?? el r??gimen de poderes que tenga registrado, sin que las modificaciones no comunicadas a POSSIBLE surtan efecto contra ??sta, aun cuando estuvieren inscritas en Registros P??blicos. La revisi??n de la documentaci??n podr?? estar sujeta al pago de las comisiones establecidas en el tarifario vigente al momento que se produzca la revisi??n. En caso de duda sobre la legitimidad de la representaci??n con que se opere en las cuentas de EL CLIENTE, POSSIBLE podr?? suspender la ejecuci??n de la orden o instrucci??n hasta que se resuelva ??sta, sin que tal suspensi??n represente responsabilidad alguna para POSSIBLE. El control de las condiciones especiales de los poderes y facultades, as?? como su observancia por parte de estos representantes, corresponde exclusivamente a EL CLIENTE. Si el titular de la cuenta es menor de edad, analfabeto, incapaz relativo o absoluto, los retiros ser??n hechos a trav??s de sus representantes legalmente autorizados. Adicionalmente, para los retiros de la cuenta de un menor de edad, se requerir?? la orden judicial respectiva.</p>
        <li></li>
        <p>EL CLIENTE se??ala como domicilio, el indicado en este contrato, donde se le cursar?? todas las comunicaciones que fuesen necesarias. En el caso de variaci??n de su domicilio se obligan a comunicarlo por escrito a POSSIBLE (ya sea por medios f??sicos o virtuales) en un plazo m??ximo de 30 d??as, de producida la variaci??n. Para que dicha variaci??n sea v??lida y oponible a POSSIBLE, se deber?? adjuntar a la variaci??n, del nuevo domicilio contractual, los documentos que permitan validar el nuevo domicilio que debe ser cierto y estar ubicado en el radio urbano de ??sta ciudad; de lo contrario las notificaciones y comunicaci??n dirigidas al antiguo domicilio ser??n plenamente v??lidas y eficaces. POSSIBLE se reserva el derecho de realizar las verificaciones respectivas a fin de determinar la existencia y veracidad de la variaci??n del domicilio.</p>
        <p>Sin perjuicio de ello, las comunicaciones con EL CLIENTE podr??n realizarse por medios directos o indirectos:</p>
        <ol type="a" class="cuerpo">
            <li></li>
            <p><strong> Por medios directos:</strong> Son comunicaciones dirigidas a EL CLIENTE que permiten dejar constancia de su env??o mediante cualquiera de los medios f??sicos o mediante el uso de aparatos electr??nicos que POSSIBLE tenga a su disposici??n, tales como cartas dirigidas al domicilio, correos electr??nicos previamente informados por EL CLIENTE para esta cuenta y/o contrato, anotaciones en los estados de cuenta, comunicaciones telef??nicas, mensajes de texto (SMS), mensajer??a instant??nea como Whatsapp, Telegram u otros de similar naturaleza. <br>
                Siendo que, s??lo por medios directos POSSIBLE podr?? comunicar las modificaciones referentes a: (i) Tasas de inter??s, penalidades, comisiones y gastos cuando dichas modificaciones generen un perjuicio a los usuarios, (ii) Modificaciones a la TREA y/o el saldo m??nimo de equilibrio, en el caso de productos pasivos, (iii) La resoluci??n del contrato por causal distinta al incumplimiento o distinta a los supuestos de resoluci??n por normas prudenciales, (iv) La limitaci??n o exoneraci??n de responsabilidad por parte de POSSIBLE; y (v) La incorporaci??n de servicios que no se encuentren directamente relacionados al producto o servicio financiero contratado.
                </p>
            <li></li>
            <p><strong>Por medios indirectos:</strong>  Son comunicaciones dirigidas al p??blico en general, mediante publicaciones en la p??gina web y/o en diarios, avisos colocados en las agencias de atenci??n al p??blico, redes sociales, vouchers de pago u otros de difusi??n masiva.</p>

        </ol>
            
        <li></li>
        <p>Dependiendo del servicio contratado, POSSIBLE enviar?? informaci??n directamente relacionada a los productos que se regulan mediante el presente Contrato a EL CLIENTE por cualquiera de los medios directos de comunicaci??n antes mencionados y de manera autom??tica sin costo alguno. En el caso espec??fico de los estados de cuenta, POSSIBLE los remitir?? o pondr?? a disposici??n de EL CLIENTE a trav??s de medios electr??nicos, salvo que a solicitud expresa del Cliente se deba enviar por medios f??sicos (al domicilio de EL CLIENTE), en cuyo caso se cobrar?? la comisi??n respectiva por el env??o. EL CLIENTE podr?? solicitar los registros de los movimientos de estas cuentas. Sin perjuicio de lo antes indicado, el detalle de los abonos, retiros, intereses y otros movimientos, podr?? ser consultado por EL CLIENTE o su Apoderado debidamente facultado, directamente en las oficinas en manera presencial. <br>
            De existir una contrataci??n por medios no presenciales o por medios no escritos, EL CLIENTE acepta como v??lidas las transacciones y contrataci??n de productos y/o servicios a trav??s de los canales virtuales o medios electr??nicos que POSSIBLE comunique y ponga a su disposici??n, tales como (i) mediante la plataforma de la p??gina web de POSSIBLE y/o su aplicaci??n m??vil, con el uso por parte de EL CLIENTE de sus claves de acceso y/o contrase??as, (ii) mensajes de correo electr??nico a y/o desde la direcci??n de correo electr??nico que EL CLIENTE tenga registrado en POSSIBLE, y otros medios que POSSIBLE ponga a su disposici??n.
            </p>
            <p>POSSIBLE dispondr?? de los mecanismos y medidas de seguridad en los medios utilizados para la contrataci??n no presencial o por medios no escritos, seg??n el canal que se utilice y cumplir?? con la normativa vigente sobre contrataci??n virtual. En este sentido, POSSIBLE en un plazo no mayor a 15 d??as calendarios remitir?? a EL CLIENTE el Contrato, as?? como cualquier otra informaci??n que corresponda en conformidad a la normativa vigente. Dicha entrega puede realizarse en el domicilio de EL CLIENTE o a trav??s de medios electr??nicos, siempre que permitan su lectura, impresi??n, conservaci??n y reproducci??n sin cambios.</p>
        <li></li>
        <p>EL CLIENTE exime a POSSIBLE de la responsabilidad por los da??os y perjuicios en caso de suspensi??n de los servicios, producto del funcionamiento defectuoso o interrupci??n de la operatividad de sus instalaciones o equipos, cuando estas fallas o interrupciones sean consecuencia de hecho fortuito o de fuerza mayor no imputable a POSSIBLE.</p>
        <li></li>
        <p>Cualquier error o inexactitud que advierta EL CLIENTE, en la aplicaci??n o inaplicaci??n de abonos o cargos, deber?? comunicarlo a POSSIBLE, de inmediato a trav??s de los siguientes canales de atenci??n al usuario, para la revisi??n y atenci??n correspondiente seg??n los controles internos y liquidaci??n que POSSIBLE efect??e a nuestra red de oficinas de atenci??n al p??blico o al correo electr??nico consultas@corporacionposible.com</p>
        <li></li>
        <p>Las operaciones que realice EL CLIENTE con POSSIBLE y ??sta por cuenta del primero, al igual que todos los servicios que le sean prestados y todos los contratos que celebren, quedan sometidos sin excepci??n alguna, a las normas que resulten aplicables a los t??rminos y condiciones que lo regulen, as?? como las disposiciones y normas pertinentes de la Ley de T??tulos Valores, C??digo Civil y aquellas que la sustituyan.</p>
        <li></li>
        <p>EL CLIENTE se??ala con car??cter de declaraci??n jurada que la informaci??n proporcionada a POSSIBLE en virtud del presente contrato es ver??dica, autorizando a POSSIBLE a confirmarla pudi??ndole solicitar mayor informaci??n. EL CLIENTE se compromete a brindar la informaci??n necesaria y/o a comunicar a POSSIBLE cualquier cambio en la informaci??n proporcionada. Si se detectase la falsedad o inexactitud de la informaci??n, en aplicaci??n de las normas prudenciales POSSIBLE podr?? resolver autom??ticamente el presente contrato. Por lo tanto, de resultar falsa cualquier informaci??n proporcionada se encontrar??n sujetos a las responsabilidades penales del caso. EL CLIENTE faculta desde ya a POSSIBLE a informar a las autoridades respectivas sobre la realizaci??n de cualquier operaci??n que, a su solo criterio y calificaci??n, constituya una transacci??n sospechosa o tenga las caracter??sticas de la misma, as?? como a bloquear sus cuentas por mandato de autoridad competente, quedando por tanto liberada POSSIBLE de toda responsabilidad. Asimismo, si POSSIBLE cuenta con indicios que las transacciones pudieran constituir o estar relacionadas con actividades il??citas, proceder?? a comunicarlo a la Unidad de Inteligencia Financiera del Per??.</p>
        <li></li>
        <p>Las cuentas de inversiones devengar??n la tasa de inter??s de rendimiento vigente en POSSIBLE para este tipo de operaciones, adem??s de las comisiones y gastos que POSSIBLE tenga establecidos, los cuales se detallan en la Cartilla de Informaci??n que forma parte del presente documento. Asimismo, POSSIBLE podr?? aplicar nuevas comisiones y gastos previa comunicaci??n al cliente con cuarenta y cinco (45) d??as de anticipaci??n a trav??s de los medios directos establecidos. <br>
            La tasa de rendimiento efectivo anual (TREA) es aquella que permite comparar el rendimiento total de un producto pasivo, considerando todos los cargos por comisiones y gastos, incluidos los seguros, cuando corresponda, y bajo el supuesto de cumplimiento de todas las condiciones pactadas. No se incluyen en este c??lculo aquellos pagos por servicios provistos por terceros que directamente sean pagados por EL CLIENTE ni los tributos que resulten aplicables.
            
            </p>
            <p>EL CLIENTE Y POSSIBLE acuerdan conocer y aceptar que solo podr?? procederse a la modificaci??n de la tasa de inter??s pactada en las Inversiones Renovables cuando se renueve la inversi??n. Para tal efecto, POSSIBLE deber?? comunicar previamente cualquier variaci??n de las condiciones pactadas, si ??stas suponen un perjuicio a EL CLIENTE. <br>
                En caso de los dem??s productos pasivos distintos al de Inversiones Renovables, POSSIBLE podr?? modificar la tasa de inter??s, comisiones, gastos y otras estipulaciones contractuales cuando considere que las condiciones del mercado, operativas, crediticias o de riesgo de EL CLIENTE as?? lo ameriten. En tal sentido las modificaciones sobre reducci??n de inter??s, variaci??n en las comisiones y/o gastos y otras estipulaciones contractuales de EL CLIENTE, deber??n ser comunicadas en un plazo previo de cuarenta y cinco (45) d??as calendario a trav??s de medios directos de comunicaci??n, indicando de manera expresa que se trata de una modificaci??n en las condiciones pactadas, destacando aquellos conceptos que ser??n materia de cambio y se??alando expresamente en qu?? consisten, a fin de permitir a los usuarios tomar conocimiento de ellos.
                
                </p>
                <p>EL CLIENTE reconoce haber sido instruido(a) sobre la forma de c??lculo y el monto de los gastos, las comisiones y otras condiciones contractuales de las cuentas pasivas. <br>
                    Asimismo, EL CLIENTE reconoce haber sido instruido sobre la forma de c??lculo y el monto de los intereses de las cuentas distintas a las Inversiones Renovables. <br>
                    Las modificaciones sobre reducci??n de intereses por las causales descritas l??neas arriba, variaci??n en las comisiones y/o gastos de EL CLIENTE as?? como las modificaciones a la TREA y/o el saldo m??nimo de equilibrio para obtener rendimiento y resoluci??n del contrato por causal distinta al incumplimiento y la limitaci??n o exoneraci??n de responsabilidad por parte de POSSIBLE, deber??n ser comunicadas con una anticipaci??n no menor a cuarenta y cinco (45) d??as calendarios previos a la modificaci??n, indicando la fecha o el momento a partir del cual la modificaci??n entrar?? en vigencia mediante los medios de comunicaci??n directos, tales como comunicaciones escritas al domicilio de EL CLIENTE, correos electr??nicos, estados de cuenta o comunicaciones telef??nicas. <br>
                    En dichas comunicaciones previas deber?? indicarse de manera expresa:
                </p>
                <ol type="a" class="cuerpo">
                    <li></li>
                    <p>Que se trata de una modificaci??n en las condiciones pactadas, destacando aquellos conceptos que ser??n materia de cambio y se??alando expresamente en qu?? consisten, a fin de permitir a los usuarios tomar conocimiento de ellos; y,</p>
                    <li></li>
                    <p>Que EL CLIENTE puede dar por concluida la relaci??n contractual. <br>
                        En el caso de modificaciones contractuales unilaterales que no respondan a obligaciones normativas y que resulten perjudiciales, EL CLIENTE tendr?? el derecho de resolver el presente contrato cuando lo estime conveniente, para lo cual no deber?? mantener deuda vigente con POSSIBLE asimismo llenar?? formulario proporcionado por POSSIBLE en la p??gina Web.
                        </p>

                </ol>

        <li></li>
        <p>POSSIBLE se encuentra facultada a no contratar, resolver y/o modificar el presente contrato, respecto a condiciones distintas a tasa de inter??s, comisiones y gastos, en caso de advertir los siguientes supuestos:</p>
        <ol type="a" class="cuerpo">
            <li></li>
            <p>SI POSSIBLE verifica que la informaci??n proporcionada por EL CLIENTE es inexacta, incompleta, falsa o inconsistente con la informaci??n previamente declarada o entregada por el usuario y repercuta negativamente en el riesgo de reputaci??n o legal que enfrenta POSSIBLE.</p>
            <li></li>
            <p>Si EL CLIENTE realiza operaciones sospechosas de lavado de activos o de financiamiento del terrorismo y/o por consideraciones del perfil del cliente vinculadas al sistema de prevenci??n del lavado de activos o del financiamiento del terrorismo conforme la norma prudencial.</p>
            <li></li>
            <p>Causa referidas a la administraci??n del riesgo de sobreendeudamiento de deudores minoristas. <br>
                En los mencionados casos, POSSIBLE remitir?? una comunicaci??n escrita formal al domicilio de EL CLIENTE dentro de los siete (7) d??as calendarios posteriores a la resoluci??n o modificaci??n, seg??n corresponda.
                
                </p>

        </ol>
        
        
        <li></li>
        <p>POSSIBLE podr?? cerrar las cuentas en forma inmediata y resolver el contrato, comunicando previamente de tal decisi??n a EL CLIENTE por escrito o v??a correo electr??nico, en cualquiera de los siguientes casos:</p>
        <ol type="a" class="cuerpo">
            <li></li>
            <p>Cierre previsto por normativa vigente.</p>
            <li></li>
            <p>Cuando, sin autorizaci??n de POSSIBLE, la(s) cuenta(s) se utilice(n) para colectas, recaudaciones o inversiones hechos por terceras personas.</p>
            <li></li>
            <p>Cuando se realicen operaciones que puedan perjudicar a POSSIBLE, a EL CLIENTE o a otros clientes de POSSIBLE. </p>
            <li></li>
            <p>Cuando la(s) cuenta(s) est??(n) siendo utilizada(s) por personas no autorizadas por EL CLIENTE.</p>
            <li></li>
            <p>Si a criterio de POSSIBLE existe duda o conflicto respecto de la legitimidad, legalidad, vigencia o alcances de las facultades de los representantes de EL CLIENTE, o sobre la legalidad de la procedencia de los fondos depositados en la(s) cuenta(s).</p> 
            <li></li>
            <p>Cuando EL CLIENTE incumpla cualquiera de sus obligaciones conforme a este contrato.</p>
            <li></li>
            <p>En el caso que los fondos de cualquier cuenta o inversi??n permanezcan inactivos durante 10 a??os o m??s, sin que se hagan nuevas imposiciones, ni se retire intereses o medie reclamaci??n durante ese lapso. <br>
                La(s) cuenta(s) se cerrar??(n) transcurridos quince (15) d??as naturales desde realizada la comunicaci??n a EL CLIENTE, y en el caso de las cuentas cerradas por aplicaci??n de los supuestos establecidos en los incisos a), b), c), d), e) y f), si hubiera un saldo a favor de EL CLIENTE en la cuenta cerrada, este se mantendr?? a disposici??n en Plataforma de Agencias sin generar ning??n inter??s.
                </p>


        </ol>
        
        <li></li>
        <p>EL CLIENTE podr?? cerrar la cuenta y resolver este contrato, a su sola decisi??n en cualquier momento, acerc??ndose a la red de agencias de POSSIBLE a nivel nacional o de existir una contrataci??n por medios no presenciales o por medios no escritos, podr?? tambi??n resolver este contrato mediante la plataforma de la p??gina web de POSSIBLE y/o su aplicaci??n m??vil, con el uso por parte de EL CLIENTE de sus claves de acceso y/o contrase??as. En el caso de Inversiones M??viles o Inversiones Renovables que se hayan otorgado en garant??a mobiliaria, EL CLIENTE deber??, cancelar en forma previa toda obligaci??n que mantenga pendiente con POSSIBLE. <br>
            El cierre unilateral de la cuenta constituir?? el ejercicio de un derecho que ambas partes se otorgan rec??procamente.
            </p>
            <hr>
        <li></li>
        <p>POSSIBLE cuenta con un sistema de Gesti??n de Conducta de Mercado, el cual recibir?? sus reclamos, los cuales ser??n respondidos en un plazo m??ximo de treinta (30) d??as calendario; Asimismo, si EL CLIENTE no se encuentra de acuerdo con la respuesta emitida por POSSIBLE, podr?? recurrir ante INDECOPI (www.indecopi.gob.pe).</p>
        <li></li>
        <p>LAS PARTES acuerdan someterse a la jurisdicci??n de los jueces y tribunales del lugar de celebraci??n del presente contrato. Las partes se??alan como sus domicilios los consignados en el presente contrato, a los cuales cursar??n todas las comunicaciones contractuales o notificaciones judiciales o extrajudiciales.</p>
    </ol>
    <br>
      <p><strong>INVERSIONES MOVILES:</strong></p>
      <ol type="1" class="cuerpo">
          <li></li>
          <p>Se entiende por Inversiones M??viles a las inversiones que pueden ser retirados por su (s) titular (es), en cualquier momento. Estas cuentas pueden ser en moneda nacional o en moneda extranjera.</p>
          <li></li>
          <p>Las Inversiones M??viles pueden ser constituidos por personas naturales o jur??dicas, inclusive por personas analfabetas o incapacitadas y tambi??n por menores de edad, observando las disposiciones legales vigentes para cada caso.</p>
          <li></li>
          <p>Toda cantidad que se abone y/o retire de la cuenta de Inversiones M??viles constar?? en hojas sueltas o soportes mec??nicos y/o inform??ticos que se ponga a disposici??n EL CLIENTE. La tarjeta o documento que sustente la cuenta de Inversiones M??viles es personal e intransferible.</p>
          <li></li>
          <p>. EL CLIENTE tiene el derecho a solicitar el extracto de todos los movimientos producidos en sus inversiones durante el mes. POSSIBLE enviar?? los estados de cuenta al cliente por medios electr??nicos (correo electr??nico) de manera autom??tica sin costo alguno, y/o por medios f??sicos, a solicitud expresa del CLIENTE (al domicilio del CLIENTE), en cuyo caso se cobrar?? la comisi??n respectiva por el env??o. Asimismo, POSSIBLE podr?? incluir la mencionada informaci??n a disposici??n de EL CLIENTE mediante la plataforma de la p??gina web de POSSIBLE y/o su aplicaci??n m??vil.</p>
          <li></li>
          <p>Abierta una cuenta de Inversiones M??viles, EL CLIENTE podr?? efectuar retiros personales o por intermedio de su(s) representaste(es) legal(es) o apoderados(s). POSSIBLE atender?? los retiros a simple solicitud. </p>
          <li></li>
          <p>Los retiros de las cuentas de Inversiones M??viles cuyos titulares sean menores de edad e incapaces, para ser atendidos requerir??n de la intervenci??n de sus representantes legales, previa autorizaci??n judicial.</p>
          <li></li>
          <p>La tasa de inter??s, la forma de capitalizaci??n y abono de los intereses ser??n fijados por POSSIBLE conforme a los saldos acreedores y dem??s criterios que tenga establecidos, las cuales se encuentran detalladas en la p??gina web de POSSIBLE y en la Cartilla de Informaci??n que forma parte del presente contrato.</p>

      </ol>
      <br>
<hr>
      <p><strong>INVERSIONES RENOVABLES</strong></p>
      <ol type="1" class="cuerpo">
          <li></li>
          <p>Las Inversiones Renovables se mantendr??n durante el plazo acordado, sin que sea POSSIBLE realizar retiros o nuevas imposiciones dentro de dicho lapso, ni operar como cuentas de Inversiones M??viles.</p>
          <li></li>
          <p>El pago de intereses podr?? efectuarse al final del plazo o de manera mensual.</p>
          <li></li>
          <p>Vencido el plazo fijado para la inversi??n y ante la falta de instrucci??n de EL CLIENTE, POSSIBLE renovar?? autom??ticamente la inversi??n por el plazo pactado originalmente y en las condiciones que en la oportunidad de su renovaci??n tenga establecidas para esa clase inversiones en su tarifario, las cuales se encontrar??n publicadas en la p??gina web de POSSIBLE y en todas las agencias a nivel nacional. </p>
          <li></li>
          <p>La tasa de inter??s, comisiones, gastos y dem??s condiciones de las Inversiones Renovables ser??n fijados por POSSIBLE, de acuerdo al monto y al plazo efectivo de la inversi??n, conforme consta en la Cartilla de Informaci??n. POSSIBLE podr?? establecer diversas tasas de inter??s para las Inversiones Renovables, seg??n su monto, plazo y naturaleza, lo que estar?? expresado en la TREA (Tasa de Rendimiento Efectivo Anual).</p>
          <li></li>
          <p>EL CLIENTE debe mantener la Inversi??n Renovable, por el plazo fijado, no pudiendo hacerse retiros (por EL CLIENTE o por personas legitimadas) ni abonos durante el plazo pactado, ya que ello implica su resoluci??n autom??tica y la aplicaci??n de la penalidad correspondiente, seg??n se detalla a continuaci??n: En caso que EL CLIENTE solicite la cancelaci??n anticipada durante los primeros treinta (30) d??as calendario contados desde que se abri?? la cuenta, la inversi??n no generar?? los intereses. Si dicha cuenta es cancelada luego de 30 d??as calendarios contados a partir de la fecha de su apertura, pero con anterioridad al plazo pactado, se aplicar?? la menor tasa de Inversiones M??viles que se encuentre vigente a la fecha de la cancelaci??n, publicada a su vez en el tarifario, web y en la red de agencias. POSSIBLE no aceptar?? la cancelaci??n anticipada de Inversiones Renovables que garanticen cualquier otro cr??dito vigente contratado con POSSIBLE, salvo sustituci??n por parte de EL CLIENTE con otra garant??a de iguales caracter??sticas, la cual deber?? ser aceptada previamente por POSSIBLE. De producirse la resoluci??n autom??tica por retiros dispuestos por personas legitimadas y de haber un saldo resultante, EL CLIENTE faculta expresamente a POSSIBLE para renueve la inversi??n por el mismo plazo, aplic??ndosele la tasa de Inversiones Renovables seg??n el tarifario vigente a la fecha de la renovaci??n, tomando en consideraci??n el mismo plazo de la Inversi??n Renovable primigenia.</p>


      </ol>
      <br>
<hr>
      <p><strong>DECLARACIONES FINALES</strong></p>
      <ol type="1" class="cuerpo">
          <li></li>
          <p>EL CLIENTE declara que el presente contrato, as?? como la Cartilla Informativa y cronogramas de ser el caso, le fueron entregados para su lectura, que se absolvieron sus consultas y que firma con conocimiento pleno de las condiciones establecidas en los referidos documentos.</p>
          <li></li>
          <p>La nulidad o invalidez, total o parcial, de una o m??s disposiciones contenidas en este contrato no afectar??n la validez de las dem??s disposiciones contenidas en el mismo, debi??ndose considerar como inexistentes ??nicamente las cl??usulas declaradas nulas o invalidas, total o parcialmente.</p>
          <li></li>
          <p>Queda establecido que este documento sustituye a todo acuerdo contractual previo referido a la prestaci??n de los servicios materia del presente contrato, a partir de la fecha de suscripci??n del mismo.

        </p>


      </ol>
      <br>
      <p><strong>EL CLIENTE</strong> <br>
        Nombre/Raz??n Social: <br>
        DNI o RUC:______________________________ <br>
        Direcci??n:_____________________________________________________________________</p>
        <br>
        <br>
        <br>
        <br>
      <p>Firma y huella</p>
      <p class="der">__________________,________ de __________________ del ___________.</p>
      <p></p>
      <p></p>

     

</div>

</body>
</html>