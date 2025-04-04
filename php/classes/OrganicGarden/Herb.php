<?php
  class Herb
  {
    public $id_Herb;
    public $herb_Name;
    public $herb_Img;

    public function __construct($id_Herb ,$herb_Name, $herb_Img)
    {
      $this->id_Herb = $id_Herb;
      $this->herb_Name = $herb_Name;
      $this->herb_Img = $herb_Img;
    }

    //setters

    public function setId_Herb($id_Herb)
    {
      $this->id_Herb = $id_Herb;
    }
    
    public function setHerbName($herb_Name)
    {
      $this->herb_Name = $herb_Name;
    }

    public function setHerbImg($herb_Img)
    {
      $this->herb_Img = $herb_Img;
    }

    //getters
    public function getHerbId()
    {
      return $this->id_Herb; 
    }

    public function getHerbName()
    {
      return $this->herb_Name;
    }

    public function getHerbImg()
    {
      return $this->herb_Img;
    }
  }
?>