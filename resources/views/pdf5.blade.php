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
            .izq{
                margin-left: 100px;
            }
            .cent{
                margin: auto;
                width: 50%;
                font: bold;
            }
            .der{
                line-height: 10px;
            }


         body {
            font-family: 'Calibri' , sans-serif;
            font-size: 14px; 
        } 
        .titulopdf{
            text-align: center;
        }
        .newfirm{
         width: 40%; 
        margin: 0px 15px;
        display: inline-block;
        vertical-align: top;

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
        }
    </style>

    <header>
        <img src="img/logo.png" alt="" width="100">
        <p class="cabder">Código Cliente:______________ </p>
    </header>

    <footer>
       <p> Pág. <span class="pagenum"></span> </p>
    </footer>

    <p class="titulopdf"><strong> <u>CONTRATO DE SERVICIOS FINANCIEROS</u></strong></p>
    <div class="cuerpo">

        <p>La persona o personas que suscriben el presente documento, en adelante EL CLIENTE, declara(n) conocer y aceptar desde ya los términos y condiciones siguientes que rigen sus relaciones con de <strong> LA CORPORACION NACIONAL EMPRESARIAL POSIBLE EIRL con RUC: 20605055801,</strong> con dirección en Jr. Miguel Grau N°552, distrito de Huamachuco, provincia de Sánchez Carrión, departamento de La Libertad, en adelante <strong>POSSIBLE,</strong>  ratificando su aceptación mediante firma y huella digital en el caso de contrataciones escritas o mediante algún mecanismo de autenticación o una combinación de ellos (tales como identificación biométrica, ingreso de claves o contraseñas, firma o certificado digital, entre otros) si se trata de una contratación electrónica, dejando constancia que ha sido previamente informado de los alcances e implicancias del presente contrato, habiendo sido absueltas todas las dudas y consultas que podría haber tenido, no pudiendo alegar su desconocimiento en ningún caso. </p>
        <ol type="1" class="cuerpo" >
            
        <li></li>
        <p>Los depósitos del EL CLIENTE cuentan con la cobertura del Fondo de Seguro de Depósitos (FSD) el cual es una institución cuyo objetivo es proteger a los depositantes en caso la institución financiera miembro del FSD donde mantiene sus depósitos quiebre, de acuerdo a lo establecido en la Ley General del Sistema Financiero y del Sistema de Seguros y Orgánica de la Superintendencia de Banca y Seguros, Ley N° 26702 y sus modificatorias teniendo un máximo de cobertura establecido en la ley.</p>
        
        <li></li>
        
        POSSIBLE se encuentra facultada por EL CLIENTE para poder efectuar, respecto a cualquiera de las cuentas pasivas, depósitos o valores que mantenga en la misma, cualquiera de las siguientes operaciones a: <br>
            <ol type="a" class="cuerpo">
        <li></li>
        
        <p>Cargar el costo de los servicios, comisiones, seguros, tributos y gastos de cargo de EL CLIENTE estipulados en la Cartilla de Información, en cualquiera de las cuentas, depósitos y/o valores que éste mantenga en POSSIBLE, independientemente de si éstas estén provistas o no de fondos. Para los casos de cuentas CTS los cargos (comisiones y gastos) se efectuarán sobre los saldos de libre disposición.</p>
        
        <p>POSSIBLE está facultada a cargar en cualquiera de las cuentas, depósitos, y/o valores de EL CLIENTE, las comisiones, gastos o tributos derivados de operaciones practicadas por orden de autoridades competentes tales como, embargos, retenciones, entre otros. De igual manera, EL CLIENTE faculta a POSSIBLE a cargar el costo de las comisiones, tributos y gastos derivados de transferencias o disposición de fondos en plazas distintas, siempre que dichos conceptos se encuentren incluidos en la Cartilla Informativa y en cualquiera de los tarifarios de POSSIBLE. Estos conceptos también se describirán en el tarifario de POSSIBLE y estarán a disposición EL CLIENTE en todas las oficinas de atención al público, en su página web y otros canales de atención que POSSIBLE habilite para tal fin.</p>
        
        <p>La realización de operaciones hará presumir que EL CLIENTE se ha informado sobre los costos e implicancias de los servicios información que está a disposición de EL CLIENTE en los distintos canales que tiene POSSIBLE tales como su página web y agencias de atención al público.</p>
        <hr>
        <li></li>
        
        <p>Cargar en las cuentas pasivas, depósitos o valores de EL CLIENTE cualquier obligación directa o indirecta, vencida y exigible de la que pudiera resultar deudor ante POSSIBLE, sea por capital, intereses, comisiones, tributos o gastos. Igualmente, POSSIBLE podrá retener y aplicar a los adeudos de EL CLIENTE cualquier suma o valor que tenga en su poder o reciba a favor de EL CLIENTE por cualquier concepto, mediante la compensación, de conformidad con lo establecido en la Ley 26702, Ley General, en caso de incumplimiento de cualquiera de las obligaciones vencidas y exigibles de EL CLIENTE Conforme a los numerales10 y 11 del Art.132 de la Ley N° 26702, en adelante Ley General. En estos casos, POSSIBLE remitirá una comunicación escrita a EL CLIENTE informando la aplicación de dicha compensación dentro del plazo de 7 días hábiles posteriores a su aplicación, informándole las razones que motivaron la compensación, no serán objeto de compensación los activos legal o contractualmente declarados intangibles o excluidos de este derecho. </p>
        
        <p>Sin perjuicio del derecho de compensación que tiene POSSIBLE, EL CLIENTE podrá constituir primera y preferente garantía mobiliaria favor de POSSIBLE sobre los fondos existentes en sus cuentas, depósitos o valores en poder de POSSIBLE para garantizar cualquier obligación de su cargo, dentro de los alcances de la Ley General del sistema Financiero, Ley 26702 y Ley de la Garantía Mobiliaria, Ley 28677, así como las normas que la modifiquen o la sustituyan. La garantía mobiliaria afecta todos los fondos de las cuentas, depósitos o valores y los intereses que se generen exceptuándose aquellos que no sean permitidos
        por la Ley de Garantía Mobiliaria – Ley 28677, así como las normas que la modifiquen o a sustituyan. </p>
        
        <li></li>
        <p>
        Abonar o cargar en las cuentas, depósitos o valores de EL CLIENTE, las sumas que resulten de más o de menos por errores que se hubieran registrado en la cuenta de EL CLIENTE, autorizando éste a aplicarlas inmediatamente. POSSIBLE informará a EL CLIENTE a través de una comunicación escrita, llamada telefónica o envío de un correo electrónico en un plazo no mayor de (5) días útiles, el motivo que originó el cargo o abono. </p>
        <li></li>
        <p>
        Realizar por cuenta y cargo de EL CLIENTE las operaciones de compra o venta de moneda extranjera que POSSIBLE estime necesario para el cumplimiento de las obligaciones de EL CLIENTE, y/o los requerimientos exigidos por las autoridades competentes, y/o los gastos y comisiones que correspondan a las operaciones de EL CLIENTE, aplicando  el tipo de cambio respectivo que POSSIBLE tenga vigente al momento de la operación, no asumiendo POSSIBLE responsabilidades por la diferencia de cambio que resulte como consecuencia de la respectiva operación. </p>
        </ol>
        <li></li>
        <p>
        EL CLIENTE es el único autorizado para operar sobre sus cuentas, depósitos o valores. En caso lo haya autorizado el cliente, la realización de operaciones a través de terceras personas, se entenderán efectuadas bajo su absoluta y exclusiva responsabilidad y serán consideradas como realizadas por EL CLIENTE. Salvo que POSSIBLE demuestre la responsabilidad del CLIENTE, éste último no será responsable de ninguna pérdida por las operaciones realizadas en los siguientes casos: (i) por el funcionamiento defectuoso de los canales o sistemas puestos a disposición del CLIENTE por POSSIBLE para efectuar operaciones; (ii) cuando se haya producido la suplantación del usuario en las oficinas; y (iii) demás supuestos establecidos en la normativa vigente aplicable. </p>
       <hr>
        <li></li>
        <p>
        Tratándose de operaciones realizadas por representantes o apoderados de EL CLIENTE, POSSIBLE solo reconocerá como tales a aquellos que estuvieren previamente registrados ante POSSIBLE Requerirán de la presentación de los instrumentos pertinentes debidamente inscritos en los Registros Públicos, de ser el caso, en un plazo no mayor a cinco (5) días hábiles previos a cualquier operación que realicen en POSSIBLE. Entre tanto, POSSIBLE observará el régimen de poderes que tenga registrado, sin que las modificaciones no comunicadas a POSSIBLE surtan efecto contra ésta, aun cuando estuvieren inscritas en Registros Públicos. La revisión de la documentación podrá estar sujeta al pago de las comisiones establecidas en el tarifario vigente al momento que se produzca la revisión. En caso de duda sobre la legitimidad de la representación con que se opere en las cuentas de EL CLIENTE, POSSIBLE podrá suspender la ejecución de la orden o instrucción hasta que se resuelva ésta, sin que tal suspensión represente responsabilidad alguna para POSSIBLE. El control de las condiciones especiales de los poderes y facultades, así como su observancia por parte de estos representantes, corresponde exclusivamente a EL CLIENTE. Si el titular de la cuenta es menor de edad, analfabeto, incapaz relativo o absoluto, los retiros serán hechos a través de sus representantes legalmente autorizados. Adicionalmente, para los retiros de la cuenta de un menor de edad, se requerirá la orden judicial respectiva. </p>
        <li></li>
        <p>
        EL CLIENTE señala como domicilio, el indicado en este contrato, donde se le cursará todas las comunicaciones que fuesen necesarias. En el caso de variación de su domicilio se obligan a comunicarlo por escrito a POSSIBLE (ya sea por medios físicos o virtuales) en un plazo máximo de 30 días, de producida la variación. Para que dicha variación sea válida y oponible a POSSIBLE, se deberá adjuntar a la variación, del nuevo domicilio contractual, los documentos que permitan validar el nuevo domicilio que debe ser cierto y estar ubicado en el radio urbano de ésta ciudad; de lo contrario las notificaciones y comunicación dirigidas al antiguo domicilio serán plenamente válidas y eficaces. POSSIBLE se reserva el derecho de realizar las verificaciones respectivas a fin de determinar la existencia y veracidad de la variación del domicilio. </p>
        <p>
        Sin perjuicio de ello, las comunicaciones con EL CLIENTE podrán realizarse por medios directos o indirectos: </p>
        <ol type="a" class="cuerpo">
        <li></li>
        <p>
        Por medios directos: Son comunicaciones dirigidas a EL CLIENTE que permiten dejar constancia de su envío mediante cualquiera de los medios físicos o mediante el uso de aparatos electrónicos que POSSIBLE tenga a su disposición, tales como cartas dirigidas al domicilio, correos electrónicos previamente informados por EL CLIENTE para esta cuenta y/o contrato, anotaciones en los estados de cuenta, comunicaciones telefónicas, mensajes de texto (SMS), mensajería instantánea como Whatsapp, Telegram u otros de similar naturaleza.
        Siendo que, en conformidad con el artículo 36 del Reglamento de Gestión de Conducta de Mercado del Sistema Financiero, sólo por medios directos POSSIBLE podrá comunicar las modificaciones referentes a: </p>
        <ol type="i" class="cuerpo">
        <li></li>
        <p>Tasas de interés, penalidades, comisiones y gastos cuando dichas modificaciones generen un perjuicio a los usuarios, </p>
        <li></li>
        <p>Modificaciones a la TREA y/o el saldo mínimo de equilibrio, en el caso de productos pasivos, </p>
        <li></li>
        <p>La resolución del contrato por causal distinta al incumplimiento o distinta a los supuestos de resolución por normas prudenciales, </p>
        <li></li>
        <p>La limitación o exoneración de responsabilidad por parte de POSSIBLE; y</p>
        <li></li>
        <p>La incorporación de servicios que no se encuentren directamente relacionados al producto o servicio financiero contratado. </p>
        </ol>
        
        
        
        
        <li></li>
        <p>
        Por medios indirectos: Son comunicaciones dirigidas al público en general, mediante publicaciones en la página web y/o en diarios, avisos colocados en las agencias de atención al público, redes sociales, vouchers de pago o depósito u otros de difusión masiva. </p>
        </ol>
        <li></li>
        <p>
        Dependiendo del servicio contratado, POSSIBLE enviará información directamente relacionada a los productos que se regulan mediante el presente Contrato a EL CLIENTE por cualquiera de los medios directos de comunicación antes mencionados y de manera automática sin costo alguno. En el caso específico de los estados de cuenta, POSSIBLE los remitirá o pondrá a disposición de EL CLIENTE a través de medios electrónicos, salvo que a solicitud expresa del Cliente se deba enviar por medios físicos (al domicilio de EL CLIENTE), en cuyo caso se cobrará la comisión respectiva por el envío. EL CLIENTE podrá solicitar los registros de los movimientos de estas cuentas. Sin perjuicio de lo antes indicado, el detalle de los abonos, retiros, intereses y otros movimientos, podrá ser consultado por EL CLIENTE o su Apoderado debidamente facultado, directamente en las oficinas en manera presencial. </p>
        <p>
        De existir una contratación por medios no presenciales o por medios no escritos, EL CLIENTE acepta como válidas las transacciones y contratación de productos y/o servicios a través de los canales virtuales o medios electrónicos que POSSIBLE comunique y ponga a su disposición, tales como (i) mediante la plataforma de la página web de POSSIBLE y/o su aplicación móvil, con el uso por parte de EL CLIENTE de sus claves de acceso y/o contraseñas, (ii) mensajes de correo electrónico a y/o desde la dirección de correo electrónico que EL CLIENTE tenga registrado en POSSIBLE, y otros medios que POSSIBLE ponga a su disposición. </p>
        
        <p>
        POSSIBLE dispondrá de los mecanismos y medidas de seguridad en los medios utilizados para la contratación no presencial o por medios no escritos, según el canal que se utilice y cumplirá con la normativa vigente sobre contratación virtual. En este sentido, POSSIBLE en un plazo no mayor a 15 días calendarios remitirá a EL CLIENTE el Contrato, así como cualquier otra información que corresponda en conformidad a la normativa vigente. Dicha entrega puede realizarse en el domicilio de EL CLIENTE o a través de medios electrónicos, siempre que permitan su lectura, impresión, conservación y reproducción sin cambios. </p>
        <li></li>
        <p>
        EL CLIENTE exime a POSSIBLE de la responsabilidad por los daños y perjuicios en caso de suspensión de los servicios, producto del funcionamiento defectuoso o interrupción de la operatividad de sus instalaciones o equipos, cuando estas fallas o interrupciones sean consecuencia de hecho fortuito o de fuerza mayor no imputable a POSSIBLE. </p>
       <hr>
        <li></li>
        <p>
        Cualquier error o inexactitud que advierta EL CLIENTE, en la aplicación o inaplicación de abonos o cargos, deberá comunicarlo a POSSIBLE, de inmediato a través de los siguientes canales de atención al usuario, para la revisión y atención correspondiente según los controles internos y liquidación que POSSIBLE efectúe a nuestra red de oficinas de atención al público o al correo electrónico oficial_conducta_mercado@corporacionposible.com </p>
        <li></li>
        <p>
        
        Las operaciones que realice EL CLIENTE con POSSIBLE y ésta por cuenta del primero, al igual que todos los servicios que le sean prestados y todos los contratos que celebren, quedan sometidos sin excepción  alguna, a las normas que resulten aplicables a los términos y condiciones que lo regulen, así  como las disposiciones y normas pertinentes de la Ley General, y Ley de Títulos Valores, Código Civil y aquellas que la sustituyan, así como las normas generales y particulares que sean expedidas por el Banco Central de Reserva del Perú y la Superintendencia de Banca, Seguros y AFP (Superintendencia). </p>
        <li></li>
        
        <p>
        
        EL CLIENTE señala con carácter de declaración jurada que la información proporcionada a POSSIBLE en virtud del presente contrato es verídica, autorizando a POSSIBLE a confirmarla pudiéndole solicitar mayor información. EL CLIENTE se compromete a brindar la información necesaria y/o a comunicar a POSSIBLE cualquier cambio en la información proporcionada. Si se detectase la falsedad o inexactitud de la información, en aplicación de las normas prudenciales emitidas por la Superintendencia de Banca, Seguros y AFP- SBS, POSSIBLE podrá resolver automáticamente el presente contrato, sin perjuicio de las sanciones señaladas en el artículo 179 de la Ley N° 26702, Ley General. Por lo tanto, de resultar falsa cualquier información proporcionada se encontraran sujetos a las responsabilidades penales del caso. EL CLIENTE faculta desde ya a POSSIBLE a informar a las autoridades respectivas sobre la realización de cualquier operación que, a su solo criterio y calificación, constituya una transacción sospechosa o tenga las características de la misma, así como a bloquear sus cuentas por mandato de autoridad competente, quedando por tanto liberada POSSIBLE de toda responsabilidad. Asimismo, si POSSIBLE cuenta con indicios que las transacciones pudieran constituir o estar relacionadas con actividades ilícitas, procederá a comunicarlo a la Unidad de Inteligencia Financiera del Perú, aplicando el procedimiento descrito en el numeral 12. </p>
        <li></li>
        <p>
        La cuenta pasiva devengará la tasa de interés de rendimiento vigente en POSSIBLE para este tipo de operaciones, además de las comisiones y gastos que POSSIBLE tenga establecidos, los cuales se detallan en la Cartilla de Información que forma parte del presente documento. Asimismo, POSSIBLE podrá aplicar nuevas comisiones y gastos previa comunicación al cliente con cuarenta y cinco (45) días de anticipación a través de los medios directos establecidos en el literal a) de la cláusula 5 del presente contrato. </p>
        <p>
        La tasa de rendimiento efectivo anual (TREA) es aquella que permite comparar el rendimiento total de un producto pasivo, considerando todos los cargos por comisiones y gastos, incluidos los seguros, cuando corresponda, y bajo el supuesto de cumplimiento de todas las condiciones pactadas. No se incluyen en este cálculo aquellos pagos por servicios provistos por terceros que directamente sean pagados por EL CLIENTE ni los tributos que resulten aplicables. </p>
        <p>
        La TREA, en el caso de depósitos a plazo fijo, corresponde al rendimiento del depósito realizado; y, en el caso de depósitos distintos al previamente indicado, a un patrón estandarizado de comparación de rendimiento del producto. </p>
        <p>
        La tasa de interés aplicable es fija. La (TREA) y la tasa de interés de la cuenta pasiva figuran en la cartilla de Información. </p>
        
        <p>
        El saldo mínimo de equilibrio para obtener rendimiento en una cuenta de ahorros es el saldo que se requiere mantener en dicha cuenta, sin que se realice transacción alguna, para generar intereses suficientes en un mes de treinta (30) días para cubrir las comisiones y los gastos asociados con el mantenimiento de dicha cuenta, de tal manera que al final del mes no se pierda el capital depositado ni se gane rendimiento. </p>
        <p>
        EL CLIENTE Y POSSIBLE acuerdan conocer y aceptar que solo podrá procederse a la modificación de la tasa de interés pactada en los Depósitos a Plazo Fijo en los siguientes casos: a) Cuando se renueve el depósito. Para tal efecto, POSSIBLE deberá comunicar previamente cualquier variación de las condiciones pactadas, si éstas suponen un perjuicio a EL CLIENTE; b) Cuando exista efectiva negociación al momento de contratar y en cada oportunidad en la que se pretende efectuar dichas negociaciones; al respecto POSSIBLE mantendrá las evidencias que acredite la efectiva negociación ; y, c) Cuando la Superintendencia de Banca, Seguros y AFP, previo informe favorable del Banco  Central de Reserva del Perú, autorice al sistema financiero en general por circunstancias extraordinarias e imprevisibles que pongan en riesgo el propio sistema, de conformidad con lo señalado en el artículo 6° de la Ley Complementaria a la Ley de Protección al Consumidor en Materia de Servicios Financieros, Ley N 28587 y sus normas modificatorias. Las referidas comunicaciones que informen la modificación de las tasas de interés en los casos anteriores serán realizadas en su oportunidad conforme a la ley vigente. </p>
        <p>
        En caso de los demás productos pasivos distintos al depósito a plazo fijo, POSSIBLE podrá modificar la tasa de interés, comisiones, gastos y otras estipulaciones contractuales cuando considere que las condiciones del mercado, operativas, crediticias o de riesgo de EL CLIENTE así lo ameriten, observando las formalidades previstas en el Reglamento de Gestión de Conducta de Mercado del Sistema Financiero para este tipo de operaciones. En tal sentido las modificaciones sobre reducción de interés, variación en las comisiones y/o gastos y otras estipulaciones contractuales de EL CLIENTE, deberán ser comunicadas en un plazo previo de cuarenta y cinco (45) días calendario a través de medios directos de comunicación conforme al literal a) de la cláusula 5 del presente contrato, indicando de manera expresa que se trata de una modificación en las condiciones pactadas, destacando aquellos conceptos que serán materia de cambio y señalando expresamente en qué consisten, a fin de permitir a los usuarios tomar conocimiento de ellos. </p>
        <p>
        EL CLIENTE reconoce haber sido instruido(a) sobre la forma de cálculo y el monto de los gastos, las comisiones y otras condiciones contractuales de las cuentas pasivas. </p>
        <p>
        Asimismo, EL CLIENTE reconoce haber sido instruido sobre la forma de cálculo y el monto de los intereses de las cuentas pasivas distintas a los Depósitos a Plazo Fijo. </p>
        <p>
        Las modificaciones sobre reducción de intereses por las causales descritas líneas arriba, variación en las comisiones y/o gastos de EL CLIENTE así como las modificaciones a la TREA y/o el saldo mínimo de equilibrio para obtener rendimiento y resolución del contrato por causal distinta al incumplimiento y la limitación o exoneración de responsabilidad por parte de POSSIBLE, deberán ser comunicadas con una anticipación no menor a cuarenta y cinco (45) días calendarios previos a la modificación, indicando la fecha o el momento a partir del cual la modificación entrará en vigencia mediante los medios de comunicación directos que establece el Reglamento de Gestión de Conducta de Mercado del Sistema Financiero, tales como comunicaciones escritas al domicilio de EL CLIENTE, correos electrónicos, estados de cuenta o comunicaciones telefónicas. En dichas comunicaciones previas deberá indicarse de manera expresa: </p>
        <ol type="a" class="cuerpo">
        <li></li>
        <p>
        Que se trata de una modificación en las condiciones pactadas, destacando aquellos conceptos que serán materia de cambio y señalando expresamente en qué consisten, a fin de permitir a los usuarios tomar conocimiento de ellos; y, </p>
        
        <li></li>
        
        <p>
        Que EL CLIENTE puede dar por concluida la relación contractual conforme a lo establecido en el punto 14 del presente contrato. </p>
        </ol>
        <p>
        Las modificaciones unilaterales destinadas a otorgar condiciones más favorables a EL CLIENTE, serán aplicadas inmediatamente y comunicadas a EL CLIENTE con posterioridad mediante los medios de comunicación directos detallados en el literal a) de la cláusula 5 del presente contrato. </p>
        
        <p>
        En el caso de modificaciones contractuales asociadas a la incorporación de nuevos servicios que no se encuentren directamente relacionados con el producto o servicio contratado y que no constituyan una condición para contratar deberán ser informadas a EL CLIENTE mediante los medios de comunicación directos detallados en el literal a) de la cláusula 5 del presente contrato con una anticipación no menor a cuarenta y cinco (45) días calendarios previos a la modificación, indicando la fecha o el momento a partir del cual la citada modificación entrará en vigencia, encontrándose EL CLIENTE facultado a negarse a la aplicación de las mismas, sin que su negativa implique la resolución del contrato. </p>
        <p>
        De otro lado, en el caso de modificaciones contractuales unilaterales que no respondan a obligaciones normativas y que resulten perjudiciales, EL CLIENTE tendrá el derecho de resolver el presente contrato cuando lo estime conveniente, para lo cual no deberá mantener deuda vigente con POSSIBLE asimismo llenará formulario proporcionado por POSSIBLE en la página Web. </p>
        <li></li>
        <p>
        De conformidad con el Art. 41 del Reglamento de Conducta de Mercado del Sistema Financiero, POSSIBLE se encuentra facultada a no contratar, resolver y/o modificar el presente contrato, respecto a condiciones distintas a tasa de interés, comisiones y gastos, en caso de advertir los siguientes supuestos: </p>
        <ol type="a" class="cuerpo">
        <li></li>
        <p>
        SI POSSIBLE verifica que la información proporcionada por EL CLIENTE es inexacta, incompleta, falsa o inconsistente con la información previamente declarada o entregada por el usuario y repercuta negativamente en el riesgo de reputación o legal que enfrenta POSSIBLE. </p>
        <li></li>
        <p>
        Si EL CLIENTE realiza operaciones sospechosas de lavado de activos o de financiamiento del terrorismo y/o por consideraciones del perfil del cliente vinculadas al sistema de prevención del lavado de activos o del financiamiento del terrorismo conforme la norma prudencial. </p>
        <li></li>
        <p>
        Causa referidas a la administración del riesgo de sobreendeudamiento de deudores minoristas. </p>
        </ol>
        <p>
        En los mencionados casos, POSSIBLE remitirá una comunicación escrita formal al domicilio de EL CLIENTE dentro de los siete (7) días calendarios posteriores a la resolución o modificación, según corresponda. </p>
        <li></li>
        <p>
        POSSIBLE podrá cerrar las cuentas en forma inmediata y resolver el contrato, comunicando previamente de tal decisión a EL CLIENTE por escrito o vía correo electrónico, en cualquiera de los siguientes casos: </p>
        <ol type="a" class="cuerpo">
        <li></li>
        <p>
        Cierre previsto por normativa vigente. </p>
        <li></li>
        <p>
        Cuando, sin autorización de POSSIBLE, la(s) cuenta(s) se utilice(n) para colectas, recaudaciones o depósitos hechos por terceras personas. </p>
        
        
        
        
        
        <li></li>
        <p>
        Cuando se realicen operaciones que puedan perjudicar a POSSIBLE, a EL CLIENTE o a otros clientes de POSSIBLE. </p>
        <li></li>
        <p>
        Cuando la(s) cuenta(s) esté(n) siendo utilizada(s) por personas no autorizadas por EL CLIENTE. </p>
        <li></li>
        <p>
        Si a criterio de POSSIBLE existe duda o conflicto respecto de la legitimidad, legalidad, vigencia o alcances de las facultades de los representantes de EL CLIENTE, o sobre la legalidad de la procedencia de los fondos depositados en la(s) cuenta(s). </p>
        
        <li></li>
        <p>
        Cuando EL CLIENTE incumpla cualquiera de sus obligaciones conforme a este contrato. </p>
        
        <li></li>
        <p>
        En el caso que los fondos de cualquier cuenta o depósito permanezcan inactivos durante 10 años o más, sin que se hagan nuevas imposiciones, ni se retire intereses o medie reclamación durante ese lapso, serán transferidos al Fondo de Seguro de Depósitos, en cumplimiento de las normas legales vigentes. </p>
        </ol>
        <p>
        La(s) cuenta(s) se cerrará(n) transcurridos quince (15) días naturales desde realizada la comunicación a EL CLIENTE, y en el caso de las cuentas cerradas por aplicación de los supuestos establecidos en los incisos a), b), c), d), e) y f), si hubiera un saldo a favor de EL CLIENTE en la cuenta cerrada, este se mantendrá a disposición en Plataforma de Agencias sin generar ningún interés. </p>
        
        <li></li>
        <p>
        EL CLIENTE podrá cerrar la cuenta y resolver este contrato, a su sola decisión en cualquier momento, acercándose a la red de agencias de POSSIBLE a nivel nacional o de existir una contratación por medios no presenciales o por medios no escritos, podrá también resolver este contrato mediante la plataforma de la página web de POSSIBLE y/o su aplicación móvil, con el uso por parte de EL CLIENTE de sus claves de acceso y/o contraseñas. En el caso de cuentas de ahorros o a plazo que se hayan otorgado en garantía mobiliaria, EL CLIENTE deberá, cancelar en forma previa toda obligación que mantenga pendiente con POSSIBLE. </p>
        
        <p>
        El cierre unilateral de la cuenta constituirá el ejercicio de un derecho que ambas partes se otorgan recíprocamente. POSSIBLE podrá ejercer este derecho en virtud de lo establecido en las cláusulas 12 y 13 del presente contrato. </p>
        
        
        
        
        <li></li>
        <p>
        POSSIBLE cuenta con un sistema de Gestión de Conducta de Mercado, el cual recibirá sus reclamos, los cuales serán respondidos en un plazo máximo de treinta (30) días calendario; Asimismo, si EL CLIENTE no se encuentra de acuerdo con la respuesta emitida por POSSIBLE, podrá recurrir ante INDECOPI (www.indecopi.gob.pe) o el Departamento de Servicios al Ciudadano de la Superintendencia de Banca Seguros y AFP (www.sbs.gob.pe). EL CLIENTE puede acudir también al Defensor del Cliente Financiero y el Poder Judicial. </p>
        
        
        
        <li></li>
        <p>
        
        LAS PARTES acuerdan someterse a la jurisdicción de los jueces y tribunales del lugar de celebración del presente contrato. Las partes señalan como sus domicilios los consignados en el presente contrato, a los cuales cursarán todas las comunicaciones contractuales o notificaciones judiciales o extrajudiciales. </p>
        </ol>
        <p><strong> DEPÓSITO DE AHORROS: </strong></p>
        <ol type="1" class="cuerpo">
        <li></li>
        <p>
        Se entiende por Cuenta de Ahorros a la cuenta de que trata el Art. 229 de la Ley General. Estos depósitos pueden ser retirados por su (s) titular (es), en cualquier momento. Estas cuentas pueden ser en moneda nacional o en moneda extranjera. </p>
        
        <li></li>
        <p>
        Los depósitos de ahorros pueden ser constituidos por personas naturales o jurídicas, inclusive por personas analfabetas o incapacitadas y también por menores de edad, observando las disposiciones legales vigentes para cada caso. </p>
        <li></li>
        <p>
        Toda cantidad que se abone y/o retire de la cuenta de depósitos de ahorros constará en hojas sueltas o soportes mecánicos y/o informáticos que se ponga a disposición EL CLIENTE. La tarjeta o documento que sustente la apertura de la cuenta de ahorro es personal e intransferible. </p>
        <li></li>
        <p>
        EL CLIENTE tiene el derecho a solicitar el extracto de todos los movimientos producidos en sus depósitos durante el mes, mediante el llenado del documento denominado “Formulario de Instrucción" que se encuentra en todas las agencias de POSSIBLE a nivel nacional. Dicha información deberá ser remitida por POSSIBLE y en un plazo máximo de treinta (30) días posteriores al cierre del mes en que la información fue requerida y podrá ser enviada mensualmente si así lo solicita EL CLIENTE. POSSIBLE enviará los estados de cuenta al cliente por medios electrónicos (correo electrónico) de manera automática sin costo alguno, y/o por medios físicos, a solicitud expresa del CLIENTE (al domicilio del CLIENTE), en cuyo caso se cobrará la comisión respectiva por el envío. Asimismo, POSSIBLE podrá incluir la mencionada información a disposición de EL CLIENTE mediante la plataforma de la página web de POSSIBLE y/o su aplicación móvil. </p>
        
        
        <li></li>
        <p>
        Abierta una cuenta de ahorros, EL CLIENTE podrá efectuar retiros personales o por intermedio de su(s) representaste(es) legal(es) o apoderados(s). POSSIBLE atenderá los retiros a simple solicitud. Están exceptuadas de dichos mecanismos aquellas operaciones en que por causas especiales y/o de seguridad referidas en el numeral 12 de las Cláusulas Generales, POSSIBLE se reserva la facultad de establecer un plazo para su atención o requieran de un mecanismo distinto de confirmación. </p>
        <li></li>
        <p>
        Los retiros de las cuentas de depósito de ahorro cuyos titulares sean menores de edad e incapaces, para ser atendidos requerirán de la intervención de sus representantes legales, previa autorización judicial. </p>
        <li></li>
        <p>
        La tasa de interés, la forma de capitalización y abono de los intereses serán fijados por POSSIBLE conforme a los saldos acreedores y demás criterios que tenga establecidos, las cuales se encuentran detalladas en la página web de POSSIBLE y en la Cartilla de Información que forma parte del presente contrato. </p>
        <li></li>
        <p>
        POSSIBLE podrá cancelar, aquellas cuentas de ahorros cuyo titular sea una persona natural que mantengan saldo cero en la referida cuenta por más de seis (06) meses en forma consecutiva señalando que POSSIBLE comunicará previamente a EL CLIENTE, en atención al subnumeral 9 del artículo 53.2, del Reglamento de Gestión de Conducta de Mercado del Sistema Financiero aprobado por Resolución SBS N° 3274-2017. Para el caso de cuentas de ahorros abiertas con la única finalidad de recibir el desembolso de un crédito, éstas serán canceladas previo aviso al cliente si estos mantienen saldo cero por más de tres (03) meses. </p>
        <li></li>
        <p>
        Todas las operaciones realizadas por EL CLIENTE en su cuenta de ahorros, estarán afectas al Impuesto de las Transacciones Financieras, salvo aquellas exceptuadas por Ley. </p>
        </ol>
        <p><strong>DEPÓSITOS A PLAZO FIJO: </strong></p>
        <ol type="1" class="cuerpo">
        
        <li></li>
        <p>
        Los depósitos a plazo fijo se mantendrán durante el plazo acordado, sin que sea posible realizar retiros o nuevas imposiciones dentro de dicho lapso, ni operar como cuentas corrientes o de ahorro; y, se rigen por las disposiciones legales especiales, de conformidad con lo establecido en el artículo 1853° del Código Civil. </p>
        <li></li>
        <p>
        El pago de intereses podrá efectuarse al final del plazo o de manera mensual. En caso que EL CLIENTE opte por el pago de intereses de manera mensual, deberá abrir una cuenta de ahorros sin costo alguno, en la cual se abonarán los mencionados intereses. Las condiciones de la citada cuenta de ahorros, estarán descritas en la Cartilla de Información, que será entregada a EL CLIENTE al momento de su apertura. </p>
        <li></li>
        <p>
        Vencido el plazo fijado para el depósito y ante la falta de instrucción de EL CLIENTE, POSSIBLE renovará automáticamente el depósito por el plazo pactado originalmente y en las condiciones que en la oportunidad de su renovación tenga establecidas para esa clase depósitos en su tarifario, las cuales se encontrarán publicadas en la página web de POSSIBLE y en todas las agencias a nivel nacional. Para ello, POSSIBLE procederá a comunicárselo a EL CLIENTE utilizando medios de comunicación directos establecidos en el literal a) de la cláusula 5 de las Condiciones Generales del presente contrato, tales como comunicaciones escritas al domicilio de EL CLIENTE, correos electrónicos, estados de cuenta y comunicaciones telefónica. </p>
        <li></li>
        <p>
        La tasa de interés, comisiones, gastos y demás condiciones de los depósitos serán fijados por POSSIBLE, de acuerdo al monto y al plazo efectivo del depósito, conforme consta en la Cartilla de Información. POSSIBLE podrá establecer diversas tasas de interés para los depósitos a plazo, según su monto, plazo y naturaleza, lo que estará expresado en la TREA (Tasa de Rendimiento Efectivo Anual). </p>
        <li></li>
        <p>
        EL CLIENTE debe mantener el depósito, por el plazo fijado, no pudiendo hacerse retiros (por EL CLIENTE o por personas legitimadas) ni abonos durante el plazo pactado, ya que ello implica su resolución automática y la aplicación de la penalidad correspondiente, según se detalla a continuación: En caso que EL CLIENTE solicite la cancelación anticipada durante los primeros treinta (30) días calendario contados desde que se abrió la cuenta, el depósito no generará los intereses. Si dicha cuenta es cancelada luego de 30 días calendarios contados a partir de la fecha de su apertura, pero con anterioridad al plazo pactado, se aplicará la tasa que se encuentre vigente a la fecha de la cancelación, publicada a su vez en el tarifario, web y en la red de agencias. POSSIBLE no aceptará la cancelación anticipada de depósitos que garanticen cualquier otro crédito vigente contratado con POSSIBLE, salvo sustitución por parte de EL CLIENTE con otra garantía de iguales características, la cual deberá ser aceptada previamente por POSSIBLE. De producirse la resolución automática por retiros dispuestos por personas legitimadas y de haber un saldo resultante, EL CLIENTE faculta expresamente a POSSIBLE para que aperture una nueva cuenta por el mismo plazo, aplicándosele la tasa de depósito a plazo según el tarifario vigente a la fecha de apertura, tomando en consideración el mismo plazo del depósito a plazo primigenio. </p>
        </ol>
        
        <p><strong>CTS (COMPENSACIÓN POR TIEMPO DE SERVICIOS): </strong></p>
        <ol type="1" class="cuerpo">
        
        <li></li>
        <p>
        POSSIBLE mantendrá el Depósito CTS en una cuenta sujeta a las condiciones de la Ley de la materia, y tendrá carácter de intangible e inembargable, hasta el límite de ley. </p>
        <li></li>
        <p>
        Las comunicaciones a los titulares de cuenta CTS, se remitirán a través de los medios de comunicación directos establecidos en el literal a) de la cláusula 5 de las Condiciones Generales del presente contrato. Eventualmente, POSSIBLE podrá enviarlas al domicilio del empleador, si es que así lo solicita EL CLIENTE. El registro del domicilio de EL CLIENTE no impide que las comunicaciones se le continúen cursando a través de su Empleador, conforme a la ley de la materia. </p>
        
        
        <li></li>
        <p>
        Los retiros se atenderán de acuerdo a las disposiciones legales vigentes y siempre que no se haya recibido alguna notificación judicial que la limite, así como el aviso del (la) cónyuge/conviviente, indicando su necesaria concurrencia. El retiro total de los fondos, solo procederá al cese del trabajador, según lo notificado por el Empleador y verificando lo indicado en el párrafo anterior. </p>
        
        
        
        <li></li>
        <p>
        Los traslados a otro depositario autorizado se atenderán conforme a ley, previa retención del monto necesario para atender las deudas exigibles de obligaciones vencidas de cargo del frente a POSSIBLE, para ello debe existir saldo de libre disponibilidad. No serán objeto de la mencionada compensación los activos legales o contractualmente declarados intangibles o excluidos de este derecho de conformidad con lo establecido en el numeral 11 del art. 132 de la Ley 26702 -  Ley General y se comunicará a EL CLIENTE conforme lo descrito en el numeral 2 inc. b) de las Cláusulas Generales. </p>
        <li></li>
        <p>
        EL CLIENTE podrá constituir garantía mobiliaria a favor de POSSIBLE sobre sus fondos de libre disposición existentes en la cuenta CTS, en garantía de cualquier obligación de su cargo, sea directa o indirecta, y con preferencia frente a cualquier otro acreedor, dentro de los alcances determinados por la Ley de Garantía Mobiliaria – Ley 28677 así como las normas que la
        modifiquen o la sustituyan, siempre que no se transgredan las disposiciones contenidas en el D.S. 001-97-TR, TUO de la Ley de Compensación por Tiempo de Servicios. </p>
        </ol>
        <p><strong>DECLARACIONES FINALES</strong></p>
        <ol type="1" class="cuerpo">
        <li></li>
        <p>
        EL CLIENTE declara que el presente contrato, así como la Cartilla Informativa y cronogramas de ser el caso, le fueron entregados para su lectura, que se absolvieron sus consultas y que firma con conocimiento pleno de las condiciones establecidas en los referidos documentos. </p>
        <li></li>
        <p>
        La nulidad o invalidez, total o parcial, de una o más disposiciones contenidas en este contrato no afectarán la validez de las demás disposiciones contenidas en el mismo, debiéndose considerar como inexistentes únicamente las cláusulas declaradas nulas o invalidas, total o parcialmente. </p>
        <p>
        Queda establecido que este documento sustituye a todo acuerdo contractual previo referido a la prestación de los servicios materia del presente contrato, a partir de la fecha de suscripción del mismo. </p>
        </ol>
        <hr>
        <div class="izq">
            <p>_____________________________,___ de_____________de________</p>
        </div>
        <br>
        <br>
        <br>
        <br>

        <div class="der"> 
            <p>_________________________</p>
            <p> (Firma y huella)</p>
            <p>EL CLIENTE</p>
            <p>Nombre/Razón Social:</p>
            <p>DOI:</p>
            <p>Domicilio:</p>

        </div>
        <br>
        <br>
        <br>
        <br>

        <div class="cent"> 
            <p>____________________________________________</p>
            <p> Sello y Firma de Representante de POSSIBLE</p>
            

        </div>
<br>
<br>
<br>  
<br>
<br>  
<br>
        <p>Todos los depósitos están cubiertos por el Fondo de Seguro de Depósitos. La Empresa tiene la
            obligación de difundir información de conformidad con la Ley N° 29888 y el Reglamento de 
            Gestión de Conducta de Mercado del Sistema Financiero probado mediante Resolución SBS N°3274-2017.
            </p>





        
     </div>
</body>
</html>