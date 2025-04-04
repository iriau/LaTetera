<?php
  
  include('HostServer.php');
  
  class DataBaseServer
  {

    public $User;
    public $Password;
    public $Port;
    public $DataBaseName;
    
    private $hostServer;

    public function __construct($User, $Password, $Port, $DataBaseName, $serverIp = null, $serverName= null, $serverDescription = null)
    {
      $this->User = $User;
      $this->Password = $Password;
      $this->Port = $Port;
      $this->DataBaseName = $DataBaseName;
      $this->hostServer = new HostServer($serverIp, $serverName, $serverDescription);
    }

    // Host Server
    public function getHostServer(){
      $hostServer = new HostServer();
      return $hostServer;
    }

    // DataBase
    public function getUser(){
      return $this->User;
    }

    public function getPassword(){
      return $this->Password;
    }

    public function getPort(){
      return $this->Port;
    }

    public function getDataBaseName(){
      return $this-> DataBaseName;
    }
  }
?>


