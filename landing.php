<?php
require_once './connect.php';
$em = $_GET['em'];
$sql = "SELECT * FROM users WHERE email='$em'";

$getData = $db->query($sql);

$user = $getData->fetch();

//    print_r( $user);
?>

<?php

// echo "landing welcome $_GET['fname'] ,$_GET['em']";
echo "welcome ";
echo $user['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
</body>
</html>
<div class="card" style="width: 18rem;">
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body">
    <h5 class="card-title">welcome <?php echo $user['fname']?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>