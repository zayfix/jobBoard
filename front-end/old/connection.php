<?php 

 function connection()
    {
        try
        {
            $db = new PDO("mysql:host=127.0.0.1;dbname=JobBoard", "Cameron","123456789");
            $db->exec('SET NAMES "UTF8"');
        }
        catch(PDOException $e)
        {
            echo "Erreur : " . $e->getMessage();
            die();
        }

        return $db;
    }

   function disconnect()
    {      
        $db = null;

    }
        
?>