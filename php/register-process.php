<?php

    require('helper.php');

    //error variable
    $error = array();

    $firstName = validate_input_text($_POST['firstName']);
    if(empty($firstName)){
        $error[] = "Hai dimenticato di inserire il tuo nome";
    }

    $lastName = validate_input_text($_POST['lastName']);
    if(empty($lastName)){
        $error[] = "Hai dimenticato di inserire il tuo cognome";
    }

    $bornDate = validate_input_text($_POST['dataNascita']);
    if(empty($bornDate)){
        $error[] = "Hai dimenticato di inserire la tua data di nascita";
    }

    $email = validate_input_email($_POST['email']);
    if(empty($email)){
        $error[] = "Hai dimenticato di inserire la tua E-mail";
    }

    $password = validate_input_email($_POST['password']);
    if(empty($password)){
        $error[] = "Hai dimenticato di inserire password";
    }

    $confirmPassword = validate_input_email($_POST['confirmPassword']);
    if(empty($confirmPassword)){
        $error[] = "Hai dimenticato di inserire la password di conferma";
    }

    if(empty($error)){
        //register a new user
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        require('mysqli_connect.php');

        //make a query
        $query = "INSERT INTO user(user_id, first_name, last_name, email, password, profile_image, register_date)";
        $query .= "VALUES ('', ?, ?, ?, ?, ?, NOW())";

        $variable = mysqli_stmt_init($connection);
    }else{
        echo 'not validate';
    }
