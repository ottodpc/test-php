<!-- file url = http://localhost:8080/test_php/test.php -->
<!-- <?php  echo "Bonjour php"; ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
  <?php
  
  $variable = "PHP";
  $variable = "PHP";
  $var_isset = isset($variable);
  $var_empty = empty($variable);
  echo $var_empty;
  if( $var_isset && $var_empty != true) echo "Bonjour"." ".$variable;
  else echo "Bonjour"." ".$variable;
  
  ?> 
  </h1>
</body>
</html>