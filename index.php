<!doctype html>
<html>
  <head>
  	<title>TESH</title>
	  <?php require_once "scripts.php"; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/styleL.css">
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(img/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Iniciar sesion</h3>
			      		</div>
			      	</div>
							<form action="#" class="signin-form">
			      		<div class="form-group mt-3">
			      			<input type="text" class="form-control" id="usuario"required>
			      			<label class="form-control-placeholder" for="username">Usuario</label>
			      		</div>
		            <div class="form-group">
		              <input id="password" type="password" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Contraseña</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="btn btn-success rounded submit px-3" id="entrarSistema">Ingresar</button>

		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/mainF.js"></script>
	</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#usuario').val()==""){
				alert("Ingresa el usuario");
				return false;
			}else if($('#password').val()==""){
				alert("Ingresa la contraseña");
				return false;
			}

			cadena="usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"php/login.php",
						data:cadena,
						success:function(r){
							if(r==1){
								window.location="inicio.php";
							}else{
								alert("Verifica tus datos");
							}
						}
					});
		});	
	});
</script>