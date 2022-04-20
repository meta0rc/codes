<?php 
    session_start(); 
    $user = $_POST['user'];
    $pass = $_POST['pass']; 
        if((isset($user)) && (isset($pass))){
            if(($user == 'admin') && ($pass == 'BCs@2022')){
                $_SESSION['user'] = $user;
                $_SESSION['pass'] = $pass;
                header('location: id.php'); 
              
            }
            else{
                header('location: index.php'); 
            }
        }
        
        else{
            $_SESSION['loginErro'] = 'Você precisa estar logado para acessar essa pagina ';
            header('location: index.php'); 
        }

?>