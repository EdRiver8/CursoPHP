<?php
class ConnectionDB
{
    //cadena de conexion definida como constante
    private $db_host;
    private $db_user;
    private $db_password;
    private $db_name;

    /**
     * Constructor vacio de la base de datos, conecta a una base por defecto
     */
    public function __construct()
    {
        $this->db_host = 'localhost';
        $this->db_user = 'root';
        $this->db_password = '';
        $this->db_name = 'pcsw';
    }

    /**
     * Constructor de la base de datos, conecta a la db que se indique
     */
    public function __construct1($db_host, $db_user, $db_password, $db_name)
    {
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_password = $db_password;
        $this->db_name = $db_name;
    }

    /**
     * Funcion que retorna la conexion a la db
     */
    public function connection()
    {
        mysqli_report(MYSQLI_REPORT_STRICT); //evita que se reporte otros errores en la conexion
        try {
            $conn = new mysqli($this->db_host, $this->db_user, $this->db_password, $this->db_name);
            return $conn;
        } catch (mysqli_sql_exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            return null;
        }
    }
}
