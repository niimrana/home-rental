<?php

require '../config/config.php';
if(empty($_SESSION['username']))
    header('Location: login.php');

    if ( isset($_GET['deleteid'])) {
        $id = $_REQUEST['deleteid'];
        try {
            $stmt = $connect->prepare("DELETE FROM `room_rental_registrations` WHERE `room_rental_registrations`.`id` = $id");
            if($stmt){
                header('Location: list.php');

            }
            
        } catch (PDOException $e) {
            $errMsg = $e->getMessage();
        }
    }




?>