<?php

class db{	
	
	protected function connect(){
		try {
			$dbConn = 'mysql:host=localhost;dbname=crud;charset=utf8;'; //Cadena de conexión a la BD
			$userName = 'root'; //Nombre de Usuario
			$pwd = ''; //Contraseña 
			$connect = new PDO($dbConn,$userName,$pwd); //Objeto conexión
			$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $connect;	
		} catch (Exception $e) {
			die('Error db(connect) '.$e->getMessage());
		}
	}

	protected function connectMongoDB(){
		try {
            /* No olvidad cambiar la cadena de conexión de acuerdo a su BD: */
           $user = 'webapp';
           $pwd = 'x15JOTJ11HT6yd3b';

           $mongo = new MongoDB\Driver\Manager('mongodb+srv://'.$user.':'.$pwd.'@cluster0-8h8yu.mongodb.net/test?retryWrites=true&w=majority');

           $query = new MongoDB\Driver\Query([  'username'=>  'james75' ]);  
           
           $result = $mongo->executeQuery("sample_analytics.customer", $query);

		   var_dump($mongo);
		    return $mongo;	
		} catch (Exception $e) {
			die('Error db(connect) '.$e->getMessage());
		}
	}
}

?>