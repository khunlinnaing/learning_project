<?php
if($_SERVER["REQUEST_METHOD"] =='POST'){
    if($_POST['page'] == 'login' || $_POST['page'] =='signup'){
        require './Auth/'.$_POST['page'].'.php';
    }
}else{
    require './welcome.php';
}
?>