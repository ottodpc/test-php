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
  
  // $variable = "PHP";
  // $variable = "PHP";
  // $var_isset = isset($variable);
  // $var_empty = empty($variable);
  // echo $var_empty;
  // if( $var_isset && $var_empty != true) echo "Bonjour"." ".$variable;
  // else echo "Bonjour"." ".$variable;
  
  // echo "<br>";
  // # array
  // $array = array("1", "2", "3", "4");
  // $array_in_array = array(
  //   array("1", "2", "3", "4"),
  //   array("A", "B", "C", "D"),
  // );
  // $array_length = count($array);
  // for ($i=0; $i < $array_length; $i++) { 
  //   # print array element
  //   echo $array[$i].", ";
  // }
  // echo "<br>";
  // for($i=0; $i<count($array_in_array); $i++){
  //   echo "<br>";
  //   for($j=0; $j<count($array_in_array[$i]); $j++){
  //     echo $array_in_array[$i][$j].", ";
  //   }
  //   echo "<br>";
  // }
  // echo "<br>";
  // # NOTE associative array
  // $associative_array = array("France"=>"Paris", "Tacos"=>"Viande", "Pizza"=>"4 Fromages");
  // foreach ($associative_array as $key => $value) {
  //   echo "La clé du tableau est ".$key." et sa valeur est ".$value.". ";
  // }

  $file_url = "http://localhost:8080/test_php/test.php";
  $position_3 = strpos("bonjour php", "php");
  echo $position_3;
  if($position_3 === 8) {header("Location:page2.php?info=yes_redirected&from=test"); exit();}

  ?> 
  </h1>
</body>
</html>