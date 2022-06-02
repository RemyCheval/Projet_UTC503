<?php

 //CONSTANT CONFIG DB
            $DBHOST='127.0.0.1';
            $DBUSER='root';
            $DBPASS='';
            $DBNAME= '';



            try {
                $mysqlClient = new PDO("mysql:dbname=".$DBNAME.";host=".$DBHOST, $DBUSER, $DBPASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Connexion refusée:'.$e->getMessage());
                exit;
            }

?>
