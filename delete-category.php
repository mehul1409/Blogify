<?php 
session_start();
require 'database.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $update_query = "update posts set category_id =  8 where category_id = $id";
    $update_result = mysqli_query($conn, $update_query);

    if(!mysqli_errno($conn)){
        $query = "delete from category where id = $id";
        $result = mysqli_query($conn, $query);
        $_SESSION['delete-category-success'] = "category deleted successfully";
    }

}

header("location:" .'manage-categories.php');
die();