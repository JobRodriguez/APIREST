<?php  
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listado de Usuarios</title>

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	#params{
		width: 50%;
		margin-left: 25%;
		padding-top: 5%;
	}
	#buttons{
		padding-top: 10px;
		text-align: right;
		margin-right: 5%;
	}
</style>
<body>
	<strong><center><h1>Bienvenido <i><?php echo $_SESSION['Nombre'];?></i><hr></h1></center></strong>
	<div id="buttons">
		<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#AddUser">+ Agregar Usuario +</button>

	</div>
	<div id="tblUsuarios">
		<h3>Tabla</h3>
		<?php require_once "../viser.php" ?>
	</div>
</body>
<!-- modal-->

<!-- The Modal -->
<div class="modal" id="AddUser">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Agregar un nuevo Usuario</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" class="flex-container">
        <form action="../api/user.php" method = "POST">
          <div class="input-group p-2">
            <span class="input-group-text">Nombre</span>
            <input type="text" class="form-control" placeholder="Nombre" name="nw_userName" id="nw_userName">
          </div>

          <div class="input-group p-2">
            <span class="input-group-text">Apellidos</span>
            <input type="text" class="form-control" placeholder="Apellidos" name="nw_apellidos"  id="nw_apellidos">
          </div>
          <div class="input-group p-2">
            <span class="input-group-text">RFC</span>
            <input type="text" class="form-control" placeholder="rfc" name="nw_rfc" id="nw_rfc">
          </div>
          <div class="input-group p-2">
            <span class="input-group-text">NickName</span>
            <input type="text" class="form-control" placeholder="Nombre de Usuario" name="nw_nickName" id="nw_nickName">
          </div>
          <label for="userType p-2">Tipo de usuario:</label>
          <select class="form-select mb-3" name="userType" id="userType">> 
            <option value ="Administrador">Administrador</option>
            <option value ="Secretario General">Secretario General</option>
            <option value ="Miembro">Miembro</option>
            <option value ="Visitante">Visitante</option>
          </select>
          
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
      	  <button type="submit" class="btn btn-success" name="btnOpt" value="0">Guardar</button>
      	  
      	</form>

        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"onclick="borrar();">Close</button>
      </div>

    </div>
  </div>
</div>
</html>
<script type="text/javascript">
	function borrar() {
		document.getElementById('nw_userName').value = " ";
		document.getElementById('nw_apellidos').value = " ";
		document.getElementById('nw_rfc').value = " ";
		document.getElementById('nw_nickName').value = " ";
		document.getElementById('userType').value = " ";
		alert("ALL CLEAN");		
	}
</script>