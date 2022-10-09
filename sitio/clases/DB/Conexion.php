<?php
namespace App\DB;

use Exception;
use PDO;

class Conexion{

    /** @var PDO */
    protected $db;

    /** @var string */
    protected const DB_HOST = '127.0.0.1';
    /** @var string */
    protected const DB_USER = 'root';
    /** @var string */
    protected const DB_PASS = '';
    /** @var string */
    protected const DB_NAME = 'rodriguez_elsa';

    /**
     * La instancia de PDO a la base de datos.
     *
     * @return PDO
     */
    public function getConexion(): PDO
    {
        $dsn = "mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME . ";charset=utf8mb4";
        try {
            $this->db = new PDO($dsn, self::DB_USER, self::DB_PASS);

            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->db;
            
        } catch(Exception $e) {
            die("Error al conectar con la base de datos.");
        }
    }
}
