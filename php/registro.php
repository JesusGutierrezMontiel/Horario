<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$user=$_POST['User'];
		$Licenciatura=$_POST['Lic'];
		$Posgrados=$_POST['Pos'];


		if(buscaRepetido($usuario,$password,$conexion)==1){
			echo 2;
		}else{
			$sql="INSERT into docente (Nombre, Licenciatura,Posgrados)
				values ('$user','$Licenciatura','$Posgrados')";
			echo $result=mysqli_query($conexion,$sql);
		}


		function buscaRepetido($user,$conexion){
			$sql="SELECT * from docente
				where docente='$user' ";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}

 ?>