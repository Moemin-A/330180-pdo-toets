<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

        #footer{
             display: none;
        }

        h1 {
            position: relative;
            text-align: center;
        }

        p {
            position: relative;
            text-align: center;
        }

        div {
            position: relative;
            text-align: center;
            margin: auto;   
        }

        select {
            width: calc(30% - 10px);
            padding: 7px 0;
        }

        button {
            width: calc(30% - 10px);
            
        }
        .radioLeft input{
         text-align: left;
          display:inline;
        }
 
    </style>
    <title>PDO Toets</title>
  </head>
  <body>
   

  <header >
    <h1>Maak je eigen pizza</h1>
   
    <form action="./create.php" method="post">
    <div class="container mt-5">
     <br>
        <div class="position-item">
            <div class="center col-12 col-sm-6 name-item">
                <p3 style="margin:auto;">Bodemformaat<span class="required"></span></p3>
                <br>
                <label for="InputBodenformaat" class="form-label"></label>
                <select id="bodemformaat" name="bodemformaat" class="form-control"required>
                    <option value="20cm">20</option>
                    <option value="25cm">25</option>
                    <option value="30cm">30</option>
                    <option value="35cm">35</option>
                    <option value="40cm">40</option>
                </select>
            </div>
            <br>
        <div class="position-item">
            <div class="center col-12 col-sm-6 name-item">
                <p style="margin:auto;">Saus<span class="required"></span></p>
                <label for="InputSaus" class="form-label"></label>
                <select id="saus" name="saus" class="form-control"required>
                    <option value="20cm">Tomatensaus</option>
                    <option value="25cm">Extra tomatensaus</option>
                    <option value="30cm">Spicy tomatensaus</option>
                    <option value="35cm">BBQ saus</option>
                    <option value="40cm">Créme fraiche</option>
                </select>
            </div>
        <br>
        <div class="radioLeft">
        <p style="margin:auto;">Pizzatoppings<span class="required"></span></p>
             <label for="InputPizzatoppings" class="form-label"></label>
            <input type="radio" id="vegan" name="pizzatoppings" value="vegan">
            <label for="vegan">vegan</label><br>
            <input type="radio" id="vegetarisch" name="pizzatoppings" value="vegetarisch">
            <label for="vegetarisch">vegetarisch</label><br>
            <input type="radio" id="vlees" name="pizzatoppings" value="vlees">
            <label for="vlees">vlees</label> 
        </div>
        <br>
        <div class="radioLeft">
        <p style="margin:auto;">Kruiden<span class="required"></span></p>
        <label for="InputKruiden" class="form-label"></label>
            <input type="checkbox" id="peterselie" name="kruiden[]" value="Peterselie">
            <label for="peterselie"> Peterselie</label><br>
            <input type="checkbox" id="oregano" name="kruiden[]" value="Oregano">
            <label for="oregano"> Oregano</label><br>
            <input type="checkbox" id="chilliflakes" name="kruiden[]" value="ChilliFlakes">
            <label for="chilliflakes"> Chilli Flakes</label><br>
            <input type="checkbox" id="zwartepeper" name="kruiden[]" value="ZwartePeper">
            <label for="zwartepeper"> Zwarte Peper</label><br><br>
        </div>

            <div class="btn-block">
                <button type="nav-link" >Versturen</button>

            </div>
    </form>
    </div>

    <br>
  </header>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
