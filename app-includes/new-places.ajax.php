<?php
error_reporting(0);
           // LOCALHOST
        
        include "../includes/db-connexion.php";


$query = $db->query("SELECT * FROM markers");
$query = $query->fetchAll();
echo json_encode($query);