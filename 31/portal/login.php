		<?php
		    session_start();
		?>
		<!DOCTYPE html>
		<html lang="pt-br">
		<head>
			<title>FACA LOGIN AQUI</title>
		<!----------------------------------------- HEAD ---------------------------->
			<?php include 'login/include-login/head.php'; ?>
        <!----------------------------------------- HEAD ---------------------------->
			
		</head>
		<body>
		<!----------------------------------------- HEADER ---------------------------->
			<?php include 'login/include-login/header.php'; ?>
        <!----------------------------------------- HEADER ---------------------------->
			
			<div class="limiter">
				<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
					<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
						<form class="login100-form validate-form" method= "POST" action= "autentica.php">
							<span class="login100-form-title p-b-49">
								Bem vindo!
							</span>

							<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
								<span class="label-input100">Nome de usuario</span>
								<input class="input100" type="email" name="email" placeholder="Use o seu email">
								<span class="focus-input100" data-symbol="&#xf206;"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate="Password is required">
								<span class="label-input100">senha</span>
								<input class="input100" type="senha" name="senha" placeholder="Senha">
								<span class="focus-input100" data-symbol="&#xf190;"></span>
							</div>
							
							<div class="text-right p-t-8 p-b-31">
								<a href="login">
									Esqueceu a senha??
								</a>
							</div>
							<?php
							    if(isset($_SESSION['nao_autenticado'])):
							?>
								<div class="input100 validate-input m-b-18">
									<div class="alert alert-danger" role="alert">
									<center> Usuario ou senha invalidos </center>
									</div>
							 	</div>
							<?php
								endif;
								unset($_SESSION['nao_autenticado']);
							?>

							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn">
										Login
									</button>
								</div>
							</div>

							<div class="txt1 text-center p-t-54 p-b-20">
								<span>
									Or Sign Up Using
								</span>
							</div>

							<div class="flex-c-m">
								<a href="#" class="login100-social-item bg1">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="login100-social-item bg2">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="login100-social-item bg3">
									<i class="fa fa-google"></i>
								</a>
							</div>

							<div class="flex-col-c p-t-155">
								<span class="txt1 p-b-17">
									Or Sign Up Using
								</span>

								<a href="#" class="txt2">
									Sign Up
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
			

			<div id="dropDownSelect1"></div>
			
		

		<footer>
        <!----------------------------------------- FOOTER ---------------------------->
        <?php include 'login/include-login/footer.php'; ?>
        <!----------------------------------------- FOOTER ---------------------------->
        <footer>

		</body>
		</html>