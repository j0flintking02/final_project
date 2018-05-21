<?php
    
    if (isset($_POST['submit'])) {
        
        include_once 'connection.inc.php';

        $fName = mysqli_real_escape_string($conn, $_POST['fName']);
        $lName = mysqli_real_escape_string($conn, $_POST['lName']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['pass']);
        
        //Hashing the password the has been inserted into the form
        $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
        
        //inserting in to the table customers
        $sql = "INSERT INTO customers (firstName, lastName, cusPass, email) 
                VALUES('$fName', '$lName', '$hashedPwd', '$email')";
        $result = mysqli_query($conn, $sql);
            header("Location: ../index.php?register=success");
            exit();
        
    }else {
        header("Location: ../index.php?register=error");
        exit();
    }
?>


