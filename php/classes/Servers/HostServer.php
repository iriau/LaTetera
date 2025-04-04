<?php

  include('DefaultHostServerValues.php');

  class HostServer implements DefaultHostServerValues
  {
    public $serverIp;
    public $serverName;
    public $serverDescription;


    public function __construct($serverIp = null, $serverName= null, $serverDescription = null)
    {
      if ($serverIp!=null && ($serverName!=null || $serverDescription!=null))
      {
        $this->serverIp = $serverIp;
        $this->serverName = $serverName;
        $this->serverDescription = $serverDescription;
      }
      else{
        $this->settingUpServer();
      }
    }
    
    public function setDefaultValues()
    {
      $this->serverIp = 'x.y.z.net'; 
      $this->serverName = 'DataBase_HostServer_Test';
      $this->serverDescription = 'DataBase Server Test';
    }

    private function settingUpServer(){
      $this->setDefaultValues();
    }

    public function getServerIp()
    {
      return $this->serverIp;
    }

    public function getServerName()
    {
      return $this->serverName;
    }

    public function getServerDescription()
    {
      return $this->serverDescription;
    }
  }
?>