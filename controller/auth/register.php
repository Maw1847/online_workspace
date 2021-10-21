<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once ('../../model/users.php');
    $user = new Users();
    $user->addUser($_POST['validationCustom03'], $_POST['validationCustom01'], $_POST['validationCustomUsername'], $_POST['validationCustom01'], $_POST['validationCustom01'], $_POST['validationCustom01'], $_POST['validationCustom01']); 
    
}
    
        
?>