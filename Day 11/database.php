<?php
class Database
{
    private $connection;
    
    // Method for connection database
    public function connect_db()
    {
        $this->connection = mysqli_connect('localhost', 'root', '', 'crud_oop');

        if(mysqli_connect_error())
        {
            die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
        }
    }

    // Method for remove specila caracter from text filed
    public function sanitize($var)
    {
        $return = mysqli_real_escape_string($this->connection, $var);
        return $return;
    }

    // Method for create (Insert) data in tabel
    public function create($fname, $lanme, $email, $gendor, $age)
    {
        // Query
        $sql =  "INSERT INTO `crud` (`first_name`, `last_name`, `gender`, `age`, `email_id`) VALUES ('$fname', '$lanme', '$gendor', '$age', '$email')";

        $result = mysqli_query($this->connection, $sql);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    // Method for read data
    public function read($id = null)
    {
        //return $id;
        $sql = 'SELECT * FROM `crud`';
        if($id)
        {
            $sql .= ' WHERE id='.$id;
        }
        //return $sql;
        $result = mysqli_query($this->connection, $sql);
        return $result;
    }
}
$database =  new Database();
$database->connect_db();
?>