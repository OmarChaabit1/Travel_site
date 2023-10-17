<?php

    $cnx = mysqli_connect('localhost','root','','travel');

    if(isset($_POST['send'])){
        $name = $_POST['name']; 
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $adress = $_POST['adress'];
        $location = $_POST['location'];
        $gests = $_POST['gests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];
        
        $request = "INSERT 
                INTO 
                book(name ,email ,phone ,adress ,location ,gests ,arrivals ,leaving)
                values ('$name' ,'$email' ,'$phone' ,'$adress' ,'$location' ,'$gests' ,'$arrivals' ,'$leaving')";
        mysqli_query($cnx,$request); 
        header('location:book.php');
    }
    else 
    {
        echo 'something went wrong , try again'; 
    }
?>