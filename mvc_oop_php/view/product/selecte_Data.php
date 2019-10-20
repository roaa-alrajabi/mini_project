<?php
include("../Database/Database.php");
include ("../model/product.php");

$db= new Database();
$conn= $db->connect();
if(isset($_GET['delete'])) {
//    var_dump($_GET['delete']);
//    echo "delete";
//    var_dump($value['id']);
    $product = new Product();
    $id= $_GET['delete'];
//    var_dump($id);
    $product->delete($conn, $id);
}
//////////////////////////////////////////////
if(isset($_GET['edit'])){
    $product = new Product();
    $id= $_GET['edit'];
//    echo"sucessfuly prosses";
    $product->SeleteOne($conn,$id);
//        header("location:editing.php");
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> select</title>
</head>
<body>
<table border="1px">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>description</th>
        <th>price</th>
        <th>category_id</th>
        <th>created</th>
        <th>modified</th>
        <th>delete</th>
        <th>edit</th>
    </tr>
        <?php
         $product=new Product();
         $data = $product->Select($conn);
//        foreach($data as $key => $element){
//                 echo"<tr>";
//             foreach ($element as$value){
//                    echo"<td>$value</td>";
//
//             }
//             var_dump($element['id']);
/*                  echo"<td ><form method='GET'><button name="delete" value=<?php echo $value['id']?>>delete</button></form></td>";*/
//<!--//            echo"<td ><form><button>editing</button></form></td>";-->
//<!---->
//<!--            echo"</tr>";-->
//<!--//         }-->
//<!--        ?<!---->-->

            foreach ($data as $value){
//                var_dump($value['id']);
                ?>
                <tr>
                <td><?php echo $value['id']?></td>
                <td><?php echo $value['name']?></td>
                <td><?php echo $value['description']?></td>
                <td><?php echo $value['price']?></td>
                <td><?php echo $value['category_id']?></td>
                 <td><?php echo $value['created']?></td>
                 <td><?php echo $value['modified']?></td>
                 <td><form method='GET' action="<?php echo $_SERVER['PHP_SELF'] ?>"><button name="delete" value=<?php echo $value['id']?>>delete</button></form></td>
                    <td><a type="button"name="delete"  href="editing.php?id=<?php echo $value['id']?>">editng</a></td>
<!--                    <button  name="edit" value=--><?php //echo $value['id']?>
<!--                    <a href='selecte_Data.php?id=--><?php //echo $value['id']?><!--'</a>-->
                </tr>
                <?php
            } ?>

</table>
</body>
</html>
