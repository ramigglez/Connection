<?php

class Connection {

    private PDO $connection;
    private array $setting = [
        'driver' => 'mysql',
        'host' => 'localhost',
        'data_base' => 'web',
        'port' => '3306',
        'password' => '',
        'user_name' => 'root',
        'charset' => 'utf8mb4'
    ];

    public function __construct (array $setting = [
        'driver' => 'mysql',
        'host' => 'localhost',
        'data_base' => 'web',
        'port' => '3306',
        'password' => '',
        'user_name' => 'root',
        'charset' => 'utf8mb4'
    ]) {
        $this->setting = $setting;
    }

    public function connect (int $mssg = 0) {
        try {
            $CONTROLLER = $this->setting['driver'];
            $SERVER = $this->setting['host'];
            $DATABASE = $this->setting['data_base'];
            $PORT = $this->setting['port'];
            $USER = $this->setting['user_name'];
            $PASSWORD = $this->setting['password'];
            $CHARSET = $this->setting['charset'];
            //cadena de conexion 
            $stringConnection = new Strings(
                "{$CONTROLLER}:host={$SERVER}:{$PORT};". 
                "dbname={$DATABASE};charset={$CHARSET}"
            );
            //crear conexion
            $this->connection = new PDO($stringConnection->getTxt(), $USER, $PASSWORD);
            $stringConnection->setTxt('Connected.');
            if ($mssg === 1) {
                echo $stringConnection->getTxt();
            }else{
                return $this->connection;
            }
        } catch (Exception $e) {
            $error = new Strings(
                'ERROR : No Connection.
                <pre>'
                .$e->getTraceAsString().
                '</pre>'
            );
            echo $error->getTxt();
        }
    }

    //SETTERS
    public function set_driver (string $x) {
        $this->setting['driver'] = $x;
    }
    public function set_host (string $x) {
        $this->setting['host'] = $x;
    }
    public function set_data_base (string $x) {
        $this->setting['data_base'] = $x;
    }
    public function set_port (string $x) {
        $this->setting['port'] = $x;
    }
    public function set_password (string $x) {
        $this->setting['password'] = $x;
    }
    public function set_user_name (string $x) {
        $this->setting['user_name'] = $x;
    }
    public function set_charset (string $x) {
        $this->setting['charset'] = $x;
    }
    //GETTERS
    public function get_driver () {
        return $this->setting['driver'];
    }
    public function get_host () {
        return $this->setting['host'];
    }
    public function get_data_base () {
        return $this->setting['data_base'];
    }
    public function get_port () {
        return $this->setting['port'];
    }
    public function get_password () {
        return $this->setting['password'];
    }
    public function get_user_name () {
        return $this->setting['user_name'];
    }
    public function get_charset () {
        return $this->setting['charset'];
    }

}