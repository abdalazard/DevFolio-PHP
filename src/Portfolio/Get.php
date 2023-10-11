<?php
session_start();
include '../../db/Connection.php';

include 'Portfolio.php';

$userId = $_SESSION['id'] ?? null;
$action = $_GET['action'];

// var_dump($userId, $action);

if($action == "getFormState"){
    $portfolio = new Portfolio;
    $data = $portfolio->getState($userId);
    echo json_encode($data);
    exit();
}

if($action == "getStatus"){
    $portfolio = new Portfolio;
    $data = $portfolio->getStatus($userId);
    echo json_encode($data);
    exit();
}

if($action == "getProfile"){
    $portfolio = new Portfolio;
    $data = $portfolio->getProfile($userId);
    echo json_encode($data);
    exit();  
}

if($action == "getSkills"){
    $portfolio = new Portfolio;
    $data = $portfolio->getSkills($userId);
    echo json_encode($data);
    exit();  
}

if($action == "getProjects"){
    $portfolio = new Portfolio;
    $data = $portfolio->getProjects($userId);
    echo json_encode($data);
    exit();  
}

if($action == "getOthers"){
    $portfolio = new Portfolio;
    $data = $portfolio->getOthers($userId);
    echo json_encode($data);
    exit();  
}
if($action == "getContacts"){
    $portfolio = new Portfolio;
    $data = $portfolio->getSocial($userId);
    echo json_encode($data);
    exit();  
}

?>