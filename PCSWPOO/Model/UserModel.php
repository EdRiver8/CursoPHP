<?php

class UserModel
{
    private $connDB; //conexion a la db
    private $Users; //guarda los usuarios

    /**
     * Inicializa los atributos de la clase y se conecta a la DB
     */
    public function __construct()
    {
        require_once("ConnectionDB.php"); //verifica que si se halla cargado el archivo de la conexion
        $this->connDB = new ConnectionDB(); //se crea una instancia de conexion por defecto
        $this->Users = []; // Users guarda todos registros de la db en un arreglo "= array()"
    }

    /**
     * Obtiene la lista de todos los usuarios registrados en la DB
     */
    public function getUsers()
    {
        $query = "SELECT * FROM pcsw.users";
        //Propiedad $connDB, llama metodo connection que devuelve objeto de mysqli y ejecuta metodo query
        $res = $this->connDB->connection()->query($query); //'res' guarda todos los registros de la db

        while ($row = mysqli_fetch_object($res)) {
            $this->Users[] = $row; //cada registro(fila) de la db, lo guardo en el arreglo Users
        }
        //echo json_encode($this->Users); //se muestra la info obtenida en la consulta en objetos tipos json
        return json_encode($this->Users);
        //return $this->Users;
    }

    public function getUser($cedula)
    {
        $query = "SELECT * FROM users WHERE cedula = $cedula";
        $res = $this->connDB->connection()->query($query);
        while ($row = mysqli_fetch_object($res)) {
            $this->Users[] = $row;
        }
        return json_encode($this->Users);
    }
}
