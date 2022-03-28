<?php
class Database{

public function __construct(){
try {
$this->mysql=$this->conectar();
//echo 'Conexion exitosa';
} catch (PDOException $excepcion) {
echo 'Error de conexion' . $excepcion->getMessage();
} 
}

function conectar(){

$hostname ='localhost';
$database = 'Visita';
$username ='root';
$password ='';
$charset='utf-8';


//PDO mysqli
$options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
$pdo =new pdo("mysql:host={$hostname}; dbname={$database};charset{$charset}", $username, $password, $options);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $pdo;

}
}

?> 