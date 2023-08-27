<?php
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'webthucchien';
    $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if ( mysqli_connect_errno() ) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    
    if (isset($_POST["email"], $_POST["fullname"], $_POST["address"], $_POST["phone"], $_POST["password"], $_POST["repass"])) {
        if ($_POST["password"] == $_POST["repass"]) {
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $address = $_POST["address"];
            $phone = $_POST["phone"];
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (full_name, email, password, address, phone)
            VALUES ('$fullname', '$email', '$password', '$address', '$phone')";
            $res = mysqli_query($conn, $sql);
            if ($res) {
                header("location:login.html");
                exit();
            }
            else {
                echo "YOU ARE A FUCKING IDIOT, EVEN THE REGISTER PAGE IS BROKEN";
            }
        }
        else {
            echo "Oops, Re-Password is not match";
            header("location:signup.html");
        }
    }
?>