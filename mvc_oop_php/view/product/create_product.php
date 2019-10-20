
 <?php
   include("../Database/Database.php");
   include ("../model/product.php");
   $db=new Database();
   $connection = $db->connect();
     ?>
 <html>
 <head>
     <meta charset="UTF-8">
     <meta name="viewport"
           content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>
 <body>
 <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
     <div class="container m-6 w25   ">
         <label for="exampleInputname">name</label>
         <input type="text"  class="form-control" placeholder="Enter name" name="name">
     </div>
     <div class="container m-6 w75">
         <label for="exampleInputdescription">description</label>
         <input type="text" class="form-control"  placeholder="description" name="description">
     </div>
     <div class="container m-6 w75">
         <label for="exampleInputprice">price</label>
         <input type="number" class="form-control" min="1"  placeholder="price" name="price">
     </div>
     <div class="container m-6 w75">
         <label for="exampleInputdescription">category_id</label>
         <select class="custom-select" name="select">
             <option selected>Choose...</option>
             <option value="1">One</option>
             <option value="2">Two</option>
             <option value="3">Three</option>
         </select>
         <div class="container m-6 w75">
             <label for="exampleInputdata">data</label>
             <input type="date" class="form-control"   placeholder="data" name="date">
         </div>

     </div>
     <?php
     if(isset($_POST["Add"])){
         $Product= new product();
         $Product->setName($_POST["name"]);
         $Product->setDescription($_POST["description"]);
         $Product->setPrice($_POST["price"]);
         $Product->setCategoryId($_POST["select"]);
         $Product->setCreated();
         $Product->create($connection);
     }
     ?>
     <button type="submit" name="Add"class="btn btn-primary mb-2">Add product</button>
 </form>


 </body>
 </html>

