
<script type="text/javascript"  src="javascript/validaciones.js"></script>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<form name="form1" action="datos.php" method="post" enctype="multipart/form-data">
			<table cols="2" border="0" align="center">
				<tr align="center"><td colspan="2"><H1>Datos del paciente</H1></td></tr>
				<tr align="right"><td>Curp:</td><td align="left"><input name="curp" type="text" value="<?php if (isset($curp))echo $curp; ?>" maxlength="18"/></td></tr>
				<tr align="right"><td>Nombre:</td><td align="left"><input name="nombre" type="text" value="<?php if (isset($nombre))echo $nombre; ?>" maxlength="30"/></td></tr>
				<tr align="right"><td>Apellido Paterno:</td><td align="left"><input name="apellidoP" type="text" value="<?php if (isset($apellidoP))echo $apellidoP; ?>" maxlength="30"/></td></tr>
				<tr align="right"><td>Apellido Materno:</td><td align="left"><input name="apellidoM" type="text" value="<?php if (isset($apellidoM))echo $apellidoM; ?>" maxlength="30"/></td></tr>
			
				<tr align="right"><td>Sexo:</td>
				  <td align="left"><label>
				  <select name="sexo">
				        <option value="M">M</option>
				        <option value="H">H</option>
		              </select>
				  </label></td>
				</tr>
				<tr align="right"><td>Tipo de sangre:</td><td align="left">

                       <?php
                   include('../conexion.php');
                   $result=mysql_query("select * FROM tipo_sangre"); 
                   $row=mysql_fetch_array($result);?>  
                <select name="sangre" id="sangre"> 
            <?php 
        do {   
      ?> 
            <option value="<?php echo $row['IdTipo_Sangre']?>"><?php echo $row['TipoSangre']?></option> 
            <?php 
        } while ($row = mysql_fetch_assoc($result)); 
      ?> 
          </select>
				</td></tr>
				
				
				<tr align="right"><td>Edad:</td><td align="left">
                     <select name="edad">
					<?php for($i=1;$i<=85;$i++){?>
				  <option value="<?php echo $i ;?>"><?php echo $i ;?>
				  <?php } ?>
				  </select>
				  </td></tr>
				 <tr align="right"><td>Direccion :</td><td align="left"><input name="direccion" type="text" value="<?php if (isset($direccion)) echo $direccion; ?>" maxlength="200"/></td></tr>
				<tr align="center">
				<td colspan="2">
                <input name="error" type="hidden" id="error" value="<?php echo $error ?>">
				<input type="submit" name="enviar" value="Enviar" onclick="valida()"/>
				<input type="reset" name="reestablecer"/>
				<input type="hidden" name="ncapa" value="3" />
				</td></tr>	
			</table>
		</form>	

