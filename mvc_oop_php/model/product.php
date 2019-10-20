<?php

class  product{
private $name;
private $description;
private $price;
private $category_id;
private $created;
     function setCreated()
    {
        $date= new DateTime("2000-01-01");
        $this->created=$date->format('Y-m-d H:i:s');
    }
/////////////////////////////////////////////////////////////////////////////////////////////
function create($conn){
         $this->setCreated();
    $sql="INSERT INTO products(name,description,price,category_id)VALUES('$this->name','$this->description',$this->price,$this->category_id)";
//    var_dump($sql);
    $conn->exec($sql);
//    var_dump($conn->exec($sql));
//    echo"sucssefuly insert";
}
////////////////////////////////////////////////////////////////////////////////////////////
function Select($conn){
         $sql="SELECT * FROM products";
           $Result=$conn->query($sql);
//          var_dump($sql);
           $Result2 =$Result->fetchAll(PDO::FETCH_ASSOC);
         return $Result2;
       //    var_dump($Result2);
}
//////////////////////////////////////////////////////////////////////////////////////////
function delete($conn,$id){
    $sql="DELETE FROM products WHERE id=$id";
//         var_dump($sql);
          $conn->exec($sql);
//         echo"query is run ";

}
////////////////////////////////////////////////////////////////////////////////////////
function SeleteOne($conn,$id){
         $sql="SELECT * FROM products WHERE id=$id";
//         var_dump($sql);
        $Fnresult=$conn->query($sql);
    $Result2 =$Fnresult->fetchAll(PDO::FETCH_ASSOC);
    return $Result2;
}
////////////////////////////////////////////////////////////////////////////////////////
/**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }



}

?>
