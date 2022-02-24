<?php

    $conn = new PDO("mysql:host=localhost; dbname=book_db", "noos", "Step-64");

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        $stmt = $conn->prepare("INSERT into book-form(name, email, phone, address, location, guests, arrivals, leaving) 
                    values('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')");

        $book = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        header('location: book.php');
    }else{
        echo 'something went wrong try again';
    }

?>