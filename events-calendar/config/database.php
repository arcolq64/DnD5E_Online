<?php
class Database {
	private static $db 		= 'arcwebde_fb_sched'; 
	private static $host 	= 'localhost';
	private static $user 	= 'arcwebde_admin';
	private static $pass 	= 'Arc2018Sda';
	
	private static $cont = null;
	
	public function __construct() {
		exit('Init function is not allowed');
	}
	
	public static function connect() {
		// One connection through whole application
		if (null == self::$cont) {
			try {
				self::$cont = new PDO('mysql:host=' . self::$host . ';' . 'dbname=' . self::$db, self::$user, self::$pass);
			} catch (PDOException $e) {
				die($e->getMessage());
			}
		}
		return self::$cont;
	}
	
	public static function disconnect() {
		self::$cont = null;
	}
}