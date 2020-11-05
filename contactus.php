

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title>
         Online Shop - Home Page
      </title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/ecommerce.css">
      <style>
         body{
         }
      </style>
      <!-- START LAYOUT-2 LOGO AND MENU -->
   </head>
   <body class="">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
         <a class="navbar-brand" href="index.php">eCommerce</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="index.php">الصفحة الرئيسية <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link" href="cart.php">سلة التسوق</a>
               </li>
               <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  الاقسام
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="categorie.php">هواتف محمولة</a>
                  </div>
               </li>
               <li class="nav-item active">
                  <a class="nav-link" href="contactus.php">اتصل بنا</a>
               </li>
            </ul>
         </div>
      </nav>
      <br>
      <br>
      <br>
      <br>
   

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-info text-white"><i class="fa fa-envelope"></i> اتصل بنا
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">اسمك</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="ادخل اسمك" required>
                        </div>
                        <div class="form-group">
                            <label for="email">البريد الالكتروني</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="ادخل البريد الالكتروني" required>
                        </div>
                        <div class="form-group">
                            <label for="message">نص الرسالة</label>
                            <textarea class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-dark btn-block">ارسال</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                <div class="card-body">
                    <p>3 rue des Champs Elysées</p>
                    <p>75008 PARIS</p>
                    <p>Country</p>
                    <p>Email : email@example.com</p>
                    <p>Tel. +33 12 56 11 51 84</p>

                </div>

            </div>
        </div>
    </div>
</div>

       
      <script src="js/jquery-3.3.1.slim.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>

