<?php
    class conn{
        public function DBConnect(){
			$dbhost = 'localhost'; 
			$dbname = 'uas202410102003'; 
			$dbuser = 'root'; 
            $dbpass = '';  

			try {
				$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
				$dbConnection->exec("set names utf8");
                $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return  $dbConnection;
			}
			catch (PDOException $e) {
				return 'Connection failed: ' . $e->getMessage();
			}
		}
	}
?>