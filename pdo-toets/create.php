<?php
var_dump($_POST);exit();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO pizza (id, bodemformaat, saus, pizzatoppings, kruiden)
    VALUES (id: :bodemformaat, :saus, :pizzatoppings, :kruiden)");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':bodemformaat', $bodemformaat);
    $stmt->bindParam(':saus', $saus);
    $stmt->bindParam(':pizzatoppings', $pizzatoppings);
    $stmt->bindParam(':kruiden', $kruiden);
  
 
    $id = NULL;
    $bodemformaat = $_POST["bodemformaat"];
    $saus = $_POST["saus"];
    $pizzatoppings = $_POST["pizzatoppings"];
    $kruiden = $_POST["kruiden"];
    
    $stmt->execute();
  
    echo "New records created successfully";
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;

?>