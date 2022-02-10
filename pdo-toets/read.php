  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pdo_toets";
  
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $result = $stm

  ?>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
     <!-- Mijn CSS -->
    <link rel="stylesheet" href="./menu.css">
    
           <table class="table table-hover table-dark">
  <thead>
    <tr>
    <th scope="col"></th>
      <th scope="col">bodemformaat</th>
      <th scope="col">saus</th>
      <th scope="col">pizzatoppings</th>
      <th scope="col">kruiden</th>
    </tr>
  </thead>
  <?php
echo $records;
  ?>