<?php

function submit()
{
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    session_start();
    $userID = $_POST["user_id"];
    $msg = htmlentities($_POST["mess"]);

    require_once('./app/core/models/messageModel.php');
    insert($msg, $userID);
}

function findAllMsg()
{
    require_once('./app/core/models/messageModel.php');
    $allMsg = getAll();
    return $allMsg;
}

function APIfindAllMsg()
{
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    require_once('./app/core/models/messageModel.php');
    $allMsg = getAll();
    echo json_encode($allMsg);
}