<?php
if($_SERVER["REQUEST_METHOD"] =='POST'){
    if($_POST['page'] == 'login' || $_POST['page'] =='signup'){
        require './views/Auth/'.$_POST['page'].'.php';
    }
}else{
    require './views/welcome.php';
}
?>