<?php
include_once('config.php');

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $amount=$_POST['amount'];
    $credit_card=$_POST['credit_card'];

    
    if(empty($name)||empty($surname)||empty($email)||empty($country)||empty($amount)||empty($credit_card)){
        echo "You need to fill all the fields";
    }else{
        $sql = "SELECT name FROM users WHERE name=:name";
        $tempSQL = $conn->prepare($sql);
        $tempSQL->bindParam(':name',$name);
        $tempSQL->execute();

        if($tempSQL->rowCount()>0){
            echo "username already exist!";
            header("refresh:2; url=index.php");
        }
        else{
            $sql = "INSERT INTO users (name, surname, email, country, amount, credit_card) VALUES (:name, :surname, :email, :country, :amount, :credit_card)";
            $insertSQL = $conn->prepare($sql);
            $insertSQL ->bindParam(':name',$name);
            $insertSQL ->bindParam(':surname',$surname);
            $insertSQL ->bindParam(':email',$email);
            $insertSQL ->bindParam(':country',$country);
            $insertSQL ->bindParam(':amount',$amount);
            $insertSQL ->bindParam(':credit_card',$credit_card);

            $insertSQL->execute();

            echo "data saved succesfully";
            header("Location:dashboard.php");
        }
    }

}
?>