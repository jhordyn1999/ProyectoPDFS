<!DOCTYPE html>
<html>
<head>
   <title>Generate Pdf</title>
     {{--  
 <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Calibri"> --}}
{{--  <link href="{{ asset('css/pd4.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <style>
@page{
    margin: 40px 40px;
       /*  margin: 96px 96px; */
}
@font-face {
font-family: 'Calibri';
src: url({{ storage_path('fonts/CalibriBold.TTF') }}) format('TrueType');

}   
header {
      position: fixed; 
        top: -10px;
        margin-left: 0px;
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
        bottom: -20px; 
        left: 0px; 
        right: 0px;
        height: 50px; 
        color: black;
        text-align: center;
        line-height: 35px;
    }


 body {
     margin-top: 40px;
    font-family: 'Calibri' , sans-serif;
    font-size: 14px; 
   
    
} 
hr{
page-break-after: always;
border: none;
margin: 0;
padding: 0;
}
.titulopdf{
    text-align: center;
}
.firm2{
margin-left: 20%;
font-size:10px;
text-align: left;
display: inline-block;
vertical-align: top;

}

.cuerpo{
    text-align: justify;
}

.space{
    font-size: 9px;
    margin-left: 15px  ;
    margin-right: 5px  ;
}
.textbold{
    font: bold;
}
table{
    border-collapse: collapse;
    width: 100%;
}
th,tr,td{
	border:1px solid #000;
	vertical-align:middle;
	padding-left: 5px;
    padding-bottom: 5px;
    line-height: 1.5em;
    height: 20px !important;
    font-size: 10px;
}
th{
    font: bold;
    text-align: left;
	color:#fff;
	background-color: #252525;
}
</style>


    <header>
        <img src="img/logo.png" alt="" width="100">
        <p class="cabder">Fecha de solicitud:______________ </p>
        
    </header>
    <footer>
       <p> Pág. <span class="pagenum"></span> </p>
    </footer>
    <p class="titulopdf"><strong> <u>SOLICITUD DE CRÉDITO PERSONA NATURAL </u></strong></p>
    <div class="cuerpo">

 
{{-- ************************************ PRIMERA TABLA ***************************************************** --}}
{{-- ************************************ PRIMERA TABLA ***************************************************** --}}

        <table>
            <tr>

            <th colspan=4>DATOS DEL CRÉDITO:</th>
	        </tr>
	<tr>
		<td style="width: 40%" > Producto : <br>
            Tipo de Credito <br>
            <span class="space"> ( ) Consumo </span>  <span class="space">   ( ) Mes</span>
        </td> 
        <td style="width: 20%">Moneda : <br> 
            MAF
        </td> 
        <td style="width: 20%">Inicial S/. : 
        </td> 
        <td style="width: 20%">Expediente Nº:</td> 
	</tr>
	<tr>	
		<td>Periodo de Gracia: <br>
           
            <span class="space">( ) NO </span> <span class="space">( ) SI:_________ </span></td> 
        <td>Plazo:</td> 
        <td>Bancarización: <br>
           
            <span class="space">( ) NO </span>    <span class="space">( ) SI</span></td> 
        <td>Monto de Cuota:</td> 
	</tr>
 
    <tr>
		<td>Monto de Cuota de Seguro: <br>
            </td> 
        <td>Tasa efectiva Mensual: <br>
        </td> 
        <td COLSPAN=2>Periodicidad de Cuota: <br>
     
            <span class="space"> ( ) SEMANAL </span>         <span class="space">( ) QUINCENAL</span>         <span class="space">( ) MENSUAL</span>
       {{--    <p> <ul class="viñetas"><li>SEMANAL</li> <li>QUINCENAL</li> <li>MENSUAL</li></ul></p>  --}}
          </td> 
      
	</tr>
	<tr>	
		<td COLSPAN=4>Destino de Crédito: <br>
          
            <span class="space">( ) MERCADERIA</span>    <span class="space">( ) CONSUMO </span>   <span class="space">( ) NEGOCIO</span>    <span class="space">( ) COMPRA MAQUINARIA</span>   <span class="space">( ) MEJORA VIVIENDA</span> <span class="space">( ) MOBILIARIO/EQUIPOS</span>    <span class="space">( ) AUTOS/MOTOS </span>   <span class="space">( ) OTROS</span> </td> 
       
	</tr>
    <tr>	
		<td COLSPAN=4 >Tipo Garantía: <br>
    <span class="space"> ( ) PRIMERA Y PREFERENTE HIPOTECA</span>   <span class="space">( ) PRIMERA Y PREFERENTE GARANTIA MOBILIARIA </span>  <span class="space">( ) FIADOR SOLIDIARIO</span>  <span class="space">( ) SIN GARANTIA</span>   <span class="space">( ) OTROS</span> </td> 
        
	</tr>
        </table>

        <br>
        <br>
        
{{-- ************************************ SEGUNDA TABLA ***************************************************** --}}
{{-- ************************************ SEGUNDA TABLA ***************************************************** --}}

        
        <table>
        
            
            <thead>
                <tr>
                <th colspan="7">DATOS DEL CLIENTE:</th>
                </tr>
            
            </thead>
            <tbody>
                <tr class="textbold">

                    <td  width = "30%"   > Apellido Paterno </td> 
                    <td colspan="3" width = "25%" >Apellido Materno  </td> 
                    <td width = "25%" >Primer Nombre    </td> 
                    <td colspan="2" width = "20%" >Segundo Nombre</td> 
                </tr>
            

                <tr>
                    <td  ></td> 
                    <td colspan="3"> </td> 
                    <td ></td> 
                    <td colspan="2" ></td> 
                </tr>

                <tr class="textbold">
                    <td >Tipo de Documento</td> 
                    <td >N° de Documento</td> 
                    <td >Fecha de Nacimiento</td> 
                    <td  colspan="3">Lugar Nacimiento</td> 
                    <td >Sexo</td>
                </tr>

                <tr>
                    <td><span class="space">( ) DNI</span> <span class="space">( ) CE</span></td> 
                    <td > </td> 
                    <td ></td> 
                    <td colspan="3"></td> 
                    <td ><span class="space">( ) F</span> <span class="space">( ) M</span></td> 
                </tr>

                <tr class="textbold">
                    <td >Nacionalidad</td> 
                    <td colspan="2" >Residencia</td> 
                    <td colspan="4">Estado Civil</td>  
                </tr>

                <tr>
                    <td></td> 
                    <td colspan="2"></td> 
                    <td colspan="4"> <span class="space">( ) Soltero</span> <span class="space">( ) Casado</span> <span class="space">( ) Conviviente</span> <span class="space">( ) Divorciado</span> <span class="space">( ) Viudo</span></td> 
                </tr>

                <tr class="textbold">
                    <td   width = "30%">Dirección</td> 
                    <td   width = "10%">Mz / Lote</td> 
                    <td   width = "10%">Dpto / Piso / Int</td>  
                    <td   width = "10%">Urbanizacion</td> 
                    <td   width = "10%">Distrito</td> 
                    <td   width = "10%">Provincia</td> 
                    <td   width = "20%">Departamento</td> 
                </tr>

                <tr>
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td>
                </tr>

                <tr class="textbold">
                    <td colspan="3">Referencia de Domicilio</td> 
                    <td colspan="3">Correo electrónico</td> 
                    <td >Teléfono</td>  
                
                </tr>

                <tr>
                    <td colspan="3"></td> 
                    <td colspan="3"></td> 
                    <td></td> 
                    
                </tr>

                <tr class="textbold">
                    <td colspan="2">Situacion laboral</td> 
                    <td colspan="2">Profesión / Ocupacion / Oficio</td> 
                    <td >Cargo que ocupa</td>  
                    <td colspan="2">Direccion del Centro Laboral</td>  
                
                </tr>

                <tr>
                    <td colspan="2"><span class="space">( ) Independiente</span> <span class="space">( ) Dependiente</span><span class="space">( ) Jubilado</span> <span class="space">( ) Otro/Especificación</span></td> 
                    <td colspan="2"></td> 
                    <td></td> 
                    <td colspan="2"></td> 
                    
                </tr>

                <tr class="textbold">
                    <td>RUC</td> 
                    <td colspan="2">Giro/Actividad</td> 
                    <td>Telefono Laboral</td> 
                    <td>Fecha de Ingreso</td> 
                    <td colspan="2">Ingreso Neto Mensual</td> 
                    
                </tr>
                <tr>
                    <td></td> 
                    <td colspan="2"></td> 
                    <td></td> 
                    <td></td> 
                    <td colspan="2"></td> 
                    
                </tr>
                <tr class="textbold">
                    <td  colspan="2">Negocio/Empresa (Nombre o Razón Social)</td> 
                    <td>Giro/Actividad</td> 
                    <td>RUC</td> 
                    <td>Teléfono</td> 
                    <td  colspan="2">Representante Legal</td> 
                    
                </tr>
                <tr>
                    <td  colspan="2"></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td colspan="2"></td> 
                    
                </tr>
                <tr class="textbold">
                    <td  colspan="3">Dirección de Negocio/Empresa</td> 
                    <td  colspan="4">Datos del Negocio/Empresa</td> 
                
                </tr>
                <tr>
                    <td  colspan="3"></td> 
                    <td  colspan="4"><span class="space">( ) Local Propio</span> <span class="space">( ) Local Ajeno</span><span class="space">( ) N° de Empleados</span> <span class="space">( ) Permanentes</span><span class="space">( ) Eventuales</span></td> 
                    
                </tr>
            
                
                
            </tbody>
     </table>


        <br>
        <hr>

        {{-- ************************************ TERCERA TABLA ***************************************************** --}}
        {{-- ************************************ TERCERA TABLA ***************************************************** --}}
        <table>
            <thead>
                <tr>
                <th colspan="7">DATOS DEL CÓNYUGE O CONVIVIENTE:</th>
                </tr>
            
            </thead>
            <tbody>
                <tr class="textbold">

                    <td  width = "30%"   > Apellido Paterno </td> 
                    <td colspan="3" width = "25%" >Apellido Materno  </td> 
                    <td width = "25%" >Primer Nombre    </td> 
                    <td colspan="2" width = "20%" >Segundo Nombre</td> 
                </tr>
            

                <tr>
                    <td  ></td> 
                    <td colspan="3"> </td> 
                    <td ></td> 
                    <td colspan="2" ></td> 
                </tr>

                <tr class="textbold">
                    <td >Tipo de Documento</td> 
                    <td >N° de Documento</td> 
                    <td >Fecha de Nacimiento</td> 
                    <td  colspan="3">Lugar Nacimiento</td> 
                    <td >Sexo</td>
                </tr>

                <tr>
                    <td><span class="space">( ) DNI</span> <span class="space">( ) CE</span></td> 
                    <td > </td> 
                    <td ></td> 
                    <td colspan="3"></td> 
                    <td ><span class="space">( ) F</span> <span class="space">( ) M</span></td> 
                </tr>

                <tr class="textbold">
                    <td >Nacionalidad</td> 
                    <td colspan="2" >Residencia</td> 
                    <td colspan="4">Estado Civil</td>  
                </tr>

                <tr>
                    <td></td> 
                    <td colspan="2"></td> 
                    <td colspan="4"> <span class="space">( ) Soltero</span> <span class="space">( ) Casado</span> <span class="space">( ) Conviviente</span> <span class="space">( ) Divorciado</span> <span class="space">( ) Viudo</span></td> 
                </tr>

                <tr class="textbold">
                    <td   width = "30%">Dirección</td> 
                    <td   width = "10%">Mz / Lote</td> 
                    <td   width = "10%">Dpto / Piso / Int</td>  
                    <td   width = "10%">Urbanizacion</td> 
                    <td   width = "10%">Distrito</td> 
                    <td   width = "10%">Provincia</td> 
                    <td   width = "20%">Departamento</td> 
                </tr>

                <tr>
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td>
                </tr>

                <tr class="textbold">
                    <td colspan="3">Referencia de Domicilio</td> 
                    <td colspan="3">Correo electrónico</td> 
                    <td >Teléfono</td>  
                
                </tr>

                <tr>
                    <td colspan="3"></td> 
                    <td colspan="3"></td> 
                    <td></td> 
                    
                </tr>

                <tr class="textbold">
                    <td colspan="2">Situacion laboral</td> 
                    <td colspan="2">Profesión / Ocupacion / Oficio</td> 
                    <td >Cargo que ocupa</td>  
                    <td colspan="2">Direccion del Centro Laboral</td>  
                
                </tr>

                <tr>
                    <td colspan="2"><span class="space">( ) Independiente</span> <span class="space">( ) Dependiente</span><span class="space">( ) Jubilado</span> <span class="space">( ) Otro/Especificación</span></td> 
                    <td colspan="2"></td> 
                    <td></td> 
                    <td colspan="2"></td> 
                    
                </tr>

                <tr class="textbold">
                    <td>RUC</td> 
                    <td colspan="2">Giro/Actividad</td> 
                    <td>Telefono Laboral</td> 
                    <td>Fecha de Ingreso</td> 
                    <td colspan="2">Ingreso Neto Mensual</td> 
                    
                </tr>
                <tr>
                    <td></td> 
                    <td colspan="2"></td> 
                    <td></td> 
                    <td></td> 
                    <td colspan="2"></td> 
                    
                </tr>
                <tr class="textbold">
                    <td  colspan="2">Negocio/Empresa (Nombre o Razón Social)</td> 
                    <td>Giro/Actividad</td> 
                    <td>RUC</td> 
                    <td>Teléfono</td> 
                    <td  colspan="2">Representante Legal</td> 
                    
                </tr>
                <tr>
                    <td  colspan="2"></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td colspan="2"></td> 
                    
                </tr>
                <tr class="textbold">
                    <td  colspan="3">Dirección de Negocio/Empresa</td> 
                    <td  colspan="4">Datos del Negocio/Empresa</td> 
                
                </tr>
                <tr>
                    <td  colspan="3"></td> 
                    <td  colspan="4"><span class="space">( ) Local Propio</span> <span class="space">( ) Local Ajeno</span><span class="space">( ) N° de Empleados</span> <span class="space">( ) Permanentes</span><span class="space">( ) Eventuales</span></td> 
                    
                </tr>
            
                
                
            </tbody>
                    </table>

                    <br>
                    <br>

                      {{-- ************************************ CUARTA TABLA ***************************************************** --}}
        {{-- ************************************ CUARTA TABLA ***************************************************** --}}
        <table>
            <thead>
                <tr>
                <th colspan="7">DATOS DEL FIADOR SOLIDARIO y/o AVAL:</th>
                </tr>
            
            </thead>
            <tbody>
                <tr class="textbold">

                    <td  width = "30%"   > Apellido Paterno </td> 
                    <td colspan="3" width = "25%" >Apellido Materno  </td> 
                    <td width = "25%" >Primer Nombre    </td> 
                    <td colspan="2" width = "20%" >Segundo Nombre</td> 
                </tr>
            

                <tr>
                    <td  ></td> 
                    <td colspan="3"> </td> 
                    <td ></td> 
                    <td colspan="2" ></td> 
                </tr>

                <tr class="textbold">
                    <td >Tipo de Documento</td> 
                    <td >N° de Documento</td> 
                    <td >Fecha de Nacimiento</td> 
                    <td  colspan="3">Lugar Nacimiento</td> 
                    <td >Sexo</td>
                </tr>

                <tr>
                    <td><span class="space">( ) DNI</span> <span class="space">( ) CE</span></td> 
                    <td > </td> 
                    <td ></td> 
                    <td colspan="3"></td> 
                    <td ><span class="space">( ) F</span> <span class="space">( ) M</span></td> 
                </tr>

                <tr class="textbold">
                    <td >Nacionalidad</td> 
                    <td colspan="2" >Residencia</td> 
                    <td colspan="4">Estado Civil</td>  
                </tr>

                <tr>
                    <td></td> 
                    <td colspan="2"></td> 
                    <td colspan="4"> <span class="space">( ) Soltero</span> <span class="space">( ) Casado</span> <span class="space">( ) Conviviente</span> <span class="space">( ) Divorciado</span> <span class="space">( ) Viudo</span></td> 
                </tr>

                <tr class="textbold">
                    <td   width = "30%">Dirección</td> 
                    <td   width = "10%">Mz / Lote</td> 
                    <td   width = "10%">Dpto / Piso / Int</td>  
                    <td   width = "10%">Urbanizacion</td> 
                    <td   width = "10%">Distrito</td> 
                    <td   width = "10%">Provincia</td> 
                    <td   width = "20%">Departamento</td> 
                </tr>

                <tr>
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td>
                </tr>

                <tr class="textbold">
                    <td colspan="3">Referencia de Domicilio</td> 
                    <td colspan="3">Correo electrónico</td> 
                    <td >Teléfono</td>  
                
                </tr>

                <tr>
                    <td colspan="3"></td> 
                    <td colspan="3"></td> 
                    <td></td> 
                    
                </tr>                
            </tbody>
     </table>
<br>
<br>
<hr>
          {{-- ************************************ QUINTA TABLA ***************************************************** --}}
        {{-- ************************************ QUINTA TABLA ***************************************************** --}}

        <table>
            <thead>
                <tr>
                <th colspan="7">DATOS DEL CÓNYUGE DEL FIADOR SOLIDARIO y/o AVAL:</th>
                </tr>
            
            </thead>
            <tbody>
                <tr class="textbold">

                    <td  width = "30%"   > Apellido Paterno </td> 
                    <td colspan="3" width = "25%" >Apellido Materno  </td> 
                    <td width = "25%" >Primer Nombre    </td> 
                    <td colspan="2" width = "20%" >Segundo Nombre</td> 
                </tr>
            

                <tr>
                    <td  ></td> 
                    <td colspan="3"> </td> 
                    <td ></td> 
                    <td colspan="2" ></td> 
                </tr>

                <tr class="textbold">
                    <td >Tipo de Documento</td> 
                    <td >N° de Documento</td> 
                    <td >Fecha de Nacimiento</td> 
                    <td  colspan="3">Lugar Nacimiento</td> 
                    <td >Sexo</td>
                </tr>

                <tr>
                    <td><span class="space">( ) DNI</span> <span class="space">( ) CE</span></td> 
                    <td > </td> 
                    <td ></td> 
                    <td colspan="3"></td> 
                    <td ><span class="space">( ) F</span> <span class="space">( ) M</span></td> 
                </tr>

                <tr class="textbold">
                    <td >Nacionalidad</td> 
                    <td colspan="2" >Residencia</td> 
                    <td colspan="4">Estado Civil</td>  
                </tr>

                <tr>
                    <td></td> 
                    <td colspan="2"></td> 
                    <td colspan="4"> <span class="space">( ) Soltero</span> <span class="space">( ) Casado</span> <span class="space">( ) Conviviente</span> <span class="space">( ) Divorciado</span> <span class="space">( ) Viudo</span></td> 
                </tr>

                <tr class="textbold">
                    <td   width = "30%">Dirección</td> 
                    <td   width = "10%">Mz / Lote</td> 
                    <td   width = "10%">Dpto / Piso / Int</td>  
                    <td   width = "10%">Urbanizacion</td> 
                    <td   width = "10%">Distrito</td> 
                    <td   width = "10%">Provincia</td> 
                    <td   width = "20%">Departamento</td> 
                </tr>

                <tr>
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td>
                </tr>

                <tr class="textbold">
                    <td colspan="3">Referencia de Domicilio</td> 
                    <td colspan="3">Correo electrónico</td> 
                    <td >Teléfono</td>  
                
                </tr>

                <tr>
                    <td colspan="3"></td> 
                    <td colspan="3"></td> 
                    <td></td> 
                    
                    
                </tr>                
            </tbody>
     </table>
        


     {{--    <hr> --}}
    
        <p>Declaro (amos) que toda la información consignada en la presente solicitud 
            es real y tiene carácter de declaración jurada. En cumplimiento a la ley N° 26702- art 179°, 
            toda falsedad o adulteración en la información facultará     <strong>LA CORPORACION NACIONAL EMPRESARIAL POSIBLE</strong> 
            con RUC:     <strong>20605055801</strong> con dirección en Jr. Arequipa N°116, distrito de Huamachuco, provincia de Sánchez Carrión, 
            departamento de La Libertad, en adelante     <strong>POSSIBLE</strong>, a realizar las acciones legales y judiciales 
            que le permita la ley. Asimismo, autorizo (amos) expresamente a <strong>POSSIBLE</strong> a realizar la verificación 
            de mis (nuestras) referencias personales   y laborales.</p>

            <p>En caso de no contar con un correo electrónico, acepto (amos) la creación de un correo electrónico personal 
                ante <strong>POSSIBLE</strong>  y los términos y condiciones que regirán para el mismo y que se detallan en el presente. 
                Declaro (amos) conocer que dicho correo tiene como finalidad procesar mis (nuestras) dudas, preguntas o 
                solicitud de remisión de información, que puedan presentarse durante el periodo vigente de mi (nuestro) 
                crédito en relación a la operatividad del servicio financiero brindado. 
                <br>

                Asimismo, declaro (amos) conocer, que la  contraseña es  secreta  personal  e  intransferible,  
                siendo de  mi  (nuestra) absoluta responsabilidad. 
                </p>
                <br>
                <br>
                

                <div class="firm2">
                    <div> 
                        <p>_________________________</p>
                        <p> (Firma y huella)</p>
                        <p>EL CLIENTE</p>
                        <p>Nombre:</p>
                        <p>Estado Civil:</p>
                        <p>DNI/PASAPORTE/CE N°:</p>
                        <p>Domicilio:</p>

                    </div>
                        <br>
                        <br>
                        <br>
                      
                       
                    
                    <div> 
                        <p>_________________________</p>
                        <p> (Firma y huella)</p>
                        <p>EL FIADOR SOLIDARIO/AVAL </p>
                        <p>Nombre:</p>
                        <p>Estado Civil:</p>
                        <p>DNI/PASAPORTE/CE N°:</p>
                        <p>Domicilio:</p>

                    </div>
                </div>

                <div class="firm2">
                    <div> 
                        <p>_________________________</p>
                        <p> (Firma y huella)</p>
                        <p>Cónyuge de EL CLIENTE</p>
                        <p>Nombre:</p>
                        <p>Estado Civil:</p>
                        <p>DNI/PASAPORTE/CE N°:</p>
                        <p>Domicilio:</p>

                    </div>

                    <br> 
                    <br>
                    <br>

                    <div> 
                        <p>_________________________</p>
                        <p> (Firma y huella)</p>
                        <p>Cónyuge del EL FIADOR SOLIDARIO/AVAL </p>
                        <p>Nombre:</p>
                        <p>Estado Civil:</p>
                        <p>DNI/PASAPORTE/CE N°:</p>
                        <p>Domicilio:</p>

                    </div>

                </div>
               
    </div>

</body>
</html>
