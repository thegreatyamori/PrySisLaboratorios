<!DOCTYPE html>
<html>
<head>
<style type="text/css">
table {
   width: 100%;
   border-collapse:collapse;
   border: 1px solid black;

}
th, td {
   text-align: left;
   vertical-align: top;
   border:  solid #000;
   border: 1px solid black;
   font-size: 12px
   border-collapse:collapse;
}

#internatabla{
  width: 100%;
   border: 0;
   border-collapse:collapse;
}

#centrado{
  vertical-align:middle;
  text-align:center;
}
#fondo{
  background-color:grey;
  vertical-align:middle;
  text-align:center;
  font-size: 8px
}
p{
  font-size:9px;
}

</style>
</head>

<body>
 <table>
        <thead>
            <tr>
              <th scope="row" id="centrado"width="25%">  <img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'/images/reportes/espelogo.png';?>"/>   </th>
              <th scope="row" id="centrado"width="60%"><h2>BITÁCORA USO DE LABORATORIO<h2></th>
              <th scope="row"width="15%">
                <p>CÓDIGO: DCM.LB.11 <br>
                VERSIÓN: 1.0 <br>
                FECHA ÚLTIMA REVISIÓN: 08/06/2017     
                </p></th>
            </tr>
        </thead>
 </table>
 <br>
 <table>
        <thead>
            <tr>
              <td scope="row" id="fondo"width="15%"> DEPARTAMENTO: </td>
              <td scope="row" id="centrado"width="35%"> Eléctrica y Electronica: </td>
              <td scope="row" id="fondo"width="20%"> CARRERA: </td>
              <td scope="row" id="centrado"width="30%"> </td>
            </tr>
        </thead>
  </table>
  <table>
            <tr>
              <td scope="row" id="fondo"width="15%" > NOMBRE DE LABORATORIO: </td>
              
              <td scope="row" id="centrado"width="65%">
              @if(!empty($controles)) 
              {{$controles[0]->EMP_NOMBRE}}
              @endif
               </td>
            
              <td scope="row" id="fondo"width="7%"> CODIGO DEL LAB: </td>
              <td scope="row" id="centrado"width="13%">
               @if(!empty($controles)) 
              {{$controles[0]->LAB_CODIGO}}
              @endif</td>
            </tr>
  </table>
  <table>
            <tr>
              <td scope="row" id="fondo"width="7.5%" > FECHA </td>
              <td scope="row" id="fondo"width="7.5%">
                <table id=internatabla>
                  <tr>
                    <td  scope="row" id="fondo"width="100%"> Area </td>
                  </tr>
                  <table id=internatabla>
                    <tr>
                      <td scope="row" id="fondo" width="50%" > Doc </td>
                      <td scope="row" id="fondo" width="50%"> Inv </td>
                    </tr>
                  </table>
                </table>
              </td>
              <td scope="row" id="fondo" width="15%">
                <table id=internatabla>
                  <tr>
                    <td scope="row" id="fondo"width="100%"> N° de USUARIOS </td>
                  </tr>
                  <table id=internatabla>
                    <tr>
                       <td scope="row" id="fondo" width="20%"> Doc </td>
                        <td scope="row" id="fondo" width="60%"> Ana.Lab. </td>
                        <td scope="row" id="fondo" width="20%"> Est. </td>
                    </tr>
                  </table>
                </table>
              </td>
              <td scope="row" id="fondo"width="20%" > NOMBRE </td>
              <td scope="row" id="fondo"width="23%" > TEMA/ENSAYO </td>
              <td scope="row" id="fondo" width="9%">
                <table id=internatabla>
                  <tr>
                    <td scope="row" id="fondo"width="100%"> Horario </td>
                  </tr>
                  <table id=internatabla>
                    <tr>
                       <td scope="row" id="fondo" width="50%"> INICIO </td>
                        <td scope="row" id="fondo" width="50%"> FINAL </td>
                    </tr>
                  </table>
                </table>
              </td>
              <td scope="row" id="fondo"width="7%" > FIRMA </td>
              <td scope="row" id="fondo"width="11%" > OBSERVACIONES </td>
              

            </tr>
  </table>
  <table>
         <tbody >
       @foreach ($controles as $con)
        <tr>
          <td scope="row" id="centrado"width="7.5%">{{$con -> CON_DIA}}</td>  
          <td scope="row"id="centrado"width="3.75%">X</td>
          <td scope="row"id="centrado"width="3.75%"></td>
          <td scope="row"id="centrado"width="3%">1</td>
          <td scope="row"id="centrado"width="9%">1</td>
          <td scope="row"id="centrado"width="3%">{{$con -> MAT_NUM_EST}}</td>
          <td scope="row"id="centrado"width="20%">
            <p>
              {{$con -> MAT_ABREVIATURA}} - {{$con -> MAT_NRC}}<br>
              {{$con -> DOC_NOMBRES}} {{$con -> DOC_APELLIDOS}}
            </p>
          </td>
          <td scope="row"id="centrado"width="23%"></td> 
          <td scope="row"id="centrado"width="4.5%">{{$con -> CON_HORA_ENTRADA}}</td> 
          <td scope="row"id="centrado"width="4.5%">{{$con -> CON_HORA_SALIDA}}</td> 
          <td scope="row"id="centrado"width="7%"></td>
          <td scope="row"id="centrado"width="11%">
            <p>
              {{$con -> LAB_NOMBRE}}
              @if($con->CON_EXTRA==1)
              <br>OCACIONAL
              @endif
            </p>
          </td>  

        </tr>
        @endforeach   
  
         </tbody>   
</table>
<br><br><br>
<table>
 <tr>
  <td scope="row">
  <p>OBSERVACIONES GENERALES<br><br><br></p>
  </td>
  <td scope="row"id="centrado">
  <p>F.....................................................<br>
  FIRMA....................................................<br>
  &nbsp;RESPONSABLE DEL LABORATORIO
  </p>
  </td>
 </tr>
</table>

</body>
</html>