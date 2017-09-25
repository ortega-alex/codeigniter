<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>cargo persona</h1>
	<form action="<?php echo base_url(); ?>index.php/cpersona/guardar" method="POST"> 
		<table>
			<tr>
				<td><label for="">DNI</label></td>
				<td><input type="text" maxlength="8" name='dni'></td>
			</tr>
			<tr>
				<td><label for="">Nombre</label></td>
				<td><input type="text" name='nombre'></td>
			</tr>
			<tr>
				<td><label for="">Ap Paterno</label></td>
				<td><input type="text" name='paterno'></td>
			</tr>
			<tr>
				<td><label for="">Ap _Materno</label></td>
				<td><input type="text" name='materno'></td>
			</tr>
			<tr>
				<td><label for="">Email</label></td>
				<td><input type="text" name='email'></td>
			</tr>			
			<tr>
				<td><label for="">Fec Nac</label></td>
				<td><input type="date" name='fecha'></td>
			</tr>
			<tr>
				<td colspan='2'>
					<label for="Usuario">Usuario</label>
				</td>
			</tr>
			<tr>
				<td><label for="">Usuario</label></td>
				<td><input type="text" name='user'></td>
			</tr>			
			<tr>
				<td><label for="">Contraseña</label></td>
				<td><input type="password" name='pass'></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" type="submit" value="Guardar">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>