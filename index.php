<!doctype html>
<html lang="en">
  <head>
    <title>NFT COLLECTION</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Red+Hat+Text:400,500&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;1,100;1,300;1,400&display=swap" rel="stylesheet">
  </head>
  <body>


  <div class="row">
    <!--Первая колонка-->
    <div class="col-1">
    <div class="user">
      <img src="img/logo.png" alt="" class="logo">
      <ul> 
        <li> <a href="#Dashboard" class="linkactive" style="color:white;"> <img src="img/dashboard.png" alt="#" style="opacity: 1">  Dashboard</a></li>
        <li> <a href="#Wallet"> <img src="img/Wallet.png" alt="#" >  Wallet</a></li>
        <li> <a href="#Trade"> <img src="img/Trade.png" alt="#" >  Trade</a></li>
        <li> <a href="#Market"> <img src="img/market.png" alt="#" >  Market</a></li>
        <li> <a href="#Notification"> <img src="img/Notification.png" alt="#" >  Notification</a></li>
        <li><a href="#Settings"> <img src="img/Settings.png" alt="#" >  Settings</a></li>
        <li><a href="#EXIT"> <img src="img/logout.png" alt="#" >  Log out</a></li>
      </ul>
    </div>
    </div>
    <!--Вторая колонка-->
    <?php require "dashboard.php" ?>
    <!--Третья колонка-->
    <?php require "info.php" ?>
  </div>



      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/main.js"></script>
    <script src="js/js.js"></script>
    <script src="js/modal.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>