<?php 
class DbConfig
{
    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = '';
    private $_database = 'crud_oop';

    protected $connection;

    public function __construct()
    {
        if(!isset($this->connection))
        {
            $this->connection = new mysqli(
                $this->_host,
                $this->_username,
                $this->_password,
                $this->_database
            );

            if(!$this->connection)
            {
                echo "Connot connect to database server";
                exit;
            }
        }

        return $this->connection;
    }
}
?>