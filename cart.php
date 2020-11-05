

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
         direction: rtl;
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
         <div id="menucart" class="shadow"></div>
         <div class="text-center">
            <div id="cartbody">
               <div class="m-4 text-center">
                  <h3>سلة التسوق </h3>
               </div>
               <hr>
               <input name="errors" id="errors" type="hidden" value="0">
               <div class="row mt-1 text-center checkoutdiv">
                  <div class="text-center col-2 col-md-3 col-lg-3">المنتج</div>
                  <div class="text-center col-3 col-md-3 col-lg-3">السعر</div>
                  <div class="text-center col-3 col-md-3 col-lg-3">الكمية</div>
                  <div class="text-center col-4 col-md-3 col-lg-3">الاجمالي</div>
               </div>
               <!-- END OF LOOP -->              
               <div class="row mt-2 mb-3 p-2 shadow-sm text-center checkoutdiv  ">
                  <div class="text-center col-12 col-md-12 mb-3 col-lg-12">
                     <div style="float: right;">أيزي سويت 120 جم</div>
                     <div style="float: left;width: 15%;" class=" btn-danger btn btn-sm" onclick="$_removefromCart('5e69b432064cf043b85b14ff','222')">حذف</div>
                  </div>
                  <div class="text-center col-2 col-md-3 col-lg-3"><img class="checkoutimage rounded img-fluid" src="https://souqalfayoum.com//storage/app/products/trTZG3xNQ22A4WzkVj1eXR74MuPExhLglCqnAqhT.jpeg" alt="" border="0"></div>
                  <div class="text-center col-3 col-md-3 col-lg-3">4.5 جنيه</div>
                  <div class="text-center col-3 col-md-3 col-lg-3">
                     <h2>2</h2>
                  </div>
                  <div class="text-center col-4 col-md-3 col-lg-3">4.5 جنيه</div>
               </div>
               <!-- END OF LOOP -->              
               <div class="row mt-2 mb-3 shadow-sm text-center checkoutdiv text-success" style="font-size:20px;">
                  <div class="text-center col-6 col-md-6 col-lg-6">الاجمالي</div>
                  <div class="text-center col-6 col-md-6 col-lg-6">4.5 جنيه</div>
                  <input name="totalx" id="totalx" type="hidden" value="4.5">
               </div>
            </div>
            <div class="m-4 text-center">
               <h3>ادخل بياناتك</h3>
            </div>
            <form role="form" action="https://souqalfayoum.com/cart/confirm" id="sectionb" enctype="multipart/form-data" method="POST">
               <input type="hidden" name="_token" value="1ahhGT48n4nvwPH9MyxV9f6hgMs4Qpcf3emXrqSQ">               
               <div class="row">
                  <div class="col-12 form-group">
                     <input type="text" class="form-control" name="name" id="name" placeholder="الاسم">
                  </div>
                  <div class="col-12 form-group">
                     <input type="text" class="form-control" name="phone"  id="phone" placeholder="رقم الهاتف">
                  </div>
                  <div class="col-12 form-group">
                     <input type="text" class="form-control" name="address" id="address" placeholder="العنوان">
                  </div>
                  <div class="col-12 form-group">
                     <br />
                     <div align="center"> <input type="buttpn" class="btn btn-success btn-lg" id="btnsub" onclick="$_valideteOrder()" value="تأكيد الطلب"></div>
                  </div>
                  <br /><br />
               </div>
            </form>
         </div>
      </div>
      <script src="js/jquery-3.3.1.slim.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>

