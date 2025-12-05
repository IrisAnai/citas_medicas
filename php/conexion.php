<?php

//Crear clase para la conexion a la base de datos
class Database{
	//Definir atributos para la conexion a la base de datos
	private $_connection; //Variable para crear la instancia de la conexion
	private $_host = "localhost"; //Variable para la ruta del servidor
	private $_user = "root"; //Variable para el nombre de usuario para la cuenta de mysql
	private $_pass = ""; //Variable para la contrasena del usuario para la cuenta de mysql
	private $_db = "citasmedicas"; // Variable para el nombre de la base de datos a la que se va a conectar

	private static $_instancia;

	//Metodos para usar la base de datos

	//Metodo para obtener la instancia de la base de datos
	public static function getInstancia(){
		if(!isset(self::$_instancia)){
			self::$_instancia = new self;
		}
		return self::$_instancia;
	}
	//Metodo para generar la conexion a la base de datos
	public function __construct(){
		$this->_connection = new mysqli($this->_host, $this->_user, $this->_pass, $this->_db);
		if(mysqli_connect_error()){
			trigger_error("Falla en la conexion de la base de datos".mysqli_connect_error(), E_USER_ERROR);
		}
	}

	//Metodo vacio para evitar duplicidad
	private function __close(){
		return $this->_connection;
	}

	public function getConnection(){
		return $this->_connection;
	}

	//Metodo para revisar que el SQL sea un String
	private static function es_string($sql){
		if(!is_string($sql)){
			trigger_error('class.Database.inc : $SQL enviado no es un string! '.$sql);
			return false;
		}
		return true;
	}

	//Metodo para obtener resultado de una consulta a la base de datos
	public static function get_data($sql){//Para consultas que devuelven un valor

		//Comprobamos que sea un query valido
		if (!self::es_string($sql)) {
			exit();
		}
		//Si el query fue valido procedemos con la conexion a la base de datos
		$db = Database::getInstancia();
		$mysqli = $db->getConnection();
		$resultado = $mysqli->query($sql);
		if ($row = $resultado->fetch_assoc()) {
			return $row;
		}
		else{
			return false;
		}
	}
	//Metodo para obtener una consulta a la base de datos
	public static function get_rows($sql){
		//Para consultas que devuelven datos
		if(!self::es_string($sql)){
			exit();
		}
		//Si el query fue valido procedemos con la conexion a la base de datos
		$db = Database::getInstancia();
		$mysqli = $db->getConnection();
		$resultado = $mysqli->query($sql);
		if ($resultado === false) {
			return 'class.Database.class: error '.$mysqli->error;
		}
		else{
			return $resultado;
		}
	}

	//Metodo para administrar la base de datos
	public static function ejecutar_sql($sql){
		if(!self::es_string($sql)){
			exit();
		}
		$db = Database::getInstancia();
		$mysqli = $db->getConnection();
		$resultado = $mysqli->query($sql);
		if ($resultado === false) {
			return 'class.Database.class: error '.$mysqli->error;
		}
		else{
			return true;
		}
	}
}