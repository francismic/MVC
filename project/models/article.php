<?php

// fonction qui va chercher les articles dans la base de donner.
function article_model_list(){
    require(CONNEX_DIR);
    $sql = "SELECT * FROM article";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($con);
    return $result;
}


// Fonction qui creer une nouvelle article dans la base de donner.
function user_model_text($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    if (empty($title)) {
        header("Location: index.php?module=user&action=text");
        exit();
    }elseif(empty($text)){
        header("Location: index.php?module=user&action=text");
        exit();
    }else{
        $sql = "INSERT INTO article (titre, textArticle, date) VALUES ('$title','$text','$date')";;
        mysqli_query($con, $sql);
        }
    }

    
// Fonction qui permet de te conencter sur la page de création d'article.
function user_model_login($request){
    session_start();
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }

    $username = $request['username'];
    $password = $request['password'];

    if (empty($username)) {
        header("Location: index.php?module=user&action=login");
        exit();
    }elseif(empty($password)){
        header("Location: index.php?module=user&action=login");
        exit();
    }else{
        $sql = "SELECT * FROM utilisateur WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($con,$sql);

        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && password_verify($row['password'], $password)){
                $_SESSION['nom'] = $user['name'];
                $_SESSION['fingerPrint'] =md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']); 
            }

            print_r($row);
        }else{
            header("Location: index.php?module=user&action=login");
            exit();
        }
    }
}

// function qui delete un article.
function user_model_delete($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "DELETE FROM article WHERE articleId = '$articleId'";
    mysqli_query($con, $sql);
    mysqli_close($con);
}
?>