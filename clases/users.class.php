<?php 

require_once 'conexion/conexion.php';
require_once 'response.class.php';

class users extends conexion{

	private $nombre = "";
	private $apellidos = "";
	private $rfc = "";
	private $nickName = "";
	private $tipoUsuario = "";

	public function listaUsuarios(){ //listaUsuarios(2) $pagina = 1
		/*$inicio = 0;
		$cantidadItems = 5;
		if($pagina > 1 ){ // val = 2
			$inicio = ($cantidadItems * ($pagina -1));  //(5*(2-1))= 5
 			$cantidadItems = $cantidadItems * $pagina; //5*2 = 10 
		}*/
		$query = "SELECT * FROM userdata"; // limit $inicio,$cantidad;
		$datos = parent::getData($query);
		return ($datos);

	}
	public function buscarUsuarioNombre($userName){ 
		$query = "SELECT * FROM userdata where Name =  '$userName'"; 
		$datos = parent::getData($query);
		return ($datos);

	}

	public function nuevoUsuario($json){
		$nom=$_POST['nw_userName'];
		$ape=$_POST['nw_apellidos'];
		$rf=$_POST['nw_rfc'];
		$nic=$_POST['nw_nickName'];
		$tip=$_POST['userType'];
		$btn=$_POST['btnOpt'];
		$query="INSERT INTO personas (personName,personLastName,personRFC,bActive) VALUES 
		('$nom', '$ape','$rf',1);";
			$id=parent::postDataId($query);
			if($id)
			{
				$query2="INSERT INTO users (personId,user,pass,userType) VALUES ('$id','$nic',md5('$nic'+'2022'),'$tip');";
				$result = parent::postDataId($query2);
				return $result;
			}else{
				return 0;
			}
	}


}

?>