<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bejelentkezés</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<?php
  
?>
<form action="menu.php?page=login" method="post">
		<div class="mb-3">
			<label for="username" class="form-label">Felhasználónév</label>
			<input type="text" name="username" id="username" class="form-control" value="Felhasználónév">
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Jelszó</label>
			<input type="password" name="password" id="password" class="form-control" value="Jelszó">
		</div>
		<input type="submit" value="Bejelentkezés" class="btn btn-primary">
		<a href="menu.php?page=add" class="btn btn-primary">Létrehozás</a>
	</form>
	<br>



	<?php
			if(isset($_POST['username']) && isset($_POST['password']) && $_GET['page'] == 'login' && $add == 0)
			{
				require_once("api_bk/db_connect.php");
				require_once("api_bk/get_login_details.php");

				if($result->num_rows > 0)
				{
					while($row = $result->fetch_assoc()) {
						header("Location: menu.php?page=main");
					}
				} else
				{
					echo '
					<div class="alert alert-warning" role="alert">
						Helytelen bejelentkezési adatok!
					</div>
					';
				}
			}
			/*
			if(isset($_POST['username']) && isset($_POST['password']) && $_GET['page'] == 'add')
			{
				header("Location: menu.php?page=add");
			}
			*/
			if (isset($_POST['username']) && isset($_POST['password']) && $add == 1)
			{
				require_once("api_bk/db_connect.php");
				require_once("api_bk/user_creation.php");
			
		
				if ($result->num_rows == 0 && $conn->query($sql) == TRUE)
				{
					echo '<div class="alert alert-success">Sikeres létrehozás!</div>';
					//$add = 0;
				} else
				{
					echo '<div class="alert alert-warning">Ilyen felhasználó már létezik!</div>';
					//$add = 0;	
				}
			}

		?>


    
</body>
</html>






