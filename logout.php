<?php 

    session_start();
    
    unset($_SESSION["usuario"]);  // serve para sair da sessão de login
    unset($_SESSION["nome"]); 
    unset($_SESSION["tipo"]);
    
    session_destroy();
    header("location: index.php");  // direciona o usuário para a página index.php
    exit();