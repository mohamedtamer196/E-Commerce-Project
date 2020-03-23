<?php

      
     /*
      *   
      * This File Include Connection With Database
      *
     */

    $dsn  = 'mysql:host=localhost;dbname=shop2';    
    $user = 'root';                                 
    $pass = '';                                     

    $option = array(                                
        
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',  
    
    );

    try{

        $conn =  new PDO($dsn,$user,$pass,$option);
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "<script> alert('Connected To Database Successfully')</script>";

    }catch(PDOException $e){
         echo 'Faild To Connect' . $e->getMessage();
        echo "<script> alert('Faild To Connect with Database')</script>";
    }

    
?>