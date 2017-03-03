<?php
	session_start();

	//Website Paths
	define('__PathWebsite__', 'camlicious:808/'); //Change to the real URL when uploaded
	define('__PathCSS__',__PathWebsite__.'css');

	class Conexion extends PDO { 
		private $typedb = 'mysql';

		// $dbhost = 'camliciousdb.csjyocujfaj1.us-west-2.rds.amazonaws.com';
		// $dbport = 3306;
		// $dbname = 'camdb';
		// $dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname}";
		// $username = 'camlicious_dba';
		// $password = 'usCam2016';
	
		// private $host = 'camliciousdb.csjyocujfaj1.us-west-2.rds.amazonaws.com';
		// private $dbname = 'camdb';
		// private $user = 'camlicious_dba';
		// private $pass = 'usCam2016';
		private $host = 'localhost';
		private $dbname = 'camdb';
		private $user = 'root';
		private $pass = 'Siolfra28?';
		public function __construct() {
			//Sobreescribo el método constructor de la clase PDO.
			try{
				parent::__construct($this->typedb.':host='.$this->host.';dbname='.$this->dbname, $this->user, $this->pass);
			}catch(PDOException $e){
				echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
				exit;
			}
		}
		public function password($pass){
			$salt = sha1("c4ml!c10u53xXx");
			return crypt($pass, '$2y$10$'.$salt);
		}
		public function generateToken(){
			$salt = sha1("c4ml!c10u53xXx");
			return crypt($salt, '$2y$10$'.$salt);
		}
		public function generateTokenMessages(){
			$salt = sha1("MessagesCamlious.Com/23111991");
			return crypt($salt, '$2y$10$'.$salt);
		}
	}
	require_once $_SERVER['DOCUMENT_ROOT']."/cifrado.php";
	
	$path = $_SERVER['DOCUMENT_ROOT']."/class/";
	$odir = opendir($path);
	while ($file = readdir($odir)){
		if (!is_dir($file) && $file != '.' && $file != '..' && $file != 'PHPMailer' && $file != 'error_log'){
			require_once $path.$file;
		}
	}