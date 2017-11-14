<?php

class MySQL {

    private $dbHost;
    private $dbPort;
    private $dbUser;
    private $dbPass;
    private $dbName;
    private $dbConnection;

    function __construct($host, $port, $user, $pass, $db) {
      $this->dbHost = $host;
      $this->dbPort = $port;
      $this->dbUser = $user;
      $this->dbPass = $pass;
      $this->dbName = $db;
    }

    private function stillAlive() {
      if($this->dbConnection != null && $this->dbConnection->ping()) {
        return true;
      }else{
        return false;
      }
    }

    public function openConnection() {
      if($this->dbConnection != null) { $this->dbConnection->close(); }

      $mysqli = new mysqli($this->dbHost . ':' . $this->dbPort, $this->dbUser,$this->dbPass, $this->dbName);

      if($mysqli->connect_error){
        $this->dbConnection = null;
        die('<center><br><h2 style="font-family: Helvetica; font-weight: normal;"><b>Database Connection Error:</b> <br>' . $mysqli->connect_error . '<br>' . $mysqli->connect_errno . '</center>');
      }else{
        $this->dbConnection = $mysqli;
        //echo 'Database connection was successfull.<br>';
      }
    }

    public function closeConnection() {
      if($this->dbConnection != null) {
        $this->dbConnection->close();
      }
    }

    public function query($query) {
      $this->openConnection();
      if($this->stillAlive()) {
        if($result = $this->dbConnection->query($query)){
          return $result;
          $result->close();
          $this->closeConnection();
        }else{
          $this->closeConnection();
          die('<center><br><h2 style="font-family: Helvetica; font-weight: normal;"><b>Database Query Error:</b> <br>' . $this->dbConnection->error . '</center>');
        }
      }else{
        $this->closeConnection();
        die('<center><br><h2 style="font-family: Helvetica; font-weight: normal;"><b>Database Query Error:</b> <br> Attempted to query database while database is closed.</center>');
      }
    }


}

?>
