<?php

// Fonction qui creer un nouveau utilisateur dans la base de donner.
function user_model_insert($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    if (empty($name)) {
        header("Location: index.php?module=user&action=create");
        exit();
    }elseif(empty($username)){
        header("Location: index.php?module=user&action=create");
        exit();
    }elseif(empty($password)){
        header("Location: index.php?module=user&action=create");
        exit();
    }else{
        $password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO utilisateur (nom, username, password, birthday) VALUES ('$name','$username','$password','$birthday')";
        mysqli_query($con, $sql);
        mysqli_close($con);
        }
    }

    ?>