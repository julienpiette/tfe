<?php


  $hostname = "mysql51-98.perso";
                $dbUser = "julienpifbase";
                $passwords = "minilogo081";
                $databaseName= "julienpifbase";
                
/*
    $hostname = "localhost";
                $dbUser = "root";
                $passwords = "";
                $databaseName= "julienpifbase";
                */
                try {
                    $db = new PDO("mysql:dbname=$databaseName;host=$hostname", $dbUser, $passwords);
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch(PDOException $e) {
                    echo "Error : " . $e->getMessage();
                }


?>