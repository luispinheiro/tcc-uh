<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "tcc";


$id = 5;
try {
  $conn = new PDO('mysql:host=$serverName;dbname=$dbname', $username, $password);
  $stmt = $conn->prepare('SELECT * FROM sensores WHERE id = :id');
  $stmt->execute(array('id' => $id));

  $result = $stmt->fetchAll();

  if ( count($result) ) {
    foreach($result as $row) {
      print_r($row);
    }
  } else {
    echo "Nennhum resultado retornado.";
  }
} catch(PDOException $erro) {
    echo 'Falha da conexão com o banco de dados!: ' . $erro->getMessage();
}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    
 </body>
 </html>