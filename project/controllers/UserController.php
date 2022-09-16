<?php

//Fonction qui affiche les articles sur la page index.
function user_controller_index(){
    require(MODEL_DIR.'/article.php');
    $data = article_model_list();
    //print_r($data);
    render(VIEW_DIR.'/user/index.php', $data);
}

//Fonction qui affiche la page de creation de compte.
function user_controller_create(){
    require(MODEL_DIR.'/user.php');
    render(VIEW_DIR.'/user/create.php');
}

//Fonction qui affiche la page de creation d'un article.
function user_controller_text(){
    require(MODEL_DIR.'/article.php');
    $data = article_model_list();
    render(VIEW_DIR.'/user/text.php', $data);
}

//Fonction qui affiche la page de login.
function user_controller_login(){
    require(MODEL_DIR.'/article.php');
    render(VIEW_DIR.'/user/login.php');
}

//Fonction qui appel la fonction de creation de compte.
function user_controller_insert($request){
    require(MODEL_DIR.'/user.php');
    user_model_insert($request);
    header("Location: ?module=user&action=index");
}

//Fonction qui appel la fonction de creation d'un article.
function user_controller_insertText($request){
    require(MODEL_DIR.'/article.php');
    user_model_text($request);
    header("Location: ?module=user&action=index");
}

//Fonction qui appel la fonction de connexion.
function user_controller_loginUser($request){
    require(MODEL_DIR.'/article.php');
    user_model_login($request);
    header("Location: ?module=user&action=text");
}

// Fonction qui permet appel la fonction delete.
function user_controller_delete($request){
    require(MODEL_DIR.'/article.php');
    user_model_delete($request);
    header("Location: ?module=user&action=text");
}

?>