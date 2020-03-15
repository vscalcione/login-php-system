<?php

    /* The help.php file is included which contains the two functions for validating
       the fields entered by the user (text, email)
    */
    require('helper.php');

    //error variable
    $error = array();

    /* First name field validation with a error message if the field is empty */
    $firstName = validate_input_text($_POST['firstName']);
    if(empty($firstName)){
        $error[] = "Hai dimenticato di inserire il tuo nome";
    }

    /* Last name field validation with a error message if the field is empty */
    $lastName = validate_input_text($_POST['lastName']);
    if(empty($lastName)){
        $error[] = "Hai dimenticato di inserire il tuo cognome";
    }

    /* Born date field validation with a error message if the field is empty */
    $bornDate = validate_input_text($_POST['dataNascita']);
    if(empty($bornDate)){
        $error[] = "Hai dimenticato di inserire la tua data di nascita";
    }

    /* Email field validation with a error message if the field is empty */
    $email = validate_input_email($_POST['email']);
    if(empty($email)){
        $error[] = "Hai dimenticato di inserire la tua E-mail";
    }

    /* Password field validation with a error message if the field is empty */
    $password = validate_input_email($_POST['password']);
    if(empty($password)){
        $error[] = "Hai dimenticato di inserire password";
    }

    /* Confirm password field validation with a error message if the field is empty */
    $confirmPassword = validate_input_email($_POST['confirmPassword']);
    if(empty($confirmPassword)){
        $error[] = "Hai dimenticato di inserire la password di conferma";
    }

    if(empty($error)){
        //register a new user
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        require('mysqli_connect.php');

        //make a query
        $query = "INSERT INTO user(user_id, first_name, last_name, email, password, profile_image, register_date) VALUES ('', ?, ?, ?, ?, ?, NOW())";
        $variable = mysqli_stmt_init($connection);

    }else{
        echo 'not validate';
    }