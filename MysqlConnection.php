<?php
require_once ("IDatabaseConnection.php");
class MysqlConnection implements IDatabaseConnection
{
    private $connection;
  
    private $isConnected = false;
   
    public function __construct()
    {
        // connect to database
        $this->connect();
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    }

    public function connect()
    {
        // set up
        $host = DB['host'];
        $username = DB['username'];
        $password = DB['password'];
        $schema = DB['schema'];
        if ($this->isValidForConnection())
        {
            try {
                // make mysqli object
                $this->connection = new mysqli($host, $username, $password, $schema);
                $this->isConnected = true;
                if ($this->connection->connect_error) throw new DatabaseException("Error connecting to database");
            } catch (mysqli_sql_exception $e) {
                $this->isConnected = false;
                throw new DatabaseException($e->getMessage());
            }
            catch (Exception $ex) {
                $this->isConnected = false;
                throw new ApiException($ex);
            }
        }
    }
   
   public query(){
	   //doing some thing
   }
   
   
}