<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kezdőlap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</head>
<body>

<?php
  $add = 0;
  if (isset($_GET['add']) && $_GET['add'] == 1)
  {
    $add = 1;
  }
  $page = 'login';
  if (isset($_GET['page']) && $_GET['page'] == 'main'){
		$page = 'main';
  }
  if (isset($_GET['page']) && $_GET['page'] == 'add'){
		$page = 'add';
  }
  if (isset($_GET['page']) && $_GET['page'] == 'huto')
  {
    $page = 'huto';
  }
  if (isset($_GET['page']) && $_GET['page'] == 'plus')
  {
    $page = 'plus';
  }
  if (isset($_GET['page']) && $_GET['page'] == 'take')
  {
    $page = 'take';
  }

  if (isset($_GET['page']) && $_GET['page'] == '1'){
		$page = '1';
  }
  if (isset($_GET['page']) && $_GET['page'] == '2'){
		$page = '2';
  }
  if (isset($_GET['page']) && $_GET['page'] == '3'){
		$page = '3';
  }
  if (isset($_GET['page']) && $_GET['page'] == '4'){
		$page = '4';
  }
  if (isset($_GET['page']) && $_GET['page'] == '5'){
		$page = '5';
  }
  if (isset($_GET['page']) && $_GET['page'] == '6'){
		$page = '6';
  }
  if (isset($_GET['page']) && $_GET['page'] == '7'){
		$page = '7';
  }
  if (isset($_GET['page']) && $_GET['page'] == 'add_prod')
  {
    $page = 'add_prod';
  }

  include('pages_bk/header.php');

  if ($page == 'add_prod')
  {
    include('pages_bk/bk_huto.php');
  }
  if ($page == 'login')
  {
    include('pages_bk/login.php');
  }
  if ($page == 'main')
  {
    include('pages_bk/main.php');
  }

  if ($page == 'add')
  {
    include("pages_bk/create_user.php");
  }
  if ($page == 'huto')
  {
    include('pages_bk/bk_huto.php');
  }
  if (strlen($page) == 1)
  {
    include('pages_bk/dist_shelves.php');
  }
  if ($page == 'plus')
  {
    require_once('api_bk/plus.php');
    require_once('pages_bk/dist_shelves.php');
  }
  if ($page == 'take')
  {
    require_once('api_bk/take.php');
    require_once('pages_bk/dist_shelves.php');
  }

  include('pages_bk/footer.php');

?>

</script>

</body>
</html>