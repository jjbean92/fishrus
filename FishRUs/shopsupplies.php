<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Supplies</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<!--- navbar --->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php">Fish R US</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shopfish.php">Shop Fish</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shopsupplies.php">Shop Supplies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="customerlogin.php">Customer Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="distributorlogin.php">Distributor Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php">Cart</a>
            </li>
        </ul>
    </div>
</nav>
<!--- Content enter body here --->
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1>Shop Supplies</h1>
    </div>
</div>
<div class="container">
    <p>Here you can buy all of the fishing supplies that you need. <br><br></p>
</div>

<!--Images and buttons for fish pictures-->
<center>
    <img src='static/img/FishTankSunkShip.jpeg' style="width:190px;height:175px;"> <br>Fish Tank Sunk Ship </img>

    <form action="cart.php" method='post'><center><br>
            Select Quantity
            <input type='number' name='quantity' min='1' max= '99' value='0'><center> <p style='padding-right: 5px;'></p>
                <input type='submit' value='Purchase'><br><br><br>

    </form>

    <img src='static/img/Aquarium.jpeg' style="width:190px;height:175px;"> <br><br>Aquarium </img>

    <form action="cart.php" method='post'><center><br>
            Select Quantity
            <input type='number' name='quantity' min='1' max= '99' value='0'><center> <p style='padding-right: 5px;'></p>
                <input type='submit' value='Purchase'><br><br><br>

    </form>

    <img src='static/img/FishBowl.jpeg' style="width:190px;height:175px;"> <br><br> Fish Bowl </img>

    <form action="cart.php" method='post'><center><br>
            Select Quantity
            <input type='number' name='quantity' min='1' max= '99' value='0'><center> <p style='padding-right: 5px;'></p>
                <input type='submit' value='Purchase'><br><br><br>

    </form>

    <img src='static/img/Filter.jpeg' style="width:190px;height:175px;"> <br><br> Filter </img>

    <form action="cart.php" method='post'><center><br>
            Select Quantity
            <input type='number' name='quantity' min='1' max= '99' value='0'><center> <p style='padding-right: 5px;'></p>
                <input type='submit' value='Purchase'><br><br><br>

    </form>

    <img src='static/img/BeginnersSupplies.jpeg' style="width:190px;height:175px;"> <br><br> Supplies for Beginners </img>

    <form action="cart.php" method='post'><center><br>
            Select Quantity
            <input type='number' name='quantity' min='1' max= '99' value='0'><center> <p style='padding-right: 5px;'></p>
                <input type='submit' value='Purchase'><br><br><br>

    </form>

    <img src='static/img/WaterHeater.jpeg' style="width:190px;height:175px;"> <br><br> Water Heater </img>

    <form action="cart.php" method='post'><center><br>
            Select Quantity
            <input type='number' name='quantity' min='1' max= '99' value='0'><center> <p style='padding-right: 5px;'></p>
                <input type='submit' value='Purchase'><br><br><br>

    </form>

    <img src='static/img/FishNet.jpeg' style="width:190px;height:175px;"> <br><br> Fish Net </img>

    <form action="cart.php" method='post'><center><br>
            Select Quantity
            <input type='number' name='quantity' min='1' max= '99' value='0'><center> <p style='padding-right: 5px;'></p>
                <input type='submit' value='Purchase'><br><br><br>

    </form>

    <img src='static/img/CleaningChemical.jpeg' style="width:190px;height:175px;"> <br><br> Cleaning Chemical </img>

    <form action="cart.php" method='post'><center><br>
            Select Quantity
            <input type='number' name='quantity' min='1' max= '99' value='0'><center> <p style='padding-right: 5px;'></p>
                <input type='submit' value='Purchase'><br><br><br>

    </form>
    <script>
$(document).ready(function(){
    // add to cart button listener
    $('.add-to-cart-form').on('submit', function(){
 
        // info is in the table / single product layout
        var id = $(this).find('.product-id').text();
        var quantity = $(this).find('.cart-quantity').val();
 
        // redirect to add_to_cart.php, with parameter values to process the request
        window.location.href = "add_to_cart.php?id=" + id + "&quantity=" + quantity;
        return false;
    });
});
</script>
</center>
    <!--- Scripting --->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
