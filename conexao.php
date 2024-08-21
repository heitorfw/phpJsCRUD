<?php
    $host= "localhost";
    $user = "root";
    $pass = "";
    $dbname = "crud";
    $port= "3306";

    try{
        $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
        //echo "conexao com o banco de dados feita com sucesso!";
    }catch(PDOException $err){
        echo "erro de conexao com banco de dados nao foi feita com sucesso" . $err->getMessage
        ();
    }



?>